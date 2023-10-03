<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!----my own css code----->
    <link rel="stylesheet" href="css/style.css">
    <!------local bootstrap link---->
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <!------bootstrap css online cdn link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/13d098a0cf.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia" />
</head>
<?php include'header.php'; ?>

<body class="mt-5 pt-5 bt-5">

<body>
<div class="card text-bg-dark">
  <img src="image/background.jpg" class="card-img" alt="...">
  <div class="card-img-overlay">
  
<link href="https://fonts.googleapis.com/css?family=Dela+Gothic+One" rel="stylesheet">
<style>
        .custom-font {
            font-family: "Dela Gothic One", sans-serif;
            font-size: 80px;
        }
      </style>
      <p class="custom-font">Welcome to the library </p>
    <p class="card-text">Enjoy a seamless learning experience </p>
  </div>
</div>
</body>

</head>
<script src="js/javascript.js"></script>
    <script src="js/bootstrap/js/bootstrap.min.js"></script>
    
    <section>
    <div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="image/bg2.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">ABOUT US</h5>
        <p class="card-text" id="aboutUsText">
     At hallway library, we are more than just a repository of books; we are a vibrant community hub dedicated to fostering a love for literature and knowledge.
    <span id="extraText" style="display: none;">With a rich heritage dating back decades, our library is a place where readers of all ages and backgrounds come together to explore the boundless worlds contained within the pages of our collection. Our passionate team of librarians is here to assist you on your literary journey, whether you seek captivating stories, scholarly research, or a quiet corner to immerse yourself in the written word. Discover the joy of reading and lifelong learning with us at Hallway Library.</span>
</p>
<button class="btn btn-primary" id="readMoreButton">Read More</button> <!-- "Read More" button -->
<button class="btn btn-secondary" id="readLessButton" style="display: none;">Read Less</button> <!-- "Read Less" button -->

<script>
    // JavaScript to toggle the visibility of the additional text
    const readMoreButton = document.getElementById("readMoreButton");
    const readLessButton = document.getElementById("readLessButton");
    const extraText = document.getElementById("extraText");

    readMoreButton.addEventListener("click", function () {
        extraText.style.display = "inline"; // Display the hidden text
        readMoreButton.style.display = "none"; // Hide the "Read More" button
        readLessButton.style.display = "inline"; // Display the "Read Less" button
    });

    readLessButton.addEventListener("click", function () {
        extraText.style.display = "none"; // Hide the hidden text
        readMoreButton.style.display = "inline"; // Display the "Read More" button
        readLessButton.style.display = "none"; // Hide the "Read Less" button
    });
</script>

    </div>
  </div>
</div>


</section>
<section>
  <div class="card mb-3">
    <div class="row g-0">
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">philosophy</h5>
          <p class="card-text">
            <span class="initial-content">Unlock the doors of knowledge within our library, where every page holds the key to your inspiration and growth</span>
            <span class="additional-content" style="display: none;">Celebrate the magic of books, where dreams take flight and knowledge ignites. In the pages of our library, you'll find your path to endless possibilities</span>
            <button class="btn btn-primary read-more">Read More</button>
            <button class="btn btn-secondary read-less" style="display: none;">Read Less</button>
          </p>
          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="col-md-4">
        <img src="image/pic2.jpg" class="img-fluid rounded-start" alt="...">
      </div>
    </div>
  </div>
</section>

<script>
  // JavaScript to toggle the content when the "Read More" and "Read Less" buttons are clicked
  document.addEventListener("DOMContentLoaded", function () {
    const readMoreButton = document.querySelector(".read-more");
    const readLessButton = document.querySelector(".read-less");
    const initialContent = document.querySelector(".initial-content");
    const additionalContent = document.querySelector(".additional-content");

    readMoreButton.addEventListener("click", function () {
      initialContent.style.display = "none";
      additionalContent.style.display = "inline";
      readMoreButton.style.display = "none";
      readLessButton.style.display = "inline";
    });

    readLessButton.addEventListener("click", function () {
      initialContent.style.display = "inline";
      additionalContent.style.display = "none";
      readMoreButton.style.display = "inline";
      readLessButton.style.display = "none";
    });
  });
</script>



    
    <section>
    <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="card">
              <img src="image/bg4.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Read more</a>
              </div>
            </div>
          </div>
          
          <div class="col-md-3">
            <div class="card" aria-hidden="true">
              <img src="image/pic2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <h5 class="card-title">Card title</h5>
                <p class="card-text placeholder-glow">
                    A library is a collection of materials, books or media that are accessible for use and not just for display purposes
                </p>
                <a href="#" class="btn btn-primary">Read more</a>
              </div>
            </div>
          </div>
          
          <div class="col-md-3">
            <div class="card" aria-hidden="true">
              <img src="image/pic3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <h5 class="card-title">Card title</h5>
                <p class="card-text placeholder-glow">
                    A library is a collection of materials, books or media that are accessible for use and not just for display purposes
                </p>
                <a href="#" class="btn btn-primary">Read more</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card" aria-hidden="true">
              <img src="image/pic4.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <h5 class="card-title">Card title</h5>
                <p class="card-text placeholder-glow">
                    A library is a collection of materials, books or media that are accessible for use and not just for display purposes
                </p>
                <a href="#" class="btn btn-primary">Read more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>

    </section>
    <?php include'footer.php'; ?>

    
  

</html>