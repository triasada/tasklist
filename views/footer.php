</div>
<script src="<?php echo BACKEND_TEMPLATE; ?>assets/js/validate.js"></script>
<script src="<?php echo URL; ?>public/js/depan.js"></script>

<script src="<?php echo BACKEND_TEMPLATE; ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo BACKEND_TEMPLATE; ?>assets/js/morris/raphael-2.1.0.min.js"></script>
<script src="<?php echo BACKEND_TEMPLATE; ?>assets/js/morris/morris.js"></script>
<script>
    $(function () {
        console.log('<?= URL ?>');
        $.ajax({
            type: "GET",
            url: '<?= URL ?>data/data/getProject',

            success: function (data) {
                if (data.success) {
                    var newdata= data.data;
                    $('#isikiri').append("<h4>Project List</h3><br>");
                    for (i = 0; i < newdata.length; i++) {
                        var colorijo;
                        switch (newdata[i].priority_id) {
    case "1":
        colorijo="white";
        break;
    case "5":
        colorijo="text-danger";
        break;
    case "4":
        colorijo="text-danger";
        break;
        

    default:
        
        break;
}
                       $('#isikiri').append("<h5 class='"+colorijo+"'>"+newdata[i].project+"  ("+newdata[i].taskall+" task)</h4>");
                       var percent = Math.round(100*newdata[i].taskdone/newdata[i].taskall)
                       if (!percent){percent = 0}
                        $('#isikiri').append(" <div class='progress'><div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow='"+percent+"' aria-valuemin='0' aria-valuemax='100' style='width:"+percent+"%'>\n\
    <span >"+percent+"% Complete</span> </div></div>");
                        console.log(data.data);
                    }

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