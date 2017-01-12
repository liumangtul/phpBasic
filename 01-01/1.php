<?php
//trim去掉字符串两侧的多余空格和换行符，rtrim去掉右边的空格和换行符,第二个参数指定去掉的匹配格式
$email = " _dsfA    Adsf_  \r\n";
            var_dump(
                $email,
                trim($email),
                rtrim($email),
                trim($email,"\r")
            );
?>


<?php
    echo strtoupper("magic");
echo "\n";
    echo strtolower('MAGIC');
echo "\n";
    echo ucfirst('how are you?');
echo "\n";
    echo ucwords('i am fine.');
echo "\n";
    echo addslashes("i'm yan");
echo "\n";
    echo stripslashes("we\'re wo\"rld");
echo "\n";
    $email ='promise@126.c@om';
    echo strstr($email,'@',true);
    echo "\n";
    echo trim(strstr($email,'@'),'@');
?>
