<div class="modal fade" id="fullscreeexampleModal" tabindex="-1" aria-labelledby="fullscreeexampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form action="php/action.php" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="fullscreeexampleModalLabel">
                        Update information
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6 margin-bottom font-size-20">
                            <label for="name">ឈ្មោះ</label>
                            <input type="hidden" class="form-control" name="student_id"id="student_id">
                            <input type="text" class="form-control" name="name" placeholder="Name" id="name">
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6 margin-bottom font-size-20">
                            <label for="school">សាលា</label>
                            <select class="form-select" id="school" name="school">
                                <option selected value="">ជ្រើសរើសសាលា</option>
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
                            <input type="date" id="date" name="date">
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
                                <option selected value="">ជ្រើសរើសមុខវិជ្ជា</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-light" data-bs-dismiss="modal">Close</a>
                    <button type="submit" name="update" class="btn btn-primary upload">
                        Save Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $(document).on('click', '.update', function() {
            var id = $(this).val();
            $.ajax({
                url: "php/action.php",
                data: {
                    id: id
                },
                type: "get",
                dataType: 'html',
                success: function(response) {
                    var userData = JSON.parse(response);
                    $("#student_id").val(userData[0].id);
                    $("#name").val(userData[0].name);
                    $("#sex").val(userData[0].sex);
                    $("#email").val(userData[0].email);
                    $("#date").val(userData[0].date);
                    selectOptionByValue_scholl(userData[0].school);
                    function selectOptionByValue_scholl(value) {
                        var selectElement = document.getElementById('school');

                        for (var i = 0; i < selectElement.options.length; i++) {
                            if (selectElement.options[i].value === value) {
                                selectElement.options[i].selected = true;
                                break;
                            }
                        }
                    }
                    selectOptionByValue_subject(userData[0].subject);
                    function selectOptionByValue_subject(value) {
                        var selectElement = document.getElementById('subject');

                        for (var i = 0; i < selectElement.options.length; i++) {
                            if (selectElement.options[i].value === value) {
                                selectElement.options[i].selected = true;
                                break;
                            }
                        }
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
    });
</script>
<script>
    $.ajax({
        url: "php/action.php",
        type: "POST",
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
</script>
<script>
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