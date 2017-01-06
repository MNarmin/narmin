$(function(){
$('.topmenu a').bind({
	'mouseover':function(){
	//text = $(this).text();
	//console.log(text);
	color = $(this).attr('data-color');
	body = $(this).attr('data-body');
	$('.shapka').css({
	'background':color
	});
	$('.empty').text(body);
	},
	'mouseout':function(){
	$('.shapka').css({
	'background':'green'
	});
	}

});
var fx = {
	'initModal':function(){
		if($('.modal-window').length==0){
		$('<div>').attr('id', 'jqeury-over')
				   .appendTo('body');
			return $('<div>').addClass('modal-window').appendTo('body');
		}else{
			return $('.modal-window');
		}
	}
}
$('.link').bind('click', function(e){
  e.preventDefault();
 var data = $(this).attr('data-id');
  modal=fx.initModal();
	$('<a>').attr('href','#')
			.addClass('modal-close-btn')
			.html('&times;')
			.click(function(e){
			 e.preventDefault();
				$('#jqeury-over').fadeIn(2000,function(){
					$(this).remove()
				})
			 modal.remove();
			})
			.appendTo(modal)
   $.ajax({
	  type:'POST',
	  url:'ajax.php',
	  data:'id='+data,
	  success:function(data){
		modal.append(data);
		},
	  error:function(msg){
		modal.append(msg);
		}
	});
});

// конец jquery
});