<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>gamecenter</title>
    <!-- CSS
	================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style1.css">
	<link rel="stylesheet" href="css/form_register.css">

	<!-- Custom Fonts -->

	
	<link rel="stylesheet" href="css/menu.css">
	<script src="js/jquery1111.min.js" type="text/javascript"></script>
	<script src="js/script.js"></script>
	
	<!-- Owl Carousel Assets -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">

	
</head>

<body class="home-page">

<?php 

require_once 'connection.php';
require_once 'function.php';

?>
	<div class="wrap-body">
		<header class="">
			<div class="logo">
				<a href="#">Game Center</a>
				<span>Игровой информационный цент компьютерных игр</span>
			</div>
			<div id="cssmenu" class="align-center">
				<ul>
					<li class="active"><a href="index.php"><span>Home</span></a></li>			
					<li><a href="single.php"><span>About</span></a></li>
					<li class="last"><a href="contact.php"><span>Contact</span></a></li>
					<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>
						<ul>
						
							<!-- <li class="last"><a href="login.php"><span >Login</span> </a></li> -->
							<div id="id01" class="modal">
								<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
								<form class="modal-content" method="POST" action="login.php">
									<div class="container">
									<h1>Sign Up</h1>
									<p>Заполните данные формы чтобы войти в аккаунт</p>
									<hr>
									
									<label for="email"><b>Login</b></label>
									<input type="text" placeholder="Enter Login" name="login" required>
									<label for="psw"><b>Password</b></label>
									<input type="password" placeholder="Enter Password" name="psw" required>

									<p>Если у вас нет аккаутна, вы можете <a href="register.php">зарегистрироваться!</a></p>
									<div class="clearfix">
										<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
										<button type="submit" class="signupbtn">Sign Up</button>
									</div>
									</div>
								</form>
								</div>
						</ul>
					</li>
				</ul>
			</div>
			<div id="owl-slide" class="owl-carousel">
				<div class="item">
					<img src="images/123s.jpg" />
				</div>
				<div class="item">
					<img src="images/87555s.jpg" />
				</div>
				<div class="item">
					<img src="images/179977s.jpg" />
					
				</div>
			</div>
		</header>
		<!--////////////////////////////////////Container-->
		<section id="container">
			<div class="wrap-container">
				<!-----------------content-box-1-------------------->
				<section class="content-box box-1">
					<div class="zerogrid">
						<div class="wrap-box"><!--Start Box-->
							<div class="box-header">
								<h2>О НАС</h2>
							</div>
							<div class="box-content">
								<p>Сайт предоставляет самую актуальную информацию о компьютерных играх.</p>
							</div>
						</div>
					</div>
				</section>
				<!-----------------content-box-2-------------------->
				<section class="content-box box-style-1 box-2">
					<div class="zerogrid">
                        <div class="wrap-box"><!--Start Box-->
						<?php 
						$page = isset($_GET['page']) ? $_GET['page']:1;
						$limit = 6;
						$offset = $limit*($page - 1);
						$game = get_game($limit, $offset); 
						?> 
                       
					
                          
                            <div class="grid">
                            <?php foreach($game as $ge): ?> 
									<div class="item">          
                                          
										<article>
                                       
											<div class="post-thumbnail-wrap">
												<a href="single.html" class="portfolio-box"> 
                                                 <img src="<?=$ge['photo_game']?>" alt=""> 
                                                 </a> 
                                                </div> 
                                                <div class="entry-header "> 
                                                <h3 class="entry-title"><?=$ge['name_game']?></h3> 
                                                <div class="l-tags"><?=$ge['category']?>/<?=$ge['cost_game']?>р</div> 
											</div>
                                        </article>
                                     
                                 </div>
                                    <?php endforeach; ?> 
							</div>
                            
					
						</div>
					</div>
                </section>

				<div class = "page-header" align="center">
				<h1>Страницы</h1>
				<select name ="pageselect" id="pageselect" class="form-control">
				<option value="1">Страница 1</option>
				<option value ="2">Страница 2</option>
	
				</select>
				</div>
				<hr>
             	<section class="content-box box-1">
					<div class="zerogrid">
						<div class="wrap-box"><!--Start Box-->
							<div class="box-header">
								<h2>Новости</h2>
							</div>
						
						</div>
					</div>
				</section>
				<!-----------------content-box-4-------------------->
				<section class="content-box box-style-1 box-4">
					<div class="zerogrid" style="width: 100%">
						<div class="wrap-box"><!--Start Box-->
							<div class="row">
								<article>
									<div class="col-1-2">
										<img src="images/78.jpg" alt="">
									</div>
									<div class="col-1-2">
										<div class="entry-content t-center">
											<h3>Disintegration</h3>
											<p>IGN продолжает делиться геймплейными роликами из гибридного шутера Disintegration. На очереди полное прохождение миссии из середины сюжетной кампании.

К моменту, который демонстрируется в видео, главный герой успел набрать в команду несколько новых бойцов и навесить на свой гравицикл пару мощных пушек, наносящих урон по площади. Также можно увидеть новых противников — например, воздушных дронов, местных джаггернаутов и мини-босса.

Дополнительные 40 минут игрового процесса, только в основном из начала игры, смотрите в этой новости. Спойлеров нет ни в предыдущих роликах, ни в том, что ждёт вас ниже..</p>
											<a class="button" >Read More</a>
										</div>
									</div>
								</article>
							</div>
							<div class="row">
								<article>
									<div class="col-1-2 f-right">
										<img src="images/79.jpg" alt="">
									</div>
									<div class="col-1-2">
										<div class="entry-content t-center">
											<h3> Ghost Recon: Breakpoint</h3>
											<p>Провал Ghost Recon: Breakpoint ой как больно аукнулся Ubisoft. Настолько, что компании пришлось перенести релиз нескольких крупных игр и переориентироваться на поиск уникальных идей. Как сообщает сайт Video Games Chronicle, компания также заморозила один из неназванных проектов и собирается провести реструктуризацию в редакционной команде.

Отложить в долгий ящик издательство решило как минимум одну игру, над которой работало подразделение в Монреале. </p>
											<a class="button">Read More</a>
										</div>
									</div>
								</article>
							</div>
							<div class="row">
								<article>
									<div class="col-1-2">
										<img src="images/80.jpg" alt="">
									</div>
									<div class="col-1-2">
										<div class="entry-content t-center">
											<h3>World of Horror</h3>
											<p>World of Horror — стилизованное однобитное приключение. Его рисует девелопер-одиночка, 
который использует самый обыкновенный Paint. А вот источниками вдохновения послужили более грандиозные вещи: книги Лавкрафта (H. P. Lovecraft) и иллюстрации Дзюндзи Ито (Junji Ito) — известного мастера по ужасам из Японии.

Место действия — маленький японский городок возле моря. Старые боги пробуждаются снова и постепенно сводят с ума тех, кто зовёт это место домом. Наступает конец света. Разные колоды открывают разные кусочки повествовательного пазла, а самые внимательные смогут отыскать особые предметы, которые помогут в пошаговых боях против потусторонних существ.</p>
											<a class="button" >Read More</a>
										</div>
									</div>
								</article>
							</div>
						</div>
					</div>
				</section>
			</div>
		</section>
		<!--////////////////////////////////////Footer-->
		<footer>

			<div class="zerogrid bottom-footer">
	
				<div class="copyright">
         Hello, my name is Helen  
        
				</div>
			</div>
		</footer>
        <!-- carousel -->
        
 

		<script src="owl-carousel/owl.carousel.js"></script>
		<script>
		$(document).ready(function() {
		  $("#owl-slide").owlCarousel({
			autoPlay: 3000,
			items : 1,
			itemsDesktop : [1199,1],
			itemsDesktopSmall : [979,1],
			itemsTablet : [768, 1],
			itemsMobile : [479, 1],
			navigation: true,
			navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
			pagination: false
		  });
		});
		</script>

<script>

function getUrlParameter(url, parameter) {
  parameter = parameter.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
  var regex = new RegExp('[\\?|&]' + parameter.toLowerCase() + '=([^&#]*)');
  var results = regex.exec('?' + url.toLowerCase().split('?')[1]);
  return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
}

function setUrlParameter(url, key, value) {

  var baseUrl = url.split('?')[0],
    urlQueryString = '?' + url.split('?')[1],
    newParam = key + '=' + value,
    params = '?' + newParam;

  // If the "search" string exists, then build params from it
  if (urlQueryString) {
    var updateRegex = new RegExp('([\?&])' + key + '[^&]*');
    var removeRegex = new RegExp('([\?&])' + key + '=[^&;]+[&;]?');

    if (typeof value === 'undefined' || value === null || value === '') { // Remove param if value is empty
      params = urlQueryString.replace(removeRegex, "$1");
      params = params.replace(/[&;]$/, "");

    } else if (urlQueryString.match(updateRegex) !== null) { // If param exists already, update it
      params = urlQueryString.replace(updateRegex, "$1" + newParam);

    } else { // Otherwise, add it to end of query string
      params = urlQueryString + '&' + newParam;
    }
  }

  // no parameter was set so we don't need the question mark
  params = params === '?' ? '' : params;

  return baseUrl + params;
}


 var pageSelect = document.getElementById('pageselect');
 var currentPage = getUrlParameter(window.location.href, 'page');

 if (currentPage) {
	pageSelect.value = currentPage;
}

 pageSelect.addEventListener('change',function(event){
		var value = event.target.value;
        window.location.href = setUrlParameter(window.location.href, 'page', value);
 });

</script>



<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


    </div>

</body>
</html>