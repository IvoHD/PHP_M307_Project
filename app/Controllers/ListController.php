<?php

class ListController
{
	public function List()
	{
		require 'app/Views/list.view.php';
		$this->GetList();
	}
	public static function GetList()
	{
		$order = new OrderModel();
		$output = $order->ListAll();
	}
	
}

