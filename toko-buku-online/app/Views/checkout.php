<?= $this->extend('template') ?>

<?= $this->section('main') ?>

<div class="container">
    <h2>REVIEW ORDER</h2>
    <hr />
    <h5>BUMI MANUSIA</h5>
    <h5>Rp85,000</h5>

    <h2 class="mt-3">Alamat Pengiriman</h2>
    <hr />
    <h5>Jl. Muaro Jambi - Muaro Bulian Km 16, Sungai Duren.</h5>

    <h2 class="mt-3">METODE BAYAR</h2>
    <hr />
    <h5>Transfer Bank</h5>
    <h5>BRI Dian Agus Saputra</h5>
    <h5>Rek. 9030928971739</h5>

    <div class="mt-5">
    <form action="<?= base_url('submit') ?>" method="POST">
            <button type="submit" class="btn btn-succes">Submit Order</button>
    </form>
        <a href="<?= base_url('submit') ?>"class="btn btn-success">Submit Order</a>
    </div>
</div>
<?= $this->endSection()?>