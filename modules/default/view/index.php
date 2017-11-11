
<video poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" id="bgvid" playsinline autoplay muted loop>
<source src="http://thenewcode.com/assets/videos/polina.webm" type="video/webm">
<source src="http://thenewcode.com/assets/videos/polina.mp4" type="video/mp4">
</video>
<div id="polina">
<h2>Task List Progress</h2>

    <?php if (Session::get('loggedIn') == true):?>
        <a href="<?php echo URL; ?>dashboard">Dashboard</a>
        <a href="<?php echo URL; ?>note">Notes</a>
        
        <?php if (Session::get('role') == 'owner'):?>
        <a href="<?php echo URL; ?>user">Users</a>
        <?php endif; ?>
        
        <a href="<?php echo URL; ?>dashboard/logout">Logout</a>    
    <?php else: ?>
        <a id="loginFunc" href="javascript:void(0)" data-toggle="modal" data-target="#baseModal" class="openModal ">Login</a>
    <?php endif; ?>
</div>