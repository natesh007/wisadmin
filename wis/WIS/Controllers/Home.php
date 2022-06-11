<?php

namespace Modules\WIS\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('Modules\WIS\Views\welcome_message');
	}
}
