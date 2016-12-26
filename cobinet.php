<?php
require_once("templates/top.php");
if($_SESSION ['id']){
	//echo "<pre>";
	//print_r ($auth_usr);
	//echo"<pre>";
}
else{
echo 'Ошибка входа';
}

?>
<form method='post' action='red.php'>
  <div class="form-group">
    <label for="user">ФИО</label>
    <input type="text" class="form-control" id="user" placeholder="Name">
  </div>
    
  <div class="form-group">
    <label for="phon">Тел</label>
    <input type="text" class="form-control" id="phon" placeholder="Phone">
</div>
      
<div class="form-group">
    <label for="adderess">Адрес</label>
    <input type="text" class="form-control" id="adderess" placeholder="Adderess">
  </div>
<div class="form-group">
    <label for="date">Дата рождения</label>
    <input type="text" class="form-control" id="date" placeholder="Date">
 </div>

   <button type="submit" class="btn btn-default">Submit</button>
</form>


<?php require_once("templates/bottom.php");
?>