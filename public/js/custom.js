$(document).ready(function () {

    $('#samePresent').on('change', function () {
        if ($(this).prop('checked')) {
            $('#present_address').hide("slow");
        } else {
            $('#present_address').show("slow");
        }
    });

    $('#samePermanent').on('change', function () {
        if ($(this).prop('checked')) {
            $('#permanent_address').hide("slow");
        } else {
            $('#permanent_address').show("slow");
        }
    });

});