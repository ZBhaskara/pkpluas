<?php
class LoginAdmin
{
    function username($username)
    {
        if ($username == 'zakibhaskara') {
            return TRUE;
        }
    }
    function password($password)
    {
        if ($password == '12345678') {
            return TRUE;
        }
    }


    function main($username, $password)
    {
        if ($this->username($username) == false) {
            return 'Username yang dimasukkan salah';
        }
            if ($this->password($password) == false) {
                return 'Password yang dimasukkan salah';
            }
            return 'Anda berhasil login';
        
        }
    }

$authentikasi = new LoginAdmin;
$cek = $authentikasi->main('zakibhaskara', '12345678');
echo $cek;