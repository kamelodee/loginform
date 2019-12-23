<?php

if (isset($_POST['login_user'])) {

    require "dbh.php";

    $email =  $_POST['email'];
    $password =  $_POST['password'];

    if (empty($email) || empty($password)) {
        header("location: ../index.php?error+=emptyfields") ;
        exit();

    }else{

         $sql = "SELECT * FROM users WHERE userEmail=?;";
         $stmt = mysqli_stmt_init($conn);
         if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../index.php?error=sqlerror") ;
            exit();
         }else{

             mysqli_stmt_bind_param( $stmt,"s",$email);
             mysqli_stmt_execute($stmt);
             $result = mysqli_stmt_get_result($stmt);

             if ($row = mysqli_fetch_assoc($result)) {
                 
                $pwdCheck = password_verify($password, $row['userPwd']);
                if ($pwdCheck == FALSE) {
                    header("location: ../index.php?error=wrongpassword") ;
                     exit(); 
                }
                elseif($pwdCheck == TRUE){

                    session_start();
                    $_SESSION['userid'] = $row['userid'];
                    $_SESSION['userName'] = $row['userName'];
                    $_SESSION['userEmail'] = $row['userEmail'];
                    header("location: ../index.php?login=successful") ;
                    exit(); 

                }else{

                    header("location: ../index.php?error=wrongpassword") ;
                     exit();  
                }
             }else{

                header("location: ../index.php?error=nouser") ;
                exit(); 
             }
         }

    }

}else{

    header("location: ../index.php ") ;
    exit();

}