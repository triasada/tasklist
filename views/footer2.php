</div>
<!-- /. PAGE INNER  -->
<div id="footer" style="float: right;
     font-size: 10px;">
    <span class="text-right text-primary">&copy;2017 JICT-ICT-DEV | MARS&reg; engine |Admin Template by binary Chart</span>
</div>
</div>
<!-- /. PAGE WRAPPER  -->
<script src="<?php echo BACKEND_TEMPLATE; ?>assets/js/splash.js"></script>
<script src="<?php echo BACKEND_TEMPLATE; ?>assets/js/validate.js"></script>
<script src="<?php echo BACKEND_TEMPLATE; ?>assets/js/tablemodif.js"></script>
<script>
    var url_home = '<?php echo URL ?>';
    var home = '<?php echo URL . $this->activeMenu ?>/';
    $(document).ready(function () {
        var a = "<?php echo $this->activeMenu ?>";

        $("#" + a).addClass('active-menu');
        $('body').find('li').has('ul').children('ul').has('a.active-menu').removeClass('collapse').addClass('collapse in');
        $('body').find('li').has('ul.collapse.in').addClass('active');
        var b = $('li').has('a.active-menu').removeClass('selected').addClass('selected');
        $('li').has('ul').removeClass('selected');

//    $('input[type="checkbox"]').change(checkboxChanged);
//    console.log(b);
    });
</script>

</div>


<script src="<?php echo BACKEND_TEMPLATE; ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo BACKEND_TEMPLATE; ?>assets/js/bootstrap-datetimepicker.js"></script>
<script src="<?php echo BACKEND_TEMPLATE; ?>assets/js/locales/bootstrap-datetimepicker.id.js"></script>
<script src="<?php echo BACKEND_TEMPLATE; ?>assets/js/jquery.metisMenu.js"></script>
<script src="<?php echo BACKEND_TEMPLATE; ?>assets/js/dataTables/jquery.dataTables.js"></script>
<script src="<?php echo BACKEND_TEMPLATE; ?>assets/js/dataTables/dataTables.bootstrap.js"></script>
<script>
    $(document).ready(function () {
        $('#tasktable').dataTable();
        $('.form_date').datetimepicker({
        language:  'id',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
    });
</script>
<script src="<?php echo BACKEND_TEMPLATE; ?>assets/js/custom.js"></script>
<!--<script src="<?php echo BACKEND_TEMPLATE; ?>assets/js/morris/raphael-2.1.0.min.js"></script>-->
<!--<script src="<?php echo BACKEND_TEMPLATE; ?>assets/js/morris/morris.js"></script>-->

<?php
if (isset($this->js)) {
    foreach ($this->js as $js) {
        echo '<script type="text/javascript" src="' . URL . 'modules/' . $this->activeMenu . '/view/' . $js . '"></script>';
    }
}
?>
</body>
</html>
