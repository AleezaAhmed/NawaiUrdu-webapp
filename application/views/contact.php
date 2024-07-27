<!DOCTYPE html>
<html lang="en">
 <!-- head section starts -->
 <?php include('web_inc/head.php');?>
    <!-- head section ends -->
  <body>
    <!-- header section starts -->
    <?php include('web_inc/header.php');?>
    <!-- header section ends -->
    <!-- contact section starts  -->

    <section class="contact">
      <div class="row">
        <div class="image">
          <img src="<?=base_url()?>assets/web/images/contactus-img.svg" alt="" />
        </div>

        <form action="<?=base_url()?>Splash/contact_form" method="post">
          <h3>Contact Us</h3>
          <input
            type="text"
            placeholder="enter your name"
            required
            maxlength="100"
            name="name"
            class="box"
          />
          <input
            type="email"
            placeholder="enter your email"
            required
            maxlength="100"
            name="email"
            class="box"
          />
          <input
            type="number"
            min="0"
            max="9999999999"
            placeholder="enter your number"
            required
            maxlength="10"
            name="number"
            class="box"
          />
          <textarea
            name="msg"
            class="box"
            placeholder="enter your message"
            required
            cols="30"
            rows="10"
            maxlength="1000"
          ></textarea>
          <input
            type="submit"
            value="send message"
            class="inline-btn"
            name="submit"
          />
        </form>
      </div>

      <div class="box-container">
        <div class="box">
          <i class="fas fa-phone"></i>
          <h3>Phone Number</h3>
          <a href="tel:1234567890">123-456-7890</a>
        </div>

        <div class="box">
          <i class="fas fa-envelope"></i>
          <h3>Email Address</h3>
          <a href="mailto:NawaiUrdu@gmail.com">NawaiUrdu@gmail.com</a>
        </div>

        <!-- <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>Office Address</h3>
         <a href="#">Gulshan Block 5, Karachi, Pakistan </a>
      </div> -->
      </div>
    </section>

    <!-- contact section ends -->
		<!-- footer section starts -->
		<?php include('web_inc/footer.php');?>
    <!-- footer section ends -->
  </body>
</html>
