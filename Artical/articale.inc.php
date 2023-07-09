<?php

if (isset($_POST["upload"])) {
    $id = $_POST['aID'];
    $name = $_POST['aName'];
    $category = $_POST['aC'];
    $subcategory = $_POST['aSubC'];
    $teamid = $_POST['aTeamMID'];
    $content = $_POST['aContent'];
    }
    
    
        // Establish connection to MySQL database
    $servername = "localhost"; // Change this to your MySQL server name
    $username = "Chami"; // Change this to your MySQL username
    $password = "Nd-V7CzjlbgReAHD"; // Change this to your MySQL password
    $dbname = "article"; // Change this to the name of your MySQL database

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else
    {
        echo "Connected";
    }

    $stmt = $conn->prepare("INSERT INTO articletable (aID, aName, aC, aSubC, aTeamMID, aContent) VALUES (?, ?, ?, ?, ?,?)");
    $stmt->bind_param("ssssss", $id, $name, $category, $subcategory, $teamid, $content);

    // Execute the insert statement
    if ($stmt->execute()) {
        // Success message
        echo "Article submitted successfully.";
    } else {
        // Error message
        echo "Error: " . $stmt->error;
    }

    // Close the prepared statement and database connection
    $stmt->close();
    $conn->close();

    ?>
