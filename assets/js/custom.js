$(document).ready(function(){
    $("#part-1-submit").on("click", function() {
        $("#part-1").css({
            'display': 'none'
        });
        $("#part-2").css({
            'display': 'block'
        });
    });

    $("#part-2-submit").on("click", function() {
        $("#part-2").css({
            'display': 'none'
        });
        $("#part-3").css({
            'display': 'block'
        });
    });
});
