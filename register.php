
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <!-- Include Bootstrap CSS from a CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>



<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <h3 class="card-title text-center">Register</h3>
                </div>
                <div class="card-body">
                <form action="dbcon.php" method="post">
    <div class="mb-3">
        <label for="register-username" class="form-label">Username</label>
        <input type="text" class="form-control" id="register-username" name="username" required>
    </div>
    <div class="mb-3">
        <label for="register-username" class="form-label">Email</label>
        <input type="email" class="form-control" id="register-email" name="email" required>
    </div>
    <div class="mb-3">
        <label for="register-username" class="form-label">Mobile No</label>
        <input type="text" class="form-control" id="register-mobile" name="mobile" required>
    </div>
    <div class="mb-3">
        <label for="register-password" class="form-label">Password</label>
        <input type="password" class="form-control" id="register-password" name="password" required>
    </div>
    <div class="mb-3">
        <label for="confirm-password" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="confirm-password" name="cpaassword" required>
    </div>
    <button type="submit" class="btn btn-success w-100">Register</button>
</form>

                </div>
                <div class="card-footer">
                    <p class="text-center">Already have an account? <a href="login.php">Login here</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Include Bootstrap JS and Popper.js from a CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
