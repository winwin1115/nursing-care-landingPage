<!doctype html>
<html lang="ja">
  	<head>
    	<!-- Required meta tags -->
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />

		<?php wp_head() ?>

    	<title><?php the_title() ?></title>
  	</head>

  	<body>  
  		<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white navbar-custom">
			<div class="container">
				<a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri().'/assets/img/logo.png' ?>" alt=""></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link" aria-current="page" href="#">ホーム</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								企業情報
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="#section_1">1. かいご畑</a></li>
								<li><hr class="dropdown-divider"></li>
								<li><a class="dropdown-item" href="#section_2">2. ココカイゴ転職</a></li>
								<li><hr class="dropdown-divider"></li>
								<li><a class="dropdown-item" href="#section_3">3. 介護ワーカー</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">一括比較</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">お問い合わせ</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<header class="header">
			<div class="header-slider" id="fullscreen-slider">
				<div class="item" style="background-image: url('<?php echo get_template_directory_uri().'/assets/img/banner-1.png'; ?>')">
					<div class="slide-text">
						<h2>資格なし・未経験ＯＫの求人が多い！</h2>
						<p>
							「求人は気になるけど内情がわからなくて不安」「いざ入職したら条件が違う。」<br>
							これらはご自身で転職活動した方から良く聞くお話です。<br>
							紹介する３社では専任のコーディネーターが１対１であなたの就職をサポートします!<br>
							不安点は事前に全てお調べしてお答えさせて頂きますので、ご安心下さい。<br>
							ご相談だけでもOKです！<br>
						</p>
						<a href="#" class="btn btn-theme">
							<span class="btn-icon-header">無料</span> &nbsp; &nbsp; まずは相談してみる &nbsp; &nbsp; <i class="fas fa-chevron-right"></i>
						</a>
					</div>
				</div>

				<div class="item" style="background-image: url('<?php echo get_template_directory_uri().'/assets/img/banner-2.png'; ?>')">
					<div class="slide-text">
						<h2>資格なし・未経験ＯＫの求人が多い！</h2>
						<p>
							「求人は気になるけど内情がわからなくて不安」「いざ入職したら条件が違う。」<br>
							これらはご自身で転職活動した方から良く聞くお話です。<br>
							紹介する３社では専任のコーディネーターが１対１であなたの就職をサポートします!<br>
							不安点は事前に全てお調べしてお答えさせて頂きますので、ご安心下さい。<br>
							ご相談だけでもOKです！<br>
						</p>
						<a href="#" class="btn btn-theme">
							<span class="btn-icon-header">無料</span> &nbsp; &nbsp; まずは相談してみる &nbsp; &nbsp; <i class="fas fa-chevron-right"></i>
						</a>
					</div>
				</div>

				<div class="item" style="background-image: url('<?php echo get_template_directory_uri().'/assets/img/banner-3.png'; ?>')">
					<div class="slide-text">
						<h2>資格なし・未経験ＯＫの求人が多い！</h2>
						<p>
							「求人は気になるけど内情がわからなくて不安」「いざ入職したら条件が違う。」<br>
							これらはご自身で転職活動した方から良く聞くお話です。<br>
							紹介する３社では専任のコーディネーターが１対１であなたの就職をサポートします!<br>
							不安点は事前に全てお調べしてお答えさせて頂きますので、ご安心下さい。<br>
							ご相談だけでもOKです！<br>
						</p>
						<a href="#" class="btn btn-theme">
							<span class="btn-icon-header">無料</span> &nbsp; &nbsp; まずは相談してみる &nbsp; &nbsp; <i class="fas fa-chevron-right"></i>
						</a>
					</div>
				</div>
			</div>	
	</header>
