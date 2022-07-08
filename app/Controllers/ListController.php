<?php

class ListController
{
	public $OrderArray;
	public function List()
	{
		$OrderArray= $this->GetList();
		require 'app/Views/list.view.php';
		var_dump($OrderArray);
		
		echo " 
		<table>
			<tr>
				<th>ID</th>
				<th>Name</th>        
				<th>Email</th>
				<th>TelefonNr.</th>
				<th>Kategorie</th>
				<th>Dörrungsstatus</th>
				<th>Tage vergangen</th>
				<th>Frucht</th>
			</tr>
			";
    
		foreach($OrderArray as $Order)
			echo "
				<tr>
					<th>{$Order['id']}</th>
					<th>{$Order['name']}</th>
					<th>{$Order['email']}</th>
					<th>{$Order['tel']}</th>
					<th>{$Order['category']}</th>
					<th>{$Order['isdried']}</th>
					<th>{$Order['elapseddays']}</th>
					<th>{$Order['fruitid']}</th>
					<th><a href=\"/input?id={$Order['id']}\"><button class=\"\">Editieren</button></a></th>
				</tr>
			";
		echo "</table>";
	}

	public static function GetList()
	{
		$order = new OrderModel();
		return $order->ListAll();
	}
	
}

