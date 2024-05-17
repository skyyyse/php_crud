<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'function/connection.php' ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="container text-center">
            <h1>ទម្រង់ព័ត៍មានរបស់សិស្សនិស្សិត</h1>
            <p>សូមបញ្ជូលនៅទិន្នន័យពិតប្រាកដ</p>
        </div>
        <form action="php/action.php" method="post">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6 margin-bottom font-size-20">
                        <label for="name">ឈ្មោះ</label>
                        <input type="text" class="form-control" name="name" placeholder="Name" id="name">
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6 margin-bottom font-size-20">
                        <label for="school">សាលា</label>
                        <select class="form-select" id="school" name="school">
                            <option selected value="all">ជ្រើសរើសសាលា</option>s
                        </select>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6 margin-bottom font-size-20">
                        <label for="email">អុីម៉ែល</label>
                        <input type="text" class="form-control" name="email" placeholder="Email" id="email">
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6 margin-bottom font-size-20">
                        <div class="row">
                            <label for="birthday">ថ្ងៃខែឆ្នាំកំណើត</label>
                        </div>
                        <input type="date" id="birthday" name="date">
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-2 margin-bottom font-size-20">
                        <label for="sex">ភេទ</label>
                        <select class="form-select" id="sex" name="sex">
                            <option selected value="all">ភេទ</option>
                            <option value="male">ប្រុស</option>
                            <option value="female">ស្រី</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4 margin-bottom font-size-20">
                        <label for="subject">មុខវិជ្ជា</label>
                        <select class="form-select" id="subject" name="subject">
                            <option selected value="all">ជ្រើសរើសមុខវិជ្ជា</option>
                        </select>
                    </div>
                    <button type="submit" name="store" style="margin-top: 10px;width: 99%;margin-left: 10px;margin-right: 10px;" ​ class="btn btn-primary">បញ្ចូលទិន្នន័យ</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        $.ajax({
            url: "php/action.php",
            type: "get",
            dataType: 'json',
            success: function(response) {
                var data = response.data;
                var selectElement = document.getElementById("school");
                data.forEach(function(item) {
                    var option = document.createElement("option");
                    option.value = item.id;
                    option.text = item.title_school;
                    selectElement.appendChild(option);
                });
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
        $.ajax({
            url: "php/subject.php",
            type: "get",
            dataType: 'json',
            success: function(response) {
                var data = response.data;
                var selectElement = document.getElementById("subject");
                data.forEach(function(item) {
                    var option = document.createElement("option");
                    option.value = item.id;
                    option.text = item.title_subject;
                    selectElement.appendChild(option);
                });
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    </script>
</body>

</html>