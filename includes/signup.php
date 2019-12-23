<?php
if (isset($_POST['reg_user'])) {
 require "dbh.php";



 $fullName =  $_POST['fullname'];
 $email =  $_POST['email'];
 $password =  $_POST['password'];

if (empty($fullName) || empty($email) ||empty( $password)) {
    header("location:../register.php?error=emptyfields&uid= ".$fullName ."&email =".$email) ;
    exit();
}

elseif(!filter_var( $email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*/$", $fullName)){
    header("location:../register.php?error=invavidemailuid") ;
    exit();
}

elseif(!filter_var( $email, FILTER_VALIDATE_EMAIL)){
    header("location:../register.php?error=invavidemail&uid= ".$fullName) ;
    exit();
}

elseif(preg_match("/^[a-zA-Z0-9]*/$", $fullName)){
    header("location:../register.php?error=invavideuid&email= ".$email) ;
    exit();
}
else{
$mysql = "SELECT userName FROM users WHERE userName =?";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $mysql)) {
    header("location:../register.php?error=sqlerror ") ;
    exit();
}else{
    mysqli_stmt_bind_param($stmt, "s", $fullName );
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $resultCheck = mysqli_stmt_num_rows($stmt);
    if ($resultCheck > 0) {
        header("location:../register.php?error=usertaken&email= ".$email) ;
        exit();
    }
    else{
        $mysql = "INSERT INTO users (userName, userEmail, userPwd) VALUES(?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $mysql)) {
            header("location:../register.php?error=sqlerror ") ;
            exit();
    }else{
        $hashPwd = password_hash($password, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "sss", $fullName, $email, $hashPwd );
        mysqli_stmt_execute($stmt);
        header("location:../login.php?success=signupsuccess ") ;
        exit();
    }
}

}

}
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        header("location:../register.php ") ;
        exit();
}