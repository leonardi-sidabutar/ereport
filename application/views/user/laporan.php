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
                                        <th style="text-align:center;width: 10px">#</th>
                                        <th style="text-align:center">Pengerjaan</th>
                                        <th style="text-align:center;width:20px">Progress</th>
                                        <th style="text-align:center;width:100px">Tanggal</th>
                                        <th style="text-align:center;width:20px">Approve</th>
                                        <th style="text-align:center;width:120px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach($report as $p):?>
                                    <tr>
                                        <td><?=$no++?></td>
                                        <td><a href="#" data-toggle="modal"
                                                data-target="#modal-lg<?=$p->id?>"><?=$p->pengerjaan?></a>
                                        </td>
                                        <td style="text-align:center">
                                            <span class="badge bg-info"><?=$p->q_progress?></span>
                                        </td>
                                        <td><?=$p->tanggal?></td>
                                        <td style="text-align:center">
                                            <?php
												if($p->approve==1){
													echo '<span class="badge bg-success">Sudah Approve</span>';
												}else{
													echo '<span class="badge bg-warning">Belum Approve</span>';
												}
											?>
                                        </td>
                                        <td style="text-align:center">
                                            <?php if($this->session->userdata('role')==='User'):?>
                                            <?php
													if($p->approve==1):
												?>
                                            <a href="<?=base_url('admin/fpdf/'.$p->id_area)?>"
                                                class="btn btn-outline-primary btn-block" fdprocessedid="gziqbi">
                                                <i class="fas fa-file-alt mr-2"></i>
                                                <span>PDF</span>
                                            </a>
                                            <?php endif;?>
                                            <?php endif;?>
                                            <?php if($this->session->userdata('role')==='Admin'):?>
                                            <a onclick="return confirm('Apakah anda yakin ingin menghapus data laporan ini?')"
                                                href="<?=base_url('admin/laporan_del/'.$p->id)?>"
                                                class="btn btn-outline-danger btn-block" fdprocessedid="gziqbi">
                                                <i class="fas fa-trash mr-2"></i>
                                                <span>Hapus</span>
                                            </a>
                                            <?php endif;?>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="modal-lg<?=$p->id?>">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Detail Data Laporan</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label>Pekerjaan</label>
                                                                    <textarea disabled class="form-control"
                                                                        id="exampleFormControlTextarea1"
                                                                        rows="3"><?=$p->task?></textarea>

                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="pengerjaan">Pengerjaan</label>
                                                                    <input disabled type="text" class="form-control"
                                                                        id="pengerjaan" placeholder="Pengerjaan"
                                                                        name="pengerjaan" value="<?=$p->pengerjaan?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="tebal">Tebal</label>
                                                                    <input disabled type="number" class="form-control"
                                                                        id="tebal" placeholder="Tebal (Kedalaman) : cm"
                                                                        name="tebal" value="<?=$p->tebal?>" />
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="diameter">Diameter</label>
                                                                    <input disabled type="number" class="form-control"
                                                                        id="diameter" placeholder="Diameter : mm"
                                                                        name="diameter" value="<?=$p->diameter?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="progress">Quantity Progress</label>
                                                                    <input disabled type="number" class="form-control"
                                                                        id="progress" placeholder="Quantity Progress"
                                                                        name="progress" value="<?=$p->q_progress?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="date">Tanggal</label>
                                                                    <input disabled type="date" class="form-control"
                                                                        id="date" name="date" value="<?=$p->tanggal?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="date">Status</label>
                                                                    <?php
																			if($p->approve == 0){
																				$status = 'Belum Approve';
																			}else{
																				$status = 'Sudah Approve';
																			}
																		?>
                                                                    <input disabled type="text"
                                                                        class="form-control <?= $p->approve == 0 ?'is-warning' : 'is-valid' ?>"
                                                                        id="date" name="date" value="<?=$status?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                    <?php if($this->session->userdata('role')==='Admin'):?>
                                                    <?php if($p->approve == 0):?>
                                                    <a href="<?=base_url('admin/approve/'.$p->id)?>"
                                                        onclick="return confirm('Apakah Anda Yakin Ingin Approve Data Ini?')">
                                                        <button type="submit" class="btn btn-success">
                                                            Approve Sekarang
                                                        </button>
                                                    </a>
                                                    <?php endif ;?>
                                                    <?php endif ;?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach?>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer clearfix">
                            <div class="row">
                                <div class="col-6">
                                    <?php
									$role = $this->session->userdata('role');
									if($role === 'User') :
									?>
                                    <a href="<?=base_url('admin/laporan_add')?>"
                                        class="btn btn-outline-success btn-block" style="width:200px">
                                        <i class="fas fa-plus mr-2"></i>
                                        <span>Input Laporan Baru</span>
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