<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Establish database connection (replace with your actual database credentials)
    $conn = new mysqli("localhost", "username", "password", "feedback_db");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get data from the form
    $nama = $_POST['nama'];
    $saran = $_POST['saran'];

    // Insert data into the database
    $sql = "INSERT INTO feedback (nama, saran) VALUES ('$nama', '$saran')";

    if ($conn->query($sql) === TRUE) {
        echo "Feedback submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
