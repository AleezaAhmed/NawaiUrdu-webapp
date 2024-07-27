<!DOCTYPE html>
<html lang="en" >
<head>
    <?php include('inc/header.php');?>
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <title>Dashboard</title>
</head>
<body>
    
    <?php include('inc/sidebar.php');?>
    <style>
        .bg-1{
            background-image: url("<?=base_url()?>assets/images/1.jpg");
        }
        .bg-2{
            background-image: url("<?=base_url()?>assets/images/2.webp");
        }
        .Background_image {
            background-position: center center;
            background-size: cover;
            background-repeat: repeat;
            background-color: rgba(0,0,0,0.04);
        }
    </style>
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
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#" class="active">Dashboard</a>
                        </li>
                    </ul>
                </div>
                
            </div>

            

            <!-- levelss -->
			<div class="container">
			<div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3">
                        <a href="<?=base_url()?>Admin/users">
                            <div class="card">
                                <div class="card-body Background_image bg-1">
                                    <center style="visibility: hidden;"><h3>users profile</h3></center>
                                    <center style="visibility: hidden;"><h3>users profile</h3></center>
                                </div>
                                <div class="card-footer">
                                    <center><h5 style="color: black;">users profile</h5></center>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="#">
                            <div class="card">
                                <div class="card-body Background_image bg-2">
                                    <center style="visibility: hidden;"><h3>users profile</h3></center>
                                    <center style="visibility: hidden;"><h3>users profile</h3></center>
                                </div>
                                <div class="card-footer">
                                    <center><h5 style="color: black;">users levels progress</h5></center>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
			</div>
			 <!-- levelss end  -->


        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->
    <div class="main-content" style="margin-top: 5rem;">
        
    </div>

</body>
<!-- <?php include('inc/footer.php');?> -->

</html>
