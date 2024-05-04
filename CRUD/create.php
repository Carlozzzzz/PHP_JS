<?php include_once 'partials/header.php'; ?>

<!-- Add and edit -->
<div class="row mt-4">
    <div class="col-4 offset-4">
        <form class="border rounded p-3" method="POST" action="includes/create.inc.php">
            <div class="form-header mb-4">
                <h4 class="text-center my-2">Add New</h3>
            </div>
            <div class="mb-3">
                <label for="fullname" class="form-label">Fullname</label>
                <input name="fullname" type="email" class="form-control" id="fullname" aria-describedby="fullname">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="password">
            </div>
            <div class="mb-3">
                <label for="usertypeSelect" class="mb-2" >User Type</label>
                <select class="form-select" id="usertypeSelect" name="usertype">
                    <option selected>Choose...</option>
                    <option value="Admin">Admin</option>
                    <option value="Regular">Regular</option>
                </select>
            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="submit" class="btn btn-secondary ms-2">Cancel</button>
            </div>
        </form>
    </div>

</div>

<?php include_once 'partials/footer.php'; ?>