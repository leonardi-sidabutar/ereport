<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-danger elevation-4">
    <!-- Brand Logo -->
    <a href="<?=base_url('master/index')?>" class="brand-link text-center mb-3">
        <!-- Sidebar user panel (optional) -->
        <div class="text-center">
            <img src="<?= base_url('assets') ?>/img/logo.png" class="rounded mb-2" alt="User Image"
                style="max-width:50px" />
        </div>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?=base_url('dashboard')?>" class="nav-link <?=$aktif==='home' ? 'active' : ''  ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dasboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link <?=$aktif==='datagejala' ? 'active' : ''  ?>">
                        <i class="nav-icon fas fa-th-list"></i>
                        <p>
                            Pekerjaan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link <?=$aktif==='datapasien' ? 'active' : ''  ?>">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>
                            Laporan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link <?=$aktif==='basispengetahuan' ? 'active' : ''  ?>">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Pengguna
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->

        <!-- /.sidebar -->
</aside>