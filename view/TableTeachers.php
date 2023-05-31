<?php
    $title = "List of Teachers";

    ob_start();
?>

<a href="index.php?action=create" class="bg-white px-4 py-2 rounded-xl font-bold">
    Add
</a>
<table class="table text-gray-400 border-separate space-y-6 text-sm">
    <thead class="bg-gray-800 text-gray-500">
        <tr>
            <th class="p-3 text-left">id</th>
            <th class="p-3 text-left">Nom</th>
            <th class="p-3 text-left">Prénom</th>
            <th class="p-3 text-left">Age</th>
            <th class="p-3 text-left">Login</th>
            <th class="p-3 text-left">Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($results as $teacher): ?>
        <tr class="bg-gray-800">
            <td class="p-3">
                <div class="flex align-items-center items-center">
                    <img class="rounded-full h-12 w-12  object-cover" src="https://images.unsplash.com/photo-1613588718956-c2e80305bf61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80" alt="unsplash image">
                    <div class="ml-3">
                        <div class=""><?= $teacher->id ?></div>
                    </div>
                </div>
            </td>
            <td class="p-3">
                <?= $teacher->nom ?>
            </td>
            <td class="p-3 font-bold">
                <?= $teacher->prenom ?>
            </td>
            <td class="p-3">
                <span class="bg-green-400 text-black rounded-md px-2"><?= $teacher->age ?></span>
            </td>
            <td class="p-3">
                <?= $teacher->login ?>
            </td>
            <td class="p-3">
                <!-- <a href="#" class="text-gray-400 hover:text-gray-100 mr-2">
                    <i class="material-icons-outlined text-base">visibility</i>
                </a> -->
                <a href="index.php?action=edit&id=<?= $teacher->id ?>" class="text-gray-400 hover:text-gray-100  mx-2">
                    <i class="material-icons-outlined text-base">edit</i>
                </a>
                <a href="index.php?action=delete&id=<?= $teacher->id ?>" class="text-gray-400 hover:text-gray-100  ml-2">
                    <i class="material-icons-round text-base">delete_outline</i>
                </a>
            </td>
        </tr>
    <?php endForeach; ?>
    </tbody>
</table>

<?php $content = ob_get_clean(); ?>

<?php 
    include_once'view/layout.php';
?>
