<?php

	class User {
		private $_id;
		private $_email;
		private $_createdAt;

		public function __construct(  int $id, string $email) //,DateTime $date)
		{

			$this->_id = $id;
			$this->_email = $email;
			$this->_createdAt = new DateTime();
			//$this->_createdAt = $date;
		}

		public function getId()
		{
			return $this->_id;
		}

		public function getEmail()
		{
			return $this->_email;
		}

		public function getDate()
		{
			return $this->_createdAt->format('d/m/Y') ;
		}
		
	}

?>