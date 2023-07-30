<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tel = $_POST['tel_user'];
    $pass = $_POST['passe_user'];

    $fileName = $tel . '.json';

    if (!file_exists($fileName)) {
        echo "<script>alert('Telephone number not found. Please check your credentials or sign up.');</script>";
    } else {
        $jsonData = file_get_contents($fileName);
        $userData = json_decode($jsonData, true);

        // Verify if the password exists for this user
        if (!isset($userData['password'])) {
            echo "<script>alert('Password not found for this user.');</script>";
            exit();
        }

        // Verify the password
        if (($pass === $userData['password'])) {
            // Password is correct, get the userID
            $userID = $userData['id'];

            // Redirect to home.html or any other page
            header("Location: home.php?userID=" . $userID);
            exit();
        } else {
            // Incorrect password
            echo "<script>alert('Incorrect password. Please try again.');</script>";
            exit();
        }
    }
}
?>
