<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="<?php echo base_url('/assets/images/logo.png');?>" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
    

    <title>Itematik Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="<?php echo base_url('/assets/js/require.min.js'); ?>"></script>
    <script>
    requirejs.config({
        baseUrl: '.'
    });
    </script>
    <!-- Dashboard Core -->
    <link href="<?php echo base_url('/assets/css/base.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('/assets/css/layout.css');?>" rel="stylesheet" />
    <script src="<?php echo base_url('/assets/js/dashboard.js');?>"></script>
    <!-- c3.js Charts Plugin -->
    <link href="<?php echo base_url('/assets/plugins/charts-c3/plugin.css');?>" rel="stylesheet" />
    <script src="<?php echo base_url('/assets/plugins/charts-c3/plugin.js');?>"></script>
    <!-- Google Maps Plugin -->
    <link href="<?php echo base_url('/assets/plugins/maps-google/plugin.css');?>" rel="stylesheet" />
    <script src="<?php echo base_url('/assets/plugins/maps-google/plugin.js');?>"></script>
    <!-- Input Mask Plugin -->
    <script src="<?php echo base_url('/assets/plugins/input-mask/plugin.js');?>"></script>
</head>

  <body>
    <div class="w-100 h-100 d-flex justify-content-center bg-white">
        <img src="https://images.pexels.com/photos/260689/pexels-photo-260689.jpeg?cs=srgb&dl=black-and-white-boardroom-ceiling-260689.jpg&fm=jpg" alt="" class="bg-overlay opacity-30 d-none d-sm-block">
        <div class="row align-items-center justify-content-center w-100">
            <div class="col-md-7 bg-white shadow-sm">
                <div class="row no-gutter">
                    <div class="col-md-6 bg-dark text-white p-0 align-items-center justify-content-center d-flex p-5">
                        <img src="https://images.pexels.com/photos/1345085/pexels-photo-1345085.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" class="bg-overlay opacity-20">
                        <div class="text-center position-relative">
                            <div class="text-center">
                                <img src="assets/images/logo.png" class="h-6" alt="">
                            </div>
                            <br/><br/><br/>
                            <div class="social">
                                <a href="#" class="btn bg-white rounded-circle mx-1"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="btn bg-white rounded-circle mx-1"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="btn bg-white rounded-circle mx-1"><i class="fa fa-instagram"></i></a>
                            </div>
                            <br/>
                            <p>
                                Don't have an account?<br/><br/>
                                <a href="#" class="btn btn-outline-light">Sign Up</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 p-5">
                        <h2 class="mt-3" style="font-weight: 200;">Sign In</h2>
                         <div class="form">
                        <form class="form-signin" method="post" action="auth/login">
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" class="form-control" name="username" id="username">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                            <div class="form-group">
                                <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" />
                                <span class="custom-control-label">Remember me</span>
                                </label>
                            </div>
                            <div class="form-footer">
                                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                            </div>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
