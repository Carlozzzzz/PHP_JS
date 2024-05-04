<?php include_once 'partials/header.php'; ?>

<!-- my main -->
<div class="row mt-2">
    <div class="col-6 offset-3">
        <div class="mb-4">
            <h4>List of accounts.</h4>
        </div>
        <table class="table table-bordered table-striped-columns">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Fullname</th>
                    <th scope="col">Email</th>
                    <th scope="col">User Type</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Carlos</td>
                    <td>echibot1@gmail.com</td>
                    <td>admin</td>
                    <td>
                        <div>
                            <a class="btn btn-primary" href="">Edit</a>
                            <a class="btn btn-danger" href="">Delete</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Romulo</td>
                    <td>echibot2@gmail.com</td>
                    <td>regular</td>
                    <td>
                        <div>
                            <a class="btn btn-primary" href="">Edit</a>
                            <a class="btn btn-danger" href="">Delete</a>
                        </div>
                    </td>
                </tr>
                
            </tbody>
        </table>
    </div>
</div>

<?php include_once 'partials/footer.php'; ?>