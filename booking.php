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

<title>X-plore | Packages</title>
</head>
<body>


  <!-- Main Navbar -->

  <nav class="navbar navbar-expand-sm navbar-dark bg-teal">
      <div class="container">
          <a href="index.php" class="navbar-brand">
             <i class="fa fa-globe"></i>   X-plore</a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#travel-navbar">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="travel-navbar">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item px-3">
                      <a href="index.php" class="nav-link">Home</a>
                  </li>
                  <li class="nav-item px-3">
                      <a href="aboutus.php" class="nav-link">AboutUs</a>
                  </li>
                  <li class="nav-item px-3">
                      <a href="packages.php" class="nav-link">Packages</a>
                  </li>
                  <li class="nav-item px-3">
                      <a href="booking.php" class="nav-link" id="active">Booking</a>
                  </li>
                  <li class="nav-item px-3">
                      <a href="rental.php" class="nav-link">Rental</a>

                  <li class="nav-item px-3">
                      <a href="contact.php" class="nav-link">Contact</a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>


   <!-- Main Navbar ends here -->


   <!-- Title section -->

  <section id="places" class="p-3">
      <div class="container">
          <div class="row text-center">
              <div class="col">
                  <h5 class="display-4">
                      <span class="text-teal">Start</span> Booking
                  </h5>
                  <p class="lead">Walk, Swim and Fly</p>
              </div>
          </div>
        </div>

    <!-- Title section ends here -->


    <!-- Packages details section -->

    <div class="container contact-form">
                <div class="contact-image">
                    <img src=" images/download.png" alt=""/>
                </div>
                <form id="contact-form" method="post" action="bookingform.php">
                    <h3>Start Booking Now</h3>
                   <div class="row ">
                        <div class="col-md-6 mb-0">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Your Name *" value="" required />
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Your Email *" value="" required/>
                            </div>

                            <div class="form-group">
                                <input type="number" name="pnumber" class="form-control" placeholder="Primary Number *" value="" required />
                            </div>

                            <div class="form-group">
                                <input type="number" name="wanumber" class="form-control" placeholder="WhatsApp Number (Optional)" value="" />
                            </div>

                            <div class="form-group">
                                <input type="text" name="headcount" class="form-control" placeholder="No. of Head Count" value="" />
                            </div>


                            <div class="form-group text-center">
                                <input type="submit" name="submit" class="btnContact" value="Book Now" />
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              <div class="form-group">
                                  <input type="date" name="pickup" class="form-control" placeholder="Pick Up Date" min="2021-01-01" max="2031-12-31" value="" />
                              </div>
                              <div class="form-group">
                                  <input type="date" name="drop" class="form-control" placeholder="Drop Date" min="2021-01-01" max="2031-12-31" value="" />
                              </div>

                              <div class="form-group">
                              <select class ="form-control" name="package" value="">
                                <option>Select Package</option>
                                <option>Munnar, Kerala</option>
                                <option>Alappuza,Kerala</option>
                                <option>Pondicherry, TamilNadu</option>
                              </select>
                            </div>

                            <div class="form-group">
                            <select  class ="form-control" name="car" value="">
                              <option>Select Vehicle</option>
                              <option>Normal Car</option>
                              <option>SUV Car</option>
                              <option>Sedan Car</option>
                              <option>Jeep</option>
                              <option>Bus</option>
                            </select>
                          </div>

                                 <textarea name="comment" class="form-control" placeholder="Comments *" style="width: 100%; height: 40px;" required></textarea>
                            </div>
                            </div>
                        </div>
                        </form>
                    </div>
                  </section>

   <!-- Package details ends here -->

       <!-- Footer starts here-->

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

       <!-- Footer ends here-->

<!-- Bootstrap Js files -->
<script src=" bootstrap/js/jquery.js"></script>
<script src=" bootstrap/js/popper.min.js"></script>
<script src=" bootstrap/js/bootstrap.js"></script>
<script src=" bootstrap/js/mdb.js"></script>
<!-- Bootstrap Js files ends here-->

<!-- Script starts here-->

<script>
  $('.carousel').carousel({
      interval : 3000,
      pause : 'hover'
  });
</script>

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


<!-- Script ends here-->

</body>
</html>
