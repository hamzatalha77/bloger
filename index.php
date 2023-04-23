<?php include("myside.php")?>
<div class="container-fluid">

    <?php if (isset($_SESSION['response'])) { ?>
    <div class="alert alert-<?= $_SESSION['res_type']; ?> alert-dismissible text-center">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <b><?= $_SESSION['response']; ?></b>
    </div>
    <?php } unset($_SESSION['response']); ?>
    <table class="content-table" id="data-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_array($results)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo'<img class="img" src="images/'.$row['chemin'].'">'?></td>
                <td><?php echo $row['user']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['pass']; ?></td>
                <td><a class="btn1" href="action.php?delete=<?php echo $row['id']; ?>"
                        onclick="return confirm('Do you want delete this record?');">Delete</a> |
                    <a class="btn2" href="editadmin.php?edit=<?php echo $row['id']; ?>">Edit</a>
                </td>
            </tr>
            <?php } ?>

        </tbody>
    </table>
</div>
</div>