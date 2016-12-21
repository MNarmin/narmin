</div>
	
	<div class="col-md-3">
	<H1>Menu</H1>
	<?php 
	$obg_menu = mysqli_query($dbcon, "SELECT * FROM maintexts WHERE leftmenu='1'");
	while($menu = mysqli_fetch_array($obg_menu)){
	echo "<a href='index.php?url=".$menu['url']."' class='btn btn-default btn-block'>";
	echo $menu['name'];
	echo "</a>";
	//echo "<br/>";//
	}
	
	?>
	<h3>Украшения из граната</h3>
		<img src="media/img/phoca_thumb_l_zlaty_sperk_04.jpg"/>
		<p>Камень гранат в тандеме с ярким золотом 585 пробы или же с холодным загадочным серебром – сочетание удивительно эффектное и заметное. Кольца с этим бразильским самоцветом в нашем каталоге занимают лидирующие позиции по продажам, что неудивительно: эти изделия очень красивы, универсальны, а сам камень готов стать оберегом и помощником для своего нового хозяина.</p>
		<img src="media/img/phoca_thumb_l_zlaty_sperk_05.jpg"/>
	</div>
	
</div>	
<br style="clear:both"/>	
<footer class='foot'>&copy;<a href='mail to:narmingeo@gmail.com'>narmingeo@gmail.com</a>
</footer>
</body>
</html>