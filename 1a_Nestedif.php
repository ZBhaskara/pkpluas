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
        if ($this->username($username) == TRUE) {
            if ($this->password($password) == TRUE) {
                    return 'Anda berhasil login';
                } else {
                    return 'Password yang dimasukkan salah';
                }
            } else {
                return 'Username yang dimasukkan salah';
            }
        }
    }

$authentikasi = new LoginAdmin;
$cek = $authentikasi->main('zakibhaskara', '12345678');
echo $cek;