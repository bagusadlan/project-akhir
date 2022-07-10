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
                </form>
            </div>
        </div>
    </div>
<?php endforeach ?>