<?php
    session_start();
    if(isset($_SESSION['id'])){
        header("location:index.php");
        die();
    }
?>

    <?php
    $login=$_POST["login"];
    $pwd=$_POST["pwd"];
    if($_POST['login'] == "admin" && $_POST['pwd'] == "1234" ){

        $_SESSION['username']='admin';
        $_SESSION['role']='a';
        $_SESSION['id']=session_id();
        header("location:index.php");
        die();

    } elseif ($_POST['login'] == "member" && $_POST['pwd'] == "mem1234" ){

        $_SESSION['username']='member';
        $_SESSION['role']='m';
        $_SESSION['id']=session_id();
        header("location:index.php");
        die();

    } else{
        $_SESSION['error']='error';
        header("location:login.php");
        die();
    }
?>