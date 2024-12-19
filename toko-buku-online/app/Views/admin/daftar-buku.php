<?= $this->extend('admin/template');?>

<?= $this->section('main');?>
<h2 class="mb-5">Daftar Buku</h2>
<div class="">
    <a href="<?= base_url('admin/daftar-buku/tambah')?>" class="btn 
    btn-primary">tambah buku</a>
</div>
<div class="mb-5">
    <table class="table table-stripped">
        <head>
            <tr>
                <th scope="col">#</th>
                <th scope="col">judul buku</th>
                <th scope="col">pengarang</th>
                <th scope="col">penerbit</th>
                <th scope="col">tahun</th>
                <th scope="col">cover</th>
                <th scope="col">harga</th>
                <th scope="col">aksi</th>
            </tr>
            <thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Our memories in this beach</td>
                        <td>Anisa Ranti</td>
                        <td>Gramedia Pustaka Utama</td>
                        <td>2024</td>
                        <td>
                            <img src="<?= base_url('images/buku1.jpg')?>" alt="" style="width: 150px
                            ; height:auto;">
                        </td>
                        <td>
                            Rp.80.000.000
                        </td>
                        <td>
                            <a href="<?= base_url('admin/daftar-buku/edit')?>" class="btn
                            btn-success">edit</a>
                            <a href="<?= base_url('admin/daftar-buku/hapus')?>" class="btn
                            btn-danger">hapus</a>
                        </td>
                    </tr>
                </tbody>
            </thead>
        </head>
    </table>
</div>

<?= $this->endSection();?>