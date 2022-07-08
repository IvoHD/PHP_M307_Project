<?php

class InputController
{
	public OrderModel $order;// Doing it this way, results in object function not being not initialized...?

	public function input()
	{
		$order = new OrderModel();
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
		header("Location: \ ");
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

		$order->Edit($id, $name, $email, $tel, $category, $isDried, $fruit);
		header("Location: \list");
	}

	function DisplayAdd()
	{
		$fruitDropdown = $this->LoadFruitDropDown();
		$name = "Hinzufügen";
		$buttonAction = "add";
		$backButtonAction = "/";
		$reset = "<input type=\"reset\" value=\"Zurücksetzten\"><br>";
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
			$fruitDropdown = $this->LoadFruitDropDown();
			$buttonAction = "edit?id={$id}";
			$backButtonAction = "list";
			require 'app/Views/input.view.php';
		}
	}

	function LoadFruitDropDown(){
		$order = new OrderModel();
		$allFruits = $order->ListAllFruits();
		$result = "";
		$id = $_GET['id'];

		foreach($allFruits as $fruit){
			$selected = "";
			if($fruit['id'] == $id)
				$selected = "selected=\"true\"";
			$result = $result . "\n" . "<option value = {$fruit['id']} {$selected}>{$fruit['name']}</option>";
		}

		return $result;
	}

}

