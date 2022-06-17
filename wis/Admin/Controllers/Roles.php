<?php

namespace Modules\Admin\Controllers;

use Modules\Admin\Models\RolesModel;
//use Modules\Admin\Models\AccessModel;

class Roles extends BaseController
{

	public function index($order = '', $sort = '', $starting = 0)
	{
		//$this->module_acccess();
		//session()->set('roles_page', '/roles');;
		
		$data['pager'] = \Config\Services::pager();
		$model = new RolesModel();
		$uri = service('uri');


		$keyword = '';
		if ($this->request->getVar('key_word') != NULL) {
			$keyword = $this->request->getVar('key_word');
		} else if (isset($_GET['key_word'])) {
			$keyword = $_GET['key_word'];
		}

		if (isset($_GET['page'])) {

			$page = $_GET['page'];
		} else {
			$page = 1;
		}

		if (isset($_REQUEST['nor']) && $_REQUEST['nor'] != '') {
			$perPage = $_GET['nor'];
		} else {
			$perPage = 10;
		}

		$roles = $model->get_roles($page, $perPage, $keyword, '');

		$data['keyword'] = $keyword;

		$data['roles'] = $roles['results'];


		$data['pagelinks'] = $roles['pagelinks'];
		echo view('Modules\Admin\Views\common\header');
		echo view('Modules\Admin\Views\roles', $data);
	}

	public function active_roles($order = '', $sort = '', $starting = 0)
	{
		//$this->module_acccess();
		session()->set('roles_page', '/active_roles');
		$data['pager'] = \Config\Services::pager();
		$model = new RolesModel();
		$uri = service('uri');
		$keyword = '';
		if ($this->request->getVar('key_word') != NULL) {
			$keyword = $this->request->getVar('key_word');
		} else if (isset($_GET['key_word'])) {
			$keyword = $_GET['key_word'];
		}
		if (isset($_GET['page'])) {
			$page = $_GET['page'];
		} else {
			$page = 1;
		}
		if (isset($_REQUEST['nor']) && $_REQUEST['nor'] != '') {
			$perPage = $_GET['nor'];
		} else {
			$perPage = 10;
		}
		$roles = $model->get_roles($page, $perPage, $keyword, '1');
		$data['keyword'] = $keyword;
		$data['roles'] = $roles['results'];
		$data['pagelinks'] = $roles['pagelinks'];
		echo view('Modules\Admin\Views\common\header');
		echo view('Modules\Admin\Views\roles', $data);
	}
	public function inactive_roles($order = '', $sort = '', $starting = 0)
	{
		//$this->module_acccess();
		session()->set('roles_page', '/inactive_roles');
		$data['pager'] = \Config\Services::pager();
		$model = new RolesModel();
		$uri = service('uri');
		$keyword = '';
		if ($this->request->getVar('key_word') != NULL) {
			$keyword = $this->request->getVar('key_word');
		} else if (isset($_GET['key_word'])) {
			$keyword = $_GET['key_word'];
		}
		if (isset($_GET['page'])) {
			$page = $_GET['page'];
		} else {
			$page = 1;
		}
		if (isset($_REQUEST['nor']) && $_REQUEST['nor'] != '') {
			$perPage = $_GET['nor'];
		} else {
			$perPage = 10;
		}
		$roles = $model->get_roles($page, $perPage, $keyword, '0');
		$data['keyword'] = $keyword;
		$data['roles'] = $roles['results'];
		$data['pagelinks'] = $roles['pagelinks'];
		echo view('Modules\Admin\Views\common\header');
		echo view('Modules\Admin\Views\roles', $data);
	}
	public function add_role()
	{
		//$this->module_acccess();
		$RolesModel = new RolesModel();
		if ($this->request->getMethod() == 'post') {
			$data = [
				'RoleName' => $this->request->getVar('RoleName'),
				'Priority' => $this->request->getVar('Priority'),
			];
			$save = $RolesModel->insert($data);
			$msg = 'Data Saved Successfully';
			return redirect()->to(base_url('admin/roles'))->with('msg', $msg);
		}
		echo view('Modules\Admin\Views\common\header');
		echo view('Modules\Admin\Views\role_form');
	}

	public function edit_role($id = null)
	{
		//$this->module_acccess();
		$RolesModel = new RolesModel();
		$data['roles'] = $RolesModel->where('RoleID', $id)->first();
		if ($this->request->getMethod() == 'post') {
			$data = [
				'RoleName' => $this->request->getVar('RoleName'),
				'Priority' => $this->request->getVar('Priority'),
				
			];
			$RolesModel->update($id, $data);
			//echo $RolesModel->getLastQuery();

			$msg = 'Data Updated Successfully';
			return redirect()->to(base_url('admin/roles'))->with('msg', $msg);
		}
		echo view('Modules\Admin\Views\common\header');
		echo view('Modules\Admin\Views\role_edit_form', $data);
	}
}
