<?php
    $id = $_GET["id"];

    $pass = $_POST["pass"];
    $name = $_POST["name"];
    $email1 = $_POST["email1"];
    $email2 = $_POST["email2"];

    $email = $email1."@".$email2;

    $con = mysqli_connect("pma.jeongps.com", "dbsxodnjs456", "dljeQPcyr0WZUKUS", "japan_dbsxodnjs456");

    $sql = "UPDATE members SET pass='$pass', name='$name', email='$email' ";
    $sql .= "WHERE id = '$id'";

    mysqli_query($con, $sql);
    mysqli_close($con);

    session_start();
    unset($_SESSION["userid"]);
    unset($_SESSION["username"]);
    unset($_SESSION["userlevel"]);
    unset($_SESSION["userpoint"]);
    echo "
        <script>
            location.href = 'index.php';
        </script>
    ";