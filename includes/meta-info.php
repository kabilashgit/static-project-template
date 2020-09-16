<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1.0, user-scalable=no">

<!-- Remove phone no underlined -->
<meta name="format-detection" content="telephone=no">
<!-- Favicon -->
<link rel="shortcut icon" href="/favicon.ico"/>
<!-- Page Title and Description -->
<title><?= $data['meta']['title']?> | Company Name</title>
<meta name="description" content="<?= $data['meta']['page_desc']?>">
<meta name="copyright" content="">
<!-- Facebook -->
<meta property="og:site_name" content=""/>
<meta property="og:type" content="website"/>
<meta property="og:title" content="<?= $data['meta']['title']?>"/>
<meta property="og:description" content="<?= $data['meta']['page_desc']?>"/>
<meta property="og:image" content="<?= $data['meta']['page_image']?>"/>
<meta property='og:url' content="<?= (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>" />
<meta name="fb:page_id" content="" />
<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:site" content=""/>
<meta name="twitter:title" content="<?= $data['meta']['title']?>"/>
<meta name="twitter:description" content="<?= $data['meta']['page_desc']?>"/>
<meta name="twitter:image" content="<?= $data['meta']['page_image']?>"/>
<meta name="twitter:image:alt" content="<?= $data['meta']['title']?>"/>

<?php include "header-assets.php"; ?>
