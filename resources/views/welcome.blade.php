<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="{{ env('APP_META_DESCRIPTION') }}" />
    <meta name="author" content="{{ env('APP_META_AUTHOR') }}" />
    <title>{{ env('APP_META_TITLE') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />

    @if(env('APP_ENV') == 'production')
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ env('APP_GTAG') }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', '{{ env('APP_GTAG') }}');
        </script>
    @endif
</head>
<body class="d-flex flex-column h-100">
<main class="flex-shrink-0">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
            <a class="navbar-brand" href="{{ route('index') }}">Eleições 2022</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ route('index') }}">Home</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-6 fw-bolder text-white mb-2">
                            Eleições 2022 - Segundo Turno
                        </h1>
                        <p class="lead fw-normal text-white-50 mb-4" >
                            Este site tem como background o <a href="https://laravel.com" target="_blank">
                                Laravel Framework
                            </a> e pega as informações das eleições 2022 da
                            <a
                                href="{{ env('TSE_API') }}"
                                target="_blank"
                            >
                                API oficial do TSE
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
                    <img
                        class="img-fluid rounded-3 my-5"
                        src="{{ asset('images/lula-x-bolsonaro.png') }}"
                        alt="Lula X Bolsonaro"
                    />
                </div>
            </div>
        </div>
    </header>

    <!-- Blog preview section-->
    <section class="py-1">
        <div class="container px-5 my-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <div class="text-center">
                        <h2 class="fw-bolder">Candidatos</h2>
                    </div>
                </div>
            </div>

            <div class="row gx-5">
                <div class="col-md-2"></div>
                <div class="col-lg-4 mb-5">
                    <div class="card shadow border-0">
                        <img
                            class="card-img-top"
                            src="{{ asset('images/lula.webp') }}"
                            alt="{{ $candidatos[0]['nm'] }}"
                        />
                        <div class="card-body p-4">
                            <div class="badge bg-danger bg-gradient rounded-pill mb-2">PT</div>
                            <h5 class="card-title mb-1">{{ $candidatos[0]['nm'] }}</h5>
                            <p class="card-text">
                                Vice: {{ $candidatos[0]['nv'] }}
                            </p>
                            <div class="card">
                                <div class="card-body text-center">
                                    <b><span id="lulaPvap">{{ $candidatos[0]['pvap'] }}</span>
                                        <i class="bi-percent"></i></b> <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-5">
                    <div class="card h-100 shadow border-0">
                        <img
                            class="card-img-top"
                            src="{{ asset('images/bolsonaro.jpg') }}"
                            alt="{{ $candidatos[1]['nm'] }}"
                        />
                        <div class="card-body p-4">
                            <div class="badge bg-primary bg-gradient rounded-pill mb-2">PL</div>
                            <h5 class="card-title mb-1">{{ $candidatos[1]['nm'] }}</h5>
                            <p class="card-text">
                                Vice: {{ $candidatos[1]['nv'] }}
                            </p>
                            <div class="card">
                                <div class="card-body text-center">
                                    <b><span id="bolsonaroPvap">{{ $candidatos[1]['pvap'] }}</span>
                                        <i class="bi-percent"></i></b> <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- Footer-->
<footer class="bg-dark py-4 mt-auto">
    <div class="container px-5">
        <div class="row align-items-center justify-content-between flex-column flex-sm-row">
            <div class="col-auto">
                <div class="small m-0 text-white">
                    Copyright &copy; {{ env('APP_NAME') }} {{ date('Y') }} <br>
                    Repositório no <a href="{{ env('APP_REPO') }}" target="_blank"><i class="bi-github"></i> Github</a> |
                    Template no <a href="{{ env('APP_TEMPLATE') }}" target="_blank"><i class="bi-bootstrap"></i> Startbootstrap</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Sweet Alert -->
<script src="{{ asset('js/sweetalert2.all.js') }}"></script>
<link rel="stylesheet" href="{{ asset('js/sweetalert2.css') }}">

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src='https://cdn.rawgit.com/admsev/jquery-play-sound/master/jquery.playSound.js'></script>
<script>
    $(document).ready(function(){
        let show = false;
        setInterval(function(){
            $.ajax({
                url:'/ele2022',
                type:'GET',
                dataType:'json',
                success:function(response) {
                    if(response.cand.length > 0) {
                        var lula = response.cand[0];
                        var bolsonaro = response.cand[1];
                    }

                    $('#lulaPvap').empty();
                    $('#lulaPvap').append(lula.pvap);

                    $('#bolsonaroPvap').empty();
                    $('#bolsonaroPvap').append(bolsonaro.pvap);

                    if((parseFloat(lula.pvap) > parseFloat(bolsonaro.pvap) && (show === true))) {
                        show = false;
                        Swal.fire({
                            timer: 3000,
                            title: 'O Lula passou o Bolsonaro',
                            width: 600,
                            padding: '3em',
                            color: '#ff0000',
                            background: '#fff url(/images/trees.png)',
                            backdrop: `
                            rgba(0,0,123,0.4)
                            url("/images/nyan-cat.gif")
                            left top
                            no-repeat
                          `
                        })
                    }

                    if((parseFloat(bolsonaro.pvap) >= parseFloat(lula.pvap))) {
                        show = true;
                    }

                },error:function(err) {
                    console.log(err)
                }
            })
        }, {{ env('APP_TIME_TO_UPDATE_INFO') }});
    });
</script>
</body>
</html>
