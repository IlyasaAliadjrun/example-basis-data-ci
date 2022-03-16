<h1>Hello Mahasiswa</h1>
<a href="<?php echo site_url('mahasiswa/add') ?>" class="btn btn-primary">Add Mahasiswa</a>

<table class="table">
    <thead>
        <tr>
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
            <th scope="col">Semester</th>
            <th scope="col">IPK</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($mahasiswa as $mhs) { ?>
            <tr>
                <td><?= $mhs->nim ?></td>
                <td><?= $mhs->nama ?></td>
                <td><?= $mhs->semester ?></td>
                <td><?= $mhs->ipk ?></td>
                <td>
                    <a href="<?php echo site_url('mahasiswa/edit/' . $mhs->id); ?>" class="btn btn-secondary">Edit</a>
                    <a href="<?php echo site_url('mahasiswa/delete/' . $mhs->id); ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>