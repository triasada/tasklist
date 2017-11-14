</div>
<script src="<?php echo BACKEND_TEMPLATE; ?>assets/js/validate.js"></script>
<script src="<?php echo URL; ?>public/js/depan.js"></script>

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
                     labelColor: '#fff',
                resize: true
                });
               
                
            } 

        },
        dataType: 'JSON'
    });
//    setTimeout(function() {
  $('#morris').fadeIn(8000);
  $('.main_chart_ict').fadeIn(8000);
//}, 2000);   
   
    });
</script>
</body>
</html>