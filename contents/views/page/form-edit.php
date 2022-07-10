<div id="edit-modal2" class="edit-modal">
    <div class="modal-background">
        <div class="modal">
        <form action="<?= base_url; ?>/EditDataKumPendidikan/editData2" method="POST" class="data_dokumen">
            <span class="button-close">&times;</span>
            <h2 class="title">Edit Data <?= $nindy['NAMA'] ?></h2>
            
            <?php if ($nindy['NOMOR'] != 10) : ?>
            <div class="input">
                <input type="text" class="input-field edit-program<?= $k ?>" id="edit-program" name="program" value="" required/>
                <label class="input-label">Program</label>
            </div>
            <?php endif ?>
            <?php if ($nindy['NOMOR'] == 1) : ?>
                <div class="input">
                    <input type="text" class="input-field edit-mata-kuliah<?= $k ?>" name="mata_kuliah" value="" required/>
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
            <?php elseif ($nindy['NOMOR'] == 3) : ?>
                <div class="input">
                    <input type="text" class="input-field" name="nama_perusahaan" value="" required/>
                    <label class="input-label" for="nama_perusahaan">Nama Perusahaan</label>
                </div>
            <?php elseif ($nindy['NOMOR'] == 4) : ?>
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
            <?php elseif ($nindy['NOMOR'] == 5) : ?>
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
            <?php elseif ($nindy['NOMOR'] == 7) : ?>
                <div class="input">
                    <input type="text" name="nama_produk" class="input-field" value="" required/>
                    <label class="input-label" for="nama_produk">Nama Produk</label>
                </div>
            <?php elseif ($nindy['NOMOR'] == 8) : ?>
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
            <?php elseif ($nindy['NOMOR'] == 9) : ?>
                <div class="input">
                    <input type="text" name="nama_orasi_ilmiah" class="input-field" value="" required/>
                    <label class="input-label" for="nama_orasi_ilmiah">Nama Orasi Ilmiah</label>
                </div>
            <?php elseif ($nindy['NOMOR'] == 10) : ?>
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
            <?php elseif ($nindy['NOMOR'] == 11) : ?>
                <div class="input">
                    <select name="kategori_pembimbing_dosen" id="kategori_pembimbing_dosen" class="input-field" value="" required/>
                        <option value="Pencangkokan">Pembimbing Pencangkokan</option>
                        <option value="Reguler">Reguler</option>
                    </select>
                    <label class="input-label" for="kategori_pembimbing_dosen">Kategori Pembimbing</label>
                </div>
            <?php elseif ($nindy['NOMOR'] == 12) : ?>
                <div class="input">
                    <select name="kategori_kegiatan" id="kategori_kegiatan" class="input-field" value="" required/>
                        <option value="Detasering">Detasering</option>
                        <option value="Pencangkokan">Pencangkokan</option>
                    </select>
                    <label class="input-label" for="kategori_kegiatan">Kategori Kegiatan</label>
                </div>
            <?php elseif ($nindy['NOMOR'] == 13) : ?>
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
            </form> 
        </div>
    </div>
</div>

<!--  -->
<!--  -->
<!--  -->
<div id="edit-modal<?php $nindy ?>" class="edit-modal">
    <div class="modal-background">
        <div class="modal">
        <form action="<?= base_url; ?>/EditDataKumPendidikan/editData<?php $nindy ?>" method="POST" class="form-edit-dokumen">
            <span class="button-close">&times;</span>
            <h2 class="title">Edit Data Membimbing Kerja Praktik</h2>
            <input type="text" class="input-field edit-nomor<?php $nindy ?>" name="nomor" hidden required/>
            <div class="input">
                <input type="text" class="input-field edit-program<?php $nindy ?>" id="edit-program<?php $nindy ?>" name="program" value="" required/>
                <label class="input-label">Program</label>
            </div>
            <?php if ($nindy['NOMOR'] == 3) : ?>
                <div class="input">
                    <input type="text" class="input-field edit-nama_perusahaan3" name="nama_perusahaan" value="" required/>
                    <label class="input-label" for="nama_perusahaan">Nama Perusahaan</label>
                </div>
            <?php elseif ($nindy['NOMOR'] == 4) : ?>
                <div class="input">
                    <select name="kategori_pembimbing" id="kategori_pembimbing" class="input-field edit-kategori_pembimbing3">
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
            <?php elseif ($nindy['NOMOR'] == 5) : ?>
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
            <?php elseif ($nindy['NOMOR'] == 7) : ?>
                <div class="input">
                    <input type="text" name="nama_produk" class="input-field" value="" required/>
                    <label class="input-label" for="nama_produk">Nama Produk</label>
                </div>
            <?php elseif ($nindy['NOMOR'] == 8) : ?>
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
            <?php elseif ($nindy['NOMOR'] == 9) : ?>
                <div class="input">
                    <input type="text" name="nama_orasi_ilmiah" class="input-field" value="" required/>
                    <label class="input-label" for="nama_orasi_ilmiah">Nama Orasi Ilmiah</label>
                </div>
            <?php elseif ($nindy['NOMOR'] == 10) : ?>
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
            <?php elseif ($nindy['NOMOR'] == 11) : ?>
                <div class="input">
                    <select name="kategori_pembimbing_dosen" id="kategori_pembimbing_dosen" class="input-field" value="" required/>
                        <option value="Pencangkokan">Pembimbing Pencangkokan</option>
                        <option value="Reguler">Reguler</option>
                    </select>
                    <label class="input-label" for="kategori_pembimbing_dosen">Kategori Pembimbing</label>
                </div>
            <?php elseif ($nindy['NOMOR'] == 12) : ?>
                <div class="input">
                    <select name="kategori_kegiatan" id="kategori_kegiatan" class="input-field" value="" required/>
                        <option value="Detasering">Detasering</option>
                        <option value="Pencangkokan">Pencangkokan</option>
                    </select>
                    <label class="input-label" for="kategori_kegiatan">Kategori Kegiatan</label>
                </div>
            <?php elseif ($nindy['NOMOR'] == 13) : ?>
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
                    <select name="tahun_ajaran" id="tahun_ajaran" class="input-field edit-tahun_ajaran<?php $nindy ?>">
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
                    <select name="semester" id="semester" class="input-field edit-semester<?php $nindy ?>">
                        <option value="Gasal">Gasal</option>
                        <option value="Genap">Genap</option>
                    </select>
                    <label for="semester" class="input-label">Semester</label>
                </div>
            
                <div class="input">
                    <input type="text" class="input-field edit-tempat<?php $nindy ?>" name="tempat" value="" required/>
                    <label class="input-label">Tempat</label>
                </div>
                <div class="input">
                    <input type="date" class="input-field edit-tanggal<?php $nindy ?>" id="tanggal" name="tanggal" value="" required/>
                    <label class="input-label" for="tanggal">Tanggal</label><br>
                </div>
                <div class="input">
                    <input type="text" class="input-field edit-keterangan<?php $nindy ?>" name="keterangan" value="">
                    <label class="input-label">Keterangan</label>
                </div> 
                <div class="action">
                    <button type="submit" class="action-button">Edit</button>
                </div>
            </form> 
        </div>
    </div>
</div>