<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">        
    <meta name="author" content="stacks">
    <title>dashboard iduka</title>
    
     <!-- Styles -->
     <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
     <link href="<?= base_url; ?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
     <link rel="stylesheet" href="<?= base_url; ?>/assets/plugins/Leaflet.markercluster-master/dist/MarkerCluster.css" />
	 <link rel="stylesheet" href="<?= base_url; ?>/assets/plugins/Leaflet.markercluster-master/dist/MarkerCluster.Default.css" />
	
     <!-- Theme Styles -->
     <link href="<?= base_url; ?>/assets/css/connect.css" rel="stylesheet">
     <link href="<?= base_url; ?>/assets/css/admin2.css" rel="stylesheet">
     <link href="<?= base_url; ?>/assets/css/custom.css" rel="stylesheet">

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    
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
                <nav class="navbar navbar-expand">
                        <div class="logo-box">
                            <img src="<?= base_url; ?>/assets/images/Logo_PENS.png" alt="" class="img-header">
                            <img src="<?= base_url; ?>/assets/images/logo.svg" alt="" class="img-header-text">
                        </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <ul class="navbar-nav">
                            <li class="nav-item small-screens-sidebar-link">
                                <a href="#" class="nav-link"><i class="material-icons-outlined">menu</i></a>
                            </li>

                            <li class="nav-item dropdown">
                                <?php 
                                oci_execute($data['notifikasi']);
                                $count = 0;
                            
                                ?>
                                <div class="dropdown-menu scroll" aria-labelledby="navbarDropdown">
                                <?php
                                    while($nm=oci_fetch_array($data['notifikasi'])){ 
                                ?>
                                    <a class="dropdown-item" href="#">
                                         <?php 
                                        echo $nm['NAMA_MITRA'];?>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                <?php
                                        $count++;
                                    }
                                ?>
                                </div>
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons-outlined">notifications</i><span class="badge badge-pill badge-danger float-right"> <?php echo $count ?></span></a>
                                </a>
                              
                            </li>
                        </li>
                        </ul>
                </nav>
            </div>