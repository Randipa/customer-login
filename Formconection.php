
<?php
// Retrieve form data
if (isset($_POST["submit"])) {
$uid = $_POST['uid'];
$uname = $_POST['uname'];
$ustatus = $_POST['ustatus'];
$uno = $_POST['uno'];
}



// Establish connection to MySQL database
$servername = "localhost"; // Change this to your MySQL server name
$username = "Ramesh"; // Change this to your MySQL username
$password = "nB[wQXJq7CqZDv/Y"; // Change this to your MySQL password
$dbname = "faqs"; // Change this to the name of your MySQL database

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else
{
    echo "Connected";
}

// Perform create (insert) operation
$stmt = $conn->prepare("INSERT INTO faqstable (uid, uname, ustatus, uno) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $uid, $uname, $ustatus, $uno);

// Execute the insert statement
if ($stmt->execute()) {
    // Success message
    echo " successfully.";
} else {
    // Error message
    echo "Error: " . $stmt->error;
}

// Close the prepared statement and database connection
$stmt->close();
$conn->close();

?>