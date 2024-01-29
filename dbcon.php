<?php

$con = mysqli_connect('localhost', 'root');

if ($con) {
    echo "connection successful";
} else {
    echo "No connection";
}

mysqli_select_db($con, 'regis');

$username = mysqli_real_escape_string($con, $_POST['username']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$mobile = mysqli_real_escape_string($con, $_POST['mobile']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$cpaassword = mysqli_real_escape_string($con, $_POST['cpaassword']);

$emailquery = "SELECT * FROM registration WHERE email='$email'";
$query = mysqli_query($con, $emailquery);
$emailcount = mysqli_num_rows($query);

if ($emailcount > 0) {
    echo "Email already exists";
} else {
    // Hash the passwords
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    $hashedCpassword = password_hash($cpaassword, PASSWORD_BCRYPT);

    $insertquery = "INSERT INTO registration (username, email, mobile, password, cpaassword) 
                    VALUES ('$username', '$email', '$mobile', '$hashedPassword', '$hashedCpassword')";

    $iquery = mysqli_query($con, $insertquery);

    if ($iquery) {
        echo "Data inserted successfully";
    } else {
        echo "Error inserting data: " . mysqli_error($con);
    }
}

?>
