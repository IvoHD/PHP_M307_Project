<?php

class ListController
{
	public function List()
	{
		$orderarray = $this->GetList();
		$order = new OrderModel();
		require 'app/Views/list.view.php';
		require 'core/Translator.php';
		
		echo " 
		<table>
			<tr>
				<th>ID</th>
				<th>Name</th>        
				<th>Email</th>
				<th>TelefonNr.</th>
				<th>Kategorie</th>
				<th>Tage vergangen</th>
				<th>Frucht</th>
				<th></th>
			</tr>
			";
    
		foreach($orderarray as $element){
		$icon = Translator::OnTimeChecker($element['category'], $element ['elapseddays'], $element ['isdried']);	
			echo "
				<tr>
					<th>{$element['id']}</th>
					<th>{$element['name']}</th>
					<th>{$element['email']}</th>
					<th>{$element['tel']}</th>
					<th>{$element['category']}</th>
					<th>{$element['elapseddays']}</th>
					<th>{$order->GetFruitStringByID($element['fruitid'])}</th>
					<th>{$icon}</th>
					<th><a href=\"/input?id={$element['id']}\"><button class=\"\">Editieren</button></a></th>
				</tr>
			";
		}
		echo "</table>";
	}

	public static function GetList()
	{
		$order = new OrderModel();
		return $order->ListAllOrders();
	}
	
}

