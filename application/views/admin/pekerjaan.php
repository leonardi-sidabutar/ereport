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
                                        <th>Area</th>
                                        <th style="text-align:center;width: 40px">Progress</th>
                                        <th style="width:40px">Print</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach($jobs as $p):?>
                                    <tr>
                                        <td><?=$no++?></td>
                                        <td><?=$p->task?></td>
                                        <td><?=$p->q_plan?></td>
                                        <td><?=$p->area?></td>
                                        <td style="text-align:center">
                                            <span class="badge
											<?php
												if($p->progress_percentage > 80){
													echo 'bg-success';
												}else if($p->progress_percentage > 40){
													echo 'bg-info';
												}else if($p->progress_percentage > 0){
													echo 'bg-warning';
												}else{
													echo 'bg-danger';
												}
											?>
											">
                                                <?=number_format($p->progress_percentage,1)?>%
                                            </span>
                                        </td>
                                        <td>
                                            <?php if($this->session->userdata('role') === 'Admin'):?>
                                            <a href="<?=base_url('admin/fpdf/'.$p->id_area)?>"
                                                class="btn btn-outline-primary btn-block" fdprocessedid="gziqbi"
                                                style="width:45px!important"><i class="fas fa-file-alt"></i></a>
                                            <?php endif;?>
                                            <?php if($this->session->userdata('role') === 'User'):?>
                                            <a href="<?=base_url('admin/laporan_id/'.$p->id)?>"
                                                class="btn btn-outline-info btn-block" fdprocessedid="gziqbi"><i
                                                    class="fas fa-info-circle mr-2"></i><span>Lapor</span></a>
                                            <?php endif;?>
                                        </td>
                                    </tr>
                                    <?php endforeach?>
                                </tbody>
                            </table>
                        </div>

                        <div class="card-footer clearfix">
                            <div class="row">
                                <div class="col-6">
                                    <?php  if( $this->session->userdata('role')==='Admin'):?>
                                    <a href="<?=base_url('admin/pekerjaan_add')?>"
                                        class="btn btn-outline-success btn-block" style="width:200px">
                                        <i class="fas fa-plus mr-2"></i>
                                        <span>Tambah Pekerjaan</span>
                                    </a>
                                    <?php endif;?>
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