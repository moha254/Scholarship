<?php
require_once 'Connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $url = $_POST['url']; // fetching url
    $title = $_POST['title'];
    $opening_date = $_POST['opening_date'];
    $closing_date = $_POST['closing_date'];
    $description = $_POST['description'];
    $sponsor = $_POST['sponsor']; // Add sponsor

      // Concatenate "Ksh" with the price value
      $formatted_price = "Ksh " . $price;

    $sql = "INSERT INTO details (title, price, opening_date, closing_date, description, sponsor) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sdssss", $title, $price, $opening_date, $closing_date, $description, $sponsor);

    if ($stmt->execute()) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="mycss.css"> 
	
    <style>
        .container {
            max-width: 600px;
            margin: 0 auto;
        }

        .text-center {
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"],
        textarea {
            width: 100%;
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        textarea {
            height: 100px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #fff;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

    </style>
    <title>Create</title>
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
    <li class="write"><a href="Editwebsite">Website</a></li>
    <li class="comments"><a href="#">Ads</a></li>
    <li class="users"><a href="#">Manage Users</a></li>
  </ul>
</nav>

<div class="container">
   <div class="mt-5">
    <h1 class="text-center">Welcome Admin</h1>
    <h1 class="text-center">Create Entry</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="form-group">
         <label for="url">URL:</label>
         <input type="text" name="url" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="sponsor">Sponsor:</label> <!-- New input for sponsor -->
            <input type="text" name="sponsor" class="form-control">
        </div>
        <div class="form-group">
            <label for="opening_date">Opening Date:</label>
            <input type="date" name="opening_date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="closing_date">Closing Date:</label>
            <input type="date" name="closing_date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
       
        <input type="submit" value="Submit" class="btn" style="background-color: #cb6015; color: white;">
    </form>
    <!-- Button to direct to the admin panel -->
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
