<?php
// Replace these variables with your own database credentials
$servername = "localhost";
$username = "eqddcaxfsc";
$password = "4TTUmfMe8j";
$dbname = "eqddcaxfsc";
$conn = new mysqli($servername, $username, $password, $dbname);

// Get data from the AJAX request
$name = mysqli_real_escape_string($conn, $_POST['name']);
$user_type = mysqli_real_escape_string($conn, $_POST['user_type']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$message = mysqli_real_escape_string($conn, $_POST['message']);

// Initialize user_id variable
$user_id = null;

if ($user_type === 'user') {
    // If user type is 'user', fetch user_id from 'users' table
    $query = "SELECT id FROM users WHERE contact = '$phone'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $user_id = $row['id'];
    }else{
		$response['status'] = 'error';
		$response['message'] = 'Invalid phone number';
		echo json_encode($response);
		exit(); 

	}
} elseif ($user_type === 'driver') {
    // If user type is 'driver', fetch user_id from 'drivers' table
    $query = "SELECT id FROM xeat_drivers WHERE phone = '$phone'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $user_id = $row['id'];
    }else{
		$response['status'] = 'error';
		$response['message'] = 'Invalid phone number';
		echo json_encode($response);
		exit(); 

	}
}

// SQL query to insert data into the database
$sql = "INSERT INTO delete_account (name, user_type, phone, message,user_id) VALUES ('$name','$user_type', '$phone', '$message','$user_id')";

$response = array();

if ($conn->query($sql) === TRUE) {
    $response['status'] = 'success';
    $response['message'] = 'Record inserted successfully';
} else {
    $response['status'] = 'error';
    $response['message'] = 'Error: ' . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();

// Return the response as JSON
echo json_encode($response);

?>