<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<div class="max-w-4xl bg-white w-4/5 rounded-lg shadow-xl text-black">
    <div class="p-4 border-b">
        <h2 class="text-2xl ">
            Detail Devices
        </h2>
    </div>
    <div>
        <div class="flex md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
            <div class="w-1/2">
                <p class="text-gray-600">
                    Device Name
                </p>
                <p>
                    <?= $data['device']['device_name'] ?>
                </p>
            </div>
            <div>
                <p class="text-gray-600">
                    Brand
                </p>
                <p>
                    <?= $data['device']['device_brand'] ?>
                </p>
            </div>
        </div>
        <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
            <p class="text-gray-600">
                Quantity
            </p>
            <p>
                <?= $data['device']['device_quantity'] ?>
            </p>
        </div>
        <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
            <p class="text-gray-600">
                Origin
            </p>
            <p>
                <?= $data['deviceDetail']['device_origin'] ?>
            </p>
        </div>
        <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
            <p class="text-gray-600">
                Defect
            </p>
            <p>
                <?php if ($data['deviceDetail']['device_defect']) : ?>
                    <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                        <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                        <span class="relative">Good</span>
                    </span>
                <?php else : ?>
                    <span class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
                        <span aria-hidden class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                        <span class="relative">Defected</span>
                    </span>
                <?php endif; ?>
            </p>
        </div>
    </div>
</div>
<?= $this->endSection('content') ?>