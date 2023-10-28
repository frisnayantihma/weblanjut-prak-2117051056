<?= $this->extend('layouts/app')?>

<?= $this->section('content')?>
<table>
    <thead>
        <tr>
            <th>NOMOR</th>
            <th>NAMA</th>
            <th>NPM</th>
            <th>KELAS</th>
            <th>AKSI</th>
        </tr>
    </thead>
    <tbody>
    <form action="<?= base_url('/user/create') ?>">
    <br>
    <center><button type=submit class="btn btn-primary">Tambah Data</button></form></center>
    <br>
    <br>
        <?php
        $no = 1;
        foreach ($users as $user){
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $user['nama'] ?></td>
            <td><?= $user['npm'] ?></td>
            <td><?= $user['nama_kelas'] ?></td>
            <td>
                <form action="<?= base_url('user/' . $user['id']) ?>" method="get">
                <button type=submit class="btn btn-primary">Detail</button></form>
                <form action="<?= base_url('user/' . $user['id'] . '/edit') ?>" method="get">
                <button type=submit class="btn btn-primary">Edit</button></form>
                <form action="<?= base_url('user/' . $user['id']) ?>" method="post">
                <input type="hidden" name="_method" value="DELETE">
                <?= csrf_field() ?>
                <button type=submit class="btn btn-primary">Hapus</button></form>
            </td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<?= $this->endSection()?>