<?php include 'show.php' ?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap demo</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/style.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<form action="add_data.php" method="post">
    <label for="">Name</label>
    <input type="text" name="name" id="name">
    <label for="">Sex</label>
    <input type="text" required name="email" id="email">
    <label for="">Email</label>
    <input type="email" name="sex" id="sex">
    <button type="submit"> Submit</button>
</form>


<table>
    <thead">
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>sex</th>
            <th>email</th>
            <th>action</th>
        </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['sex'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td>
                        <button type="button" value="<?php echo $row['id'] ?>" class="btn btn-outline-danger delete" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Delete
                        </button>
                        <button type="button" value="<?php echo $row['id'] ?>" class="btn btn-outline-danger update" data-bs-toggle="modal" data-bs-target="#update">
                            Update
                        </button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
</table>
<?php include 'delete.php' ?>
<?php include 'update.php' ?>