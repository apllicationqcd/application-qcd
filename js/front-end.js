$(document).ready(function(){

	//init

	$('.left-header').addClass('left-header-close');
	$('.login-container').animate({bottom : 26+'%'}, 500);

	//functions

	var animatedScroll = function(){
		$('a[href^=#]').click(function(){
			var $target = $(this.hash);
			if ($target.length) {
				var targetOffset = $target.offset().top;
				$('html,body').animate({scrollTop: targetOffset - 70 + 'px'}, 750);
				return false;
			}
		});
	}

	var animatedHeader = function(){
				if($('.left-header').hasClass('left-header-close')){
			$('.left-header').removeClass('left-header-close').addClass('left-header-open');
		}else{
			$('.left-header').removeClass('left-header-opan').addClass('left-header-close');
		}
	}


	//Traitement

	animatedScroll();

	$('.hamburger-button').click(function(){
		animatedHeader();
	});
	$('.dashboard img').click(function(){
		animatedHeader();
	});

	$('.correction').click(function(){
		$('.correct').css('color','#2ecc71')
		$('.false').css('color','#e74c3c')
	});

	$('.login-container a').click(function(){
	});




});//end doc