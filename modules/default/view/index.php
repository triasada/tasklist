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
<div id="contentisi">
    <div id="isikiri">


    </div>

</div>


