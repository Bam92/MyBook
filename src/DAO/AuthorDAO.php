<?php

namespace OC_MyBooks\DAO;

use OC-MyBooks\Domain\Author;


class AuthorDAO extends DAO
{
	
	/**
	* Retrun a list of all authors, sorted by first name
	* @return array A list of all author
	*/
	public function findAll ()
	{
		$sql = "SELECT * FROM author ORDER BY auth_first_name ASC";
		$result = $this->db()->fetchAll($sql);

		// Convert query result to array of domain ojects
		$authors = array();
		foreach ($result as $row) 
		{
			$authorId = $row['author_id'];
			$authors['$authorId'] = $this->buildObjectDomain($row);
		}
		return $authors;
	}

	/**
	/* Return an author matching the supplied id
	* @param integer $id
	* @return \OC-MyBooks\Domain\Author|throws an exception if no matching author is found
	*/  
	public function find($id)
	{
		$sql = "SELECT * FROM author WHERE auth_id = ?";
		$row = $this->db()->fetchAssoc($sql, array($id));

		if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("No author matching id " . $id);
	}

	/**
     * Creates an Author object based on a DB row.
     *
     * @param array $row The DB row containing Author data.
     * @return \OC-MyBooks\Domain\Author
     */
    protected function buildDomainObject(array $row) {   
        $author = new Author();
        $author->setId($row['author_id']);
        $author->setFirstName($row['auth_first_name']);
        $author->setLastName($row['auth_last_name']);
        return $author;
    }
}