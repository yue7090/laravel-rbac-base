<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign In | Extras</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="Thu, 19 Nov 1900 08:52:00 GMT">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('vendors/font-awesome/css/font-awesome.min.css')); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('vendors/bootstrap/css/bootstrap.min.css')); ?>">
    <!--Loading style vendors-->
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('vendors/animate.css/animate.css')); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('vendors/iCheck/skins/all.css')); ?>">
    <!--Loading style-->
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/themes/style1/pink-blue.css')); ?>" class="default-style">
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/themes/style1/pink-blue.css')); ?>" id="theme-change" class="style-change color-change">
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/style-responsive.css')); ?>">
    <link rel="shortcut icon" href="images/favicon.ico">
    <script src="<?php echo e(asset('js/jquery-1.10.2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery-migrate-1.2.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery-ui.js')); ?>"></script>
    <!--loading bootstrap js-->
    <script src="<?php echo e(asset('vendors/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js')); ?>"></script>
    <script src="<?php echo e(asset('js/html5shiv.js')); ?>"></script>
    <script src="<?php echo e(asset('js/respond.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/iCheck/icheck.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/iCheck/custom.min.js')); ?>"></script>
</head>

<body id="signin-page">
<?php echo Toastr::render(); ?>

    <div class="page-form">
        <form action="/backend/doLogin" class="form" method="POST">
        <inputy type="hidden" name="_method" value="post">
        <?php echo csrf_field(); ?>

            <div class="header-content">
                <h1>Log In</h1>
            </div>
            <div class="body-content">
                <div class="form-group">
                    <div class="input-icon right"><i class="fa fa-user"></i>
                        <input type="text" placeholder="email" name="email" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-icon right"><i class="fa fa-key"></i>
                        <input type="password" placeholder="Password" name="password" class="form-control">
                    </div>
                </div>
                <div class="form-group pull-left">
                    <div class="checkbox-list">
                        <label>
                            <input type="checkbox">&nbsp; Keep me signed in</label>
                    </div>
                </div>
                <div class="form-group pull-right">
                    <button type="submit" class="btn btn-success">Log In &nbsp;
                        <i class="fa fa-chevron-circle-right"></i>
                    </button>
                </div>
                <div class="clearfix"></div>
            </div>
        </form>
    </div>
    
    <script>
        //BEGIN CHECKBOX & RADIO
        $('input[type="checkbox"]').iCheck({
            checkboxClass: 'icheckbox_minimal-grey',
            increaseArea: '20%' // optional
        });
        $('input[type="radio"]').iCheck({
            radioClass: 'iradio_minimal-grey',
            increaseArea: '20%' // optional
        });
        //END CHECKBOX & RADIO
    </script>
</body>

</html>