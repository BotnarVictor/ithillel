<?php
/*("Залишок від ділення 7 на 3 = ");
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
*/
//ДЗ МАССИВЫ
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
//считаем длинну массива
echo "<p>Длинна массива = ".count($arr)."</p>";
//переместить первые 4 элемента массива в конец массива
array_push($arr,$arr[0],$arr[1],$arr[2],$arr[3]);
unset($arr[0],$arr[1],$arr[2],$arr[3]);
echo "Перемещение первых 4 элементов массива в конец: ";
print_r($arr);

//получить сумму 4,5,6 элемента
$arr2 = [1, 2, 3, 7, 31, 4, 1, 8, 6];
echo "<p>"."сумма 4,5,6 элемента = ".($arr2[3]+$arr2[4]+$arr2[5]."</p>");
//найти все элементы которые отсутствуют в первом массиве и присутствуют во втором
$firstArr =
[
'one' => 1,
'two' => 2,
'three' => 3,
'foure' => 5,
'five' => 12
];
$secondArr =
[
'one' => 1,
'seven' => 22,
'three' => 32,
'foure' => 5,
'five' => 13,
'six' => 37
];
echo "<p>"."Отсутвующие элементы 1го во 2м: "."</p>";
//найти все элементы значения которых совпадают
$comparison=array_intersect_assoc($secondArr,$firstArr);
echo "<p>"."элементы значения которых совпадают : "."</p>";
print_r($comparison);

