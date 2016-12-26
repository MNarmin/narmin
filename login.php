<?php require_once("templates/top.php");
if($_POST){
		$name = $_POST['login'];
		$pass = $_POST['pass'];
	$query = "SELECT * FROM user WHERE login= '$name' AND pass = '$pass'";
	$cut = mysqli_query($dbcon, $query);
if(!$cut){
	exit('Ошибка запроса');
}
$user = mysqli_fetch_array($cut);
echo $query;
if($user['id']){
	$_SESSION['id'] = $user['id'];
	$query = "Update user SET lostvisit = NOW() WHERE id " .$_SESSION['id'];
	//echo "Авторизация прошла";
	?>
	<script>
		location.href='cobinet.php';
		</script>
	<?php
}else{
echo "нет такого пользователя";
}

}
	
?>

<form method='post' action='login.php'>

	<div class="form-group">
    <label for="log">Login</label>
    <input type='text' name='login' type="email" class="form-control" id="log" placeholder="Login">
  </div>
    <div class="form-group">
    <label for="pass">Password</label>
    <input type='password' required name='pass' type="password" class="form-control" id="pass" placeholder="Password">
  </div>
    
  <button type="submit" class="btn btn-default">Submit</button>
</form>
<?php require_once("templates/bottom.php");
?>