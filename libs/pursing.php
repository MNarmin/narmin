<?php
//sleep(2);
require_once('../config/config.php');
require_once("functions.php");
require_once("phpQuery/phpQuery/phpQuery.php");
$query="SELECT * FROM accaunts WHERE picture=''";
$cat=mysqli_query($dbcon, $query);
if(!$cat){
exit('Îøèáêà');
}
while($all=mysqli_fetch_array($cat)){
$str=@str_replace(array(' '), "+",$all['name']);
$link="http://www.google.by/search?q=$str&rlz=1C1CHMO_ruBY727&espv=2&biw=1600&bih=755&source=lnms&tbm=isch&sa=X&ved=0ahUKEwiLuJuAz7rRAhWpFZoKHbfAC_kQ_AUIBigB";
echo $link. " <br/> ";
echo $all['name']. " <br/> ";
$hap=file_get_contents($link);  
$document=phpQuery::newDocument($hap);
$hentry=$document->find('.images_table img:eq(0)');
echo $hentry;


echo "<hr/>";
sleep(1);
};
?>