<?php

	namespace OC_MyBooks\Domain;

	
	class Book
	{
		/**
		* Book id.
		* @var integer
		*/
		private $_id;

		/**
		* Book title.
		* @var string
		*/
		private $_title;

		/**
		* Book isbn.
		* @var string
		*/
		private $_isbn;

		/**
		* Book summary.
		* @var string
		*/
		private $_summary;

		/**
		* Associated author.
		* @var \OC-MyBooks\Domain\Author.php
		*/
		private $_author;

		public function id ()
		{
			return $this->_id;
		}

		public function setId ($id)
		{
			$id = (int) $id;

			if ($id > 0) 
			{
				$this->_id = $id;
			}
		}

		public function title ()
		{
			return $this->_title;
		}

		public function setTitle ($title)
		{
			$this->_title = $title;
		}

		public function isbn ()
		{
			return $this->_isbn;
		}

		public function setIsbn ($isbn)
		{
			$this->_isbn = $isbn;
		}

		public function summary ()
		{
			return $this->_summary;
		}

		public function setSummary ($summary)
		{
			$this->_summary = $summary;
		}

		public function author ()
		{
			return $this->_author;
		}

		public function setAuthor (Author $author)
		{
			$this->_author = $author;
		}
	}

	