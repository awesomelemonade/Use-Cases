<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Lemon's Website</title>
	<?php include '/template/css-rqmts/link.php'; ?>
	<link rel="stylesheet" href="/index.css" type="text/css"/>
</head>
<body>
	<?php include '/template/base.php'; ?>
	<?php include '/template/header.php'; ?>
	<div id="wrapper">
		<script src="test.js" type="text/javascript"></script> <!-- TESTING PURPOSES -->
		<ul>
			<li>
				<div class="post-left-bar">
					<!--<h2 class="post-catagory"><span class="rotated">Example Left Bar</span></h2>-->
					<img class="post-image" src="/res/test.png"><!--Image--></img>
				</div>
				<div class="post-content">
					<div class="post-info">
						<h3 class="post-title">Title</h3>
						<h4 class="post-author">John Smith</h4>
					</div>
					
					<p class="post-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam placerat erat cursus tellus dapibus, vitae imperdiet augue ultricies. Donec tincidunt suscipit tellus et feugiat. Nunc id felis urna. Nulla ut nisi tincidunt, venenatis tellus ac, commodo neque. Etiam in euismod nisi. Phasellus sed mauris quam. Aenean sed orci quis eros porttitor aliquet. In at tempor dui. Phasellus lectus sem, posuere facilisis rutrum vel, porta elementum tellus. Vivamus id risus elit. Integer ornare in ligula in commodo. Cras commodo porttitor augue et accumsan. Praesent dignissim venenatis magna, in pulvinar elit posuere et.</p>
					
					<ul class="post-tags">
						<li><img src=""><!--Icon--></img><p class="tag-hover-text">Abstract</p></li> <!-- ADD ICONS -->
						<li><img src=""><!--Icon--></img><p class="tag-hover-text">Realistic</p></li>
						<li><img src=""><!--Icon--></img><p class="tag-hover-text">Featured</p></li>
					</ul>
				</div>
			</li>
			<li>
				<div class="post-left-bar">
					<h2 class="post-catagory"><span class="rotated">Realistic</span></h2>
				</div>
				<div class="post-content">
					<div class="post-info">
						<h3 class="post-title">Title</h3>
						<h4 class="post-author">John Smith</h4>
					</div>
					
					<p class="post-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam placerat erat cursus tellus dapibus, vitae imperdiet augue ultricies. Donec tincidunt suscipit tellus et feugiat. Nunc id felis urna. Nulla ut nisi tincidunt, venenatis tellus ac, commodo neque. Etiam in euismod nisi. Phasellus sed mauris quam. Aenean sed orci quis eros porttitor aliquet. In at tempor dui. Phasellus lectus sem, posuere facilisis rutrum vel, porta elementum tellus. Vivamus id risus elit. Integer ornare in ligula in commodo. Cras commodo porttitor augue et accumsan. Praesent dignissim venenatis magna, in pulvinar elit posuere et.</p>
					
					<ul class="post-tags">
						<li><img src=""><!--Icon--></img><p class="tag-hover-text">Engineering</p></li> <!-- ADD ICONS -->
						<li><img src=""><!--Icon--></img><p class="tag-hover-text">Software</p></li>
						<li><img src=""><!--Icon--></img><p class="tag-hover-text">C++</p></li>
					</ul>
				</div>
			</li>
			<li>
				<div class="post-left-bar">
					<h2 class="post-catagory"><span class="rotated">Catagory</span></h2>
				</div>
				<div class="post-content">
					<div class="post-info">
						<h3 class="post-title">Title</h3>
						<h4 class="post-author">Author</h4>
					</div>
					
					<p class="post-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam placerat erat cursus tellus dapibus, vitae imperdiet augue ultricies. Donec tincidunt suscipit tellus et feugiat. Nunc id felis urna. Nulla ut nisi tincidunt, venenatis tellus ac, commodo neque. Etiam in euismod nisi. Phasellus sed mauris quam. Aenean sed orci quis eros porttitor aliquet. In at tempor dui. Phasellus lectus sem, posuere facilisis rutrum vel, porta elementum tellus. Vivamus id risus elit. Integer ornare in ligula in commodo. Cras commodo porttitor augue et accumsan. Praesent dignissim venenatis magna, in pulvinar elit posuere et.</p>
					
					<ul class="post-tags">
						<li><img src=""><!--Icon--></img><p class="tag-hover-text">Engineering</p></li> <!-- ADD ICONS -->
						<li><img src=""><!--Icon--></img><p class="tag-hover-text">Software</p></li>
						<li><img src=""><!--Icon--></img><p class="tag-hover-text">C++</p></li>
					</ul>
				</div>
			</li>
			<li>
				<div class="post-left-bar">
					<h2 class="post-catagory"><span class="rotated">Catagory</span></h2>
				</div>
				<div class="post-content">
					<div class="post-info">
						<h3 class="post-title">Title</h3>
						<h4 class="post-author">Author</h4>
					</div>
					
					<p class="post-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam placerat erat cursus tellus dapibus, vitae imperdiet augue ultricies. Donec tincidunt suscipit tellus et feugiat. Nunc id felis urna. Nulla ut nisi tincidunt, venenatis tellus ac, commodo neque. Etiam in euismod nisi. Phasellus sed mauris quam. Aenean sed orci quis eros porttitor aliquet. In at tempor dui. Phasellus lectus sem, posuere facilisis rutrum vel, porta elementum tellus. Vivamus id risus elit. Integer ornare in ligula in commodo. Cras commodo porttitor augue et accumsan. Praesent dignissim venenatis magna, in pulvinar elit posuere et.</p>
					
					<ul class="post-tags">
						<li><img src=""><!--Icon--></img><p class="tag-hover-text">Engineering</p></li> <!-- ADD ICONS -->
						<li><img src=""><!--Icon--></img><p class="tag-hover-text">Software</p></li>
						<li><img src=""><!--Icon--></img><p class="tag-hover-text">C++</p></li>
					</ul>
				</div>
			</li>
		</ul>
	</div>
	<?php include '/template/footer.php'; ?>
</body>
</html>