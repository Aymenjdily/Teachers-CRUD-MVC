<?php
    require_once 'controller/teacherController.php';

    // Routes

    if(isset($_GET['action'])){
        $action = $_GET['action'];

        switch($action){
            case 'create':
                createTeacherAction();
                break;
            case 'list';
                listTeachersAction();
                break;
            case 'destroy';
                destroyAction();
                break;
            case 'edit':
                editAction();
                break;
            case 'store':
                storeAction();
                break;
            case 'update':
                updateAction();
                break;
            case 'delete':
                deleteAction();
                break;
        }
    }
?>