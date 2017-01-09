<?php
function insert($query, $redirect){
	global $dbcon;
	if(!$query){
	$query = "";
	}
	$cut = mysqli_query($dbcon, $query);
	if(!$cut){
		exit($query);
	}
?>
	<script>
		document.location.href='<?=$redirect?>';
	</script>
<?php
}
function selectone($query){
	global $dbcon;
	$resalt = mysqli_query($dbcon, $query);
	if(!$resalt){
		exit($query);
	}	
	$row = mysqli_fetch_array($resalt);
	return $row;
}
