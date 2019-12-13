$(document).ready(function () {

    $('#datatable').DataTable();


//    ----------------------------------

    $(".next-step").click(function (e) {
        var id = parseInt($(this).val());
        var step = id + 1;
        $('.tab-pane').removeClass('active');
        $('#step' + (step)).addClass('active');
    });
    $(".prev-step").click(function (e) {
        var id = parseInt($(this).val());
        var step = id - 1;
        $('.tab-pane').removeClass('active');
        $('#step' + (step)).addClass('active');
    });

//    ----------------------------------

    var durasi = $('#durasi').val();
    $(function() {
        $("#waktu").countdowntimer({
            minutes: durasi,
            displayFormat : "H:M:S",
            timeUp: waktuHabis
        });
    });

    function waktuHabis() {
        $('#selesaiUjian').click();
    }

});
