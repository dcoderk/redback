<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package redback
 */

?>


<!-- Footer -->
<footer class="footer-bg font-small  pt-4">

<!-- Footer Links -->
<div class="container text-center text-md-left">
  
  <div class="chat-icon">
    <a href="#!"><img src="<?php echo get_template_directory_uri(); ?>/img/chat-icon.png" width="105" height="95" alt="chat" /></a> 
  </div>

  <div class="row footer-content p-4">

    <div class="col-md-5 col-sm-12 mt-md-0 mt-3">
      <span class="footer-heading">About Us</span>
      <p class="about-description">Redback Conferencing is an Australian conferencing and digital <br>
events provider dedicated to helping organisations meet, present <br>
and collaborate at a distance.</p>

       <div class="f-list1"> 
        <ul class="list-unstyled">
          <li>
            <a href="#!">Leadership Team</a>
          </li>
          <li>
            <a href="#!">Meet the Family</a>
          </li>
          <li>
            <a href="#!"> Social Responsibility</a>
          </li>
          <li>
            <a href="#!">Contact Us</a>
          </li>
          <li>
            <a href="#!">Privacy Statement</a>
          </li>
        </ul>
      </div>  

      <!--Social buttons-->
    <div class="social-icon">
      <a><i class="fab fa-twitter fa-lg"> </i></a>
      <a><i class="fab fa-instagram fa-lg"></i></a>
      <a><i class="fab fa-facebook-f fa-lg"> </i></a>
      <a><i class="fab fa-youtube fa-lg"></i></a>
    </div>
    <!--/.Social buttons-->

    </div>

    <hr class="clearfix w-100 d-md-none pb-3">

    <div class="col-md-3 col-sm-12 mb-md-0 mb-3 services-list">
       <span class="footer-heading">Services</span>
       <span> 
        <ul class="list-unstyled">
          <li>
            <a href="#!">Teleconferencing</a>
          </li>
          <li>
            <a href="#!">Web Conferencing</a>
          </li>
          <li>
            <a href="#!">Video Conferencing</a>
          </li>
          <li>
            <a href="#!">Webinars</a>
          </li>
          <li>
            <a href="#!">Webcasts</a>
          </li>
          <li>
            <a href="#!">Digital Event Consulting</a>
          </li>
        </ul>
      </span>  
      
      <div class="footer-heading f-list2"> Resources</div>
       <span> 
        <ul class="list-unstyled">
          <li>
            <a href="#!">Resources</a>
          </li>
          <li>
            <a href="#!">Support Centre</a>
          </li>
          <li>
            <a href="#!">Redbacktalk Blog</a>
          </li>
        </ul>
      </span>  
    </div>
    
    <div class="col-md-4 col-sm-12 mb-md-0 mb-3 contact-info">
        <span class="footer-heading"> CONTACT US</span>
        <p class="footer-heading"><i class="fas fa-map-marker-alt fa-lg"></i> Sydney Office:</p>
        <p>Level 21, 320 Pitt Street, Sydney NSW 200<br>
          (02) 8014 5150
        </p>
      
        <p class="footer-heading"><i class="fas fa-map-marker-alt fa-lg"></i> Melbourne Office:</p>
        <p>Level 7, 460 Collins Street (Entrance off William St.)<br>
            Melbourne VIC 3000 <br>
            (03) 9034 3960
        </p>
      
        <div class="footer-heading"><i class="fas fa-phone fa-lg"></i> AUSTRALIAN TOLL FREE: 1800 733-416</div>
        <div class="footer-heading"><i class="fas fa-headset fa-lg"></i> NZ TOLL FREE: 0800 231 717</div>
        <div class="footer-heading"><i class="fas fa-user-friends"></i> OVERSEAS: +61 2 9037 0330</div>
      
    </div>

  </div>

</div>
<!-- Footer Links -->

</footer>
<!-- Footer -->


<!-- Copyright -->
<div class="copyright">
  <div class="container">
  <div class="row">
    <div class="col">
    <div class="py-3">Copyright 2019. Designed by Pounce Marketing. All Rights Reserved.</div>
    </div>
  </div>
  </div>
</div>
<!-- Copyright -->


<?php wp_footer(); ?>

</body>
</html>

