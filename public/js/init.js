$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

var init = {
    conf: {
        ajax_sending: false,
    }
}
