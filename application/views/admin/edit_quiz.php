<!DOCTYPE html>
<html lang="en" >
<head>
    <?php include('inc/header.php');?>
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
     <!-- Sweet Alert -->
     <link href="<?=base_url()?>assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url()?>assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">

    <title>Quiz <?=$quiz_id?></title>
</head>
<body>
    
    <?php include('inc/sidebar.php');?>
    
<style>
    .border-blk{
        border-top: 1px solid #000000 !important;
        border-bottom: 1px solid #000000 !important;
    }
    .btns{
        margin: 0px;
    }
	input{
		font-size: 2.5rem !important;
	}
</style>

<!-- CONTENT -->
<section id="content">
    <!-- NAVBAR -->
    <nav>
		<a href="#" class="profile" style="display: flex;align-items: center;right: 5px;position: fixed;float: right;">
			<div style="margin-right: 10px;"><?=$_SESSION['username']?></div>
			<img src="<?= base_url() ?>assets/images/uploaded_files/admin/<?=$_SESSION['id']?>/<?=$_SESSION['image']?>" style="max-width: 100px; max-height: 100px;">
		</a>
    </nav>
    <!-- NAVBAR -->
    <!-- NAVBAR -->


        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Quiz <?=$quiz_id?></h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#" class="active">Dashboard</a>
                        </li>
                    </ul>
                </div>
                
            </div>

            

        <div class="container">
			<form method="post" action="<?=base_url('admin/save_quiz'); ?>">
				<div class="col-md-12">
					<?php foreach ($quizs as $quizIndex => $quiz) { ?>
					<div class="row">
						<div class="col-md-12">
							<input type="hidden" name="quiz_id[]" value="<?= $quiz['id'] ?>">
							<input type="text" dir="ltr" class="form-control" name="question[]" value="<?= $quiz['question'] ?>">
						</div>
						<?php foreach ($quiz['options'] as $optionIndex => $option) { ?>
						<div class="col-md-6">
							<label class="text_color_black">
								<input type="checkbox" class="option" name="answer[<?= $quizIndex ?>]" value="<?= $option['type'] ?>" <?= ($option['type'] == $quiz['answer']) ? 'checked' : '' ?>> <?= $option['type'] ?>
							</label>
							<input type="text" dir="ltr" class="form-control" name="option_text[<?= $quizIndex ?>][]" value="<?= $option['quiz_option'] ?>">
							<input type="hidden" name="option_id[<?= $quizIndex ?>][]" value="<?= $option['id'] ?>">
						</div>
						<?php } ?>
					</div>
					<?php } ?>
				</div>
				<button type="submit" class="btn btn-primary">Save Quiz</button>
			</form>
        </div>


        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->
        <script src="<?=base_url()?>assets/js/jquery.min.js"></script>
        <script src="<?=base_url()?>assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?=base_url()?>assets/js/waves.js"></script>
        <script src="<?=base_url()?>assets/js/feather.min.js"></script>
        <script src="<?=base_url()?>assets/js/simplebar.min.js"></script>
        <script src="<?=base_url()?>assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
        <script src="<?=base_url()?>assets/pages/jquery.sweet-alert.init.js"></script>

<?
if($this->session->flashdata('edit')){
?>
<script>
    $(document).ready(function() {
      var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        onOpen: function(toast) {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      });

      // Use Toast here or in any other event/function as needed
      Toast.fire({
        icon: 'Success',
        title: 'Quiz Data Updated Succesfully'
      });
    });
</script>
<?
}
if($this->session->flashdata('delete')){
    ?>
    <script>
        $(document).ready(function() {
          var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            onOpen: function(toast) {
              toast.addEventListener('mouseenter', Swal.stopTimer)
              toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
          });
    
          // Use Toast here or in any other event/function as needed
          Toast.fire({
            icon: 'error',
            title: 'User deleted Succesfully'
          });
        });
    </script>
    <?
    }
?>
<script>
	$(document).ready(function() {
		// Ensure only one checkbox can be selected per question
		$('input[type="checkbox"]').on('change', function() {
			var name = $(this).attr('name');
			$('input[name="' + name + '"]').not(this).prop('checked', false);
		});
	});
</script>
</body>
<!-- Sweet-Alert  -->
<!-- jQuery  -->

</html>
