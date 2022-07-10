
<main>
    <!-- <h1>Dashboard</h1> -->

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
                    <svg>
                        <circle cx='38' cy='40' r='36'></circle>
                    </svg>
                    <div class="number">
                        <p>69%</p>
                    </div>
                </div>
            </div>
            <!-- <small class="text-muted">Last 24 Hours</small> -->
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
                    <svg>
                        <circle cx='38' cy='40' r='36'></circle>
                    </svg>
                    <div class="number">
                        <p>100%</p>
                    </div>
                </div>
            </div>
            <!-- <small class="text-muted">Last 24 Hours</small> -->
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
                    <svg>
                        <circle cx='38' cy='40' r='36'></circle>
                    </svg>
                    <div class="number">
                        <p>24%</p>
                    </div>
                </div>
            </div>
            <!-- <small class="text-muted">Last 24 Hours</small> -->
        </div>
        <!-- END OF INCOME -->
    </div>
    <!-- END OF INSIGHTS -->

    <div class="periode-chart">
        <h2>Angka Kredit Per Periode</h2>
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
            <span class="material-icons-outlined active">light_mode</span>
            <span class="material-icons-outlined">dark_mode</span>
        </div>
        <div class="profile">
            <div class="info">
                <p><b>Daniel</b></p>
                <small class="text-muted">Asisten Ahli</small>
            </div>
            <div class="profile-photo">
                <img src="/img/photo.png" alt="">
            </div>
        </div>
    </div>
    <!-- END OF TOP -->
    <div class="recent-updates">
        <h2>Pesan Terbaru</h2>
        <div class="updates">
            <?php foreach ($data['pesan'] as $pesan) { ?>
                <?php if ($pesan['TIPE'] == 'Pendidikan') : ?>
                    <div class="icon">
                        <span class="material-icons-outlined">school</span>
                    </div>
                    <div class="message">
                        <p><?= $pesan['PESAN'] ?></p>
                        <small class="text-muted">Minggu Lalu</small>
                    </div>
                <?php endif ?>
            <?php } ?>
        </div>
    </div>
    <!-- END OF RECENT UPDATES -->
    <div class="sales-analytics">
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
    </div>
</div>