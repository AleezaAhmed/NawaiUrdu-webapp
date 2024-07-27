<!DOCTYPE html>
<html lang="en">
<head>
<?php include('inc/header.php');?>


    <title>Dashboard</title>
</head>
<body>


<!-- SIDEBAR -->
<?php include('inc/sidebar.php');?>
<!-- SIDEBAR -->

<style>
    .a-class * {
  all: unset
}
    .container .box-info .box{
        background-color: #b1c91c;
    }
    .container .box-info .box .text h3 a  {
        background:none;
        color: #333;
    }

    
</style>

<!-- CONTENT -->
<section id="content">
    <!-- NAVBAR -->
    <nav>
		<a href="#" class="profile" style="display: flex;align-items: center;right: 5px;position: fixed;float: right;">
			<div style="margin-right: 10px;"><?=$_SESSION['username']?></div>
			<img src="<?= base_url() ?>assets/images/uploaded_files/<?=$_SESSION['id']?>/<?=$_SESSION['image']?>" style="max-width: 100px; max-height: 100px;">
		</a>
    </nav>
    <!-- NAVBAR -->
    <!-- NAVBAR -->


        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Dashboard</h1>
<!--
                    <ul class="breadcrumb">
                        <li>
                            <a href="#" class="active">Dashboard</a>
                        </li>
                    </ul>
-->
                </div>
                
            </div>

            

            <!-- levelss -->
			<div class="container">
				<div class="box-info">
					<div class="box">
						<img src="<?=base_url()?>assets/images/urdu.png" alt="Image">
						
                        <div class="text">
							<h3> <a href="<?=base_url()?>User/level/1">Level 1</a></h3>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
							  </div>
							  <span class="progress-text">0% completed</span>
						</div>
					</div>
					<div class="box">
						<img src="<?=base_url()?>assets/images/urdu.png" alt="Image">
						<div class="text">
							<h3> <a href="<?=base_url()?>User/level/2">Level 2</a></h3>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
							  </div>
							  <span class="progress-text">0% completed</span>
						</div>
					</div>
					<div class="box">
						<img src="<?=base_url()?>assets/images/urdu.png" alt="Image">
						<div class="text">
							<h3><a href="<?=base_url()?>User/level/3">Level 3</a></h3>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
							  </div>
							  <span class="progress-text">0% completed</span>
						</div>
					</div>
				</div>
			</div>
			 <!-- levelss end  -->


        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->
    

<?php include('inc/footer.php');?>
</body>
</html>
