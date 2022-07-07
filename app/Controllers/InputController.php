<?php

class InputController
{
	//public OrderModel $Order; Doing it this way, results in object function not being not initialized...?

	public function input()
	{
		$id = $_GET['id'];
		if ($id == null)
			$this->DisplayAdd();
		else{
			$this->ValidateGet();
		}
			
	}

	public function add() {
		echo "ok";
	}


	function DisplayAdd()
	{
		$name = "Hinzufügen";
		$buttonAction = "/add";
		require 'app/Views/input.view.php';
	}

	function ValidateGet() {
		$Order = new OrderModel();
		$id = trim($_GET['id']);
		if($id != "") 
			$Order->FindOrderByID($id);

		if(!isset($Order->name)){
			$this->DisplayAdd();
			echo "<script>alert(\"Ungültige Auftrags-ID.\")</script>";
		}
		else {
			$name = "Editieren";
			$buttonAction = "/list";
			require 'app/Views/input.view.php';
		}
	}
}

