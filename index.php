<?php
$str='php';
echo strtoupper($str);
?>
<br>
<?php
$str='PHP';
echo strtolower($str);
?>
<br>
<?php
$s='london';
echo ucfirst($s);
?>
<br>
<?php
$s='London';
echo lcfirst($s);
?>
<br>
<?php
$s='london is the capital of great britan';
echo ucwords($s);
?>
<br>
<?php
$s='LONDON';
echo ucfirst(strtolower($s));
?>
<br>
<?php
$s='html css php';
echo strlen($s);
?>
<br>
<?php
$password='ffffffff';
if(strlen($password)>5 && strlen($password)<10)
{
echo "Пароль подхотит";
}
else
{
	echo "Придумайте другой пароль";
}
?>
<br>
<?php
$s='html css php';
echo substr($s, 0,3).',';
echo substr($s, 5,3).',';
echo substr($s, 9,3);//(-3,3)
?>
<br>
<?php
$s='htmldrgdrdgdjdg';
echo substr($s, -3,3);
?>
<br>
<?php
$s='http://fjgjgjgj.jjk.ru';
if(substr($s, 0,7)=='http://')
{
	echo "yes";
}
else
{
	echo "no";
}
?>
<br>
<?php
$s='htt.png';
if(substr($s, -4,7)=='.png')
{
	echo "yes";
}
else
{
	echo "no";
}
?>
<br>
<?php
$s='htt.jpg';
if(substr($s, -4,7)=='.png' || substr($s, -4,7)=='.jpg')
{
	echo "yes";
}
else
{
	echo "no";
}
?>
<br>
<?php
$s='ghjjhjh jgjgjkhjkhj';
if(strlen($s)>5)
{
	echo $exit=substr($s, 0, 5).'...';
}
else
{
	echo $s;
}
?>
<br>
<?php
$s='31.12.2013';
echo str_replace('.', '-', $s);
?>
<br>
<?php
$s='abcabcabccccc';
echo str_replace(['a', 'b','c'],['1','2','3'], $s);
?>
<br>
<?php
$s='1a2b3c4b5d6e7f8g9h0';
$v=str_replace(['1','2','3','4','5','6','7','8','9','0'], [''],$s);
echo "$v";
?>
<br>
<?php
$s='abcabcabccccc';
echo strtr($s, 'abc', '123').'<br>';
echo strtr($s, ['a'=>1, 'b'=>2, 'c'=>3,]);
?>
<br>
<?php
$str='gfhhkgkuguuuuiuihuihh';
echo substr_replace($str, '!!!',3,5);
?>
<br>
<?php
$s='abc abc abc';
echo strpos($s, 'b');
?>
<br>
<?php
$s='abc abc abc';
echo strrpos($s, 'b');
?>
<br>
<?php
$s='abc abc abc';
echo strpos($s, 'b',3);
?>
<br>
<?php
$s='aa aa aa aa';
echo strpos($s, ' ', strpos($s, ' ')+1);
?>
<br>
<?php
$s='gfhf..yffgyg';
if(strpos($s, '..')==true)
{
	echo "yes";
}
else
{
	echo "no";
}
?>
<br>
<?php
$s='html css php';
$a=explode(' ', $s);
var_dump($a);
?>
<br>
<?php
$s=['html', 'css', 'php'];
$a=implode(',', $s);
echo $a;
?>
<br>
<?php
$data='2016-12-31';
$b=explode('-', $data);
$b=array_reverse($b);
$a=implode('.', $b);
echo $a;
?>
<br>
<?php
$s='1234567890';
$a=str_split($s,2);
var_dump($a);
?>
<br>
<?php
$s='1234567890';
$a=str_split($s,1);
var_dump($a);
?>
<br>
<?php
$s='1234567890';
$a=str_split($s,2);
echo implode('-', $a);
?>
<br>
<?php
$s='drdt chgfhg  ';
echo trim($s);
?>
<br>
<?php
$s='/php/';
echo trim($s,'/');
?>
<br>
<?php
$s='слова слова слова';
echo rtrim($s,'.').'.';
?>
<br>
<?php
$s='12345';
echo strrev($s);
?>
<br>
<?php
$s='level';
if($s==strrev($s))
{
	echo 'yes';
}
else 
{
	echo 'no';
}
?>
<br>
<?php
$s='ff5f678';
echo str_shuffle($s);
?>
<br>
<?php
$s='qwertyuiopasdfghjklzxcvbnm';
$a=str_shuffle($s);
echo substr($a, 0,6);
?>
<br>
<?php
for($i=0; $i<10; $i++)
	echo str_repeat('x', $i).'<br>';
?>
<br>
<?php
for($i=1; $i<10; $i++)
	echo str_repeat($i,$i).'<br>';
?>
<br>
<?php
$s='html, <b>php</b>, js';
echo strip_tags($s);
?>
<br>
<?php
echo strip_tags($s,'<b><i>');
?>
<br>
<?php
$s='html, <b>php</b>, js';
echo htmlspecialchars($s);
?>
<br>
<?php
$s='ab-cd-ef';
echo strstr($s, '-');
?>
<br>