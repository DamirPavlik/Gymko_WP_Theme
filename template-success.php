<?php
/*
Template Name: Success Template
*/

session_start();

if (!isset($_SESSION['email_sent']) || empty($_SESSION['email_sent'])) {
    wp_redirect(home_url()); 
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content= "width=device-width, maximum-scale=1.0">
    <meta name="viewport" content= "width=device-width, user-scalable=0">
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<body>
    <div class="success-wrapper">
        <h2 class="heading-success-email">Upešno ste poslali e-mail!</h2>
        <a href="/" class="btn-success-email">&larr; Početna</a>
    </div>
</body>
</html>
<?php

?>