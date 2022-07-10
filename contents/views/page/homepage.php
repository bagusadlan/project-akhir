<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Material CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
      rel="stylesheet">

    <title>Dashboard | Sikja PENS</title>
    <!-- <link rel="stylesheet" href="<?= base_url ?>/bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="<?= base_url; ?>/css/index.css">
    <link rel="stylesheet" href="<?= base_url; ?>/css/angka-kredit.css">
</head>
<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="<?= base_url ?>/img/pens.png" alt="">
                    <h2>SIKJA DOSEN</h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-outlined">close</span>
                </div>
            </div>

            <div class="sidebar">
            <a href="<?= base_url; ?>/Dashboard" class="list active">
                    <span class="material-icons-outlined">dashboard</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="<?= base_url; ?>/Pendidikan" class="list">
                    <span class="material-icons-outlined">assignment</span>
                    <h3>Pendidikan</h3>
                </a>
                <a href="<?= base_url; ?>/Penunjang" class="list">
                    <span class="material-icons-outlined">assignment</span>
                    <h3>Penunjang</h3>
                </a>
                <a href="<?= base_url; ?>/Pesan" class="list">
                    <span class="material-icons-outlined">email</span>
                    <h3>Pesan</h3>
                    <span class="message-count">1</span>
                </a>
                <a href="<?= base_url; ?>/Profil" class="list">
                    <span class="material-icons-outlined">person</span>
                    <h3>Profil</h3>
                </a>
                <a href="<?= base_url; ?>/Logout" class="list logout">
                    <span class="material-icons-outlined">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <!-- END OF ASIDE -->
        <main>
            <h1>Dashboard</h1>

            <h2>Perolehan Angka Kredit</h2>

            <div class="insights">
                <div class="sales">
                    <span class="material-icons-outlined">school</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Pendidikan</h3>
                            <h1><?= $data['totalAngkaKreditPendidikan']; ?></h1>
                        </div>
                        <div class="progress">
                            <div id="chart-pendidikan"></div>
                        </div>
                    </div>
                </div>
                <!-- END OF SALES -->
                <div class="expenses">
                    <span class="material-icons-outlined">support</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Penunjang</h3>
                            <h1><?= $data['totalAngkaKreditPenunjang'] ?></h1>
                        </div>
                        <div class="progress">
                            <div id="chart-penunjang"></div>
                        </div>
                    </div>
                </div>
                <!-- END OF EXPENSES -->
                <div class="income">
                    <span class="material-icons-outlined">remove</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Kekurangan</h3>
                            <h1>8</h1>
                        </div>
                        <div class="progress">
                            <div id="chart-kekurangan"></div>
                        </div>
                    </div>
                </div>
                <!-- END OF INCOME -->
            </div>
            <!-- END OF INSIGHTS -->

            <div class="periode-chart">
                <h2>Angka Kredit Pendidikan Per Periode</h2>
                <canvas id="chart"></canvas>
            </div>

            <div class="periode-chart">
                <h2>Angka Kredit Penunjang Per Periode</h2>
                <canvas id="chart"></canvas>
            </div>
        </main>
        <!-- END OF MAIN -->

        <div class="right">
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
                        <small class="text-muted"><?= $_SESSION['jabfung'] ?></small>
                    </div>
                </div>
            </div>
            <!-- END OF TOP -->
            <div class="recent-updates">
                <h2>Pesan Terbaru</h2>
                <?php if (count($data['pesan']) > 0) : ?>
                    <div class="updates">
                        <?php foreach ($data['pesan'] as $pesan) { ?>
                            <?php if ($pesan['TIPE'] == 'Pendidikan') : ?>
                                <div class="icon">
                                    <span class="material-icons-outlined">school</span>
                                </div>
                                <div class="message">
                                    <p><?= $pesan['PESAN'] ?></p>
                                    <small class="text-muted"><?= date_format(date_create($pesan['CREATED_AT']), "d M Y"); ?></small>
                                </div>
                            <?php endif ?>
                        <?php } ?>
                    </div>
                <?php else : ?>
                    <div class="updates">
                        <p>Pesan akan ditampilkan disini</p>
                    </div>
                <?php endif ?>
            </div>
            <!-- END OF RECENT UPDATES -->
            <!-- <div class="sales-analytics">
                <h2>Lebihan Angka Kredit</h2>
                <div class="item online">
                    <div class="icon">
                        <span class="material-icons-outlined">school</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>Pendidikan</h3>
                        </div>
                        <h3>0</h3>
                    </div>
                </div>
                <div class="item customers">
                    <div class="icon">
                        <span class="material-icons-outlined">support</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>Penunjang</h3>
                        </div>
                        <h3>2</h3>
                    </div>
                </div>
            </div> -->
        </div>
    </div>



<script>
    let nipDosen = "<?= $_SESSION['nomor'] ?>"
    let base_url = "<?= base_url ?>"
    
</script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="<?= base_url; ?>/js/jquery.blockUI.js"></script>
<script src="<?= base_url; ?>/js/dashboard.js"></script>
<script src="<?= base_url; ?>/js/modal.js"></script>
<script src="<?= base_url; ?>/js/script.js"></script>
<script>
    const chart = document.querySelector("#chart").getContext('2d')

// create a new chart instance
    new Chart(chart, {
        type: 'line',
        data: {
            labels: <?= json_encode($data['angkaKreditPerPeriode']) ?>,
            datasets: [
                {
                    label: 'Pendidikan',
                    data: <?= json_encode($data['angkaKreditPendidikanPerPeriode']) ?>,
                    borderColor: '#7380ec',
                    borderWidth: 2
                },
                // {
                //     label: 'Penunjang',
                //     data: <?= json_encode($data['angkaKreditPenunjangPerPeriode']) ?>,
                //     borderColor: '#41f1b6',
                //     borderWidth: 2
                // }
            ]
        },
        options: {
            responsive: true
        }
    })
</script>
<script>
    function setOptions(color, percent) {
        var options = {
            series: [percent],
            chart: {
                height: 145,
                type: 'radialBar',
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        size: '40%',
                    },
                    dataLabels: {
                        show: true,
                        name: {
                            show: false
                        },
                        value: {
                            color: `#${color}`,
                            offsetY: 5,
                            show: true
                        }
                    }
                },
            },
            colors: [`#${color}`],
            labels: [],
            stroke: {
              lineCap: 'round'
            }
        }

        return options
    }

    var chartPendidikan = new ApexCharts(document.querySelector("#chart-pendidikan"), setOptions('7380ec', 70))
    chartPendidikan.render()
    
    var chartPenunjang = new ApexCharts(document.querySelector("#chart-penunjang"), setOptions('41f1b6', 100))
    chartPenunjang.render()

    var chartKekurangan = new ApexCharts(document.querySelector("#chart-kekurangan"), setOptions('ff7782', 20))
    chartKekurangan.render()
</script>
</body>
</html>
