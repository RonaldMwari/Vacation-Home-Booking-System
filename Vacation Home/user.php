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
                <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link me-2" href="user homes.php">Our Homes</a>
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

    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                        <i class="bi bi-person-bounding-box fs-3 me-2"></i> User Login
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control shadow-none" id="Email" name="Email address"/>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control shadow-none" id="Password" name="Password Login"/>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <button type="submit" class="btn btn-dark shadow-none">Login</button>
                            <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot password?</a>
                        </div> 
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="connect.php" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                        <i class="bi bi-person-lines-fill fs-3 me-2"></i>
                        User Registration
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                        Note: Confirm your details before clicking the submit button below.
                    </span>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control shadow-none" id="FullName" name="FullName"/> 
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control shadow-none" id="email" name="email"/>
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Phone number</label>
                                <input type="number" class="form-control shadow-none" id="phonenumber" name="phonenumber"/>
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Address</label>
                                <textarea class="form-control shadow-none" rows="1" id="address" name="address"></textarea>
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Date of birth</label>
                                <input type="date" class="form-control shadow-none" id="datofbirth" name="dateofbirth"/>
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control shadow-none" id="password" name="password"/>
                            </div>
                            <div class="col-md-6 p-0 mb-3" >
                                <label class="form-label">Confirm password</label>
                                <input type="password" class="form-control shadow-none" id="confirmpassword" name="confirmpassword"/>
                            </div>
                        </div>
                    </div>
                    <div class="text-center my-1">
                    <button type="submit" class="btn btn-dark shadow-none">Submit</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container fluid px-lg-4 mt-4 mb-2">
            <div class="swiper swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="images/sliders/slider1.jpg" class="w-100 d-block" />
                    </div>
                    <div class="swiper-slide">
                        <img src="images/sliders/slider2.jpg" class="w-100  d-block"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/sliders/slider3.jpg" class="w-100  d-block"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/sliders/slider4.jpg" class="w-100  d-block"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/sliders/slider5.jpg" class="w-100  d-block"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/sliders/slider6.jpg" class="w-100  d-block"/>
                    </div>
                </div>
            </div>
    </div>
    <div class="container availability-form">
    <div class="row">
        <div class="col-lg-12 bg-white shadow p-4 rounded">
        <h5 class="mb-4">Description</h5>
        Welcome to Divine Homes, your gateway to unforgettable vacations in the heart of Kenya! Our exclusive vacation home booking website is designed to elevate your holiday experience, offering a curated selection of exquisite properties nestled in the most breathtaking locations across the country.

        Discover a collection of handpicked vacation homes that embody luxury, comfort, and the unique charm of Kenya. From private beachfront villas to secluded mountain retreats, Divine Homes provides a diverse range of accommodations to suit every traveler's taste and preference.

        Our user-friendly platform ensures a seamless booking experience, allowing you to explore detailed property listings, vibrant photo galleries, and genuine guest reviews. Whether you're seeking a romantic getaway, a family retreat, or an adventure-filled escape, Divine Homes has the perfect home for every occasion.

        Immerse yourself in the beauty of Kenya's landscapes, from the stunning beaches of Diani to the awe-inspiring Maasai Mara. With Divine Homes, your dream vacation is just a click away. Book your slice of paradise today and let us guide you to an unforgettable journey through Kenya's divine destinations!


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<script>
    var swiper = new Swiper(".swiper-container", {
    spaceBetween: 30,
    effect: "fade",
    loop: true,
    autoplay: {
        delay: 3500,
        disableOnInteraction: true,
    },
    pagination: {
        el: ".swiper-pagination",
    }
    });
    var swiper = new Swiper(".swiper-testimonials", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  slidesPerView: "3",
  loop: true,
  coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: false,
  },
  pagination: {
    el: ".swiper-pagination",
  },
  breakpoints: {
    320: {
        slidesPerView: 1,
    },
    640: {
        slidesPerView: 1,
    },
    768: {
        slidesPerView: 2,
    },
    1024: {
        slidesPerView: 3,
    },
  }

});


        function logout() {
            window.location.href = 'index.php';
        }
    
</script>

   


<div id="contacts-section" class="container mt-5">
    <div class="row">
        
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Contact Us</h2>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-6 px-4">
            <div class="bg-white rounded shadow p-4">
            <form method="POST" action="admin/user_connect.php">
                    <h5>Tell us your thoughts</h5>
                    <div class="mt-3">
                        <label class="form-label" style="font-weight: 500;">Name</label>
                        <input type="text" name="name" required class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                        <label class="form-label" style="font-weight: 500;">Email</label>
                        <input type="email" name="email" required class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                        <label class="form-label" style="font-weight: 500;">Subject</label>
                        <input type="text" name="subject" required class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                        <label class="form-label" style="font-weight: 500;">Message</label>
                        <textarea name="message" required class="form-control shadow-none" rows="5" style="resize:none;"></textarea>
                    </div>
                    <button type="submit" name="send" class="btn text-white custom-bg mt-3">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>





        

<!-- Footer -->
<?php require('inc/footer.php'); ?>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<!--JS for contacts scrolling-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-U7xktyU6jK+kqvi2O7l+bG6OhXaF4aHjzUrl/5h5RcXMJIB8K9DHcCflHRTtZc5g"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6sJq/U61QTK6z5Iep5w1xd0UqRiBavPVhJJp"
    crossorigin="anonymous"></script>

    

   
  
</body>
</html>