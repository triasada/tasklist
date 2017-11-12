
<video poster="<?php echo URL; ?>public/vid/jict/jict.jpg" id="bgvid" playsinline autoplay muted loop>
    <source src="<?php echo URL; ?>public/vid/jict/jict.webm" type="video/webm">
    <!--<source src="http://thenewcode.com/assets/videos/polina.mp4" type="video/mp4">-->
</video>

<div id="polina">
    

    <div class="row"> 
        <div class="panel-body">
            <h1 class="text-center text-primary" style="font-weight:bolder">ICT-TASK</h1>
            <div id="morris-donut-chart"></div>
        </div>
    </div>
    
</div>
<div id="bawah">
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