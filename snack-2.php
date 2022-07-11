<?php

$userName = $_GET['userName'];
$userAge = $_GET['userAge'];
$email = $_GET['email'];

if(!$userName && $userAge && $email) {
    echo "Access Denied";
} else {

$access = true;

if (count($userName) < 3 ) {
    $access = false;
}

if (is_numeric($userAge)) {
    $access = false;
}

if (strpos($email, '@' && '.') !== true) {
    $access = false;
}

if ($access === true) {
    echo 'Access permited';
}

}
?>



