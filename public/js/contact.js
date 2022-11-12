$(document).ready(function(){
    
    (function($) {
        "use strict";

    
    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value)
    }, "type the correct answer -_-");

    // validate contactForm form
    $(function() {
        $('#contactForm').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                subject: {
                    required: true,
                    minlength: 4
                },
                number: {
                    required: true,
                    minlength: 5
                },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true,
                    minlength: 20
                }
            },
            messages: {
                name: {
                    required: "Campo requerido",
                    minlength: "your name must consist of at least 2 characters."
                },
                subject: {
                    required: "Campo requerido",
                    minlength: "El título del mensaje debe tener al menos 4 caracteres."
                },
                number: {
                    required: "Campo requerido",
                    minlength: "El número debe tener al menos 5 caracteres."
                },
                email: {
                    required: "Campo requerido"
                },
                message: {
                    required: "Campo requerido",
                    minlength: "El asunto debe tener al menos 20 caracteres."
                }
            },
            submitHandler: function(form) {

                $('#contactForm :input').attr('readonly', 'true');
                
                axios.post("/contact", form).then(response => {

                    console.log("Salio...");

                    alert("Mensaje enviado con exito.!");

                    $('#contactForm :input').removeAttr('readonly');
                    $("#contactForm")[0].reset();

                    
                }).catch(error => {
                    alert("Ocurrió un error, por favor intenta de nuevo.!");
                    $('#contactForm').fadeTo( "slow", 1, function() {
                        $('#error').fadeIn()
                        $('.modal').modal('hide');
                        $('#error').modal('show');
                    })
                });
            }
        })
    })
        
 })(jQuery)
})