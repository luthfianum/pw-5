<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<div class="img-container">
    <img src="<?= base_url() ?>/hero.png" style="width: 400px;">
</div>
<div class="text-container">
    <div>
        <h1>IOT <br> Devices</h1>
        <p>Controll of all IOT Device in this company in one web.</p>
        <a href="">Device Collection</a>
    </div>
</div>
<?= $this->endSection('content') ?>