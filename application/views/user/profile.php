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
<link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<style>
    .a-class * {
  all: unset
}
.border-blk{
        border-top: 1px solid #000000 !important;
        border-bottom: 1px solid #000000 !important;
    }
    .btns{
        margin: 0px;
    }
    .practice-button {
            padding: 5px 20px;
            font-size: 16px;
            border: none;
            border-bottom: 5px solid black;
            border-radius: 10px;
            cursor: pointer;
            background-color: #b1c91c;
            border-color: #7e8f14;
            color: white;
            width: 100%;
            margin-bottom: 5px;
        }
        .practice-button:hover {
            background-color: #97e900;
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
                    <ul class="breadcrumb">
                        <li>
                            <a href="<?=base_url()?>User" class="active">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right' ></i></li>
                        <li>
                            <a  href="#">Profile</a>
                        </li>
                    </ul>
                </div>
                
            </div>

            

            <!-- levelss -->
			<div class="container">
				<div class="box-info">
				<div class="col-md-12">
                <form  action="<?=base_url()?>User/user_editing/<?=$user[0]['id']?>" method="POST" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <label for="username" class="text_color_black">First Name</label>
                        <div class="input-group mb-3">                                                                                         
                            <input type="text" dir="ltr" class="form-control" name="f_name" value="<?=$user[0]['f_name']?>" required>
                        </div>                                    
                    </div><!--end form-group--> 

                    <div class="form-group">
                        <label for="userpassword" class="text_color_black">Last Name</label>                                            
                        <div class="input-group mb-3">                                  
                            <input type="text" dir="ltr" class="form-control" name="l_name" value="<?=$user[0]['l_name']?>"required>
                        </div>                               
                    </div><!--end form-group--> 
                    <div class="form-group">
                        <label for="userpassword" class="text_color_black">Email</label>                                            
                        <div class="input-group mb-3">                                  
                            <input type="email" dir="ltr" class="form-control" name="email" value="<?=$user[0]['email']?>" placeholder="Enter password" required>
                        </div>                               
                    </div><!--end form-group--> 
                    <div class="form-group">
                        <label for="userpassword" class="text_color_black">Password</label>                                            
                        <div class="input-group mb-3">                                  
                            <input type="password" dir="ltr" class="form-control" name="password"  required>
                        </div>                               
                    </div><!--end form-group--> 
                    <div class="form-group">
                        <label for="userpassword" class="text_color_black">Number</label>                                            
                        <div class="input-group mb-3">                                  
                            <input type="text" dir="ltr" class="form-control" name="number" value="<?=$user[0]['number']?>" placeholder="Enter password" required>
                        </div>                               
                    </div><!--end form-group--> 
					<div class="form-group">
                        <label for="userpassword" class="text_color_black">Profile Picture</label>                                            
                        <div class="input-group mb-3">                                  
							<input type="file" name="image" accept="image/*" required class="form-control">
							<a href="#" class="profile float-right" style="float: right; display: block; position: absolute; right: 5px;">
								<img style="height: 55px;" src="<?=base_url()?>assets/images/uploaded_files/<?=$user[0]['id']?>/<?=$user[0]['image']?>">
							</a>
                        </div>                               
                    </div><!--end form-group--> 

                

                    <div class="form-group mb-0 row">
                        <div class="col-12 mt-2">
                        <button class="practice-button" type="submit">Save <i class="fas fa-sign-in-alt ml-1"></i></button>
                        </div><!--end col--> 
                    </div> <!--end form-group-->                           
                </form><!--end form-->
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
