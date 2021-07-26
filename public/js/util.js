const BASE_URL = "http://localhost/Impacta/site/";

function clearErrors() { 
    $(".has-error").removeClass ("has-error");
    $(".help_block").html("");

}

function showErrors(error_list) {
    clearErrors();

    $.each(error_list, function(id, message) {
        $(id).parent().parent().addClass("has-error");
        $(id).parent().siblings(".help-block").html(message)
    })
}

function loadingImg (message="") {
    return "<i class='fa fa-circle-o-notch fa-spin'></i>&nbsp;" + message
}