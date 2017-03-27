<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="book.css">
	<title>Mybooks</title>
	
</head>
	<body>
		<header><h1>Mybooks</h1></header>

		<?php foreach ($books as $book): ?>
			<article class="container">
				<h2>
					<?php echo $book->title() ?>
				</h2>  
				<p><?php echo $book->summary() ?></p>
				<p>L'id de cet article est: <?php echo $book->id() ?></p>
			</article>
		<?php endforeach ?>

		<footer class="footer">Mybooks est construit avec PHP, Silex, Twig et Boostrap</footer>

	</body>
</html>