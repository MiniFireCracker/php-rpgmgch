<?php

require_once'User.php';

	class Client extends User {

		private $_billAmount=0;

		private $_cart = [];

		public function getCart(){
			return $this->_cart;
		}

		public function setCart($product){
			$this->_cart = $product;
		}

		public function getBillAmount(){
			 $this->_billAmount;
		}
		public function updateBillAmount($product){
			$newCartValue= $this->_billAmount += $product;
			$this->_billAmount = $newCartValue;
		}

		public function addProductToCart($product){
			$this->_cart[] = $product;

		}

		public function buy($product){	

			$this->addProductToCart($product->getName());
			$this->updateBillAmount($product->getPrice());
	//A chaque fois qu'un client achète un produit, sa facture augment du prix du produit et ce produit est ajouté au panier.
		}

	}

?>