<?php
// Retrieve the email from the URL parameter
$FullName = isset($_GET['FullName']) ? $_GET['FullName'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divine Homes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        *{
            font-family: 'Poppins', sans-serif;
        }
        .h-font{
            font-family: 'Merienda', cursive;
        }
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }

        /* Firefox */
        input[type=number] {
        -moz-appearance: textfield;
        }
        .custom-bg{
            background-color: #2ec;
        }
        .custom-bg:hover{
            background-color: #279e8c;
        }
        .availability-form{
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }
        @media screen and (max-width: 575px){
             .availability-form{
            margin-top: 25px;
            padding: 0 35px;
        }
        }
        html,
    body {
      position: relative;
      height: 100%;
      margin-bottom: 70px;
    }

    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
      
    }

    .swiper {
      width: 100%;
      height: 50%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .contact-container {
      background-color: #006400; /* Dark green background */
      color: #fff; /* Text color */
      border-radius: 0; /* No border-radius */
      padding: 20px; /* Padding inside the container */
      position: fixed;
      bottom: 0;
      left: 0;
      right: 0;
      width: 100%;
      box-shadow: 0px -5px 15px 0px rgba(0, 0, 0, 0.2); /* Optional: Add a subtle box shadow */
      display: flex;
    justify-content: space-between; /* Adjust this property as needed */

    .row {
      display: flex;
      flex-direction: row;
      flex-wrap: nowrap;
      justify-content: space-between;
    }
        
    }
    .welcome-message {
            text-align: right;
            padding: 10px;
            font-size: 20px; /* Adjust the font size as needed */
            color: white;    /* Set the text color to white */
            background-color: #333; /* Optional: Add a background color for better visibility */
        }
    .logout-button {
            font-size: 16px; /* Adjust the font size as needed */
            color: white;    /* Set the text color to white */
            background-color: #555; /* Optional: Add a background color for better visibility */
            padding: 5px 10px; /* Adjust padding as needed */
            border: none;
            cursor: pointer;
        }
        
    
    </style>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-U7xktyU6jK+kqvi2O7l+bG6OhXaF4aHjzUrl/5h5RcXMJIB8K9DHcCflHRTtZc5g"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6sJq/U61QTK6z5Iep5w1xd0UqRiBavPVhJJp"
    crossorigin="anonymous"></script>
    
</head>
<body class="bg-dark">

    <nav class="navbar navbar-expand-lg navbar-dark bg-black px-lg-3 py-lg-2 shadow-sm sticky-top ">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Divine Homes</a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active me-2" aria-current="page" href="#">Our Homes</a>
                </li>
                <li class="nav-item">
                <a class="nav-link me-2" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link me" href="#contacts-section">Contact us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link me-2" href="#">About</a>
                </li>
            </ul>
            <div class="welcome-message">
            <?php echo "Welcome, $FullName!"; ?>
            </div>
            <button class="logout-button" onclick="logout()">Logout</button>
            
            </div>
        </div>
    </nav>
    <!-- room 1  -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font bg-black text-white">OUR HOMES</h2>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="images\homes\home 1.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="home-name">Twiga Cottage</h5>
            <h6 class="mb-4">KSh 1500 Per Night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                1 Room
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                1 BathRoom
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                1 Balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                2 Sofas
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                Television
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                AC
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                Room heater
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
            <button data-target="extendedContent1" class="btn btn-sm text-white custom-bg shadow-none book-now-btn">
            <a href="booking.php?homeName=Twiga%20Cottage&pricePerNight=1500">Book Now</a>

              
            </div>
          </div>
        </div>
      </div>

      <!-- room 2  -->

      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="images\homes\home 2.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="home-name">Tropical Cottage</h5>
            <h6 class="mb-4">KSh 2000 Per Night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                2 BathRooms
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                2 Balconies
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                3 Sofas
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                Television
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                AC
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                Room heater
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
            <button data-target="extendedContent2" class="btn btn-sm text-white custom-bg shadow-none book-now-btn">
            <a href="booking.php?homeName=Tropical%20Cottage&pricePerNight=2000">Book Now</a>

            </div>
          </div>
        </div>
      </div>

      <!-- room 3  -->

      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="images\homes\home 3.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="home-name">Kasuku Cottage</h5>
            <h6 class="mb-4">KSh 1500 Per Night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                1 Room
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                1 BathRoom
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                1 Balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                2 Sofas
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                Television
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                AC
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                Room heater
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
            <button data-target="extendedContent3" class="btn btn-sm text-white custom-bg shadow-none book-now-btn">
            <a href="booking.php?homeName=Kasuku%20Cottage&pricePerNight=1500">Book Now</a>

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- room 4 -->

    <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="images\homes\home 1.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="home-name">Mamba Cottage</h5>
            <h6 class="mb-4">KSh 1500 Per Night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                1 Room
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                1 BathRoom
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                1 Balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                2 Sofas
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                Television
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                AC
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                Room heater
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
            <button data-target="extendedContent4" class="btn btn-sm text-white custom-bg shadow-none book-now-btn">
            <a href="booking.php?homeName=Mamba%20Cottage&pricePerNight=1500">Book Now</a>


            </div>
          </div>
        </div>
      </div>



    <!-- room 5 -->

    <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="images\homes\home 2.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="home-name">Safari Cottage</h5>
            <h6 class="mb-4">KSh 2000 Per Night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                2 BathRooms
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                2 Balconies
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                3 Sofas
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                Television
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                AC
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                Room heater
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
           <div class="d-flex justify-content-evenly mb-2">
           <button data-target="extendedContent5" class="btn btn-sm text-white custom-bg shadow-none book-now-btn">
           <a href="booking.php?homeName=Twiga%20Cottage&pricePerNight=2000">Book Now</a>

            </div>
          </div>
        </div>
      </div>

      <!-- room 6  -->

      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="images\homes\home 3.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="home-name">Kiboko Cottage</h5>
            <h6 class="mb-4">KSh 1500 Per Night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                1 Room
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                1 BathRoom
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                1 Balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                2 Sofas
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                Television
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                AC
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap">
                Room heater
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
            <button data-target="extendedContent6" class="btn btn-sm text-white custom-bg shadow-none book-now-btn">
            <a href="booking.php?homeName=Kibiko%20Cottage&pricePerNight=1500">Book Now</a>


            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-12 text-center mt-12">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>> </a>
    </div>
  </div>

  <script>
        function logout() {
            // Redirect to the home page (index.php)
            window.location.href = 'index.php';
        }
    </script>


  
</body>
</html>
