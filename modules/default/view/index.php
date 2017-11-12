
<video poster="<?php echo URL; ?>public/vid/jict/jict.jpg" id="bgvid" playsinline autoplay muted loop>
    <source src="<?php echo URL; ?>public/vid/jict/jict.webm" type="video/webm">
    <!--<source src="http://thenewcode.com/assets/videos/polina.mp4" type="video/mp4">-->
</video>
<div id="header" >
    <?php if (Session::get('loggedIn') == true): ?>
        <button onclick=" window.location.href = 'dashboard'" title="Dashboard"  class=" btn btn-primary btn-circle"><i class="fa fa-tachometer"></i>
        </button>
        <button onclick=" window.location.href = 'dashboard/dashboard/logout'" title="Logout"  class=" btn btn-primary btn-circle"><i class="fa fa-unlock"></i>
        </button>

    <?php else: ?>
        <button title="Login" id="loginFunc"  type="button" data-toggle="modal" data-target="#baseModal" class="openModal btn btn-primary btn-circle"><i class="fa fa-lock"></i>
        </button>

    <?php endif; ?></div>
<div id="polina">
    <h2 class="text-box text-center text-success" style="font-weight:5px; font-size: 30px">Task List Progress</h2>
    <br>
    <br>
    <br>

    <div class="row"> 
        <div class="panel-heading">
           
        </div>
        <div class="panel-body">
            <h1 class="text-center text-danger" style="font-weight:bolder">Gboss</h1>
            <div id="morris-donut-chart"></div>
        </div>
    </div>
</div>
