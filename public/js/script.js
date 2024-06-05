$(document).ready(function() {
    toastr.options = [
        "progressbar",
        true,
        "positionClass",
        "toast-top-right"
    ];
    window.addEventListener('success', event => {
        const message = event.detail[0].message;
        toastr.success(message);
    });
    window.addEventListener('error', event => {

        const message = event.detail[0].message;
        toastr.error(message);
    });
});
