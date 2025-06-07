<?php
    require_once '../config/link.php';
    $insertUser = " INSERT INTO `users`(`email-user`, `password-user`, `role-user`) 
        VALUES (:email, :userPassword, '1' ) ";
    if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)){
        $inputEmail = $_POST['userEmail'];
        $inputPassword = $_POST['userPassword'];
        $clonePassword = $_POST['userPasswordClone'];
        if($inputPassword == $clonePassword){
            $passwordHash = password_hash($inputPassword,PASSWORD_DEFAULT);
            $prepareInsert = $link->prepare($insertUser);
            $prepareInsert->bindParam(':userPassword', $passwordHash);
            $prepareInsert->bindParam(':email', $inputEmail);
            $resultPrepare = $prepareInsert->execute();
            if($resultPrepare){
                header('location: ../index.php');
                $resultPrepare = null;
                $link = null;
            }
        }
        exit();
    }
?>