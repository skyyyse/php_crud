<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Code</th>
            <th>Name</th>
            <th>Sex</th>
            <th>Email</th>
            <th>Scholl</th>
            <th>Subject</th>
            <th>Date</th>
            <th>
                <a href="store.php">ADD</a>
            </th>
        </tr>
    </thead>
    <tbody>
        <?php if (mysqli_num_rows($student) > 0) { ?>
            <?php
            $row_number = 1;
            foreach ($student as $row) { ?>
                <tr>
                    <td class="col-1"><?php echo $row_number++ ?></td>
                    <td class="col-1"><?php echo $row['id'] ?></td>
                    <td class="col-1"><?php echo $row['name'] ?></td>
                    <td class="col-1"><?php echo $row['sex'] ?></td>
                    <td class="col-1"><?php echo $row['email'] ?></td>
                    <td class="col-2"><?php echo $row['title_school'] ?></td>
                    <td class="col-1"><?php echo $row['title_subject'] ?></td>
                    <td class="col-1"><?php echo $row['date'] ?></td>
                    <td style="margin: 30px;padding: 10px;" class="col-2">
                        <button type="button" value="<?php echo $row['id'] ?>" class="btn btn-outline-danger delete" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Delete
                        </button>
                        <button type="button" value="<?php echo $row['id'] ?>" class="btn btn-outline-secondary update" data-bs-toggle="modal" data-bs-target="#fullscreeexampleModal">
                            Update
                        </button>
                    </td>
                </tr>
            <?php } ?>
        <?php } else { ?>
            <tr>
                <td colspan="10">
                    <p style="display: flex;justify-content: center;align-items: center; margin-top:15px">No Record Found</p>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>