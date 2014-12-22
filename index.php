<?php
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'autologin';
}

switch ($action) {
    case 'login':
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            require_once('model/personne_db.php');
            $usernameValide = check_username($username);
            $passwordValide = check_password($username, $password);
            $type = get_type($username);
            if ($type == 1 && $passwordValide) {
                session_start();
                $_SESSION["detailsPersonne"] = get_info_personne(get_idPersonne($username));
                header("Location: employee/index.php?action=home");
            }
        } else {
            if (!isset($_POST['username'])) {
                $username = "";
            }
            if (!isset($_POST['password'])) {
                $password = "";
            }
        }
        break;
    case 'logout':
        session_start();
        session_destroy();
        break;
    case 'autologin':
        if (session_status() == PHP_SESSION_ACTIVE) {
            $_POST['username'] = $_SESSION['detailsPersonne']['username'];
            $_POST['password'] = $_SESSION['detailsPersonne']['password'];
            header('Location: .?action=login');
        }
        break;
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <?php require_once('model/personne_db.php'); ?>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>JuliePro - Connexion</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet"/>
    <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet"/>
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet"/>
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <?php
            setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
            echo utf8_encode((strftime("%d %B %Y")));
            ?>
        </div>
    </nav>
    <div id="page-inner">
        <div class="col-md-4 col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Connexion
                </div>
                <div class="panel-body">
                    <p>Veuillez vous connecter pour continuer.</p><br/>

                    <form action=".?action=login" method="post">
                        <?php if ((isset($usernameValide) && !$usernameValide) || (isset($action) && $action == 'login' && $username == "")) {
                            echo '<div class="form-group has-error"><label class="control-label">Nom d\'utilisateur non valide.</label>';
                        } else {
                            echo '<div class="form-group">';
                        } ?>
                        <input class="form-control" type="text" name="username" placeholder="Nom d'utilisateur"
                               value="<?php if (isset($username)) {
                                   echo $username;
                               } ?>"/>
                </div>
                <?php if ((isset($passwordValide) && !$passwordValide) || (isset($action) && $action == 'login' && $password == "")) {
                    echo '<div class="form-group has-error"><label class="control-label">Mot de passe non valide.</label>';
                } else {
                    echo '<div class="form-group">';
                } ?>
                <input class="form-control" type="password" name="password" placeholder="Mot de passe"/>
            </div>
            <button type="submit" class="btn btn-default">Connexion</button>
            </form>
        </div>
    </div>
</div>
<!-- /. ROW  -->
</div>
<!-- /. PAGE INNER  -->
</div>
<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="assets/js/jquery.metisMenu.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>

</body>
</html>