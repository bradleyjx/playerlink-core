<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PlayerLink Core Uploader</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="<?= URL ?>css/theme.bootstrap_4.css" rel="stylesheet">
    <link href="<?= URL ?>css/site.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#"><?= PLC_STORE_NAME ? PLC_STORE_NAME . " - " : "" ?>PlayerLink Core Uploader</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL ?>" target="_blank">Pairings Page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" target="_blank">PLC Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="//blog.playerlink.online" target="_blank">Blog</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<main role="main" class="container">