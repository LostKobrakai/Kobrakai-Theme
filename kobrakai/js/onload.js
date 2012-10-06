$(document).ready(function(){
	$('body.home .media').each(function(i){
		if($('.wp-post-image', this).width()){
			$(this).css('width', $('.wp-post-image', this).width());
		}else{
			$(this).css({'width':198,
						'height': 198,
						'border':'1px solid #ccc'
			});
		}
	});
	if($('.media.single')){
		$('.gallery_image_big').attr('src', $('a[rel=gallery]').attr('href'));
		$('a[rel=gallery]').click(function(event){
			event.preventDefault();
			$('.gallery_image_big').attr('src', $(this).attr('href'));
		});
	}
	
});