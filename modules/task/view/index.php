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
                                    <?php
                                    switch ($item['statusid']) {
                                        case 0:
                                            ?>
                                            <td><a id="updateFunc" href="javascript:void(0)" data-toggle="modal" data-id="<?= $item['id'] ?>"  data-task="<?= $item['task'] ?>" data-progress="<?= $item['progress'] ?>"data-statusid="<?= $item['statusid'] ?>"data-target="#baseModal" class="openModal btn btn-primary">Update</a></td>
                                            <?php
                                            break;
                                        case 1:
                                            ?>
                                            <td><div class="btn-group">
                                                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Action <span class="caret"></span></button>
                                                    <ul class="dropdown-menu">
                                                        <li><a id="updateFunc" href="javascript:void(0)" data-toggle="modal" data-id="<?= $item['id'] ?>"  data-task="<?= $item['task'] ?>" data-progress="<?= $item['progress'] ?>"data-statusid="<?= $item['statusid'] ?>"data-target="#baseModal" class="openModal">Update</a></li>
                                                        <li><a href="javascript:void(0)" data-id="<?= $item['id'] ?>"  data-task="<?= $item['task'] ?>" data-progress="100"data-statusid="2" onclick="done(this)">Done</a></li>
                                                    </ul>
                                                </div></td>
                                        <?php
                                            break;
                                        case 2:
                                            ?>
                                            <td><div class="btn-group">
                                                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Action <span class="caret"></span></button>
                                                    <ul class="dropdown-menu">
                                                        <li><a id="updateFunc" href="javascript:void(0)" data-toggle="modal" data-id="<?= $item['id'] ?>"  data-task="<?= $item['task'] ?>" data-progress="<?= $item['progress'] ?>"data-statusid="<?= $item['statusid'] ?>"data-target="#baseModal" class="openModal ">Revision</a></li>
                                                        <li><a href="javascript:void(0)"data-id="<?= $item['id'] ?>"  data-task="<?= $item['task'] ?>" data-progress="100"data-statusid="4" onclick="done(this)">Done</a></li>
                                                    </ul>
                                                </div></td>
                                            <?php
                                            break;
                                        case 3:
                                            ?>
                                              <td><a id="updateFunc" href="javascript:void(0)" data-toggle="modal" data-id="<?= $item['id'] ?>"  data-task="<?= $item['task'] ?>" data-progress="<?= $item['progress'] ?>"data-statusid="<?= $item['statusid'] ?>"data-target="#baseModal" class="openModal btn btn-primary">Update</a></td>
                                            <?php
                                        break;
                                        case 4:
                                            break;
                                        
                                    }
                                    ?>
                                </tr>
                                <?php
                                $i++;
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
