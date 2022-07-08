<?php

class HomeController
{
	public function home()
	{
		require 'app/Views/home.view.php';
	}

	public function incrementElapsedDays() {
		$order = new OrderModel();
		$allorders = $order->IncrementElapsedDays();
		header("Location: /");
	}
}

