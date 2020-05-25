<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center text-success mt-4"> <?= $h1;?> </h1>
        </div>
        <div class="col-sm-12 mt-5">
            <a href="/tambahdata" class="btn btn-primary float-right">+ Tambah Mahasiswa</a>
            <table class="table table-bordered table-striped table-dark table-hover mt-5">
                <thead class="text-center">
                <?php $no = 1; ?>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                <?php foreach ($data_mhs as $row): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row->nim; ?></td>
                        <td><?= $row->nama; ?></td>
                        <td><a href="/editdata/<?php echo $row->nim ?>">Edit Data</a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
