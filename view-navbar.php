<div class="navbar-container">
    <div class="navbar">
        <div class="logo">
            <a href="/"><img src="./assets/logo.png" alt="Logo"></a>
        </div>
        <div class="hamburger">
            <i class="fa-solid fa-bars"></i>
            <!-- <i class="fa-solid fa-xmark"></i> -->
        </div>
        <div class="nav-menus">
            <?php require("./view-nav-menus.php"); ?>
        </div>
        <div class="user-account">
            <a href="#contact-us" id="free-trial">
                <span>Get Free Trial</span>
            </a>
        </div>
    </div>
</div>
<script>
const hamburgerBtn = document.querySelector(".hamburger i");
const navMenus = document.querySelector(".nav-menus");
hamburgerBtn.onclick=e=>{
    navMenus.classList.toggle("show");
}
navMenus.onclick=hamburgerBtn.onclick;
</script>