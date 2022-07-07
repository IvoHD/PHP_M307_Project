<?php

class EditController
{
	public function edit()
	{
		$name = "Editieren";
		$Order = new OrderModel();
		$Order->FindOrderByID(4);
		//not finished
		require 'app/Views/edit.view.php';

	}
	
}

