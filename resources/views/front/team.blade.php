<!doctype html>
<html lang="es">
<!-- INCLUYENDO HEAD -->

<head>
    @include('front.includes.head')
</head>

<body>

    {{-- PAGE - HOME --}}
    <div class="master-box page-general page-team">

        <section class="home">
            <div class="row">
                <div class="col-lg-3">
                    {{-- MENU --}}
                    @include('front.includes.menu')
                </div>
                <div class="col-lg-3 reveal-left">
                    <div class="number">6.</div>
                    <div class="title">
                        <h2>OUR TEAM</h2>
                    </div>
                    <div class="info">
                        {{-- <h4>
                            SA DOLENDIT QUE A EA SEQUIAE PTATUR, QUID ET AUTAT VOLUPTI
                        </h4> --}}
                    </div>
                </div>
                <div class="col-lg-6 reveal-left">
                    <div class="team">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="item">
                                    <div class="photo-box">
                                        <div class="photo"
                                            style="background-image: url({{ asset('img/team-1.jpg') }})"></div>
                                    </div>
                                    {{-- <div class="name">GERARDO GUTIÉRREZ</div>
                                <div class="position">PROJECT MANAGER</div>
                                <div class="text">
                                    <p>
                                        porum expliqu odicae quodicias as experorae eos qui aut audaes
                                    </p>
                                </div> --}}
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item">
                                    <div class="photo-box">
                                        <div class="photo"
                                            style="background-image: url({{ asset('img/team-2.jpg') }})"></div>
                                    </div>
                                    {{-- <div class="name">GERARDO GUTIÉRREZ</div>
                                <div class="position">PROJECT MANAGER</div>
                                <div class="text">
                                    <p>
                                        porum expliqu odicae quodicias as experorae eos qui aut audaes
                                    </p>
                                </div> --}}
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item">
                                    <div class="photo-box">
                                        <div class="photo"
                                            style="background-image: url({{ asset('img/team-3.jpg') }})"></div>
                                    </div>
                                    {{-- <div class="name">GERARDO GUTIÉRREZ</div>
                                    <div class="position">PROJECT MANAGER</div>
                                <div class="text">
                                    <p>
                                        porum expliqu odicae quodicias as experorae eos qui aut audaes
                                    </p>
                                </div> --}}
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item">
                                    <div class="photo-box">
                                        <div class="photo"
                                            style="background-image: url({{ asset('img/team-4.jpg') }})"></div>
                                    </div>
                                    {{-- <div class="name">GERARDO GUTIÉRREZ</div>
                                    <div class="position">PROJECT MANAGER</div>
                                    <div class="text">
                                        <p>
                                            porum expliqu odicae quodicias as experorae eos qui aut audaes
                                        </p>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
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
        $('.menu-team').addClass('active');
    </script>
</body>

</html>
