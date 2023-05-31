<?php
    require_once 'model/Teacher.php';
    function listTeachersAction(){
        $results = listTeachers();
        require_once 'view/TableTeachers.php';
    }

    function createTeacherAction(){
        require_once 'view/createTeacher.php';
    }

    function storeAction(){
        $isCreated = createTeacher();
        header('location:index.php?action=list');
    }

    function deleteAction(){
        $id = $_GET['id'];

        require_once 'view/delete.php';
    }

    function destroyAction(){
        $id = $_GET['id'];
        deleteTeacher($id);

        header('location:index.php?action=list');
    }

    function editAction(){
        $id = $_GET['id'];
        $teacher = getTeacher($id);
        require_once 'view/edit.php';
    }

    function updateAction(){
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $age = $_POST['age'];
        $login = $_POST['login'];
        $password = $_POST['password'];

        editTeacher($id, $nom, $prenom, $age, $login, $password);
        header('location:index.php?action=list');
    }
?>