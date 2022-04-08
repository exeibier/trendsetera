<!doctype html>
<html lang="es">
<!-- INCLUYENDO HEAD -->
<head>
    @include('front.includes.head')
</head>
<body>

<div class="master-box page-general page-contact">

    <section class="home">
        <div class="row">
            <div class="col-lg-3">
                {{-- MENU --}}
                @include('front.includes.menu')
            </div>
            <div class="col-lg-9">
                <div class="title reveal-left"><h2>CONTÁCTANOS</h2></div>
                <div class="contact-info">
                    <div class="row">
                        <div class="col-lg-4 box-border reveal-left">
                            <p>
                                <b>RELACIONES PÚBLICAS</b>
                            </p>
                            <p>
                                <a href="mailto:lolmedo@trendstera.com.mx">lolmedo@trendstera.com.mx</a>
                            </p>
                        </div>
                        <div class="col-lg-4 box-border reveal-left">
                            <p>
                                <b>NUEVOS CLIENTES</b>
                            </p>
                            <p>
                                <a href="mailto:cchamon@trendsetera.com.mx">cchamon@trendsetera.com.mx</a>
                            </p>
                        </div>
                        <div class="col-lg-4 reveal-left">
                            <p>
                                <b>CLIENTES</b>
                            </p>
                            <p>
                                <a href="mailto:jennifer@trendsetera.com.mx">jennifer@trendsetera.com.mx</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="contact-form reveal-left">
                    <div class="title"><h2>MANTÉNTE EN CONTACTO</h2></div>
                    <form>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="label">NOMBRE:</div>
                                <input type="text" name="name" class="form-control">
                                <div class="label">COMPAÑIA:</div>
                                <input type="text" name="company" class="form-control">
                                <div class="label">EMAIL:</div>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="col-lg-6">
                                <div class="label">ASUNTO:</div>
                                <textarea name="subject" class="form-control"></textarea>
                                <div class="right">
                                    <button type="submit">ENVIAR</button>
                                </div>
                            </div>
                        </div>
                    </form>
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
    $('.menu-contact').addClass('active');


</script>
</body>
</html>
