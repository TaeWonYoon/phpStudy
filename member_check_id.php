<h3>아이디 중복체크</h3>
<p>
<?php
    $id = $_GET["id"];
    
    if(!$id){
        echo("<li>아이디를 입력해 주세요!</li>");
    } else {
        $con = mysqli_connect("pma.jeongps.com", "dbsxodnjs456", "dljeQPcyr0WZUKUS", "japan_dbsxodnjs456");
        $sql = "SELECT * FROM members where id = '$id'";
        $result = mysqli_query($con, $sql);
        $num_record = mysqli_num_rows($result);
        
        echo $num_record."<br>";
        if($num_record) {
            echo "<li>".$id." 아이디는 중복됩니다.</li>";
        } else {
            echo "<li>".$id."는 사용 가능합니다.";
        }
        
        mysqli_close($con);
    }
?>
</p>
<div id="close">
    <img src="./img/close.png" onclick="javascript:window.close()" style="cursor:pointer;">
</div>
