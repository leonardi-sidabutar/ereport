<div class="content-wrapper">
    <!-- batas -->
    <section class="content">
        <div class="container-fluid">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-12">
                            <div class="modal fade" id="modal-lg">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <form method="POST" action="<?=base_url('admin/pengguna_create')?>">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Tambah Data Pengguna</h4>
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
                                                                <label for="name">Nama Lengkap</label>
                                                                <input type="text" class="form-control" id="name"
                                                                    placeholder="name" name="name">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="email">Email</label>
                                                                <input type="email" class="form-control" id="email"
                                                                    placeholder="email" name="email">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="jabatan">Jabatan</label>
                                                                <input type="text" class="form-control" id="jabatan"
                                                                    placeholder="jabatan" name="jabatan">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="username">username</label>
                                                                <input type="text" class="form-control" id="username"
                                                                    placeholder="username" name="username">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="password">Password</label>
                                                                <input type="password" class="form-control"
                                                                    id="password" placeholder="password"
                                                                    name="password">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card card card-outline card-success">
                                        <div class="card-header">
                                            <h6><b>Data Pengguna</b></h6>
                                        </div>
                                        <div class="card-body">
                                            <?=$this->session->flashdata('message');?>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 10px">#</th>
                                                        <th>Nama</th>
                                                        <th>Email</th>
                                                        <th style="width: 40px">Jabatan</th>
                                                        <th style="width:40px">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no=1; foreach($pengguna as $p):?>
                                                    <tr>
                                                        <td><?=$no++?></td>
                                                        <td><?=$p['name']?></td>
                                                        <td><?=$p['email']?></td>
                                                        <td><?=$p['jabatan']?></td>
                                                        <td>
                                                            <a onclick="return confirm('Apakah anda yakin ingin menghapus data pengguna ini?')"
                                                                href="<?=base_url('admin/pengguna_delete/'.$p['id_auth'])?>"
                                                                class="btn btn-outline-danger btn-block"
                                                                fdprocessedid="gziqbi">
                                                                <i class="fas fa-trash mr-2"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach?>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="card-footer clearfix">
                                            <div class="row">
                                                <div class="col-6">
                                                    <a class="btn btn-outline-success btn-block" style="width:200px"
                                                        data-toggle="modal" data-target="#modal-lg">
                                                        <i class="fas fa-plus mr-2"></i>
                                                        <span>Tambah Pengguna</span>
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