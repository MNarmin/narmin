<?php require_once("templates/top.php");
if ($_GET['url']){
$file = $_GET['url'];
}
else {
$file='index';
}
$result=mysqli_query($dbcon,"SELECT * FROM maintexts WHERE url='$file'");
if(!$result){
exit('error');
}
$row = mysqli_fetch_array($result);
//echo "<pre>";
//print_r($row);
//echo "</pre>";// для вывода массива
?>

		<h2><?php echo $row['name'];?></h2>
	<div class='content'><?php echo $row['body'];?></div>
	<img src="media/img/5.jpg"/>
	<?php require_once("templates/bottom.php")?>