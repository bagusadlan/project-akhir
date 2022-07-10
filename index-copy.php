<?php

   require_once 'includes/config.inc.php'

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title>Landing IDUKA</title>

        <!-- Styles -->
     <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
     <link href="<?= base_url; ?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   
     <!-- Theme Styles -->
     <link href="<?= base_url; ?>/assets/css/connect.css" rel="stylesheet">
     <link href="<?= base_url; ?>/assets/css/admin2.css" rel="stylesheet">
     <link href="<?= base_url; ?>/assets/css/custom.css" rel="stylesheet">
</head>
    <body>
        <div class='loader'>
            <div class='spinner-grow text-primary' role='status'>
                <span class='sr-only'>Loading...</span>
            </div>
        </div>
        <div class="connect-container align-content-stretch d-flex flex-wrap">
            <div class="page-container">
                <div class="page-header">
                    <nav class="navbar navbar-expand container">
                        <div class="logo-box"><a href="#" class="logo-text">SIMIDUKA</a></div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <ul class="navbar-nav">
                            <li class="nav-item small-screens-sidebar-link">
                                <a href="#" class="nav-link"><i class="material-icons-outlined">menu</i></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link"><i class="material-icons-outlined">mail</i></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link"><i class="material-icons-outlined">notifications</i></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" id="dark-theme-toggle"><i class="material-icons-outlined">brightness_2</i><i class="material-icons">brightness_2</i></a>
                            </li>
                        </ul>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="<?= base_url; ?>/LoginAdmin" class="nav-link">Login</a>
                                </li>
                            </ul>
                        </div>
                        <div class="navbar-search">
                            <form>
                                <div class="form-group">
                                    <input type="text" name="search" id="nav-search" placeholder="Search...">
                                </div>
                            </form>
                        </div>
                    </nav>
                </div>
                <div class="page-content">
                    <div class="page-info container">
                        <div class="row">
                            <div class="col">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Apps</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                    </ol>
                                </nav>
                                <div class="page-options">
                                    <a href="#" class="btn btn-secondary">Settings</a>
                                    <a href="#" class="btn btn-primary">Upgrade</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-wrapper container">
                       <h3>Landing Page sim IDUKA</h3>
                    </div>
                </div>
                </div>
        </div>
        
        
<!-- Javascripts -->
<script src="<?= base_url; ?>/assets/plugins/jquery/jquery-3.4.1.min.js"></script>
<script src="<?= base_url; ?>/assets/plugins/bootstrap/popper.min.js"></script>
<script src="<?= base_url; ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url; ?>/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?= base_url; ?>/assets/js/connect.min.js"></script>
</body>
</html>