<div class="angka-kredit">
    <h2>Pelaksanaan Penunjang</h2>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Komponen Kegiatan</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <button class="add-button mb-1"">Tambah Data</button>
            <?php $i = 1; $n = 14 ?>
            <?php foreach($data['penunjang'] as $row) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $row['DESKRIPSI'] ?></td>
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
                            <?php if ($rows['NOMOR'] == 14) : ?>
                                <th>Jabatan Fungsional</th>
                                <th>Batas SKS Pertama</th>
                                <th>Batas SKS Berikutnya</th>
                                <th>Angka Kredit Pertama</th>
                                <th>Angka Kredit Berikutnya</th>
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
                            </tr>
                        </thead>
                        <tbody id="detail<?= $rows['NOMOR'] ?>">
                            <?php $n = 1 ?>
                            <!-- <?php foreach($data['allAngkaKredit'][$i] as $detail) : ?>
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
                            <?php endforeach ?> -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $i++ ?>
<?php $no++ ?>
<?php endforeach ?>