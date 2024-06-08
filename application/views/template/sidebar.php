<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-danger elevation-4">
    <!-- Brand Logo -->
    <a href="<?=base_url('master/index')?>" class="brand-link text-center mb-3">
        <!-- Sidebar user panel (optional) -->
        <div class="text-center">
            <img src="<?= base_url('assets') ?>/img/logo.png" class="rounded mb-2" alt="User Image"
                style="max-width:30px" />
        </div>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?=base_url('admin/index')?>" class="nav-link <?=$aktif==='home' ? 'active' : ''  ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dasboard
                        </p>
                    </a>
                </li>
                <?php
				$role = $this->session->userdata('role');
				if($role === 'Admin'):
				?>
                <li
                    class="nav-item <?=$aktif==='pekerjaan'||$aktif==='pekerjaan_add' ? 'menu-is-opening menu-open' : ''?>">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th-list"></i>
                        <p>
                            Pekerjaan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview"
                        style="display: <?=$aktif==='pekerjaan'||$aktif==='pekerjaan_add' ? 'block' : 'none'?>;">
                        <li class="nav-item">
                            <a href="<?=base_url('admin/pekerjaan')?>"
                                class="nav-link <?=$aktif==='pekerjaan' ? 'active' : ''  ?>">
                                <i class="fas fa-caret-right nav-icon"></i>
                                <i class="fas "></i>
                                <p>Data</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=base_url('admin/pekerjaan_add')?>"
                                class="nav-link <?=$aktif==='pekerjaan_add' ? 'active' : ''  ?>">
                                <i class="fas fa-caret-right nav-icon"></i>
                                <i class="fas "></i>
                                <p>Tambah</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <?php endif;?>
                <li class="nav-item <?=$aktif==='area' || $aktif==='area_add' ? 'menu-is-opening menu-open' : ''?>">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-map-marked-alt"></i>
                        <p>
                            Area
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview"
                        style="display:<?=$aktif==='area' || $aktif==='area_add' ? 'block' : 'none'?>;">
                        <li class="nav-item">
                            <a href="<?=base_url('admin/area')?>"
                                class="nav-link <?=$aktif==='area' ? 'active' : ''  ?>">
                                <i class="fas fa-caret-right nav-icon"></i>
                                <i class="fas "></i>
                                <p>Data</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=base_url('admin/area_add')?>"
                                class="nav-link <?=$aktif==='area_add' ? 'active' : ''  ?>">
                                <i class=" fas fa-caret-right nav-icon"></i>
                                <i class="fas "></i>
                                <p>Tambah</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li
                    class="nav-item <?=$aktif==='laporan' || $aktif==='laporan_add' ? 'menu-is-opening menu-open' : ''?>">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>
                            Laporan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview"
                        style="display:<?=$aktif==='laporan' || $aktif==='laporan_add' ?  'block' : 'none'?>;">
                        <li class="nav-item">
                            <a href="<?=base_url('admin/laporan')?>"
                                class="nav-link <?=$aktif==='laporan' ? 'active' : ''  ?>">
                                <i class="fas fa-caret-right nav-icon"></i>
                                <i class="fas "></i>
                                <p>Data</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=base_url('admin/laporan_add')?>"
                                class="nav-link <?=$aktif==='laporan_add' ? 'active' : ''  ?>">
                                <i class=" fas fa-caret-right nav-icon"></i>
                                <i class="fas "></i>
                                <p>Tambah</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
        <!-- /.sidebar -->
</aside>