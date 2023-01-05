<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Mata Kuliah</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('matkul'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <?php
                    //create form
                    $attributes = array('id' => 'FrmEditMatkul', 'method' => "post", "autocomplete" => "off");
                    echo form_open('', $attributes);
                    ?>
                    <div class="form-group row">
                        <label for="kode_matkul" class="col-sm-2 col-form-label">Kode</label>
                        <div class="col-sm-10">
                            <input type="hidden" class="form-control" id="idMktl" name="idMktl" value=" <?= $data_matkul->idMktl; ?>">
                            <input type="text" class="form-control" id="kode_matkul" name="kode_matkul" value=" <?= $data_matkul->kode_matkul; ?>">
                            <small class="text-danger">
                                <?php echo form_error('kode_matkul') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_matkul" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_matkul" name="nama_matkul" value=" <?= $data_matkul->nama_matkul; ?>">
                            <small class="text-danger">
                                <?php echo form_error('nama_matkul') ?>
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
