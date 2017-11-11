<?php
/*
 * mvc ;
 * idex.php ;
 * Satria Persada <triasada@yahoo.com> ;
 * Nov 4, 2017;
 * 11:22:42 PM;
 * Jakarta International Container Terminal (JICT);
 */
?>

<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <a class="glyphicon glyphicon-plus btn btn-success" href="<?= URL . $this->activeMenu ?>/<?= $this->activeMenu ?>/add/">Add</a>

            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="tasktable">
                        <thead>
                            <tr>
                                <th>Details</th>
                                <th>No</th>
                                <th>Project Name</th>
                                <th>Task</th>
                                <th>Resource</th>
                                <th>Status </th>
                                <th>Progress </th>
                                <th>Created </th>
                                <th>Created By </th>
                                <th>Last Update</th>
                                <th>Updated By</th>
                                <th>Operation</th>
                                

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($this->data['data'] as $item) {
                                ?>
                                <tr class="odd gradeX">
                                    <td><a id="historyFunc" href="javascript:void(0)" data-toggle="modal" data-id="<?= $item['id'] ?>"  data-target="#baseModal" class="openModal">+</a></td>
                                    <td><?= $i ?></td>
                                    <td><?= $item['projectname'] ?></td>
                                    <td><?= $item['task'] ?></td>
                                    <td><?= $item['resourcenya'] ?></td>
                                    <td class="status <?= $item['taskstatus'] ?>"><?= $item['taskstatus'] ?></td>
                                    <td><?= $item['progress'] ?>%</td>
                                    <td><?= $item['created'] ?></td>
                                    <td><?= $item['createdbyname'] ?></td>
                                    <td><?= $item['lastupdate'] ?></td>
                                    <td><?= $item['updatedbyname'] ?></td>
                                    <?php if($item['statusid']==0){ ?>
                                    <td><div class="btn-group">
                                            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Action <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a id="deleteFunc" href="javascript:void(0)" data-toggle="modal" data-id="<?= $item['id'] ?>"  data-target="#myModal" class="openModal">Delete</a></li>

                                            </ul>
                                        </div></td>
                                    <?php }?>

                                </tr>
                                <?php $i++;
                            }
                            ?>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>
