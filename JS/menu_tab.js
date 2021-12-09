wait = 1200;

function Opciones(index) {
    $.ajax({
        url: "Tools/student/actives_tutoring.php",
        //data: Data,
        type: 'POST',
        beforeSend: function() {
            $('#my_tutorials').html("<img src='IMG/loding.gif'/>");
        },
        success: function(data) {
            setTimeout(function() {
                $('#my_tutorials').html(data);
            }, wait);
        },
    });
}
function Opciones_administrator(index) {
    urln="";
    switch (index) {
        case 0:
            urln="active_tutoring";
            break;
         case 1:
            urln="new_tutoring";
            break;
         case 2:
            //urln="requeriment";
            break;
        case 3:
          //  urln="new_tutoring;
            break;
        case 4:
            urln="requirement";
            break;
     }
    $.ajax({
        url: "Tools/administrator/"+urln+".php",
        type: 'POST',
        beforeSend: function() {
            $('#vista').html("<img src='IMG/loding.gif'/>");
        },
        success: function(data) {
            setTimeout(function() {
                $('#vista').html(data);
            }, wait);
        },
    });
}
