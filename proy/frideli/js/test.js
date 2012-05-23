$(
	function () {
		$( ".slideshow" ).imageScroller( {loading:'Cargando imagenes...'} );
                
                $('.drop').click(function(){                    
                 //  $('.slide').slideUp(500);
                   $(this).nextUntil("li").slideToggle(500);   
                
                });
                
               $('.galeria a').colorbox({rel:'group1', transition:"fade"}); 
               $('.slideshow a').colorbox({rel:'group2', transition:"fade"}); 
                
	}
)