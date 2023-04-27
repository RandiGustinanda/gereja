<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="container">
    <h1>Layanan</h1>
    <ul>
        <li><a href="<?= site_url('home/daftar_pembaptisan') ?>">Daftar Pembaptisan</a></li>
        <li><a href="<?= site_url('home/daftar_nikah') ?>">Daftar Nikah</a></li>
    </ul>
</div>
<?= $this->endSection() ?>