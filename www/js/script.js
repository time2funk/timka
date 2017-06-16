//	Г Л А В Н Ы Й	П О Т О К
$( main() );

//	Ф У Н К Ц И И
function Resize_height(h){
	var win_h = $(window).height()-100;
	if( Check_screen() ){ //desktop
		$('#p_header').css('height', h);
		$('#p_header').css('max-height', win_h);
	}else{
		$('#p_header').css('height', 340);
	}
}
function Check_screen(){
	if( $(document).width() > 846 ){ //desktop
		return true;
	}
	return false;
}
function Check_scroll(){
	if( $(window).scrollTop() > 10){
		return true;
	}
	return false;
}
function Fixed_menu(){
	if( Check_screen() ){ //desktop
		if( Check_scroll() ){
			$('#fixed_menu').addClass('fixed');
			$('#fixed_footer .phones').addClass('fixed');
		}else{
			$('#fixed_menu').removeClass('fixed');
			$('#fixed_footer .phones').removeClass('fixed');
		}
	}else{
		$('#fixed_menu').addClass('fixed');
		$('#fixed_footer .phones').addClass('fixed');
	}
}
function Check_classes(_obj , _class ) {
	if( !Check_screen() ){ //gadgets
		if( _obj.hasClass(_class) ){
			$('#fixed_menu .menu').hide();
			$('#fixed_menu .right_side').addClass('mini');
			$('.menu_btn').addClass('act');
		}else{	//desktop
			$('#fixed_menu .menu').slideDown('fast');
			$('#fixed_menu .right_side').removeClass('mini');
			$('.menu_btn').removeClass('act');
		}
	}else{	
		$('#fixed_menu .menu').show();
		$('#fixed_menu .right_side').removeClass('mini');
		$('.menu_btn').removeClass('act');
	}
}
function Slider(){
	if( Check_screen() && false ){ //desktop
		var obj = $('.slider'),
			ul = obj.find('ul'),
			li = ul.children('li');

			if(li.length > 1){
				var cur_li = li.first(),
					next_li = cur_li.next();
				// console.log(li.first());

				setInterval(function(){
					cur_li.addClass('pt-page-scaleDown');
					setTimeout(function(){
						cur_li.removeClass('pt-page-scaleDown cur-pg');					
					},1000);

					next_li.addClass('pt-page-moveFromRight cur-pg');
					setTimeout(function(){
						next_li.removeClass('pt-page-moveFromRight');
						cur_li = next_li;
					next_li = cur_li.next().length > 0 ? cur_li.next() :  li.first();
					},1000);

					
				}, 5000);
			}
	}
}
function Preloader_off(){
	var $preloader = $('#preloader'),
		$spinner = $preloader.find('.cssload-loader');
	$spinner.fadeOut();
	$preloader.delay(100).fadeOut('slow');
}
//	Ф У Н К Ц И Я	Г Л А В Н О Г О 	П О Т О К А
function main(){
	var h = window.screen.availHeight;
	var w = window.screen.availWidth;
	console.log(h);console.log(w);

	Resize_height(h);

	Preloader_off();

	Slider();

	Fixed_menu();

	Check_classes( $('#fixed_menu'), 'fixed' );

	// С О Б Ы Т И Я
	$(window).scroll(function(){
		Fixed_menu();
		if( $(document).width() < 846 ){
			Check_classes( $('#fixed_menu'), 'fixed' );
		}
	});

	$(window).on( 'resize', function(){
		Resize_height(h);

		Fixed_menu();

		Check_classes( $('#fixed_menu'), 'fixed' );
	} );

	$('.menu_btn').click('fast', function(){
		$('.right_side .menu').toggle();
	});

	$('.li-block').on('click', function(){
		if( $(this).hasClass('active') ){
			$(this).removeClass('active');
		}
		else{
			$('.li-block').removeClass('active');
			$(this).addClass('active');
		}
	});

	// плавный переход по якорям
	$('a[href^="#"]').click(function(){
        var el = $(this).attr('href');
        $('body').animate({
            scrollTop: $(el).offset().top}, 500);
        return false; 
	});
	console.log('ready');
}


	
// $(document).ready(function() {
// 	$("#contactFormModal").submit(function() {
// 		$.ajax({
// 			type: "POST",
// 			url: "rest.php",
// 			data: $(this).serialize()
// 		}).done(function() {
// 			$("#contactFormModal")[0].reset();
// 			submitMSG_3(true, "Success!")
// 		});
// 		return false;
// 	});
// });

