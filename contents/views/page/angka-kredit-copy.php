<div class="angka-kredit">
    <h2>Pelaksanaan Pendidikan</h2>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Komponen Kegiatan</th>
                <th>Angka Kredit</th>   
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data['pendidikan'] as $rows) : ?>
            <tr>
                <td><?= $rows['NOMOR'] ?></td>
                <td><?= $rows['DESKRIPSI'] ?></td>
                <td>8</td>
                <td>
                    <button data-id="<?= $rows['NOMOR'] ?>" class="primary detail-button button">Detail</button>
                    <!-- <button class="primary detail-button" data-id="<?= $rows['NOMOR'] ?>">Detail</button> -->
                    <!-- <button class="primary detail-button" data-id="<?= $rows['NOMOR'] ?>">Tambah</button> -->
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <a href="#">Show All</a>
</div>
    <!-- </main> -->
    <!-- END OF MAIN -->

<?php foreach($data['pendidikan'] as $rows) : ?>
    <div id="modal-container<?= $rows['NOMOR'] ?>" class="modal-container">
        <div class="modal-background">
            <div class="modal">
            <h3><?= $rows['NOMOR'] ?>. <?= $rows['DESKRIPSI'] ?></h3>
            <button class="primary add-button" data-id="<?= $rows['NOMOR'] ?>">Tambah Data</button>
            </div>
        </div>
    </div>
<?php endforeach ?>


<?php foreach($data['pendidikan'] as $rows) : ?>
    <div id="add-modal<?= $rows['NOMOR'] ?>" class="add-modal">
        <div class="modal-background">
            <div class="modal">
            <h3><?= $rows['NOMOR'] ?>. <?= $rows['NAMA'] ?></h3>
            <form action="<?= base_url; ?>/InputDataDokumen/inputData<?= $rows['NOMOR'] ?>" method="POST" class="data_dokumen">
                <h2 class="title">Tambah Data</h2>
                    <div class="input">
                        <input type="text" class="input-field" name="nama" value="<?= $_SESSION['name'] ?>" required/>
                        <label class="input-label">Full name</label>
                    </div>
                    <div class="input">
                        <input type="text" class="input-field" value="" required/>
                        <label class="input-label">Email</label>
                    </div>
                                <div class="input">
                        <input type="password" class="input-field" required/>
                        <label class="input-label">Password</label>
                    </div>
                    <div class="action">
                        <button class="action-button">Tambah</button>
                    </div>
                <div class="card-info">
                    <p>By signing up you are agreeing to our <a href="#">Terms and Conditions</a></p>
                </div>
                <div class="input-field">
                    <input type="text" placeholder="" name="nama" value="<?= $_SESSION['name'] ?>" hidden>
                </div>
                <div class="input-field">
                    <input type="text" placeholder="" name="nip" value="<?= $_SESSION['nomor'] ?>" hidden>
                </div>
                <div class="input-field">
                    <label for="fname">Program:</label><br>
                    <input type="text" placeholder="" name="program">
                </div>
                <?php if($rows['NOMOR'] == 1) : ?>
                    <div class="input-field">
                        <label for="mata_kuliah">Mata Kuliah:</label><br>
                        <input type="text" placeholder="" name="mata_kuliah">
                    </div>
                    <div class="input-field">
                        <label for="jumlah_sks">Jumlah SKS:</label><br>
                        <input type="number" placeholder="" name="jumlah_sks">
                    </div>
                    <div class="input-field">
                        <label for="kelas">Kelas:</label><br>
                        <input type="text" placeholder="" name="kelas">
                    </div>
                <?php elseif ($rows['NOMOR'] == 3) : ?>
                    <div class="input-field">
                        <label for="nama_perusahaan">Nama Perusahaan:</label><br>
                        <input type="text" placeholder="" name="nama_perusahaan">
                    </div>
                <?php elseif ($rows['NOMOR'] == 4) : ?>
                    <div class="input-field">
                        <label for="kategori_pembimbing">Kategori Pembimbing:</label><br>
                        <select name="kategori_pembimbing" id="kategori_pembimbing">
                            <option value="PU">Pembimbing Utama</option>
                            <option value="PP">Pembimbing Pendamping</option>
                        </select>
                    </div>
                    <div class="input-field">
                        <label for="tanggal">Nama Mahasiswa:</label><br>
                        <input type="text" placeholder="" name="tanggal">
                    </div>
                    <div class="input-field">
                        <label for="jenis_tugasakhir">Jenis Tugas Akhir:</label><br>
                        <select name="jenis_tugasakhir" id="jenis_tugasakhir">
                            <option value="Laporan Akhir">Laporan Akhir</option>
                            <option value="Skripsi">Skripsi</option>
                            <option value="Tesis">Tesis</option>
                            <option value="Disertasi">Disertasi</option>
                        </select>
                    </div>
                <?php elseif ($rows['NOMOR'] == 5) : ?>
                    <div class="input-field">
                        <label for="kategori_penguji">Kategori Penguji:</label><br>
                        <select name="kategori_penguji" id="kategori_penguji">
                            <option value="KP">Ketua Penguji</option>
                            <option value="AP">Anggota Penguji</option>
                        </select>
                    </div>
                    <div class="input-field">
                        <label for="nama_mahasiswa">Nama Mahasiswa:</label><br>
                        <input type="text" placeholder="" name="nama_mahasiswa">
                    </div>
                <?php elseif ($rows['NOMOR'] == 8) : ?>
                    <div class="input-field">
                        <label for="jenis_produk">Jenis Produk:</label><br>
                        <select name="jenis_produk" id="jenis_produk">
                            <option value="Buku Ajar">Buku Ajar</option>
                            <option value="Modul">Modul</option>
                        </select>
                    </div>
                <?php elseif ($rows['NOMOR'] == 10) : ?>
                    <div class="input-field">
                        <label for="jabatan_pimpinan">Jenis Produk:</label><br>
                        <select name="jabatan_pimpinan" id="jabatan_pimpinan">
                            <option value="Rektor">Rektor</option>
                            <option value="Wakil Rektor">Wakil Rektor</option>
                            <option value="Dekan">Dekan</option>
                            <option value="Direktur Pascasarjana">Direktur Pascasarjana</option>
                            <option value="Ketua Lembaga">Ketua Lembaga</option>
                            <option value="Ketua Sekolah Tinggi">Ketua Sekolah Tinggi</option>
                            <option value="Pembantu Dekan">Pembantu Dekan</option>
                            <option value="Asisten Direktur">Asisten Direktur</option>
                            <option value="Direktur Politeknik">Direktur Politeknik</option>
                            <option value="Kepala LLDikti">Kepala LLDikti</option>
                            <option value="Pembantu Ketua Sekolah Tinggi">Pembantu Ketua Sekolah Tinggi</option>
                            <option value="Pembantu Direktur Politeknik">Pembantu Direktur Politeknik</option>
                            <option value="Direktur Akademi">Direktur Akademi</option>
                            <option value="Ketua Jurusan">Ketua Jurusan</option>
                            <option value="Ketua Prodi">Ketua Prodi</option>
                            <option value="Sekretaris Jurusan">Sekretaris Jurusan</option>
                            <option value="Kepala Laboratorium">Kepala Laboratorium</option>
                        </select>
                    </div>
                <?php elseif ($rows['NOMOR'] == 11) : ?>
                    <div class="input-field">
                        <label for="kategori_pembimbing_dosen">Kategori Pembimbing:</label><br>
                        <select name="kategori_pembimbing_dosen" id="kategori_pembimbing_dosen">
                            <option value="Pencangkokan">Pembimbing Pencangkokan</option>
                            <option value="Reguler">Reguler</option>
                        </select>
                    </div>
                <?php elseif ($rows['NOMOR'] == 12) : ?>
                    <div class="input-field">
                        <label for="kategori_kegiatan">Kategori Kegiatan:</label><br>
                        <select name="kategori_kegiatan" id="kategori_kegiatan">
                            <option value="Detasering">Detasering</option>
                            <option value="Pencangkokan">Pencangkokan</option>
                        </select>
                    </div>
                <?php elseif ($rows['NOMOR'] == 13) : ?>
                    <div class="input-field">
                        <label for="durasi">Durasi Pengembangan Diri:</label><br>
                        <select name="durasi" id="durasi">
                            <option value="30-80">30 - 80 Jam</option>
                            <option value="81-160">81 - 160 Jam</option>
                            <option value="161-480">161 - 480 Jam</option>
                            <option value="481-640">481 - 640 Jam</option>
                            <option value="641-960">641 - 960 Jam</option>
                            <option value=">960">Lebih dari 960 Jam</option>
                        </select>
                    </div>
                <?php endif ?>
                <?php if($rows['NOMOR'] == 1 || $rows['NOMOR'] == 4 || $rows['NOMOR'] == 5 || $rows['NOMOR'] == 6 || $rows['NOMOR'] == 7 || $rows['NOMOR'] == 8 || $rows['NOMOR'] == 9 || $rows['NOMOR'] == 10 || $rows['NOMOR'] == 11 || $rows['NOMOR'] == 12) : ?>
                    <div class="input-field">
                        <label for="tahun_ajaran">Tahun Ajaran:</label><br>
                        <select name="tahun_ajaran" id="tahun_ajaran">
                            <option value="2010/2011">2010/2011</option>
                            <option value="2011/2012">2011/2012</option>
                            <option value="2012/2013">2012/2013</option>
                            <option value="2013/2014">2013/2014</option>
                            <option value="2014/2015">2014/2015</option>
                            <option value="2015/2016">2015/2016</option>
                            <option value="2016/2017">2016/2017</option>
                            <option value="2017/2018">2017/2018</option>
                            <option value="2018/2019">2018/2019</option>
                            <option value="2019/2020">2019/2020</option>
                            <option value="2020/2021">2020/2021</option>
                            <option value="2021/2022">2021/2022</option>
                            <option value="2022/2023">2022/2023</option>
                            <option value="2022/2023">2023/2024</option>
                        </select>
                    </div>
                    <div class="input-field">
                        <label for="semester">Semester:</label><br>
                        <select name="semester" id="semester">
                            <option value="Gasal">Gasal</option>
                            <option value="Genap">Genap</option>
                        </select>
                    </div>
                <?php endif ?>
                    <div class="input-field">
                        <label for="tempat">Tempat:</label><br>
                        <input type="text" id="tempat" placeholder="" name="tempat">
                    </div>
                    <div class="input-field">
                        <label for="tanggal">Tanggal:</label><br>
                        <input type="date" id="tanggal" name="tanggal">
                    </div>
                    <div class="input-field">
                        <label for="keterangan">Keterangan:</label><br>
                        <input type="text" id="keterangan" placeholder="" name="keterangan">
                    </div>
                <button type="submit" class="btn btn-solid">Tambah</button>
            </form>
            </div>
        </div>
    </div>
<?php endforeach ?>























<!-- <div id="modal-container">
<?php foreach($data['pendidikan'] as $rows) : ?>
        <dialog class="modal" id="modalMengajar<?= $rows['NOMOR'] ?>">
            <h2><?= $rows['DESKRIPSI'] ?></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet assumenda sequi necessitatibus ab recusandae voluptates itaque voluptate culpa accusamus quia?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet assumenda sequi necessitatibus ab recusandae voluptates itaque voluptate culpa accusamus quia?</p>
            <button class="close-button" id="closeModal<?= $rows['NOMOR'] ?>" data-id="<?= $rows['NOMOR'] ?>">Close</button>
        </dialog>
    <?php endforeach ?>
</div> -->

<!-- <div class="content">
  <h1>Modal Animations</h1>
  <div class="buttons">
    <div data-type="two" data-id="<?= $rows['NOMOR'] ?>" class="button">Revealing</div>
  </div>
</div> -->

