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
					<?php echo htmlspecialchars($book['book_title']); ?>
				</h2>  

				<p><?php echo nl2br(htmlspecialchars($book['book_summary'])); ?></p>
			</article>
		<?php endforeach ?>

		<footer class="footer">Mybooks est construit avec PHP, Silex, Twig et Boostrap</footer>

	</body>
</html>