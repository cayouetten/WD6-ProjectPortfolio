<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Nicole Cayouette</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" type="text/css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/custom.css" type="text/css" rel="stylesheet">

</head>


<body>

<!-- NAVIGATION -->
<div class="container">
    <!-- Static navbar -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">SSL</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li <?=@$data["pagename"]=="home"? 'class="active"':''?>><a href="/welcome">Home</a></li>
                    <li <?=@$data["pagename"]=="about"? 'class="active"':''?>><a href="/about">About</a></li>
                    <li <?=@$data["pagename"]=="api"? 'class="active"':''?>><a href="/api">API</a></li>
                    <li <?=@$data["pagename"]=="register"? 'class="active"':''?>><a href="/register">Register</a></li>
                    <li <?=@$data["pagename"]=="navigation"? 'class="active"':''?>><a href="/navigation">Navigation</a></li>
                </ul>
                <span style="color:red">
                    <?=@$_REQUEST["msg"]?@$_REQUEST["msg"]:''; ?>
                </span>
            <? if(@$_SESSION["loggedin"] && @$_SESSION["loggedin"]==1) { ?>
                <form class="navbar-form navbar-right">
                    <a href="/profile">Profile</a>
                    <a href="/auth/logout">Log Out</a>
                </form>
            <? } else { ?>
                <form class="navbar-form navbar-right" role="search" method="POST" action="/auth/login">
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" aria-describedby="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="password" aria-describedby="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-default">Sign In</button>
                </form>
            <? } ?>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>
</div> <!-- /container -->