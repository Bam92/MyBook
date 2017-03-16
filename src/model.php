<?php

// Return all books
function getBooks() {
	try 
	{
		$db = new PDO('mysql:host=localhost;dbname=mybooks;charset=utf8', 'mybooks', 'secret');
	}
	catch (Exception $e)
	{
		die('Erreur :' . $e->getMessage());	
	}

	$books = $db->query('SELECT * FROM book ORDER BY book_id DESC');
	return $books;
}
