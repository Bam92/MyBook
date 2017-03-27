<?php

	namespace OC-MyBooks\Domain;

	
	class Author
	{
		/**
		* Author id.
		* @var integer
		*/
		private $_id;

		/**
		* Author firstName.
		* @var string
		*/
		private $_firstName;

		/**
		* Author lastName.
		* @var string
		*/
		private $_lastName;

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

		public function firstName ()
		{
			return $this->_firstName;
		}

		public function setFirstName ($firstName)
		{
			$this->_firstName = $firstName;
		}

		public function lastName ()
		{
			return $this->_lastName;
		}

		public function setLastName ($lastName)
		{
			$this->_lastName = $lastName;
		}
		
	}

	