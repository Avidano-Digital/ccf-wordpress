<?php 
    $template = basename($_SERVER["PHP_SELF"]); 
    $page_array = explode(".", $template);
    $page = $page_array[0];
    
    $parent = end(explode("/",dirname($_SERVER['SCRIPT_NAME'])));

    if (empty($parent)) {
        $parent = 'home'; // set as default
    }

    if (empty($section)) {
        $section = 'home'; // set as default
    }

    if (empty($header_type)) {
        $header_type = 'nav_primary_right'; // set as default
    }
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>MFTA • Home</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">    

    <!-- NYC Theme CSS -->
    <link rel="stylesheet" href="/css/theme.css">

</head>

<body>