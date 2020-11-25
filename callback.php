<?php
ob_start();
//  include "../model/connect.php";
//  include "../model/user.php";
 session_start();
    
 $app_id = "854383925392425";
 $app_secret = "6552aef29da581305f3351bc7227634f";
 $redirect_uri = urlencode("http://localhost/GitHub/du_an1/callback.php");    
 
 // Get code value
 $code = $_GET['code'];
 
 // Get access token info
 $facebook_access_token_uri = "https://graph.facebook.com/v2.8/oauth/access_token?client_id=$app_id&redirect_uri=$redirect_uri&client_secret=$app_secret&code=$code";    
 
 $ch = curl_init(); 
 curl_setopt($ch, CURLOPT_URL, $facebook_access_token_uri);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);    
     
 $response = curl_exec($ch); 
 curl_close($ch);

 // Get access token
 $aResponse = json_decode($response);
 $access_token = $aResponse->access_token;
 
 // Get user infomation
 $ch = curl_init();

 
 curl_setopt($ch, CURLOPT_URL, "https://graph.facebook.com/v8.0/me?fields=id%2Cname%2Cpicture%2Cemail&access_token=EAALH0VZCIZC2gBAL1SRHvZB7fDbOZBTEVjxt3eDoPiNDcZCHD07pqaodv5ksdGYbbHxw8TvK6h46H1ZCR0xylIoyvdtwlsgqpKGfoi601pZB6lATzRuWxyekazy8eynS8Nz7C7qTIqtt5yXFwHKFXokEyoB7XUeSezcPsA6rvhkgAZDZD");
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);    
 curl_setopt($ch, CURLOPT_HEADER, 0);


 $response = curl_exec($ch); 
 curl_close($ch);
 
 $user = json_decode($response);
 // Log user in
 $_SESSION['user_login'] = true;

$id = $user->id;
$img = $user->picture->data->url;
$user = $user;
$_SESSION['id'] = $id;;
$_SESSION['user']= $user;
$_SESSION['adimg'] = $img;
if($_SESSION['suser'] == "Huy Nguyễn"){
    $_SESSION['role'] = 1;
    header("location: index.php");
}else{
    $_SESSION['role'] = 0;
    header("location: index.php");
}
?>