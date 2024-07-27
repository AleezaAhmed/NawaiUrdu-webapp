<!DOCTYPE html>
<html lang="en" >
<head>
    <?php include('inc/header.php');?>
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
     <!-- Sweet Alert -->
     <link href="<?=base_url()?>assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url()?>assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">

    <title>Quiz</title>
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
                    <h1>Users</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#" class="active">Dashboard</a>
                        </li>
                    </ul>
                </div>
                
            </div>

            

            <div class="container">
            <h2>Quiz</h2>
            <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th class="border-blk">#</th>
                        <th class="border-blk">Quiz Level</th>
                        <th class="border-blk">Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $count = 1;
                        foreach ($quizs as $quiz): ?>
                    
                        <tr>
                            <td class="border-blk"><?=$count ?></td>
                            <td class="border-blk">Level - <?=$quiz['level']?></td>
                            <td class="border-blk">
                                <button type="button" class="btns btn btn-warning" onclick="location.href='<?=base_url()?>Admin/quiz_edit/<?=$quiz['id']?>';">Edit</button>
                            </td>
                        </tr>
                    <?php
                        $count++;
                        endforeach;
                     ?>
                </tbody>
            </table>
            </div>
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
</body>
<!-- Sweet-Alert  -->
<!-- jQuery  -->

</html>
