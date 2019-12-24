<?php 
	class User {
		public $username="This is username";
		public $email;
		public $password;
		public $phone;
		public $address;

		private function Add() {
			echo "This is Add Method";
		}
		protected function Edit() {
			echo "This is Edit method";

		}
		public function Register() {
			echo "This is Register method";
		}
		public function Login() {
			
		}
		public function View() {
			
		}
		private function List() {
			
		}
		//goi lai ham Add
		public function echo() {
			$this->Add();
			echo "<br>";
		}
	}
	/**
	 * 
	 */
	class Customer extends User
	{
		public $address_receive;
		public $id;

		public function Pay() {
			echo "This is Pay method";
		}
		public function History() {

		}
		//goi lai ham edit
		public function test(){
			$this->Edit();
		}
		
	}
	//Xuat ra then Add bi private
	$user = new User();
	$user->echo();
	//Xuat ra then test bi protected
	$customer = new Customer();
	$customer->test();
	//xuat ra bien username
	echo "<br>".$customer->username;
?>