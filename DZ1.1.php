<?php
echo("Залишок від ділення 7 на 3 = ");
$var1 = 7;
$var2 = 3;
$var3 = 7.15;
$result = $var1/$var3;
$stroka = "Десять негритят пошли купаться в море";
$slovo = explode(" ", $stroka);
$strlength = mb_strlen($stroka);
echo ($var1%$var2);
echo("<br>"."Отримати цілу частину ділення 7 и 7,15 = ");
echo intval("$result");
echo floor("$result");
echo round($var1/$var2,0);
echo("<br>"."Корінь из 25 =");
echo sqrt(25);
echo("<br>"."4-е слово з фрази - Десять негритят пошли купаться в море"."<br>");
echo $slovo[3];
echo("<br>"."17-й символ із фрази - Десять негритят пошли купаться в море"."<br>");
echo mb_substr($stroka, 17, 1);
$stroka = mb_strtoupper($stroka);
echo ("<br>". "длинна строки $stroka");
echo ("<br>".$strlength."<br>");
if (TRUE == 1) {
    echo "вірно";
}
if (FALSE === 0) {
    echo "вірно";
}
else {
    echo "<br>"."не вірно";
}
$str1 = "tree";
$str2 = "три";
if (mb_strlen($str1)>mb_strlen($str2)) {
    echo ("<br>"."слово \"$str1\" длиннее слова \"$str2\"");
}
else {
    echo("<br>"."слово \"$str2\" длиннее слова \"$str1\"");
}

$a=125*13+7;
$b=223+28*2;

if ($a>$b){
    echo "<br>"."125*13+7 больше чем 223+28*2, потому, что результат $a больше результата $b";
}
else {
    echo "<br>"."223+28*2 больше чем 125*13+7, потому, что результат $b больше результата $a";
}
echo "PULL";
