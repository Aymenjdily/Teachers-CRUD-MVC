<?php
    $title = "Update Teacher";

    ob_start();
?>

<form method="post" action="index.php?action=update" class="flex flex-col gap-5">
    <div class="flex flex-col gap-2">
        <input type="hidden" name="id" id="id" value="<?= $teacher->id; ?>" class="bg-transparent border border-white p-2 rounded-xl outline-none text-white">
    </div>
    <div class="flex flex-row gap-5">
        <div class="flex flex-col gap-2">
            <label for="nom" class="text-white">Nom</label>
            <input type="text" name="nom" id="nom" value="<?= $teacher->nom; ?>" class="bg-transparent border border-white p-2 rounded-xl outline-none text-white">
        </div>
        <div class="flex flex-col gap-2">
            <label for="prenom" class="text-white">Prenom</label>
            <input type="text" name="prenom" id="prenom" value="<?= $teacher->prenom; ?>" class="bg-transparent border border-white p-2 rounded-xl outline-none text-white">
        </div>
    </div>
    <div class="flex flex-row gap-5">
        <div class="flex flex-col gap-2">
            <label for="age" class="text-white">Age</label>
            <input type="number" name="age" id="age" value="<?= $teacher->age; ?>" class="bg-transparent border border-white p-2 rounded-xl outline-none text-white">
        </div>
        <div class="flex flex-col gap-2">
            <label for="login" class="text-white">Login</label>
            <input type="text" name="login" id="login" value="<?= $teacher->login; ?>" class="bg-transparent border border-white p-2 rounded-xl outline-none text-white">
        </div>
    </div>
    <div class="flex flex-col gap-2">
        <label for="password" class="text-white">Password</label>
        <input type="text" name="password" id="password" value="<?= $teacher->password; ?>" class="bg-transparent border border-white p-2 rounded-xl outline-none text-white">
    </div>
    <input type="submit" name="update" value="Update" class="bg-green-400 mt-8 rounded-xl p-2 px-5 font-bold cursor-pointer self-start flex">
</form>

<?php $content = ob_get_clean(); ?>

<?php 
    include_once'view/layout.php';
?>
