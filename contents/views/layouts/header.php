<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Main Layout -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Material CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
      rel="stylesheet">

    <title><?= $data['title'] ? $data['title'].' | Sikja PENS' : 'Sikja PENS' ?></title>
    <link rel="stylesheet" href="<?= $data['css'] ? base_url . '/' . $data['css'] : '' ?>">
    <link rel="stylesheet" href="<?= base_url; ?>/css/index.css">
    <link rel="stylesheet" href="<?= base_url; ?>/css/angka-kredit.css">
    <!-- <link rel="stylesheet" href="<?= base_url; ?>/bootstrap/css/bootstrap.min.css"> -->
</head>
<body>
    <div class="container-two">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="/mis126/contents/img/pens.png" alt="">
                    <h2>SIKJA DOSEN</h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-outlined">close</span>
                </div>
            </div>

            <div class="sidebar">
            <?php if (isset($_SESSION['jabfung'])) : ?>
                <a href="<?= base_url; ?>/Dashboard" class="list dashboard">
                    <span class="material-icons-outlined">dashboard</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="<?= base_url; ?>/Pendidikan" class="list pendidikan">
                    <span class="material-icons-outlined">assignment</span>
                    <h3>Pendidikan</h3>
                </a>
                <a href="<?= base_url; ?>/Penunjang" class="list penunjang">
                    <span class="material-icons-outlined">assignment</span>
                    <h3>Penunjang</h3>
                </a>
                <a href="<?= base_url; ?>/Pesan" class="list pesan">
                    <span class="material-icons-outlined">email</span>
                    <h3>Pesan</h3>
                    <!-- <span class="message-count">1</span> -->
                </a>
            <?php else : ?>
                <a href="<?= base_url; ?>/DashboardAdmin" class="list dashboard">
                    <span class="material-icons-outlined">dashboard</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="<?= base_url; ?>/AdminPendidikan" class="list pendidikan">
                    <span class="material-icons-outlined">assignment</span>
                    <h3>Pendidikan</h3>
                </a>
                <a href="<?= base_url; ?>/AdminPenunjang" class="list penunjang">
                    <span class="material-icons-outlined">assignment</span>
                    <h3>Penunjang</h3>
                </a>
            <?php endif ?>
                <a href="<?= base_url; ?>/Profil" class="list profil">
                    <span class="material-icons-outlined">person</span>
                    <h3>Profil</h3>
                </a>
                <a href="<?= base_url; ?>/Logout">
                    <span class="material-icons-outlined">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>

        
        <!-- END OF ASIDE -->
        <main>
            <div class="grid-top">
                <h1><?= $data['title'] ?? 'Dashboard' ?></h1>
                <div class="right-top">
                    <div class="top">
                        <button id="menu-btn">
                            <span class="material-icons-outlined">menu</span>
                        </button>
                        <div class="theme-toggler">
                            <span class="material-icons-outlined light">light_mode</span>
                            <span class="material-icons-outlined dark">dark_mode</span>
                        </div>
                        <div class="profile">
                            <div class="info">
                                <p><b><?= $_SESSION['name']; ?></b></p>
                                <?php if (isset($_SESSION['jabfung'])) : ?>
                                    <small class="text-muted"><?= $_SESSION['jabfung'] ?></small>
                                <?php else : ?>
                                    <small class="text-muted"><?= $_SESSION['staff'] ?></small>
                                <?php endif ?>
                            </div>
                            <!-- <div class="profile-photo">
                                <img src="/img/photo.png" alt="">
                            </div> -->
                        </div>
                    </div>
                    <!-- END OF TOP -->
                </div>
            </div>