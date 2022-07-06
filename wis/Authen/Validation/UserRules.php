<?php


namespace Modules\Authen\Validation;
use Modules\Authen\Models\AuthModel;

class UserRules
{
    public function LogincheckEmail(string $str, string $fields, array $data)
    {
        return true;
        // $wsm = new AuthModel();
        // $data_check_email =  array(
        //     "name" => "login",
        //     "param" => array(

        //         "Email" => $data['Email']

        //     ),
        // );
        // $check_email = $wsm->callwebservice(WSURL, $data_check_email);
        // $count_email = $check_email->response->result;
        // if ($count_email->count == 0) {
        //     return false;
        // } else {
        //     return true;
        // }
    }
    public function LogincheckMobile(string $str, string $fields, array $data)
    {

        $wsm = new AuthModel();
        $data_check_email =  array(
            "name" => "uniquemobilenumber",
            "param" => array("MobileNumber" => $data['Mobile']),
        );
        $check_email = $wsm->callwebservice(WSURL, $data_check_email);
        $count_email = $check_email->response->result;
        if ($count_email->count == 0) {
            return false;
        } else {
            return true;
        }
    }
    public function validateEmail(string $str, string $fields, array $data)
    {

        $wsm = new AuthModel();
        $data_check_email =  array(
            "name" => "uniqueuseremail",
            "param" => array(

                "Email" => $data['Email']

            ),
        );
        $check_email = $wsm->callwebservice(WSURL, $data_check_email);
        $count_email = $check_email->response->result;
        if ($count_email->count == 0) {
            return true;
        } else {
            return false;
        }
    }
    public function validateMobile(string $str, string $fields, array $data)
    {
        $wsm = new AuthModel();
        $data_check_num =  array(
            "name" => "uniquemobilenumber",
            "param" => array(

                "MobileNumber" => $data['MobileNumber']

            ),
        );
        $check_num = $wsm->callwebservice(WSURL, $data_check_num);
        $count_num = $check_num->response->result;
        if ($count_num->count == 0) {
            return true;
        } else {
            return false;
        }
    }
    public function validateFgtMobile(string $str, string $fields, array $data)
    {
        $wsm = new AuthModel();
        $data_check_num =  array(
            "name" => "uniquemobilenumber",
            "param" => array(

                "MobileNumber" => $data['Email']

            ),
        );
        $check_num = $wsm->callwebservice(WSURL, $data_check_num);
        $count_num = $check_num->response->result;
        if ($count_num->count == 0) {
            return false;
        } else {
            return true;
        }
    }
}
