function ajax_request(url,data={}) {
	return $.ajax({
		type: "POST",
		headers: {'X-CSRF-Token': Laravel.csrfToken},
		url: url,
		dataType : 'json',
		data: data
	});
}
function file_ajax_request(url,data={}) {
	return $.ajax({
		url:  url,
		type: "POST",
		data: data,
		headers: {'X-CSRF-Token': Laravel.csrfToken},
		dataType : "json",
		mimeType : "multipart/form-data",
		processData: false,
		contentType: false,
		encode: true
	});
}
function ajax_fail(jqXHR, status, exception) {
	if (jqXHR.status === 0) {
		error = 'Not connected.\nPlease verify your network connection.';
	} else if (jqXHR.status == 404) {
		error = 'The requested page not found. [404]';
	} else if (jqXHR.status == 500) {
		error = 'Internal Server Error [500].';
	} else if (exception === 'parsererror') {
		error = 'Requested JSON parse failed.';
	} else if (exception === 'timeout') {
		error = 'Time out error.';
	} else if (exception === 'abort') {
		error = 'Ajax request aborted.';
	} else {
		error = 'Uncaught Error.\n' + jqXHR.responseText;
	}
	toast_error(error);
}
function toast_success(msg='Submit successfully') {
	Toast.fire({
        type: 'success',
        title: msg
    });
}
function toast_error(msg='Oops something went wrong...please try again') {
	Toast.fire({
        type: 'error',
        title: msg
    });
}
function scroll_up(){
    $("html, body").animate({
        scrollTop: 0
    }, 700);
}
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode != 46 && charCode !=43 && charCode !=45 ) {
        return false;
    }
    return true;
}
function printMsg(alertDiv,msgclass,message){
    var body = $("html, body");
    body.stop().animate({scrollTop:0}, 500, 'swing', function() {
        $("#"+alertDiv).show();
        $("#"+alertDiv).addClass(msgclass);
        $("#"+alertDiv+" span").html(message);
    });
    setTimeout(function(){
        $("#"+alertDiv).hide();
        $("#"+alertDiv).removeClass(msgclass);
        $("#"+alertDiv+" span").html('');
    },7000);
}
function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}
$(document).on('keypress', '.isNumber', function(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode != 46 && charCode !=43 && charCode !=45 ) {
        return false;
    }
    return true;
});
if(typeof $.validator !== 'undefined'){
	$.validator.setDefaults({
		ignore: [],
		errorElement: 'span',
        highlight: function(element, errorClass, validClass) {
            $(element).closest('.form-group').addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).closest('.form-group').removeClass('is-invalid');
        },
	});
}
