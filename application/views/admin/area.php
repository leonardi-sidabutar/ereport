<div class="content-wrapper">
    <!-- batas -->
    <section class="content">
        <div class="container-fluid">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Area</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                                <li class="breadcrumb-item active">Area</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card card-outline card-primary">
                        <div class="card-header">
                            <h6><b>Data Area</b></h6>
                        </div>
                        <div class="card-body">
                            <?=$this->session->flashdata('message');?>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Area</th>
                                        <th style="width: 40px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach($area as $a):?>
                                    <tr>
                                        <td><?=$no++?></td>
                                        <td><?=$a['area']?></td>
                                        <td><a href="<?=base_url('admin/area_delete/'.$a['id_area'])?>"
                                                class="btn btn-outline-danger btn-block"
                                                fdprocessedid="gziqbi"><span>Hapus</span></a></td>
                                    </tr>
                                    <?php endforeach?>
                                </tbody>
                            </table>
                        </div>

                        <div class="card-footer clearfix">
                            <div class="row">
                                <div class="col-6">
                                    <a href="<?=base_url('admin/area_add')?>" class="btn btn-outline-success btn-block"
                                        style="width:200px">
                                        <i class="fas fa-plus mr-2"></i>
                                        <span>Tambah Area</span>
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
