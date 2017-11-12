</div>
<script src="<?php echo BACKEND_TEMPLATE; ?>assets/js/validate.js"></script>
<script src="<?php echo BACKEND_TEMPLATE; ?>assets/js/depan.js"></script>

<script src="<?php echo BACKEND_TEMPLATE; ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo BACKEND_TEMPLATE; ?>assets/js/morris/raphael-2.1.0.min.js"></script>
<script src="<?php echo BACKEND_TEMPLATE; ?>assets/js/morris/morris.js"></script>
<script>
    $(function () {
       console.log('<?=URL?>');
        $.ajax({
        type: "GET",
        url: '<?=URL?>data/data/getData',
       
        success: function (data) {
            if (data.success) {
                new Morris.Donut({
                    element: 'morris-donut-chart',
                    data: data.data,
                resize: true
                });
               
                
            } 

        },
        dataType: 'JSON'
    });
   
    });
</script>
</body>
</html>