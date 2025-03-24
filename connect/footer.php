<?php
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];
$Url = $protocol . $host . '/';
?>
<footer id="footer">
 <div class="bottom-bar d-md-none">
      <a href="tel:+919677876445" class="bottom-btn phone">
        <i class="fa fa-phone pe-2"></i>+91-9677876445
      </a>
      <button type="button" class="bottom-btn email" data-bs-toggle="modal" data-bs-target="#inquiryFormModal">
       <a href="https://wa.me/+919677876445?text=Hi%2C%20I%20have%20an%20enquiry" class="text-white d-flex justify-content-center align-items-center" target="_blank"><i
    class="fab fa-whatsapp pe-2 text-white"></i>Chat Now
      </a> 
      </button>
    </div>
            <div class="footer-content">
				<div class="container">
					<div class="row clearfix">
                    
                    <!--Column-->
                    <div class="column col-lg-3 col-md-5 col-sm-12">
                        <div class="widget news-widget">
                            <h3>Contact Us </h3>
                            <div class="widget-content">
                                
                                <div class="text">
                                    <b class="text-white">Address : </b><br>No.1, First Floor, First Street,<br>
                     Bharathi Nagar, Tambaram - Mudichur Road<br>
                     Tambaram West , Chennai - 600063 <br>
                     Tamil Nadu, India
                                </div>

                               <div class="text footer-next"> 
                                    <b class="text-white">Phone : </b><br><a href="tel:+914443162953">+91 - 44 - 4316 2953</a> <br>
                                    <a href="tel:+919677876445"> +91 - 9677 87 6445 </a><br>
                                    <a href="tel:+919840599789"> +91 - 9840 59 9789</a> <br>
                                    <a href="tel:+918870839789"> +91 - 88708 39789</a>                                    
                                </div>

                                <div class="text footer-next"> 
                                    <b class="text-white">Email : </b><br> <a href="mailto:marketing@jayamwebsolutions.com">marketing@jayamwebsolutions.com</a>
                                </div>


                            </div>
                        </div>
                    </div>
                    
                    <!--Column-->
                    <div class="column col-lg-5 col-md-7 col-sm-12">
                        <div class="widget links-widget">
                            <h3>Our Services</h3>
                            <div class="widget-content">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <ul class="list">
                                            <li><i class="fa fa-angle-right" aria-hidden="true"></i> <a href="<?=$Url?>web-design-company-in-chennai.php"> Web Design &amp; Development</a></li>
                                            <li><i class="fa fa-angle-right" aria-hidden="true"></i> <a href="<?=$Url?>ecommerce-website-development.php">ECommerce Website</a></li>
                                            <li><i class="fa fa-angle-right" aria-hidden="true"></i>  <a href="<?=$Url?>seo-company-in-chennai.php">Digital Marketing</a></li>
                                            <li><i class="fa fa-angle-right" aria-hidden="true"></i> <a href="<?=$Url?>mobile-app-development-company-in-chennai.php">Mobile App Development</a></li>
                                            
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <ul class="list">
                                          <li><i class="fa fa-angle-right" aria-hidden="true"></i> <a href="<?=$Url?>web-hosting-in-chennai.php">
Web Hosting</a></li>
                                            <li><i class="fa fa-angle-right" aria-hidden="true"></i> <a href="<?=$Url?>email-hosting-in-chennai.php">Email Hosting</a></li>
                                            <li><i class="fa fa-angle-right" aria-hidden="true"></i> <a href="<?=$Url?>domain-registration-chennai.php">Domain Registration</a></li>
                                            <li><i class="fa fa-angle-right" aria-hidden="true"></i> <a href="<?=$Url?>brand-identity-services-in-chennai.php">Brand Identity</a></li>
                                            <li><i class="fa fa-angle-right" aria-hidden="true"></i> <a href="<?=$Url?>privacy-policy.php">Privacy & Policy</a></li>
                                          </ul>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                    
                    <!--Column-->
                    <div class="column col-lg-4 col-md-12 col-sm-12" style="padding: 0px;">
                        <div class="footer-widget news-widget">
                             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.2825663396698!2d80.09183210852146!3d12.922271759999262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525f722faf2fdf%3A0xe2d593275a30054b!2sJayam%20Web%20Solutions!5e1!3m2!1sen!2sin!4v1581336209957!5m2!1sen!2sin" width="100%" height="370"></iframe> 
                        </div>
                    </div>
                    
                </div>
				</div>
			</div>
            <div class="copyright-content">
                <div class="container">
                    <div class="copyright-text text-center p-t-15">
						<p>© 2024 JAYAM WEB SOLUTIONS. All Rights Reserved.</p>
					</div>
                </div>
            </div>
			
			<div class="right-fixed-icons">
				<ul>
					<li>
						<a href="https://api.whatsapp.com/send?phone=919677876445" rel="whatsapp" target="_blank"> <img src="images/whatsapp1.png" width="45" title="whatsapp" alt="whatsapp icon chennai website design company "> </a>
					</li>
					<li>
						<a href="tel:+919677876445" title="pnumber" rel="pnumber"><img class="border-radius-50" width="40" src="images/phone-call-icon-16.webp" title="call" alt="call icon webdesign company chennai"/> </a>
					</li>
					<!-- <li>
						<a href="#"><img class="border-radius-50" width="40" src="images/QUOTE-icon-gradient.webp" alt=""/></a>
					</li> -->
			</div>
        </footer>
        <!--chat code start-->
        <!--<script type="text/javascript">-->
        <!--var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();-->
        <!--(function(){-->
        <!--var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];-->
        <!--s1.async=true;-->
        <!--s1.src='https://embed.tawk.to/5d1aed4d22d70e36c2a3b0a7/default';-->
        <!--s1.charset='UTF-8';-->
        <!--s1.setAttribute('crossorigin','*');-->
        <!--s0.parentNode.insertBefore(s1,s0);-->
        <!--})();-->
        <!--</script>-->
        <!--chat code end-->
        <!--insight code start-->
        <script type="text/javascript">
        _linkedin_partner_id = "4204596";
        window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
        window._linkedin_data_partner_ids.push(_linkedin_partner_id);
        </script><script type="text/javascript">
        (function(l) {
        if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])};
        window.lintrk.q=[]}
        var s = document.getElementsByTagName("script")[0];
        var b = document.createElement("script");
        b.type = "text/javascript";b.async = true;
        b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
        s.parentNode.insertBefore(b, s);})(window.lintrk);
        </script>
        <noscript>
        <img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=4204596&fmt=gif" />
        </noscript>

        
      <script src="https://cms.jayamwebsolutions.com/assets/js/main.js"></script>
      
<script src="js/script.js"></script>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
  </body>
</html>

