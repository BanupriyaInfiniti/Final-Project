<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product</title>
    <?php include "head.php";
    Admin::authCheck2(BASE);
    $Products = Admin::getProducts($mysqli);
    ?>
</head>
<body class="app sidebar-mini rtl">
<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> Data Table</h1>
            <p>Table to display analytical data effectively</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <a href="<?php echo BASE.'admin/product_all.php';?>" class="fa-pull-left"><i class="fa fa-list text-dark"></i> &nbsp;All</a>
                    <a href="<?php echo BASE.'admin/product_create.php'; ?>" class="pull-right"><i class="fa fa-plus text-primary"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body table-responsive">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; while ($row = $Products->fetch_array()){ ?>
                            <tr>
                                <td><?php echo $i++ ?></td>
                                <td><?php echo $row['title'] ?></td>
                                <td><?php echo $row['description'] ?></td>
                                <td><?php echo $row['created_at'] ?></td>
                                <td><?php echo $row['updated_at'] ?></td>
                                <td>
                                    <center>
                                        <a href="<?php echo BASE.'admin/product_edit.php?id='.$row['id']; ?>"><i class="fa fa-pencil text-success"></i></a>
                                        &nbsp;&nbsp;&nbsp;
                                        <a href="#"><i class="fa fa-trash text-danger"></i></a>
                                    </center>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include "script.php"; ?>
<!-- Data table plugin-->
<script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">$('#sampleTable').DataTable();</script>
</body>
</html>