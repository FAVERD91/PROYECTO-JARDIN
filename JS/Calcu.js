function calcular(operacion)
{
    var num1 = document.calc.num1.value
    var num2 = document.calc.num2.value
    var result = eval(num1+operacion+num2)
    document.calc.resultado.value=result
}