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
                    "password"  => md5($this->request->getVar('Password'))
            );
            //echo json_encode($log_array);die();
            $log_data = $wsm->callwebservice(SAURL."login", $log_array);
            //echo $log_data->msg;exit;
            //echo "<pre>";print_r($log_data);exit;
            if ($log_data->status == "Failed") {
                
                $msg = $log_data->msg;
                return redirect()->to(base_url('login'))->with('msg', $msg);
            }

            if ($log_data->status == "Success") {
                return redirect()->to(base_url('dashboard'));
            } 
        } else {
            echo view('Modules\Auth\Views\LoginPage');
        }
    }
    private function setUserSession($count_token)
    {
        $data = ['Token' => $count_token,];
        session()->set($data);
        return true;
    }
    private function setUserDetails($user)
    {
        $data = [
            "UserID"        => $user->UserID,
            "UserTypeID"    => $user->UserTypeID,
            "UserTypeCode"  => $user->UserTypeCode,
            "FirstName"     => $user->FirstName,
            "LastName"      => $user->LastName,
            "Gender"        => $user->Gender,
            "MobileNo"      => $user->MobileNo,
            "Email"         => $user->Email,
            "LogCount"      => $user->FirstTimeLogin
        ];
        session()->set($data);
        return true;
    }
    private function SetForgotSession($count_token)
    {
        $data = [
            'FPToken' => $count_token
        ];

        session()->set($data);
        return true;
    }
    public function LoginAjax()
    {
        if ($this->request->getMethod() == 'post') {
            //echo "hh88";die();
            $rules =
                [
                    'email' =>
                    [
                        'rules'  => 'required|regex_match[/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/]|LogincheckEmail[email]',
                        'errors' =>
                        [
                            'required' => 'Please enter your email id',
                            'regex_match' => 'Please enter valid email id',
                            'LogincheckEmail' => 'Email id not registered'
                        ]
                    ],

                    'password' =>
                    [
                        'rules'  => 'required',
                        'errors' =>
                        [
                            'required' => 'Please enter your password',
                        ]
                    ],
                ];
            $errorstring = '';
            if (!$this->validate($rules)) {
                $errorstring .= 'Email~' . $this->validator->showError('email') . ',Password~' . $this->validator->showError('password');
                print $errorstring;
                exit;
            }
        }
        echo "hh";die();
    }
    public function loginotp()
    {
        $wsm = new AuthModel();
        $data_country_array = array(
            "name"  => "getmasterdata",
            "param" =>  array(
                "MasterData" => "countries"

            ),
        );
        $country = $wsm->callwebservice(SAURL, $data_country_array);
        $data['country'] = $country->response->result;
        if ($this->request->getMethod() == 'post') {
            if ($this->request->getVar('Mobilenum') != null) {
                $data_otp_array = array(
                    "name"  => "sendotp",
                    "param" =>  array(
                        "MobileNumber" =>  $this->request->getVar('code') . $this->request->getVar('Mobilenum'),
                    ),
                );
                $data_otp = $wsm->callwebservice(SAURL, $data_otp_array);
                if ($data_otp->response->status == 200) {
                    $numdata = ['Mobnum'    =>  $this->request->getVar('Mobilenum'), 'CountryCode'    =>  $this->request->getVar('code')];
                    session()->set($numdata);
                    return redirect()->to(base_url('verifyotp'));
                }
            }
        }
        echo view('Home\Views\LoginwithOTP', $data);
    }
    public function loginotpajax()
    {
        if ($this->request->getMethod() == 'post') {
            $rules =
                [
						'Mobile' =>
						[
							'rules'  => 'alpha_numeric|regex_match[^[0-9]{12,14}$]|LogincheckMobile[Mobile]',
							'errors' =>
							[
								'alpha_numeric'     => 'This field allows only numbers',
								'regex_match'   => 'Please enter valid moblie mobile number',
								'LogincheckMobile' => 'Please check the mobile number entered is not matched'
							]
						],
                ];
            $errorstring = '';
            if (!$this->validate($rules)) {
                $errorstring .= 'Mobile~' . $this->validator->showError('Mobile');
                print $errorstring;
                exit;
            }
        }
    }
    public function verifyotp()
    {
        if (session()->get('CountryCode') && session()->get('Mobnum')) {
            if ($this->request->getMethod() == 'post') {
                $output = '';
                foreach ($this->request->getvar('otp') as $key => $val) {
                    $output .= $val;
                }
                $wsm = new AuthModel();
                $logotp_array =  array(
                    "name"        => 'verifyotp',
                    "param"         => array(
                        "MobileNumber" => session()->get('CountryCode') . session()->get('Mobnum'),
                        "OTP" => $output
                    ),
                );
                if ($output == null) {
                    $msg = "Please enter OTP";
                    return redirect()->to(base_url('verifyotp'))->with('msg', $msg);
                }
                $logotp_data = $wsm->callwebservice(SAURL, $logotp_array);
                if (isset($logotp_data->response->status)) {
                    if ($logotp_data->response->status == 200) {
                        unset($_SESSION['Mobnum']);
                        unset($_SESSION['CountryCode']);
                        $count_token = $logotp_data->response->result->token;
                        $this->setUserSession($count_token);
                        $user_array =  array(
                            "name"        => 'getuserdata',
                            "param"         => array(),
                        );
                        $user_data = $wsm->callwebservice(SAURL, $user_array, 1);
                        $user = $user_data->response->result;
                        if ($user->UserTypeCode == 'M') {
                            $this->setUserDetails($user);
                            return redirect()->to(base_url('alumni/register_profile'));
                        } else if ($user->UserTypeCode == 'S') {
                            $this->setUserDetails($user);
                            return redirect()->to(base_url('student/student_register_profile'));
                        } else {
                            return redirect()->to(base_url());
                        }
                    } else {
                        $msg = "The OTP you entered is wrong";
                        return redirect()->to(base_url('verifyotp'))->with('msg', $msg);
                    }
                }
            }
            echo view('Home\Views\verifyotp');
        } else {
            return redirect()->to(base_url('loginotp'));
        }
    }
    public function resendloginotp()
    {
        if (session()->get('CountryCode') && session()->get('Mobnum')) {
            $wsm = new AuthModel();
            $data_otp_array = array(
                "name"  => "sendotp",
                "param" =>  array(
                    "MobileNumber" =>  session()->get('CountryCode') . session()->get('Mobnum'),
                ),
            );
            $data_otp = $wsm->callwebservice(SAURL, $data_otp_array);
            if ($data_otp->response->status == 200) {
                $remsg = 'The OTP is sent to your mobile number';
                return redirect()->to(base_url('verifyotp'))->with('remsg', $remsg);
            }
        }
    }
    public function forgot()
    {
        $data[] = '';
        $wsm = new AuthModel();
        if ($this->request->getMethod() == 'post') {

            $fieldvalue = $this->request->getVar('Email');
            if ($fieldvalue != null) {
                if (preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/', $fieldvalue)) {
                    $rules = [
                        'Email' => 'LogincheckEmail[Email]',
                    ];

                    $errors = [
                        'Email' => [
                            'LogincheckEmail' => 'The email-id you have entered is not the registered one.'
                        ]
                    ];
                    if (!$this->validate($rules, $errors)) {
                        $data['validation'] = $this->validator;
                    } else {
                        $forgot_arry =  array(
                            "name"        => 'forgotpasswordgetotp',
                            "param"         => array(
                                "EmailMobile" => $this->request->getvar('Email')
                            ),
                        );
                        $for_data = $wsm->callwebservice(SAURL, $forgot_arry);
                        if (isset($for_data->response->status) == 200) {
                            $Email = $this->request->getVar('Email');
                            $Edata = ['EmailVrfy' =>  $Email];
                            session()->set($Edata);
                            return redirect()->to(base_url('forgotverifyotp'));
                        } else {
                            $msg = "Please try again.";
                            return redirect()->to(base_url('forgot'))->with('msg', $msg);
                        }
                    }
                } else if (preg_match('/^[0-9]+$/', $fieldvalue)) {

                    $rules = [
                        'Email' => 'validateFgtMobile[Email]',
                    ];

                    $errors = [
                        'Email' => [
                            'validateFgtMobile' => 'The mobile number you have entered is not the registered One'
                        ]
                    ];
                    if (!$this->validate($rules, $errors)) {
                        $data['validation'] = $this->validator;
                    } else {
                        $forgot_arry =  array(
                            "name"        => 'forgotpasswordgetotp',
                            "param"         => array(
                                "EmailMobile" => $this->request->getvar('Email')
                            ),
                        );
                        $for_data = $wsm->callwebservice(SAURL, $forgot_arry);
                        if (isset($for_data->response->status) == 200) {
                            $Email = $this->request->getVar('Email');
                            $Edata = ['EmailVrfy' =>  $Email];
                            session()->set($Edata);
                            return redirect()->to(base_url('forgotverifyotp'));
                        } else {
                            $msg = "Please try again.";
                            return redirect()->to(base_url('forgot'))->with('msg', $msg);
                        }
                    }
                }
            } else {
                $msg = "Please fill the field";
                return redirect()->to(base_url('forgot'))->with('msg', $msg);
            }
        } else {
            if (session()->get('EmailVrfy')) {
                $forgot_arry =  array(
                    "name"        => 'forgotpasswordgetotp',
                    "param"         => array(
                        "EmailMobile" => session()->get('EmailVrfy')
                    ),
                );
                $for_data = $wsm->callwebservice(SAURL, $forgot_arry);
                $Forgt = $for_data->response;
                if (isset($for_data->response->status) == 200) {
                    $msgs = "The OTP has been sent.";
                    return redirect()->to(base_url('forgotverifyotp'))->with('msgs', $msgs);
                } else {
                    $msgs = "Please try again.";
                    return redirect()->to(base_url('forgot'))->with('msgs', $msgs);
                }
            }
        }
        echo view('Home\Views\Forgotlogin', $data);
    }
    public function forgotverifyotp()
    {
        $data[] = '';
        $wsm = new AuthModel();
        if ($this->request->getMethod() == 'post') {
            if (session()->get('EmailVrfy') != '') {
                $output = '';
                foreach ($this->request->getvar('otp') as $key => $val) {
                    $output .= $val;
                }
                $logotp_array =  array(
                    "name"        => 'forgotpasswordverifyotp',
                    "param"         => array(
                        "EmailMobile" => session()->get('EmailVrfy'),
                        "OTP" => $output
                    ),
                );
                if ($output == null) {
                    $msg = "Please enter OTP";
                    return redirect()->to(base_url('forgotverifyotp'))->with('msg', $msg);
                }
                $logotp_data = $wsm->callwebservice(SAURL, $logotp_array);
                $Logotpdts = $logotp_data->response;
                if ($Logotpdts->status == 200) {
                    $count_token = $Logotpdts->result->token;
                    $this->SetForgotSession($count_token);
                    $show = "popup";
                    return redirect()->to(base_url('setpassword'))->with('show', $show);;
                } else {
                    $msg = "The OTP you entered is wrong";
                    return redirect()->to(base_url('forgotverifyotp'))->with('msg', $msg);
                }
            } else {
                $msg = "Please try again.";
                return redirect()->to(base_url('forgot'))->with('msg', $msg);
            }
        }
        echo view('Home\Views\forgotverifyotp', $data);
    }
    public function setpassword()
    {
        $wsm = new AuthModel();

        if (session()->get('FPToken')) {
            $data[] = '';
            if ($this->request->getMethod() == 'post') {
                $rules = [
                    'psw' => 'required|regex_match[/^.*(?=.{6,}).*$/]',
                    'cpsw' => 'required|matches[psw]',
                ];

                $errors = [
                    'psw' => [
                        'required' => 'Please fill this field',
                        'regex_match' => 'Password must contain 6 letters'
                    ],
                    'cpsw' => [
                        'required' => 'Please fill this field.',
                        'matches' => 'Password does not Match'
                    ]
                ];
                if (!$this->validate($rules, $errors)) {
                    $data['validation'] = $this->validator;
                    $data['password'] = $this->request->getVar('psw');
                    $data['cpassword'] = $this->request->getVar('cpsw');
                } else {

                    $reset_array =  array(
                        "name"        => 'forgotpasswordupdatepassword',
                        "param"         => array(
                            "Password" => md5($this->request->getVar('psw'))
                        ),
                    );
                    $reset_data = $wsm->callwebservice(SAURL, $reset_array, 1, 2);
                    $Reset = $reset_data->response;
                    if ($Reset->status == 200) {

                        unset($_SESSION['EmailVrfy']);
                        unset($_SESSION['FPToken']);
                        $msgss = "reset";
                        return redirect()->to(base_url())->with('msgss', $msgss);
                    } else {
                        $msg = "Please try again later";
                        return redirect()->to(base_url('ResetPassword'))->with('msg', $msg);
                    }
                }
            }
            echo view('Home\Views\setpassword', $data);
        } else {
            return redirect()->to(base_url());
        }
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url());
    }

    // Signup Functions 
    public function register()
    {
        if (session()->get('Token')) {
            if (session()->get('UserTypeCode') == 'M') {
                return redirect()->to(base_url('alumni/register_profile'));
            } else if (session()->get('UserTypeCode') == 'S') {
                return redirect()->to(base_url('student/student_register_profile'));
            } else {
                return redirect()->to(base_url('logout'));
            }
        } else {
            $wsm = new AuthModel();
            $data_usertype_array = array(
                "name"  => "getmasterdata",
                "param" =>  array(
                    "MasterData" => "usertypes"

                ),
            );
            $usertype = $wsm->callwebservice(SAURL, $data_usertype_array);
            $data['type'] = $usertype->response->result;

            $data_country_array = array(
                "name"  => "getmasterdata",
                "param" =>  array(
                    "MasterData" => "countries"

                ),
            );
            $country = $wsm->callwebservice(SAURL, $data_country_array);
            $data['country'] = $country->response->result;
            //print "<pre>";print_r($data['country']);exit;
            if ($this->request->getMethod() == 'post') {
                $wsm = new AuthModel();
                if ($this->request->getVar('Category') == "1") {
                    $typecode = "S";
                } else {
                    $typecode = "M";
                }
                $data_array =  array(
                    "name"        => 'createuser',
                    "param"         => array(
                        "TypeCode"              =>      $typecode,
                        "Type"                  =>      $this->request->getVar('Category'),
                        "FirstName"             =>      $this->request->getVar('FullName'),
                        "LastName"              =>      $this->request->getVar('LastName'),
                        "Gender"                =>      $this->request->getVar('Gender'),
                        "Email"                 =>      $this->request->getVar('Email'),
                        "Password"              =>      md5($this->request->getVar('password')),
                        "MobileNumber"          =>      $this->request->getVar('code') . $this->request->getVar('Mobnum'),
                        "MobileCountryCode"     =>      $this->request->getVar('code'),
                    ),
                );
                $check_status = $wsm->callwebservice(SAURL, $data_array);
                //print_r($check_status);exit;
                if (isset($check_status->response->status)) {
                    if ($check_status->response->status == 200) {
                        $useracdata = ['FirstName' => $this->request->getVar('FullName'), 'LastName'    =>  $this->request->getVar('LastName'), 'Email' => $this->request->getVar('Email'), 'MobileNumber' => $this->request->getVar('code') . $this->request->getVar('Mobnum')];
                        session()->set($useracdata);
                        return redirect()->to(base_url('register'));
                    }
                } else {
                    $error = $check_status->error->message;
                    $errmsg = $error;
                    return redirect()->to(base_url('register'))->with('errmsg', $errmsg);
                }
            }
        }
        echo view('Home\Views\Register', $data);
    }
    public function RegisterAjax()
    {
        if ($this->request->getMethod() == 'post') {
            $rules =
                [
                    'Category' =>
                    [
                        'rules'     => 'required',
                        'errors'    =>
                        [
                            'required' => 'This field is mandatory'
                        ]
                    ],

                    'FullName' =>
                    [
                        'rules'  => 'required|alpha_space',
                        'errors' =>
                        [
                            'required' => 'Please enter your first name',
                            'alpha_space' => 'This field allows only characters'
                        ]
                    ],

                    'LastName' =>
                    [
                        'rules'  => 'required|alpha_space',
                        'errors' =>
                        [
                            'required' => 'Please enter your last name',
                            'alpha_space' => 'This field allows only characters'
                        ]
                    ],

                    'Gender' =>
                    [
                        'rules'     => 'required',
                        'errors'    =>
                        [
                            'required' => 'Please select the gender'
                        ]
                    ],

                    'Email' =>
                    [
                        'rules'  => 'required|regex_match[/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/]|validateEmail[Email]',
                        'errors' =>
                        [
                            'required' => 'Please enter your email id',
                            'regex_match' => 'Please enter a valid email',
                            'validateEmail' => 'This email id already exists'
                        ]
                    ],

                    'Password' =>
                    [
                        'rules'  => 'required|regex_match[/^.*(?=.{6,}).*$/]',
                        'errors' =>
                        [
                            'required' => 'Password must not be empty',
                            'regex_match' => 'Password must contain 6 letters'
                        ]
                    ],

                    'MobileNumber' =>
                    [
                        'rules'  => 'required|regex_match[^[0-9]{12,14}$]|validateMobile[MobileNumber]',
                        'errors' =>
                        [
                            'required' => 'Please enter your mobile number',
                            'regex_match'   => 'Please enter valid  10 digit mobile number',
                            'validateMobile' => 'This mobile number already exists'
                        ]
                    ],

                ];
            $errorstring = '';
            if (!$this->validate($rules)) {
                $errorstring .= 'Category~' . $this->validator->showError('Category') . ',FullName~' . $this->validator->showError('FullName') . ',LastName~' . $this->validator->showError('LastName') . ',MobileNumber~' . $this->validator->showError('MobileNumber') . ',Email~' . $this->validator->showError('Email') . ',Password~' . $this->validator->showError('Password') . ',Gender~' . $this->validator->showError('Gender');
                print $errorstring;
                exit;
            }
        }
    }
    public function EmailActivation($code)
    {

        $wsm = new AuthModel();
        $codes = base64_decode($code);
        $data['separate'] = explode('===', $codes);

        $data_activate_array = array(
            'name' => 'activateuser',
            'param' => array(
                'MobileNumber'  => $data['separate'][0],
                'OTP'           => $data['separate'][1]
            ),
        );
        $activate = $wsm->callwebservice(SAURL, $data_activate_array);
        $status = $activate->response->result;
        if ($status != "Expired.") {
            $token = $activate->response->result->token;
            $count_token = $token;
            $this->setUserSession($count_token);
            unset($useracdata);
            $user_array =  array(
                "name"        => 'getuserdata',
                "param"         => array(),
            );
            $user_data = $wsm->callwebservice(SAURL, $user_array, 1);
            $user = $user_data->response->result;
            //print"<pre>";print_r($user);exit;
            if ($user->UserTypeCode == 'M') {
                $this->setUserDetails($user);
                return redirect()->to(base_url('alumni/register_profile'));
            } else if ($user->UserTypeCode == 'S') {
                $this->setUserDetails($user);
                return redirect()->to(base_url('student/student_register_profile'));
            }
        } else {
            return redirect()->to(base_url('register'));
        }
    }
    public function resendactive()
    {
        $wsm = new AuthModel();
        $data_resend_array = array(
            'name'  => 'resendwelcome',
            'param' => array(
                "FirstName" => session()->get('FirstName'),
                "Email" => session()->get('Email'),
                "MobileNumber" => session()->get('MobileNumber')
            ),
        );
        $resend = $wsm->callwebservice(SAURL, $data_resend_array);
        if ($resend->response->status == 200) {
            $rmsgs = 'Confirmation Link has been sent to your email';
            return redirect()->to(base_url('register'))->with('rmsgs', $rmsgs);
        }
    }

    public function Speciallogin($token)
    {
        $token_data = explode("_", base64_decode($token));


        $AdminID = $token_data[0];
        $UserID = $token_data[1];
        $Secret = $token_data[2];


        $wsm = new AuthModel();
        $data_resend_array = array(
            'name'  => 'adminedit',
            'param' => array(
                "AdminID" => $AdminID,
                "UserID" => $UserID,
                "Secret" => $Secret
            ),
        );
        //echo "<pre>";print_r($data_resend_array);exit;
        $resend = $wsm->callwebservice(SAURL, $data_resend_array);
        //echo "<pre>";print_r($resend);exit;
        if ($resend->response->status == 200) {

            $count_token = $resend->response->result->token;

            $this->setUserSession($count_token);

            session()->set("admineditlogin", '1');

            $user_array =  array(
                "name"        => 'getuserdata',
                "param"         => array(),
            );
            $user_data = $wsm->callwebservice(SAURL, $user_array, 1);
            $user = $user_data->response->result;
            //echo "<pre>";print_r($user);exit;
            if ($user->UserTypeCode == 'M') {
                $this->setUserDetails($user);
                return redirect()->to(base_url('alumni/register_profile'));
            } else if ($user->UserTypeCode == 'S') {
                $this->setUserDetails($user);
                return redirect()->to(base_url('student/student_register_profile'));
            } else {
                echo "not";
                return redirect()->to(base_url());
            }
        } else {
            echo "invalid token";
        }
    }
    public function terms(){
        echo view('Home\Views\Terms');
    }
    public function privacy(){
        echo view('Home\Views\Privacy');
    }
    public function withoutactive($mail)
    {
        $data['mail'] = $mail;
        echo view('Home\Views\popup',$data);
    }
    public function withoutresendactive($mailnum)
    {
        $wsm = new AuthModel();
        $data = base64_decode($mailnum);
        if(ctype_digit($data))
        {
            $data_resend_array = array(
                'name'  => 'resendwelcome',
                'param' => array(
                    "FirstName" => '',
                    "Email" => '',
                    "MobileNumber" => $data
                ),
            );
        }
        else
        {
            $data_resend_array = array(
                'name'  => 'resendwelcome',
                'param' => array(
                    "FirstName" => '',
                    "Email" =>$data,
                    "MobileNumber" => ''
                ),
            );
        }
        $resend = $wsm->callwebservice(SAURL, $data_resend_array);
        //print_r($resend);exit;
        if ($resend->response->status == 200) {
            $rmsgs = 'Confirmation Link has been sent to your email';
            return redirect()->to(base_url('withoutactive/'.$mailnum))->with('rmsgs', $rmsgs);
        }
    }
    public function EmailNavigationMentor($url)
    {
        $code = explode("===",base64_decode($url));
        $number = $code[0];
        $forotp  = explode("?",$code[1]);
        $otp = $forotp[0];
        $foraction = explode('=',$forotp[1]);
        $action = $foraction[1];
        //print"<pre>";print_r($action);print"<pre>";print_r($otp );print"<pre>";print_r($number);exit;
        $wsm = new AuthModel();
        $logotp_array =  array(
            "name"        => 'verifyotp',
            "param"         => array(
                "MobileNumber" => $number,
                "OTP" => $otp
            ),
        );
        $logotp_data = $wsm->callwebservice(SAURL, $logotp_array);
        //print_r($logotp_data);exit;
        if($action == "scheduledsession")
        {
            if (isset($logotp_data->response->status)) {
                if ($logotp_data->response->status == 200) {
                    $count_token = $logotp_data->response->result->token;
                    $this->setUserSession($count_token);
                    $user_array =  array(
                        "name"        => 'getuserdata',
                        "param"         => array(),
                    );
                    $user_data = $wsm->callwebservice(SAURL, $user_array, 1);
                    $user = $user_data->response->result;
                    if ($user->UserTypeCode == 'M') {
                        $this->setUserDetails($user);
                        return redirect()->to(base_url('alumni/session/Scheduled'));
                    } else if ($user->UserTypeCode == 'S') {
                        $this->setUserDetails($user);
                        return redirect()->to(base_url('student/session/Scheduled'));
                    } else {
                        return redirect()->to(base_url());
                    }
                }
                else {
                    return redirect()->to(base_url());
                }
            }
        }
        else{
            return redirect()->to(base_url());
        } 
    }
    public function EmailNavigationStudent($url)
    {
        $code = explode("===",base64_decode($url));
        $number = $code[0];
        $forotp  = explode("?",$code[1]);
        $otp = $forotp[0];
        $foraction = explode('=',$forotp[1]);
        $action = $foraction[1];
        //print"<pre>";print_r($action);print"<pre>";print_r($otp );print"<pre>";print_r($number);exit;
        $wsm = new AuthModel();
        $logotp_array =  array(
            "name"        => 'verifyotp',
            "param"         => array(
                "MobileNumber" => $number,
                "OTP" => $otp
            ),
        );
        $logotp_data = $wsm->callwebservice(SAURL, $logotp_array);
        //print_r($logotp_data);exit;
        if($action == "scheduledsession")
        {
            if (isset($logotp_data->response->status)) {
                if ($logotp_data->response->status == 200) {
                    $count_token = $logotp_data->response->result->token;
                    $this->setUserSession($count_token);
                    $user_array =  array(
                        "name"        => 'getuserdata',
                        "param"         => array(),
                    );
                    $user_data = $wsm->callwebservice(SAURL, $user_array, 1);
                    $user = $user_data->response->result;
                    if ($user->UserTypeCode == 'M') {
                        $this->setUserDetails($user);
                        return redirect()->to(base_url('alumni/session/Scheduled'));
                    } else if ($user->UserTypeCode == 'S') {
                        $this->setUserDetails($user);
                        return redirect()->to(base_url('student/session/Scheduled'));
                    } else {
                        return redirect()->to(base_url());
                    }
                }
                else {
                    return redirect()->to(base_url());
                }
            } 
        }
        else{
            return redirect()->to(base_url());
        } 
    }
    public function reback()
    {
        session()->destroy();
        return redirect()->to(base_url('register'));
    }
}
