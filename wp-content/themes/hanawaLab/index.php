<!DOCTYPE html>
<html lang="jp">
<head>
	<meta charset="UTF-8">
	<title>HanawaLab.</title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<link href="https://fonts.googleapis.com/css?family=Share+Tech" rel="stylesheet">
</head>
<body <?php body_class(); ?> >

	<header class="header">
		<section>
			<div class="logo-path sharetech">
				<a href="/"><h2><img src="<?php bloginfo('template_directory'); ?>/images/common/logo.png" alt=""></h2></a>
				<a class="directory" href="/">Home</a>
			</div>
		</section>
	</header>
	<main class="main index">
		<section class="site-title">
			<div class="site-title-main lag-shadow">
				<img src="<?php bloginfo('template_directory'); ?>/images/top/title.png">
			</div>
			<p class="site-title-sub sharetech">Nagoya City University − School of Design & Architecture</p>
		</section>
		<section class="about dropshadow">
			<div class="h2">
				<div class="lag-shadow icon">
					<img src="<?php bloginfo('template_directory'); ?>/images/top/i-about.png">
				</div>
				<h2>About HANAWA Lab</h2>
			</div>
			<p class="about-description">
				とうてい単に矛盾をしますばみませものにしただ。そうしてまたご支を愛するのはたった新たと作っまして、その人格がしか利くでしからといった他人にありから切らますたら。その時自分のためその他は何中をもたですかと大森さんが思いたた、道の今うというおお話ましですたと、今に遂げよてそのためをまあするましまいとしでしょ事ですが、なしませたばもう少しご専門聞いだ方たいないた。または新か窮屈か謝罪に買うでしょから、場合中支を喜ぶてくれな以上に大学習の場合を降るなけれです。
			</p>
		</section>
		<section class="whats">
			<div class="h2">
				<div class="lag-shadow icon">
					<img src="<?php bloginfo('template_directory'); ?>/images/top/i-whats.png">
				</div>
				<h2>What's New</h2>
			</div>
			<?php if(have_posts()): while(have_posts()): the_post(); ?>
			<article <?php post_class(); ?>>
				<img class="thumb" src="http://news-kuwashiku.blog.so-net.ne.jp/_images/blog/_867/news-kuwashiku/ousakajun.png" alt="">
				<div class="content dropshadow">
					<h1><?php the_title(); ?></h1>
				</div>
			</article>
			<?php endwhile; endif; ?>
		</section>
	</main>
	<footer class="footer">
		<small class="copyright">&copy; 2016 HanawaLab.</small>
	</footer>
</body>
</html>
