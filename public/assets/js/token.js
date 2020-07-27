
Culqi.publicKey = 'pk_live_37CG47QVwOQP8Pk9';
{{$}}
Culqi.settings({
    title: 'Mundo Quántico',
    currency: 'PEN',
    description: 'Book - Dominando el Sistema',
    amount: 10000
});

$('#buyButton').on('click', function(e) {
    // Abre el formulario con la configuración en Culqi.settings
    Culqi.open();
    e.preventDefault();
});

function culqi() {
    if (Culqi.token) { // ¡Objeto Token creado exitosamente!
        var token = Culqi.token.id;
        alert('Se ha creado un token:' + token);
        //En esta linea de codigo debemos enviar el "Culqi.token.id"
        //hacia tu servidor con Ajax
    } else { // ¡Hubo algún problema!
        // Mostramos JSON de objeto error en consola
        console.log(Culqi.error);
        alert(Culqi.error.user_message);
    }
 };
