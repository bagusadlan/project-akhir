<div class="recent-orders">
    <!-- END OF ASIDE -->
    <main>
        <div class="main-box">
            <div class="left">
                <h2><?= $data['GELAR_DPN']; ?> <?= $data['NAMA']; ?> <?= $data['GELAR_BLK']; ?></h2>
                <div class="number">
                    <p>Nama</p>
                </div>
                <h2><?= $data['NIP']; ?></h2>
                <div class="number">
                    <p>NIP</p>
                </div>
                <?php if (isset($_SESSION['jabfung'])) : ?>
                    <h2 class="lectureship"><?= $_SESSION['jabfung']; ?></h2>
                    <div class="number">
                        <p>Jabatan</p>
                    </div>
                    <h2>176</h2>
                    <div class="number">
                        <p>Angka Kredit Saat Ini</p>
                    </div>
                <?php endif ?>
                <h2><?= $_SESSION['email']; ?></h2>
                <div class="number">
                    <p>Email</p>
                </div>
            </div>
        </div>
    </main>
    <!-- END OF MAIN -->
</div>