<?php

class EditController
{
	public function edit()
	{
		$name = "Editieren";
		$Order = new OrderModel();
		$Order->FindOrderByID(28);
		;
		if(!isset($Order->name)){
			header("Location: / ");
			Die("<script>alert(\"Ungültige Auftrags-ID.\")</script>");
		}
		require 'app/Views/input.view.php';
		var_dump($Order);
		//not finished
		
		if ($_SERVER['REQUEST_METHOD'] === 'GET') {
			$Order->FindOrderByID($_GET['id']);

            header('Location: task-model');

        }
	}
	
}

