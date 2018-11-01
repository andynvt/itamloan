
<!-- Jquery Core Js -->
<script src="./admincp/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="./admincp/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="./admincp/plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="./admincp/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Bootstrap Colorpicker Js -->
<script src="./admincp/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>

<!-- Dropzone Plugin Js -->
<script src="./admincp/plugins/dropzone/dropzone.js"></script>

<!-- Input Mask Plugin Js -->
<script src="./admincp/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>
<!-- Multi Select Plugin Js -->
<script src="./admincp/plugins/multi-select/js/jquery.multi-select.js"></script>

<!-- Jquery Spinner Plugin Js -->
<script src="./admincp/plugins/jquery-spinner/js/jquery.spinner.js"></script>

<!-- Bootstrap Tags Input Plugin Js -->
<script src="./admincp/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

<!-- noUISlider Plugin Js -->
<!--        <script src="./admincp/plugins/nouislider/nouislider.js"></script>-->

<!-- Demo Js -->

<!-- Waves Effect Plugin Js -->
<script src="./admincp/plugins/node-waves/waves.js"></script>

<!-- Wait Me Plugin Js -->
<script src="./admincp/plugins/waitme/waitMe.js"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="./admincp/plugins/jquery-countto/jquery.countTo.js"></script>

<!-- Custom Js -->
<script src="./admincp/js/admin.js"></script>
<script src="./admincp/js/pages/index.js"></script>
<script src="./admincp/js/pages/cards/colored.js"></script>

<!-- Demo Js -->
<script src="./admincp/js/demo.js"></script>
<script src="./admincp/js/pages/ui/tooltips-popovers.js"></script>
<script src="./admincp/plugins/sweetalert/sweetalert.min.js"></script>



<script src="./admincp/js/pages/ui/dialogs.js"></script>
<script src="./admincp/js/pages/forms/advanced-form-elements.js"></script>

<!-- Autosize Plugin Js -->
<script src="./admincp/plugins/autosize/autosize.js"></script>

<!-- Moment Plugin Js -->
<script src="./admincp/plugins/momentjs/moment.js"></script>

<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="./admincp/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
<script src="./admincp/js/pages/forms/basic-form-elements.js"></script>

<script src="./admincp/plugins/tinymce/tinymce.js"></script>
<!-- Bootstrap Notify Plugin Js -->
<script src="./admincp/plugins/bootstrap-notify/bootstrap-notify.js"></script>
{{--<script src="./admincp/js/pages/ui/notifications.js"></script>--}}

<!-- Jquery DataTable Plugin Js -->
<script src="./admincp/plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="./admincp/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="./admincp/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="./admincp/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="./admincp/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="./admincp/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="./admincp/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="./admincp/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="./admincp/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

<script src="./admincp/js/pages/tables/jquery-datatable.js"></script>



<script>
    function showNotification(colorName, text) {

        if (colorName === 'danger') {
            colorName = 'alert-danger';
            iconStyle = '<img src="https://png.icons8.com/material/18/ffffff/delete-sign.png">';
        }else if(colorName === 'success'){
            colorName = 'alert-success';
            iconStyle = '<img src="https://png.icons8.com/material/24/ffffff/checkmark.png">';
        }else if(colorName === 'warning'){
            colorName = 'alert-warning';
            iconStyle = '<img src="https://png.icons8.com/material/24/ffffff/circled-i.png">';
        }else if(colorName === 'info'){
            colorName = 'alert-info';
            iconStyle = '<img src="https://png.icons8.com/material-outlined/24/ffffff/info-popup.png">';
        }

        if (text === null || text === '') {
            text = 'Thông báo mặc định';
        }

        var animateEnter = 'animated zoomInRight';
        var animateExit = 'animated zoomOutRight';
        var allowDismiss = true;

        $.notify({
                message: text
            },
            {
                type: colorName,
                allow_dismiss: allowDismiss,
                newest_on_top: true,
                timer: 1000,
                placement: {
                    from: 'bottom',
                    align: 'right'
                },
                animate: {
                    enter: animateEnter,
                    exit: animateExit
                },
                template: '<div data-notify="container" class="bootstrap-notify-container alert alert-dismissible {0} ' + (allowDismiss ? "p-r-35" : "") + '" role="alert">' +
                    '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
                    '<span data-notify="icon">'+iconStyle +' </span> ' +
                    '<span data-notify="title">{1}</span> ' +
                    '<span data-notify="message">{2}</span>' +
                    '<div class="progress" data-notify="progressbar">' +
                    '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                    '</div>' +
                    '<a href="{3}" target="{4}" data-notify="url"></a>' +
                    '</div>'
            });
    }
    @if(Session::has('flag'))
    $(document).ready(function() {
        showNotification( '{{Session::get('flag')}}' , '{{Session::get('message')}}' );
    });
    @endif
</script>