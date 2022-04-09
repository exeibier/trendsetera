<!doctype html>
<html lang="es">
<!-- INCLUYENDO HEAD -->
<head>
    @include('front.includes.head')
</head>
<body>

{{-- PAGE - HOME --}}
<div class="master-box page-general page-home">

    <section class="home">
        <div class="row">
            <div class="col-lg-3">
                {{-- MENU --}}
                <div class="menu-desktop">
                    <div class="logo"><a href="{{route('front.index')}}"><img src="{{asset('img/logo.jpg')}}" alt="Trendsétera"></a></div>
                    <div class="links">
                        <a href="{{route('front.about')}}" class="menu-about reveal-down-1">ABOUT <div class="line"></div></a>
                        <a href="{{route('front.approach')}}" class="menu-approach reveal-down-2">OUR APPROACH <div class="line"></div></a>
                        <a href="{{route('front.expertise')}}" class="menu-expertise reveal-down-3">INTEGRATED EXPERTISE <div class="line"></div></a>
                        <a href="{{route('front.clients')}}" class="menu-clients reveal-down-4">OUR CLIENTS <div class="line"></div></a>
                        <a href="{{route('front.services')}}" class="menu-services reveal-down-5">OUR SERVICES <div class="line"></div></a>
                        {{-- <div class="services-box">
                            <a href="{{route('front.services.marketing')}}" class="menu-services-marketing">MARKETING CONSULTING </a>
                            <a href="{{route('front.services.pr')}}" class="menu-services-pr">PR</a>
                            <a href="{{route('front.services.experience')}}" class="menu-services-experience">EXPERIENCE</a>
                            <a href="{{route('front.services.btl')}}" class="menu-services-btl">BTL</a>
                            <a href="{{route('front.services.irm')}}" class="menu-services-irm">IRM</a>
                            <a href="{{route('front.services.social')}}" class="menu-services-social">SOCIAL MEDIA</a>
                            <a href="{{route('front.services.content')}}" class="menu-services-content">CONTENT</a>
                            <a href="{{route('front.services.branding')}}" class="menu-services-branding">BRANDING</a>
                        </div> --}}
                        <a href="#" class="menu-team reveal-down-6">OUR TEAM <div class="line"></div></a>
                        <a href="{{route('front.contact')}}" class="menu-contact reveal-down-7">CONTACT <div class="line"></div></a>
                    </div>
                    <div class="social reveal-down-8">
                        <a href="https://www.instagram.com/" target="_blank"><img src="{{asset('img/social-1.jpg')}}" alt="Trendsétera en Instagram"></a>
                        <a href="https://www.facebook.com/" target="_blank"><img src="{{asset('img/social-2.jpg')}}" alt="Trendsétera en Instagram"></a>
                        <a href="https://twitter.com/" target="_blank"><img src="{{asset('img/social-3.jpg')}}" alt="Trendsétera en Instagram"></a>
                        <a href="https://www.tiktok.com/" target="_blank"><img src="{{asset('img/social-4.jpg')}}" alt="Trendsétera en Instagram"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="image reveal-fade">
                    <img src="{{asset('img/img-1.jpg')}}" alt="Trendsétera - Homepage">
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



</script>
</body>
</html>
