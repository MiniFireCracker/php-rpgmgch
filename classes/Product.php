<?php

	class Product {
	
		private $_id;
		private $_name;
		private $_price;

		public function __construct( $id, $name, $price)
		{
			$this->_id = $id;
			$this->_name =$name;
			$this->_price = $price;
		}

		public function getId()
		{
			return $this->_id;
		}

		public function getName()
		{
			return $this->_name;

		}

		public function getPrice()
		{
			return $this->_price;

		}

		

	}

?>