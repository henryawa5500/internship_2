<?php
include('connectDB.php');
    $errors = array(); // An array to store validation errors


// Check if the form was submitted
if (isset($_POST["submit"])) {
    // Get data from the form
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Hash the user's password for security
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    // Perform form validation
    if (empty($username) or empty($email) or empty($password) or empty($confirm_password)) {
        array_push($errors, "All fields are required");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Enter a valid email");
    }
    if (strlen($password) < 4) {
        array_push($errors, "Password must be at least 4 characters long");
    }
    if ($password !== $confirm_password) {
        array_push($errors, "Password does not match");
    }

    // Check if the email already exists in the database
    $email_query = "SELECT * FROM user WHERE email = '$email'";
    $result = mysqli_query($conn, $email_query); // query the datadase_connecction.php then query the db table(user) to check for the email 
    $row_count = mysqli_num_rows($result); // check if the email exists

    if ($row_count > 0) {
        array_push($errors, "Email already exists!");
    }

    // Display all the validation errors
    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo "<div class='alert alert-danger'>$error</div>";
        }
    } else {
        // If there are no errors, insert the user's data into the database
        $insert_query = " INSERT INTO user (first_name, last_name, email, password, phone_number, industry, program, about, business_stage, address) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn); //initialize MYSQL statement object
        $preparestmt = mysqli_stmt_prepare($stmt, $insert_query); //prepare statem
        if ($preparestmt) {
            mysqli_stmt_bind_param($stmt, "ssssssssss", $first_name, $last_name, $email, $passwordHash, $phone_number, $industry, $program, $about, $business_stage, $address);
            mysqli_stmt_execute($stmt);
            if (mysqli_affected_rows($conn) > 0) {
                // Data was inserted successfully
                header("location: ../index.php?registrationSuccess=1");
                exit(); // Exit to prevent further execution
            } else {
                // No rows were affected, registration was not successful
                echo "<div class='alert alert-danger'>Registration was not successful!</div>";
            }
        } else {
            die("Registration was not successful!");
        }
    }
}
mysqli_close($conn);
?>