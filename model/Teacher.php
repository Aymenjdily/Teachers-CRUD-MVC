<?php
    function dbConnection(){
        return new PDO('mysql:dbname=teachers;host=localhost','root','root');
    }
    
    function listTeachers(){
        $pdo = dbConnection();
        return $pdo->query('SELECT * FROM teachers ORDER BY id DESC')->fetchAll(PDO::FETCH_OBJ);
    }

    function createTeacher(){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $age = $_POST['age'];
        $login = $_POST['login'];
        $password = $_POST['password'];

        $pdo = dbConnection();
        $sqlState = $pdo->prepare('INSERT INTO teachers VALUES(null,?,?,?,?,?)');

        return $sqlState->execute([$nom, $prenom, $age, $login, $password]);
    }

    function deleteTeacher($id){
        $pdo = dbConnection();
        $sqlState = $pdo->prepare('DELETE FROM teachers WHERE id = ?');

        return $sqlState->execute([$id]);
    }

    function getTeacher($id){
        $pdo = dbConnection();

        $sqlState = $pdo->prepare('SELECT * FROM teachers WHERE id = ?');
        $sqlState->execute([$id]);

        return $sqlState->fetch(PDO::FETCH_OBJ);
    }

    function editTeacher($id, $nom, $prenom, $age, $login, $password){
        $pdo = dbConnection();
        $sqlState = $pdo->prepare('UPDATE teachers SET nom=?,prenom=?,age=?,login=?,password=? WHERE id=?');

        return $sqlState->execute([$nom, $prenom, $age, $login, $password, $id]);
    }
?>