<?php
/*
 * This file is a part of the Jelastic API Client PHP.
 * (c) sysastro <sysastro@gmail.com>
 * Fill free for this code to copyright, license and modification.
 * Created base on JElastic API Document : http://apidoc.devapps.jelastic.com/4.7-private/
 * Version : 1.0
 */

/* require jelastic class file */
require "jelastic.php";

/* call Jelastic class */
$jelastic = new Jelastic();
$email = 'emailaccount@gmail.com';
$oldpassword = 'passwordaccount';
$newpassword = 'newpasswordaccount';

$paramsSession = array(
    'appid' => $jelastic->dashboardAppId,
    'login' => $email,
    'password' => $oldpassword
);
$session = $jelastic->login($paramsSession);
if(isset($session['session']))
{
    $params = array(
        'appid' => $jelastic->dashboardAppId,
        'session' => $session['session'],
        'oldpassword' => $oldpassword,
        'newpassword' => $newpassword
    );
    $changePassword = $jelastic->changePassword($params);
    if(isset($changePassword['session']))
    {
        echo "Change password account success.";
    } else {
        echo "Change password account failed.";
    }
} else {
    echo "Login as user failed.";
}

?>