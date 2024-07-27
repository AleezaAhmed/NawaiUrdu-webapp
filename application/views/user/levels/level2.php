<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->view('user/inc/header.php'); ?>
  <title>Dashboard</title>
</head>

<body>

  <? $this->view('user/inc/sidebar.php'); ?>

  <link rel="stylesheet" href="https://fonts.adobe.com/fonts/din-2014-rounded-variable" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />

  <link rel="stylesheet" href="<?= base_url() ?>assets/leveljs/lstyle.css" />


  <img class="cross" src="Images/cross3.jpg" alt="" />
  <h1 class="lesson-heading">LESSON 02</h1>

  <div class="card-container">
    <div class="card">
      <div class="front">ا</div>
      <div class="back">alif</div>
    </div>
  </div>

  <div class="button-container">
    <button class="back-button">Back</button>
    <button class="video-button">Video</button>
    <button class="voice-button">
      <img src="<?= base_url() ?>assets/images/volume.png" alt="" />
    </button>
    <button class="next-button">Next</button>
  </div>

  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal()">&times;</span>
      <video id="videoPlayer" controls>
        <source src="" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
  <script src="https://code.responsivevoice.org/responsivevoice.js?key=sEeRII9k"></script>
  <script src="<?= base_url() ?>assets/leveljs/levelscript2.js"></script>

</body>
<? $this->view('user/inc/footer.php'); ?>


</html>