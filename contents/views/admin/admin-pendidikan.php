<div class="angka-kredit">
    <!-- END OF ASIDE -->
    <h2>Pelaksanaan Pendidikan</h2>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Komponen Kegiatan</th>
                <!-- <th>Angka Kredit</th>    -->
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1 ?>
            <?php foreach($data['pendidikan'] as $rows) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $rows['DESKRIPSI'] ?></td>
                    <td>
                        <button data-id="<?= $i ?>" class="detail-button button">Detail</button>
                    </td>
                </tr>
                <?php $i++ ?>
            <?php endforeach ?>
            
        </tbody>
    </table>
    <!-- END OF MAIN -->
</div>

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
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>No.</th>
                            <?php if ($rows['NOMOR'] == 1) : ?>
                                <th>Jabatan Fungsional</th>
                                <th>Batas SKS Pertama</th>
                                <th>Batas SKS Berikutnya</th>
                                <th>Angka Kredit Pertama</th>
                                <th>Angka Kredit Berikutnya</th>
                            <?php elseif ($rows['NOMOR'] == 2) : ?>
                                <th>Program</th>
                            <?php elseif ($rows['NOMOR'] == 3) : ?>
                                <th>Program</th>
                            <?php elseif ($rows['NOMOR'] == 4) : ?>
                                <th>Kategori Pembimbing</th>
                                <th>Jenis Tugas Akhir</th>
                                <th>Batas Maksimal</th>
                            <?php elseif ($rows['NOMOR'] == 5) : ?>
                                <th>Kategori Penguji</th>
                                <th>Batas Maksimal</th>
                            <?php elseif ($rows['NOMOR'] == 6) : ?>
                                <th>Program</th>
                                <th>Batas Maksimal</th>
                            <?php elseif ($rows['NOMOR'] == 7) : ?>
                                <th>Program</th>
                                <th>Batas Maksimal</th>
                            <?php elseif ($rows['NOMOR'] == 8) : ?>
                                <th>Jenis Produk</th>
                                <th>Batas Maksimal</th>
                            <?php elseif ($rows['NOMOR'] == 9) : ?>
                                <th>Program</th>
                                <th>Batas Maksimal</th>
                            <?php elseif ($rows['NOMOR'] == 10) : ?>
                                <th>Jabatan Pimpinan</th>
                                <th>Batas Maksimal</th>
                            <?php elseif ($rows['NOMOR'] == 11) : ?>
                                <th>Kategori Pembimbing</th>
                                <th>Batas Maksimal</th>
                            <?php elseif ($rows['NOMOR'] == 12) : ?>
                                <th>Kategori Kegiatan</th>
                                <th>Batas Maksimal</th>
                            <?php elseif ($rows['NOMOR'] == 13) : ?>
                                <th>Durasi Pengembangan Diri</th>
                            <?php endif ?>
                            <?php if ($rows['NOMOR'] != 1) : ?>
                                <th>Angka Kredit</th>
                            <?php endif ?>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="detail<?= $rows['NOMOR'] ?>">
                            <?php $number = 1 ?>
                            <?php foreach($data['penghitungPendidikan'][$i] as $detail) : ?>
                            <tr>
                                <td class=""><?= $number ?></td>
                                <?php if ($rows['NOMOR'] == 1) : ?>
                                    <td><?= $detail['JABATAN_FUNGSIONAL'] ?></td>
                                    <td><?= $detail['BATAS_SKS_PERTAMA'] ?></td>
                                    <td><?= $detail['BATAS_SKS_BERIKUTNYA'] ?></td>
                                    <td><?= $detail['ANGKA_KREDIT_PERTAMA'] ?></td>
                                    <td><?= $detail['ANGKA_KREDIT_BERIKUTNYA'] ?></td>
                                <?php elseif ($rows['NOMOR'] == 2) : ?>
                                    <td><?= $detail['PROGRAM'] ?></td>
                                <?php elseif ($rows['NOMOR'] == 3) : ?>
                                    <td><?= $detail['PROGRAM'] ?></td>
                                <?php elseif ($rows['NOMOR'] == 4) : ?>
                                    <td><?= $detail['KATEGORI_PEMBIMBING'] ?></td>
                                    <td><?= $detail['JENIS_TUGAS_AKHIR'] ?></td>
                                    <td><?= $detail['BATAS_MAKSIMAL'] ?> Lulusan / Semester</td>
                                <?php elseif ($rows['NOMOR'] == 5) : ?>
                                    <td><?= $detail['KATEGORI_PENGUJI'] ?></td>
                                    <td><?= $detail['BATAS_MAKSIMAL'] ?> Lulusan / Semester</td>
                                <?php elseif ($rows['NOMOR'] == 6) : ?>
                                    <td><?= $detail['PROGRAM'] ?></td>
                                    <td><?= $detail['BATAS_MAKSIMAL'] ?> Kegiatan / Semester</td>
                                <?php elseif ($rows['NOMOR'] == 7) : ?>
                                    <td><?= $detail['PROGRAM'] ?></td>
                                    <td><?= $detail['BATAS_MAKSIMAL'] ?> Mata Kuliah / Semester</td>
                                <?php elseif ($rows['NOMOR'] == 8) : ?>
                                    <td><?= $detail['JENIS_PRODUK'] ?></td>
                                    <td><?= $detail['BATAS_MAKSIMAL'] ?> Produk / Tahun</td>
                                <?php elseif ($rows['NOMOR'] == 9) : ?>
                                    <td><?= $detail['PROGRAM'] ?></td>
                                    <td><?= $detail['BATAS_MAKSIMAL'] ?> Orasi / Semester</td>
                                <?php elseif ($rows['NOMOR'] == 10) : ?>
                                    <td><?= $detail['JABATAN_PIMPINAN'] ?></td>
                                    <td><?= $detail['BATAS_MAKSIMAL'] ?> Jabatan / Semester</td>
                                <?php elseif ($rows['NOMOR'] == 11) : ?>
                                    <td><?= $detail['KATEGORI_PEMBIMBING_DOSEN'] ?></td>
                                    <td><?= $detail['BATAS_MAKSIMAL'] ?> Jabatan / Semester</td>
                                <?php elseif ($rows['NOMOR'] == 12) : ?>
                                    <td><?= $detail['KATEGORI_KEGIATAN'] ?></td>
                                    <td><?= $detail['BATAS_MAKSIMAL'] ?> Jabatan / Semester</td>
                                <?php elseif ($rows['NOMOR'] == 13) : ?>
                                    <td><?= $detail['DURASI_PENGEMBANGAN_DIRI'] ?></td>
                                <?php endif ?>
                                <?php if ($rows['NOMOR'] != 1) : ?>
                                    <td><?= $detail['ANGKA_KREDIT'] ?></td>
                                <?php endif ?>
                                <td>
                                    <button data-id="<?= $detail['NOMOR'] ?>" data-id-bidang="<?= $k + 1 ?>" class="edit-button primary-button">Edit</button>
                                </td>
                            </tr>
                            <?php $number++ ?>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $i++ ?>
<?php endforeach ?>