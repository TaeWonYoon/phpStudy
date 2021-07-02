<?php
    $send_id = $_GET['send_id'];
    $rv_id = $_POST['rv_id'];
    $subject = $_POST['subject'];
    $content = $_POST['content'];
    $subject = htmlspecialchars($subject, ENT_QUOTES);
    $content = htmlspecialchars($content, ENT_QUOTES);
    $regist_day = date("Y-m-d (H:i)");

    $con = mysqli_connect("pma.jeongps.com", "dbsxodnjs456", "dljeQPcyr0WZUKUS", "japan_dbsxodnjs456");
    $sql = "SELECT * FROM members WHERE id = '$rv_id'";
    $result = mysqli_query($con, $sql);
    $num_record = mysqli_num_rows($result);

    if($num_record) {
        $sql = "INSERT INTO message(send_id, rv_id, subject, content,
            regist_day)";
        $sql .= " VALUES('$send_id','$rv_id','$subject','$content')";
        mysqli_query($con, $sql);
    } else {
        echo "<script>alert('수신자가 없습니다.'); history.back();</script>";
        exit;
}

mysqli_close($con);

//echo "
//        <script>
//            location.href = 'message_box.php';
//        </script>
//    ";


