<?php

    $a = setcookie("userid", "rubato");

    $b = setcookie("username", "김채린", time()+60);

    if($a && $b) {
        echo "쿠기 유저네임와 유저아아디 생성완료<br>";
        echo "쿠키 유저네임 60초 지속";
    }

?>
