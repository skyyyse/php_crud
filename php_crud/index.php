<!doctype html>
<html lang="en">

<head>
    <?php include '../php_crud/function/index.php' ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="container text-center" style="background-color: burlywood;">
        <h1 style="font-weight: bold;">ទម្រង់ព័ត៍មានរបស់សិស្សនិស្សិត</h1>
    </div>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="" method="GET">
                    <div class="input-group mb-3">
                        <input type="text" name="search" class="form-control" placeholder="Search data">
                        <button type="submit" value="<?php echo htmlspecialchars($search); ?>" class="btn btn-primary" style="height: 39px;margin-top: 5px;margin-left: 5px;">Search</button>
                    </div>
                </form>
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
                            <?php while ($row = mysqli_fetch_assoc($student)) {
                                $i = 1;
                            ?>
                                <tr>
                                    <td class="col-1"><?php echo $i ?></td>
                                    <td class="col-1"><?php echo $row['code'] ?></td>
                                    <td class="col-1"><?php echo $row['name'] ?></td>
                                    <td class="col-1"><?php echo $row['sex'] ?></td>
                                    <td class="col-1"><?php echo $row['email'] ?></td>
                                    <td class="col-2"><?php echo $row['title_school'] ?></td>
                                    <td class="col-1"><?php echo $row['title_subject'] ?></td>
                                    <td class="col-1"><?php echo $row['date'] ?></td>
                                    <td style="margin: 30px;padding: 10px;" class="col-2">
                                        <button type="button" value="<?php echo $row['id'] ?>" class="btn btn-outline-danger delete" data-bs-toggle="modal" data-bs-target="#delete">
                                            Delete
                                        </button>
                                        <button type="button" value="<?php echo $row['id'] ?>" class="btn btn-outline-secondary update" data-bs-toggle="modal" data-bs-target="#fullscreeexampleModal">
                                            Update
                                        </button>
                                    </td>
                                </tr>
                            <?php $i++;
                            } ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="10">
                                    <p style="display: flex;justify-content: center;align-items: center; margin-top:15px">No Record Found</p>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php include "../php_crud/delete.php" ?>
    <?php include "../php_crud/update.php" ?>
</body>

</html>