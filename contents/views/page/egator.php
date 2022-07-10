<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Material CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
      rel="stylesheet">

    <title>Dashboard</title>
    <!-- <link rel="stylesheet" href="<?= base_url ?>/bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="<?= base_url ?>/css/egator.css">
</head>
<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="<?= base_url ?>/img/1.png" alt="">
                    <h2>PENS</h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-outlined">close</span>
                </div>
            </div>

            <div class="sidebar">
                <a href="" class="active">
                    <span class="material-icons-outlined">dashboard</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="/app/views/page/angka-kredit.html">
                    <span class="material-icons-outlined">assignment</span>
                    <h3>Angka Kredit</h3>
                </a>
                <a href="">
                    <span class="material-icons-outlined">email</span>
                    <h3>Pesan</h3>
                    <span class="message-count">2</span>
                </a>
                <a href="">
                    <span class="material-icons-outlined">person</span>
                    <h3>Profil</h3>
                </a>
                <a href="">
                    <span class="material-icons-outlined">article</span>
                    <h3>Dokumen</h3>
                </a>
                <a href="">
                    <span class="material-icons-outlined">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <!-- END OF ASIDE -->
        <main>
            <h1>Dashboard</h1>

            <div class="date">
                <input type="date">
            </div>

            <div class="insights">
                <div class="sales">
                    <span class="material-icons-outlined">analytics</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Sales</h3>
                            <h1>$25,024</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <!-- END OF SALES -->
                <div class="expenses">
                    <span class="material-icons-outlined">bar_chart</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Sales</h3>
                            <h1>$14,160</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>62%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <!-- END OF EXPENSES -->
                <div class="income">
                    <span class="material-icons-outlined">stacked_line_chart</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Sales</h3>
                            <h1>$10,864</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>44%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <!-- END OF INCOME -->
            </div>
            <!-- END OF INSIGHTS -->
            <div class="recent-orders">
                <h2>Recent Orders</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Product Number</th>
                            <th>Payment</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <tr>
                            <td>Foldable Mini Drone</td>
                            <td>85631</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr> -->
                    </tbody>
                </table>
                <a href="#">Show All</a>
            </div>
        </main>
        <!-- END OF MAIN -->

        <div class="right">
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
                        <p>Hey, <b>Daniel</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="<?= base_url ?>/img/logo.png" alt="">
                    </div>
                </div>
            </div>
            <!-- END OF TOP -->
            <div class="recent-updates">
                <h2>Recent Updates</h2>
                <div class="updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="<?= base_url ?>/img/1.png" alt="">
                        </div>
                        <div class="message">
                            <p><b>Nindy Puspita</b> received his order of Night lion tech GPS drone.</p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="<?= base_url ?>/img/1.png" alt="">
                        </div>
                        <div class="message">
                            <p><b>Nindy Puspita</b> received his order of Night lion tech GPS drone.</p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="<?= base_url ?>/img/1.png" alt="">
                        </div>
                        <div class="message">
                            <p><b>Nindy Puspita</b> received his order of Night lion tech GPS drone.</p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="<?= base_url ?>/img/1.png" alt="">
                        </div>
                        <div class="message">
                            <p><b>Nindy Puspita</b> received his order of Night lion tech GPS drone.</p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END OF RECENT UPDATES -->
            <div class="sales-analytics">
                <h2>Sales Analytics</h2>
                <div class="item online">
                    <div class="icon">
                        <span class="material-icons-outlined">shopping_cart</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>ONLINE ORDERS</h3>
                            <small class="text-muted">Last 24 Hours</small>
                        </div>
                        <h5 class="success">+39%</h5>
                        <h3>3849</h3>
                    </div>
                </div>
                <div class="item offline">
                    <div class="icon">
                        <span class="material-icons-outlined">local_mall</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>OFFLINE ORDERS</h3>
                            <small class="text-muted">Last 24 Hours</small>
                        </div>
                        <h5 class="danger">-17%</h5>
                        <h3>1100</h3>
                    </div>
                </div>
                <div class="item customers">
                    <div class="icon">
                        <span class="material-icons-outlined">shopping_cart</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>NEW CUSTOMERS</h3>
                            <small class="text-muted">Last 24 Hours</small>
                        </div>
                        <h5 class="success">+25%</h5>
                        <h3>849</h3>
                    </div>
                </div>
                <div class="item add-product">
                    <div>
                        <span class="material-icons-outlined">add</span>
                        <h3>Add Product</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>



<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script src="<?= base_url ?>/js/orders.js"></script>
<script src="<?= base_url ?>/js/index.js"></script>
</body>
</html>