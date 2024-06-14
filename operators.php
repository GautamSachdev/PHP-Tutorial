<?php
    // Arithmetic Operators
    echo "#Use of Arithmetic operators <br>";
    $a=10;
    $b=5;
    
    echo "For a+B = ".$a+$b."<br>";
    echo "For a-B = ".$a-$b."<br>";
    echo "For a*B = ".$a*$b."<br>";
    echo "For a/B = ".$a/$b."<br>";
    echo "For a%B = ".$a%$b."<br>";
    echo "For a**B = ".$a**$b."<br>";
    echo "<br>";
    //Assignment Operators
    echo "#Use of Assignment operators <br>";
    echo "<br>";
    $c=$a;
    echo "If i assign the value a in C averiable:".$c."<br>";
    $c+=6;
    echo "if i add 6 in c variable:".$c."<br>";
    $c-=6;
    echo "if i subtract 6 in c variable:".$c."<br>";
    $c*=6;
    echo "if multiply 6 in c variable:".$c."<br>";
    $c/=6;
    echo "if divide 6 in c variable:".$c."<br>";
    $c%=6;
    echo "if perform modulo 6 in c variable:".$c."<br>";
    echo "<br>";
    //Comparision operators
    echo "#Use of Assignment operators <br>";
    echo "<br>";
    $d=5;$e=7;

    echo "For a==b then: ";
    var_dump($d==$e);
    echo "<br>";

    echo "For a>b then: ";
    var_dump($d>$e);
    echo "<br>";

    echo "For a<b then: ";
    var_dump($d<$e);
    echo "<br>";

    echo "For a<>b then: ";
    var_dump($d<>$e);
    echo "<br>";

    echo "For a!=b then: ";
    var_dump($d!=$e);
    echo "<br>";

    //Logical operators
    echo "<br>";
    $f=True;
    $g=False;
    echo "#Use of Logical operators <br>";
    echo "<br>";

    echo "For f AND g then: ";
    echo var_dump($f and $g);
    echo "<br>";

    echo "For f OR g then: ";
    echo var_dump($f OR $g);
    echo "<br>";

    echo "For !f then: ";
    echo var_dump(!$f);
    echo "<br>";

    echo "For !g then: ";
    echo var_dump(!$g);
    echo "<br>";
    
?>