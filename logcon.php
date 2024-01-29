<?php

$con = mysqli_connect('localhost', 'root');

if ($con) {
    echo "Connection successful";
} else {
    die("No connection: " . mysqli_connect_error());
}

mysqli_select_db($con, 'regis');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $emailquery = "SELECT * FROM registration WHERE email='$email'";
    $query = mysqli_query($con, $emailquery);

    if ($query) {
        $emailcount = mysqli_num_rows($query);

        if ($emailcount) {
            $row = mysqli_fetch_assoc($query);
            $hashedPassword = $row['password'];

            if (password_verify($password, $hashedPassword)) {
                echo "Login successful";
                ?>
                  //Add additional actions (e.g., session creation) after successful login

                <tr>
            

               <td> <?php echo $row['username'];?></td>
                <td> <?php echo $row['email'];?></td>
                <td> <?php echo  $row['mobile'];?></td>
                </tr>
               <?php 
            } else {
                echo "Invalid password";
            }
        } else {
            echo "Email not registered";
        }
    } else {
        echo "Error in query: " . mysqli_error($con);
    }
}

?>
