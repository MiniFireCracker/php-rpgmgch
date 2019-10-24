<?php

require_once'User.php';

	class Client extends User {
	
		public function buy($Item){	

			$this->addProductToCart($Item);
			$this->SetBillAmount();
	//A chaque fois qu'un client achète un produit, sa facture augment du prix du produit et ce produit est ajouté au panier.
		}

		private $_billAmount;

		private $_cart = [];

		public function getCart(){
			return $this->_cart;
		}

		public function setCart($c){
			$this->_cart = $c;
		}


		public function GetBillAmount(){
			return $this->_billAmount;
		}

		public function SetCart($oneProduct){
			$this->arrOfProducts = $oneProduct;
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
			    
			return $CartValue;

		}

		public function addProductToCart($product, $quantity){

			$this->arrOfProducts[] = [
				"product" => $product,
				"quantity" => $quantity
			];

		}

	}

?>