<?php
    require_once './header.php';
?>
<div class="content-resume">
    <div class="section mt-0">
        <h1 class="text-head">Resume</h1>
    </div>
    <?php 
        require_once './education.php';
        require_once './experience.php';
    ?>

    <div class="section">
        <div class="mySkills">
            <h2 class="mySkills">My Skills</h2>
            <div class="boxSkills">
                
            </div>
        </div>
    </div>
</div>
<?php
    require_once './footer.php';
?>