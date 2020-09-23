<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="zxx">

         <!--//headder-->
         <!-- banner -->
         <!-- <div class="inner_page-banner one-img">
         </div> -->
         <!--//banner -->
         <!-- short -->

         <div class="using-border py-3">
            <div class="inner_breadcrumb  ml-4">
               <ul class="short_ls">
                  <li>
                     <a href="index.html">Home</a>
                     <span>/ /</span>
                  </li>
                  <li>Contact</li>
               </ul>
            </div>
         </div>
         <!-- //short-->
      </div>
      <!--contact -->
      <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <div class="title-sub text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
               <h3 class="title mb-md-4 mb-sm-3 mb-3"  style="padding-top:60px;">Get In Touch</h3>
               <p>we are here to help you <br>Change is good for betterment</p>
            </div>
            <!--contact-form-->
            <div class="row contact-right mt-lg-5 mt-md-4 mt-3">
               <div class="col-lg-4 col-md-5 footer_grid_left text-center">
                  <div class="contact_footer_grid_left text-center mb-3">
                     <span class="fas fa-map-marker-alt"></span>
                  </div>
                  <p>At rampur (M),ta.biloli,Dist.Nanded <br>India Maharashtra-431710.</p>
               </div>
               <div class="col-lg-4 col-md-3 footer_grid_left text-center">
                  <div class="contact_footer_grid_left text-center mb-3">
                     <span class="fas fa-phone-volume"></span>
                  </div>
                  <p>+(91) 7887992387<br>+(91) 9325577449</p>
               </div>
               <div class="col-lg-4 col-md-4 footer_grid_left text-center">
                  <div class="contact_footer_grid_left text-center mb-3">
                     <span class="fas fa-at"></span>
                  </div>
                  <p><a href="mailto:info@example.com">asmitavr97@gmail.com</a> 
                     <br><a href="mailto:info@example.com">asmitavr97@gmail.com</a>
                  </p>
               </div>
            </div>
         </div>
      </section>
      <!--contact-map -->
      <section>
         <div class="container-fluid">
            <div class="contact-form ">
               <div class="address_mail_footer_grids">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15109.245697161597!2d77.63601371055611!3d18.784269695092604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bce14afa96da509%3A0xbf3085ea09333341!2sRampur%20M%2C%20Maharashtra%20431710!5e0!3m2!1sen!2sin!4v1600789110928!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
               </div>
            </div>
         </div>
      </section>
      <!--//contact-map -->
      <!--contact-form -->
      <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <div class="agile-info-para">
               <form action="" method="POST">
                  <?php include('email.php') ?>
                  <div class="row agile-wls-contact-mid">
                     <div class="col-md-6 form-group contact-forms">
                        <input type="text" class="form-control" placeholder="Name" name="name" required="">
                     </div>
                     <div class="col-md-6 form-group contact-forms">
                        <input type="email" class="form-control" placeholder="Email"name="mail" required="">
                     </div>
                     <div class="col-md-6 form-group contact-forms">
                        <input type="number" class="form-control" placeholder="number"name="number" required="">
                     </div>
                  </div>
                  <div class="form-group contact-forms">
                     <textarea class="form-control" rows="3" placeholder="Message.." name="message" required=""></textarea>
                  </div>
                  <div class="text-left click-subscribe">
                     <button type="submit" name="submit" class="btn contact-btn">Send</button>
                  </div>
               </form>
            </div>
         </div>
      </section>

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