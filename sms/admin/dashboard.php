<H1 class="text-primary"><i class="fa fa-dashboard"></i> Dashboard <small>Statistics Overview</small></H1>
<ol class="breadcrumb">
    <li class="active">Dashboard</li>
</ol>

<?php
$count_student = mysqli_query($db, "SELECT * FROM student_info");
$total_student = mysqli_num_rows($count_student);

$count_user = mysqli_query($db, "SELECT * FROM users");
$total_users = mysqli_num_rows($count_user);
?>

<div class="row">
    <div class="col-sm-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-users fa-5x"></i>
                    </div>
                    <div class="col-xs-9">
                        <div class="pull-right" style="font-size:45px"><?= $total_student;?></div>
                        <div class="clearfix"></div>
                        <div class="pull-right">All Students</div>
                    </div>
                </div>
            </div>
            <a href="index.php?page=all-students">
                <div class="panel-footer">
                    <span class="pull-left">All Students</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-o-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-users fa-5x"></i>
                    </div>
                    <div class="col-xs-9">
                        <div class="pull-right" style="font-size:45px"><?= $total_users;?></div>
                        <div class="clearfix"></div>
                        <div class="pull-right">All Users</div>
                    </div>
                </div>
            </div>
            <a href="index.php?page=all-users">
                <div class="panel-footer">
                    <span class="pull-left">All Users</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-o-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
<hr>
<h1>New Student</h1>
<div class="table-responsive">
    <table id="data" class="table table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Roll</th>
                <th>City</th>
                <th>Contact</th>
                <th>Photo</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $s_info = mysqli_query($db, "SELECT * FROM student_info");
            $count = 0;
            while ($row = mysqli_fetch_assoc($s_info)) {
                ?>
                
                <tr>
                    <td><?= $count;?></td>
                    <td><?= ucwords($row['name']);?></td>
                    <td><?= $row['roll'];?></td>
                    <td><?= ucwords($row['city']);?></td>
                    <td><?= $row['pcontact'];?></td>
                    <td><img src="img/student_img/<?= $row['photo'];?>" width="100px"></td>
                </tr>
                <?php
                $count++;
            }
            ?>
        </tbody>
    </table>
</div>