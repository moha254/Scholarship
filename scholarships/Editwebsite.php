<?php
// Check if the ID parameter is not set or empty
if (!isset($_GET['id']) || empty($_GET['id'])) {
    // Redirect the user back to the AdminPanel.php page with an error message
    header("Location: AdminPanel.php?error=missing_id");
    exit();
}

require_once 'Connection.php';

// Fetch the details from the database based on the provided ID
$sql = "SELECT * FROM details WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $_GET['id']);
$stmt->execute();
$result = $stmt->get_result();

// Check if a record was found
if ($result->num_rows === 0) {
    // Redirect the user back to the AdminPanel.php page with an error message
    header("Location: AdminPanel.php?error=invalid_id");
    exit();
}

// Fetch the details as an associative array
$details = $result->fetch_assoc();

// Close the statement
$stmt->close();

?>

<!DOCTYPE html> 
<html lang="en"> 

<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Add custom CSS -->
    <link rel="stylesheet" href="mycss.css"> 
    <link rel="stylesheet" href="responsive.css"> 
    <title>Edit Details</title>
</head>
<body>
<header role="banner">
  <h1>Admin Panel</h1>
  <ul class="utilities">
    <br>
    <li class="users"><a href="#">My Account</a></li>
    <a href="scholarpage.php" style="text-decoration: none; color: #212529;">
    <button type="submit" name="Logout" style="background: none;color: #212529; border: none; cursor: pointer;font-size:26px;">
        Logout
    </button>
</a>
  </ul>
</header>

<nav role='navigation'>
  <ul class="main">
    <li class="dashboard"><a href="AdminPanel.php">Dashboard</a></li>
    <li class="edit"><a href="createwebsite.php">Scholarships</a></li>
    <li class="write"><a href="Editwebsite.php">Website</a></li>
    <li class="comments"><a href="#">Ads</a></li>
    <li class="users"><a href="#">Manage Users</a></li>
  </ul>
</nav>

<div class="container mt-5">
    <h1>Edit Details</h1>
    <form method="post" action="update.php">
        <input type="hidden" name="id" value="<?php echo isset($details['id']) ? htmlspecialchars($details['id']) : ''; ?>">
        <div class="form-group">
         <label for="url">URL:</label>
         <input type="text" name="url" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" class="form-control" value="<?php echo isset($details['title']) ? htmlspecialchars($details['title']) : ''; ?>">
        </div>
        <div class="form-group">
            <label for="sponsor">Sponsor:</label>
            <input type="text" id="sponsor" name="sponsor" class="form-control" value="<?php echo isset($details['sponsor']) ? htmlspecialchars($details['sponsor']) : ''; ?>">
        </div>
        <div class="form-group">
            <label for="opening_date">Opening Date:</label>
            <input type="date" id="opening_date" name="opening_date" class="form-control" value="<?php echo isset($details['opening_date']) ? htmlspecialchars($details['opening_date']) : ''; ?>">
        </div>
        <div class="form-group">
            <label for="closing_date">Closing Date:</label>
            <input type="date" id="closing_date" name="closing_date" class="form-control" value="<?php echo isset($details['closing_date']) ? htmlspecialchars($details['closing_date']) : ''; ?>">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea id="description" name="description" class="form-control"><?php echo isset($details['description']) ? htmlspecialchars($details['description']) : ''; ?></textarea>
        </div>
        
        <button type="submit" name="update" class="btn btn-primary">Update</button>
    </form>
</div>

</body>
</html>
