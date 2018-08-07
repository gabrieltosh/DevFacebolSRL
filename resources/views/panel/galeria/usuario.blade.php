<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Facebol SRL | Panel</title>
        <!-- Vendor CSS -->
          <!-- Vendor CSS -->
        <link href="{{asset('vendors/bower_components/animate.css/animate.min.css')}}" rel="stylesheet">
        <link href="{{asset('vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css')}}" rel="stylesheet">
        <link href="{{asset('vendors/bower_components/lightgallery/dist/css/lightgallery.min.css')}}" rel="stylesheet">
        <link href="{{asset('vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css')}}" rel="stylesheet">
        <link href="{{asset('vendors/bower_components/google-material-color/dist/palette.css')}}" rel="stylesheet">

        <!-- CSS -->
        <link href="{{asset('css/app.min.1.css')}}" rel="stylesheet">
        <link href="{{asset('css/app.min.2.css')}}" rel="stylesheet">
    </head>

    <body data-ma-header="teal">
            @include('panel.partes.header')
        <section id="main">
           @include('panel.partes.paneles')

           @include('panel.partes.menu')
            <section id="content">
                <div class="container">
                   <div class="c-header">
                     <h2>Galeria de Imagenes</h2>
                 </div>

                <div class="card">
                    <div class="action-header clearfix palette-Teal-400 bg">
                        <div class="ah-label hidden-xs palette-White text">Imagenes de los Usuarios</div>
                    </div>

                    <div class="card-body card-padding">
                        <div class="lightbox photos">
						@foreach($dir as $imagen)
                            <div data-src="{{asset('imagen/usuarios/'.$imagen)}}" class="col-md-2 col-sm-4 col-xs-6">
                            	
                                <div class="lightbox-item p-item">
                                    <img src="{{asset('imagen/usuarios/'.$imagen)}}" alt="" width="250px" height="120px" />
                                </div>

                            </div>
						@endforeach
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
                    
                </div>
            </section>

          @include('panel.partes.footer')

        </section>

        <!-- Page Loader -->
        <div class="page-loader palette-Teal bg">
            <div class="preloader pl-xl pls-white">
                <svg class="pl-circular" viewBox="25 25 50 50">
                    <circle class="plc-path" cx="50" cy="50" r="20"/>
                </svg>
            </div>
        </div>

        <!-- Older IE warning message -->
        <!--[if lt IE 9]>
            <div class="ie-warning">
                <h1 class="c-white">Warning!!</h1>
                <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
                <div class="iew-container">
                    <ul class="iew-download">
                        <li>
                            <a href="http://www.google.com/chrome/">
                                <img src="img/browsers/chrome.png" alt="">
                                <div>Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.mozilla.org/en-US/firefox/new/">
                                <img src="img/browsers/firefox.png" alt="">
                                <div>Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.opera.com">
                                <img src="img/browsers/opera.png" alt="">
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.apple.com/safari/">
                                <img src="img/browsers/safari.png" alt="">
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                                <img src="img/browsers/ie.png" alt="">
                                <div>IE (New)</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>   
        <![endif]-->
	
        <!-- Javascript Libraries -->
         <script src="{{asset('vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        
        <script src="{{asset('vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
        <script src="{{asset('vendors/bower_components/Waves/dist/waves.min.js')}}"></script>
        <script src="{{asset('vendors/bootstrap-growl/bootstrap-growl.min.js')}}"></script>
        <script src="{{asset('vendors/bower_components/lightgallery/dist/js/lightgallery-all.min.js')}}"></script>
        
        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->
        
        <script src="{{asset('js/functions.js')}}"></script>
        <script src="{{asset('js/actions.js')}}"></script>
        <script src="{{asset('js/demo.js')}}"></script>
    </body>
</html>