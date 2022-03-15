    /* Funciopn para no enviar el formulario si hay errores validacion de forms con javascript */
    function checkForm(e) {
        e.returnValue = false;
    }





    /* empieza la validacion  de campos */
    function validacionDeCampos() {



        //corrobora si la fecha de nacimiento esta vacía





        /*-----------------------------------*/

        /*
        _________________ Declaración de variables
        */
        // Toma el valor de el campo "nombre" y lo guarda en la variable de js "nombre"
        var nombre = document.getElementById("nombre").value,
            errornombre;
        var apellido = document.getElementById("apellido").value,
            errorapellido;
        var email = document.getElementById("email").value,
            erroremail;
        var pais = document.getElementById("pais").value,
            errorpais;


        var errortodo = "",
            mostrarerrortodo;



/*

        var response = grecaptcha.getResponse();

        if (response.length == 0) {
            document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">Completá el Captcha.</span>';

            errortodo += "error";
        } else {
            document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:green;">Captcha correcto.</span>';


        }
*/


        /*
 
    _________________ Validacion de variables
    */
        // Si el coantidad de caracteres de nombre tiene menos de 3 caracteres arroja un error
        if (nombre.length == 0) {
            errornombre = "No dejés vacío tu nombre";
            errortodo += "error"; //variable  para guardar si existe errores y ejecutar una funcion si no hay errores
        } else if (nombre.length > 0 && nombre.length < 3) {
            errornombre = "El nombre no puede ser tan corto";
            errortodo += "error"; //variable  para guardar si existe errores y ejecutar una funcion si no hay errores
        } else {
            errornombre = "";
            errorntodo = "";
        }


        if (apellido.length == 0) {
            errorapellido = "No dejés vacío tu apellido";
            errortodo += "error";
        } else if (apellido.length > 0 && apellido.length < 3) {
            errorapellido = "El apellido no pude ser tan corto";
            errortodo += "error";
        } else {
            errorapellido = "";
            errorntodo = "";
        }


        //Validacion de email (es diferente a las demas)
        if (emailIsValid(email)) {
            erroremail = "";


        } else if (email === '') {
            erroremail = "No dejés vacío tu email";
            errortodo += "error";
        } else {
            erroremail = "No es un email válido";
            errortodo += "error";
        }




        //esta funcion nueva es para verificar si el mail contiene los parámetros válidos
        function emailIsValid(email) {
            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)
        }

        // Si el coantidad de caracteres de pais tiene menos de 3 caracteres arroja un error
        if (pais.length == 0) {
            errorpais = "No dejés vacío tu pais";
            errortodo += "error"; //variable  para guardar si existe errores y ejecutar una funcion si no hay errores
        } else if (pais.length > 0 && pais.length < 3) {
            errorpais = "El pais no puede ser tan corto";
            errortodo += "error"; //variable  para guardar si existe errores y ejecutar una funcion si no hay errores
        } else {
            errorpais = "";
            errorntodo = "";
        }


        if (errortodo == "") {
            mostrarerrortodo = "-"; //ejecuta las funciones si no hay errores en el form
         ocultarenviar();
            mostrarenviando();
       enviar();

            setTimeout(function () {
                metodopago();
            }, 1000)

/*
            setTimeout(function() {
                cerrarformulario();
                mostrarthankyou();
                completeRegistration();
                scrollToTop();
            }, 3000)
*/
        } else {
            mostrarerrortodo = "&#x274c; ERROR. Completá todos los campos";

        }



        //manda errornombre al campo errornombre del html
        document.getElementById("errornombre").innerHTML = errornombre;
        document.getElementById("errorapellido").innerHTML = errorapellido;

        document.getElementById("erroremail").innerHTML = erroremail;
        document.getElementById("errorpais").innerHTML = errorpais;
   
        /*- provincia*/

 

        document.getElementById("mostrarerrortodo").innerHTML = mostrarerrortodo;

    }