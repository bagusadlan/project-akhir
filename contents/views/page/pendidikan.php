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
                    <td id="angka-kredit-perkategori<?= $i ?>"><?= $data['angkaKreditPerKategori'][$i] ?></td>
                    <td>
                        <button data-id="<?= $i ?>" class="detail-button button">Detail</button>
                        <!-- <button class="primary detail-button" data-id="<?= $rows['NOMOR'] ?>">Tambah</button> -->
                    </td>
                </tr>
                <?php $i++ ?>
            <?php endforeach ?>
            
        </tbody>
    </table>
    <!-- <a href="#">Show All</a> -->
</div>

<!-- </main> -->
<!-- END OF MAIN -->
    
<?php $i = 1 ?>
<?php foreach($data['pendidikan'] as $k => $rows) : ?>
    <div id="modal-container<?= $i ?>" class="modal-container">
        <div class="modal-background">
            <div class="modal">
                <div class="modal-header">
                    <h2 class="modal-number"><?= $i ?>.</h2>
                    <h2 class="modal-title"><?= $rows['DESKRIPSI'] ?></h2>
                    <div>
                        <span class="close-modal-container">&times;</span>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="body-header">
                        <button class="add-button mb-1" data-id="<?= $i ?>">Tambah Data</button>
                        <h2 class="angka-kredit-modal">Angka Kredit : <span id="modal-angka-kredit-perkategori<?= $i ?>"><?= $data['angkaKreditPerKategori'][$i] ?></span></h2>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>No.</th>
                            <?php if ($rows['NOMOR'] != 10) : ?>
                                <th>Program</th>
                            <?php endif ?>
                            <?php if ($rows['NOMOR'] == 1) : ?>
                                <th>Mata Kuliah</th>
                                <th>Kelas</th>
                                <th>Jumlah SKS</th>
                            <?php elseif ($rows['NOMOR'] == 3) : ?>
                                <th>Nama Perusahaan</th>
                            <?php elseif ($rows['NOMOR'] == 4) : ?>
                                <th>Kategori Pembimbing</th>
                                <th>Nama Mahasiswa</th>
                                <th>Jenis Tugas Akhir</th>
                            <?php elseif ($rows['NOMOR'] == 5) : ?>
                                <th>Kategori Penguji</th>
                                <th>Nama Mahasiswa</th>
                            <?php elseif ($rows['NOMOR'] == 7) : ?>
                                <th>Nama Produk</th>
                            <?php elseif ($rows['NOMOR'] == 8) : ?>
                                <th>Jenis Produk</th>
                                <th>Judul Bahan Ajar</th>
                            <?php elseif ($rows['NOMOR'] == 9) : ?>
                                <th>Nama Orasi Ilmiah</th>
                            <?php elseif ($rows['NOMOR'] == 10) : ?>
                                <th>Jabatan Pimpinan</th>
                            <?php elseif ($rows['NOMOR'] == 11) : ?>
                                <th>Kategori Pembimbing</th>
                            <?php elseif ($rows['NOMOR'] == 12) : ?>
                                <th>Kategori Kegiatan</th>
                            <?php elseif ($rows['NOMOR'] == 13) : ?>
                                <th>Durasi Pengembangan Diri</th>
                            <?php endif ?>
                                <th>Tahun Ajaran</th>
                                <th>Semester</th>
                                <th>Tempat</th>
                                <th>Tanggal</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="detail<?= $rows['NOMOR'] ?>">
                            <?php $n = 1 ?>
                            <?php foreach($data['allAngkaKredit'][$i] as $detail) : ?>
                                <tr>
                                    <?php if ($detail == null) : ?>
                                        <td>Data belum ditambahkan</td>
                                    <?php else : ?>
                                        <td class=""><?= $n ?></td>
                                    <?php if ($rows['NOMOR'] != 10) : ?>
                                        <td><?= $detail['PROGRAM'] ?></td>
                                    <?php endif ?>
                                    <?php if ($rows['NOMOR'] == 1) : ?>
                                        <td><?= $detail['MATA_KULIAH'] ?></td>
                                        <td><?= $detail['KELAS'] ?></td>
                                        <td><?= $detail['SKS'] ?></td>
                                    <?php elseif ($rows['NOMOR'] == 3) : ?>
                                        <td><?= $detail['NAMA_PERUSAHAAN'] ?></td>
                                    <?php elseif ($rows['NOMOR'] == 4) : ?>
                                        <td><?= $detail['KATEGORI_PEMBIMBING'] ?></td>
                                        <td><?= $detail['NAMA_MAHASISWA'] ?></td>
                                        <td><?= $detail['JENIS_TUGASAKHIR'] ?></td>
                                    <?php elseif ($rows['NOMOR'] == 5) : ?>
                                        <td><?= $detail['KATEGORI_PENGUJI'] ?></td>
                                        <td><?= $detail['NAMA_MAHASISWA'] ?></td>
                                    <?php elseif ($rows['NOMOR'] == 7) : ?>
                                        <td><?= $detail['NAMA_PRODUK'] ?></td>
                                    <?php elseif ($rows['NOMOR'] == 8) : ?>
                                        <td><?= $detail['JENIS_PRODUK'] ?></td>
                                        <td><?= $detail['JUDUL_BAHAN_AJAR'] ?></td>
                                    <?php elseif ($rows['NOMOR'] == 9) : ?>
                                        <td><?= $detail['NAMA_ORASI_ILMIAH'] ?></td>
                                    <?php elseif ($rows['NOMOR'] == 10) : ?>
                                        <td><?= $detail['JABATAN_PIMPINAN'] ?></td>
                                    <?php elseif ($rows['NOMOR'] == 11) : ?>
                                        <td><?= $detail['KATEGORI_PEMBIMBING_DOSEN'] ?></td>
                                    <?php elseif ($rows['NOMOR'] == 12) : ?>
                                        <td><?= $detail['KATEGORI_KEGIATAN'] ?></td>
                                    <?php elseif ($rows['NOMOR'] == 13) : ?>
                                        <td><?= $detail['DURASI_PENGEMBANGAN_DIRI'] ?></td>
                                        <?php endif ?>
                                    <?php endif ?>
                                    <td><?= $detail['TAHUN_AJARAN'] ?></td>
                                    <td><?= $detail['SEMESTER'] ?></td>
                                    <td><?= $detail['TEMPAT'] ?></td>
                                    <td><?= $detail['TANGGAL'] ?></td>
                                    <td><?= $detail['KETERANGAN'] ?></td>
                                    <td>
                                        <button data-id="<?= $detail['NOMOR'] ?>" data-id-bidang="<?= $k + 1 ?>" class="edit-button primary-button">Edit</button>
                                        <button data-id="<?= $detail['NOMOR'] ?>" class="delete-button button" onclick="deleteData('<?= base_url ?>/HapusDataDokumen/hapusDataPendidikan/<?= $detail['NOMOR'] ?>', <?= $k + 1 ?>)">Hapus</button>
                                    </td>
                            </tr>
                            <?php $n++ ?>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $i++ ?>
<?php endforeach ?>

<!-- MODAL FORM INPUT DATA KUM PENDIDIKAN -->
<?php $i = 1 ?>
<?php foreach($data['pendidikan'] as $rows) : ?>
    <div id="add-modal<?= $rows['NOMOR'] ?>" class="add-modal">
        <div class="modal-background">
            <div class="modal form-modal">
                <div class="modal-header">
                    <h2 class="title">Tambah Data <?= $rows['NAMA'] ?></h2>
                    <h2>
                        <span class="button-close">&times;</span>
                    </h2>
                    
                </div>
            <div class="modal-body">
                <form action="<?= base_url; ?>/InputDataKumPendidikan/inputData<?= $rows['NOMOR'] ?>" method="POST" class="data_dokumen add-form">
                        <input type="text" class="" name="nip" value="<?= $_SESSION['nomor'] ?>" hidden required/>
                    <?php if ($rows['NOMOR'] != 10) : ?>
                    <div class="input">
                        <input type="text" class="input-field input-program" id="program" name="program" value="" required/>
                        <label class="input-label">Program</label>
                    </div>
                    <?php endif ?>
                    <?php if ($rows['NOMOR'] == 1) : ?>
                        <div class="input">
                            <input type="text" class="input-field input-mata-kuliah" name="mata_kuliah" value="" required/>
                            <label class="input-label">Mata Kuliah</label>
                        </div>
                        <div class="input">
                            <input type="number" class="input-field input-sks" name="jumlah_sks" value="" required/>
                            <label class="input-label">Jumlah SKS</label>
                        </div>
                        <div class="input">
                            <input type="text" class="input-field input-kelas" name="kelas" value="" required/>
                            <label class="input-label">Kelas</label>
                        </div>
                    <?php elseif ($rows['NOMOR'] == 3) : ?>
                        <div class="input">
                            <input type="text" class="input-field input-nama_perusahaan" name="nama_perusahaan" value="" required/>
                            <label class="input-label" for="nama_perusahaan">Nama Perusahaan</label>
                        </div>
                    <?php elseif ($rows['NOMOR'] == 4) : ?>
                        <div class="input">
                            <select name="kategori_pembimbing" id="kategori_pembimbing" class="input-field input-kategori_pembimbing">
                                <option value="PU">Pembimbing Utama</option>
                                <option value="PP">Pembimbing Pendamping</option>
                            </select>
                            <label class="input-label" for="kategori_pembimbing">Kategori Pembimbing</label>
                        </div>
                        <div class="input">
                            <input type="text" name="nama_mahasiswa" class="input-field input-nama_mahasiswa" value="" required/>
                            <label class="input-label" for="nama_mahasiswa">Nama Mahasiswa</label>
                        </div>
                        <div class="input">
                            <select name="jenis_tugasakhir" id="jenis_tugasakhir" class="input-field input-jenis_tugasakhir" value="" required/>
                                <option value="Laporan Akhir">Laporan Akhir</option>
                                <option value="Skripsi">Skripsi</option>
                                <option value="Tesis">Tesis</option>
                                <option value="Disertasi">Disertasi</option>
                            </select>
                            <label class="input-label" for="jenis_tugasakhir">Jenis Tugas Akhir</label>
                        </div>
                    <?php elseif ($rows['NOMOR'] == 5) : ?>
                        <div class="input">
                            <select name="kategori_penguji" id="kategori_penguji" class="input-field input-kategori_penguji" value="" require/>
                                <option value="KP">Ketua Penguji</option>
                                <option value="AP">Anggota Penguji</option>
                            </select>
                            <label class="input-label" for="kategori_penguji">Kategori Penguji</label>
                        </div>
                        <div class="input">
                            <input type="text" name="nama_mahasiswa" class="input-field input-nama_mahasiswa" value="" required/>
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
                                <option value="10-30">10 - 30 Jam</option>
                                <option value="31-80">31 - 80 Jam</option>
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
                </form>
            </div>
            </div>
        </div>
    </div>
    <?php $i++ ?>
<?php endforeach ?>

<!-- MODAL FORM EDIT DATA KUM PENDIDIKAN -->
<div id="edit-modal1" class="edit-modal">
    <div class="modal-background">
        <div class="modal form-modal">
        <form action="<?= base_url; ?>/EditDataKumPendidikan/editData1" method="POST" class="form-edit-dokumen">
            <span class="button-close">&times;</span>
            <h2 class="title">Edit Data Mengajar</h2>
            <input type="text" class="input-field edit-nomor1" name="nomor" hidden required/>
            <div class="input">
                <input type="text" class="input-field edit-program1" id="edit-program" name="program" value="" required/>
                <label class="input-label">Program</label>
            </div>
                <div class="input">
                    <input type="text" class="input-field edit-mata-kuliah1" name="mata_kuliah" value="" required/>
                    <label class="input-label">Mata Kuliah</label>
                </div>
                <div class="input">
                    <input type="number" class="input-field edit-sks1" name="jumlah_sks" value="" required/>
                    <label class="input-label">Jumlah SKS</label>
                </div>
                <div class="input">
                    <input type="text" class="input-field edit-kelas1" name="kelas" value="" required/>
                    <label class="input-label">Kelas</label>
                </div>
                <div class="input">
                    <select name="tahun_ajaran" id="tahun_ajaran" class="input-field edit-tahun_ajaran1">
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
                    <select name="semester" id="semester" class="input-field edit-semester1">
                        <option value="Gasal">Gasal</option>
                        <option value="Genap">Genap</option>
                    </select>
                    <label for="semester" class="input-label">Semester</label>
                </div>
            
                <div class="input">
                    <input type="text" class="input-field edit-tempat1" name="tempat" value="" required/>
                    <label class="input-label">Tempat</label>
                </div>
                <div class="input">
                    <input type="date" class="input-field edit-tanggal1" id="tanggal" name="tanggal" value="" required/>
                    <label class="input-label" for="tanggal">Tanggal</label><br>
                </div>
                <div class="input">
                    <input type="text" class="input-field edit-keterangan1" name="keterangan" value="">
                    <label class="input-label">Keterangan</label>
                </div> 
                <div class="action">
                    <button type="submit" class="action-button">Edit</button>
                </div>
            </form> 
        </div>
    </div>
</div>

<!-- MODAL FORM EDIT DATA KUM PENDIDIKAN -->
<div id="edit-modal2" class="edit-modal">
    <div class="modal-background">
        <div class="modal form-modal">
        <form action="<?= base_url; ?>/EditDataKumPendidikan/editData2" method="POST" class="form-edit-dokumen">
            <span class="button-close">&times;</span>
            <h2 class="title">Edit Data Membimbing Seminar</h2>
            <input type="text" class="input-field edit-nomor2" name="nomor" hidden required/>
            <div class="input">
                <input type="text" class="input-field edit-program2" id="edit-program" name="program" value="" required/>
                <label class="input-label">Program</label>
            </div>
            <div class="input">
                <select name="tahun_ajaran" id="tahun_ajaran" class="input-field edit-tahun_ajaran2">
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
                <select name="semester" id="semester" class="input-field edit-semester2">
                    <option value="Gasal">Gasal</option>
                    <option value="Genap">Genap</option>
                </select>
                <label for="semester" class="input-label">Semester</label>
            </div>
        
            <div class="input">
                <input type="text" class="input-field edit-tempat2" name="tempat" value="" required/>
                <label class="input-label">Tempat</label>
            </div>
            <div class="input">
                <input type="date" class="input-field edit-tanggal2" id="tanggal" name="tanggal" value="" required/>
                <label class="input-label" for="tanggal">Tanggal</label><br>
            </div>
            <div class="input">
                <input type="text" class="input-field edit-keterangan2" name="keterangan" value="">
                <label class="input-label">Keterangan</label>
            </div> 
            <div class="action">
                <button type="submit" class="action-button">Edit</button>
            </div>
        </form> 
        </div>
    </div>
</div>

<!--  -->
<div id="edit-modal3" class="edit-modal">
    <div class="modal-background">
        <div class="modal form-modal">
        <form action="<?= base_url; ?>/EditDataKumPendidikan/editData3" method="POST" class="form-edit-dokumen">
            <span class="button-close">&times;</span>
            <h2 class="title">Edit Data Membimbing Kerja Praktik</h2>
            <input type="text" class="input-field edit-nomor3" name="nomor" hidden required/>
            <div class="input">
                <input type="text" class="input-field edit-program3" id="edit-program3" name="program" value="" required/>
                <label class="input-label">Program</label>
            </div>
                <div class="input">
                    <input type="text" class="input-field edit-nama_perusahaan3" name="nama_perusahaan" value="" required/>
                    <label class="input-label" for="nama_perusahaan">Nama Perusahaan</label>
                </div>
                <div class="input">
                    <select name="tahun_ajaran" id="tahun_ajaran" class="input-field edit-tahun_ajaran3">
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
                    <select name="semester" id="semester" class="input-field edit-semester3">
                        <option value="Gasal">Gasal</option>
                        <option value="Genap">Genap</option>
                    </select>
                    <label for="semester" class="input-label">Semester</label>
                </div>
            
                <div class="input">
                    <input type="text" class="input-field edit-tempat3" name="tempat" value="" required/>
                    <label class="input-label">Tempat</label>
                </div>
                <div class="input">
                    <input type="date" class="input-field edit-tanggal3" id="tanggal" name="tanggal" value="" required/>
                    <label class="input-label" for="tanggal">Tanggal</label><br>
                </div>
                <div class="input">
                    <input type="text" class="input-field edit-keterangan3" name="keterangan" value="">
                    <label class="input-label">Keterangan</label>
                </div> 
                <div class="action">
                    <button type="submit" class="action-button">Edit</button>
                </div>
            </form> 
        </div>
    </div>
</div>

<!-- EDIT MODAL 4 -->
<div id="edit-modal4" class="edit-modal">
    <div class="modal-background">
        <div class="modal form-modal">
        <form action="<?= base_url; ?>/EditDataKumPendidikan/editData4" method="POST" class="form-edit-dokumen">
            <span class="button-close">&times;</span>
            <h2 class="title">Edit Data Membimbing Tugas Akhir</h2>
            <input type="text" class="input-field edit-nomor4" name="nomor" hidden required/>
            <div class="input">
                <input type="text" class="input-field edit-program4" id="edit-program4" name="program" value="" required/>
                <label class="input-label">Program</label>
            </div>
            <div class="input">
                <select name="kategori_pembimbing" id="kategori_pembimbing" class="input-field edit-kategori_pembimbing4">
                    <option value="PU">Pembimbing Utama</option>
                    <option value="PP">Pembimbing Pendamping</option>
                </select>
                <label class="input-label" for="kategori_pembimbing">Kategori Pembimbing</label>
            </div>
            <div class="input">
                <input type="text" name="nama_mahasiswa" class="input-field edit-nama_mahasiswa4" value="" required/>
                <label class="input-label" for="nama_mahasiswa">Nama Mahasiswa</label>
            </div>
            <div class="input">
                <select name="jenis_tugasakhir" id="jenis_tugasakhir" class="input-field edit-jenis_tugasakhir4" value="" required/>
                    <option value="Laporan Akhir">Laporan Akhir</option>
                    <option value="Skripsi">Skripsi</option>
                    <option value="Tesis">Tesis</option>
                    <option value="Disertasi">Disertasi</option>
                </select>
                <label class="input-label" for="jenis_tugasakhir">Jenis Tugas Akhir</label>
            </div>
            <div class="input">
                <select name="tahun_ajaran" id="tahun_ajaran" class="input-field edit-tahun_ajaran4">
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
                <select name="semester" id="semester" class="input-field edit-semester4">
                    <option value="Gasal">Gasal</option>
                    <option value="Genap">Genap</option>
                </select>
                <label for="semester" class="input-label">Semester</label>
            </div>
        
            <div class="input">
                <input type="text" class="input-field edit-tempat4" name="tempat" value="" required/>
                <label class="input-label">Tempat</label>
            </div>
            <div class="input">
                <input type="date" class="input-field edit-tanggal4" id="tanggal" name="tanggal" value="" required/>
                <label class="input-label" for="tanggal">Tanggal</label><br>
            </div>
            <div class="input">
                <input type="text" class="input-field edit-keterangan4" name="keterangan" value="">
                <label class="input-label">Keterangan</label>
            </div> 
            <div class="action">
                <button type="submit" class="action-button">Edit</button>
            </div>
        </form> 
        </div>
    </div>
</div>

<!-- EDIT MODAL 5 -->
<div id="edit-modal5" class="edit-modal">
    <div class="modal-background">
        <div class="modal form-modal">
        <form action="<?= base_url; ?>/EditDataKumPendidikan/editData5" method="POST" class="form-edit-dokumen">
            <span class="button-close">&times;</span>
            <h2 class="title">Edit Data Penguji Tugas Akhir</h2>
            <input type="text" class="input-field edit-nomor5" name="nomor" hidden required/>
            <div class="input">
                <input type="text" class="input-field edit-program5" id="edit-program5" name="program" value="" required/>
                <label class="input-label">Program</label>
            </div>
            <div class="input">
                <select name="kategori_penguji" id="kategori_penguji" class="input-field edit-kategori_penguji5" value="" require/>
                    <option value="KP">Ketua Penguji</option>
                    <option value="AP">Anggota Penguji</option>
                </select>
                <label class="input-label" for="kategori_penguji">Kategori Penguji</label>
            </div>
            <div class="input">
                <input type="text" name="nama_mahasiswa" class="input-field edit-nama_mahasiswa5" value="" required/>
                <label class="input-label" for="nama_mahasiswa">Nama Mahasiswa</label>
            </div>
            <div class="input">
                <select name="tahun_ajaran" id="tahun_ajaran" class="input-field edit-tahun_ajaran5">
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
                <select name="semester" id="semester" class="input-field edit-semester5">
                    <option value="Gasal">Gasal</option>
                    <option value="Genap">Genap</option>
                </select>
                <label for="semester" class="input-label">Semester</label>
            </div>
        
            <div class="input">
                <input type="text" class="input-field edit-tempat5" name="tempat" value="" required/>
                <label class="input-label">Tempat</label>
            </div>
            <div class="input">
                <input type="date" class="input-field edit-tanggal5" id="tanggal" name="tanggal" value="" required/>
                <label class="input-label" for="tanggal">Tanggal</label><br>
            </div>
            <div class="input">
                <input type="text" class="input-field edit-keterangan5" name="keterangan" value="">
                <label class="input-label">Keterangan</label>
            </div> 
            <div class="action">
                <button type="submit" class="action-button">Edit</button>
            </div>
        </form> 
        </div>
    </div>
</div>

<!-- EDIT MODAL 6 -->
<div id="edit-modal6" class="edit-modal">
    <div class="modal-background">
        <div class="modal form-modal">
        <form action="<?= base_url; ?>/EditDataKumPendidikan/editData6" method="POST" class="form-edit-dokumen">
            <span class="button-close">&times;</span>
            <h2 class="title">Edit Data Membina Kegiatan Mahasiswa</h2>
            <input type="text" class="input-field edit-nomor6" name="nomor" hidden required/>
            <div class="input">
                <input type="text" class="input-field edit-program6" id="edit-program6" name="program" value="" required/>
                <label class="input-label">Program</label>
            </div>
            <div class="input">
                <select name="tahun_ajaran" id="tahun_ajaran" class="input-field edit-tahun_ajaran6">
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
                <select name="semester" id="semester" class="input-field edit-semester6">
                    <option value="Gasal">Gasal</option>
                    <option value="Genap">Genap</option>
                </select>
                <label for="semester" class="input-label">Semester</label>
            </div>
        
            <div class="input">
                <input type="text" class="input-field edit-tempat6" name="tempat" value="" required/>
                <label class="input-label">Tempat</label>
            </div>
            <div class="input">
                <input type="date" class="input-field edit-tanggal6" id="tanggal" name="tanggal" value="" required/>
                <label class="input-label" for="tanggal">Tanggal</label><br>
            </div>
            <div class="input">
                <input type="text" class="input-field edit-keterangan6" name="keterangan" value="">
                <label class="input-label">Keterangan</label>
            </div> 
            <div class="action">
                <button type="submit" class="action-button">Edit</button>
            </div>
        </form> 
        </div>
    </div>
</div>

<!-- EDIT MODAL 7 -->
<div id="edit-modal7" class="edit-modal">
    <div class="modal-background">
        <div class="modal form-modal">
        <form action="<?= base_url; ?>/EditDataKumPendidikan/editData7" method="POST" class="form-edit-dokumen">
            <span class="button-close">&times;</span>
            <h2 class="title">Edit Data Mengembangkan Program Kuliah</h2>
            <input type="text" class="input-field edit-nomor7" name="nomor" hidden required/>
            <div class="input">
                <input type="text" class="input-field edit-program7" id="edit-program7" name="program" value="" required/>
                <label class="input-label">Program</label>
            </div>
            <div class="input">
                <input type="text" name="nama_produk" class="input-field edit-nama_produk7" value="" required/>
                <label class="input-label" for="nama_produk">Nama Produk</label>
            </div>
            <div class="input">
                <select name="tahun_ajaran" id="tahun_ajaran" class="input-field edit-tahun_ajaran7">
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
                <select name="semester" id="semester" class="input-field edit-semester7">
                    <option value="Gasal">Gasal</option>
                    <option value="Genap">Genap</option>
                </select>
                <label for="semester" class="input-label">Semester</label>
            </div>
        
            <div class="input">
                <input type="text" class="input-field edit-tempat7" name="tempat" value="" required/>
                <label class="input-label">Tempat</label>
            </div>
            <div class="input">
                <input type="date" class="input-field edit-tanggal7" id="tanggal" name="tanggal" value="" required/>
                <label class="input-label" for="tanggal">Tanggal</label><br>
            </div>
            <div class="input">
                <input type="text" class="input-field edit-keterangan7" name="keterangan" value="">
                <label class="input-label">Keterangan</label>
            </div> 
            <div class="action">
                <button type="submit" class="action-button">Edit</button>
            </div>
        </form> 
        </div>
    </div>
</div>

<!-- EDIT MODAL 8 -->
<div id="edit-modal8" class="edit-modal">
    <div class="modal-background">
        <div class="modal form-modal">
        <form action="<?= base_url; ?>/EditDataKumPendidikan/editData8" method="POST" class="form-edit-dokumen">
            <span class="button-close">&times;</span>
            <h2 class="title">Edit Data Mengembangkan Bahan Pengajaran</h2>
            <input type="text" class="input-field edit-nomor8" name="nomor" hidden required/>
            <div class="input">
                <input type="text" class="input-field edit-program8" id="edit-program8" name="program" value="" required/>
                <label class="input-label">Program</label>
            </div>
            <div class="input">
                <select name="jenis_produk" id="jenis_produk" class="input-field edit-jenis_produk8" value="" required/>
                    <option value="Buku Ajar">Buku Ajar</option>
                    <option value="Diktat">Diktat</option>
                    <option value="Modul">Modul</option>
                    <option value="Petunjuk Praktikum">Petunjuk Praktikum</option>
                </select>
                <label class="input-label" for="jenis_produk">Jenis Produk</label>
            </div>
            <div class="input">
                <input type="text" name="judul_bahan_ajar" class="input-field edit-judul_bahan_ajar8" value="" required/>
                <label class="input-label" for="judul_bahan_ajar">Judul Bahan Ajar</label>
            </div>
            <div class="input">
                <select name="tahun_ajaran" id="tahun_ajaran" class="input-field edit-tahun_ajaran8">
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
                <select name="semester" id="semester" class="input-field edit-semester8">
                    <option value="Gasal">Gasal</option>
                    <option value="Genap">Genap</option>
                </select>
                <label for="semester" class="input-label">Semester</label>
            </div>
            <div class="input">
                <input type="text" class="input-field edit-tempat8" name="tempat" value="" required/>
                <label class="input-label">Tempat</label>
            </div>
            <div class="input">
                <input type="date" class="input-field edit-tanggal8" id="tanggal" name="tanggal" value="" required/>
                <label class="input-label" for="tanggal">Tanggal</label><br>
            </div>
            <div class="input">
                <input type="text" class="input-field edit-keterangan8" name="keterangan" value="">
                <label class="input-label">Keterangan</label>
            </div> 
            <div class="action">
                <button type="submit" class="action-button">Edit</button>
            </div>
        </form> 
        </div>
    </div>
</div>

<!-- EDIT MODAL 9 -->
<div id="edit-modal9" class="edit-modal">
    <div class="modal-background">
        <div class="modal form-modal">
        <form action="<?= base_url; ?>/EditDataKumPendidikan/editData9" method="POST" class="form-edit-dokumen">
            <span class="button-close">&times;</span>
            <h2 class="title">Edit Data Orasi Ilmiah</h2>
            <input type="text" class="input-field edit-nomor9" name="nomor" hidden required/>
            <div class="input">
                <input type="text" class="input-field edit-program9" id="edit-program9" name="program" value="" required/>
                <label class="input-label">Program</label>
            </div>
            <div class="input">
                <input type="text" name="nama_orasi_ilmiah" class="input-field edit-nama_orasi_ilmiah9" value="" required/>
                <label class="input-label" for="nama_orasi_ilmiah">Nama Orasi Ilmiah</label>
            </div>
            <div class="input">
                <select name="tahun_ajaran" id="tahun_ajaran" class="input-field edit-tahun_ajaran9">
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
                <select name="semester" id="semester" class="input-field edit-semester9">
                    <option value="Gasal">Gasal</option>
                    <option value="Genap">Genap</option>
                </select>
                <label for="semester" class="input-label">Semester</label>
            </div>
            <div class="input">
                <input type="text" class="input-field edit-tempat9" name="tempat" value="" required/>
                <label class="input-label">Tempat</label>
            </div>
            <div class="input">
                <input type="date" class="input-field edit-tanggal9" id="tanggal" name="tanggal" value="" required/>
                <label class="input-label" for="tanggal">Tanggal</label><br>
            </div>
            <div class="input">
                <input type="text" class="input-field edit-keterangan9" name="keterangan" value="">
                <label class="input-label">Keterangan</label>
            </div> 
            <div class="action">
                <button type="submit" class="action-button">Edit</button>
            </div>
        </form> 
        </div>
    </div>
</div>

<!-- EDIT MODAL 10 -->
<div id="edit-modal10" class="edit-modal">
    <div class="modal-background">
        <div class="modal">
            <form action="<?= base_url; ?>/EditDataKumPendidikan/editData10" method="POST" class="form-edit-dokumen">
                <span class="button-close">&times;</span>
                <h2 class="title">Edit Data Jabatan Pimpinan</h2>
                <input type="text" class="input-field edit-nomor10" name="nomor" hidden required/>
                <div class="input">
                    <select name="jabatan_pimpinan" id="jabatan_pimpinan" class="input-field edit-jabtan_pimpinan10" value="" required/>
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
                <div class="input">
                    <select name="tahun_ajaran" id="tahun_ajaran" class="input-field edit-tahun_ajaran10">
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
                    <select name="semester" id="semester" class="input-field edit-semester10">
                        <option value="Gasal">Gasal</option>
                        <option value="Genap">Genap</option>
                    </select>
                    <label for="semester" class="input-label">Semester</label>
                </div>
            
                <div class="input">
                    <input type="text" class="input-field edit-tempat10" name="tempat" value="" required/>
                    <label class="input-label">Tempat</label>
                </div>
                <div class="input">
                    <input type="date" class="input-field edit-tanggal10" id="tanggal" name="tanggal" value="" required/>
                    <label class="input-label" for="tanggal">Tanggal</label><br>
                </div>
                <div class="input">
                    <input type="text" class="input-field edit-keterangan10" name="keterangan" value="">
                    <label class="input-label">Keterangan</label>
                </div> 
                <div class="action">
                    <button type="submit" class="action-button">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- EDIT MODAL 11 -->
<div id="edit-modal11" class="edit-modal">
    <div class="modal-background">
        <div class="modal">
            <form action="<?= base_url; ?>/EditDataKumPendidikan/editData11" method="POST" class="form-edit-dokumen">
                <span class="button-close">&times;</span>
                <h2 class="title">Edit Data Membimbing Dosen</h2>
                <input type="text" class="input-field edit-nomor11" name="nomor" hidden required/>
                <div class="input">
                    <input type="text" class="input-field edit-program11" id="edit-program11" name="program" value="" required/>
                    <label class="input-label">Program</label>
                </div>
                <div class="input">
                    <select name="kategori_pembimbing_dosen" id="kategori_pembimbing_dosen" class="input-field edit-kategori_pembimbing_dosen11" value="" required/>
                        <option value="Pencangkokan">Pembimbing Pencangkokan</option>
                        <option value="Reguler">Reguler</option>
                    </select>
                    <label class="input-label" for="kategori_pembimbing_dosen">Kategori Pembimbing</label>
                </div>
                <div class="input">
                    <select name="tahun_ajaran" id="tahun_ajaran" class="input-field edit-tahun_ajaran11">
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
                    <select name="semester" id="semester" class="input-field edit-semester11">
                        <option value="Gasal">Gasal</option>
                        <option value="Genap">Genap</option>
                    </select>
                    <label for="semester" class="input-label">Semester</label>
                </div>
            
                <div class="input">
                    <input type="text" class="input-field edit-tempat11" name="tempat" value="" required/>
                    <label class="input-label">Tempat</label>
                </div>
                <div class="input">
                    <input type="date" class="input-field edit-tanggal11" id="tanggal" name="tanggal" value="" required/>
                    <label class="input-label" for="tanggal">Tanggal</label><br>
                </div>
                <div class="input">
                    <input type="text" class="input-field edit-keterangan11" name="keterangan" value="">
                    <label class="input-label">Keterangan</label>
                </div> 
                <div class="action">
                    <button type="submit" class="action-button">Edit</button>
                </div>
            </form> 
        </div>
    </div>
</div>

<!-- EDIT MODAL 12 -->
<div id="edit-modal12" class="edit-modal">
    <div class="modal-background">
        <div class="modal">
            <form action="<?= base_url; ?>/EditDataKumPendidikan/editData12" method="POST" class="form-edit-dokumen">
                <span class="button-close">&times;</span>
                <h2 class="title">Edit Data Detasering dan Pencangkokan</h2>
                <input type="text" class="input-field edit-nomor12" name="nomor" hidden required/>
                <div class="input">
                    <input type="text" class="input-field edit-program12" id="edit-program12" name="program" value="" required/>
                    <label class="input-label">Program</label>
                </div>
                <div class="input">
                    <select name="kategori_kegiatan" id="kategori_kegiatan" class="input-field edit-kategori_kegiatan12" value="" required/>
                        <option value="Detasering">Detasering</option>
                        <option value="Pencangkokan">Pencangkokan</option>
                    </select>
                    <label class="input-label" for="kategori_kegiatan">Kategori Kegiatan</label>
                </div>
                <div class="input">
                    <select name="tahun_ajaran" id="tahun_ajaran" class="input-field edit-tahun_ajaran12">
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
                    <select name="semester" id="semester" class="input-field edit-semester12">
                        <option value="Gasal">Gasal</option>
                        <option value="Genap">Genap</option>
                    </select>
                    <label for="semester" class="input-label">Semester</label>
                </div>
            
                <div class="input">
                    <input type="text" class="input-field edit-tempat12" name="tempat" value="" required/>
                    <label class="input-label">Tempat</label>
                </div>
                <div class="input">
                    <input type="date" class="input-field edit-tanggal12" id="tanggal" name="tanggal" value="" required/>
                    <label class="input-label" for="tanggal">Tanggal</label><br>
                </div>
                <div class="input">
                    <input type="text" class="input-field edit-keterangan12" name="keterangan" value="">
                    <label class="input-label">Keterangan</label>
                </div> 
                <div class="action">
                    <button type="submit" class="action-button">Edit</button>
                </div>
            </form> 
        </div>
    </div>
</div>

<!-- EDIT MODAL 13 -->
<div id="edit-modal13" class="edit-modal">
    <div class="modal-background">
        <div class="modal">
            <form action="<?= base_url; ?>/EditDataKumPendidikan/editData13" method="POST" class="form-edit-dokumen">
                <span class="button-close">&times;</span>
                <h2 class="title">Edit Data Pengembangan Diri</h2>
                <input type="text" class="input-field edit-nomor13" name="nomor" hidden required/>
                <div class="input">
                    <input type="text" class="input-field edit-program13" id="edit-program13" name="program" value="" required/>
                    <label class="input-label">Program</label>
                </div>
                <div class="input">
                    <select name="durasi_pengembangan_diri" id="durasi_pengembangan_diri" class="input-field edit-durasi_pengembangan_diri13" value="" required/>
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
                <div class="input">
                    <select name="tahun_ajaran" id="tahun_ajaran" class="input-field edit-tahun_ajaran13">
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
                    <select name="semester" id="semester" class="input-field edit-semester13">
                        <option value="Gasal">Gasal</option>
                        <option value="Genap">Genap</option>
                    </select>
                    <label for="semester" class="input-label">Semester</label>
                </div>
            
                <div class="input">
                    <input type="text" class="input-field edit-tempat13" name="tempat" value="" required/>
                    <label class="input-label">Tempat</label>
                </div>
                <div class="input">
                    <input type="date" class="input-field edit-tanggal13" id="tanggal" name="tanggal" value="" required/>
                    <label class="input-label" for="tanggal">Tanggal</label><br>
                </div>
                <div class="input">
                    <input type="text" class="input-field edit-keterangan13" name="keterangan" value="">
                    <label class="input-label">Keterangan</label>
                </div> 
                <div class="action">
                    <button type="submit" class="action-button">Edit</button>
                </div>
            </form> 
        </div>
    </div>
</div>