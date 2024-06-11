<div class="content-wrapper">
    <!-- batas -->
    <section class="content">
        <div class="container-fluid">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Tambah Pekerjaan</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                                <li class="breadcrumb-item active">Tambah Pekerjaan</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Form Tambah Pekerjaan</h3>
                        </div>
                        <form method="POST" action="<?=base_url('admin/pekerjaan_create')?>">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Pilih Area</label>
                                            <select class="form-control" name="area">
                                                <option value="">-- Pilih Area --</option>
                                                <?php foreach($area as $a) :?>
                                                <option value="<?=$a['id_area']?>"><?=$a['area']?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Uraian Pekerjaan</label>
                                            <select class="form-control" name="uraian_pekerjaan">
                                                <option value="">-- Pilih Uraian Pekerjaan --</option>
                                                <option value="PEKERJAAN BONGKARAN DAN GALIAN">PEKERJAAN BONGKARAN DAN
                                                    GALIAN</option>
                                                <option value="PEKERJAAN PEMASANGAN">PEKERJAAN PEMASANGAN</option>
                                                <option value="PEKERJAAN KHUSUS">PEKERJAAN KHUSUS</option>
                                                <option value="PEKERJAAN PERBAIKAN">PEKERJAAN PERBAIKAN</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="pekerjaan">Pekerjaan</label>
                                            <input type="text" class="form-control" id="pekerjaan"
                                                placeholder="Pekerjaan" name="pekerjaan">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="plan">Quantity Plan</label>
                                            <input type="number" class="form-control" id="plan"
                                                placeholder="Quantity Plan" name="plan" step="0.001">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="satuan">Satuan</label>
                                            <input type="text" class="form-control" id="satuan" placeholder="M'"
                                                name="satuan">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="volume">Volume</label>
                                            <input type="number" class="form-control" id="volume" placeholder="volume"
                                                step="0.001" name="volume">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="price">Harga Satuan</label>
                                            <input type="number" class="form-control" id="price" placeholder=""
                                                name="price" step="0.001">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="datestart">Tanggal Mulai</label>
                                            <input type="date" class="form-control" id="datestart" name="datestart">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="dateend">Tanggal Selesai</label>
                                            <input type="date" class="form-control" id="dateend" name="dateend">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Tambah Pekerjaan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>