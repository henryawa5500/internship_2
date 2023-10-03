<?php require "registration-process.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- My own CSS code -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Local Bootstrap link -->
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
  <!-- Bootstrap CSS online CDN link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/13d098a0cf.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia" />
  <style>
    /* Custom CSS to make the header smaller */
    .custom-header {
      font-size: 16px;
      /* Adjust the font size */
      padding: 10px 0;
      /* Adjust the padding */
    }
  </style>
  <title>Sign-up</title>
  <!-- Header section starts here -->
</head>

<body>

  <form action="registration-process.php" method="post">
    <div class="row d-flex justify-content-center">
      <div class="col-12 col-md-8 col-lg-6 col-xl-6">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-4 text-center">

            <div class="mb-4">

              <h2 class="fw-bold mb-2 text-uppercase">Sign Up</h2>
              <p class="text-white-50 mb-3">Please fill out the following information:</p>

              <!-- First Name and Last Name Fields -->
              <div class="row mb-3">
                <div class="col">
                  <div class="form-outline form-white">
                    <input type="text" id="UserName" name="username" class="form-control" required>
                    <label class="form-label" for="UserName">User Name</label>
                  </div>
                </div>
              </div>


              <!-- Email Field -->
              <div class="form-outline form-white mb-3">
                <input type="email" id="email" name="email" class="form-control" required>
                <label class="form-label" for="email">Email</label>
              </div>

              <!-- Create Password and Confirm Password Fields -->
              <div class="row mb-3">
                <div class="col">
                  <div class="form-outline form-white">
                    <input type="password" id="password" name="password" class="form-control" required>
                    <label class="form-label" for="password">Create Password</label>
                  </div>
                </div>
                <div class="col">
                  <div class="form-outline form-white">
                    <input type="password" id="confirm_password" name="confirm_password" class="form-control" required>
                    <label class="form-label" for="confirm_password">Confirm Password</label>
                  </div>
                </div>
              </div>

              <button class="btn btn-outline-light btn-lg px-4" name="submit" type="submit">Sign Up</button>

              <div class="d-flex justify-content-center text-center mt-3">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-2 px-1"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>

            </div>

            <div>
              <p class="mb-0">Already have an account? <a href="#!" class="text-white-50 fw-bold">Sign in</a></p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </form>

</body>

</html>