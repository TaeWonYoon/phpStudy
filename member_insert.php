
<?php
    $id = $_POST["id"];
    $pass = $_POST["pass"];
    $name = $_POST["name"];
    $email1 = $_POST["email1"];
    $email2 = $_POST["email2"];

    $email = $email1."@".$email2;
    $regist_day = date("Y-m-d (H:i)");
    echo $id ."<br>". $pass ."<br>". $name ."<br>". $email ."<br>". $regist_day;

    $con = mysqli_connect("pma.jeongps.com", "dbsxodnjs456", "dljeQPcyr0WZUKUS", "japan_dbsxodnjs456");
    if($con) {
        echo "연결됨";
    } else {
        echo "연결안됨";
    }
    $sql = "INSERT INTO members(id, pass, name, email, regist_day,
            level, point) ";
    $sql .= "values('$id', '$pass', '$name', '$email', '$regist_day', 9, 0)";
    echo $sql;
    mysqli_query($con, $sql);
    mysqli_close($con);

//     echo "
//         <script>
//             location.href = 'index.php';
//         </script>
//     ";
