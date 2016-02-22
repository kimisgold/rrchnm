<?php
    $localPath = 'http://localhost/~kim/rrchnm';
?>

<!doctype html>
<html lang="en">

<head>
    <title>Roy Rosenzweig Center for History and New Media</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,700italic,300|Oswald:400,300' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="<?php echo $localPath; ?>/js/globals.js"></script>
    <link href="<?php echo $localPath; ?>/css/style.css" type="text" rel="stylesheet">
</head>

<body class="<?php if ($bodyClass) { echo $bodyClass; } ?>">

    <header>
        <div class="logo"><a href="<?php echo $localPath; ?>">Roy Rosenzweig Center for History and New Media</a></div>

        <nav id="global">
            <a href="#" class="mobile-toggle"></a>
            <ul>
                <li><a href="<?php echo $localPath; ?>/whoweare">Who We Are</a></li>
                <li><a href="<?php echo $localPath; ?>/whatwedo">What We Do</a></li>
                <li><a href="<?php echo $localPath; ?>/whoweworkwith">Who We Work With</a></li>
                <li><a href="<?php echo $localPath; ?>/ourstory">Our Story</a></li>
                <li><a href="<?php echo $localPath; ?>">News</a></li>
            </ul>
        </nav>
    </header>