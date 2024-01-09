<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conn = new mysqli("localhost", "username", "password", "feedback_db");
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $nama = $_POST['nama'];
    $saran = $_POST['saran'];

    $sql = "INSERT INTO feedback (nama, saran) VALUES ('$nama', '$saran')";

    if ($conn->query($sql) === TRUE) {
        echo "Feedback submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
