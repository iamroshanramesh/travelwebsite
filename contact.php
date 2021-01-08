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

<title>X-plore | ContactUs</title>
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
                         <a href="packages.php" class="nav-link" >Packages</a>
                     </li>
                     <li class="nav-item px-3">
                         <a href="booking.php" class="nav-link" >Booking</a>
                     </li>
                     <li class="nav-item px-3">
                         <a href="rental.php" class="nav-link">Rental</a>

                     <li class="nav-item px-3">
                         <a href="contact.php" class="nav-link"  id="active">Contact</a>
                     </li>
                 </ul>
             </div>
         </div>
     </nav>


      <!-- Main Navbar ends here -->


      <!-- Form begins here -->


  <section id="contact" class="p-3">

    <div class="container contact-form">
                <div class="contact-image">
                    <img src=" images/contact1.jpg" alt=""/>
                </div>
                <form id="contact-form" method="post" action="contactform.php">
                    <h3>Drop Us a Message</h3>
                   <div class="row ">
                        <div class="col-md-6 mb-0">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Your Name *" value="" required />
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Your Email *" value="" required/>
                            </div>

                            <div class="form-group">
                                <input type="number" name="number" class="form-control" placeholder="Your Phone Number *" value="" required />
                            </div>

                            <div class="form-group text-center">
                                <input type="submit" name="submit" class="btnContact" value="Send Message" />
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea name="subject" class="form-control" placeholder="Your Subject *" style="width: 100%; height: 40px;" required></textarea><br>
                                 <textarea name="message" class="form-control" placeholder="Your Message *" style="width: 100%; height: 80px;" required></textarea>
                            </div>
                            </div>
                        </div>
                        </form>
                    </div>

        <!-- Form ends here -->


       <!-- Contact details starts here -->

      <div class="container">
          <div class="row">
              <div class="col-md-15">
                  <div class="card mt-3">
                      <div class="card-body bg-teal text-center text-white">
                          <i class="fa fa-envelope fa-4x"></i>
                          <h2>Contact For Bookings</h2>
                          <p>We would love to hear from you. Just call us with your required pakage and we will do the rest for you. You adventure is about to start as soon as you pick your phone to call us.</p>
                      </div>
                  </div>
                  <ul class="list-group">
                      <li class="list-group-item">
                          <h3>Contact Details</h3>
                      </li>
                      <li class="list-group-item">
                          Meet us at X-Plore Pvt Ltd, Airport Road, Coimbatore, TamilNadu, India
                      </li>
                      <li class="list-group-item">
                          Contact us at +91 1234567890 (or) 01 234 564
                      </li>
                      <li class="list-group-item">
                         Mail us at info@xplore.com (or) xplore@gmail.com
                      </li>
                      <li class="list-group-item">
                         We are open all the day from Monday to Sunday.
                      </li>
                      <li class="list-group-item">
                         Meet or call us any time between 9.00 AM - 9.00 PM
                      </li>
                  </ul>
              </div>
           </section>
      <!-- Contact details ends here -->



     <!-- Footer details starts here -->

   <section class="p-3 bg-teal text-white text-center">
       <div class="container">
           <div class="row">
               <div class="col">
                   <h1>Follow X-plore</h1>
                   <p>Walk, Swim & Dive</p>
                   <i class="fab fa-facebook-square fa-4x m-3"></i>
                   <i class="fab fa-youtube fa-4x m-3"></i>
                   <i class="fab fa-twitter fa-4x m-3"></i>
               </div>
           </div>
       </div>
 </section>

    <!-- Footer details ends here -->


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
