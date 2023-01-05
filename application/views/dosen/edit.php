<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Dosen</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('dosen'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <?php
                    //create form
                    $attributes = array('id' => 'FrmEditDosen', 'method' => "post", "autocomplete" => "off");
                    echo form_open('', $attributes);
                    ?>
                    <div class="form-group row">
                        <label for="kode_dosen" class="col-sm-2 col-form-label">Kode</label>
                        <div class="col-sm-10">
                            <input type="hidden" class="form-control" id="idDsn" name="idDsn" value=" <?= $data_dosen->idDsn; ?>">
                            <input type="text" class="form-control" id="kode_dosen" name="kode_dosen" value=" <?= $data_dosen->kode_dosen; ?>">
                            <small class="text-danger">
                                <?php echo form_error('kode_dosen') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_dosen" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_dosen" name="nama_dosen" value=" <?= $data_dosen->nama_dosen; ?>">
                            <small class="text-danger">
                                <?php echo form_error('nama_dosen') ?>
                            </small>
                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="col-sm-10 offset-md-2">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
