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
			<img src="<?= base_url() ?>assets/images/uploaded_files/admin/<?=$_SESSION['id']?>/<?=$_SESSION['image']?>" style="max-width: 100px; max-height: 100px;">
		</a>
    </nav>
    <!-- NAVBAR -->


        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>User Profile</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#" class="active">Dashboard</a>
                        </li>
                    </ul>
                </div>
                
            </div>

            

            <div class="container">
            <h2>User Edit</h2>
            <div class="col-md-12">
                <form  action="<?=base_url()?>Admin/user_editing/<?=$users[0]['id']?>" method="POST" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <label for="username" class="text_color_black">First Name</label>
                        <div class="input-group mb-3">                                                                                         
                            <input type="text" dir="ltr" class="form-control" name="f_name" value="<?=$users[0]['f_name']?>" required>
                        </div>                                    
                    </div><!--end form-group--> 

                    <div class="form-group">
                        <label for="userpassword" class="text_color_black">Last Name</label>                                            
                        <div class="input-group mb-3">                                  
                            <input type="text" dir="ltr" class="form-control" name="l_name" value="<?=$users[0]['l_name']?>"required>
                        </div>                               
                    </div><!--end form-group--> 
                    <div class="form-group">
                        <label for="userpassword" class="text_color_black">Email</label>                                            
                        <div class="input-group mb-3">                                  
                            <input type="email" dir="ltr" class="form-control" name="email" value="<?=$users[0]['email']?>" placeholder="Enter password" required>
                        </div>                               
                    </div><!--end form-group--> 
                    <div class="form-group">
                        <label for="userpassword" class="text_color_black">Password</label>                                            
                        <div class="input-group mb-3">                                  
                            <input type="text" dir="ltr" class="form-control" name="password"  required>
                        </div>                               
                    </div><!--end form-group--> 
					<div class="form-group">
                        <label for="userpassword" class="text_color_black">Profile Picture</label>                                            
                        <div class="input-group mb-3">                                  
							<input type="file" name="image" accept="image/*" required class="form-control">
							<a href="#" class="profile float-right" style="float: right; display: block; position: absolute; right: 5px;">
								<img style="height: 55px;" src="<?=base_url()?>assets/images/uploaded_files/<?=$users[0]['id']?>/<?=$users[0]['image']?>">
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


        </main>
        <!-- MAIN -->
    </section>
</body>
<!-- <?php include('inc/footer.php');?> -->

</html>
