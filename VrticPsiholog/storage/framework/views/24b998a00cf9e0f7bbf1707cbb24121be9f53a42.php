<!DOCTYPE html>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">


<html class="full" lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>VrticPsiholog</title>
</head>
<style>
    body {
        margin-top: 50px;
        margin-bottom: 50px;
        background: none;
    }

    .full {
        background: url(<?php echo e(URL::asset('images/kids_stick.jpg')); ?>)  no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>
<body>

        <!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="<?php echo e('index'); ?>">Naslovna</a>
                </li>
                <li>
                    <a href="<?php echo e('psiholog'); ?>">Što sve radi vrtićki psiholog ?</a>
                </li>
                <li>
                    <a href="<?php echo e('era'); ?>">ERA dijagram</a>
                </li>
                <li>
                    <a href="<?php echo e('prijava'); ?>">Prijava</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>


<div class="container" style="opacity: 0.9">
    <?php echo $__env->yieldContent('content'); ?>
    <!-- /.row -->
</div>
<!-- /.container -->

</body>
</html>