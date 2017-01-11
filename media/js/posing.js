$(function(){
	$.ajaxSetup({
		url:'libs/pursing.php',
		type:'POST',
		beforeSend:function(){
	$('#empty123').html("<img src='media/img/loader.gif'/>");	
		},
		success:function(m){
		console.log(m);
		$('#empty123').html(m);
		},
		error:function(m){
		$('#empty123').html(m);
		}
	
	
	});
	$('#google_search').click(function(){
	$.ajax();
	});
	});