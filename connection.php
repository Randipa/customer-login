<?php
// Retrieve form data
if (isset($_POST["submit"])) {
$name = $_POST['yname'];
$email = $_POST['email'];
$registration_number = $_POST['registration_number'];
$contact_number = $_POST['contact_number'];
$subject = $_POST['ysubject'];
$faculty_school = $_POST['faculty_school'];
$inquiry_type = $_POST['inquiry_type'];
$message = $_POST['ymessage'];
}
// Establish connection to MySQL database
$servername = "localhost"; // Change this to your MySQL server name
$username = "cat"; // Change this to your MySQL username
$password = "xYXZ-.cW[r180B!n"; // Change this to your MySQL password
$dbname = "ecss_ticket"; // Change this to the name of your MySQL database

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else
{
    echo "Connected";
}

// Perform create (insert) operation
$stmt = $conn->prepare("INSERT INTO submit_ticket (yname, email, registration_number, contact_number, ysubject, faculty_school, inquiry_type, ymessage) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssss", $name, $email, $registration_number, $contact_number, $subject, $faculty_school, $inquiry_type, $message);

// Execute the insert statement
if ($stmt->execute()) {
    // Success message
    echo "Ticket submitted successfully.";
} else {
    // Error message
    echo "Error: " . $stmt->error;
}

// Close the prepared statement and database connection
$stmt->close();
$conn->close();

?>
