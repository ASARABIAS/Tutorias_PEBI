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