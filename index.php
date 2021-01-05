<?php
    require_once './header.php';
?>

<div class="background">
    <div class="container">
        <div class="circle-menu">
            <div class="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <!-- <div class="hamburger-text">Menu</div> -->
            </div>
        </div>
        <div class="nav-wrap">
            <ul class="nav">
                <li class="nav-items"><a href="">ABOUT</a></li>
                <li class="nav-items"><a href="">RESUME</a></li>
                <li class="nav-items"><a href="">PORTFOLIO</a></li>
                <li class="nav-items"><a href="">BLOG</a></li>
                <li class="nav-items"><a href="">CONTACT</a></li>
            </ul>
        </div>
        <div class="wrapper-sticky-parent">
            <aside class="sidebar " id="sidebar">
                <?php
                require_once './infor.php';
                ?>
            </aside>
            <div class="content" id="content">
                <?php
                require_once './about.php';
                require_once './resume.php';
                ?>
            </div>
            
        </div>
    </div>
</div>


<?php
    require_once './footer.php';
?>