<?php

namespace OC_MyBooks\DAO;

use Doctrine\DBAL\Connection;
use OC_MyBooks\Domain\Book;


class BookDAO extends DAO
{
	/**
	* @var \OC-MyBooks\DAO\AuthorDAO
	* 
	
	private $authorDAO;

	public function (AuthorDAO $authorDAO)
	{
		$this->authorDAO = $authorDAO;
	}

	/**
     * Return a list of all books for an author, sorted by book_title.
     *
     * @param integer $authorId The author id.
     *
     * @return array A list of all books for the author.
     */

	/**
	* Retrun a list of all books, sorted by book_title.
	* @return array A list of all books
	*/
	public function findAll ()
	{
		$sql = "SELECT * FROM book ORDER BY book_title DESC";
		$result = $this->db()->fetchAll($sql);

		// Convert query result to array of domain ojects
		$books = array();
		foreach ($result as $row) 
		{
			$bookId = $row['book_id'];
			$books[$bookId] = $this->buildDomainObject($row);
		}
		return $books;
	}

	/**
	/* Return a book matching the supplied id
	* @param integer $id
	* @return \OC-MyBooks\Domain\Book|throws an exception if no matching author is found
	*/  
	public function find($id)
	{
		$sql = "SELECT * FROM book WHERE book_id = ?";
		$row = $this->db()->fetchAssoc($sql, array($id));

		if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("No book matching id " . $id);
	}

	/**
     * Creates an Author object based on a DB row.
     *
     * @param array $row The DB row containing Author data.
     * @return \OC-MyBooks\Domain\Author
     */
    protected function buildDomainObject(array $row) {   
        $book = new Book();
        $book->setId($row['book_id']);
        $book->setTitle($row['book_title']);
        $book->setIsbn($row['book_isbn']);
        $book->setSummary($row['book_summary']);
       // $book->setAuthor($row['auth_id']);

        return $book;
    }
}





