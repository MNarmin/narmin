<?php
session_start();
require_once('config/config.php');
if($_SESSION['id']){
$query = "SELECT * FROM user WHERE id = " . $_SESSION['id'];
$auth = mysqli_query($dbcon, $query);
if(!$auth){
 exit('Ошибка запроса');
}
$auth_usr = mysqli_fetch_array($auth);
}

?>
<!Doctype html>
<html>
<head>
<meta charset=utf-8>
<title>Welcome</title>
<meta name ='descraption' content= 'Welcome to our site!'>
<meta name='keywords' content=' welcome'>
<link type='text/css' rel='stylesheet' href='media/css/style.css'/>
<link  href="media/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"/>

</head>
<body>
<header class='shapka'>
<?php
if($_SESSION['id']){
?>
	<a href='/cobinet.php' class = 'btn btn-default my'>Кобинет
<?=($auth_user['login'])?$auth_user['login']:'пользователя';?>
	</a>
	<a href='/logout.php' class = 'btn btn-default my'>Выход</a>
<?php
}else{
?>
	<a href='/red.php' class = 'btn btn-default my'>Регистрация</a>
	<a href='/login.php' class = 'btn btn-default my'>Вход</a>
<?php
}
?>
	<img src='media/img/logo.png'/>

</header>
	<nav class='topmenu'>
		<a href='/' class="btn btn-success">Главная</a>
		<a href='index.php?url=history'>История камня</a>
		<a href='#'>Католог</a>
		<a href='index.php?url=info'>Информация</a>
		<a href='#'>Магазины</a>
		<a href='index.php?url=contact'>Контакты</a>
		<a href='#'><img src="media/img/f.png"></a>
		<a href='#'><img src="media/img/tw.png"/></a>
	</nav>
<div class='mainblock'><div class="col-md-3">
		<h3>ИСТОРИЯ И СВОЙСТВА КАМНЯ</h3>
		<img src="media/img/foto.jpg"/>
		<p>ЧЕШСКИЙ ГРАНАТ – это прозрачный красивого, насыщенно красного цвета, принадлежащий к группе пиропов. Чешский гранат – это драгоценный камень небольшого размера (от 0,2 до 0,8 см), от огненного до кровавого цвета (окрашенный примесью хрома). Его название происходит от греческого слова Пиропос (Pyropos), pyr = огонь, ops = глаз, или от латинского Carbunculus = огарок угля, granatus = зернистый....</p>
		<h4><a href="#">More Here >></a></h4>
		<h3>ИНТЕРЕСНЫЕ ФАКТЫ О КАМНЕ ГРАНАТ</h3>
		<div class="pic2"><p>Сколько мифов, легенд и поверий связано с гранатом – не перечесть! Из-за его кровавого отсвета верили, что камень защищает от ранений. Потому и брали его с собой в бой солдаты всех времен – от античных сражений до современных вооруженных конфликтов на Востоке. Считается также, что если гранат украсть – он погубит вора; если купить – спустя много лет он превратится в талисман; если подарить или передать по наследству – наполнится добрым волшебством. Увы, заверения в особых целебных свойствах граната ни к минералогии, ни тем более к медицине не имеют никакого отношения.</p>
			<h4><a href="#">More Here >></a></h4>
		</div>
	</div>
	
	<div class="col-md-6">