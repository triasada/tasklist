
<div class="row">
    <a href="<?=URL?>task/task/statTask/0">
    <div class="col-md-3 col-sm-6 col-xs-6"> 
        <div class="panel panel-back noti-box">
            <span class="icon-box bg-color-red set-icon">
                <i class="fa fa-bars"></i>
            </span>
            <div class="text-box" >
                <p class="main-text"><?=$this->data['dataNew']?> </p>
               <p class="main-text">New</p>
            </div>
        </div>
    </div>
    </a>
     <a href="<?=URL?>task/task/statTask/1">
    <div class="col-md-3 col-sm-6 col-xs-6">           
        <div class="panel panel-back noti-box">
            <span class="icon-box bg-color-blue set-icon">
                <i class="fa fa-bars"></i>
            </span>
            <div class="text-box" >
                <p class="main-text"><?=$this->data['dataProc']?> </p>
                <p class="main-text">On Progress</p>
            </div>
        </div>
    </div>
    </a>
     <a href="<?=URL?>task/task/statTask/2">
    <div class="col-md-3 col-sm-6 col-xs-6">           
        <div class="panel panel-back noti-box">
            <span class="icon-box bg-color-brown set-icon">
                <i class="fa fa-bars"></i>
            </span>
            <div class="text-box" >
                <p class="main-text"><?=$this->data['dataNeed']?></p>
                <p class="main-text">Need Review</p>
            </div>
        </div>
    </div>
    </a>
     <a href="<?=URL?>task/task/statTask/4">
    <div class="col-md-3 col-sm-6 col-xs-6">           
        <div class="panel panel-back noti-box">
            <span class="icon-box bg-color-green set-icon">
                <i class="fa fa-bars"></i>
            </span>
            <div class="text-box" >
                <p class="main-text"><?=$this->data['dataDone']?></p>
                <p class="main-text">Done</p>
            </div>
        </div>
    </div>
    </a>
</div>
