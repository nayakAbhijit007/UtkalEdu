<?php
  include("include/header.php");
?>

<div class="page-title">

    <div class="title">
    <h2>CONTACT</h2>
    </div> 

</div>
 
        

  <!-- ==================== Contact Area (Start) ==================== -->
  <section class="contact" id="contact">
          
    <!-- ========== Google Map (Start) ========== -->
    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d924234.6303368191!2d66.59494515823903!3d25.193389461148573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e06651d4bbf%3A0x9cf92f44555a0c23!2sKarachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1645287442276!5m2!1sen!2s" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
    <!-- ========== Google Map (End) ========== -->

    <div class="contact-container">

      <div class="box-container">
    
        <!-- ========== Contact Info (Start) ========== -->
        <div class="contact-info">
      
          <h3>contact info</h3>

          <div class="info-item">
            <div class="intro">
              <i class="fas fa-phone"></i>
              <h4>contact</h4>
            </div>
            <div class="content">
              <p>+91 9556941153,</p>
              <p>+91 8093719253</p>
            </div>
          </div>


          <div class="info-item">
            <div class="intro">
              <i class="fas fa-envelope"></i>
              <h4>Email</h4>
            </div>
            <div class="content">
              <p class="gmail"><a href="../../cdn-cgi/l/email-protection.html" class="__cf_email__"></a>Utkaleducation123@Gmailcom</p>
            </div>
          </div>

          <div class="info-item">
            <div class="intro">
              <i class="fas fa-map-marker-alt"></i>
              <h4>address</h4>
            </div>
            <div class="content">
              <p>Plot No-409, Bomikhal, Rasulgarh, Bhubaneshwar - 751010, Opposite Esplanade Mall</p>
            </div>
          </div>
      
        </div>
        <!-- ========== Contact Info (End) ========== -->


        <!-- ========== Contact Form (Start) ========== -->
        <form method="post" class="contact-form" id="contact-form">
  
          <h3>get in touch</h3> 

          <input type="text" name="name" class="box" id="name" placeholder="name" required>
          <input type="text" name="course" class="box" id="course" placeholder="course" required>  
          <input type="email" name="email" class="box" id="email" placeholder="email" required>
          <input type="number" name="number" class="box" id="number" placeholder="number" required>         
          <textarea cols="30" rows="10" name="comment" class="box" id="comment" placeholder="message"></textarea>
          
          <button type="submit" class="btn" name="submit" id="submit">submit</button>

          <span class="alert" id="msg"></span>
  
        </form>
        <!-- ========== Contact Form (End) ========== -->
    
      </div>

    </div>

  </section>
  <!-- ==================== Contact Area (End) ==================== -->



  <?php
  include("include/footer.php");
?>