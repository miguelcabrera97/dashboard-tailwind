 const formulario_modal = document.getElementById("form_modal");
 const input_modal_templates =   document.querySelectorAll('#form_modal input');


 const expresion  =
 {
    nombre_sitio : /^[a-zA-Z0-9]{4,16}$/, // Letras, numeros, guion y guion_bajo
 }

 const campo =
 {
    nombrar_sitio_modal : false
 }

 const ValidacionModal = (e) =>
 {

 }

 const validar_entrada_modal = (expresion,entrada , campo) =>
 {

 }


 input_modal_templates.forEach((input) => {
	input.addEventListener('keyup', ValidacionModal);
	input.addEventListener('blur', ValidacionModal);
});
