<?php
/*
 * mymvc ;
 * add.php ;
 * Satria Persada <triasada@yahoo.com> ;
 * Nov 9, 2017;
 * 8:17:06 PM;
 * Jakarta International Container Terminal (JICT);
 */
?>

<div class="row">
    <div class="col-md-12">
        <!-- Form Elements -->
        <div class="panel panel-default">
            <div class="panel-heading">

            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">

                        <form role="form" id="dataForm"  action="<?= URL . $this->activeMenu ?>/<?= $this->activeMenu ?>/save/<?= $this->data['data']['id'] ?>">
                            <div id="groupName" class="form-group input-group input-group">
                                <span class="input-group-addon" style="width: 100px">Group Name</span>
                                <input class="form-control" name='groupName' value=""/>
                                <p class="help-block"></p>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="panel panel-default" >
                                        <div class="panel-heading" >
                                            Access
                                        </div>
                                        <?php
                                        foreach ($this->datapage as $value) {
                                            
                                            ?>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="role[]" value="<?= $value['id'] ?>"  <?= $check ?> /><?= $value['page'] ?>
                                                </label>
                                            </div>

                                        <?php } ?>
                                    </div></div></div>

                            <button  type="button" class="btn btn-success" onclick="add()" >Submit</button>
                            <button type="reset" class="btn btn-primary">Reset</button>

                        </form>

                    </div>
                </div>
            </div>
            <!-- End Form Elements -->
        </div>
    </div>
    <!-- /. ROW  -->

</div>
<!-- /. ROW  -->
