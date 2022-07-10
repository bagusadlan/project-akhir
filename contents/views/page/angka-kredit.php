<?php
if(isset($_POST['userID'])) 
{ 
   $idangka= $_POST['userID']; 
 
    // Do whatever you want with the $YourName; 
} 
?>

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
            <?php $i = 1 ?>
            <?php foreach($data['pendidikan'] as $rows) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $rows['DESKRIPSI'] ?></td>
                    <td><?= $data['angkaKreditPerKategori'][$i] ?></td>
                    <td>
                        <button data-id="<?= $i ?>" class="detail-button button">Detail</button>
                        <!-- <button class="primary detail-button" data-id="<?= $rows['NOMOR'] ?>">Tambah</button> -->
                    </td>
                </tr>
                <?php $i++ ?>
            <?php endforeach ?>
            
        </tbody>
    </table>
    <a href="#">Show All</a>
</div>
<div class="angka-kredit">
    <h2>Pelaksanaan Penunjang</h2>
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
            <?php $i = 1; $n = 14 ?>
            <?php foreach($data['penunjang'] as $row) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $row['DESKRIPSI'] ?></td>
                <td><?= $data['angkaKreditPenunjangPerKategori'][$i] ?></td>
                <td>
                    <button data-id="<?= $n ?>" class="detail-button button">Detail</button>
                </td>
            </tr>
            <?php $i++; $n++ ?>
            <?php endforeach ?>
        </tbody>
    </table>
    <a href="#">Show All</a>
</div>
    <!-- </main> -->
    <!-- END OF MAIN -->
    
<?php $i = 1 ?>
<?php foreach($data['pendidikan'] as $rows) : ?>
    <div id="modal-container<?= $i ?>" class="modal-container">
        <div class="modal-background">
            <div class="modal">
                <h2><?= $i ?>. <?= $rows['DESKRIPSI'] ?></h2>
                <button class="add-button mb-1" data-id="<?= $i ?>">Tambah Data</button>
                <table>
                    <?php if ($rows['NOMOR'] == 1) : ?>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Program</th>
                            <th>Mata Kuliah</th>
                            <th>Kelas</th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php elseif ($rows['NOMOR'] == 2) : ?>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Program</th>
                            <th>Mata Kuliah</th>
                            <th>Kelas</th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php endif ?>
                    <tbody>
                        <?php $n = 1 ?>
                        <?php foreach($data['allAngkaKredit'][$i] as $detail) : ?>

                        <?php if ($rows['NOMOR'] == 1) : ?>
                            <?php if ($detail == null) : ?>
                                
                            <?php else : ?>
                            <tr>
                                <td><?= $n ?></td>
                                <td><?= $detail[1] ?></td>
                                <td><?= $detail[2] ?></td>
                                <td><?= $detail[3] ?></td>
                                
                            <?php endif ?>
                        <?php elseif ($rows['NOMOR'] == 2) : ?>
                        <tr>
                            <td><?= $n ?></td>
                            <td><?= $detail[1] ?></td>
                            <td><?= $detail[3] ?></td>
                            
                        <?php endif ?>
                            <td>
                                <button data-id="<?= $detail[0] ?>" data-id-bidang="<?= $rows['NOMOR'] ?>" class="edit-button button">Edit</button>
                            </td>
                        </tr>
                        <?php $n++ ?>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $i++ ?>
<?php endforeach ?>

<?php $i = 14 ?>
<?php $no = 1 ?>
<?php foreach($data['penunjang'] as $rows) : ?>
    <div id="modal-container<?= $i ?>" class="modal-container">
        <div class="modal-background">
            <div class="modal">
                <h2><?= $no ?>. <?= $rows['DESKRIPSI'] ?></h2>
                <button class="add-button mb-1" data-id="<?= $i ?>">Tambah Data</button>
                <table>
                    <?php if ($rows['NOMOR'] == 1) : ?>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Program</th>
                            <th>Mata Kuliah</th>
                            <th>Kelas</th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php elseif ($rows['NOMOR'] == 2) : ?>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Program</th>
                            <th>Mata Kuliah</th>
                            <th>Kelas</th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php endif ?>
                    <tbody>
                        <?php $n = 1 ?>
                        <?php foreach($data['allAngkaKredit'][$i] as $detail) : ?>
                        <?php if ($rows['NOMOR'] == 1) : ?>
                            
                            <?php if ($detail == null) : ?>
                                
                            <?php else : ?>
                            <tr>
                                <td><?= $n ?></td>
                                <td><?= $detail[1] ?></td>
                                <td><?= $detail[2] ?></td>
                                <td><?= $detail[3] ?></td>
                                    
                                <td>
                                    <button data-id="<?= $detail[0] ?>" data-id-bidang="<?= $rows['NOMOR'] ?>" class="edit-button button">Edit</button>
                                </td>
                            </tr>
                            <?php endif ?>
                        <?php elseif ($rows['NOMOR'] == 2) : ?>
                        <tr>
                            <td><?= $n ?></td>
                            <td><?= $detail[1] ?></td>
                            <td><?= $detail[3] ?></td>
                            <td>
                                <button data-id="<?= $i ?>" class="edit-button button">Edit</button>
                            </td>
                        </tr>
                        <?php endif ?>
                        <?php $n++ ?>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $i++ ?>
<?php $no++ ?>
<?php endforeach ?>


<!-- MODAL FORM INPUT DATA KUM PENDIDIKAN -->
<?php $i = 1 ?>
<?php foreach($data['pendidikan'] as $rows) : ?>
    <div id="add-modal<?= $rows['NOMOR'] ?>" class="add-modal">
        <div class="modal-background">
            <div class="modal">
            <form action="<?= base_url; ?>/InputDataKumPendidikan/inputData<?= $rows['NOMOR'] ?>" method="POST" class="data_dokumen">
                <h2 class="title">Tambah Data <?= $rows['NAMA'] ?></h2>
                    <input type="text" class="input-field" name="nip" value="<?= $_SESSION['nomor'] ?>" hidden required/>
                <?php if ($rows['NOMOR'] != 10) : ?>
                <div class="input">
                    <input type="text" class="input-field" name="program" value="" required/>
                    <label class="input-label">Program</label>
                </div>
                <?php endif ?>
                <?php if ($rows['NOMOR'] == 1) : ?>
                    <div class="input">
                        <input type="text" class="input-field" name="mata_kuliah" value="" required/>
                        <label class="input-label">Mata Kuliah</label>
                    </div>
                    <div class="input">
                        <input type="text" class="input-field" name="jumlah_sks" value="" required/>
                        <label class="input-label">Jumlah SKS</label>
                    </div>
                    <div class="input">
                        <input type="text" class="input-field" name="kelas" value="" required/>
                        <label class="input-label">Kelas</label>
                    </div>
                <?php elseif ($rows['NOMOR'] == 3) : ?>
                    <div class="input">
                        <input type="text" class="input-field" name="nama_perusahaan" value="" required/>
                        <label class="input-label" for="nama_perusahaan">Nama Perusahaan</label>
                    </div>
                <?php elseif ($rows['NOMOR'] == 4) : ?>
                    <div class="input">
                        <select name="kategori_pembimbing" id="kategori_pembimbing" class="input-field">
                            <option value="PU">Pembimbing Utama</option>
                            <option value="PP">Pembimbing Pendamping</option>
                        </select>
                        <label class="input-label" for="kategori_pembimbing">Kategori Pembimbing</label>
                    </div>
                    <div class="input">
                        <input type="text" name="nama_mahasiswa" class="input-field" value="" required/>
                        <label class="input-label" for="nama_mahasiswa">Nama Mahasiswa</label>
                    </div>
                    <div class="input">
                        <select name="jenis_tugasakhir" id="jenis_tugasakhir" class="input-field" value="" required/>
                            <option value="Laporan Akhir">Laporan Akhir</option>
                            <option value="Skripsi">Skripsi</option>
                            <option value="Tesis">Tesis</option>
                            <option value="Disertasi">Disertasi</option>
                        </select>
                        <label class="input-label" for="jenis_tugasakhir">Jenis Tugas Akhir</label>
                    </div>
                <?php elseif ($rows['NOMOR'] == 5) : ?>
                    <div class="input">
                        <select name="kategori_penguji" id="kategori_penguji" class="input-field" value="" require/>
                            <option value="KP">Ketua Penguji</option>
                            <option value="AP">Anggota Penguji</option>
                        </select>
                        <label class="input-label" for="kategori_penguji">Kategori Penguji</label>
                    </div>
                    <div class="input">
                        <input type="text" name="nama_mahasiswa" class="input-field" value="" required/>
                        <label class="input-label" for="nama_mahasiswa">Nama Mahasiswa</label>
                    </div>
                <?php elseif ($rows['NOMOR'] == 7) : ?>
                    <div class="input">
                        <input type="text" name="nama_produk" class="input-field" value="" required/>
                        <label class="input-label" for="nama_produk">Nama Produk</label>
                    </div>
                <?php elseif ($rows['NOMOR'] == 8) : ?>
                    <div class="input">
                        <select name="jenis_produk" id="jenis_produk" class="input-field" value="" required/>
                            <option value="Buku Ajar">Buku Ajar</option>
                            <option value="Diktat">Diktat</option>
                            <option value="Modul">Modul</option>
                            <option value="Petunjuk Praktikum">Petunjuk Praktikum</option>
                        </select>
                        <label class="input-label" for="jenis_produk">Jenis Produk</label>
                    </div>
                    <div class="input">
                        <input type="text" name="judul_bahan_ajar" class="input-field" value="" required/>
                        <label class="input-label" for="judul_bahan_ajar">Judul Bahan Ajar</label>
                    </div>
                <?php elseif ($rows['NOMOR'] == 9) : ?>
                    <div class="input">
                        <input type="text" name="nama_orasi_ilmiah" class="input-field" value="" required/>
                        <label class="input-label" for="nama_orasi_ilmiah">Nama Orasi Ilmiah</label>
                    </div>
                <?php elseif ($rows['NOMOR'] == 10) : ?>
                    <div class="input">
                        <select name="jabatan_pimpinan" id="jabatan_pimpinan" class="input-field" value="" required/>
                            <option value="Rektor">Rektor</option>
                            <option value="Wakil Rektor">Wakil Rektor</option>
                            <option value="Dekan">Dekan</option>
                            <option value="Direktur Pascasarjana">Direktur Pascasarjana</option>
                            <option value="Ketua Lembaga">Ketua Lembaga</option>
                            <option value="Ketua Sekolah Tinggi">Ketua Sekolah Tinggi</option>
                            <option value="Pembantu Dekan">Pembantu Dekan</option>
                            <option value="Asisten Direktur Pascasarjana">Asisten Direktur Pascasarjana</option>
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
                        <label class="input-label" for="jabatan_pimpinan">Jabatan Pimpinan</label>
                    </div>
                <?php elseif ($rows['NOMOR'] == 11) : ?>
                    <div class="input">
                        <select name="kategori_pembimbing_dosen" id="kategori_pembimbing_dosen" class="input-field" value="" required/>
                            <option value="Pencangkokan">Pembimbing Pencangkokan</option>
                            <option value="Reguler">Reguler</option>
                        </select>
                        <label class="input-label" for="kategori_pembimbing_dosen">Kategori Pembimbing</label>
                    </div>
                <?php elseif ($rows['NOMOR'] == 12) : ?>
                    <div class="input">
                        <select name="kategori_kegiatan" id="kategori_kegiatan" class="input-field" value="" required/>
                            <option value="Detasering">Detasering</option>
                            <option value="Pencangkokan">Pencangkokan</option>
                        </select>
                        <label class="input-label" for="kategori_kegiatan">Kategori Kegiatan</label>
                    </div>
                <?php elseif ($rows['NOMOR'] == 13) : ?>
                    <div class="input">
                        <select name="durasi_pengembangan_diri" id="durasi_pengembangan_diri" class="input-field" value="" required/>
                            <option value="10-10">10 - 30 Jam</option>
                            <option value="30-80">30 - 80 Jam</option>
                            <option value="81-160">81 - 160 Jam</option>
                            <option value="161-480">161 - 480 Jam</option>
                            <option value="481-640">481 - 640 Jam</option>
                            <option value="641-960">641 - 960 Jam</option>
                            <option value=">960">Lebih dari 960 Jam</option>
                        </select>
                        <label class="input-label" for="durasi_pengembangan_diri">Durasi Pengembangan Diri</label>
                    </div>
                <?php endif ?>
                
                    <div class="input">
                        <select name="tahun_ajaran" id="tahun_ajaran" class="input-field">
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
                        <label for="tahun_ajaran" class="input-label">Tahun Ajaran</label>
                    </div>
                    <div class="input">
                        <select name="semester" id="semester" class="input-field">
                            <option value="Gasal">Gasal</option>
                            <option value="Genap">Genap</option>
                        </select>
                        <label for="semester" class="input-label">Semester</label>
                    </div>
                
                    <div class="input">
                        <input type="text" class="input-field" name="tempat" value="" required/>
                        <label class="input-label">Tempat</label>
                    </div>
                    <div class="input">
                        <input type="date" class="input-field" id="tanggal" name="tanggal" value="" required/>
                        <label class="input-label" for="tanggal">Tanggal</label><br>
                    </div>
                    <div class="input">
                        <input type="text" class="input-field" name="keterangan" value="">
                        <label class="input-label">Keterangan</label>
                    </div> 
                    <div class="action">
                        <button type="submit" class="action-button">Tambah</button>
                    </div>
                <!-- <div class="card-info"> -->
                    <!-- <p>By signing up you are agreeing to our <a href="#">Terms and Conditions</a></p> -->
                    <!-- <p>Semua form diatas harus diisi</p> -->
                <!-- </div> -->
            </form>
            </div>
        </div>
    </div>
    <?php $i++ ?>
<?php endforeach ?>


<!-- MODAL FORM INPUT DATA KUM PENUNJANG -->
<?php foreach($data['penunjang'] as $penunjang) : ?>
    <div id="add-modal<?= $penunjang['NOMOR'] ?>" class="add-modal">
        <div class="modal-background">
            <div class="modal">
                <form action="<?= base_url; ?>/InputDataKumPenunjang/inputData<?= $penunjang['NOMOR'] ?>" method="POST" class="data_dokumen">
                    <h2 class="title">Tambah Data <?= $penunjang['NAMA'] ?></h2>
                        <input type="text" class="input-field" name="nip" value="<?= $_SESSION['nomor'] ?>" hidden required/>
                    <div class="input">
                        <input type="text" class="input-field" name="program" value="" required/>
                        <label class="input-label">Program</label>
                    </div>
                    <?php if ($penunjang['NOMOR'] == 14) : ?>
                        <div class="input">
                            <select name="kedudukan" id="kedudukan" class="input-field">
                                <option value="Ketua">Ketua</option>
                                <option value="Wakil Ketua">Wakil Ketua</option>
                                <option value="Anggota">Anggota</option>
                            </select>
                            <label class="input-label" for="kedudukan">Kedudukan Pada Panitia</label>
                        </div>
                    <?php elseif ($penunjang['NOMOR'] == 15) : ?>
                        <div class="input">
                            <select name="jenis_panitia" id="jenis_panitia" class="input-field">
                                <option value="Pusat">Panitia Pusat</option>
                                <option value="Daerah">Panitia Daerah</option>
                            </select>
                            <label class="input-label" for="jenis_panitia">Jenis Panitia</label>
                        </div>
                        <div class="input">
                            <select name="kedudukan_pada_lembaga" id="kedudukan_pada_lembaga" class="input-field">
                                <option value="Ketua">Ketua</option>
                                <option value="Wakil Ketua">Wakil Ketua</option>
                                <option value="Anggota">Anggota</option>
                            </select>
                            <label class="input-label" for="kedudukan_pada_lembaga">Kedudukan Pada Panitia</label>
                        </div>
                    <?php elseif ($penunjang['NOMOR'] == 16) : ?>
                        <div class="input">
                            <select name="tingkatan_organisasi_profesi" id="tingkatan_organisasi_profesi" class="input-field">
                                <option value="Internasional">Internasional</option>
                                <option value="Nasional">Nasional</option>
                            </select>
                            <label class="input-label" for="tingkatan_organisasi_profesi">Tingkat Organisasi Profesi</label>
                        </div>
                        <div class="input">
                            <select name="kedudukan_organisasi_profesi" id="kedudukan_organisasi_profesi" class="input-field">
                                <option value="Pengurus">Pengurus</option>
                                <option value="Anggota Atas Permintaan">Anggota Atas Permintaan</option>
                                <option value="Anggota">Anggota</option>
                            </select>
                            <label class="input-label" for="kedudukan_organisasi_profesi">Kedudukan Pada Organisasi Profesi</label>
                        </div>
                    <?php elseif ($penunjang['NOMOR'] == 18) : ?>
                        <div class="input">
                            <select name="kedudukan_pada_delegasi" id="kedudukan_pada_delegasi" class="input-field">
                                <option value="Ketua">Ketua Delegasi</option>
                                <option value="Anggota">Anggota Delegasi</option>
                            </select>
                            <label class="input-label" for="kedudukan_pada_delegasi">Kedudukan Pada Delegasi</label>
                        </div>
                    <?php elseif ($penunjang['NOMOR'] == 19) : ?>
                        <div class="input">
                            <select name="tingkatan_pertemuan_ilmiah" id="tingkatan_pertemuan_ilmiah" class="input-field">
                                <option value="1">Internasional/Nasional/Regional</option>
                                <option value="2">Lingkungan Perguruan Tinggi</option>
                            </select>
                            <label class="input-label" for="tingkatan_pertemuan_ilmiah">Tingkat Pertemuah Ilmiah</label>
                        </div>
                        <div class="input">
                            <select name="kedudukan_pertemuan_ilmiah" id="kedudukan_pertemuan_ilmiah" class="input-field">
                                <option value="Ketua">Ketua</option>
                                <option value="Anggota">Anggota</option>
                            </select>
                            <label class="input-label" for="kedudukan_pertemuan_ilmiah">Kedudukan Pada Pertemuan Ilmiah</label>
                        </div>
                    <?php elseif ($penunjang['NOMOR'] == 20) : ?>
                        <div class="input">
                            <select name="kategori_penghargaan" id="kategori_penghargaan" class="input-field" value="" required/>
                                <option value="30">Satya Lencana 30 Tahun</option>
                                <option value="20">Satya Lencana 20 Tahun</option>
                                <option value="10">Satya Lencana 10 Tahun</option>
                                <option value="Internasional">Tingkat Internasional</option>
                                <option value="Nasional">Tingkat Nasional</option>
                                <option value="Daerah">Tingkat Daerah</option>
                            </select>
                            <label class="input-label" for="kategori_penghargaan">Kategori Penghargaan</label>
                        </div>
                    <?php elseif ($penunjang['NOMOR'] == 21) : ?>
                        <div class="input">
                            <select name="tingkatan_buku_pelajaran" id="tingkatan_buku_pelajaran" class="input-field" value="" required/>
                                <option value="SMTA">Buku SMTA</option>
                                <option value="SMTP">Buku SMTP</option>
                                <option value="SD">Buku SD</option>
                            </select>
                            <label class="input-label" for="tingkatan_buku_pelajaran">Tingkatan Buku Pelajaran</label>
                        </div>
                    <?php elseif ($penunjang['NOMOR'] == 22) : ?>
                        <div class="input">
                            <select name="tingkatan_prestasi_olahraga" id="tingkatan_prestasi_olahraga" class="input-field" value="" required/>
                                <option value="Internasional">Tingkat Internasional</option>
                                <option value="Nasional">Tingkat Nasional</option>
                                <option value="Daerah">Tingkat Daerah</option>
                            </select>
                            <label class="input-label" for="tingkatan_prestasi_olahraga">Tingkatan Prestasi Olahraga</label>
                        </div>
                    <?php endif ?>
                    <div class="input">
                    <?php if ($penunjang['NOMOR'] == 16) : ?>
                        <select name="periode_jabatan" id="periode_jabatan" class="input-field">
                    <?php else : ?>
                        <select name="tahun_ajaran" id="tahun_ajaran" class="input-field">
                    <?php endif ?>
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
                    <?php if ($penunjang['NOMOR'] == 16) : ?>
                        <label for="periode_jabatan" class="input-label">Periode Jabatan</label>
                    <?php else : ?>
                        <label for="tahun_ajaran" class="input-label">Tahun Ajaran</label>
                    <?php endif ?>
                    </div>
                    <div class="input">
                        <select name="semester" id="semester" class="input-field">
                            <option value="Gasal">Gasal</option>
                            <option value="Genap">Genap</option>
                        </select>
                        <label for="semester" class="input-label">Semester</label>
                    </div>
                
                    <div class="input">
                        <input type="text" class="input-field" name="tempat" value="" required/>
                        <label class="input-label">Tempat</label>
                    </div>
                    <div class="input">
                        <input type="date" class="input-field" id="tanggal" name="tanggal" value="" required/>
                        <label class="input-label" for="tanggal">Tanggal</label><br>
                    </div>
                    <div class="input">
                        <input type="text" class="input-field" name="keterangan" value="">
                        <label class="input-label">Keterangan</label>
                    </div>
                    <div class="action">
                        <button type="submit" class="action-button">Tambah</button>
                    </div>
                    <!-- <div class="card-info"> -->
                        <!-- <p>By signing up you are agreeing to our <a href="#">Terms and Conditions</a></p> -->
                        <!-- <p>Semua form diatas harus diisi</p> -->
                    <!-- </div> -->
                </form>
            </div>
        </div>
    </div>
<?php endforeach ?>

<!-- MODAL FORM EDIT DATA KUM PENDIDIKAN -->
<?php $i = 1 ?>
<?php foreach($data['allAngkaKredit'] as $key => $rows) : ?>
    <?php 
        echo '<pre>';
        var_dump($rows);
        echo '</pre>';
    ?>
    <div id="edit-modal<?= $key ?>" class="edit-modal">
        <div class="modal-background">
            <div class="modal">
            <form action="<?= base_url; ?>/EditDataKumPendidikan/editData<?= $key ?>" method="POST" class="data_dokumen">
                <h2 class="title">Edit Data</h2>
                    <input type="text" class="input-field" name="nip" value="<?= $_SESSION['nomor'] ?>" hidden required/>
                <?php if ($key != 10) : ?>
                <div class="input">
                    <input type="text" class="input-field" name="program" value="<?= $rows[$key][1] ?>" required/>
                    <label class="input-label">Program</label>
                </div>
                <?php endif ?>
                <?php if ($key == 1) : ?>
                    <div class="input">
                        <input type="text" class="input-field" name="mata_kuliah" value="" required/>
                        <label class="input-label">Mata Kuliah</label>
                    </div>
                    <div class="input">
                        <input type="text" class="input-field" name="jumlah_sks" value="" required/>
                        <label class="input-label">Jumlah SKS</label>
                    </div>
                    <div class="input">
                        <input type="text" class="input-field" name="kelas" value="" required/>
                        <label class="input-label">Kelas</label>
                    </div>
                <?php elseif ($key == 3) : ?>
                    <div class="input">
                        <input type="text" class="input-field" name="nama_perusahaan" value="" required/>
                        <label class="input-label" for="nama_perusahaan">Nama Perusahaan</label>
                    </div>
                <?php elseif ($key == 4) : ?>
                    <div class="input">
                        <select name="kategori_pembimbing" id="kategori_pembimbing" class="input-field">
                            <option value="PU">Pembimbing Utama</option>
                            <option value="PP">Pembimbing Pendamping</option>
                        </select>
                        <label class="input-label" for="kategori_pembimbing">Kategori Pembimbing</label>
                    </div>
                    <div class="input">
                        <input type="text" name="nama_mahasiswa" class="input-field" value="" required/>
                        <label class="input-label" for="nama_mahasiswa">Nama Mahasiswa</label>
                    </div>
                    <div class="input">
                        <select name="jenis_tugasakhir" id="jenis_tugasakhir" class="input-field" value="" required/>
                            <option value="Laporan Akhir">Laporan Akhir</option>
                            <option value="Skripsi">Skripsi</option>
                            <option value="Tesis">Tesis</option>
                            <option value="Disertasi">Disertasi</option>
                        </select>
                        <label class="input-label" for="jenis_tugasakhir">Jenis Tugas Akhir</label>
                    </div>
                <?php elseif ($key == 5) : ?>
                    <div class="input">
                        <select name="kategori_penguji" id="kategori_penguji" class="input-field" value="" require/>
                            <option value="KP">Ketua Penguji</option>
                            <option value="AP">Anggota Penguji</option>
                        </select>
                        <label class="input-label" for="kategori_penguji">Kategori Penguji</label>
                    </div>
                    <div class="input">
                        <input type="text" name="nama_mahasiswa" class="input-field" value="" required/>
                        <label class="input-label" for="nama_mahasiswa">Nama Mahasiswa</label>
                    </div>
                <?php elseif ($key == 7) : ?>
                    <div class="input">
                        <input type="text" name="nama_produk" class="input-field" value="" required/>
                        <label class="input-label" for="nama_produk">Nama Produk</label>
                    </div>
                <?php elseif ($key == 8) : ?>
                    <div class="input">
                        <select name="jenis_produk" id="jenis_produk" class="input-field" value="" required/>
                            <option value="Buku Ajar">Buku Ajar</option>
                            <option value="Diktat">Diktat</option>
                            <option value="Modul">Modul</option>
                            <option value="Petunjuk Praktikum">Petunjuk Praktikum</option>
                        </select>
                        <label class="input-label" for="jenis_produk">Jenis Produk</label>
                    </div>
                    <div class="input">
                        <input type="text" name="judul_bahan_ajar" class="input-field" value="" required/>
                        <label class="input-label" for="judul_bahan_ajar">Judul Bahan Ajar</label>
                    </div>
                <?php elseif ($key == 9) : ?>
                    <div class="input">
                        <input type="text" name="nama_orasi_ilmiah" class="input-field" value="" required/>
                        <label class="input-label" for="nama_orasi_ilmiah">Nama Orasi Ilmiah</label>
                    </div>
                <?php elseif ($key == 10) : ?>
                    <div class="input">
                        <select name="jabatan_pimpinan" id="jabatan_pimpinan" class="input-field" value="" required/>
                            <option value="Rektor">Rektor</option>
                            <option value="Wakil Rektor">Wakil Rektor</option>
                            <option value="Dekan">Dekan</option>
                            <option value="Direktur Pascasarjana">Direktur Pascasarjana</option>
                            <option value="Ketua Lembaga">Ketua Lembaga</option>
                            <option value="Ketua Sekolah Tinggi">Ketua Sekolah Tinggi</option>
                            <option value="Pembantu Dekan">Pembantu Dekan</option>
                            <option value="Asisten Direktur Pascasarjana">Asisten Direktur Pascasarjana</option>
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
                        <label class="input-label" for="jabatan_pimpinan">Jabatan Pimpinan</label>
                    </div>
                <?php elseif ($key == 11) : ?>
                    <div class="input">
                        <select name="kategori_pembimbing_dosen" id="kategori_pembimbing_dosen" class="input-field" value="" required/>
                            <option value="Pencangkokan">Pembimbing Pencangkokan</option>
                            <option value="Reguler">Reguler</option>
                        </select>
                        <label class="input-label" for="kategori_pembimbing_dosen">Kategori Pembimbing</label>
                    </div>
                <?php elseif ($key == 12) : ?>
                    <div class="input">
                        <select name="kategori_kegiatan" id="kategori_kegiatan" class="input-field" value="" required/>
                            <option value="Detasering">Detasering</option>
                            <option value="Pencangkokan">Pencangkokan</option>
                        </select>
                        <label class="input-label" for="kategori_kegiatan">Kategori Kegiatan</label>
                    </div>
                <?php elseif ($key == 13) : ?>
                    <div class="input">
                        <select name="durasi_pengembangan_diri" id="durasi_pengembangan_diri" class="input-field" value="" required/>
                            <option value="10-10">10 - 30 Jam</option>
                            <option value="30-80">30 - 80 Jam</option>
                            <option value="81-160">81 - 160 Jam</option>
                            <option value="161-480">161 - 480 Jam</option>
                            <option value="481-640">481 - 640 Jam</option>
                            <option value="641-960">641 - 960 Jam</option>
                            <option value=">960">Lebih dari 960 Jam</option>
                        </select>
                        <label class="input-label" for="durasi_pengembangan_diri">Durasi Pengembangan Diri</label>
                    </div>
                <?php endif ?>
                
                    <div class="input">
                        <select name="tahun_ajaran" id="tahun_ajaran" class="input-field">
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
                        <label for="tahun_ajaran" class="input-label">Tahun Ajaran</label>
                    </div>
                    <div class="input">
                        <select name="semester" id="semester" class="input-field">
                            <option value="Gasal">Gasal</option>
                            <option value="Genap">Genap</option>
                        </select>
                        <label for="semester" class="input-label">Semester</label>
                    </div>
                
                    <div class="input">
                        <input type="text" class="input-field" name="tempat" value="" required/>
                        <label class="input-label">Tempat</label>
                    </div>
                    <div class="input">
                        <input type="date" class="input-field" id="tanggal" name="tanggal" value="" required/>
                        <label class="input-label" for="tanggal">Tanggal</label><br>
                    </div>
                    <div class="input">
                        <input type="text" class="input-field" name="keterangan" value="">
                        <label class="input-label">Keterangan</label>
                    </div> 
                    <div class="action">
                        <button type="submit" class="action-button">Edit</button>
                    </div>
                <!-- <div class="card-info"> -->
                    <!-- <p>By signing up you are agreeing to our <a href="#">Terms and Conditions</a></p> -->
                    <!-- <p>Semua form diatas harus diisi</p> -->
                <!-- </div> -->
            </form>
            </div>
        </div>
    </div>
    <?php $i++ ?>
<?php endforeach ?>