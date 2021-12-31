<div class="row">
    <div class="col-md-9">
        <form enctype="multipart/form-data" action="<?php echo isset($modify)?base_url('student/update'):base_url('student/store');?>" name="user_create" id="user_create" method="post" accept-charset="utf-8">
            <input type="hidden" name="hid" value="<?php echo $modify['id']; ?>">
            <div class="form-group">
                <label for="formGroupExampleInput">Name</label>
                <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Please enter name" value="<?php echo $modify['name']; ?>">
            </div>
            <div class="form-group">
                <label for="email">Email Id</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Please enter email id" value="<?php echo $modify['email']; ?>">
            </div>
            <div class="form-group">
                <label for="email">Mobile Number</label>
                <input type="number" name="mobile" class="form-control" id="mobile" placeholder="Please Mobile" value="<?php echo $modify['mobile']; ?>">
            </div>
            <div class="form-group">
                <label for="email">Choose Image</label>
                <input type="file" name="image" class="form-control" id="image">
            </div>
            <div class="form-group">
                <button type="submit" id="send_form" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>

</div>
