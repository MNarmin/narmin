<?php require_once("templates/top.php");
if($_POST){
	//echo "<pre>";
	//print_r($_POST);
	//echo "</pre>";
	$error=[];
	$email = $_POST['email'];
	$name = $_POST['log'];
	$pass = $_POST['pass'];
	$pass1 = $_POST['pass1'];
	if($pass != $pass1){
		$error[]= 'Пароль не совпадает';
	}
	$query = "SELECT * FROM user WHERE Login ='$name'";
		$us = mysqli_query($dbcon, $query);
		if(!$us){
		exit('Ошибка запроса');
		}
	$already = mysqli_fetch_array($us);
		if($already){
		$error[] = 'Пользователь с таким именем уже есть';
		}
	$query = "SELECT * FROM user WHERE Email ='$email'";
		$us = mysqli_query($dbcon, $query);
		if(!$us){
		exit('Ошибка запроса');
		}
	$already = mysqli_fetch_array($us);
		if($already){
		$error[] = 'Пользователь с таким email уже есть';
		}	
	if($error){
		//echo "<pre>";
		//print_r($error);
		//echo "</pre>";
		echo "<div class = 'alert alert-danger'>";
		foreach($error as $one){
			echo "<div class = 'error'>";
			echo $one;
			echo "</div>";
		}
		echo "</div>";
	} else {

		$query = "INSERT INTO user VALUES(null,
									'$email',
									'$name',
									'$pass',
									NOW(),
									NOW(),
									'unblock'
									)";
	$in = mysqli_query($dbcon, $query);
	if(!$in){
		exit($query);
	}
	?>
	<script>
		location.href='login.php';
		</script>
	<?php
	}

}
?>

<form method='post' action='red.php'>

	<div class="form-group">
    <label for="log">Login</label>
    <input type='text' name='log' type="email" class="form-control" id="log" placeholder="Login">
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type='email' required name='email' type="email" class="form-control" id="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="pass">Password</label>
    <input type='password' required name='pass' type="password" class="form-control" id="pass" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="pass1">Password</label>
    <input type='password' name='pass1'type="password" class="form-control" id="pass1" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>
<?php require_once("templates/bottom.php");
?>