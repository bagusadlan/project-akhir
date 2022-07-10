<div class="page-sidebar">
            <div class="logo-box">
                <a href="#" id="sidebar-close">
                    <i class="material-icons">close</i>
                </a> 
            </div>
            <div class="page-sidebar-inner slimscroll">
                <ul class="accordion-menu">
                    <li class="sidebar-title">
                       Hi, <?= $_SESSION['name'] ?>
                    </li>
                    <li class="<?php if($data['halaman']=='admin'){echo 'active-page';}?> active-title">
                        <a href="<?= base_url; ?>/Admin" class="active">
                            <i class="material-icons">bar_chart</i>
                            Statistik IDUKA
                        </a>
                    </li>
                    <li class=" <?php if($data['halaman']=='kegiatan'){echo 'active-page';}?> active-title">
                        <a href="<?= base_url; ?>/AdminDetailKegiatan" class="active">
                            <i class="material-icons-outlined">
                                work_outline
                            </i>
                            Kegiatan IDUKA
                        </a>
                    </li>
                    <li class="<?php if($data['halaman']=='prodi'){echo 'active-page';}?> active-title">
                        <a href="<?= base_url; ?>/AdminKerjasamaProdi" class="active">
                            <i class="material-icons-outlined">
                                business_center
                            </i>
                            Kerjasama Prodi 
                        </a>
                    </li>
                   
                    <li class="<?php if($data['halaman']=='faktur'){echo 'active-page';}?> active-title">
                        <a href="<?= base_url; ?>/AdminFakturKerjasama" class="active">
                            <i class="material-icons-outlined">
                            description
                            </i>
                            Faktur Kerjasama 
                        </a>
                    </li>
                    <li>
                        <a href="#"><i class="material-icons-outlined">folder</i>Master<i class="material-icons has-sub-menu">add</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="<?= base_url; ?>/AdminArea">Area</a>
                                </li>
                                <li>
                                    <a href="<?= base_url; ?>/AdminJenis">Jenis Kerjasama</a>
                                </li>
                                <li>
                                    <a href="<?= base_url; ?>/AdminBentuk">Bentuk Kerjasama</a>
                                </li>
                                <li>
                                    <a href="<?= base_url; ?>/AdminKegiatan">Kegiatan</a>
                                </li>
                                <li>
                                    <a href="<?= base_url; ?>/AdminBotTelegram">User Telegram</a>
                                </li>
                            </ul>
                    </li>
                    
                    <br><br><br><br>
                    <li class="text-logout">
                        <a href="<?= base_url; ?>/Logout" class="active">
                            <i class="material-icons-outlined">
                            logout
                            </i>
                            Logout 
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>