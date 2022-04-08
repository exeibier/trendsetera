<!doctype html>
<html lang="es">
<!-- INCLUYENDO HEAD -->
<head>
    @include('front.includes.head')
</head>
<body>

{{-- PAGE - HOME --}}
<div class="master-box page-general page-approach">

    <section class="home">
        <div class="row">
            <div class="col-lg-3">
                {{-- MENU --}}
                @include('front.includes.menu')
            </div>
            <div class="col-lg-5 reveal-left">
                <div class="image">
                    <img src="{{asset('img/img-3.jpg')}}" alt="Trendsétera - Approach">
                </div>
            </div>
            <div class="col-lg-3 reveal-left">
                <div class="number">2.</div>
                <div class="title"><h2>OUR APPROACH</h2></div>
                <div class="info">
                    <h4>
                        WITH CREATIVITY FOCUSED ON EFFICIENCY, WE CREATE INTEGRATED SOLUTIONS.
                    </h4>
                </div>
                <div class="text">
                    <p>
                        Helping brands build authentic and long-term connections with their audience, empowering them to move at the speed of culture.
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
    $('.menu-approach').addClass('active');


</script>
</body>
</html>
