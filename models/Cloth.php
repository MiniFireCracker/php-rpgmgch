<?php

	require_once'Product.php';
	
	class Cloth extends Product 
	{
	
		private $_brand;

		public function __construct($id, $name, $price, $brand)
		{
  		parent::__construct($id, $name, $price);
  		$this->_brand = $brand;
  		}
		

		public function try()
		{

		}

		public function GetBrand()
		{
			return $this->_brand;
		}

	}

?>