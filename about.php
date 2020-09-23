
<!DOCTYPE html>
<html lang="zxx">
   <?php include 'header.php';  ?>
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
                  <li>About</li>
               </ul>
            </div>
         </div>
      </div>
      <!-- //short-->
      <!--about-->
      <section class="about-inner py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <div class="title-sub text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
               <h3 class="title mb-md-4 mb-sm-3 mb-3">About Us</h3>
               <p>It feels like the World is standing still,but if you look at the land it’s a different story.The Land provides us with many gift's. As our World is moving into digital era, we have come forword to help the Farmers, who works on the land day and night. Discover the stories of our Customers,who are still giving their all to the Land because the land never stops Giving .We provide Service that enable Farmers to stay connected to tractors, get our service and  helps them to grow. </p>
            </div>
            <div class="row">
               <div class="col-lg-5 w3layouts-left-img">
                  <img src="images/m4.jpg" class="img-fluid" alt="">
               </div>
               <div class="col-lg-7 w3layouts-right-side-img">
                <!--   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore
                  </p> -->
                  <div class="row mt-lg-4 mt-md-3 mt-3">
                     <div class="col-lg-3 col-md-4 col-sm-3 text-center about-inner-icon">
                        <span class="fas fa-gavel"></span>
                     </div>
                     <div class="col-lg-9 col-md-8 col-sm-9 about-inner-agile-grids">
                        <h4 >Professional Services</h4>
                        <p>Seed drill is used for sowing of different type of seeds. The seed drill effectively sows seeds at equal distances and proper depth and helps avoid wastage.
                        </p>
                     </div>
                  </div>
                  <div class="row mt-lg-4 mt-md-3 mt-3">
                     <div class="col-lg-3 col-md-4 col-sm-3 text-center about-inner-icon">
                        <span class="fas fa-cogs"></span>
                     </div>
                     <div class="col-lg-9 col-md-8 col-sm-9 about-inner-agile-grids">
                        <h4> Maintanence</h4>
                        <p>We manintain our machines so that services not get disturbed 
                        </p>
                     </div>
                  </div>
               </div>
            </div>
          <!--   <div class="row mt-lg-5 mt-md-4 mt-3">
               <div class="col-lg-7 w3layouts-right-side-img">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore 
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore
                  </p>
                  <div class="row mt-lg-4 mt-md-3 mt-3">
                     <div class="col-lg-3 col-md-4 col-sm-3 text-center about-inner-icon">
                        <span class="fas fa-gavel"></span>
                     </div>
                     <div class="col-lg-9 col-md-8 col-sm-9 about-inner-agile-grids">
                        <h4 class="mt-3">Professional Services</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore
                           incididunt ut labore et
                        </p>
                     </div>
                  </div>
                  <div class="row mt-lg-4 mt-md-3 mt-3">
                     <div class="col-lg-3 col-md-4 col-sm-3 text-center about-inner-icon">
                        <span class="fas fa-cogs"></span>
                     </div>
                     <div class="col-lg-9 col-md-8 col-sm-9 about-inner-agile-grids">
                        <h4>Good Maintain</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore
                           incididunt ut labore et
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-5 w3layouts-left-img">
                  <img src="images/a9.jpg" class="img-fluid" alt="">
               </div>
            </div> -->
         </div>
      </section>
      <!--//about-->
      <!-- subscribe -->
     <!--  <section class="subscribe py-lg-4 py-md-3 py-sm-3 py-3" >
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <div class="title-sub text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
               <h3 class="title mb-md-4 clr mb-sm-3 mb-3">Subscribe Us</h3>
               <p class="text-white">Join Us and let us help you ,for joining us do subscribe us</p>
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
      <?php include 'footer.php'; ?>
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