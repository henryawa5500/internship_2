<?php
    include ('connectDB.php');

    //get input from a user
    $email = $_POST["email"];
    $email = $_POST["phone"];
    $email = $_POST["password"];

    //retriving user data froom the database
    $query =" SELECT * FROM User_form WHERE phone = '$phone' OR email = '$email' ";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])){
            //header(location:index .php');
           
        }
    }



?>