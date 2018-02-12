<div id="atas">
    <div id="atas-logo" ><img height="50px" src="<?php echo URL; ?>public/img/jict-ict.png"/></div>
    <div id="kanan">
    <?php if (Session::get('loggedIn') == true): ?>
        <button onclick=" window.location.href = 'dashboard'" title="Dashboard"  class=" btn btn-primary btn-circle"><i class="fa fa-tachometer"></i>
        </button>
        <button onclick=" window.location.href = 'dashboard/dashboard/logout'" title="Logout"  class=" btn btn-primary btn-circle"><i class="fa fa-unlock"></i>
        </button>

    <?php else: ?>
        <button title="Login" id="loginFunc"  type="button" data-toggle="modal" data-target="#baseModal" class="openModal btn btn-primary btn-circle"><i class="fa fa-lock"></i>
        </button>

    <?php endif; ?>
    </div>
</div>
<video poster="<?php echo URL; ?>public/vid/jict/jict.jpg" id="bgvid" playsinline autoplay muted loop>
    <source src="<?php echo URL; ?>public/vid/jict/jict.webm" type="video/webm">
    <!--<source src="http://thenewcode.com/assets/videos/polina.mp4" type="video/mp4">-->
</video>

<div id="polina">
    
    <br><br><br>
    <div class="main_chart_ict">
    <div class="row"> 
        <div class="panel-body" id="morris" >
            <h1 class="text-center  text-front-end" style="font-weight:bolder">ICT-Dev</h1>
            <div id="morris-donut-chart"></div>
        </div>
    </div>
    </div>
    
</div>
