/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var edificio = new Array();
function registro() {
    var n = $("#nombre").val();
    var c = $("#cc").val();
    var e = $("#email").val();
    var persona = {n: n, c: c, e: e};
    edificio.push(persona);
    $("#nombre").val("");
    $("#cc").val("");
    $("#email").val("");
}
