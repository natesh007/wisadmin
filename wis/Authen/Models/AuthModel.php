<?php

namespace Modules\Authen\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
  function callwebservice($service_url, $data_array, $session_chk = 0, $sessiontype = 1)
  {
        $ch = curl_init($service_url);
        $body = json_encode($data_array);
        $headers = array();
        $headers[] = 'Content-Type: application/json';
        if ($session_chk == 1) {
            if ($sessiontype == 1) {
                $headers[] = 'Authorization: Token ' . session()->get('Token');
            }
            elseif($sessiontype == 2){
                $headers[] = 'Authorization: Token '.session()->get('FPToken');
            }
        }
        // Set the cURL options
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        curl_setopt($ch, CURLOPT_HEADER, TRUE);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, '1.0');
        curl_setopt($ch, CURLINFO_HEADER_OUT, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_TIMEOUT, 15);

        $data = curl_exec($ch);
        //print_r($data);
        //exit;
        if (strpos($data, '{"response":') != '') 
        {
            $data = explode('{"response":', $data);
            return json_decode(trim('{"response":' . $data[1]));
        } 
        else 
        {
            $data = explode('{"error":', $data);
            return json_decode(trim('{"error":' . $data[1]));
        }
    }
}
