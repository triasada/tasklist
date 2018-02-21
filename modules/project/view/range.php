<?php
/*
 * mymvc ;
 * edit.php ;
 * Satria Persada <triasada@yahoo.com> ;
 * Nov 9, 2017;
 * 6:43:34 PM;
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
                            <fieldset>
                            <div class="form-group row">
                                <label  class="col-md-2 control-label">Project Name</label>
                                <div class="col-sm-10" >
                                    <input class="form-control" name='project' value="<?= $this->data['data']['project'] ?>" readonly/>
                                <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  for="descript" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10" >
                                    <input id="descript" class="form-control" name='descript' value="<?= $this->data['data']['descript'] ?>"readonly/>
                                <p class="help-block"></p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="dtp_input" class="col-md-2 control-label">Start Date</label>
                                <div class="input-group date form_date col-md-5" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input" data-link-format="yyyy-mm-dd">
                                    <input class="form-control" size="16" type="text" value="<?= $this->data['data']['start_date'] ?>" readonly>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                </div>
                                <input type="hidden" id="dtp_input" name="start_date" value="<?= $this->data['data']['start_date'] ?>" /><br/>
                            </div>
                                <div class="form-group row">
                                <label for="dtp_input2" class="col-md-2 control-label">End Date</label>
                                <div class="input-group date form_date col-md-5" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                    <input class="form-control" size="16" type="text" value="<?= $this->data['data']['end_date'] ?>" readonly>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                </div>
                                <input type="hidden" id="dtp_input2" name="end_date" value="<?= $this->data['data']['end_date'] ?>" /><br/>
                            </div>
                            
                                <div></div>
                            <button  type="button" class="btn btn-success" onclick="edit()" >Submit</button>
                            <button type="reset" class="btn btn-primary">Reset</button>
                            </fieldset>
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
