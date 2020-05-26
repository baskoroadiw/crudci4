<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center text-success mt-4"> <?= $h1;?> </h1>
        </div>
        <div class="col-sm-12 mt-5">
            <a href="" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-tambah">+ Tambah Mahasiswa</a>
        </div>
        <div class="col-sm-12 mt-3">
            <table class="table table-bordered table-striped table-dark table-hover mt-5" id="tabel-lihatdata">
                <thead class="text-center">
                <?php $no = 1; ?>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody class="text-center" id="bodytable-data"></tbody>
            </table>
        </div>
    </div>
</div>
<?php echo view("js_core"); ?>
<script>
    var base_url = '<?php echo base_url(); ?>';

    $(function () {
        initDatatable();
        addData();
        editData();
    });
</script>
<?= view("modal_tambah")?>
<?= view("modal_edit")?>
