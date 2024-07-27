<!-- SIDEBAR -->
<section id="sidebar">
	<a href="#" class="brand">
        <img src="<?=base_url()?>assets/images/logo.png" alt="Logo">
        <span class="text">Nawai Urdu</span>
    </a>
    <ul class="side-menu top">
        <li class="<?=($this->uri->segment(2)=='')?'active':''?>">
            <a href="<?=base_url()?>User/">
                <i class='bx bxs-dashboard' ></i>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <li class="<?=($this->uri->segment(2)=='profile')?'active':''?>" >
            <a href="<?=base_url()?>User/profile/<?=$_SESSION['id']?>">
                <i class='bx bxs-user' ></i>
                <span class="text">Profile</span>
            </a>
        </li>
        
        <li>
            <a href="#">
                <i class='bx bx-line-chart'></i> 
                <span class="text">Progress</span>
            </a>
        </li>
    </ul>
    <ul class="side-menu">
       
        <li>
            <a href="<?=base_url()?>User/logout" class="logout">
                <i class='bx bxs-log-out-circle' ></i>
                <span class="text">Logout</span>
            </a>
        </li>
    </ul>
</section>
<!-- SIDEBAR -->
