</div>
    <!-- /. PAGE INNER  -->
    <div id="footer" style="float: right;
                     font-size: 10px;">
    <span class="text-right text-primary">&copy;2017 JICT-ICT-DEV -----engine use MARS&reg; framework</span>
    </div>
</div>
<!-- /. PAGE WRAPPER  -->
<script src="<?php echo BACKEND_TEMPLATE; ?>assets/js/splash.js"></script>
<script src="<?php echo BACKEND_TEMPLATE; ?>assets/js/validate.js"></script>
<script src="<?php echo BACKEND_TEMPLATE; ?>assets/js/tablemodif.js"></script>
<script>
    var home ='<?php echo URL.$this->activeMenu?>/';
    $( document ).ready(function() {
        var a= "<?php echo $this->activeMenu?>";
        
       $("#"+a).addClass('active-menu');
       $('body').find('li').has('ul').children('ul').has('a.active-menu').removeClass('collapse').addClass('collapse in');
       var b= $('body').find('li').has('ul.collapse.in').addClass('active');
//       console.log(b);
    });
</script>

</div>


<script src="<?php echo BACKEND_TEMPLATE; ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo BACKEND_TEMPLATE; ?>assets/js/jquery.metisMenu.js"></script>
<!--<script src="<?php echo BACKEND_TEMPLATE; ?>assets/js/morris/raphael-2.1.0.min.js"></script>-->
<!--<script src="<?php echo BACKEND_TEMPLATE; ?>assets/js/morris/morris.js"></script>-->
<script src="<?php echo BACKEND_TEMPLATE; ?>assets/js/custom.js"></script>

<?php 
    if (isset($this->js)) 
    {
        foreach ($this->js as $js)
        {
            echo '<script type="text/javascript" src="'.URL.'modules/'.$this->activeMenu.'/view/'.$js.'"></script>';
        }
    }
    ?>
</body>
</html>
