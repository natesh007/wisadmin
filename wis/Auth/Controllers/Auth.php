<?php
namespace Modules\Auth\Controllers;
use Modules\Auth\Models\AuthModel;

class Auth extends BaseController
{
    public function index()
    {
        echo view('Modules\Auth\Views\LoginPage');
    }
    public function login()
    {
        if ($this->request->getMethod() == 'post') {
            $wsm = new AuthModel();
            $log_array =  array(
                    "email"     => $this->request->getVar('Email'),
                    "password"  => $this->request->getVar('Password')
            );
            $log_data = $wsm->callwebservice(SAURL."login", $log_array);
            if ($log_data->status == "Failed") {
                $msg = $log_data->msg;
                return redirect()->to(base_url('login'))->with('msg', $msg);
            }
            if ($log_data->status == "Success") {
                $this->setEmployeeDetails($log_data->data);
                return redirect()->to(base_url('dashboard'));
            } 
        } else {
            echo view('Modules\Auth\Views\LoginPage');
        }
    }
      
    private function setEmployeeDetails($user)
    {
        $data = [
            "OrgID" => $user->OrgID,
            "OrgName" => $user->OrgName,
            "DeptID" => $user->DeptID,
            "EmpID" => $user->EmpID,
            "EmpName" => $user->EmpName,
            "RoleID" => $user->RoleID,
            "accessToken" => $user->accessToken,
            "fb" => $user->fb,
            "is_logged_in" => true
        ];
        session()->set($data);
        return true;
    }
    
    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }

}
