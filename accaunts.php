<?php
require_once("templates/top.php");
$query = "SELECT * FROM accaunts ORDER BY id DESC";
$cut = mysqli_query($dbcon, $query);
	if(!$cut){
		exit('Ошибка');
	}
	while ($arr = mysqli_fetch_array($cut)){
	echo $arr ['id']. "<br/>";
?>		
		<div class="col-md-4 col-md-4" >
		</div>
		<?
		
	if($arr['picture']){
	$pic = '/media/photos/'.$arr['picture'];
	}else{
	$pic = '/media/photos/no.jpg';
	}
?>
<img src="<?=$pic?>" class='pica'/>
<div class='none'>
<a href='#' class = 'link' data-id="<?=$arr['id'];?>"><?=$arr['name'];?></a>
</div>

<?
}
 require_once("templates/bottom.php");