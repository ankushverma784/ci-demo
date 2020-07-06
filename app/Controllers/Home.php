<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index($page='home')
	{
		if(!is_file(APPPATH.'/views/pages/'.$page.'.php')){
			throw new \CodeIgniter\Exceptions\PageNotFouneException($page);
		}
		return view("pages/{$page}"); 

	}

	//--------------------------------------------------------------------

}
