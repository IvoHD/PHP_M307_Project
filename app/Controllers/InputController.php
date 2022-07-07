<?php

class InputController
{
	public function input()
	{
		$name = "Editieren";
		$Order = new OrderModel();
		if ($_SERVER['REQUEST_METHOD'] === 'GET') {
			$id = trim($_GET['id']);
			if($id != "") {
				$Order->FindOrderByID($id);
			}
		}

		if(!isset($Order->name)){
			$Order->FindOrderByID(1);
			require 'app/Views/input.view.php';

			echo "<script>alert(\"Ungültige Auftrags-ID.\")</script>";
		}
		else
			require 'app/Views/input.view.php';	
	}
}

