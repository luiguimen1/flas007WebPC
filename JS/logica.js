/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function suma(pv1, pv2) {
    return pv1 + pv2;
}

function resta(pv1, pv2) {
    return pv2 - pv1;
}

function multi(pv1, pv2) {
    return pv1 * pv2;
}
function divi(pv1, pv2) {
    return pv1 / pv2;
}

/**
 * Metodo que permite capturar dos numeros 
 * y retornar su suma
 * @return {undefined}
 */
function hacerSuma() {
    var x = parseFloat(document.getElementById("n1").value);
    var y = parseFloat(document.getElementById("n2").value);
    document.getElementById("res").innerHTML = suma(x, y);
}
/**
 * 
 * @return {undefined}
 */
function hacerMulti() {
    var x = parseFloat(document.getElementById("n1").value);
    var y = parseFloat(document.getElementById("n2").value);
    document.getElementById("res").innerHTML = multi(x, y);
}