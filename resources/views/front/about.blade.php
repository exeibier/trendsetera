<!doctype html>
<html lang="es">
<!-- INCLUYENDO HEAD -->
<head>
    @include('front.includes.head')
</head>
<body>

{{-- PAGE - HOME --}}
<div class="master-box page-general page-about">

    <section class="home">
        <div class="row">
            <div class="col-lg-3">
                {{-- MENU --}}
                @include('front.includes.menu')
            </div>
            <div class="col-lg-5 reveal-left">
                <div class="image">
                    <img src="{{asset('img/img-2.jpg')}}" alt="Trendsétera - About">
                </div>
            </div>
            <div class="col-lg-3 reveal-left">
                <div class="number">1.</div>
                <div class="title"><h2>ABOUT</h2></div>
                <div class="subtitle"><h3>FOR THE PAST 15 YEARS IN BUSINESS.</h3></div>
                <div class="text">
                    <p>
                        Trendsétera has remained fiercely indepen- dent. Allowing us to become growth partners for our clients in Mexico and the world. Part agency, part consultancy, part design bureau;
                    </p>
                </div>
                <div class="info">
                    <h4>
                        WE ARE A GROUP OF CREATIVE FREE-THINKING INDIVIDUALS,
                        FOCUSED ON BEING THE BEST,
                        RATHER THAN AWARDED.
                    </h4>
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
    $('.menu-about').addClass('active');


</script>
</body>
</html>
