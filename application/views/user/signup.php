<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Nawai Urdu</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Nawai urdu" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?=base_url()?>assets/images/favicon.png">

        <!-- Sweet Alert -->
        <link href="<?=base_url()?>assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url()?>assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">

        <!-- App css -->
        <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/css/app-rtl.min.css" rel="stylesheet" type="text/css" />

    </head>
    <style type="text/css">
        .Background_image {
            background-image: url("<?=base_url()?>uploads/splash.png");
            background-position: center center;
            background-size: cover;
            background-repeat: repeat;
            background-color: rgba(0,0,0,0.04);
        }
        input { 
            text-align: left !important;
            padding-left: 5px !important; 
        }
        .text_color_black{
            color: black !important;
        }
        .btn-green{
            background-color:  rgb(12, 133, 12) !important;
            border-color:  rgb(12, 133, 12) !important;
            color: black;
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

    <body class="account-body" style="text-align: left !important">
        <!-- Log In page -->
        <div class="container">
            <div class="row vh-100 d-flex justify-content-center">
                <div class="col-12 align-self-center">
                    <div class="row">
                        <div class="col-lg-5 mx-auto">
                            <div class="card" style="background-color: #ffffff5e;border: #ffffff5e;">
                                <div class="card-body p-0 auth-header-box" style="background-color: transparent;">
                                    <div class="text-center p-3">
                                        <a href="<?=base_url()?>Admin/signup_data" class="logo logo-admin">
                                            <img src="<?=base_url()?>uploads/logo.png" height="150" alt="logo" class="auth-logo">
                                        </a>
                                        <h4 class="mt-3 mb-1 text_color_black font-18"><b>Nawai Urdu System</b></h4>   
                                        <p class="text-muted text_color_black mb-0">Sign Up</p>  
                                    </div>
                                </div>
                                <div class="card-body">
                                   
                                    <div class="tab-content">
                                        <div class="tab-pane active p-3 pt-3" id="LogIn_Tab" role="tabpanel">                                        
                                            <form class="form-horizontal my-4" action="<?=base_url()?>User/signup_data" method="POST">
                
                                                <div class="form-group">
                                                    <label for="username" class="text_color_black">First Name</label>
                                                    <div class="input-group mb-3">                                                                                         
                                                        <input type="text" dir="ltr" class="form-control" name="f_name"  placeholder="Enter First Name" required>
                                                    </div>                                    
                                                </div><!--end form-group--> 
                                                <div class="form-group">
                                                    <label for="username" class="text_color_black">Last Name</label>
                                                    <div class="input-group mb-3">                                                                                         
                                                        <input type="text" dir="ltr" class="form-control" name="l_name"  placeholder="Enter Last Name" required>
                                                    </div>                                    
                                                </div><!--end form-group--> 
                                                <div class="form-group">
                                                    <label for="username" class="text_color_black">Mobile Number</label>
                                                    <div class="input-group mb-3">                                                                                         
                                                        <input type="text" dir="ltr" class="form-control" name="number"  placeholder="Enter Number" required>
                                                    </div>                                    
                                                </div><!--end form-group--> 
                                                <div class="form-group">
                                                    <label for="username" class="text_color_black">Email</label>
                                                    <div class="input-group mb-3">                                                                                         
                                                        <input type="email" dir="ltr" class="form-control" name="email"  placeholder="Enter Email" required>
                                                    </div>                                    
                                                </div><!--end form-group--> 
                                                <div class="form-group">
                                                    <label for="userpassword" class="text_color_black">Password</label>                                            
                                                    <div class="input-group mb-3">                                  
                                                        <input type="password" dir="ltr" class="form-control" name="password" placeholder="Enter password" required>
                                                    </div>                               
                                                </div><!--end form-group--> 
                    
                                              
                    
                                                <div class="form-group mb-0 row">
                                                    <div class="col-12 mt-2">
                                                        <button class="practice-button" type="submit">Sign Up <i class="fas fa-sign-in-alt ml-1"></i></button>
                                                    </div><!--end col--> 
                                                </div> <!--end form-group-->                           
                                            </form><!--end form-->
                                            
                                        </div>
                                     
                                    </div>
                                </div><!--end card-body-->
                                <div class="card-body bg-light-alt text-center" style="background-color: #b1c91c !important;">
                                    <span class="text-muted d-none d-sm-inline-block" style="color: black !important;">Nawai Urdu © <?=date('Y')?></span>                                            
                                </div>
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
        <!-- End Log In page -->
        <!-- jQuery  -->
        <script src="<?=base_url()?>assets/js/jquery.min.js"></script>
        <script src="<?=base_url()?>assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?=base_url()?>assets/js/waves.js"></script>
        <script src="<?=base_url()?>assets/js/feather.min.js"></script>
        <script src="<?=base_url()?>assets/js/simplebar.min.js"></script>
        <!-- Sweet-Alert  -->
        <script src="<?=base_url()?>assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
        <script src="<?=base_url()?>assets/pages/jquery.sweet-alert.init.js"></script>

<?
if($this->session->flashdata('error')){
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
        icon: 'warning',
        title: 'Invalid Credentials, Try Again'
      });
    });
</script>
<?
}
?>
    </body>

</html>
