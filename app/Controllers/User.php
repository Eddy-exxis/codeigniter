<?php namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Model;

class User extends BaseController
{
	public function index()
	{
		$userModel = new UserModel($db);
		$user = $userModel->find('1');
		var_dump($user);
		//return view('principal/header').view('item/item_list',$data).view('principal/further').view('principal/footer');
	}

}
