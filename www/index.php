
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Детский садик">
		<meta name="keywords" content="Baby,babycenter,timka">
		<meta name="author" content="Nikita Ridnikov">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style/css/bootstrap.min.css">
		<link rel="stylesheet" href="style/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="style/css/font-awesome.min.css">
		<link rel="stylesheet" href="style/css/animations.css">
		<link rel="stylesheet" href="style/css/load.css">
		<link rel="stylesheet" href="style/css/style.css">		
		<link rel="stylesheet" href="style/css/media.css">
		<title>Главная страница</title>
	</head>
	<body>	
		<div id="preloader">
			<div class="cssload-loader"></div>
		</div>	

		<div id='fixed_menu'>
			<div class="menu_btn">
				<div class="stick"></div>
				<div class="stick"></div>
				<div class="stick"></div>
			</div>

			<div class='left_side'>
				<div class='logo'>
					<img src="img/logo.gif">
				</div>
			</div>
			
			<div class='right_side'>
				<div class='menu'>
					<ul>
						<li>
							<a href=""><span>Главная</span></a>
						</li>
						<li>
							<a href="conditions/index.php"><span>Условия</span></a>
						</li>
						<li>
							<a href="goodtoknow/index.php"><span>Полезно знать</span></a>
						</li>
						<li>
							<a href="contacts/index.php"><span>Контакты</span></a>
						</li>
					</ul>
				</div>

			</div>
		</div>
<style>
	#p_header .slider .img_1{
	    background: url('img/kids2.jpg');
	    background-position: center;
	    background-repeat: no-repeat;
	    background-size: 100%;
	}
	#p_header .slider .img_2{
	    background: url('img/kids3.jpg') 100%;
	    background-position: center;
	    background-repeat: no-repeat;
	    background-size: 100%;
	}
	#p_header .slider .img_3{
	    background: url('img/kids.jpg') 100%;    
	    background-position: center;
	    background-repeat: no-repeat;
	    background-size: 100%;
	}
	body{
	    background: url('img/pole.jpg'),rgb(255, 232, 189);
	    background-position: center;
	    background-repeat: no-repeat;
	    background-size: 100%;
	    background-attachment: fixed;
	}

	#p_header .main_img{
		height:100%;
		position: relative;
	}
	#p_header .front_block{
		background: url('img/start_front.png');
	    height: 100%;
	    width: 100%;
	    background-size: 100%;
	    background-position-x: center;
	    background-position-y: bottom;
	    background-repeat: no-repeat;
	    position: absolute;
    	top: 0;
	}
	#p_header #back_block{
		/*background: url('img/start_back.png');*/
		height: 100%;
	    width: 100%;
	    background-size: 100%;
	    background-position-x: center;
	    background-position-y: bottom;
	    background-repeat: no-repeat;
	    position: absolute;
    	top: 0;
	}
</style>
	
		<div id="p_header">
			<div class="main_img">
				<div id="back_block"></div>
				<div class="front_block"></div>
			</div>
			<div class="title">
				<div class='container'>
					<div class='main_title col-sm-offset-3 col-sm-6'>
						<h1>Ваш детский садик</h1>
					</div>
				</div>
			</div>		
		</div>


		<div id="advantage_blocks">
			<div class="container">
				<div class="title">
					<h2>Что мы предлагаем?</h2>
				</div>

				<div class="container i_blicks" >
					<div class=' col-sm-12'>

						<div class="block col-sm-4">
							<img src="img/icon1.png">
							<h3>Почему мы</h3>
							<span>
								Текст-«рыба» имеет функцию заполнения места или сравнения воздействия рисунков шрифта
								Рыбным текстом называется текст, служащий для временного наполнения макета в публикациях или производстве веб-сайтов, пока финальный текст еще не созда	
							</span>
						</div>
						<div class="block col-sm-4">
							<img src="img/icon1.png">
							<h3>Почему не они</h3>
							<span>
								Текст-«рыба» имеет функцию заполнения места или сравнения воздействия рисунков шрифта
								Рыбным текстом называется текст, служащий для временного наполнения макета в публикациях или производстве веб-сайтов, пока финальный текст еще не создан. 
							</span>
						</div>
						<div class="block col-sm-4">
							<img src="img/icon1.png">
							<h3>Оправданая стоимость</h3>
							<span>
								Текст-«рыба» имеет функцию заполнения места или сравнения воздействия рисунков шрифта
							</span>
						</div>

					</div>	
				</div>	

			</div>
		</div>

<style >
#mail_form .inut_place p{
	margin: 0 0 25px;
}
</style>
		<div id="mail_form">
			<div class="form_wrap">
				<div class="container">
			        <div class="col-sm-offset-3 col-sm-6" style='text-align: center;'>

			        	<h3>Заявка на поступление</h3>

			            <!-- Форма заявки -->
			            <form id="consultationForm" data-id="phoneRequest" onsubmit="core.consultation(); return false;" method="post" class="" novalidate="">
			                    <div class="input_place">
			                        <p>
							        	<span class="your-name">
							        		<span class="icon">
							        			<i class="fa fa-user" aria-hidden="true"></i>
							        		</span>
											<input type="text" data-id="need" name="your-name" size="40" class="" aria-required="true" id="consultation_name" placeholder="Имя ребенка">
										</span>
			                        </p>
			                    </div>

			                    <div class="input_place">
			                        <p>
							        	<span class="your-name">
							        		<span class="icon">
							        			<i class="fa fa-user" aria-hidden="true"></i>
							        		</span>
											<input type="text" data-id="need" name="your-name" size="40" class="" aria-required="true" id="consultation_name" placeholder="Возраст ребенка">
										</span>
			                        </p>
			                    </div>
			                    <div class="input_place">
			                        <p>
							        	<span class="your-name">
							        		<span class="icon">
							        			<i class="fa fa-user" aria-hidden="true"></i>
							        		</span>
											<input type="text" data-id="need" name="your-name" size="40" class="" aria-required="true" id="consultation_name" placeholder="Ваше имя">
										</span>
			                        </p>
			                    </div>

			                    <div class="input_place">
			                        <p>
							        	<span class="your-phone">
							        		<span class="icon" style=""><i class="fa fa-mobile" aria-hidden="true"></i></span>
											<input type="text" data-id="need" name="your-phone" size="40" class="" aria-required="true" id="consultation_phone" placeholder="Ваш телефон">
										</span>
			                        </p>
			                    </div>

			                    <div>
			                        <p>
			                            <input type="submit" value="Отправить заявку" class="b-submit">
			                        </p>
			                    </div>
			            </form>
			            <!--/ Форма заявки -->
			        </div>
			    </div>				
			</div>

	    </div>


		<!-- скудный паралакс с body-background -->


		<div id="about">
			<div class='container'>
				<h2>Немного о нас</h2>
				<span class='col-sm-offset-1 col-sm-10'>
					Текст-«рыба» имеет функцию заполнения места или сравнения воздействия рисунков шрифта
					Рыбным текстом называется текст, служащий для временного наполнения макета в публикациях или производстве веб-сайтов, пока финальный текст еще не создан. Рыбный текст также известен как текст-заполнитель или же текст-наполнитель. Иногда текст-«рыба» также используется композиторами при написании музыки. Они напевают его перед тем, как сочинены соответствующие слова. Уже в 16-том веке рыбные тексты имели широкое распространение у печатников.

					Целенаправленность при одновременной бессмысленности содержания
				</span>
			</div>
		</div>


		<div id="hole_wrap">
			<div id="hole"></div> 	
		</div>


		<div id="fixed_footer">
<!-- 			<div class='phones'>
				<span>+38 (050) 777 77 77</span>
			</div> -->

			<div class="container">
				<div class="site_map col-sm-12">
					<div class='col-sm-3'>
					</div>
					<div class='col-sm-3'>
						<h4>Главная</h4>
						<ul>
							<li><a href="#about">О нас</a></li>	
							<li><a href="#advantage_blocks">Что мы предлагаем?</a></li>
							<!-- <li><a href="#WhyWe">Почему Тимка?</a></li> -->
							<li><a href="#mail_form">Отправить заявку</a></li>
						</ul>
					</div>
					<div class='col-sm-3'>
						<h4>Условия</h4>
						<ul>
							<li><a href="#">Режим дня</a></li>
							<li><a href="#">Питание</a></li>
							<li><a href="#">Интерьер</a></li>
							<li><a href="#">Мед. кабинет</a></li>
							<li><a href="#">Персонал</a></li>
							<li><a href="#">Безопасность</a></li>
						</ul>
					</div>
					<div class='col-sm-3'>
						<h4>Полезно знать</h4>
						<ul>
							<li><a href="#">О нас</a></li>
							<li><a href="#">Почему Тимка?</a></li>
							<li><a href="#">Отправить заявку</a></li>
							<li><a href="#">О нас</a></li>
							<li><a href="#">Почему Тимка?</a></li>
							<li><a href="#">Отправить заявку</a></li>
						</ul>
					</div>
					<!-- <div class='col-sm-3'>
						<h4>Контакты</h4>
						<p>График работы: 08:00 - 19:00</p>
						<p>( будние дни )</p>
						<span>раен улица дом</span>
					</div>	 -->			
				</div>
			</div>
		</div>
	</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="js/parallax.min.js"></script>
<script>//parallax
	$('#back_block').parallax({imageSrc: 'img/start_back.png'});
	$('#advantage_blocks').parallax({imageSrc: 'img/fon.jpg'});
</script>
<script src="js/script.js"></script>
