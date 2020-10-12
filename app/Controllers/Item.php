<?php namespace App\Controllers;

class Item extends BaseController
{
	public function index()
	{
		$data['item'] = "Televisor, refrigerador enviado desde el controlador";
		return view('principal/header').view('item/item_list',$data).view('principal/further').view('principal/footer');
	}

	public function getById()
	{
		$data['item'] = "Televisor 3500 Bs";
		return  view('principal/header').view('item/item_list',$data).view('principal/further').view('principal/footer');
	}

	//--------------------------------------------------------------------

}
