<?php
require_once("templates/top.php");
require_once("libs/functions.php");
if($_SESSION ['id']){
	//echo "<pre>";
	//print_r ($auth_usr);
	//echo"<pre>";

if($_POST){
		$user = $_POST['user'];
		$phon = $_POST['phon'];
		$adderess = $_POST['adderess'];
		$data_rod = $_POST['data_rod'];
	
		print_r($_POST);
	if($_FILES){
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
$name = "";
}
	$query = "INSERT INTO accaunts VALUES(null,
									".$_SESSION['id'].",
									'$phon',
									'$adderess',
									'$data_rod',
									NOW(),
									NOW(),
									'$name'
									)";
 insert($query, 'cobinet.php');
}
?>
<form enctype='multipart/form-data' method='post' action='cobinet.php'>
  <div class="form-group">
    <label for="user">ФИО</label>
    <input type="text" name='user' class="form-control" id="user" placeholder="Name">
  </div>
    
  <div class="form-group">
    <label for="phon">Тел</label>
    <input type="text" name='phon' class="form-control" id="phon" placeholder="Phone">
</div>
      
<div class="form-group">
    <label for="adderess">Адрес</label>
    <input type="text" name='adderess' class="form-control" id="adderess" placeholder="Adderess">
  </div>
<div class="form-group">
    <label for="data_rod">Дата рождения</label>
    <input type="text" name='data_rod' class="form-control" id="data_rod" placeholder="Data">
 </div>
<div class="form-group">
    <label for="picture">Адрес</label>
    <input type="file" name='picture'  id="picture">
  </div>
   <button type="submit" class="btn btn-default">Submit</button>
</form>


<?php 
}
else{
echo 'Ошибка входа';
}
require_once("templates/bottom.php");
?>