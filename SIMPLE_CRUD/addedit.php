<?php include_once 'partials/header.php'; ?>

<?php
    $headerValue = "Add New";

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
    
        // CREATE YOUR QUERY
        $result = $connect->query("SELECT * FROM users WHERE id=$id") or die(mysqli_error($connect));
    
        // CATCH THE RESULT
        $data = $result->fetch_array();
        
        if(count($data) > 0) {
            $fullname = $data['fullname'];
            $email = $data['email'];
            $password = $data['password'];
            $usertype = $data['user_type'];

            $headerValue = "Edit Data";
        }
    }

?>
<!-- Add and edit -->
<div class="row mt-4">
    <div class="col-4 offset-4">
        <form class="border rounded p-3" method="POST" action="process.php">
            <input type="hidden" name="id" value="<?=isset($_GET['id']) ? $_GET['id'] : ""?>">
            <div class="form-header mb-4">
                <h4 class="text-center my-2"><?= $headerValue; ?></h3>
            </div>
            <div class="mb-3">
                <label for="fullname" class="form-label">Fullname</label>
                <input name="fullname" type="text" class="form-control" id="fullname" aria-describedby="fullname" value="<?= $fullname; ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" value="<?= $email; ?>">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="password">
            </div>
            <div class="mb-3">
                <label for="usertypeSelect" class="mb-2" >User Type</label>
                <select class="form-select" id="usertypeSelect" name="usertype">
                    <option value="" selected>Choose...</option>
                    <option value="Admin" <?= $usertype == "Admin" ? "selected" : ""; ?> >Admin</option>
                    <option value="Regular" <?= $usertype == "Regular" ? "selected" : ""; ?> >Regular</option>
                </select>
            </div>

            <div class="d-flex justify-content-end">
                <?php if(isset($_GET['id']) ) { ?>
                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                <?php } else { ?>
                        <button type="submit" name="save" class="btn btn-primary">Save</button>
                <?php } ?>
                <a href="index.php" class="btn btn-secondary ms-2">Cancel</a>
            </div>
        </form>
    </div>

</div>

<?php include_once 'partials/footer.php'; ?>