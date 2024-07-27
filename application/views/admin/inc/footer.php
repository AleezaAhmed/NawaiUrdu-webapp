<style>
    .footer {
    background: #000;
    padding: 20px 0;
    color: #fff;
    text-align: center;
}

.footer .container {
    display: flex;
    flex-direction: column;
}

.footer .row {
    margin-bottom: 10px;
}

.footer .social-icons {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer .social-icons li {
    display: inline-block;
    margin: 0 10px;
}

.footer .social-icons li a {
    color: #fff;
    font-size: 24px;
}

.footer .social-icons li a:hover {
    color: #ccc;
}
.footer .row{
    width:100%;
    margin:1% 0%;
    padding:0.6% 0%;
    color:gray;
    font-size:0.8em;
    }
    
    .footer .row a{
    text-decoration:none;
    color:gray;
    transition:0.5s;
    }
    
    .footer .row a:hover{
    color:#fff;
    }
    
    .footer .row ul{
    width:100%;
    }
    
    .footer .row ul li{
    display:inline-block;
    margin:0px 30px;
    }
    
    .footer .row a i{
    font-size:2em;
    margin:0% 1%;
    }
@media (max-width: 768px) {
    .footer .container {
        padding: 0 20px;
    }
}
</style>
<footer class="footer">
        <div class="container">
            <div class="row">
                <ul class="social-icons">
                    <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                    <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                    <li><a href="#"><i class="bx bxl-instagram"></i></a></li>
                    <li><a href="#"><i class="bx bxl-youtube"></i></a></li>
                </ul>
            </div>
            <div class="row">
                <ul>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">Our Services</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Career</a></li>
                </ul>
                </div>
            <div class="row">
                <p>&copy; 2024 Nawai Urdu. All rights reserved.</p>
            </div>
        </div>
    </footer>
<script>
    let btn = document.querySelector('#btn');
    let sidebar = document.querySelector('.sidebar');

    btn.onclick = function(){
        sidebar.classList.toggle('active');
    };
</script>

<script src="<?=base_url()?>assets/script.js"></script>
