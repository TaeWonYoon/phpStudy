<?php
    session_start();
    $id = $_SESSION["userid"] ="oracle";
    $pass = $_SESSION['userpass'] = "oracle123";

    echo "아이디는 " . $id;
    echo "패스워드는 " . $pass;
?>