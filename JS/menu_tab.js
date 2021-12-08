wait = 1500;

function Opciones(index) {
    $.ajax({
        url: "Tools/Backend/actives_tutoring.php",
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