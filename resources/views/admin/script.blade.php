
<!-- Jquery Core Js -->
<script src="../admincp/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="../admincp/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="../admincp/plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="../admincp/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Bootstrap Colorpicker Js -->
<script src="../admincp/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>

<!-- Dropzone Plugin Js -->
<script src="../admincp/plugins/dropzone/dropzone.js"></script>

<!-- Input Mask Plugin Js -->
<script src="../admincp/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>
<!-- Multi Select Plugin Js -->
<script src="../admincp/plugins/multi-select/js/jquery.multi-select.js"></script>

<!-- Jquery Spinner Plugin Js -->
<script src="../admincp/plugins/jquery-spinner/js/jquery.spinner.js"></script>

<!-- Bootstrap Tags Input Plugin Js -->
<script src="../admincp/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

<!-- noUISlider Plugin Js -->
<!--        <script src="../admincp/plugins/nouislider/nouislider.js"></script>-->

<!-- Demo Js -->

<!-- Waves Effect Plugin Js -->
<script src="../admincp/plugins/node-waves/waves.js"></script>

<!-- Wait Me Plugin Js -->
<script src="../admincp/plugins/waitme/waitMe.js"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="../admincp/plugins/jquery-countto/jquery.countTo.js"></script>

<!-- Custom Js -->
<script src="../admincp/js/admin.js"></script>
<script src="../admincp/js/pages/index.js"></script>
<script src="../admincp/js/pages/cards/colored.js"></script>

<!-- Demo Js -->
<script src="../admincp/js/demo.js"></script>
<script src="../admincp/js/pages/ui/tooltips-popovers.js"></script>
<script src="../admincp/plugins/sweetalert/sweetalert.min.js"></script>



<script src="../admincp/js/pages/ui/dialogs.js"></script>
<script src="../admincp/js/pages/forms/advanced-form-elements.js"></script>

<!-- Autosize Plugin Js -->
<script src="../admincp/plugins/autosize/autosize.js"></script>

<!-- Moment Plugin Js -->
<script src="../admincp/plugins/momentjs/moment.js"></script>

<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="../admincp/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
<script src="../admincp/js/pages/forms/basic-form-elements.js"></script>

<script>
    $(function() {
        $('.delete-btn i').on('click', function() {
            var type = $(this).data('type');
            //                    alert(type);
            if (type === 'cancel') {
                showCancelMessage();
            }
        });
    });

    function showCancelMessage() {
        swal({
            title: "Bạn có chắn chắn?",
            text: "Bạn sẽ không thể khôi phục được khuyến mãi này!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3F51B5",
            confirmButtonText: "Xoá",
            cancelButtonText: "Huỷ",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function(isConfirm) {
            if (isConfirm) {
                swal("Đã xoá!", "Khuyến mãi đã được xoá", "success");
            } else {
                swal("Đã huỷ", "Khuyến mãi vẫn còn", "error");
            }
        });
    }
</script>
<script>
    $(function() {
        // Multiple images preview in browser
        var imagesPreview = function(input, placeToInsertImagePreview) {
            if (input.files) {
                var filesAmount = input.files.length;
                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();
                    reader.onload = function(event) {
                        $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                    }
                    reader.readAsDataURL(input.files[i]);
                }
            }
        };
        $('#gallery-photo-add').on('change', function() {
            $('.gallery').empty();
            imagesPreview(this, 'div.gallery');
        });
    });
    $(function() {
        // Multiple images preview in browser
        var imagesPreviewEdit = function(input, placeToInsertImagePreview) {
            if (input.files) {
                var filesAmount = input.files.length;
                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();
                    reader.onload = function(event) {
                        $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                    }
                    reader.readAsDataURL(input.files[i]);
                }
            }
        };
        $('#gallery-photo-edit').on('change', function() {
            $('.gallery-edit').empty();
            imagesPreviewEdit(this, 'div.gallery-edit');
        });
    });
</script>