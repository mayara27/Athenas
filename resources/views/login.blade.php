<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords"
		content="Working Signin form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<!-- //Meta tag Keywords -->
	<link href="//fonts.googleapis.com/css2?family=Karla:wght@400;700&display=swap" rel="stylesheet">
	<!--/Style-CSS -->
	<link rel="stylesheet" href="{{ asset('css/login.css') }}" type="text/css" media="all" />
	<!--//Style-CSS -->

</head>
<body>
    
<!-- form section start -->
<section class="w3l-workinghny-form">
        <!-- /form -->
        <div class="workinghny-form-grid">
            <div class="wrapper">
                <div class="logo">
                    
                     <!-- <img src="{{ asset('imagens/1.png') }}" alt="Your logo" title="Your logo" style="height:100px; border: 1px solid red;"  />
                       --->
                </div>
                
                <div class="workinghny-block-grid">
                    
                    <div class="workinghny-left-img align-end">
                        <img src="{{ asset('imagens/2.png') }}" class="img-responsive"  alt="img" />
                    </div>
                    <div class="form-right-inf">
						
                        <div class="login-form-content" >
                        <div class="logo">
                            <h1><a class="brand-logo" href="/home"><span>Athena's</span> Login </a></h1>
                            @if(session()->has('msg_error'))
                        <div class="row mt-3 mb-3">
                            <div class="col-12">
                                <div class="alert alert-danger" role="alert">
                                    {{ session()->get('msg_error') }}
                                </div>
                            </div>
                        </div>
                    @endif
                        </div>
                            <form class="signin-form" action="{{ route('login.login') }}" method="POST">

                                @csrf

                                <div class="form-group one-frm">
                                    <input type="email" name="email" class="form-control" placeholder="E-mail">
                                </div>

                                <div class="form-group one-frm">
                                    <input type="password" name="password" class="form-control" placeholder="Senha">
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success btn btn-style mt-3">Login</button>
                                   
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //form -->
        <!-- copyright-->
        <div class="copyright text-center">
            <div class="wrapper">
                <p class="copy-footer-29">© 2020 Working Sign In. All rights reserved | Design by <a
                        href="https://w3layouts.com">W3layouts</a></p>
            </div>
        </div>
        <!-- //copyright-->
    </section>
    <!-- //form section start -->

    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>

