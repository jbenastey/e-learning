$(document).ready(function () {

    $('#datatable').DataTable();

    $('.summernotejawab').summernote({
        height: 200
    });
    $('.summernote').summernote({
        height: 300
    });
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
			dateAndTime : durasi,
            displayFormat : "H:M:S",
			size : "lg",
            timeUp: waktuHabis
        });
    });

    function waktuHabis() {
    	alert('waktu sudah habis');
        $('#btn-submit-soal').click();
    }

});
