<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>My Second Page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <br>
            <?= \Config\Services::validation()->listErrors(); ?>

            <span class="d-none alert alert-success mb-3" id="res_message"></span>

            <div class="row">
                <div class="col-md-9">
                    <form action="<?php echo isset($modify)?base_url('second/update'):base_url('second/store');?>" name="user_create" id="user_create" method="post" accept-charset="utf-8">
                        <input type="hidden" name="hid" value="<?php echo $modify['id']; ?>">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Name</label>
                            <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Please enter name" value="<?php echo $modify['name']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email Id</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="Please enter email id" value="<?php echo $modify['email']; ?>">
                        </div>
                        <div class="form-group">
                            <button type="submit" id="send_form" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>

            </div>

            <div class="container mt-5">
                <a href="<?php echo site_url('public/index.php/users/create') ?>" class="btn btn-success mb-2">Create</a>
                <?php
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                }
                ?>
                <div class="row mt-3">
                    <table class="table table-bordered" id="users">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if($users): ?>
                            <?php foreach($users as $user): ?>
                                <tr>
                                    <td><?php echo $user['id']; ?></td>
                                    <td><?php echo $user['name']; ?></td>
                                    <td><?php echo $user['email']; ?></td>
                                    <td>
                                        <a href="<?php echo base_url('second/edit/'.$user['id']);?>" class="btn btn-success">Edit</a>
                                        <a href="<?php echo base_url('second/delete/'.$user['id']);?>" class="btn btn-danger">Delete</a>
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
            $('#users').DataTable();
        } );
    </script>
    <script>
        if ($("#user_create").length > 0) {
            $("#user_create").validate({

                rules: {
                    name: {
                        required: true,
                    },

                    email: {
                        required: true,
                        maxlength: 50,
                        email: true,
                    },
                },
                messages: {

                    name: {
                        required: "Please enter name",
                    },
                    email: {
                        required: "Please enter valid email",
                        email: "Please enter valid email",
                        maxlength: "The email name should less than or equal to 50 characters",
                    },
                },
            })
        }
    </script>
</html>