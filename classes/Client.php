<?php

require_once'User.php';

	class Client extends User {

		public $arrOfProducts = [];
	
		public function buy($Item){	

			$this->addProductToCart($Item);
			$this->SetBillAmount();
	//A chaque fois qu'un client achète un produit, sa facture augment du prix du produit et ce produit est ajouté au panier.
		}

		private $_billAmount;

		private $_cart;

		public function GetCart(){
			return $this->_cart;
		}

		public function GetBillAmount(){
			return $this->_billAmount;
		}

		public function SetCart($arrOfProducts){

			if (is_array( $arrOfProducts)){
				 return $this->_cart = $arrOfProducts;
			}

		}

		public function SetBillAmount(){
			$this->GetCart();
			$CartValue;
			/*foreach($arrOfProducts as $product => $details){
					if($product=='price'){
						$CartValue += $details;
					}
			    }
			*/
			foreach($arrOfProducts as $product){
					$productPrice= $product->getPrice;
						$CartValue += $productPrice;
					}
			    }
			return $CartValue;

		}

		public function addProductToCart($Item){

			array_push($this->SetCart($arrOfProducts),$product);	

		}

	}

?>