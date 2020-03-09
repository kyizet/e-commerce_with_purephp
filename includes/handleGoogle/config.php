
<?php

require_once 'vendor/autoload.php';
$google_client = new Google_Client();

$google_client->setClientId('775435818112-j9lkcs8rlj3l6k1v7jac642a2fjlb66h.apps.googleusercontent.com');
$google_client->setClientSecret('upXCzMJsUZ-xOhdEp9h_S3yr');
$google_client->setRedirectUri('http://localhost:8080/e-commerce_with_purephp/index.php');

$google_client->addScope('email');
$google_client->addScope('profile');

?>
