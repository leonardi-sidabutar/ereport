<div class="content-wrapper">
    <!-- batas -->
    <section class="content">
        <div class="container-fluid">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Input Laporan</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">User</a></li>
                                <li class="breadcrumb-item active">Input Laporan</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Form Input Laporan</h3>
                        </div>
                        <form method="POST" action="<?=base_url('admin/laporan_create')?>">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Pilih Pekerjaan</label>
                                            <select class="form-control" name="pekerjaan">
                                                <option value="">-- Pilih Pekerjaan --</option>
                                                <?php foreach($pekerjaan as $a) :?>
                                                <option value="<?=$a['id']?>"
                                                    <?= $laporan_id==$a['id'] ? 'selected' : ''?>>
                                                    <?=$a['task']?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="pengerjaan">Pengerjaan</label>
                                            <input type="text" class="form-control" id="pengerjaan"
                                                placeholder="Pengerjaan" name="pengerjaan">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="tebal">Tebal</label>
                                            <input type="number" class="form-control" id="tebal"
                                                placeholder="Tebal (Kedalaman) : cm" name="tebal">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="diameter">Diameter</label>
                                            <input type="number" class="form-control" id="diameter"
                                                placeholder="Diameter : mm" name="diameter">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="progress">Quantity Progress</label>
                                            <input type="number" class="form-control" id="progress"
                                                placeholder="Quantity Progress" name="progress">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="date">Tanggal</label>
                                            <input type="date" class="form-control" id="date" name="date">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>