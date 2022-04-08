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
                <div class="menu-desktop">
                    <div class="logo"><a href="{{route('front.index')}}"><img src="{{asset('img/logo.jpg')}}" alt="Trendsétera"></a></div>
                    <div class="links">
                        <a href="{{route('front.about')}}" class="menu-about ">ABOUT <div class="line"></div></a>
                        <a href="{{route('front.approach')}}" class="menu-approach ">OUR APPROACH <div class="line"></div></a>
                        <a href="{{route('front.expertise')}}" class="menu-expertise ">INTEGRATED EXPERTISE <div class="line"></div></a>
                        <a href="{{route('front.clients')}}" class="menu-clients ">OUR CLIENTS <div class="line"></div></a>
                        <a href="{{route('front.services')}}" class="menu-services ">OUR SERVICES <div class="line"></div></a>
                        <div class="services-box">
                            <a href="{{route('front.services.marketing')}}" class="menu-services-marketing reveal-down-1">MARKETING CONSULTING</a>
                            <a href="{{route('front.services.pr')}}" class="menu-services-pr reveal-down-2">PR</a>
                            <a href="{{route('front.services.experience')}}" class="menu-services-experience reveal-down-3">EXPERIENCE</a>
                            <a href="{{route('front.services.btl')}}" class="menu-services-btl reveal-down-4">BTL</a>
                            <a href="{{route('front.services.irm')}}" class="menu-services-irm reveal-down-5">IRM</a>
                            <a href="{{route('front.services.social')}}" class="menu-services-social reveal-down-6">SOCIAL MEDIA</a>
                            <a href="{{route('front.services.content')}}" class="menu-services-content reveal-down-7">CONTENT</a>
                            <a href="{{route('front.services.branding')}}" class="menu-services-branding reveal-down-8">BRANDING</a>
                        </div>
                        <a href="{{route('front.team')}}" class="menu-team ">OUR TEAM <div class="line"></div></a>
                        <a href="{{route('front.contact')}}" class="menu-contact ">CONTACT <div class="line"></div></a>
                    </div>
                    <div class="social ">
                        <a href="https://www.instagram.com/" target="_blank"><img src="{{asset('img/social-1.jpg')}}" alt="Trendsétera en Instagram"></a>
                        <a href="https://www.facebook.com/" target="_blank"><img src="{{asset('img/social-2.jpg')}}" alt="Trendsétera en Instagram"></a>
                        <a href="https://twitter.com/" target="_blank"><img src="{{asset('img/social-3.jpg')}}" alt="Trendsétera en Instagram"></a>
                        <a href="https://www.tiktok.com/" target="_blank"><img src="{{asset('img/social-4.jpg')}}" alt="Trendsétera en Instagram"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 reveal-left">
                <div class="image">
                    <img src="{{asset('img/img-5.jpg')}}" alt="Trendsétera - Services">
                </div>
            </div>
            <div class="col-lg-3 reveal-left">
                <div class="number">5.</div>
                <div class="title"><h2>SERVICES</h2></div>
                <div class="info">
                    <h4>
                        SA DOLENDIT QUE A EA SEQUIAE PTATUR, QUID ET AUTAT VOLUPTI
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
    $('.menu-services').addClass('active');

    /* SERVICES BOX */
    $('.services-box').show();


</script>
</body>
</html>
