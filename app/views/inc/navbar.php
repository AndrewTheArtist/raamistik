<nav>
<div class="header">
    <div class="logo">
        料理本社
    </div>
    <!--Navbar buttons-->
    <?php if(isset($_SESSION['user_id'])) :?>
    <div class="menu">

        <a href="<?php echo URLROOT; ?>/users/faq" class="link">
            <div >FAQ</div>
            <div class="bar"></div>
        </a>

        <a href="<?php echo URLROOT; ?>/partners/index" class="link">
            <div >Firms</div>
            <div class="bar"></div>
        </a>
        <a href="<?php echo URLROOT; ?>/users/logout" class="link">
            <div >Logout</div>
            <div class="bar"></div>
        </a>
        <?php else:?>
        <a href="<?php echo URLROOT; ?>/users/register" class="link">
            <div>Register</div>
            <div class="bar"></div>
        </a>

        <a href="<?php echo URLROOT; ?>/users/login" class="link">
            <div >Login</div>
            <div class="bar"></div>
        </a>
        <?php endif;?>

    </div>
</div>
</nav>


