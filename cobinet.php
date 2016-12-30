<?php
require_once("templates/top.php");
require_once("libs/functions.php");
if($_SESSION ['id']){
	//echo "<pre>";
	//print_r ($auth_usr);
	//echo"<pre>";
$query = "SELECT * FROM accaunts WHERE user_id=".$_SESSION['id'];
$row = selectone($query);
if($_POST){
		$user = $_POST['user'];
		$phon = $_POST['phon'];
		$adderess = $_POST['adderess'];
		$data_rod = $_POST['data_rod'];

	if($_FILES['picture']['tmp_name']){
	//echo "<pre>";
	//print_r($_FILES);
	//echo"</pre>"; проверилти можно убрать
	
	$tmp_name = $_FILES['picture']['tmp_name'];
	$name = $_FILES['picture']['name'];
	$dir = $_SERVER['DOCUMENT_ROOT'] ."/media/photos/";
	if(!is_dir($dir)){
	@mkdir($dir, 0777);
	}
	if(is_uploaded_file($tmp_name)){
	move_uploaded_file($tmp_name, $dir. $name);
	}else{
	echo "Ошибка загрузки фаила";
	}
}else{
$name =$row['picture'];
}

if($row){
	if(file_exists($dir. $name)){
	@unlink($dir. $name);
	}
	$query = "Update accaunts SET  name = '$user', phone = '$phon', address = '$adderess', data_rod = '$data_rod', picture='$name' WHERE user_id=".$_SESSION['id'];
	insert($query, 'cobinet.php');
}else{
	$query = "INSERT INTO accaunts VALUES(null,
									".$_SESSION['id'].",
									'$user',
									'$phon',
									'$adderess',
									'$data_rod',
									NOW(),
									NOW(),
									'$name'
									)";
 insert($query, 'cobinet.php');
echo 'ошибка';
}
	

}
	if($row['picture']){
?>
	<img src="/media/photos/<?php echo $row['picture']?>" class="img-circle"/>
<?php
	}else{
?>
	<img src="/media/photos/defoult.jpg.jpg" class="img-circle"/>
<?php
	}
?>

<form enctype='multipart/form-data' method='post' action='cobinet.php'>
	

  <div class="form-group">
    <label for="user">ФИО</label>
    <input type="text" name='user' class="form-control" id="user" value = "<?=($row['name'])?$row['name']:''; ?>">
  </div>
    
  <div class="form-group">
    <label for="phon">Тел</label>
    <input type="text" name='phon' class="form-control" id="phon" value = "<?=($row['phone'])?$row['phone']:''; ?>">
</div>
      
<div class="form-group">
    <label for="adderess">Адрес</label>
    <input type="text" name='adderess' class="form-control" id="adderess" value = "<?=($row['address'])?$row['address']:''; ?>">
  </div>
<div class="form-group">
    <label for="data_rod">Дата рождения</label>
    <input type="text" name='data_rod' class="form-control" id="data_rod" value = "<?=($row['data_rod'])?$row['data_rod']:''; ?>">
 </div>
<div class="form-group">
    <label for="picture">Адрес</label>
    <input type="file" name='picture'  id="picture">
 </div>
   <button type="submit" class="btn btn-default">Submit</button>
</form>


<?php

 
}else{
echo 'Ошибка входа';
}
require_once("templates/bottom.php");
?>