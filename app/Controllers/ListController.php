<?php

class ListController
{
	public $OrderArray;
	public function List()
	{
		$OrderArray= $this->GetList();
		require 'app/Views/list.view.php';
	}

	public static function GetList()
	{
		$order = new OrderModel();
		return $order->ListAll();
	}
	
}

