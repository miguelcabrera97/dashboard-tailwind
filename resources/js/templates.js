 const formulario_modal = document.getElementById("form_modal");
 const input_modal_templates =   document.querySelectorAll('#form_modal input');


 const expresion  =
 {
    nombre_sitio : /^[a-zA-Z0-9]{7,}$/, // Letras, numeros, guion y guion_bajo
 }

 const campo =
 {
    nombrar_sitio_modal : false
 }

 const ValidacionModal = (e) =>
 {
    switch(e.target.name)
    {
      case "nombre" :
        validar_entrada_modal(expresion.nombre_sitio, e.target,'nombrar_sitio_modal');
      break;
    }
 }

 const validar_entrada_modal = (expresion,entrada , campo) =>
 {
    if(expresion.test(entrada.value)){
		document.getElementById('validacion_ok').classList.remove('Oculto');
        document.getElementById('validacion_not').classList.add('Oculto');

        let entrada_input = document.getElementById(`${campo}`).value;
        document.getElementById('okname').innerHTML = entrada_input ;

		campo[campo] = true;
	} else {
		document.getElementById('validacion_not').classList.remove('Oculto');
        document.getElementById('validacion_ok').classList.add('Oculto');
        let entrada_input = document.getElementById(`${campo}`).value;
        document.getElementById('notname').innerHTML = entrada_input ;
		campo[campo] = false;
	}
 }


 input_modal_templates.forEach((input) => {
	input.addEventListener('keyup', ValidacionModal);
	input.addEventListener('blur', ValidacionModal);
});
