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
                                <label  class="col-md-2 control-label">Departement</label>
                                <div class="col-sm-10" >
                                <input class="form-control" name='departement' value=""/>
                                <p class="help-block"></p>
                                </div>
                            </div>
                            


                            
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
