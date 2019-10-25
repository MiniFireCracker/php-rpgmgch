<?php

	require_once'Product.php';


	class Vegetable extends Product {
	
		private $_productorName;
		private $_expiresAt;


		public function __construct($id, $name, $price, $productorName, $expirationDate)
		{
  		parent::__construct($id, $name, $price);
  		$this->_productorName = $productorName;
  		$this->_expiresAt = $expirationDate;
  		}

		public function isFresh()
		{
			$today= new DateTime();

			if($today <= $this->GetExpirationDate()){
				echo parent::name . "is still fresh. Eat away without worrying about a thing. "; 
			}else{
				echo parent::name . "has gone bad. Better stay away. " ;
			}
		}

		public function GetProductorName()
		{
			return $this->_productorName;

		}

		public function GetExpirationDate()
		{
			return $this->_expiresAt;

		}

	}

?>