<!doctype html>
<html lang="es">
<!-- INCLUYENDO HEAD -->

<head>
    @include('front.includes.head')
</head>

<body>

    {{-- PAGE - HOME --}}
    <div class="master-box page-general page-clients">

        <section class="home">
            <div class="row">
                <div class="col-lg-3">
                    {{-- MENU --}}
                    @include('front.includes.menu')
                </div>
                <div class="col-lg-9">
                    <div class="clients-title reveal-left">
                        <div class="number">4.</div>
                        <div class="title">
                            <h2>CLIENTS</h2>
                        </div>
                    </div>
                    <div class="divider-1 reveal-left"></div>
                    <div class="divider-2 reveal-left"></div>
                    <div class="clients-box">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="animation-block reveal-down-1">
                                    <div class="item"><b>NESTLÉ</b></div>
                                    <div class="item">Perrier</div>
                                    <div class="item">S.Pellegrino</div>
                                    <div class="item">Acqua Panna</div>
                                    <div class="item">Sta María</div>
                                    <div class="item">Nescafé</div>
                                    <div class="item">Kit Kat</div>
                                    <div class="item">Nespresso</div>
                                    <div class="item">CofeeMate</div>
                                    <div class="item">Starbucks At Home</div>
                                    <div class="item">Purina</div>
                                    <div class="item">NAN</div>
                                    <div class="item">Nidal</div>
                                    <div class="item">Chocolate Abuelita</div>
                                    <div class="item">Maggi</div>
                                    <div class="item">Carlos V</div>
                                    <div class="item">Consomate</div>
                                    <div class="item">Dog Chow</div>
                                    <div class="item">Maternal Nutrition</div>
                                    <div class="item">Secret</div>
                                    <div class="item">Nestlé Professional</div>
                                    <div class="item">Svelty</div>
                                    <div class="item">Gerber</div>
                                    <div class="item">Corporate</div>
                                    <div class="space"></div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                {{-- <div class="animation-block reveal-down-3">
                                <div class="item"><b>COCA COLA CO</b></div>
                                <div class="item">Coke</div>
                                <div class="item">Coke Light</div>
                                <div class="item">Sprite</div>
                                <div class="item">Fanta</div>
                                <div class="item">Innocent</div>
                                <div class="item">Nestea</div>
                                <div class="space"></div>
                            </div> --}}
                                <div class="animation-block reveal-down-4">
                                    <div class="item"><b>DIAGEO</b></div>
                                    <div class="item">Johnnie Walker</div>
                                    <div class="item">Smirnoff</div>
                                    <div class="item">Buchanan’s </div>
                                    <div class="item">Baileys</div>
                                    <div class="item">Black & White</div>
                                    <div class="space"></div>
                                </div>
                                <div class="animation-block reveal-down-6">
                                    <div class="item"><b>Church and Dwight</b></div>
                                    <div class="item">Trojan</div>
                                    <div class="item">Flawless</div>
                                    <div class="item">Batiste</div>
                                    <div class="item">Waterpick</div>
                                    <div class="item">Sterimar</div>
                                    <div class="space"></div>
                                </div>
                                <div class="animation-block reveal-down-6">
                                    <div class="item"><b>RBI</b></div>
                                    <div class="item">Popeyes</div>
                                    <div class="item">Burger King</div>
                                    <div class="space"></div>
                                </div>
                                {{-- <div class="animation-block reveal-down-5">
                                <div class="item"><b>CUERVO</b></div>
                                <div class="item">José Cuervo</div>
                                <div class="item">Don Julio</div>
                                <div class="item">1800</div>
                                <div class="item">Maestro Dobel</div>
                            </div> --}}
                            </div>
                            <div class="col-lg-2">
                                <div class="animation-block reveal-down-2">
                                    <div class="item"><b>Grupo Modelo</b></div>
                                    <div class="item">Corona</div>
                                    <div class="item">Cerveza Modelo</div>
                                    <div class="item">Michelob Ultra</div>
                                    <div class="item">Bud Light</div>
                                    <div class="item">Stella Artois</div>
                                    <div class="item">Becks</div>
                                    <div class="item">Michelob Seltzer</div>
                                    <div class="item">Pacifico</div>
                                    <div class="item">Victoria</div>
                                    <div class="item">Z Tech</div>
                                    <div class="item">Craft Beer Portfolio</div>
                                    <div class="item">AB Inbev Corporate</div>
                                    <div class="space"></div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="animation-block reveal-down-12">
                                    <div class="item"><b>SOFITEL</b></div>
                                    <div class="item"><b>BMW</b></div>
                                    <div class="item"><b>LEVY HOLDING</b></div>
                                    <div class="item"><b>BEAT</b></div>
                                    <div class="item"><b>DECATHLON</b></div>
                                    <div class="item"><b>MERCK</b></div>
                                    <div class="item"><b>MSD</b></div>
                                    <div class="item"><b>DIDI</b></div>
                                    <div class="item"><b>LVMH (Europe)</b></div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="animation-block reveal-down-11">
                                    <div class="item"><b>LIVERPOOL</b></div>
                                    <div class="item"><b>TOUS</b></div>
                                    <div class="item"><b>SALVATORE FERRAGAMO</b></div>
                                    <div class="item"><b>HARLEY DAVIDSON</b></div>
                                    <div class="item"><b>SIX FLAGS</b></div>
                                    <div class="item"><b>MSD</b></div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="animation-block reveal-down-12">
                                    <div class="item"><b>MERCK</b></div>
                                    <div class="item"><b>MERCK CENTRO AMERICA & CONO SUR</b></div>
                                    <div class="item"><b>BAYER</b></div>
                                    <div class="item"><b>KONFIO</b></div>
                                    <div class="item"><b>FONDEADORA</b></div>
                                    <div class="item"><b>MABE</b></div>
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
        $('.menu-clients').addClass('active');
    </script>
</body>

</html>
