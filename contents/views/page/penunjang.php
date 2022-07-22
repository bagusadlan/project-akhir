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
    <!-- <a href="#">Show All</a> -->
</div>
    <!-- </main> -->
    <!-- END OF MAIN -->
    
<?php $i = 14 ?>
<?php $no = 1 ?>
<?php foreach($data['penunjang'] as $rows) : ?>
    <div id="modal-container<?= $i ?>" class="modal-container">
        <div class="modal-background">
            <div class="modal">
                <div class="modal-header">
                    <h2 class="modal-number"><?= $no ?>.</h2>
                    <h2 class="modal-title"><?= $rows['DESKRIPSI'] ?></h2>
                    <div>
                        <span class="close-modal-container">&times;</span>
                    </div>
                </div>
                <div class="modal-body">
                    <button class="add-button mb-1" data-id="<?= $i ?>">Tambah Data</button>
                    <table>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Program</th>
                            <?php if ($rows['NOMOR'] == 14) : ?>
                                <th>Kedudukan</th>
                            <?php elseif ($rows['NOMOR'] == 15) : ?>
                                <th>Jenis Kepanitiaan</th>
                                <th>Kedudukan</th>
                            <?php elseif ($rows['NOMOR'] == 16) : ?>
                                <th>Tingkatan</th>
                                <th>Kedudukan</th>
                            <?php elseif ($rows['NOMOR'] == 18) : ?>
                                <th>Kedudukan</th>
                            <?php elseif ($rows['NOMOR'] == 19) : ?>
                                <th>Kategori</th>
                                <th>Kedudukan</th>
                            <?php elseif ($rows['NOMOR'] == 20) : ?>
                                <th>Kategori</th>
                            <?php elseif ($rows['NOMOR'] == 21) : ?>
                                <th>Tingkatan</th>
                            <?php elseif ($rows['NOMOR'] == 22) : ?>
                                <th>Tingkatan</th>
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
                                <?php if ($detail == null) : ?>
                                    <h2>Data Belum Ditambahkan</h2>
                                <?php else : ?>
                                        <tr>
                                        <td><?= $n ?></td>
                                        <td><?= $detail['PROGRAM'] ?></td>
                                    <?php if ($rows['NOMOR'] == 14) : ?>
                                        <td><?= $detail['KEDUDUKAN'] ?></td>
                                    <?php elseif ($rows['NOMOR'] == 15) : ?>
                                        <td><?= $detail['JENIS_PANITIA'] ?></td>
                                        <td><?= $detail['KEDUDUKAN_PADA_LEMBAGA'] ?></td>
                                    <?php elseif ($rows['NOMOR'] == 16) : ?>
                                        <td><?= $detail['TINGKATAN_ORGANISASI_PROFESI'] ?></td>
                                        <td><?= $detail['KEDUDUKAN_ORGANISASI_PROFESI'] ?></td>
                                    <?php elseif ($rows['NOMOR'] == 18) : ?>
                                        <td><?= $detail['KEDUDUKAN_PADA_DELEGASI'] ?></td>
                                    <?php elseif ($rows['NOMOR'] == 19) : ?>
                                        <td><?= $detail['TINGKATAN_PERTEMUAN_ILMIAH'] ?></td>
                                        <td><?= $detail['KEDUDUKAN_PERTEMUAN_ILMIAH'] ?></td>
                                    <?php elseif ($rows['NOMOR'] == 20) : ?>
                                        <td><?= $detail['KATEGORI_PENGHARGAAN'] ?></td>
                                    <?php elseif ($rows['NOMOR'] == 21) : ?>
                                        <td><?= $detail['TINGKATAN_BUKU_PELAJARAN'] ?></td>
                                    <?php elseif ($rows['NOMOR'] == 22) : ?>
                                        <td><?= $detail['TINGKATAN_PRESTASI_OLAHRAGA'] ?></td>
                                    <?php endif ?>
                                <?php endif ?>
                                        <td><?= $detail['TAHUN_AJARAN'] ?></td>
                                        <td><?= $detail['SEMESTER'] ?></td>
                                        <td><?= $detail['TEMPAT'] ?></td>
                                        <td><?= $detail['TANGGAL'] ?></td>
                                        <td><?= $detail['KETERANGAN'] ?></td>
                                        <td>
                                            <button data-id="<?= $detail['NOMOR'] ?>" data-id-bidang="<?= $detail['NOMOR_BIDANG'] ?>" class="edit-penunjang primary-button">Edit</button>
                                            <button data-id="<?= $detail['NOMOR'] ?>" class="delete-button button" onclick="deleteData('<?= base_url ?>/HapusDataDokumen/hapusDataPendidikan/<?= $detail['NOMOR'] ?>', <?= $detail['NOMOR_BIDANG'] ?>)">Hapus</button>
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
<?php $no++ ?>
<?php endforeach ?>

<!-- MODAL FORM INPUT DATA KUM PENUNJANG -->
<?php foreach($data['penunjang'] as $penunjang) : ?>
    <div id="add-modal<?= $penunjang['NOMOR'] ?>" class="add-modal">
        <div class="modal-background">
            <div class="modal form-modal">
                <div class="modal-header">
                    <h2 class="modal-title">Tambah Data <?= $penunjang['NAMA'] ?></h2>
                    <div>
                        <span class="button-close">&times;</span>
                    </div>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url; ?>/InputDataKumPenunjang/inputData<?= $penunjang['NOMOR'] ?>" method="POST" class="data_dokumen">
                        <input type="text" class="" name="nip" value="<?= $_SESSION['nomor'] ?>" hidden required/>
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
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>

<!-- MODAL FORM EDIT DATA PENUNJANG 14 -->
<div id="edit-modal14" class="edit-modal">
    <div class="modal-background">
        <div class="modal form-modal">
            <form action="<?= base_url; ?>/EditDataKumPenunjang/editData14" method="POST" class="form-edit-dokumen">
                <span class="button-close">&times;</span>
                <h2 class="title">Edit Data Panitia Perguruan Tinggi</h2>
                <input type="text" class="input-field edit-nomor14" name="nomor" hidden required/>
                <div class="input">
                    <input type="text" class="input-field edit-program14" id="edit-program" name="program" value="" required/>
                    <label class="input-label">Program</label>
                </div>
                <div class="input">
                    <select name="kedudukan" id="kedudukan" class="input-field edit-kedudukan14">
                        <option value="Ketua">Ketua</option>
                        <option value="Wakil Ketua">Wakil Ketua</option>
                        <option value="Anggota">Anggota</option>
                    </select>
                    <label class="input-label" for="kedudukan">Kedudukan Pada Panitia</label>
                </div>
                <div class="input">
                    <select name="tahun_ajaran" id="tahun_ajaran" class="input-field edit-tahun_ajaran14">
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
                    <select name="semester" id="semester" class="input-field edit-semester14">
                        <option value="Gasal">Gasal</option>
                        <option value="Genap">Genap</option>
                    </select>
                    <label for="semester" class="input-label">Semester</label>
                </div>
            
                <div class="input">
                    <input type="text" class="input-field edit-tempat14" name="tempat" value="" required/>
                    <label class="input-label">Tempat</label>
                </div>
                <div class="input">
                    <input type="date" class="input-field edit-tanggal14" id="tanggal" name="tanggal" value="" required/>
                    <label class="input-label" for="tanggal">Tanggal</label><br>
                </div>
                <div class="input">
                    <input type="text" class="input-field edit-keterangan14" name="keterangan" value="">
                    <label class="input-label">Keterangan</label>
                </div> 
                <div class="action">
                    <button type="submit" class="action-button">Edit</button>
                </div>
            </form> 
        </div>
    </div>
</div>

<!-- MODAL FORM EDIT DATA KUM PENUNJANG 15 -->
<div id="edit-modal15" class="edit-modal">
    <div class="modal-background">
        <div class="modal form-modal">
        <form action="<?= base_url; ?>/EditDataKumPenunjang/editData15" method="POST" class="form-edit-dokumen">
            <span class="button-close">&times;</span>
            <h2 class="title">Edit Data Panitia Lembaga Pemerintah</h2>
            <input type="text" class="input-field edit-nomor15" name="nomor" hidden required/>
            <div class="input">
                <input type="text" class="input-field edit-program15" id="edit-program" name="program" value="" required/>
                <label class="input-label">Program</label>
            </div>
            <div class="input">
                <select name="jenis_panitia" id="jenis_panitia" class="input-field edit-jenis_panitia15">
                    <option value="Pusat">Panitia Pusat</option>
                    <option value="Daerah">Panitia Daerah</option>
                </select>
                <label class="input-label" for="jenis_panitia">Jenis Panitia</label>
            </div>
            <div class="input">
                <select name="kedudukan_pada_lembaga" id="kedudukan_pada_lembaga" class="input-field edit-kedudukan_pada_lembaga15">
                    <option value="Ketua">Ketua</option>
                    <option value="Wakil Ketua">Wakil Ketua</option>
                    <option value="Anggota">Anggota</option>
                </select>
                <label class="input-label" for="kedudukan_pada_lembaga">Kedudukan Pada Panitia</label>
            </div>
            <div class="input">
                <select name="tahun_ajaran" id="tahun_ajaran" class="input-field edit-tahun_ajaran15">
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
                <select name="semester" id="semester" class="input-field edit-semester15">
                    <option value="Gasal">Gasal</option>
                    <option value="Genap">Genap</option>
                </select>
                <label for="semester" class="input-label">Semester</label>
            </div>
        
            <div class="input">
                <input type="text" class="input-field edit-tempat15" name="tempat" value="" required/>
                <label class="input-label">Tempat</label>
            </div>
            <div class="input">
                <input type="date" class="input-field edit-tanggal15" id="tanggal" name="tanggal" value="" required/>
                <label class="input-label" for="tanggal">Tanggal</label><br>
            </div>
            <div class="input">
                <input type="text" class="input-field edit-keterangan15" name="keterangan" value="">
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
<div id="edit-modal16" class="edit-modal">
    <div class="modal-background">
        <div class="modal form-modal">
            <form action="<?= base_url; ?>/EditDataKumPenunjang/editData16" method="POST" class="form-edit-dokumen">
                <span class="button-close">&times;</span>
                <h2 class="title">Edit Data Organisasi Profesi</h2>
                <input type="text" class="input-field edit-nomor16" name="nomor" hidden required/>
                <div class="input">
                    <input type="text" class="input-field edit-program16" id="edit-program16" name="program" value="" required/>
                    <label class="input-label">Program</label>
                </div>
                <div class="input">
                    <select name="tingkatan_organisasi_profesi" id="tingkatan_organisasi_profesi" class="input-field edit-tingkatan_organisasi_profesi16">
                        <option value="Internasional">Internasional</option>
                        <option value="Nasional">Nasional</option>
                    </select>
                    <label class="input-label" for="tingkatan_organisasi_profesi">Tingkat Organisasi Profesi</label>
                </div>
                <div class="input">
                    <select name="kedudukan_organisasi_profesi" id="kedudukan_organisasi_profesi" class="input-field edit-kedudukan_organisasi_profesi16">
                        <option value="Pengurus">Pengurus</option>
                        <option value="Anggota Atas Permintaan">Anggota Atas Permintaan</option>
                        <option value="Anggota">Anggota</option>
                    </select>
                    <label class="input-label" for="kedudukan_organisasi_profesi">Kedudukan Pada Organisasi Profesi</label>
                </div>
                <div class="input">
                    <select name="tahun_ajaran" id="tahun_ajaran" class="input-field edit-tahun_ajaran16">
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
                    <select name="semester" id="semester" class="input-field edit-semester16">
                        <option value="Gasal">Gasal</option>
                        <option value="Genap">Genap</option>
                    </select>
                    <label for="semester" class="input-label">Semester</label>
                </div>
            
                <div class="input">
                    <input type="text" class="input-field edit-tempat16" name="tempat" value="" required/>
                    <label class="input-label">Tempat</label>
                </div>
                <div class="input">
                    <input type="date" class="input-field edit-tanggal16" id="tanggal" name="tanggal" value="" required/>
                    <label class="input-label" for="tanggal">Tanggal</label><br>
                </div>
                <div class="input">
                    <input type="text" class="input-field edit-keterangan16" name="keterangan" value="">
                    <label class="input-label">Keterangan</label>
                </div> 
                <div class="action">
                    <button type="submit" class="action-button">Edit</button>
                </div>
            </form> 
        </div>
    </div>
</div>

<!-- EDIT MODAL 17 -->
<div id="edit-modal17" class="edit-modal">
    <div class="modal-background">
        <div class="modal form-modal">
        <form action="<?= base_url; ?>/EditDataKumPenunjang/editData17" method="POST" class="form-edit-dokumen">
            <span class="button-close">&times;</span>
            <h2 class="title">Edit Data Panitia Antar Lembaga</h2>
            <input type="text" class="input-field edit-nomor17" name="nomor" hidden required/>
            <div class="input">
                <input type="text" class="input-field edit-program17" id="edit-program17" name="program" value="" required/>
                <label class="input-label">Program</label>
            </div>
            <div class="input">
                <select name="tahun_ajaran" id="tahun_ajaran" class="input-field edit-tahun_ajaran17">
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
                <select name="semester" id="semester" class="input-field edit-semester17">
                    <option value="Gasal">Gasal</option>
                    <option value="Genap">Genap</option>
                </select>
                <label for="semester" class="input-label">Semester</label>
            </div>
        
            <div class="input">
                <input type="text" class="input-field edit-tempat17" name="tempat" value="" required/>
                <label class="input-label">Tempat</label>
            </div>
            <div class="input">
                <input type="date" class="input-field edit-tanggal17" id="tanggal" name="tanggal" value="" required/>
                <label class="input-label" for="tanggal">Tanggal</label><br>
            </div>
            <div class="input">
                <input type="text" class="input-field edit-keterangan17" name="keterangan" value="">
                <label class="input-label">Keterangan</label>
            </div> 
            <div class="action">
                <button type="submit" class="action-button">Edit</button>
            </div>
        </form> 
        </div>
    </div>
</div>

<!-- EDIT MODAL 18 -->
<div id="edit-modal18" class="edit-modal">
    <div class="modal-background">
        <div class="modal form-modal">
        <form action="<?= base_url; ?>/EditDataKumPenunjang/editData18" method="POST" class="form-edit-dokumen">
            <span class="button-close">&times;</span>
            <h2 class="title">Edit Data Delegasi Nasional</h2>
            <input type="text" class="input-field edit-nomor18" name="nomor" hidden required/>
            <div class="input">
                <input type="text" class="input-field edit-program18" id="edit-program18" name="program" value="" required/>
                <label class="input-label">Program</label>
            </div>
            <div class="input">
                <select name="kedudukan_pada_delegasi" id="kedudukan_pada_delegasi" class="input-field edit-kedudukan_pada_delegasi18">
                    <option value="Ketua">Ketua Delegasi</option>
                    <option value="Anggota">Anggota Delegasi</option>
                </select>
                <label class="input-label" for="kedudukan_pada_delegasi">Kedudukan Pada Delegasi</label>
            </div>
            <div class="input">
                <select name="tahun_ajaran" id="tahun_ajaran" class="input-field edit-tahun_ajaran18">
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
                <select name="semester" id="semester" class="input-field edit-semester18">
                    <option value="Gasal">Gasal</option>
                    <option value="Genap">Genap</option>
                </select>
                <label for="semester" class="input-label">Semester</label>
            </div>
        
            <div class="input">
                <input type="text" class="input-field edit-tempat18" name="tempat" value="" required/>
                <label class="input-label">Tempat</label>
            </div>
            <div class="input">
                <input type="date" class="input-field edit-tanggal18" id="tanggal" name="tanggal" value="" required/>
                <label class="input-label" for="tanggal">Tanggal</label><br>
            </div>
            <div class="input">
                <input type="text" class="input-field edit-keterangan18" name="keterangan" value="">
                <label class="input-label">Keterangan</label>
            </div> 
            <div class="action">
                <button type="submit" class="action-button">Edit</button>
            </div>
        </form> 
        </div>
    </div>
</div>

<!-- EDIT MODAL 19 -->
<div id="edit-modal19" class="edit-modal">
    <div class="modal-background">
        <div class="modal form-modal">
        <form action="<?= base_url; ?>/EditDataKumPenunjang/editData19" method="POST" class="form-edit-dokumen">
            <span class="button-close">&times;</span>
            <h2 class="title">Edit Data Pertemuan Ilmiah</h2>
            <input type="text" class="input-field edit-nomor19" name="nomor" hidden required/>
            <div class="input">
                <input type="text" class="input-field edit-program19" id="edit-program6" name="program" value="" required/>
                <label class="input-label">Program</label>
            </div>
            <div class="input">
                <select name="tingkatan_pertemuan_ilmiah" id="tingkatan_pertemuan_ilmiah" class="input-field edit-tingkatan_pertemuan_ilmiah19">
                    <option value="1">Internasional/Nasional/Regional</option>
                    <option value="2">Lingkungan Perguruan Tinggi</option>
                </select>
                <label class="input-label" for="tingkatan_pertemuan_ilmiah">Tingkat Pertemuah Ilmiah</label>
            </div>
            <div class="input">
                <select name="kedudukan_pertemuan_ilmiah" id="kedudukan_pertemuan_ilmiah" class="input-field edit-kedudukan_pertemuan_ilmiah19">
                    <option value="Ketua">Ketua</option>
                    <option value="Anggota">Anggota</option>
                </select>
                <label class="input-label" for="kedudukan_pertemuan_ilmiah">Kedudukan Pada Pertemuan Ilmiah</label>
            </div>
            <div class="input">
                <select name="tahun_ajaran" id="tahun_ajaran" class="input-field edit-tahun_ajaran19">
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
                <select name="semester" id="semester" class="input-field edit-semester19">
                    <option value="Gasal">Gasal</option>
                    <option value="Genap">Genap</option>
                </select>
                <label for="semester" class="input-label">Semester</label>
            </div>
        
            <div class="input">
                <input type="text" class="input-field edit-tempat19" name="tempat" value="" required/>
                <label class="input-label">Tempat</label>
            </div>
            <div class="input">
                <input type="date" class="input-field edit-tanggal19" id="tanggal" name="tanggal" value="" required/>
                <label class="input-label" for="tanggal">Tanggal</label><br>
            </div>
            <div class="input">
                <input type="text" class="input-field edit-keterangan19" name="keterangan" value="">
                <label class="input-label">Keterangan</label>
            </div> 
            <div class="action">
                <button type="submit" class="action-button">Edit</button>
            </div>
        </form> 
        </div>
    </div>
</div>

<!-- EDIT MODAL 20 -->
<div id="edit-modal20" class="edit-modal">
    <div class="modal-background">
        <div class="modal form-modal">
        <form action="<?= base_url; ?>/EditDataKumPenunjang/editData20" method="POST" class="form-edit-dokumen">
            <span class="button-close">&times;</span>
            <h2 class="title">Edit Data Tanda Jasa/Penghargaan</h2>
            <input type="text" class="input-field edit-nomor20" name="nomor" hidden required/>
            <div class="input">
                <input type="text" class="input-field edit-program20" id="edit-program7" name="program" value="" required/>
                <label class="input-label">Program</label>
            </div>
            <div class="input">
                <select name="kategori_penghargaan" id="kategori_penghargaan" class="input-field edit-kategori_penghargaan20" value="" required/>
                    <option value="30">Satya Lencana 30 Tahun</option>
                    <option value="20">Satya Lencana 20 Tahun</option>
                    <option value="10">Satya Lencana 10 Tahun</option>
                    <option value="Internasional">Tingkat Internasional</option>
                    <option value="Nasional">Tingkat Nasional</option>
                    <option value="Daerah">Tingkat Daerah</option>
                </select>
                <label class="input-label" for="kategori_penghargaan">Kategori Penghargaan</label>
            </div>
            <div class="input">
                <select name="tahun_ajaran" id="tahun_ajaran" class="input-field edit-tahun_ajaran20">
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
                <select name="semester" id="semester" class="input-field edit-semester20">
                    <option value="Gasal">Gasal</option>
                    <option value="Genap">Genap</option>
                </select>
                <label for="semester" class="input-label">Semester</label>
            </div>
        
            <div class="input">
                <input type="text" class="input-field edit-tempat20" name="tempat" value="" required/>
                <label class="input-label">Tempat</label>
            </div>
            <div class="input">
                <input type="date" class="input-field edit-tanggal20" id="tanggal" name="tanggal" value="" required/>
                <label class="input-label" for="tanggal">Tanggal</label><br>
            </div>
            <div class="input">
                <input type="text" class="input-field edit-keterangan20" name="keterangan" value="">
                <label class="input-label">Keterangan</label>
            </div> 
            <div class="action">
                <button type="submit" class="action-button">Edit</button>
            </div>
        </form> 
        </div>
    </div>
</div>

<!-- EDIT MODAL 21 -->
<div id="edit-modal21" class="edit-modal">
    <div class="modal-background">
        <div class="modal form-modal">
        <form action="<?= base_url; ?>/EditDataKumPenunjang/editData21" method="POST" class="form-edit-dokumen">
            <span class="button-close">&times;</span>
            <h2 class="title">Edit Data Menulis Buku Pelajaran</h2>
            <input type="text" class="input-field edit-nomor21" name="nomor" hidden required/>
            <div class="input">
                <input type="text" class="input-field edit-program21" id="edit-program21" name="program" value="" required/>
                <label class="input-label">Program</label>
            </div>
            <div class="input">
                <select name="tingkatan_buku_pelajaran" id="tingkatan_buku_pelajaran" class="input-field edit-tingkatan_buku_pelajaran21" value="" required/>
                    <option value="SMTA">Buku SMTA</option>
                    <option value="SMTP">Buku SMTP</option>
                    <option value="SD">Buku SD</option>
                </select>
                <label class="input-label" for="tingkatan_buku_pelajaran">Tingkatan Buku Pelajaran</label>
            </div>
            <div class="input">
                <select name="tahun_ajaran" id="tahun_ajaran" class="input-field edit-tahun_ajaran21">
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
                <select name="semester" id="semester" class="input-field edit-semester21">
                    <option value="Gasal">Gasal</option>
                    <option value="Genap">Genap</option>
                </select>
                <label for="semester" class="input-label">Semester</label>
            </div>
            <div class="input">
                <input type="text" class="input-field edit-tempat21" name="tempat" value="" required/>
                <label class="input-label">Tempat</label>
            </div>
            <div class="input">
                <input type="date" class="input-field edit-tanggal21" id="tanggal" name="tanggal" value="" required/>
                <label class="input-label" for="tanggal">Tanggal</label><br>
            </div>
            <div class="input">
                <input type="text" class="input-field edit-keterangan21" name="keterangan" value="">
                <label class="input-label">Keterangan</label>
            </div> 
            <div class="action">
                <button type="submit" class="action-button">Edit</button>
            </div>
        </form> 
        </div>
    </div>
</div>

<!-- EDIT MODAL 22 -->
<div id="edit-modal22" class="edit-modal">
    <div class="modal-background">
        <div class="modal form-modal">
        <form action="<?= base_url; ?>/EditDataKumPenunjang/editData22" method="POST" class="form-edit-dokumen">
            <span class="button-close">&times;</span>
            <h2 class="title">Edit Data Prestasi Bidang Olahraga</h2>
            <input type="text" class="input-field edit-nomor22" name="nomor" hidden required/>
            <div class="input">
                <input type="text" class="input-field edit-program22" id="edit-program22" name="program" value="" required/>
                <label class="input-label">Program</label>
            </div>
            <div class="input">
                <select name="tingkatan_prestasi_olahraga" id="tingkatan_prestasi_olahraga" class="input-field edit-tingkatan_prestasi_olahraga22" value="" required/>
                    <option value="Internasional">Tingkat Internasional</option>
                    <option value="Nasional">Tingkat Nasional</option>
                    <option value="Daerah">Tingkat Daerah</option>
                </select>
                <label class="input-label" for="tingkatan_prestasi_olahraga">Tingkatan Prestasi Olahraga</label>
            </div>
            <div class="input">
                <select name="tahun_ajaran" id="tahun_ajaran" class="input-field edit-tahun_ajaran22">
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
                <select name="semester" id="semester" class="input-field edit-semester22">
                    <option value="Gasal">Gasal</option>
                    <option value="Genap">Genap</option>
                </select>
                <label for="semester" class="input-label">Semester</label>
            </div>
            <div class="input">
                <input type="text" class="input-field edit-tempat22" name="tempat" value="" required/>
                <label class="input-label">Tempat</label>
            </div>
            <div class="input">
                <input type="date" class="input-field edit-tanggal22" id="tanggal" name="tanggal" value="" required/>
                <label class="input-label" for="tanggal">Tanggal</label><br>
            </div>
            <div class="input">
                <input type="text" class="input-field edit-keterangan22" name="keterangan" value="">
                <label class="input-label">Keterangan</label>
            </div> 
            <div class="action">
                <button type="submit" class="action-button">Edit</button>
            </div>
        </form> 
        </div>
    </div>
</div>

<!-- EDIT MODAL 23 -->
<div id="edit-modal23" class="edit-modal">
    <div class="modal-background">
        <div class="modal">
            <form action="<?= base_url; ?>/EditDataKumPenunjang/editData23" method="POST" class="form-edit-dokumen">
                <span class="button-close">&times;</span>
                <h2 class="title">Edit Data Penilai Jabatan Dosen</h2>
                <input type="text" class="input-field edit-nomor23" name="nomor" hidden required/>
                <div class="input">
                    <input type="text" class="input-field edit-program23" id="edit-program23" name="program" value="" required/>
                    <label class="input-label">Program</label>
                </div>
                <div class="input">
                    <select name="tahun_ajaran" id="tahun_ajaran" class="input-field edit-tahun_ajaran23">
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
                    <select name="semester" id="semester" class="input-field edit-semester23">
                        <option value="Gasal">Gasal</option>
                        <option value="Genap">Genap</option>
                    </select>
                    <label for="semester" class="input-label">Semester</label>
                </div>
            
                <div class="input">
                    <input type="text" class="input-field edit-tempat23" name="tempat" value="" required/>
                    <label class="input-label">Tempat</label>
                </div>
                <div class="input">
                    <input type="date" class="input-field edit-tanggal23" id="tanggal" name="tanggal" value="" required/>
                    <label class="input-label" for="tanggal">Tanggal</label><br>
                </div>
                <div class="input">
                    <input type="text" class="input-field edit-keterangan23" name="keterangan" value="">
                    <label class="input-label">Keterangan</label>
                </div> 
                <div class="action">
                    <button type="submit" class="action-button">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>