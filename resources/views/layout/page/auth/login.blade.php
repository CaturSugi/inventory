<!DOCTYPE html>
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Metronic | Login Options - Login Form 1</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="{{ asset("templates/assets/global/plugins/font-awesome/css/font-awesome.min.css") }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset("templates/assets/global/plugins/simple-line-icons/simple-line-icons.min.css") }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset("templates/assets/global/plugins/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset("templates/assets/global/plugins/uniform/css/uniform.default.css") }}" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="{{ asset("templates/assets/admin/pages/css/login.css") }}" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="{{ asset("templates/assets/global/css/components-rounded.css") }}" id="style_components" rel="stylesheet" type="text/css"/>
<link href="{{ asset("templates/assets/global/css/plugins.css") }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset("templates/assets/admin/layout/css/layout.css") }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset("templates/assets/admin/layout/css/themes/default.css") }}" rel="stylesheet" type="text/css" id="style_color"/>
<link href="{{ asset("templates/assets/admin/layout/css/custom.css") }}" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGO -->
<div class="logo">
	<a href="index.html">
	<img src="{{ asset("templates/assets/admin/layout4/img/logo-big.png") }}" alt=""/>
	</a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
	<!-- BEGIN LOGIN FORM -->
    <form class="login-form" action="{{ route('login') }}" method="post">
        @csrf
        <h3 class="form-title">Sign In</h3>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Email</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="email" autocomplete="off" placeholder="Email" name="email" value="{{ old('email') }}"/>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
        </div>
        <div class="form-actions">
            <div class="text-center">
                <button type="submit" class="btn btn-success uppercase">Login</button>
            </div>
                <div class="text-center">
                    <a href="{{ url('/') }}" class="btn btn-link">Back to Home</a>
                </div>
        </div>
    </form>
	<!-- END LOGIN FORM -->
</div>
<div class="copyright">
	 2014 © Metronic. Admin Dashboard Template.
</div>
<!-- END LOGIN -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="{{ asset("templates/assets/global/plugins/jquery.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/global/plugins/jquery-migrate.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/global/plugins/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/global/plugins/jquery.blockui.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/global/plugins/uniform/jquery.uniform.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/global/plugins/jquery.cokie.min.js") }}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ asset("templates/assets/global/plugins/jquery-validation/js/jquery.validate.min.js") }}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset("templates/assets/global/scripts/metronic.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/admin/layout/scripts/layout.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/admin/layout/scripts/demo.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/admin/pages/scripts/login.js") }}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {     
Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Login.init();
Demo.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>