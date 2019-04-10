$(function(){

/* Incluimos un método para validar el campo nombre */
/*acepta solo letras*/
$.validator.addMethod("nombre", function(value, element) {
return this.optional(element) || /^[a-záéóóúàèìòùäëïöüñ\s]+$/i.test(value);
});
/* Incluimos un método para validar el campo apellido */
/*acepta solo letras*/
$.validator.addMethod("apellido", function(value, element) {
return this.optional(element) || /^[a-záéóóúàèìòùäëïöüñ\s]+$/i.test(value);
});
/* Incluimos un método para validar el campo cedula */
//buscar como hacer para que acepte solo numeros
$.validator.addMethod("cedula", function(value, element) {
return this.optional(element) || /^[a-záéóóúàèìòùäëïöüñ\s]+$/i.test(value);
});
/* Incluimos un método para validar el campo email */
//buscar que acepte solo el formato de correo electronico
$.validator.addMethod("email", function(value, element) {
return this.optional(element) || /^[a-záéóóúàèìòùäëïöüñ\s]+$/i.test(value);
});




        

        	$("#registro_form").validate
               
               ({
                  
                  rules:

                  {
                    nombre:{required:true, nombre:true, minlength:3, maxlength:50 },

                    apellido:{required:true, apellido:true, minlength:5, maxlength:50 },
  
                  }, 

                  messages:

                  {

                    nombre:{required:"El campo es requerido", nombre:"Sólo se aceptan letras", minlength:"El mínimo permitido son 3 caracteres", maxlength:"El máximo permitido son 50 caracteres"

                    },

                    
                    apellido:{required:"El campo es requerido", texto:"Sólo se aceptan letras y números", minlength:"El mínimo permitido son 5 caracteres", maxlength:"El máximo permitido son 50 caracteres"

                    },

                

                  },


                 
            });//jquery validate
        
        }); //el function inicial

	