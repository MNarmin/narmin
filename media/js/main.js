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


// конец jquery
});