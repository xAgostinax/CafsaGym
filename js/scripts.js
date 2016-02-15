
//SIN VALIDACIONES
/*$("#contactForm").submit(function(event){
    // cancels the form submission
    event.preventDefault();
    submitForm();
});
*/
$("#contactForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // Manejo de la forma invalida...
    } else {
        // Todo esta bien!
        event.preventDefault();
        submitForm();

    }
    
});

function submitForm(){
    // Initiate Variables With Form Content
    var name = $("#name").val();
    var email = $("#email").val();
    var message = $("#message").val();
 
    $.ajax({
        type: "POST",
        url: "contacto.php",
        data: "name=" + name + "&email=" + email + "&message=" + message,
        //PROCESA LO QUE DEVUELVE CONTACTO.PHP
        //La funcion agarra el texto devuelto y comprueba si contacto.php devolvio success
        success : function(text){
            if (text == "success"){
                formSuccess();
            } else{
                formError();
                submitMSG(false,text);
            }
        }
    });
}
function formSuccess(){
    //Limpia los campos del formulario
    $('#contactForm').trigger("reset");
    //Muestra msj
    $( "#msgSubmit" ).removeClass( "hidden" );

}

function formError(){
    $("#msjError").removeClass("hidden");
}