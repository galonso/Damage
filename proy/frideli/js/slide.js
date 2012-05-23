$(function(){

	var val;
	var val2;
	var slideshow1 = new Dragdealer('slider',
	{
		steps:8,
		slide:false,
		snap:true,
		loose:true,
		animationCallback: function(x,y){
			val = x*7;
			$('#num').text(" "+val+" ");				
		}


	});

	var slideshow2 = new Dragdealer('slider2',
	{
		steps:8,
		slide:false,
		snap:true,
		loose:true,
		animationCallback: function(x,y){
			val2 = x*7;
			$('#num2').text(" "+val2+" ");
			slideshow1.handle.style.left = String(400*x)+'px';
		}


	});


	$('#boton1').click(function(){
	

	});

	$('#boton2').click(function(){
		slideshow2.setStep(6);
	});



})

