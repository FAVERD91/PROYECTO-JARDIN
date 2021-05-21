<?php
include ("Header.php")
?>
<form name="calc" action="#">

<label style="color: black;"> Numero 1: </label>
<input type="text" name="operando1" value="0" size="12">
<br>
<label style="color: black;"> Numero 2: </label>
<input type="text" name="operando2" value="0" size="12">
<br>
<input type="button" name="" value=" + " onclick="calcular('+')">
<input type="button" name="" value=" - " onclick="calcular('-')">
<input type="button" name="" value=" X " onclick="calcular('*')">
<input type="button" name="" value=" / " onclick="calcular('/')">
<br>
<input type="button" name="" value=" .log " onclick="calcular('**')">
<input type="button" name="" value=" Exp " onclick="calcular('^')">
<label style="color: black;"> Resultado: </style=>
<input type="text" name="resultado" value="0" size="12">

</form>
<br>
<br>
<script>
function calcular(operacion){
var operando1 = document.calc.operando1.value
var operando2 = document.calc.operando2.value
var result = eval(operando1 + operacion + operando2)
document.calc.resultado.value = result
}

</script>

<?php
include ('Footer.php')
?>