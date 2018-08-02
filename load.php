<?
//////////////////////////////////////////////////////
$db = mysqli_connect("37.140.192.112","u0128123_vks","grisha123009","u0128123_vks") or die ("ошибка"); 
$utf8="set names utf8";
$result = mysqli_query($db,$utf8);
$set = "SELECT * FROM NutnetTest WHERE age >18 ORDER BY surname ASC";
$result = mysqli_query($db,$set);
///////////////////////////////////////////////////
while($row=mysqli_fetch_array($result))
{
$add = 'nameG='.$row['name'].'&surnameG='.$row['surname'].'&ageG='.$row['age'];
$i=$i+1;
$d[$i]=$add;
}
mysqli_close($db);
//////////////////////////////////////////////////////
$j=1;
while ($d[$j])
{
echo 'создана запись '.$j.'</br>';
$url = 'https://script.google.com/macros/s/AKfycbzOICsSVgT2EfElFZU8O3Ddc-_K9Dxe3SNOkJ43spK3SBnksc4/exec?'.$d[$j];
echo $url;
$k = curl_init();
curl_setopt($k, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_ENCODING ,"UTF8");
curl_setopt($k, CURLOPT_URL, $url);
curl_exec($k);	
curl_close($k);
$j=$j+1;
}








