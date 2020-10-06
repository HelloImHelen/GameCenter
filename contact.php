<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
	<title>GameCenter</title>
  	<link rel="stylesheet" href="css/zerogrid.css">
	  <link rel="stylesheet" href="css/style1.css">
	  <link rel="stylesheet" href="css/star1.css">
	
	<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	
	<link rel="stylesheet" href="css/menu.css">
	<script src="js/jquery1111.min.js" type="text/javascript"></script>
	<script src="js/script.js"></script>
	
	<!-- Owl Carousel Assets -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
	
	
	
	
</head>

<body class="contact-page">
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
				</ul>
			</div>
		</header>
		<!--////////////////////////////////////Container-->
		<hr>
		<section id="container">
		<div class="zerogrid">
                        <div class="wrap-box"><!--Start Box-->
						<?php 
						
						$game =  get_all_games(); 
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
												<div class="l-tags"><?=$ge['category_game']?>/<?=$ge['cost_game']?>р</div> 
												<div class="l-tags"><?=$ge['name_usr']?></div> 
												<div class="rating-mini">
												<span class="<?php if ($ge['raiting_game'] >= 1) echo 'active'; ?>"></span>	
												<span class="<?php if ($ge['raiting_game'] >= 2) echo 'active'; ?>"></span>	
												<span class="<?php if ($ge['raiting_game'] >= 3) echo 'active'; ?>"></span>	
												<span class="<?php if ($ge['raiting_game'] >= 4) echo 'active'; ?>"></span>	
												<span class="<?php if ($ge['raiting_game'] >= 5) echo 'active'; ?>"></span>	
												</article>  
										
									
                                 </div>
                                    <?php endforeach; ?> 
							</div>
                            
					
						</div>
					</div>





				<!-----------------Content-Box-------------------->
				<section class="content-box zerogrid">
					<div class="row wrap-box"><!--Start Box-->
						<h3 class="t-center" style="font-size: 30px;margin: 10px 0 30px">Контактная форма</h3>
					
						<div id="contact_form">
							<form name="form1" id="ff" method="post" action="add_view.php">
													<div align="center">
													<label>Ваша оценка игре</label>
													<select name="gg">
													<?php  $book = get_games(); ?>
													<?php foreach($book as $books): ?>
													<option><?=$books['name_game']?></option>
													<?php endforeach; ?>
													</select>
													</div>

							<div class="rating-area">
								<input type="radio" id="star-5" name="rating" value="5">
								<label for="star-5" title="Оценка «5»"></label>	
								<input type="radio" id="star-4" name="rating" value="4">
								<label for="star-4" title="Оценка «4»"></label>    
								<input type="radio" id="star-3" name="rating" value="3">
								<label for="star-3" title="Оценка «3»"></label>  
								<input type="radio" id="star-2" name="rating" value="2">
								<label for="star-2" title="Оценка «2»"></label>    
								<input type="radio" id="star-1" name="rating" value="1">
								<label for="star-1" title="Оценка «1»"></label>
							</div>

								<label class="row">
									<div class="col-1-2">
										<div class="wrap-col">
											<input type="text" name="name" id="name" placeholder="Enter name" required="required" />
										</div>
									</div>
									<div class="col-1-2">
										<div class="wrap-col">
											<input type="email" name="email" id="email" placeholder="Enter email" required="required" />
										</div>
									</div>
								
								</label>
								<label class="row">
									<div class="wrap-col">
										<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
										placeholder="Message"></textarea>
									</div>
								</label>
								<center><input class="sendButton" type="submit" name="submitcontact" value="Submit"></center>
							</form>
						</div>
					</div>
				</section>
				
			</div>
		</section>
		<!--////////////////////////////////////Footer-->
		<footer>

<div class="zerogrid bottom-footer">
	<div class="row">
		<div class="bottom-social">
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-instagram"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-google-plus"></i></a>
			<a href="#"><i class="fa fa-pinterest"></i></a>
			<a href="#"><i class="fa fa-vimeo"></i></a>
			<a href="#"><i class="fa fa-linkedin"></i></a>
			<a href="#"><i class="fa fa-youtube"></i></a>
		</div>
	</div>
	<div class="copyright">
Hello, my name is Helen  
</a>
	</div>
</div>
</footer>
	</div>

</body>
</html>