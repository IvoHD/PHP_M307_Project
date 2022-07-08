<?php

class ListController
{
	public function List()
	{
		$OrderArray = $this->GetList();
		$Order = new OrderModel();
		require 'app/Views/list.view.php';
		
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
    
		foreach($OrderArray as $Element)
			echo "
				<tr>
					<th>{$Element['id']}</th>
					<th>{$Element['name']}</th>
					<th>{$Element['email']}</th>
					<th>{$Element['tel']}</th>
					<th>{$Element['category']}</th>
					<th>{$Element['isdried']}</th>
					<th>{$Element['elapseddays']}</th>
					<th>{$Order->GetFruitStringByID($Element['fruitid'])}</th>
					<th><a href=\"/input?id={$Element['id']}\"><button class=\"\">Editieren</button></a></th>
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

