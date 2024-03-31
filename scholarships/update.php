<?php
require_once 'Connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    // Retrieve form data
    $id = $_POST['id'];
    $title = $_POST['title'];
    $url = $_POST['url'];
    $opening_date = $_POST['opening_date'];
    $closing_date = $_POST['closing_date'];
    $description = $_POST['description'];
    $sponsor = $_POST['sponsor'];

    // Update the details in the database
    $sql = "UPDATE details SET title=?, url=?, opening_date=?, closing_date=?, description=?, sponsor=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssi", $title, $url, $opening_date, $closing_date, $description, $sponsor, $id);
    $stmt->execute();

    // Check if the session is set
    if(isset($_SESSION['AdminLoginId'])) {
        // Redirect to the home page
        header("location: home.php");
        exit(); // Stop further execution
    }
    
    // Logout functionality
    if(isset($_POST['Logout'])) {
        // Destroy session and redirect to the home page
        session_destroy();
        header("location: scholarpage.php");
        exit(); // Stop further execution
    }

    // Redirect back to the index.php page after updating
    header("Location: index.php?success=details_updated");
    exit();
}
?>
