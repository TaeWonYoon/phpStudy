<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP 프로그래밍 입문</title>
    <link rel="stylesheet" type="text/css" href="./css/common.css">
    <link rel="stylesheet" type="text/css" href="./css/message.css">
</head>
<body>
<header>
    <?php include "header.php";?>
</header>
<section>
    <div id="main_img_bar">
        <img src="./img/main_img.png">
    </div>
    <div id="message_box">
        <h3>
            <?php
            if (isset($_GET["page"]))
                $page = $_GET["page"];
            else
                $page = 1;

            $mode = $_GET["mode"];

            if ($mode=="send")
                echo "송신 쪽지함 > 목록보기";
            else
                echo "수신 쪽지함 > 목록보기";
            ?>
        </h3>
        <div>
            <ul id="message">
                <li>
                    <span class="col1">번호</span>
                    <span class="col2">제목</span>
                    <span class="col3">
<?php
if ($mode=="send")
    echo "받은이";
else
    echo "보낸이";
?>
					</span>
                    <span class="col4">등록일</span>
                </li>
                <?php
                $con = mysqli_connect("pma.jeongps.com", "dbsxodnjs456", "dljeQPcyr0WZUKUS", "japan_dbsxodnjs456");
                if ($mode=="send")
                    $sql = "select * from message where send_id='$userid' order by num desc";
                else
                    $sql = "select * from message where rv_id='$userid' order by num desc";

                $result = mysqli_query($con, $sql);
                $total_record = mysqli_num_rows($result); // 전체 글 수

                $scale = 10;

                //$total_record 전체페이지 개수
                if($total_record % scale == 0)
                    $total_page = floor($total_record/$scale);
                else
                    $total_page = floor($total_record/$scale) + 1;

                //표시할 페이지($page)에 따라 start 계산
                $start = ($page - 1) * $scale;

                $number = $total_record - $start;

                for($i = $start; $i < $start + $scale && $scale && $i < $total_record; $i++) {

                }

            ?>
            </ul> <!-- page -->
            <ul class="buttons">
                <li><button onclick="location.href='message_box.php?mode=rv'">수신 쪽지함</button></li>
                <li><button onclick="location.href='message_box.php?mode=send'">송신 쪽지함</button></li>
                <li><button onclick="location.href='message_form.php'">쪽지 보내기</button></li>
            </ul>
        </div> <!-- message_box -->
</section>
<footer>
    <?php include "footer.php";?>
</footer>
</body>
</html>
