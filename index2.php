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
                <th>Title</th>
                <th>Object</th>
                <th>User</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
        $sql= "SELECT * FROM posts Order by id desc";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);          
        while ($row = mysqli_fetch_array($result)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo'<img class="img" src="artphotos/'.$row['photos'].'">'?></td>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo substr($row['object'],0,110) . "..."; ?></td>
                <td><?php echo $row['user']; ?></td>
                <td><a class="btn1" href="action.php?delart=<?php echo $row['id']; ?>"
                        onclick="return confirm('Do you want delete this record?');">Delete</a> |
                    <a class="btn2" href="editarticle.php?editart=<?php echo $row['id']; ?>">Edit</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</div>