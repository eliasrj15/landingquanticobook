<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Quantico</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/ed-grid.min.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<body>
<navbar class="navbar">
    <div class="ed-container">
        <div class="ed-item ed-container s-main-end">
            <ul class="nav">
                <li class="nav-item"><a href="#">3 Razones</a></li>
                <li class="nav-item"><a href="#">Autor</a></li>
                <li class="nav-item"><a href="#">Comentarios</a></li>
                <li class="nav-item"><a href="#">Beneficios</a></li>
                <li class="nav-item button-cta"><a href="#" id="buyButton">Comprar</a></li>
            </ul>
        </div>
    </div>
</navbar>
<header class="header">
    <div class="ed-container fullheight s-cross-center">
        <div class="ed-item m-50 s-main-center">
            <img src="./assets/images/libro.jpg" class="header-book">
        </div>
        <div class="ed-item m-50">
            <div class="ed-container ed-item s-main-center">
                <div class="logo full s-main-center m-b-1">
                    <img src="./assets/images/logo1.png" alt="Logo" class="logo s-center">
                </div>
                <h3 class="heading-3 full text-center stronger uppercase">Tu éxito no es</h3>
                <h2 class="heading-2 full text-center stronger uppercase">Negociable</h2>
            </div>
        </div>
    </div>
</header>
<main class="main">
    <section class="section">
        <div class="ed-container">
            <div class="ed-item m-b-4">
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
            <div class="ed-item">
                <div class="reasons">
                    <div class="reason s-to-center s-center">
                        <img src="./assets/images/ico1.jpg" class="icon1 m-b-1">
                        <h5 class="heading-5 strong">Lo que te dijeron y te lo creíste.</h5>
                        <p class="muted">
                            El sistema educativo tradicional fue creado para sigas las reglas, y para que seas una engranaje más del
                            mecanismo.
                        </p>
                    </div>
                    <div class="reason s-to-center s-center">
                        <img src="./assets/images/ico2.jpg" class="icon2 m-b-1">
                        <h5 class="heading-5 strong">Lo que perdiste por lo que no te dijeron.</h5>
                        <p class="muted">
                            Hay cosas que el sistema educativo tradicional no te dice, que podrían hacer la diferencia entre el
                            éxito o
                            fracaso de tu empresa.
                        </p>
                    </div>
                    <div class="reason s-to-center s-center">
                        <img src="./assets/images/ico3.jpg" class="icon3 m-b-1">
                        <h5 class="heading-5 strong">Lo que te cuesta lo que te dicen y lo que no.</h5>
                        <p class="muted">
                            Si crees que éxito es caro, pues el fracaso lo es mucho más, incluso aveces es más rentable fracasar que
                            tener éxito.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section book">
        <div class="ed-container">
            <div class="ed-item s-5"></div>
            <div class="ed-item s-45">
                <img src="./assets/images/libro2.jpg" alt="" class="image">
            </div>
            <div class="ed-item s-10"></div>
            <div class="ed-item ed-container s-35 s-main-center s-cross-center">
                <h3 class="heading-3 m-b-2 text-center">DOMINANDO EL SISTEMA</h3>
                <p class="text-center muted">
                    Es el inicio de tu gran aventura financiera, reúne los conceptos básicos para garantizar tus resultados y
                    lograr rentabilidades increíbles.
                </p>
                <button class="button button-primary strong">Comprar</button>
            </div>
        </div>
    </section>
    <section class="section why">
        <div class="ed-container">
            <div class="ed-item s-10"></div>
            <div class="ed-item s-80">
                <div class="ed-item ed-container s-main-center">
                    <h2 class="heading-2 strong text-center m-b-3">
                        ¿Por qué comprar
                        <br>
                        <span class="uppercase stronger">DOMINANDO EL SISTEMA?</span>
                    </h2>
                    <p class="muted s-center m-b-4">
                        Porque no solo compras solo un libro, compras una gran cantidad de beneficios quánticos y también la
                        oportunidad de ser parte de una comunidad que obtiene resultados todos los días.
                    </p>
                </div>

                <div class="ed-item ed-container features">
                    <div class="ed-item ed-container feature m-b-2">
                        <div class="ed-item s-30 s-main-center s-cross-center">
                            <img src="./assets/images/ico4.jpg" class="image">
                        </div>
                        <div class="ed-item s-70 s-cross-center">
                            <p class="muted">
                                <img src="./assets/images/check.jpg" class="check">
                                Recibe el contenido de valor que abrirá nuevas ideas en tus finanzas. Y ahorra más de S/. 7000.00 en
                                capacitaciones.
                            </p>
                        </div>
                    </div>
                    <div class="ed-item ed-container feature m-b-2">
                        <div class="ed-item s-30 s-main-center s-cross-center">
                            <img src="./assets/images/ico5.jpg" class="image">
                        </div>
                        <div class="ed-item s-70 s-cross-center">
                            <p class="muted">
                                <img src="./assets/images/check.jpg" class="check">
                                Recibe herramientas cognitivas para conocer a fondo el sistema, sé parte del sistema de una manera
                                inteligente y haz que él trabaje para ti.
                            </p>
                        </div>
                    </div>
                    <div class="ed-item ed-container feature m-b-2">
                        <div class="ed-item s-30 s-main-center s-cross-center">
                            <img src="./assets/images/ico6.jpg" class="image">
                        </div>
                        <div class="ed-item s-70 s-cross-center">
                            <p class="muted">
                                <img src="./assets/images/check.jpg" class="check">
                                Consigue que las finanzas apliquen a tu negocio, no importa que si es tradicional o innovador, el
                                capital inicial es necesario para cualquier emprendimiento.
                            </p>
                        </div>
                    </div>
                    <div class="ed-item ed-container feature m-b-2">
                        <div class="ed-item s-30 s-main-center s-cross-center">
                            <img src="./assets/images/ico7.jpg" class="image">
                        </div>
                        <div class="ed-item s-70 s-cross-center">
                            <p class="muted">
                                <img src="./assets/images/check.jpg" class="check">
                                Únete a la comunidad quantico formada por miles de empresarios y emprendedores que no se conforman con
                                las finanzas tradicionales y entre ellos logran
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ed-item s-10"></div>
        </div>
    </section>
    <section class="section author">
        <div class="ed-container">
            <div class="ed-item s-center full m-b-4">
                <h2 class="heading-2 text-center stronger">
                    EL AUTOR QUANTICO
                </h2>
            </div>
            <div class="ed-item m-40">
                <img src="./assets/images/autor1.jpg" alt="Jose Manuel Quantico" class="image">
            </div>
            <div class="ed-item m-10"></div>
            <div class="ed-item m-40 s-main-center s-cross-center">
                <img src="./assets/images/name.png" alt="José Manuel Quantico" class="name m-b-3">
                <p class="muted small strong text-center">“Me he dedicado los últimos años a enseñar a tener resultados a
                    miles de
                    personas”</p>
                <p class="muted small strong text-center">
                    Ahora el conocimiento quantico de las finanzas puede estar en tus mano, antes de ser parte de nuestra
                    comunidad debes conocer como dominar el sistema.
                </p>
            </div>
            <div class="ed-item m-10"></div>
        </div>
    </section>
    <section class="section community">
        <div class="ed-container">
            <div class="ed-item full m-b-4">
                <h2 class="heading-2 strong text-center">Lo que dice la comunidad quantica</h2>
            </div>
            <div class="ed-item ed-container full m-t-2">
                <div class="ed-item s-5 s-main-center s-cross-center">
                    <img src="./assets/images/before.png" class="before">
                </div>
                <div class="ed-item s-90">
                    <div class="carrousel-container">
                        <div class="carrousel">
                            <div class="carrousel-item">
                                <div class="ed-container">
                                    <div class="ed-item s-30">
                                        <div class="carrouse-item__image">
                                            <img src="./assets/images/img1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="ed-item s-70">
                                        <div class="carrousel-item__quote">
                                            <p class="text-right">
                                                El conocimiento quantico debería masificarse, la educación corrrecta que permite el
                                                crecimiento
                                                personal y el desarrollo empresarial. “
                                            </p>
                                            <p class="text-right strong m-b-0">Renzo Salas</p>
                                            <p class="text-right strong m-b-0">Empresario</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carrousel-item">
                                <div class="ed-container">
                                    <div class="ed-item s-30">
                                        <div class="carrouse-item__image">
                                            <img src="./assets/images/img1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="ed-item s-70">
                                        <div class="carrousel-item__quote">
                                            <p class="text-right">
                                                El conocimiento quantico debería masificarse, la educación corrrecta que permite el
                                                crecimiento
                                                personal y el desarrollo empresarial. “
                                            </p>
                                            <p class="text-right strong m-b-0">Renzo Salas</p>
                                            <p class="text-right strong m-b-0">Empresario</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carrousel-item">
                                <div class="ed-container">
                                    <div class="ed-item s-30">
                                        <div class="carrouse-item__image">
                                            <img src="./assets/images/img1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="ed-item s-70">
                                        <div class="carrousel-item__quote">
                                            <p class="text-right">
                                                El conocimiento quantico debería masificarse, la educación corrrecta que permite el
                                                crecimiento
                                                personal y el desarrollo empresarial. “
                                            </p>
                                            <p class="text-right strong m-b-0">Renzo Salas</p>
                                            <p class="text-right strong m-b-0">Empresario</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carrousel-item">
                                <div class="ed-container">
                                    <div class="ed-item s-30">
                                        <div class="carrouse-item__image">
                                            <img src="./assets/images/img1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="ed-item s-70">
                                        <div class="carrousel-item__quote">
                                            <p class="text-right">
                                                El conocimiento quantico debería masificarse, la educación corrrecta que permite el
                                                crecimiento
                                                personal y el desarrollo empresarial. “
                                            </p>
                                            <p class="text-right strong m-b-0">Renzo Salas</p>
                                            <p class="text-right strong m-b-0">Empresario</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ed-item s-5 s-main-center s-cross-center">
                    <img src="./assets/images/next.png" class="next">
                </div>
            </div>
        </div>
    </section>
    <section class="section mega-banner">
        <img src="./assets/images/fondo2.jpg" alt="Mega Banner" style="width: 100%; !Important">
    </section>
    <section class="section">
        <div class="ed-container">
            <div class="ed-item full m-b-3">
                <h2 class="heading-2 stronger text-center">GRATIS POR TU COMPRA</h2>
            </div>
            <div class="ed-item full s-main-center s-cross-center m-b-3">
                <img src="./assets/images/img2.jpg" alt="Gratis por tu compra">
            </div>
            <div class="ed-item full">
                <h2 class="heading-2 stronger text-center">Y COMO SI ESTO FUERA POCO...</h2>
            </div>
        </div>
    </section>
    <section class="section vip m-b-0">
        <div class="ed-container">
            <div class="ed-item ed-container s-main-center m-b-3">
                <div class="ed-item m-60">
                    <h2 class="heading-2 strong text-center">
                        RECIBE MÁS DE S/. 7,000.00 EN CAPACITACIONES QUÁNTICAS
                    </h2>
                </div>
            </div>
            <div class="ed-item">
                <div class="vip-content">
                    <div class="ed-container">
                        <div class="ed-item s-1-3"></div>
                        <div class="ed-item s-1-3">
                            <img src="./assets/images/vip.png" alt="Vip">
                        </div>
                        <div class="ed-item s-1-3"></div>
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
<!--<script src="assets/js/token.js"></script>-->

<script>
    Culqi.publicKey = '{{$key_public}}';
    Culqi.settings({
        title: '{{$datos["company"]}}',
        currency: '{{$datos["currency"]}}',
        description: '{{$datos["product"]}}',
        amount: '{{$datos["amount"]}}'
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
