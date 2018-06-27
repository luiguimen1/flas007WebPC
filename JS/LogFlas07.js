jQuery.fn.reset = function () {
    $(this).each(function () {
        this.reset();
    });
};

jQuery.validator.addMethod("Minusculas", function (value, element){
    return this.optional(element) || /^[a-záëÚúíóú ]+$/i.test(value);
}, "Debe colocar de a - z");

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * Permite Almacenar JSON de Categorias
 * @type {Array}
 */
var BodCat = new Array();
var BodPro = new Array();

/**
 * Metodoq ue permite crear Catgorias
 * @return {undefined}
 */

function asigID() {
    $(document).delay(300);
    var todo = "<option value='a'>seleccione</option>";
    var limite = BodCat.length;
    if (limite == 0) {
        $("#codCa").val("1");
    } else {
        var mayor = 0;
        for (var i = 0; i < limite; i++) {
            var cat = BodCat[i];
            if (cat.cod > mayor) {
                mayor = cat.cod;
            }
            todo =+ "<option value='" + cat.cod + "'>" + cat.nombre + "</option>";
        }
        $("#fkCat").html(todo);
        mayor = mayor + 1;
        $("#codCa").val(mayor);
    }
}

function canCat() {
    $("#regCat").reset();
    asigID();
}

function crearCat() {

    $("#regCat").validate({
        rules: {
            codCa: {
                required: true,
                number: true,
                digits: true
            },
            nomCa: {
                required: true,
                rangelength: [3, 10]
            },
            desCa: {
                required: true,
                rangelength: [3, 70]
            }
        },
        messages: {
            nomCa: {
                required: "Pilas el campo de contener algo."
            }
        },
        submitHandler: function () {
            var codCat = parseInt($("#codCa").val());
            var nomCat = $("#nomCa").val();
            var desCat = $("#desCa").val();
            var categoria = {
                cod: codCat,
                nombre: nomCat,
                descrpcion: desCat
            };
            BodCat.push(categoria);
            $("#limpiarForCat").trigger("click");
            asigID();
            alert("La categoria fue Creada");
        }
    });

}

function OcultarTabCat() {
    $("#tabCat").fadeOut("explode");
}

function mostarTabCat() {
    $("#tabCat").fadeIn("explode");
    var limite = BodCat.length;
    $("#curTabCat").html("");
    for (var i = 0; i < limite; i++) {
        var categoria = BodCat[i];
        var hoja = "<tr><td>" + (i + 1) + "</td><td>" + categoria.cod + "</td><td>" + categoria.nombre + "</td><td>" + categoria.descrpcion + "</td></tr>";
        $("#curTabCat").append(hoja);
    }
}

function MostarBuscar() {
    $("#bloqBus").fadeIn();
}

function ReaLizaBusCatID() {
    var codid = $("#codBusCat").val();
    $("#curTabCatBus").html("");
    var estado = false;
    var limite = BodCat.length;
    for (var i = 0; i < limite; i++) {
        var categoria = BodCat[i];
        if (codid == categoria.cod) {
            var hoja = "<tr><td>" + (i + 1) + "</td><td>" + categoria.cod + "</td><td>" + categoria.nombre + "</td><td>" + categoria.descrpcion + "</td></tr>";
            $("#curTabCatBus").append(hoja);
            estado = true;
        }
    }

    if (estado == false) {
        alert("el codigo " + codid + " no esta asigando a una categoria");
    }

}




function crearPro() {
    $("#regPro").validate({
        rules: {
            fkCat: {
                required: true,
                number: true
            },
            nomPr: {
                required: true,
                Minusculas:true
            },
            valPr: {
                required: true,
                digits: true
            },
            valPr1: {
                equalTo: "#valPr"
            },
            canPr: {
                required: true
            },
            desPr: {
                required: true
            }
        },
        messages: {

        },
        submitHandler: function () {
            var producto = {
                fkCat: $("#fkCat").val(),
                nomPr: $("#nomPr").val(),
                valPr: $("#valPr").val(),
                canPr: $("#canPr").val(),
                desPr: $("#desPr").val()
            };
            BodPro.push(producto);
            $("#limpiarForPro").trigger("click");
        }
    });
}

function NombreCat(Pos, Comparar, varRe) {
    var limite = BodCat.length;
    for (var i = 0; i < limite; i++) {
        var cat = BodCat[i];
        if (cat[Pos] == Comparar) {
            return cat[varRe];
        }
    }
    return "No definido";
}

function mostarTabPro() {
    $("#tabPro").fadeIn();
    var limite = BodPro.length;
    $("#curTabPro").html("");
    for (var i = 0; i < limite; i++) {
        var producto = BodPro[i];
        var hoja = "<tr><td>" + (i + 1) + "</td><td>" + NombreCat(0, producto.fkCat) + "</td><td>" + producto.nomPr + "</td><td>" + producto.valPr + "</td><td>" + producto.canPr + "</td><td>" + producto.desPr + "</td></tr>";
        $("#curTabPro").append(hoja);
    }
}