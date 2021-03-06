<div class="ms-hero ms-hero-material">
    <span class="ms-hero-bg"></span>
    <div class="container">
      <div class="row">
        <div class="col-xl-6 col-lg-7">
          <div id="carousel-hero" class="carousel slide carousel-fade" data-ride="carousel" data-interval="8000">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <div class="carousel-caption">
                  <div class="ms-hero-material-text-container">
                    <header class="ms-hero-material-title animated slideInLeft animation-delay-5">
                      <h1 class="animated fadeInLeft animation-delay-15 font-smoothing"><strong>FACEBOL SRL</strong></h1>
                      <h2 class="animated fadeInLeft animation-delay-18">¡¡¡¡ Hazlo Diferente !!!!</h2>
                    </header>
                    <ul class="ms-hero-material-list">
                      <li class="">
                        <div class="ms-list-icon animated zoomInUp animation-delay-18">
                          <span class="ms-icon ms-icon-circle ms-icon-xlg color-danger shadow-3dp">
                            <i class="zmdi zmdi-check"></i>
                          </span>
                        </div>
                        <div class="ms-list-text animated fadeInRight animation-delay-19">{{$institucion->frase1}}</div>
                      </li>
                      <li class="">
                        <div class="ms-list-icon animated zoomInUp animation-delay-20">
                          <span class="ms-icon ms-icon-circle ms-icon-xlg color-warning shadow-3dp">
                            <i class="zmdi zmdi-check"></i>
                          </span>
                        </div>
                        <div class="ms-list-text animated fadeInRight animation-delay-21">{{$institucion->frase2}}</div>
                      </li>
                    </ul>
                   <div class="ms-hero-material-buttons text-right">
                      <div class="ms-hero-material-buttons text-right">
                        <!--<a href="javascript:void(0);" class="btn btn-warning btn-raised animated fadeInLeft animation-delay-24 mr-2">
                          <i class="zmdi zmdi-settings"></i> Personalize</a>-->
                        <a href="javascript:void(0);" class="btn btn-success btn-raised animated fadeInRight animation-delay-24" data-toggle="modal" data-target="#ms-account-modal">
                          <i class="zmdi zmdi-account"></i> Iniciar Sesión</a>
                      </div>
                    </div>
                  </div>
                  <!-- ms-hero-material-text-container -->
                </div>
              </div>
              <div class="carousel-item">
                <div class="carousel-caption">
                  <div class="ms-hero-material-text-container">
                    <header class="ms-hero-material-title animated slideInLeft animation-delay-5">
                      <h1 class="animated fadeInLeft animation-delay-15 font-smoothing"><strong>FACEBOL SRL</strong></h1>
                      <h2 class="animated fadeInLeft animation-delay-18">¡¡¡¡ Hazlo Diferente !!!!</h2>
                    </header>
                    <ul class="ms-hero-material-list">
                      <li class="">
                        <div class="ms-list-icon animated zoomInUp animation-delay-20">
                          <span class="ms-icon ms-icon-circle ms-icon-xlg color-royal shadow-3dp">
                            <i class="zmdi zmdi-check"></i>
                          </span>
                        </div>
                        <div class="ms-list-text animated fadeInRight animation-delay-21">{{$institucion->frase1}}</div>
                      </li>
                      <li class="">
                        <div class="ms-list-icon animated zoomInUp animation-delay-22">
                          <span class="ms-icon ms-icon-circle ms-icon-xlg color-warning shadow-3dp">
                            <i class="zmdi zmdi-check"></i>
                          </span>
                        </div>
                        <div class="ms-list-text animated fadeInRight animation-delay-23">{{$institucion->frase3}}</div>
                      </li>
                    </ul>
                    <div class="ms-hero-material-buttons text-right">
                      <div class="ms-hero-material-buttons text-right">
                        <a href="javascript:void(0);" class="btn btn-success btn-raised animated fadeInRight animation-delay-24" data-toggle="modal" data-target="#ms-account-modal">
                          <i class="zmdi zmdi-account"></i> Iniciar Session</a>
                      </div>
                    </div>
                  </div>
                  <!-- ms-hero-material-text-container -->
                </div>
              </div>
              <div class="carousel-item">
                <div class="carousel-caption">
                  <div class="ms-hero-material-text-container">
                    <header class="ms-hero-material-title animated slideInLeft animation-delay-5">
                      <h1 class="animated fadeInLeft animation-delay-15 font-smoothing"><strong>FACEBOL SRL</strong></h1>
                      <h2 class="animated fadeInLeft animation-delay-18">¡¡¡¡ Hazlo Diferente !!!!</h2>
                    </header>
                    <ul class="ms-hero-material-list">
                      <li class="">
                        <div class="ms-list-icon animated zoomInUp animation-delay-18">
                          <span class="ms-icon ms-icon-circle ms-icon-xlg color-danger shadow-3dp">
                            <i class="zmdi zmdi-check"></i>
                          </span>
                        </div>
                        <div class="ms-list-text animated fadeInRight animation-delay-19">{{$institucion->frase3}}</div>
                      </li>
                      <li class="">
                        <div class="ms-list-icon animated zoomInUp animation-delay-20">
                          <span class="ms-icon ms-icon-circle ms-icon-xlg color-info shadow-3dp">
                            <i class="zmdi zmdi-check"></i>
                          </span>
                        </div>
                        <div class="ms-list-text animated fadeInRight animation-delay-21">{{$institucion->frase2}}.</div>
                      </li>
                    </ul>
                    <div class="ms-hero-material-buttons text-right">
                      <a href="javascript:void(0);" class="btn btn-success btn-raised animated fadeInRight animation-delay-24" data-toggle="modal" data-target="#ms-account-modal">
                        <i class="zmdi zmdi-account"></i> Iniciar Session</a>
                    </div>
                  </div>
                  <!-- ms-hero-material-text-container -->
                </div>
              </div>
              <div class="carousel-controls">
                <!-- Controls -->
                <a class="left carousel-control animated zoomIn animation-delay-30" href="#carousel-hero" role="button" data-slide="prev">
                  <i class="zmdi zmdi-chevron-left"></i>
                  <span class="sr-only">Anterior</span>
                </a>
                <a class="right carousel-control animated zoomIn animation-delay-30" href="#carousel-hero" role="button" data-slide="next">
                  <i class="zmdi zmdi-chevron-right"></i>
                  <span class="sr-only">Siguiente</span>
                </a>
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#carousel-hero" data-slide-to="0" class="animated fadeInUpBig animation-delay-27 active"></li>
                  <li data-target="#carousel-hero" data-slide-to="1" class="animated fadeInUpBig animation-delay-28"></li>
                  <li data-target="#carousel-hero" data-slide-to="2" class="animated fadeInUpBig animation-delay-29"></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-5">
          <div class="ms-hero-img animated zoomInUp animation-delay-30">
            <img src="{{asset('imagen/institucion/mock-imac-material2.png')}}" alt="" class="img-fluid">
            <div id="carousel-hero-img" class="carousel carousel-fade slide" data-ride="carousel" data-interval="3000">
              <!-- Indicators -->
              <ol class="carousel-indicators carousel-indicators-hero-img">
                <li data-target="#carousel-hero-img" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-hero-img" data-slide-to="1"></li>
                <li data-target="#carousel-hero-img" data-slide-to="2"></li>
              </ol>
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="ms-hero-img-slider carousel-item active">
                  <img src="{{asset('imagen/institucion/'.$institucion->banner1)}}" alt="" class="img-fluid"> </div>
                <div class="ms-hero-img-slider carousel-item">
                  <img src="{{asset('imagen/institucion/'.$institucion->banner2)}}" alt="" class="img-fluid"> </div>
                <div class="ms-hero-img-slider carousel-item">
                  <img src="{{asset('imagen/institucion/'.$institucion->banner3)}}" alt="" class="img-fluid"> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- container -->
  </div>