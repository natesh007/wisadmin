<?php

namespace Modules\Admin\Controllers;

class Admin extends BaseController
{
	public function index()
	{
		echo view('Modules\Admin\Views\common\header');
		echo view('Modules\Admin\Views\users');
	}
}
