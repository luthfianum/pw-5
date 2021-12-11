<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<table class="w-4/5 leading-normal mt-8">
    <thead>
        <tr>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                No
            </th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                Name
            </th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                Brand
            </th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                Quantity
            </th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                Status
            </th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                Action
            </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $key => $device) : ?>
            <tr>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap text-center"><?= $key + 1 ?></p>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap"><?= $device['device_name'] ?></p>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap"><?= $device['device_brand'] ?></p>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap"><?= $device['device_quantity'] ?></p>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <?php if ($device['device_status']) : ?>
                        <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                            <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                            <span class="relative">On</span>
                        </span>
                    <?php else : ?>
                        <span class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
                            <span aria-hidden class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                            <span class="relative">Off</span>
                        </span>
                    <?php endif; ?>
                </td>
                <td class="px-5 py-5 bg-white border-gray-200 bg-white text-sm flex justify-center">
                    <a class="bg-blue-500 text-white px-6 py-2 rounded mx-3 hover:bg-blue-600 transition duration-200 each-in-out text-center" href="<?= base_url(); ?>/device/<?= $device['id'] ?>">Details</a>
                    <a class="bg-blue-500 text-white px-6 py-2 rounded mx-3 hover:bg-blue-600 transition duration-200 each-in-out text-center" onclick="toggleDevice(<?= $device['id'] ?>)">Switch</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<script>
    function toggleDevice(id) {
        url = `<?php base_url(); ?>/device/${id}`
        $.ajax({
            url,
            type: "PUT",
        })
    }
</script>
<?= $this->endSection('content') ?>