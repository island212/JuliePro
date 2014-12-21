<?php include('../view/header.php'); session_start(); ?>
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center">
                <img src="../assets/img/find_user.png" class="user-image img-responsive"/>
                <h3 class="text-center" style="color: #DDD;"><?php echo $_SESSION["detailsPersonne"]["firstName"]; ?> <?php echo $_SESSION["detailsPersonne"]["lastName"]; ?></h3>
            </li>
            <li>
                <a <?php if($currentPage == 'home') { echo 'class="active-menu"'; } ?> href="../employee/?action=home"><i class="fa fa-home fa-3x"></i> Accueil</a>
            </li>
            <li>
                <a <?php if($currentPage == 'client_list') { echo 'class="active-menu"'; } ?> href="../employee/?action=list_clients"><i class="fa fa-group fa-3x"></i> Mes clients</a>
            </li>
            <li>
                <a <?php if($currentPage == 'client_tests') { echo 'class="active-menu"'; } ?> href="../employee/?action=list_clients"><i class="fa fa-bar-chart-o fa-3x"></i> Progression</a>
            </li>
    </div>
</nav>