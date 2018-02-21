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
                            <div class="form-group row">
                                <label class="col-md-2 control-label" style="width: 100px">Project</label>
                                 <div class="col-sm-10" >
                                <select class="form-control" name='project' >
                                    <?php
                                    foreach ($this->project as $group) {
                                        ?>

                                        <option value="<?= $group['id'] ?>" ><?= $group['project'] ?></option>
                                        <?php
                                    }
                                    ?>

                                </select>
                                 </div>
                            </div>
                            <div id="task" class="form-group row">
                                <label class="col-md-2 control-label" style="width: 100px">Task</label>
                                <div class="col-sm-10" >
                                <textarea class="form-control" rows="3" name="task"></textarea>
                                <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="panel panel-default" >
                                        <div class="panel-heading" >
                                            Resource
                                        </div>
                                        <?php
                                        foreach ($this->resource as $value) {
                                            
                                            ?>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="resource[]" value="<?= $value['id'] ?>" /><?= $value['fname']."".$value['lname'] ?>
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
