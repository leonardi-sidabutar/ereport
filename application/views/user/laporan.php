<div class="content-wrapper">
    <!-- batas -->
    <section class="content">
        <div class="container-fluid">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Laporan</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">User</a></li>
                                <li class="breadcrumb-item active">Laporan</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card card-outline card-primary">
                        <div class="card-header">
                            <h6><b>Data Laporan</b></h6>
                        </div>
                        <div class="card-body">
                            <?=$this->session->flashdata('message');?>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Pengerjaan</th>
                                        <th>Progress</th>
                                        <th>Tanggal</th>
                                        <th style="width:120px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach($pekerjaan as $p):?>
                                    <tr>
                                        <td><?=$no++?></td>
                                        <td><?=$p['pengerjaan']?></td>
                                        <td><span class="badge bg-warning"><?=$p['q_progress']?>%</span></td>
                                        <td><?=$p['tanggal']?></td>
                                        <td><a class="btn btn-outline-primary btn-block" fdprocessedid="gziqbi"><i
                                                    class="far fa-eye mr-2"></i><span>Detail</span></a>
                                        </td>
                                    </tr>
                                    <?php endforeach?>
                                </tbody>
                            </table>
                        </div>

                        <div class="card-footer clearfix">
                            <div class="row">
                                <div class="col-6">
                                    <a href="<?=base_url('admin/laporan_add')?>"
                                        class="btn btn-outline-success btn-block" style="width:200px">
                                        <i class="fas fa-plus mr-2"></i>
                                        <span>Input Laporan Baru</span>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <ul class="pagination pagination-sm m-0 float-right">
                                        <li class="page-item"><a class="page-link" href="#">«</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">»</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>





<!-- /.content-wrapper -->