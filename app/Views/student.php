<?php
    if($_SESSION['ins']){
        print_r($_SESSION);
        exit;
    }
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Student Management</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <br>
            <?= \Config\Services::validation()->listErrors(); ?>

            <span class="d-none alert alert-success mb-3" id="res_message"></span>

            <?php echo view('student_form'); ?>

            <div class="container mt-5">
                <?php
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                }
                ?>
                <div class="row mt-3">
                    <table class="table table-bordered" id="student">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if($student): ?>
                            <?php foreach($student as $s): ?>
                                <tr>
                                    <td><?php echo $s['id']; ?></td>
                                    <td><?php echo $s['name']; ?></td>
                                    <td><?php echo $s['email']; ?></td>
                                    <td><?php echo $s['mobile']; ?></td>
                                    <td><img src="<?php echo base_url()."/".$s['image']; ?>" style="height: 100px;width: 100px;"></td>
                                    <td>
                                        <a href="<?php echo base_url('student/edit/'.$s['id']);?>" class="btn btn-success">Edit</a>
                                        <a href="<?php echo base_url('student/delete/'.$s['id']);?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </body>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>

    <script>
        $(document).ready( function () {
            $('#student').DataTable();
        } );
    </script>
</html>