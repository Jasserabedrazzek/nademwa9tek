<?php
if (isset($_POST['save_ev'])) {
    // Get the user ID from the form
    $userID = $_POST['id_user'];

    // Get the events data from the form
    $events = array();
    for ($i = 1; $i <= 15; $i++) {
        if (isset($_POST['events'][$i]) && isset($_POST['events'][$i]['time'])) {
            $event_name = $_POST['events'][$i]['name'];
            $event_time = $_POST['events'][$i]['time'];
            $events[] = array(
                'event' => $event_name,
                'time' => $event_time
            );
        }
    }

    // Convert the events data to JSON format
    $json_data = json_encode($events, JSON_PRETTY_PRINT);

    // Create the file path based on the user ID
    $file_path ='ev_'. $userID . '.json';

    // Save the events to the JSON file
    file_put_contents($file_path, $json_data);

    // Redirect the user to the appropriate page with the updated userID parameter
    header('Location: home.php?userID=' . urlencode($userID));
    exit;
}
?>