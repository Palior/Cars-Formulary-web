<script>
function validar(){
const patente = document.getElementByid("matricula");
const ano = document.getElementByid("anio");
if(patente.lenght>=6){
return true;
}else{
alert("La patente ingresada debe tener minimo 6 caracteres")
return false;
}
if(ano.lenght>=4){
return true;
}else{
alert("Favor ingresar un Año valido de 4 digitos")
return false;
}
}
</script>