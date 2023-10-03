<?php include'header-2.php'; ?>
<body>
  <div class="row d-flex justify-content-center">
    <div class="col-12 col-md-8 col-lg-6 col-xl-6">
      <div class="card bg-dark text-white" style="border-radius: 1rem;">
        <div class="card-body p-4 text-center"> <!-- Reduced padding here -->

          <div class="mb-4"> <!-- Reduced margin here -->

            <h2 class="fw-bold mb-2 text-uppercase">signin</h2>
            <p class="text-white-50 mb-3">Please enter your email and password!</p>

            <div class="form-outline form-white mb-3"> <!-- Reduced margin and padding here -->
              <input type="email" id="typeEmailX" class="form-control">
              <label class="form-label" for="typeEmailX" style="margin-left: 0px;">Email</label>
            </div>

            <div class="form-outline form-white mb-3"> <!-- Reduced margin and padding here -->
              <input type="password" id="typePasswordX" class="form-control">
              <label class="form-label" for="typePasswordX" style="margin-left: 0px;">Password</label>
            </div>

            <p class="small mb-3"> <!-- Reduced margin here -->
              <a class="text-white-50" href="#!">Forgot password?</a>
            </p>

            <button class="btn btn-outline-light btn-lg px-4" type="submit">Signin</button> <!-- Reduced padding here -->

            <div class="d-flex justify-content-center text-center mt-3"> <!-- Reduced margin and padding here -->
              <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
              <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-2 px-1"></i></a>
              <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
            </div>

          </div>

          <div>
            <p class="mb-0">Don't have an account? <a href="#!" class="text-white-50 fw-bold">Sign Up</a></p>
          </div>

        </div>
      </div>
    </div>
  </div>
</body>
</html>
