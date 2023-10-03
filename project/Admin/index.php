<?php
session_start();
include('../CMS/connectDB.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- My own CSS code -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Local Bootstrap link -->
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css">
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
    <title>Book-upload</title>
    <!-- Header section starts here -->
</head>

<body>

    <form action="bookdatabase.php" method="post" enctype="multipart/form-data">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 col-xl-6">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-4 text-center">

                        <div class="mb-4">

                            <h2 class="fw-bold mb-2 text-uppercase">Book</h2>
                            <p class="text-white-50 mb-3">Please fill out the following information:</p>
                            <?php
                            if (isset($_SESSION["empty_field"])) {
                                echo $_SESSION["empty_field"];
                                unset($_SESSION["empty_field"]);
                            }

                            if (isset($_SESSION["insert_ok"])) {
                                echo $_SESSION["insert_ok"];
                                unset($_SESSION["insert_ok"]);
                            }

                            if (isset($_SESSION["insert_bad"])) {
                                echo $_SESSION["insert_bad"];
                                unset($_SESSION["insert_bad"]);
                            }

                            if (isset($_SESSION["proccess_bad"])) {
                                echo $_SESSION["proccess_bad"];
                                unset($_SESSION["proccess_bad"]);
                            }

                            if (isset($_SESSION["proccess_cancel"])) {
                                echo $_SESSION["proccess_cancel"];
                                unset($_SESSION["proccess_cancel"]);
                            }
                            ?>
                            <!-- First Name and Last Name Fields -->
                            <div class="row mb-3">
                                <div class="col">
                                    <div class="form-outline form-white">
                                        <input type="file" id="image" name="image" class="form-control" accept="image/*" required>
                                        <label class="form-label" for="image">image</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col">
                                    <div class="form-outline form-white">
                                        <input type="text" id="text" name="writeup" class="form-control" required>
                                        <label class="form-label" for="text">writeup</label>
                                    </div>
                                </div>
                            </div>


                            <button class="btn btn-outline-light btn-lg px-4" name="submit" type="submit">upload</button>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>

</body>

</html>