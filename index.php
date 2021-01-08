<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">



    <!-- Bootstrap CSS Files -->
    <link rel="stylesheet" href="bootstrap/css/font-awesome-5.8.1.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/mdb.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro&family=Literata">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Montserrat:wght@100&display=swap" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Dancing+Script&family=Montserrat:wght@100&display=swap" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Caveat&family=Montserrat:wght@100&family=Poppins:wght@300&display=swap" >
    <!-- Bootstrap CSS Files ends here -->

<title>X-plore | Home</title>
</head>
<body>

    <!-- Main Navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-teal">
        <div class="container">
            <a href="index.html" class="navbar-brand">
               <i class="fa fa-globe"></i>   X-plore</a>
            <div class="collapse navbar-collapse" id="travel-navbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item px-3">
                        <a href="#" class="nav-link" id="active">Home</a>
                    </li>
                    <li class="nav-item px-3">
                        <a href="aboutus.php" class="nav-link">AboutUs</a>
                    </li>
                    <li class="nav-item px-3">
                        <a href="packages.php" class="nav-link">Packages</a>
                    </li>
                    <li class="nav-item px-3">
                        <a href="booking.php" class="nav-link">Booking</a>
                    </li>
                    <li class="nav-item px-3">
                        <a href="rental.php" class="nav-link">Rental</a>
                    </li>
                    <li class="nav-item px-3">
                        <a href="contact.php" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Navbar ends here -->


    <!-- Slider Section starts-->
    <section>
        <div class="carousel slide" id="travel-slider" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#travel-slider" data-slide-to="0" class="active"></li>
                <li data-target="#travel-slider" data-slide-to="1"></li>
                <li data-target="#travel-slider" data-slide-to="2"></li>
            </ol>


            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/slider_one.jpg" alt="" class="img-fluid1 w-100">
                    <div class="carousel-caption text-left ">
                        <h5 class="display-4">One Life...</h5>
                        <p class="lead">“Jobs fill your pockets, adventures fill your soul.” </p>
                        <button class="btn btn-teal1"><a href="booking.php">Book Now</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/slider_two.jpg" alt="" class="img-fluid1 w-100">
                    <div class="carousel-caption text-left ">
                        <h5 class="display-4">One World...</h5>
                        <p class="lead">“Don't listen to what they say, go see” <br> ~ Chinese Proverb.</p>
                        <button class="btn btn-teal1"><a href="booking.php">Book Now</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/slider_three.jpg" alt="" class="img-fluid1 w-100">
                    <div class="carousel-caption text-left ">
                        <h5 class="display-4">Explore It!</h5>
                        <p class="lead">“The world is a book and those who do not travel read only a page.” <br> ~ Saint Augustine. </p>
                        <button class="btn btn-teal1"><a href="booking.php">Book Now</button>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#travel-slider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#travel-slider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

  <!-- slider section ends here -->

  <!-- info card starts here -->

    <section class="bg-light p-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-center mt-3">
                        <div class="card-body">
                            <i class="fa fa-location-arrow fa-3x text-teal1"></i>
                            <p class="h2">Pick Location</p>
                            <p>We found your happy place, just pick a beautiful location and we'll take you there with all the necessary needs.You are two steps away from Happiness.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center mt-3">
                        <div class="card-body">
                            <i class="fa fa-building fa-3x text-teal1"></i>
                            <p class="h2">Shop Travel</p>
                            <p>it's time to select the best package as per your needs. We'll have all your needs covered in that package.You are one step away from Happiness.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center mt-3">
                        <div class="card-body">
                            <i class="fa fa-plane-departure fa-3x text-teal1"></i>
                            <p class="h2">Fly Cheap</p>
                            <p>It's time to fly now. We'll put all our efforts to make your journey effort less. Reach your destination and "X-plore". You have reached Happiness</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- info card ends here -->

    <!-- Popular Places starts here -->

    <section id="places" class="p-3">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h5 class="display-4">
                        <span class="text-teal">Popular</span> Places
                    </h5>
                    <p class="lead">Walk, Swim and Fly</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mt-3">
                        <img src="images/card_1.jpg" class="img-fluid" alt="">
                        <div class="card-body">
                            <h3 class="card-title">Munnar,Kerala</h3>
                            <p class="card-text">In Munnar, the best thing to buy is tea, coffee, and spices. Being famous for its exquisite taste and aroma, the tea grown here comes in many different varieties. So is the coffee and spices. They are grown locally in vast plantations and estates.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mt-3">
                        <img src="images/card_2.jpg" class="img-fluid" alt="">
                        <div class="card-body">
                            <h3 class="card-title">Alappuza,Kerala</h3>
                            <p class="card-text">Alappuzha, famous for its boat races, beaches, marine products and coir industry, is a world renowned backwater tourist destination of India. Kuttanad, Alappuzha backwaters and Alappuzha beach are the must-see tourist attraction.</p>
                       </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mt-3">
                        <img src="images/card_3.jpg" class="img-fluid" alt="">
                        <div class="card-body">
                            <h3 class="card-title">Pondicherry</h3>
                            <p class="card-text">Pondicherry is a former French colony located on the south-eastern coastline of India and is known for its rich heritage and culture. Pondicherry is the only diving spot on the eastern coast of India and attracts a large number of tourists every year.<br></p>
                    </div>
                    </div>
                </div>
            </div>

            <!-- Start booking button-->

            <div class="row mt-3">
                <div class="col text-center">
                    <button class="btn btn-dark btn-lg">
                        <i class="fa fa-play mr-2"></i> <a href="booking.php"> Start Booking </button>
                </div>
            </div>
        </div>
       </section>

      <!-- popular places ends here -->




      <!-- Main Footer -->

     <footer class="p-3 mt-3 bg-teal text-white text-center">
         <div class="container">
             <div class="row">
                 <div class="col">
                     <h3>Copyright &copy; 2020 , X-plore Pvt Ltd</h3>
                     <h6>All Rights Reserved</h6>
                     <h6>Developed & Maintained by Scripters-Zone</h6>
                 </div>
             </div>
         </div>
     </footer>

      <!-- Main footer ends-->

   <!-- Bootstrap Js files -->

            <script src="bootstrap/js/jquery.js"></script>
            <script src="bootstrap/js/popper.min.js"></script>
            <script src="bootstrap/js/bootstrap.js"></script>
            <script src="bootstrap/js/mdb.js"></script>

<!-- Bootstrap Js files ends here-->

<!-- Script starts here-->

 <script>

    $('.carousel').carousel({
        interval : 3000,
        pause : 'hover'
    });
</script>

<!-- Script ends here-->

<p><!--Start of Tawk.to Script-->

<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ff57816c31c9117cb6be983/1erbdq6um';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script--></p>

</body>
</html>
