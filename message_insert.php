<?php
    $send_id = $_GET["send_id"];

    $rv_id = $_POST['rv_id'];
    $subject = $_POST['subject'];
    $content = $_POST['content'];
    $subject = htmlspecialchars($subject, ENT_QUOTES);
    $content = htmlspecialchars($content, ENT_QUOTES);
    $regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장

    $con = mysqli_connect("pma.jeongps.com", "dbsxodnjs456", "dljeQPcyr0WZUKUS", "japan_dbsxodnjs456");
    $sql = "select * from members where id='$rv_id'";
    $result = mysqli_query($con, $sql);
    $num_record = mysqli_num_rows($result);

    if($num_record) {
        $sql = "insert into message (send_id, rv_id, subject, content,  regist_day) ";
        $sql .= "values('$send_id', '$rv_id', '$subject', '$content', '$regist_day')";
        mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
    } else {
        echo "<script>alert('수신자가 없습니다.'); history.back();</script>";
        exit;
}

mysqli_close($con);

echo "
        <script>
            location.href = 'message_box.php?mode=send';
        </script>
    ";


