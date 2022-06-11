<?php

namespace Modules\Admin\Controllers;

class Admin extends BaseController
{
	public function index()
	{
		echo view('Modules\Admin\Views\welcome_message');
	}
}
