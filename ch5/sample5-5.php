<?php
    $str = "HTMLとPHPの学習";
    echo "\$str=「{$str}」<br><br>";

    $length = mb_strlen($str);
    echo "\$strnの長さは{$length}文字です。<br>";

    $sub = mb_substr($str,5,3);
    echo "\$strを5文字目から3文字切り取ると「{$sub}」です。<br>";

    $srch = "学習";

    $result = mb_strpos($str,$srch);
    echo "「{$srch}」は、\$strの{$result}文字目に含まれます。<br>";

    $srch = "HTML";
    $replace = "web";
    $result = str_replace($srch,$replace,$str);

    echo "\$strの「{$srch}」を「{$replace}」にすると「{$result}」になります。<br>";

