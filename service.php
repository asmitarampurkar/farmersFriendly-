<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="zxx">
  
         <!--//headder-->
         <!-- banner -->
         <div class="inner_page-banner one-img">
         </div>
         <!--//banner -->
         <!-- short -->
         <div class="using-border py-3">
            <div class="inner_breadcrumb  ml-4">
               <ul class="short_ls">
                  <li>
                     <a href="index.php">Home</a>
                     <span>/ /</span>
                  </li>
                  <li>service</li>
               </ul>
            </div>
         </div>
      </div>
      <!-- //short-->
      <!--Services -->
      <section class="service-one py-lg-4 py-md-3 py-sm-3 py-3" id="about">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
            <div class="title-sub text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
               <h3 class="title mb-md-4 mb-sm-3 mb-3">Our Services</h3>
               <p>We simply provide service throuth are machins to make less efforts for farming we know that being famer is not easy, so we just want to  make less hard for you</p>
            </div>
            <div class="row">
               <div class="col-lg-4 col-md-6 col-sm-6 service-inner-list">
                  <div class="ser-inner-agile">
                     <div class="ser-w3layouts-inner">
                        <img src="images/s8.jpg" alt=" " class="img-fluid">
                     </div>
                     <div class="ser-txt-inner">
                        <h4 class="py-3">REVERSIBLE PLOUGH</h4>
                        <p>Hight pulling power ensures a deeper cut when ploughing with the heavy reversible plough.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 service-inner-list">
                  <div class="ser-inner-agile">
                     <div class="ser-w3layouts-inner">
                        <img src="images/s9.png" alt=" " class="img-fluid">
                     </div>
                     <div class="ser-txt-inner">
                        <h4 class="py-3">Cultivator</h4>
                        <p>Cultivator is best suited for Land Preparation. This tractor attachment is the best solution for deep penetration and thorough mixing of soil.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 service-inner-list">
                  <div class="ser-inner-agile">
                     <div class="ser-w3layouts-inner">
                        <img src="images/s10.jpg" alt=" " class="img-fluid">
                     </div>
                     <div class="ser-txt-inner">
                        <h4 class="py-3">GYRAVOTOR</h4>
                        <p>A combination of the right speed and high ensures better soil pulverization. This provides uniform depth of rotation and optimum tractor loading along with the best mileage.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 mt-lg-4 mt-md-3 mt-3 service-inner-list">
                  <div class="ser-inner-agile">
                     <div class="ser-w3layouts-inner">
                        <img src="images/s11.jpg" alt=" " class="img-fluid">
                     </div>
                     <div class="ser-txt-inner">
                        <h4 class="py-3">POWER HARROW</h4>
                        <p>Power Harrow is a tractor implement for land preparation. It is used in secondary tillage operations to increase crop productivity.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 mt-lg-4 mt-md-3 mt-3 service-inner-list">
                  <div class="ser-inner-agile">
                     <div class="ser-w3layouts-inner">
                        <img src="images/s12.jpg" alt=" " class="img-fluid">
                     </div>
                     <div class="ser-txt-inner">
                        <h4 class="py-3">Seed Crum Fertilizer</h4>
                        <p>GreenSystem offers high-quality seeding implements to get the job done right.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 mt-lg-4 mt-md-3 mt-3 service-inner-list">
                  <div class="ser-inner-agile">
                     <div class="ser-w3layouts-inner">
                        <img src="images/s13.jpg" alt=" " class="img-fluid">
                     </div>
                     <div class="ser-txt-inner">
                        <h4 class="py-3">MULCHER</h4>
                        <p>Mulcher implement is primarily for paddy residue management. Best suited for turning cut paddy straw into natural manure</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--//service -->
      <!-- subscribe -->
     <!--  <section class="subscribe py-lg-4 py-md-3 py-sm-3 py-3" >
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <div class="title-sub text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
               <h3 class="title mb-md-4 clr mb-sm-3 mb-3">Subscribe Us</h3>
               <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do<br>tempor incididunt ut labore et</p>
            </div>
            <div class="subscribe-footer ">
               <form action="#" method="post">
                  <div class="row subscribe-form ">
                     <div class="col-md-8 col-lg-8 col-sm-8 pr-sm-0 contact-forms">
                        <input type="email" class="form-control" placeholder="Your Email" required="">
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-4 click-subscribe pl-sm-0">
                        <button type="submit" class="btn click-me">Subscribe</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </section> -->
      <!--//subscribe -->
      
      <?php include'footer.php';  ?>
      <!--//footer-->
      <!--js working-->
      <script src='js/jquery-2.2.3.min.js'></script>
      <!--//js working-->
      <!-- start-smoth-scrolling -->
      <script src="js/move-top.js"></script>
      <script src="js/easing.js"></script>
      <script>
         jQuery(document).ready(function ($) {
         	$(".scroll").click(function (event) {
         		event.preventDefault();
         		$('html,body').animate({
         			scrollTop: $(this.hash).offset().top
         		}, 900);
         	});
         });
      </script>
      <!-- start-smoth-scrolling -->
      <!-- here stars scrolling icon -->
      <script>
         $(document).ready(function () {
         
         	var defaults = {
         		containerID: 'toTop', // fading element id
         		containerHoverID: 'toTopHover', // fading element hover id
         		scrollSpeed: 1200,
         		easingType: 'linear'
         	};
         
         
         	$().UItoTop({
         		easingType: 'easeOutQuart'
         	});
         
         });
      </script>
      <!-- //here ends scrolling icon -->
      <!--bootstrap working-->
      <script src="js/bootstrap.min.js"></script>
      <!-- //bootstrap working-->
   </body>
</html>