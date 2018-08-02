<?
$character_mask = " \t\n\r\0\x0B";
$name=trim($_POST['name'],$character_mask);
$surname=trim($_POST['surname'],$character_mask);
$age=trim($_POST['age'],$character_mask);
//////////////////////////////////////////////////////
$db = mysqli_connect("37.140.192.112","u0128123_vks","grisha123009","u0128123_vks") or die ("ошибка"); 
$utf8="set names utf8";
$result = mysqli_query($db,$utf8);
$set = "INSERT INTO NutnetTest(name,surname,age) VALUES ('$name','$surname','$age')"; 
$result = mysqli_query($db,$set);
mysqli_close($db);
