<?php

   require_once '../includes/config.inc.php'

?>

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

    <title>Login | Sikja PENS</title>
    <link rel="stylesheet" href="/mis126/contents/css/landing-page.css">
</head>
<body>
    <main>
        <div class="big-wrapper">
            <header>
                <div class="container">
                    <div class="logo">
                        <img src="/mis126/contents/img/pens.png" alt="Logo Sikja">
                        <!-- <img src="<?= base_url; ?>/img/pens.png" alt="Logo Sikja"> -->
                        <h3>SIKJA DOSEN</h3>
                    </div>

                    <div class="links">
                        <ul>
                            <div class="theme-toggler">
                                <span class="material-icons-outlined active">light_mode</span>
                                <span class="material-icons-outlined">dark_mode</span>
                            </div>
                            <li><a href="/mis126">Home</a></li>
                            <li><a href="">About</a></li>
                            <li><a href="">Contact Us</a></li>
                            <!-- <li><a href="<?= base_url; ?>/LoginAdmin" class="btn">Login</a></li> -->
                        </ul>
                    </div>
                </div>
            </header>

            <div class="showcase-area">
                <div class="container">
                    <div class="left">
                        <div class="signin-signup">
                            <form action="<?= base_url; ?>/LoginAdmin/prosesLogin" method="POST" class="sign-in-form">
                                <h2 class="title">Login</h2>
                                <div class="input-field">
                                    <i class="material-icons-outlined">person</i>
                                    <input type="text" placeholder="Email" name="email">
                                </div>
                                <div class="input-field">
                                    <i class="material-icons-outlined">lock</i>
                                    <input type="password" placeholder="Password" name="password">
                                </div>
                                <button type="submit" class="btn btn-solid">Login</button>
                            </form>
                        </div>
                    </div>
                    <div class="right">
                        <img src="/mis126/contents/img/person.png" class="person" alt="">
                    </div>
                </div>
            </div>

            <div class="bottom-area">
                <div class="container">
                    <button class="toggle-btn">
                        <i class="material-icons-outlined active">light_mode</i>
                        <i class="material-icons-outlined">dark_mode</i>
                    </button>
                </div>
            </div>
        </div>
    </main>

    

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
<script src="/js/sk.js"></script>
<script src="/js/angka-kredit.js"></script>
<script>
    let list = document.querySelectorAll('.list');
    for (let i = 0; i<list.length; i++){
        list[i].onclick = function(){
            let j = 0;
            while(j < list.length){
                list[j++].className = 'list';
            }
            list[i].className = 'list active';
        }
    }
</script>
</body>
</html>