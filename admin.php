<!DOCTYPE html>
<html lang="en">
<head>
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
 <div id="cssmenu" class="align-center">
				<ul>
                    <li><a href="index.php"><span>Вас приветсвуе админ панель</span></a></li>	
</ul>
</div>
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
												<div class="l-tags"><?=$ge['name_usr']?>: <?=$ge['comm']?></div> 
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


					<section class="content-box zerogrid">
					<div class="row wrap-box"><!--Start Box-->
						<h3 class="t-center" style="font-size: 30px;margin: 10px 0 30px">Форма добавления игр</h3>
					
						<div id="contact_form">
							<form name="form1" id="ff" method="post" action="add_game.php">

								<label class="row">
									<div class="col-1-2">
										<div class="wrap-col">
											<input type="text" name="name_game" placeholder="Enter name game" required="required" />
										</div>
									</div>
									<div class="col-1-2">
										<div class="wrap-col">
											<input type="text" name="category_game" placeholder="Enter category game" required="required" />
										</div>
									</div>
									<div class="col-1-2">
										<div class="wrap-col">
											<input type="text" name="photo_game"  placeholder="Enter url photo" required="required" />
										</div>
									</div>
									<div class="col-1-2">
										<div class="wrap-col">
											<input type="text" name="cost_game"  placeholder="Enter cost game" required="required" />
										</div>
									</div>
								
								</label>

								
								<center><input class="sendButton" type="submit" name="submitcontact" value="Submit"></center>
							</form>
						</div>
					</div>
				</section>
				    

</body>
</html>