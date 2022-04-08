<!doctype html>
<html lang="es">
<!-- INCLUYENDO HEAD -->
<head>
    @include('front.includes.head')
</head>
<body>

{{-- PAGE - HOME --}}
<div class="master-box page-general page-expertise">

    <section class="home">
        <div class="row">
            <div class="col-lg-3">
                {{-- MENU --}}
                @include('front.includes.menu')
            </div>
            <div class="col-lg-5 reveal-left">
                <div class="image">
                    <img src="{{asset('img/img-4.jpg')}}" alt="Trendsétera - Expertise">
                </div>
            </div>
            <div class="col-lg-3 reveal-left">
                <div class="number">3.</div>
                <div class="title"><h2>INTEGRATED EXPERTISE</h2></div>
                <div class="info">
                    <h4>
                        WE ARE A ONE STOP MARKETING RESOURCE, LOOKING TO BUILD A CLEAR AND CONSISTENT MESSAGE,
                    </h4>
                </div>
                <div class="text">
                    <p>
                        Even in complex models of communications with full accountability.
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
    $('.menu-expertise').addClass('active');


</script>
</body>
</html>
