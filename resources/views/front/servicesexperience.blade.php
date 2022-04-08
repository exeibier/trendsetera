<!doctype html>
<html lang="es">
<!-- INCLUYENDO HEAD -->
<head>
    @include('front.includes.head')
</head>
<body>

{{-- PAGE - HOME --}}
<div class="master-box page-general page-services">

    <section class="home">
        <div class="row">
            <div class="col-lg-3">
                {{-- MENU --}}
                @include('front.includes.menu')
            </div>
            <div class="col-lg-5 reveal-left">
                <div class="image">
                    <img src="{{asset('img/img-8.jpg')}}" alt="Trendsétera - EXPERIENCE">
                </div>
            </div>
            <div class="col-lg-3 reveal-left">
                <div class="title"><h1>SERVICES</h1></div>
                <div class="service"><h2>EXPERIENCE</h2></div>
                <div class="info">
                    <h4>
                        SA DOLENDIT QUE A EA SEQUIAE PTATUR, QUID ET AUTAT VOLUPTI
                    </h4>
                </div>
                <div class="text">
                    <p>
                        Esed quibusdae solorpo remquun tectem. Ebit ad untur acest, ullestiniSitatur archil im vendiat venimil iuscipsus dolorestis ratumquae. Minum
                    </p>
                </div>
            </div>
        </div>
    </section>



</div>

{{-- SCRIPTS --}}
@include('front.includes.footer')

{{-- SCRIPTS --}}
@include('front.includes.scripts')

<script type="text/javascript">

    /* MENU ACTIVE */
    $('.menu-services').addClass('active');
    $('.menu-services-experience').addClass('active');

    /* SERVICES BOX */
    $('.services-box').show();


</script>
</body>
</html>
