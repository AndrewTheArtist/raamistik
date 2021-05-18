<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">料理本社</a>
        <!--Navbar buttons-->
        <?php if(isset($_SESSION['user_id'])) :?>
        <?php echo $_SESSION['user_name'];?>
        <a href="<?php echo URLROOT; ?>/users/logout" class=" mr-3 btn btn-link text-decoration-none text-white ">Log Out</a>
        <a href="<?php echo URLROOT; ?>/partners/index" class=" mr-3 btn btn-link text-decoration-none text-white ">Firms</a>
        <?php else:?>
        <a href="<?php echo URLROOT; ?>/users/register" class=" mr-3 btn btn-link text-decoration-none text-white ">Register</a>
        <a href="<?php echo URLROOT; ?>/users/login" class=" mr-3 btn btn-link text-decoration-none text-white ">Login</a>
        <?php endif;?>
        <!--Navbar buttons end-->
    </div>
</nav>
