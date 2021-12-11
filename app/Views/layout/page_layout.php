<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IOT Devices</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.0.1/tailwind.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <div class="hero">
        <?= $this->include('/layout/navbar') ?>
        <div class="main-container">
            <?= $this->renderSection('content') ?>
        </div>
    </div>
</body>

</html>