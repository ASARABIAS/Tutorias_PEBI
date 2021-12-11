let array_btn_tab = ["btn_0", "btn_1", "btn_2", "btn_3"];
let wait = 1000;

function Opciones(index) {
    $.ajax({
        url: "Tools/student/" + menu_tab(index),
        beforeSend: function() {
            $('#secondary_container').html("<img src='IMG/loding.gif'/>");
        },
        success: function(data) {
            setTimeout(function() {
                $('#secondary_container').html(data);
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
            return "my_tutoring.php";
        case 1:
            return "actives_tutoring.php";
        case 2:
            return "request_tutoring.php";
        case 3:
            return "tutoring_on_request.php";
    }

}

function register_student_request_tutoring(id_tutoring, id_student) {
    let Data = {
        "id_tutoring": id_tutoring,
        "id_student": id_student
    }

    $.ajax({
        url: "Tools/Backend/register_student_request_tutoring.php",
        data: Data,
        type: 'POST',
        beforeSend: function() {
            $('#secondary_container').html("<img src='IMG/loding.gif'/>");
        },
        success: function(data) {
            setTimeout(function() {
                alert(data);
            }, wait);
        },
    });

    Opciones(1);
}

//register_request_tutoring

function register_request_tutoring() {

    let Data = {
        "id_course": document.getElementById("id_course").value,
        "description": document.getElementById("description").value,
        "theme_tutoring": document.getElementById("theme_tutoring").value,
        "concept": document.getElementById("concept").value,
    }

    $.ajax({
        url: "Tools/Backend/register_request_tutoring.php",
        data: Data,
        type: 'POST',
        beforeSend: function() {
            $('#secondary_container').html("<img src='IMG/loding.gif'/>");
        },
        success: function(data) {
            setTimeout(function() {
                alert(data);
            }, wait);
        },
    });
    Opciones(2);
}

function close_cancelled() {
    Opciones(0);
}


//tutoring_on_request

function register_request(id_request_tutoring) {
    let Data = {
        "id_request_tutoring": id_request_tutoring
    }
    $.ajax({
        url: "Tools/Backend/register_request.php",
        data: Data,
        type: 'POST',
        beforeSend: function() {
            $('#secondary_container').html("<img src='IMG/loding.gif'/>");
        },
        success: function(data) {
            setTimeout(function() {
                alert(data);
            }, wait);
        },
    });
    Opciones(3);
}

function cancel_request(id_request_tutoring) {
    alert(id_request_tutoring);
    let Data = {
        "id_request_tutoring": id_request_tutoring
    }
    $.ajax({
        url: "Tools/Backend/cancel_request.php",
        data: Data,
        type: 'POST',
        beforeSend: function() {
            $('#secondary_container').html("<img src='IMG/loding.gif'/>");
        },
        success: function(data) {
            setTimeout(function() {
                alert(data);
            }, wait);
        },
    });
    Opciones(3);
}