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

<?php
$name = key_exists('name', $_GET) ? $_GET['name'] : '';
$mail = key_exists('mail', $_GET) ? $_GET['mail'] : '';
$age = key_exists('age', $_GET) ? $_GET['age'] : '';

$nameValid = false;
$mailValid = false;
$ageValid = false;
$dataValid = false;

if (strlen($name) > 3) {
    $nameValid = true;
}
// strstr torna la stringa che abbiamo cercato, altrimenti torna false
// possiamo usare anche strpos
if (strpos($mail, '@') > 2 && strpos($mail, '.') > 4) {
    $mailValid = true;
}
// 
if (is_numeric($age)) {
    $ageValid = true;
}

$dataValid = $nameValid && $mailValid && $ageValid;

?>