<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Libro Quantico</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/ed-grid.min.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
<navbar class="navbar">
    <div class="ed-container">
        <div class="ed-item s-20 to-l nav-toggle-cont">
            <div class="nav-toggle" id="main-nav-toggle"></div>
        </div>
        <div class="ed-item s-100 nav-container s-main-end">
            <nav class="main-nav ed-nav l-top" id="main-nav">
                <ul class="nav ed-menu l-horizontal button-bar" id="main-menu">
                    <li class="nav-item"><a href="#razons" class="menu-link">3 Razones</a></li>
                    <li class="nav-item"><a href="#author" class="menu-link">Autor</a></li>
                    <li class="nav-item"><a href="#comments" class="menu-link">Comentarios</a></li>
                    <li class="nav-item"><a href="#benefits" class="menu-link">Beneficios</a></li>
                    <li class="nav-item button-cta"><a href="#" id="buyButton">Comprar</a></li>
                </ul>
            </nav>
        </div>
    </div>
</navbar>
<header class="header">
    <div class="ed-container fullheight s-cross-center">
        <div class="ed-item l-50 from-l s-main-center">
            <img src="./assets/images/libro.jpg" class="header-book">
        </div>
        <div class="ed-item s-100 l-50">
            <div class="ed-container ed-item s-main-center">
                <div class="logo full s-main-center m-b-1">
                    <img src="./assets/images/logo1.png" alt="Logo" class="logo s-center">
                </div>
                <h3 class="heading-3 full text-center stronger uppercase">Tu éxito no es</h3>
                <h2 class="heading-2 full text-center stronger uppercase">Negociable</h2>
            </div>
            <div class="ed-item ed-container s-100 s-main-center fromLeft-2">
                <div class="countdown">
                    <div class="countdown-container">
                        <div class="countdown-item">
                            <div class="countdown-item__number" id="days">09</div>
                            <div class="countdown-item__text">Dias</div>
                        </div>
                        <div class="countdown-item">
                            <div class="countdown-item__number" id="hours">09</div>
                            <div class="countdown-item__text">Horas</div>
                        </div>
                        <div class="countdown-item">
                            <div class="countdown-item__number" id="minutes">09</div>
                            <div class="countdown-item__text">Minutos</div>
                        </div>
                        <div class="countdown-item">
                            <div class="countdown-item__number" id="seconds">09</div>
                            <div class="countdown-item__text">Segundos</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<main class="main">
    <section class="section" id="razons">
        <div class="ed-container">
            <div class="ed-item s-100 m-b-4">
                <h2 class="heading-2 text-center m-0">
                    <strong class="strong">3 RAZONES</strong>
                </h2>
                <h4 class="heading-4 text-center strong m-b-4">PARA QUE ESTE CONTENIDO SEA TUYO.</h4>
                <div class="ed-container s-main-center">
                    <div class="ed-item s-70 m-45">
                        <p class="italic muted reason-quote s-center">
                            Claramente el sistema fue creado mucho antes de que siquiera tuvieras la primera intención de
                            emprender.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="ed-container">
            <div class="ed-item s-100 l-1-3 m-b-4">
                <div class="reasons">
                    <div class="reason s-to-center s-center">
                        <img src="./assets/images/ico1.png" class="icon1 m-b-1">
                        <h5 class="heading-5 strong">Lo que te dijeron y te lo creíste.</h5>
                        <p class="muted">
                            El sistema educativo tradicional fue creado para que sigas las reglas, y para que seas un engranaje más del
                            mecanismo.
                        </p>
                    </div>
                </div>
            </div>
            <div class="ed-item s-100 l-1-3 m-b-4">
                <div class="reasons">
                    <div class="reason s-to-center s-center">
                        <img src="./assets/images/ico2.png" class="icon2 m-b-1">
                        <h5 class="heading-5 strong">Lo que perdiste por lo que no te dijeron.</h5>
                        <p class="muted">
                            Hay cosas que el sistema educativo tradicional no te dice, que podrían hacer la diferencia entre el
                            éxito o
                            fracaso de tu empresa.
                        </p>
                    </div>
                </div>
            </div>
            <div class="ed-item s-100 l-1-3 m-b-4">
                <div class="reasons">
                    <div class="reason s-to-center s-center">
                        <img src="./assets/images/ico3.png" class="icon3 m-b-1">
                        <h5 class="heading-5 strong">Lo que te cuesta lo que te dicen y lo que no.</h5>
                        <p class="muted">
                            Si crees que éxito es caro, pues el fracaso lo es mucho más, incluso a veces es más rentable fracasar que
                            tener éxito.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section book">
        <div class="ed-container">
            <div class="ed-item s-100 m-50 m-b-3">
                <img src="./assets/images/libro2.jpg" alt="" class="image">
            </div>
            <div class="ed-item s-100 m-50 s-main-center s-cross-center">
                <h3 class="heading-3 m-b-2 text-center">DOMINANDO EL SISTEMA</h3>
                <p class="text-center muted">
                    Es el inicio de tu gran aventura financiera, reúne los conceptos básicos para garantizar tus resultados y
                    lograr rentabilidades increíbles.
                </p>
                <button class="button button-primary strong" onclick="pasarella()">Comprar</button>
            </div>
        </div>
    </section>
    <section class="section why">
        <div class="ed-container s-main-center">
            <div class="ed-item s-100 m-b-4">
                <h2 class="heading-2 strong text-center m-b-3">
                    ¿Por qué comprar
                    <br>
                    <span class="uppercase stronger">DOMINANDO EL SISTEMA?</span>
                </h2>
                <p class="muted s-center m-b-4">
                    Porque no solo compras un libro, compras una gran cantidad de beneficios quanticos y también la
                    oportunidad de ser parte de una comunidad que obtiene resultados todos los días.
                </p>
            </div>
        </div>
        <div class="ed-container">
            <div class="ed-item ed-container features">
                <div class="ed-item ed-container feature m-b-2">
                    <div class="ed-item s-100 m-50 l-30 m-b-2 s-main-center s-cross-center">
                        <img src="./assets/images/ico4.jpg" class="image">
                    </div>
                    <div class="ed-item s-100 m-50 l-70 s-cross-center">
                        <p class="muted">
                            <img src="./assets/images/check.jpg" class="check">
                            Recibe el contenido de valor que abrirá nuevas ideas en tus finanzas. Y ahorra más de S/. 7000.00 en
                            capacitaciones.
                        </p>
                    </div>
                </div>
                <div class="ed-item ed-container feature m-b-2">
                    <div class="ed-item s-100 m-50 l-30 m-b-2 s-main-center s-cross-center">
                        <img src="./assets/images/ico5.jpg" class="image">
                    </div>
                    <div class="ed-item s-100 m-50 l-70 s-cross-center">
                        <p class="muted">
                            <img src="./assets/images/check.jpg" class="check">
                            Recibe herramientas cognitivas para conocer a fondo el sistema, sé parte del sistema de una manera
                            inteligente y haz que él trabaje para ti.
                        </p>
                    </div>
                </div>
                <div class="ed-item ed-container feature m-b-2">
                    <div class="ed-item s-100 m-50 l-30 m-b-2 s-main-center s-cross-center">
                        <img src="./assets/images/ico6.jpg" class="image">
                    </div>
                    <div class="ed-item s-100 m-50 l-70 s-cross-center">
                        <p class="muted">
                            <img src="./assets/images/check.jpg" class="check">
                            Consigue que las finanzas se apliquen a tu negocio, no importa si es tradicional o innovador, el
                            capital inicial es necesario para cualquier emprendimiento.
                        </p>
                    </div>
                </div>
                <div class="ed-item ed-container feature m-b-2">
                    <div class="ed-item s-100 m-50 l-30 m-b-2 s-main-center s-cross-center">
                        <img src="./assets/images/ico7.jpg" class="image">
                    </div>
                    <div class="ed-item s-100 m-50 l-70 s-cross-center">
                        <p class="muted">
                            <img src="./assets/images/check.jpg" class="check">
                            Únete a la comunidad quantica formada por miles de empresarios y emprendedores que no se conforman con
                            las finanzas tradicionales y entre ellos logran
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="ed-container">
            <div class="ed-item s-100 s-center m-b-4">
                <img src="{{ asset('assets/images/josemanuel.jpg') }}" alt="">
            </div>
        </div>
    </section>
    <section class="section author" id="author">
        <div class="ed-container">
            <div class="ed-item s-100 s-center m-b-4">
                <h2 class="heading-2 text-center stronger">
                    EL AUTOR QUANTICO
                </h2>
            </div>
        </div>
        <div class="ed-container">
            <div class="ed-item s-100 m-50 m-b-4">
                <img src="./assets/images/autor1.jpg" alt="Jose Manuel Quantico" class="image">
            </div>
            <div class="ed-item s-100 m-50 s-main-center s-cross-center">
                <img src="./assets/images/name.png" alt="José Manuel Quantico" class="name m-b-3">
                <p class="muted small strong text-center">“Me he dedicado los últimos años a enseñar cómo tener resultados a
                    miles de
                    personas”</p>
                <p class="muted small strong text-center">
                    Ahora el conocimiento quantico de las finanzas puede estar en tus mano, antes de ser parte de nuestra
                    comunidad debes conocer como dominar el sistema.
                </p>
            </div>
        </div>
    </section>
    <section class="section community" id="comments">
        <div class="ed-container">
            <div class="ed-item s-100 m-b-4">
                <h2 class="heading-2 strong text-center">Lo que dice la comunidad quantica</h2>
            </div>
        </div>
        <div class="ed-container">
            <div class="ed-item ed-container full m-t-2">
                <div class="ed-item s-100">
                    <div class="ed-container testimonial owl-carousel">
                        <div class="carrousel-item">
                            <div class="ed-container">
                                <div class="ed-item s-100 m-30">
                                    <div class="carrouse-item__image">
                                        <img src="./assets/images/1.png" alt="">
                                    </div>
                                </div>
                                <div class="ed-item s-100 m-70">
                                    <div class="carrousel-item__quote">
                                        <p class="text-right">
                                            El conocimiento quantico debería masificarse, la educación corrrecta que permite el
                                            crecimiento
                                            personal y el desarrollo empresarial. “
                                        </p>
                                        <p class="text-right strong m-b-0">Frank Torres</p>
                                        <p class="text-right strong m-b-0">Emprendedor</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carrousel-item">
                            <div class="ed-container">
                                <div class="ed-item s-100 m-30">
                                    <div class="carrouse-item__image">
                                        <img src="./assets/images/2.png" alt="">
                                    </div>
                                </div>
                                <div class="ed-item s-100 m-70">
                                    <div class="carrousel-item__quote">
                                        <p class="text-right">
                                            Las reglas no estan escritas, estas se escriben todos los días y en
                                            la comunidad quantica lo sabemos.“
                                        </p>
                                        <p class="text-right strong m-b-0">Daniel Álvarez</p>
                                        <p class="text-right strong m-b-0">Desarrollador</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carrousel-item">
                            <div class="ed-container">
                                <div class="ed-item s-100 m-30">
                                    <div class="carrouse-item__image">
                                        <img src="./assets/images/3.png" alt="">
                                    </div>
                                </div>
                                <div class="ed-item s-100 m-70">
                                    <div class="carrousel-item__quote">
                                        <p class="text-right">
                                            La creatividad empresarial no sirve de nada sin el capital de trabajo, por
                                            eso nos apalancamos en el conocimiento quantico“
                                        </p>
                                        <p class="text-right strong m-b-0">José Melendez</p>
                                        <p class="text-right strong m-b-0">Empresario</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carrousel-item">
                            <div class="ed-container">
                                <div class="ed-item s-100 m-30">
                                    <div class="carrouse-item__image">
                                        <img src="./assets/images/4.png" alt="">
                                    </div>
                                </div>
                                <div class="ed-item s-100 m-70">
                                    <div class="carrousel-item__quote">
                                        <p class="text-right">
                                            El desarrollo sostenido de una país, no depende del gobierno, depende de
                                            los emprendedores y de los emprendimientos valientes“
                                        </p>
                                        <p class="text-right strong m-b-0">Anelsi Sánchez</p>
                                        <p class="text-right strong m-b-0">Diseñador</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section mega-banner">
        <div class="accordion-container">
            <a href="#" class="accordion-titulo">Pago de membresia (Adelanto o cancelación) <span class="toggle-icon"></span></a>
            <div class="accordion-content">
                <div class="ed-container">
                    @foreach ($mem as $m)
                        <div class="ed-item s-100 l-1-3">
                            <button class="btn-golden pay" data-price="{{ $m['ammount'] }}">{{ $m['label'] }}</button>
                        </div>
                    @endforeach
                    {{-- <div class="ed-item s-100 l-1-3">
                        <button class="btn-golden">S/. 2,500.00</button>
                    </div>
                    <div class="ed-item s-100 l-1-3">
                        <button class="btn-golden">S/. 4,000.00</button>
                    </div>
                    <div class="ed-item s-100 l-1-3">
                        <button class="btn-golden">S/. 5,000.00</button>
                    </div>
                    <div class="ed-item s-100 l-1-3">
                        <button class="btn-golden">S/. 10,000.00</button>
                    </div>
                    <div class="ed-item s-100 l-1-3">
                        <button class="btn-golden">S/. 15,000.00</button>
                    </div>
                    <div class="ed-item s-100 l-1-3">
                        <button class="btn-golden">S/. 20,000.00</button>
                    </div>
                    <div class="ed-item s-100 l-1-3">
                        <button class="btn-golden">S/. 25,000.00</button>
                    </div> --}}
                </div>
            </div>  
        </div>    
    </section>
    <section class="section">
        <div class="ed-container">
            <div class="ed-item s-100 m-b-3">
                <h2 class="heading-2 stronger text-center">GRATIS POR TU COMPRA</h2>
            </div>
            <div class="ed-item s-100 s-main-center s-cross-center m-b-3">
                <div class="purchase-carousel owl-carousel">
                    <div class="item">
                        <div class="after-purchase-header">
                            <img src="{{ asset('assets/images/slider01.png') }}" alt="">
                        </div>
                        <div class="after-purchase-body">
                            Libro Autografiado por Jose Manuel
                        </div>
                    </div>
                    <div class="item">
                        <div class="after-purchase-header">
                            <img src="{{ asset('assets/images/slider02.png') }}" alt="">
                        </div>
                        <div class="after-purchase-body">
                            Tarjeta de presentación de Jose Manuel
                        </div>
                    </div>
                    <div class="item">
                        <div class="after-purchase-header">
                            <img src="{{ asset('assets/images/slider03.png') }}" alt="">
                        </div>
                        <div class="after-purchase-body">
                            Caja Sólida Multifunción de alta gama
                        </div>
                    </div>
                    <div class="item">
                        <div class="after-purchase-header">
                            <img src="{{ asset('assets/images/slider04.png') }}" alt="">
                        </div>
                        <div class="after-purchase-body">
                            Portatarjetero de cuero con imán
                        </div>
                    </div>
                    <div class="item">
                        <div class="after-purchase-header">
                            <img src="{{ asset('assets/images/slider05.png') }}" alt="">
                        </div>
                        <div class="after-purchase-body">
                            Lapicero Quantico de alta gama
                        </div>
                    </div>
                    <div class="item">
                        <div class="after-purchase-header">
                            <img src="{{ asset('assets/images/slider06.png') }}" alt="">
                        </div>
                        <div class="after-purchase-body">
                            Tarjeta La Mágica Quantico Black
                        </div>
                    </div>
                </div>
            </div>
            <div class="ed-item s-100">
                <h2 class="heading-2 stronger text-center">Y COMO SI ESTO FUERA POCO...</h2>
            </div>
        </div>
    </section>
    <section class="section vip m-b-0" id="benefits">
        <div class="ed-container">
            <div class="ed-item ed-container s-main-center m-b-3">
                <div class="ed-item m-60">
                    <h2 class="heading-2 strong text-center">
                        RECIBE MÁS DE S/. 7,000.00 EN CAPACITACIONES QUANTICAS
                    </h2>
                </div>
            </div>
            <div class="ed-item">
                <div class="vip-content">
                    <div class="ed-container">
                        <div class="ed-item s-100 vip-wrapper">
                            <img src="{{ asset('assets/images/dibu01.png') }}" class="from-l" alt="">
                            <img src="{{ asset('assets/images/dibu02.png') }}" class="to-l" alt="">
                            <button class="btn-vip pay" data-price="{{$datos["amount"]}}">comprar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer class="footer">
    <img src="./assets/images/footer.jpg" alt="Footer" style="width: 100%; !Important">
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://checkout.culqi.com/js/v3"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/ed-grid.js') }}"></script>
<script src="{{ asset('assets/js/countdown.js') }}"></script>
<!--<script src="assets/js/token.js"></script>-->
<script>
    $(".menu-link").click(function(e) {
        e.preventDefault();
        let link = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(link).offset().top
        }, 700);
    });
    edgrid.menu('main-nav','main-menu');
    $('.testimonial.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:2
            }
        }
    })
    $('.purchase-carousel.owl-carousel').owlCarousel({
        loop:true,
        margin:20,
        nav:false,
        autoplay: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });
    $(".accordion-titulo").click(function(e){
        e.preventDefault();
		
        var contenido=$(this).next(".accordion-content");
                 
        if(contenido.css("display")=="none"){ //open		
           contenido.slideDown(250);			
           $(this).addClass("open");
        }
        else{ //close		
           contenido.slideUp(250);
           $(this).removeClass("open");	
       }
                                 
     });
</script>
<script>
    Culqi.publicKey = '{{$key_public}}';
    Culqi.settings({
        title: '{{$datos["company"]}}',
        currency: '{{$datos["currency"]}}',
        description: '{{$datos["product"]}}',
        amount: '{{$datos["amount"]}}'
    });

    function pasarella(){
        Culqi.open();
        //e.preventDefault();
    }

    $('.pay').click(function(e) {
        e.preventDefault();
        let amount = $(this).data('price');

        Culqi.settings({
            title: '{{$datos["company"]}}',
            currency: '{{$datos["currency"]}}',
            description: '{{$datos["product"]}}',
            amount: amount
        });

        Culqi.open();
    });

    $('#buyButton').on('click', function(e) {
        // Abre el formulario con la configuración en Culqi.settings
        Culqi.open();
        e.preventDefault();
    });

    function culqi() {
        if (Culqi.token) { // ¡Objeto Token creado exitosamente!
            let token = Culqi.token.id;
            //alert('Se ha creado un token:' + token);
            //En esta linea de codigo debemos enviar el "Culqi.token.id"
            //hacia tu servidor con Ajax

            var form_data = new FormData();
            form_data.append('token', token);
            form_data.append('email', Culqi.token.email);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            //console.log(Culqi.token)
            /*let data = {
                'token': token,
                'email': Culqi.token.email
            }*/

            //console.log(data);
            $.ajax({
                url: '{{route('save_amount')}}',
                type: 'post',
                dataType: 'json',
                processData: false, // important
                contentType: false, // important
                data: form_data,
                'success': function(response) {
                    //console.log(response);
                    if (response.object =="error"){

                        if (response.code ="card_declined"){
                            //alert("errrror");
                            toastr.error("La operación ha sido denegada por la entidad emisora de tu tarjeta. " +
                                "Contáctate con el banco para conocer el motivo de la denegación o intenta nuevamente con otra tarjeta.");
                        }
                    }else{
                        toastr.success("Operación exitosa");
                    }
                }
            });

        } else { // ¡Hubo algún problema!
            // Mostramos JSON de objeto error en consola
            console.log(Culqi.error);
            //alert(Culqi.error.user_message);
        }
    };
</script>
</body>

</html>
