wait = 1200;
let array_btn_tab = ["btn_0", "btn_1", "btn_2", "btn_3","btn_4"];
$(document).ready(function () {
    $('#lista1').val(1);
    recargarLista();

    $('#lista1').change(function () {
        recargarLista();
    });
})


function new_tutoria() {

    let Data = {
        "name_tutoring": document.getElementById("name_tutoring").value,
        "programa_tutoring": document.getElementById("lista1").value,
        "description": document.getElementById("description").value,
        "opcion_horario": document.getElementById("opcion_horario").value,
        "docentes": document.getElementById("docentes").value,
        "link": document.getElementById("link").value,
        "salon": document.getElementById("salon").value,
        "asig_tutoring": document.getElementById("asig_tutoring").value,
    }

    $.ajax({
        url: "Tools/Backend/load_administrator.php",
        data: Data,
        type: 'POST',
        beforeSend: function () {
            $('#vista').html("<img src='IMG/loding.gif'/>");
        },
        success: function (data) {
            setTimeout(function () {
               
            }, wait);
        },
    });
    Opciones(1);
}

function new_programa() {

    let Data = {
        "snies": document.getElementById("snies").value,
        "name_career": document.getElementById("name_career").value,
    }

    $.ajax({
        url: "Tools/Backend/load_administrator.php",
        data: Data,
        type: 'POST',
        beforeSend: function () {
            $('#vista').html("<img src='IMG/loding.gif'/>");
        },
        success: function (data) {
            setTimeout(function () {
              
            }, wait);
        },
    });
    Opciones(4);
}

function new_asignatura() {

    let Data = {
        "programas": document.getElementById("programas").value,
        "name_course": document.getElementById("name_course").value,
    }

    $.ajax({
        url: "Tools/Backend/load_administrator.php",
        data: Data,
        type: 'POST',
        beforeSend: function () {
            $('#vista').html("<img src='IMG/loding.gif'/>");
        },
        success: function (data) {
            setTimeout(function () {
               
            }, wait);
        },
    });
    Opciones(4);
}

function new_estudiante_docente() {

    let Data = {
        "rol": document.getElementById("rol").value,
        "identificacion": document.getElementById("identificacion").value,
        "name_completo": document.getElementById("name_completo").value,
        "programas_e": document.getElementById("programas_e").value,
        "email_completo": document.getElementById("email_completo").value,
        "password_completo": document.getElementById("password_completo").value,

    }

    $.ajax({
        url: "Tools/Backend/load_administrator.php",
        data: Data,
        type: 'POST',
        beforeSend: function () {
            $('#vista').html("<img src='IMG/loding.gif'/>");
        },
        success: function (data) {
            setTimeout(function () {
              
            }, wait);
        },
    });
    Opciones(4);
}

function new_estudiante_us_tutoria(name) {

    let Data = {
        "identificacionx": document.getElementById("identificacionx").value,
        "name_completox": document.getElementById("name_completox").value,
        "programas_ex": document.getElementById("programas_ex").value,
        "email_completox": document.getElementById("email_completox").value,
        "password_completox": document.getElementById("password_completox").value,
       
    }

    $.ajax({
        url: "Tools/Backend/load_administrator_student.php",
        data: Data,
        type: 'POST',
        beforeSend: function () {
            $('#vista').html("<img src='IMG/loding.gif'/>");
        },
        success: function (data) {
            setTimeout(function () {
               
            }, wait);
        },
    });
    activas(name);
}

function new_estudiante_a_tutoria(name,id) {
 
    let Data = {
        "identificacions": id,
    }
    $.ajax({
        url: "Tools/Backend/load_administrator_student.php",
        data: Data,
        type: 'POST',
        beforeSend: function () {
            $('#vista').html("<img src='IMG/loding.gif'/>");
        },
        success: function (data) {
            setTimeout(function () {
               
            }, wait);
        },
    });
    activas(name);
}

function eliminar_estudiante(name,id) {
 
    let Data = {
        "identificacione": id,
    }
    $.ajax({
        url: "Tools/Backend/load_administrator_student.php",
        data: Data,
        type: 'POST',
        beforeSend: function () {
            $('#vista').html("<img src='IMG/loding.gif'/>");
        },
        success: function (data) {
            setTimeout(function () {
               
            }, wait);
        },
    });
    activas(name);
}

function Opciones(index) {
    $.ajax({
        url: "Tools/administrator/" + menu_tab(index),
        beforeSend: function () {
            $('#vista').html("<img src='IMG/loding.gif'/>");
        },
        success: function (data) {
            setTimeout(function () {
                $('#vista').html(data);
            }, wait);
        },
    });
}

function menu_tab(index) {
    //0=>Mis Tutorías 1=> Tutoría Activas 2=> Solicitar tutoría 3=> Tutoría en petición

    for (let i = 0; i < array_btn_tab.length; i++) {
        if (index == i) {
            document.getElementById(array_btn_tab[i]).className = "active";
        } else {
            document.getElementById(array_btn_tab[i]).className = "deactivate";
        }
    }

    switch (index) {
        case 0:
            return "active_tutoring.php";
        case 1:
            return "new_tutoring.php";
        case 2:
            return "request_tutoring.php";
        case 4:
            return "requirement.php";
        case 5:
            return "tutoring.php";
        
    }

}
function rever() {
    $.ajax({
        url: "Tools/administrator/buscar.php",
        type: "POST",
        data: "palabra=" + $('#palabraa').val(),
        success: function (r) {
            $('#ver').html(r);
        }
    });
}

function recargarLista() {
    $.ajax({
        url: "Tools/Backend/cargaroptions_administrator.php",
        type: "POST",
        data: "carrera=" + $('#lista1').val(),
        success: function (r) {
            $('#select2lista').html(r);
        }
    });
}

function activas(name) {
    $.ajax({
        url: "Tools/administrator/tutoring.php",
        type: 'POST',
        data: "nombre_tutoria=" + name,
        beforeSend: function () {
            $('#vista').html("<img src='IMG/loding.gif'/>");
        },
        success: function (r) {
            setTimeout(function () {
                $('#vista').html(r);
            }, wait);
        },
    });
}
function Opciones_administrator(index) {
    urln = "";
    switch (index) {
        case 0:
            $.ajax({
                url: "Tools/administrator/" + urln + ".php",
                type: 'POST',
                beforeSend: function () {
                    $('#vista').html("<img src='IMG/loding.gif'/>");
                },
                success: function (data) {
                    setTimeout(function () {
                        $('#vista').html(data);
                    }, wait);
                },
            });
            break;
        case 1:
            urln = "new_tutoring";
            break;
        case 2:
            //urln="requeriment";
            break;
        case 3:
            urln = "tracing";
            break;
        case 4:
            urln = "requirement";
            break;
    }
    $.ajax({
        url: "Tools/administrator/" + urln + ".php",
        type: 'POST',
        beforeSend: function () {
            $('#vista').html("<img src='IMG/loding.gif'/>");
        },
        success: function (data) {
            setTimeout(function () {
                $('#vista').html(data);
            }, wait);
        },
    });
}

function administrator() {
    window.location.href = "administrator.php";
}

function validarForm(formulario) {
    if (formulario.palabra.value.length == 0) { //¿Tiene 0 caracteres?
        formulario.palabra.focus();  // Damos el foco al control
        alert('Debes rellenar este campo'); //Mostramos el mensaje
        return false;
    } //devolvemos el foco  
    return true; //Si ha llegado hasta aquí, es que todo es correcto 
}


function register_requeriment(id_request_tutoring) {
    let Data = {
        "id_request_tutoring": id_request_tutoring
    }
    $.ajax({
        url: "Tools/Backend/register_request.php",
        data: Data,
        type: 'POST',
        beforeSend: function () {
            $('#vista').html("<img src='IMG/loding.gif'/>");
        },
        success: function (data) {
            setTimeout(function () {
               
            }, wait);
        },
    });
    Opciones(3);
}