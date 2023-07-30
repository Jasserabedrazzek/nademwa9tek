<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $telephone = $_POST["telephone"];
    $bac_annee = $_POST["bac-annee"];
    $option = $_POST["option"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm-password"];

    if ($password !== $confirm_password) {
        echo "<script>alert('Password and Confirm Password do not match');</script>";
    } else {
        // Generate a unique ID
        $uniqId = uniqid();

        // Create filenames for the JSON files
        $user_info_filename = $uniqId . ".json";
        $login_user_filename = $telephone . ".json";

        // Data for login JSON file
        $data_login = array (
            'id' => $uniqId,
            'password' => $password
        );

        // Data for user info JSON file
        $data_info = array(
            'name' => $nom,
            'Lastname' => $prenom,
            'telephone' => $telephone,
            'userID' => $uniqId,
            'Bac' => $option,
            'Bac_annee' => $bac_annee
        );

        // Encode data as JSON
        $loginJson = json_encode($data_login);
        $dataInfoJson = json_encode($data_info);

        // Save the JSON data to the respective files
        file_put_contents($login_user_filename, $loginJson);
        file_put_contents($user_info_filename, $dataInfoJson);

        // Redirect to the index.html page
        header("Location: index.html");
        exit();
    }
}
?>
