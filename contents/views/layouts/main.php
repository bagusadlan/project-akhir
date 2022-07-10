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

    <title><?= $this->title ? $this->title.' | Sikja PENS' : 'Sikja PENS' ?></title>
    <!-- <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="/mis126/contents/css/index.css">
    <link rel="stylesheet" href="/mis126/contents/css/angka-kredit.css">
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
                <a href="/dashboard" class="active">
                    <span class="material-icons-outlined">dashboard</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="/angka-kredit">
                    <span class="material-icons-outlined">assignment</span>
                    <h3>Angka Kredit</h3>
                </a>
                <a href="/pesan">
                    <span class="material-icons-outlined">email</span>
                    <h3>Pesan</h3>
                    <span class="message-count">1</span>
                </a>
                <a href="/profil">
                    <span class="material-icons-outlined">person</span>
                    <h3>Profil</h3>
                </a>
                <a href="/dokumen">
                    <span class="material-icons-outlined">article</span>
                    <h3>Dokumen</h3>
                </a>
                <a href="/contact">
                    <span class="material-icons-outlined">article</span>
                    <h3>Contact</h3>
                </a>
                <a href="/logout">
                    <span class="material-icons-outlined">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>

        
        <!-- END OF ASIDE -->
        <main>
            <div class="grid-top">
                <h1><?= $this->page ?? 'Dashboard' ?></h1>
                <div class="right-top">
                    <div class="top">
                        <button id="menu-btn">
                            <span class="material-icons-outlined">menu</span>
                        </button>
                        <div class="theme-toggler">
                            <span class="material-icons-outlined active">light_mode</span>
                            <span class="material-icons-outlined">dark_mode</span>
                        </div>
                        <div class="profile">
                            <div class="info">
                                <p><b>Danar Sudrajat</b></p>
                                <small class="text-muted">Asisten Ahli</small>
                            </div>
                            <div class="profile-photo">
                                <img src="/img/photo.png" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- END OF TOP -->
                </div>
            </div>
            {{content}}
            
        </main>
        <!-- END OF MAIN -->

        
    </div>



<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script src="/bootstrap/js/bootstrap.min.js"></script>
<script src="/js/sk.js"></script>
<script src="/js/angka-kredit.js"></script>
</body>
</html>