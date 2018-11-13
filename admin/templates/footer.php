<!-- Bootstrap tether Core JavaScript -->
<script src="public/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script>
    $( function() {
        $( "#ngay_khai_giang, #ngay_bat_dau, #ngay_ket_thuc").datepicker({

            dateFormat: 'yy-mm-dd',
            showButtonPanel: true,
            changeMonth: true,
            changeYear: true,
            yearRange: '1999:2100',
            showOn: "button",
            buttonImage: "public/images/calendar.png",
            buttonImageOnly: true,
            minDate: 0,
            maxDate: '+30Y',
            inline: true
        });
    } );
</script>
<script src="public/assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="public/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="public/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="public/assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="public/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="public/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="public/dist/js/custom.min.js"></script>
<!--This page JavaScript -->
<!-- <script src="../../dist/js/pages/dashboards/dashboard1.js"></script> -->
<!-- Charts js Files -->
<script src="public/assets/libs/flot/excanvas.js"></script>
<script src="public/assets/libs/flot/jquery.flot.js"></script>
<script src="public/assets/libs/flot/jquery.flot.pie.js"></script>
<script src="public/assets/libs/flot/jquery.flot.time.js"></script>
<script src="public/assets/libs/flot/jquery.flot.stack.js"></script>
<script src="public/assets/libs/flot/jquery.flot.crosshair.js"></script>
<script src="public/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
<script src="public/dist/js/pages/chart/chart-page-init.js"></script>
<script src="public/assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="public/assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="public/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="public/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="public/assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="public/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="public/dist/js/sidebarmenu.js"></script>
<script src="public/dist/js/edit.js"></script>

<!--Custom JavaScript -->
<script src="public/dist/js/custom.min.js"></script>
<!-- this page js -->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="public/dist/js/jquery.loading.min.js"></script>
<script src="public/dist/js/parsley.min.js"></script>

<script src="public/assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
<script src="public/assets/extra-libs/multicheck/jquery.multicheck.js"></script>
<script src="public/assets/extra-libs/DataTables/datatables.min.js"></script>
<script src="public/assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
<script src="public/dist/js/pages/mask/mask.init.js"></script>
<script src="public/assets/libs/select2/dist/js/select2.full.min.js"></script>
<script src="public/assets/libs/select2/dist/js/select2.min.js"></script>
<script src="public/assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
<script src="public/assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
<script src="public/assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
<script src="public/assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
<script src="public/assets/libs/quill/dist/quill.min.js"></script>
<script>
    /****************************************
     *       Basic Table                   *
     ****************************************/

    $('#zero_config').DataTable();
</script>

<script>
    //***********************************//
    // For select 2
    //***********************************//
    $(".select2").select2();

    /*colorpicker*/
    $('.demo').each(function() {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
            control: $(this).attr('data-control') || 'hue',
            position: $(this).attr('data-position') || 'bottom left',

            change: function(value, opacity) {
                if (!value) return;
                if (opacity) value += ', ' + opacity;
                if (typeof console === 'object') {
                    console.log(value);
                }
            },
            theme: 'bootstrap'
        });

    });
    /*datwpicker*/
    jQuery('.mydatepicker').datepicker();
    jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    var quill = new Quill('#editor', {
        theme: 'snow'
    });

</script>
