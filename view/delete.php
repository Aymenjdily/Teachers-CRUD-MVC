<?php
    $title = "Delete Teacher";

    ob_start();

?>
<div class="">
    <h1 class="text-white font-bold my-5">
        Are you Sure ?
    </h1>
    <div class="flex gap-5">
        <a href="index.php?action=destroy&id=<?= $id ?>" class="bg-red-500 rounded-xl text-white px-5 py-2 font-bold">Yes</a>
        <a href="index.php?action=list" class="bg-gray-700 rounded-xl text-white px-5 py-2 font-bold">No</a>
    </div>
</div>
<?php

    $content = ob_get_clean();
    require_once 'view/layout.php';
?>