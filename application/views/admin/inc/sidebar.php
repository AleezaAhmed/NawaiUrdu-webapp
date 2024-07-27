<!-- SIDEBAR -->
<section id="sidebar">
	<a href="#" class="brand">
        <img src="<?=base_url()?>assets/images/logo.png" alt="Logo">
        <span class="text">Nawai Urdu</span>
    </a>
    <ul class="side-menu top">
        <li class="<?=($this->uri->segment(2)=='')?'active':''?>">
            <a href="<?=base_url()?>admin">
                <i class='bx bxs-dashboard' ></i>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <li class="<?=($this->uri->segment(2)=='profile')?'active':''?>">
            <a href="<?=base_url()?>Admin/profile/<?=$_SESSION['id']?>">
                <i class='bx bxs-user' ></i>
                <span class="text">Profile</span>
            </a>
        </li>
        <li class="<?=($this->uri->segment(2)=='quiz')?'active':''?>">
            <a href="<?=base_url()?>Admin/quiz">
                <i class='bx bxs-trophy' ></i>
                <span class="text">Quiz</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-line-chart'></i> 
                <span class="text">Feedback</span>
            </a>
        </li>
    </ul>
    <ul class="side-menu">
        <li>
            <a href="<?=base_url()?>Admin/users">
                <i class='bx bxs-cog' ></i>
                <span class="text">User Profiles</span>
            </a>
        </li>
        <li>
            <a href="<?=base_url()?>Admin/logout" class="logout">
                <i class='bx bxs-log-out-circle'></i>
                <span class="text">Logout</span>
            </a>
        </li>
    </ul>
</section>
<!-- SIDEBAR -->
