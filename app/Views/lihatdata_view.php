<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center text-success mt-4"> <?= $h1;?> </h1>
        </div>
        <div class="col-sm-12 mt-5">
            <a href="" class="btn btn-primary float-right">+ Tambah Mahasiswa</a>
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
    $(function () {
        $('#tabel-lihatdata').DataTable({
            searching : false,
            info : false,
            paging : false,
            ajax : {
                url: "<?= base_url(); ?>/crud/getdata",
                type: "POST",
                success : function (data) {
                    var html = '';
                    var no=1;
                    var aksi = '<a href="javascript:void(0)">Edit Data</a>'
                    for (var i=0;i<data.length;i++){
                        html+= '<tr>'+
                                '<td>'+no+++'</td>'+
                                '<td>'+data[i].nim+'</td>'+
                                '<td>'+data[i].nama+'</td>'+
                                '<td>'+aksi+'</td>'
                    }
                    $('#bodytable-data').html(html);
                }
            }
        });
    });
</script>
