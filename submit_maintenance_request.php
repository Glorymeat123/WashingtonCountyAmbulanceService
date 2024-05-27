<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $equipment_name = $_POST['equipment_name'];
    $issue_type = $_POST['issue_type'];
    $reported_to = $_POST['reported_to'];
    $incident_date = $_POST['incident_date'];
    $vehicle_number = $_POST['vehicle_number'];

    // Create an array to hold the request data
    $request_data = array(
        'equipment_name' => $equipment_name,
        'issue_type' => $issue_type,
        'reported_to' => $reported_to,
        'incident_date' => $incident_date,
        'vehicle_number' => $vehicle_number
    );

    // Convert the request data to JSON format
    $json_data = json_encode($request_data);

    // Append the JSON data to a file (you can also save it to a database)
    file_put_contents('maintenance_requests.json', $json_data . PHP_EOL, FILE_APPEND);

    // Redirect back to the employee dashboard or display a success message
    header('Location: employee_dashboard.html');
    exit;
}
?>
