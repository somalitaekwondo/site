<?php session_start(); 
/**
 * Copyright 2011 Facebook, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may
 * not use this file except in compliance with the License. You may obtain
 * a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */


require 'facebook-php-sdk-master/src/facebook.php';

// Create our Application instance (replace this with your appId and secret).
$facebook = new Facebook(array(
  'appId'  => '382072668568947',
  'secret' => 'bd233845b4a3beb52566d56a49132294',
));

// Get User ID
$user = $facebook->getUser();

// We may or may not have this data based on whether the user is logged in.
//
// If we have a $user id here, it means we know the user is logged into
// Facebook, but we don't know if the access token is valid. An access
// token is invalid if the user logged out of Facebook.

if ($user) {
  try {
    // Proceed knowing you have a logged in user who's authenticated.
    $user_profile = $facebook->api('/me');
  } catch (FacebookApiException $e) {
    error_log($e);
    $user = null;
  }
}

// Login or logout url will be needed depending on current user state.
if ($user) {
  $logoutUrl = $facebook->getLogoutUrl();
} else {
  $loginUrl = $facebook->getLoginUrl(array(
    'req_perms' => 'user_about_me, user_hometown, email')
  );
}

   

$_SESSION['ID_FACEBOOK'] = $user;

if($_SESSION['ID_FACEBOOK']!=0){
$_SESSION['LOG_FACEBOOK']= "YES";
$_SESSION['IMG_FACEBOOK'] = "<img src='https://graph.facebook.com/".$user."/picture'>";
$_SESSION['NAME_FACEBOOK'] = $user_profile['name'];
$_SESSION['LOGOUT_FACEBOOK'] = $logoutUrl;
$_SESSION['EMAIL_FACEBOOK'] = $user_profile['email'];

echo $_SESSION['NAME_FACEBOOK']." ".$_SESSION['IMG_FACEBOOK']."<br>";
//echo $_SESSION['LOG_FACEBOOK'];
echo "email: ".$_SESSION['EMAIL_FACEBOOK']; 
} else {
$_SESSION['LOG_FACEBOOK']="NO";
};

//
//echo 
//echo  

?>



