<?php include_once 'partials/header.php'; ?>

<!-- my main -->
<div class="row mt-2">
    <div class="col-6 offset-3">
        <div class="mb-4">
            <h4 class="test-header">List of accounts.</h4>
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
                <?php $users = $connect->query("SELECT * FROM users") or die(mysqli_error($mysqli)) ?>
                <?php $userIndex = 1; ?>
                
                <?php while($row = $users->fetch_assoc()) : ?>

                    <tr>
                        <th scope="row"><?= $userIndex; ?></th>
                        <td><?= $row['fullname']; ?></td>
                        <td><?= $row['email']; ?></td>
                        <td><?= $row['user_type']; ?></td>
                        <td>
                            <div>
                                <a class="btn btn-primary" href="addedit.php?id=<?=$row['id']?>">Edit</a>
                                <a class="btn btn-danger" href="process.php?id=<?=$row['id']?>&&delete=true">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <?php $userIndex++; ?>
                <?php endwhile;?>
                
            </tbody>
        </table>
    </div>
</div>

<?php include_once 'partials/footer.php'; ?>