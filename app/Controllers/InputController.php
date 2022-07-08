<?php

class InputController
{
	//public orderModel $order; Doing it this way, results in object function not being not initialized...?

	public function input()
	{
		$this->LoadFruitDropDown();
		$id = $_GET['id'];
		if ($id == null)
			$this->DisplayAdd();
			else{
			$this->ValidateGet();
		}
		
	}
	
	public function add() {
		$name = $_POST['name'];
		$email= $_POST['email'];
		$tel = $_POST['tel'];
		$category = $_POST['category'];
		$fruit = $_POST['fruit'];
		$isDried = $_POST['isDried'] ?  : false;

		$order = new OrderModel();
		$order->add($name, $email, $tel, $category, $isDried, $fruit);
	}

	function edit(){
		$order = new OrderModel();

		$id = $_GET['id'];
		$name = $_POST['name'];
		$email= $_POST['email'];
		$tel = $_POST['tel'];
		$category = $_POST['category'];
		$fruit = $_POST['fruit'];
		$isDried = $_POST['isDried'] ?  : false;

		$order = new OrderModel();
		$order->edit($id, $name, $email, $tel, $category, $isDried, $fruit);
	}

	function DisplayAdd()
	{
		$name = "Hinzufügen";
		$buttonAction = "add";
		$backButtonAction = "/";
		require 'app/Views/input.view.php';
	}
	
	function ValidateGet() {
		$order = new OrderModel();
		$id = trim($_GET['id']);
		if($id != "") 
			$order->FindorderByID($id);

		if(!isset($order->name)){
			$this->DisplayAdd();
			echo "<script>alert(\"Ungültige Auftrags-ID.\")</script>";
		}
		else {
			$name = "Editieren";
			$buttonAction = "edit?id={$id}";
			$backButtonAction = "list";
			require 'app/Views/input.view.php';
		}
	}

	function LoadFruitDropDown(){
		echo "";
	}

}

