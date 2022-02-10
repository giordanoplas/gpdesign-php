(function(){
    $(document).ready(function(){        
        $('#btnEnviar').click(function(e){
            e.preventDefault();

            error = $('#error');
            success = $('#success');
            response = grecaptcha.getResponse();

            nombre = $('#nombre');
            correo = $('#correo');
            mensaje = $('#mensaje');
            form = $('#contacto');

            if (response.length === 0) {
                success.text('');
                success.removeClass('success');
                error.text("Favor verificar que no eres un robot" );
                error.addClass('error');
            } else if(nombre.val().length === 0 || correo.val().length === 0 || mensaje.val().length === 0) {
                success.text('');
                success.removeClass('success');
                error.text( "Por favor rellena correctamete los campos de nombre, correo y mensaje");
                error.addClass('error');
            } else if(correo.val().indexOf('@', 0) == -1 || correo.val().indexOf('.', 0) == -1) {
                success.text('');
                success.removeClass('success');
                error.text( "Por favor introduce el correo correctamente");
                error.addClass('error');
            } else {
                error.text('');
                error.removeClass('error');
                success.text('Los datos fueron enviados exitosamente. Muy pronto nos pondremos en contacto con usted');
                success.addClass('success');

                setInterval(function(){
                    form.submit();
                }, 2000);
            }                       
        });
    });

})();