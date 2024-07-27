<!DOCTYPE html>
<html lang="en">
  <!-- head section starts -->
	<?php include('web_inc/head.php');?>
    <!-- head section ends -->
  <body>
    <!-- header section starts -->
    <?php include('web_inc/header.php');?>
    <!-- header section ends -->

    <section class="home" id="home">
      <div class="row">
        <div class="content">
          <h3>NAWAI<span> URDU </span></h3>
          <h4>Embark on an Urdu adventure,</h4>
          <h4>wherever you are!</h4>
          <h4>Learn anytime, anywhere,</h4>
          <p>Making every moment a step closer to fluency!</p>
          <a href="<?=base_url()?>Splash/about" class="btn">Explore</a>
        </div>
        <div class="image">
          <img src="<?=base_url()?>assets/web/images/clip2.png" alt="" />
        </div>
      </div>
    </section>

    <!-- counter section -->
    <section class="count">
      <div class="box-container">
        <div class="box">
          <i class="fas fa-laptop-house"></i>
          <div class="content">
            <h3>Learn From Anywhere</h3>
          </div>
        </div>
        <div class="box">
          <i class="fas fa-hand-point-up"></i>
          <div class="content">
            <h3>Hands-on Experience</h3>
          </div>
        </div>
        <div class="box">
          <i class="fa-solid fa-xmark"></i>
          <div class="content">
            <h3>No Commitments</h3>
          </div>
        </div>
        <div class="box">
          <i class="fas fa-chart-line"></i>
          <div class="content">
            <h3>Progress Tracking</h3>
          </div>
        </div>
      </div>
    </section>

    <!-- about section starts -->

    <section class="about_home">
      <div class="row_home">
        <div class="image_home">
          <img
            src="<?=base_url()?>assets/web/images/Bear_Anthropomorphic_Clipart_Hd_PNG__Anthropomorphic_Pencil__Cartoon__Student__Child_PNG_Image_For_Free_Download-removebg-preview.png"
            alt=""
          />
        </div>

        <div class="content">
          <h3>WHY LEARN URDU WITH NAWAI?</h3>
          <p>
            At Nawai Urdu, we excel in Urdu language learning due to our
            cutting-edge technology and user-friendly interface. Our platform
            provides real-time feedback, personalized learning paths, and
            interactive features, ensuring rapid progress for learners of all
            levels. With a commitment to continuous improvements.
          </p>
          <a href="<?=base_url()?>User/signup" class="inline-btn">Register Free</a>
        </div>
      </div>
    </section>

    <!-- about section ends -->

    <!-- feature section -->

    <section class="features" id="features">
      <h1 class="heading">App <span>Features</span></h1>
      <div class="swiper feature-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide slide">
            <img src="<?=base_url()?>assets/web/images/slider 1.1.jpg" alt="" />
            <!-- <h3>web development</h3>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Similique, repellat!
            </p> -->
          </div>

          <div class="swiper-slide slide">
            <img src="<?=base_url()?>assets/web/images/slider 2.jpg" alt="" />
            <!-- <h3>web development</h3>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Similique, repellat!
            </p> -->
          </div>

          <div class="swiper-slide slide">
            <img src="<?=base_url()?>assets/web/images/slider 3.jpg" alt="" />
            <!-- <h3>web development</h3>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Similique, repellat!
            </p> -->
          </div>

          <div class="swiper-slide slide">
            <img src="<?=base_url()?>assets/web/images/slider 4.jpg" alt="" />
            <!-- <h3>web development</h3>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Similique, repellat!
            </p> -->
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </section>

    <!-- contact form section  -->
    <section class="contact_home">
      <div class="row_home">
        <div class="image_home">
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
    </section>

    <!-- <div class="image_home">
      <img src="<?=base_url()?>assets/web/images/land2.png" alt="" />
    </div> -->

    <!-- footer section starts -->
    <?php include('web_inc/footer.php');?>
    <!-- footer section ends -->
  </body>
</html>
