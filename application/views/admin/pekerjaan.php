<div class="content-wrapper">
    <!-- batas -->
    <section class="content">
        <div class="container-fluid">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Pekerjaan</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                                <li class="breadcrumb-item active">Pekerjaan</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card card-outline card-primary">
                        <div class="card-header">
                            <h6><b>Data Pekerjaan</b></h6>
                        </div>
                        <div class="card-body">
                            <?=$this->session->flashdata('message');?>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Pekerjaan</th>
                                        <th>Perencanaan</th>
                                        <th>Progress</th>
                                        <th style="width: 40px">Status</th>
                                        <th>Tanggal Mulai</th>
                                        <th>Tanggal Selesai</th>
                                        <th style="width:120px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach($pekerjaan as $p):?>
                                    <tr>
                                        <td><?=$no++?></td>
                                        <td><?=$p['task']?></td>
                                        <td><?=$p['q_plan']?></td>
                                        <td><?=$p['id_area']?></td>
                                        <td><span class="badge bg-warning">55%</span></td>
                                        <td><?=$p['date_start']?></td>
                                        <td><?=$p['date_end']?></td>
                                        <td><a onclick="alert('Anda Akan Menghapus Data Ini!')"
                                                class="btn btn-outline-primary btn-block" fdprocessedid="gziqbi"><i
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
                                    <a href="<?=base_url('admin/pekerjaan_add')?>"
                                        class="btn btn-outline-success btn-block" style="width:200px">
                                        <i class="fas fa-plus mr-2"></i>
                                        <span>Tambah Pekerjaan</span>
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