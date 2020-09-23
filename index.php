<?php
include'header.php';
?>
<?php

session_start();
 if(isset($_SESSION['username'])){
   $_SESSION['msg']="welcom to Farmers Friendly ";
   header("location: login.php");
}
   if (isset($_GET['logout'])) {
      session_destroy();
      unset($_SESSION['username']);
      header("location:login.php");
   }
 

  ?>
<!DOCTYPE html>
<html lang="zxx">
  
               <!--//navigation section -->
               <div class="clearfix"> </div>
            </div>
         </div>
         <!--banner -->
         <!-- Slideshow 4 -->
         <div class="slider">
            <div class="callbacks_container">
               <ul class="rslides" id="slider4">
                  <li>
                     <div class="slider-img one-img">
                        <div class="container">
                           <div class="slider-info">
                              <h4>Test it to belive it</h4>
                              <div class="outs_more-buttn">
                                 <a href="contact.html">Book Now</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="slider-img two-img">
                        <div class="container">
                           <div class="slider-info ">
                              <h4><br>Let us help you to let you Grow Digital<br></h4>
                              <div class="outs_more-buttn">
                                 <a href="contact.html">Book Now</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="slider-img three-img">
                        <div class="container">
                           <!-- <div class="slider-info">
                              <h4>Clean Your Home<br>Get Off <span>75%</span> Cleaning</h4>
                              <div class="outs_more-buttn">
                                 <a href="contact.html">Book Now</a>
                              </div>
                           </div> -->
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
            <!-- This is here just to demonstrate the callbacks -->
            <!-- <ul class="events">
               <li>Example 4 callback events</li>
               </ul>-->
         </div>
         <div class="clearfix"></div>
      </div>
      <!-- //banner -->
      <!-- About-one -->
      <section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <div class="title-sub text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
               <h3 class="title mb-md-4 mb-sm-3 mb-3">What We Can</h3>
               <p>We simply provide service throuth are machins to make less efforts for farming we know that being famer is not easy, so we just want to  make less hard for you  </p>
            </div>
            <div class="row abt-colm pb-lg-4 pb-md-3 pb-3 text-center">
               <div class="col-lg-4 col-md-4 ile-abt-info">
                  <div class="about-w3layouts-icons">
                     <span class="fas fa-gavel"></span>
                  </div>
                  <h4 class="my-md-3 my-2">CALTIVATOR</h4>
                  <div class="info-sub-w3">
                     <p>Cultivator is best suited for Land Preparation. This tractor attachment is the best solution for deep penetration and thorough mixing of soil.</p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 ile-abt-info">
                  <div class="about-w3layouts-icons">
                     <span class="fas fa-cogs"></span>
                  </div>
                  <h4 class="my-md-3 my-2">POWER HARRO</h4>
                  <div class="info-sub-w3">
                     <p>Power Harrow is a tractor implement for land preparation. It is used in secondary tillage operations to increase crop productivity.</p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 ile-abt-info">
                  <div class="about-w3layouts-icons">
                     <span class="fab fa-accusoft"></span>
                  </div>
                  <h4 class="my-md-3 my-2">GYROVATOR</h4>
                  <div class="info-sub-w3">
                     <p>Gyrovator  is a tractor mounted and PTO operated implement. Does 3 operations in one time.i.e. cutting, mixing and levelling of soil.</p>
                  </div>
               </div>
            </div>
            <!-- //About-one -->
         </div>
      </section>
      <!--states -->
      <section>
         <div class="container-fluid">
            <div class="jst-must-info text-center">
               <div class="row stats-info">
                  <div class="col-md-3 col-sm-6 col-6 stats-grid-1 px-0">
                     <div class=" stats-grid clr-1">
                        <div class="counter">75</div>
                        <div class="stat-info">
                           <h5 class="pt-2">Implements</h5>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-6 col-6 stats-grid-2 px-0">
                     <div class=" stats-grid clr-2">
                        <div class="counter">150</div>
                        <div class="stat-info">
                           <h5 class="pt-2">Best Deivers</h5>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-6 col-6 stats-grid-3 px-0">
                     <div class=" stats-grid clr-3">
                        <div class="counter">100</div>
                        <div class="stat-info">
                           <h5 class="pt-2">Client</h5>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-6 col-6 stats-grid-4 px-0">
                     <div class=" stats-grid clr-4">
                        <div class="counter">50+</div>
                        <div class="stat-info">
                           <h5 class="pt-2">Members</h5>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--//states -->
      <!-- services -->
      <section class="about py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <div class="title-sub text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
               <h3 class="title mb-md-4 mb-sm-3 mb-3">What We Provide</h3>
               <p>We offer personalized technical assistance for farmers looking for land to support new or expanded operations </p>
            </div>
            <div class="row">
               <div class="col-lg-7 col-md-7 ser-grid-wthree">
                  <div class="sub-ser-matter-agile">
                     <h4>Professional Services</h4>
                  </div >
                  <div class="ser-service-mid mb-3">
                     <h5>Good Maintain</h5>
                  </div>
                  <p>We provide service over the farm in every season on every types of land .    
                  </p>
                  <div class="outs_more-buttn">
                     <a href="contact.php">Book Now</a>
                  </div>
               </div>
               <div class="col-lg-5 col-md-5 ser-left-img">
                  <img src="images/ss3.png" class="img-fluid" alt="">
               </div>
            </div>
            <div class="row mt-lg-4 mt-md-4 mt-sm-4 mt-3">
               <div class="col-lg-5 col-md-5 ser-left-img">
                  <img src="images/ss3.png" class="img-fluid" alt="">
               </div>
               <div class="col-lg-7 col-md-7 ser-grid-wthree">
                  <div class="sub-ser-matter-agile">
                     <h4>Quality Services</h4>
                  </div >
                  <div class="ser-service-mid mb-3">
                     <h5>Good Community</h5>
                  </div>
                  <p>we are connected to different service providers abd owners to provide servicess in resneble prices ,to know moreabout us lets join us.       
                  </p>
                  <div class="outs_more-buttn">
                     <a href="contact.php">Book Now</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--//services -->
      <!-- Video -->
     <!-- <section class="video py-lg-4 py-md-3 py-sm-3 py-3" >
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <div class="video-info ">
               <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt
                  Lorem ipsum dolor sit amet      
                  Lorem ipsum dolor sit ametLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt 			   
               </p>
            </div>
            <div class="button text-center">
               <a href="#small-dialog1" class="play-icon popup-with-zoom-anim"><span class="fa fa-play-circle" aria-hidden="true"></span></a>			
            </div>
            <div id="small-dialog1" class="mfp-hide tree_pop">
               <div class="agileits_modal_body">
                  <iframe src="https://player.vimeo.com/video/2910294"></iframe>
               </div>
            </div>
         </div>
      </section>-->
      <!--//Video -->
      <!-- Team-->
      <section class="clients py-lg-4 py-md-3 py-sm-3 py-3" id="testimonials">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <div class="title-sub text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
               <h3 class="title mb-md-4 mb-sm-3 mb-3">Professional Team</h3>
               <p >Here is are small team, We are very happy to help you</p>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 team-outs-row text-center">
                           <div class="img-up-txt">
                              <img src="images/t1.jpg" alt="" class="img-fluid">
                              <div class=" team-syas-text ">
                                 <h4 class="mt-3">Diyana Deo </h4>
                                 <span> Team Leader</span>
                                 <p>she is  Master in agriculture and implaments.with effective management and communication skills.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 team-outs-row text-center">
                           <div class="img-up-txt">
                              <img src="images/t2.jpg" alt="" class="img-fluid">
                              <div class=" team-syas-text ">
                                 <h4 class="mt-3">Sam Willson</h4>
                                 <span> Head Driver</span>
                                 <p>Good at rood Maps and Land harvesting, He is bachlor in agriculture. 
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 team-outs-row text-center">
                           <div class="img-up-txt">
                              <img src="images/t3.jpg" alt="" class="img-fluid">
                              <div class=" team-syas-text ">
                                 <h4 class="mt-3"> Lilly Kent</h4>
                                 <span> Team Engineear</span>
                                 <p>Mechanical Engineear and good team Member.
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 team-outs-row text-center">
                           <div class="img-up-txt">
                              <img src="images/t2.jpg" alt="" class="img-fluid">
                              <div class=" team-syas-text ">
                                 <h4 class="mt-3">Sam Willson</h4>
                                 <span>Head Driver</span>
                                 <p>Good at rood Maps and Land harvesting, He is bachlor in agriculture. 
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 team-outs-row text-center">
                           <div class="img-up-txt">
                              <img src="images/t3.jpg" alt="" class="img-fluid">
                              <div class=" team-syas-text ">
                                 <h4 class="mt-3">Lilly Kent</h4>
                                 <span> Team Engineear</span>
                                 <p>Mechanical Engineear and good team Member.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 team-outs-row text-center">
                           <div class="img-up-txt">
                              <img src="images/t1.jpg" alt="" class="img-fluid">
                              <div class=" team-syas-text ">
                                 <h4 class="mt-3">Diyana Deo</h4>
                                 <span> Team Leader</span>
                                 <p>she is  Master in agriculture and implaments.with effective management and communication skills.
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 team-outs-row text-center">
                           <div class="img-up-txt">
                              <img src="images/t3.jpg" alt="" class="img-fluid">
                              <div class=" team-syas-text ">
                                 <h4 class="mt-3">Lilly Kent</h4>
                                 <span> Team Engineear</span>
                                 <p>Mechanical Engineear and good team Member.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 team-outs-row text-center">
                           <div class="img-up-txt">
                              <img src="images/t1.jpg" alt="" class="img-fluid">
                              <div class=" team-syas-text ">
                                 <h4 class="mt-3">Diyana Deo</h4>
                                 <span> Team Leader</span>
                                 <p>she is  Master in agriculture and implaments.with effective management and communication skills.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 team-outs-row text-center">
                           <div class="img-up-txt">
                              <img src="images/t2.jpg" alt="" class="img-fluid">
                              <div class=" team-syas-text ">
                                 <h4 class="mt-3">Sam Willson</h4>
                                 <span>Head Driver</span>
                                 <p>Good at rood Maps and Land harvesting, He is bachlor in agriculture. 
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                  </a>
               </div>
            </div>
         </div>
      </section>
      <!--//clients -->
      <!-- subscribe -->
      <!-- <section class="subscribe py-lg-4 py-md-3 py-sm-3 py-3" >
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
      <!--footer-->
      <?php
      include 'footer.php';

        ?>
      <!--//footer-->
      <!--js working-->
      <script src='js/jquery-2.2.3.min.js'></script>
      <!--//js working--> 
      <!--responsiveslides banner-->
      <script src="js/responsiveslides.min.js"></script>
      <script>
         // You can also use "$(window).load(function() {"
         $(function () {
         	// Slideshow 4
         	$("#slider4").responsiveSlides({
         		auto: true,
         		pager:false,
         		nav:true ,
         		speed: 900,
         		namespace: "callbacks",
         		before: function () {
         			$('.events').append("<li>before event fired.</li>");
         		},
         		after: function () {
         			$('.events').append("<li>after event fired.</li>");
         		}
         	});
         
         });
      </script>
      <!--// responsiveslides banner-->		  
      <!--About OnScroll-Number-Increase-JavaScript -->
      <script src="js/jquery.waypoints.min.js"></script>
      <script src="js/jquery.countup.js"></script>
      <script>
         $('.counter').countUp();
      </script>
      <!-- //OnScroll-Number-Increase-JavaScript -->
      <!--pop-up-box video-->
      <script src="js/jquery.magnific-popup.js"></script>
      <script>
         $(document).ready(function() {
         $('.popup-with-zoom-anim').magnificPopup({
         type: 'inline',
         fixedContentPos: false,
         fixedBgPos: true,
         overflowY: 'auto',
         closeBtnInside: true,
         preloader: false,
         midClick: true,
         removalDelay: 300,
         mainClass: 'my-mfp-zoom-in'
         });
         
         });
      </script>
      <!-- //pop-up-box video -->
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