<?php
// Start session if not already started
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit();
}

// Include database connection code and functions for CRUD operations
require_once "db_connection.php"; // Adjust this according to your file structure

// Fetch user details based on the logged-in user
$username = $_SESSION['username'];
$user_query = mysqli_query($con, "SELECT * FROM registration WHERE username='$username'");
$user = mysqli_fetch_assoc($user_query);

// Close the database connection
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome <?php echo $user['username']; ?></title>
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-pzjw8Y+J53iR7DTFQVV2aU4E8RSQb5N6oKb7YNc4z5NC7FfBTFB9eMRsZRlXnpb6" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <h1>Welcome <?php echo $user['username']; ?></h1>
        <p>Email: <?php echo $user['email']; ?></p>
        <p>Mobile: <?php echo $user['mobile']; ?></p>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="update-tab" data-bs-toggle="tab" data-bs-target="#update" type="button" role="tab" aria-controls="update" aria-selected="true">Update</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="delete-tab" data-bs-toggle="tab" data-bs-target="#delete" type="button" role="tab" aria-controls="delete" aria-selected="false">Delete</button>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content mt-3">
            <div class="tab-pane fade show active" id="update" role="tabpanel" aria-labelledby="update-tab">
                <!-- Update form goes here -->
                <?php include 'update_form.php'; ?>
            </div>
            <div class="tab-pane fade" id="delete" role="tabpanel" aria-labelledby="delete-tab">
                <!-- Delete form goes here -->
                <?php include 'delete_form.php'; ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8Y+J53iR7DTFQVV2aU4E8RSQb5N6oKb7YNc4z5NC7FfBTFB9eMRsZRlXnpb6" crossorigin="anonymous"></script>
</body>
</html>
