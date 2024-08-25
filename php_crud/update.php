<div class="modal fade" id="fullscreeexampleModal" tabindex="-1" aria-labelledby="fullscreeexampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form action="../php_crud/function/function.php" method="post">
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
                            <input type="hidden" class="form-control" name="student_id" id="student_id">
                            <input type="text" class="form-control" name="name" placeholder="Name" id="name">
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6 margin-bottom font-size-20">
                            <label for="school">សាលា</label>
                            <select name="school" id="school" class="form-control form-control-sm">
                                <option value="">ជ្រើសរើសសាលា</option>
                                <?php foreach ($school as $data) { ?>
                                    <option value="<?php echo $data['id'] ?>"><?php echo $data['title_school'] ?></option>
                                <?php } ?>
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
                            <select name="subject" id="subject" class="form-control form-control-sm">
                            <option value="">ជ្រើសរើសមុខវិជ្ជា</option>
                            <?php foreach ($subject as $data) { ?>
                                <option value="<?php echo $data['id'] ?>"><?php echo $data['title_subject'] ?></option>
                            <?php } ?>
                        </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-light" data-bs-dismiss="modal">Close</a>
                    <button type="submit" name="action" value="update" class="btn btn-primary upload">
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
                url: "../php_crud/function/function.php",
                data: {
                    action: 'getdata',
                    id: id
                },
                method: "post",
                dataType: 'json',
                success: function(response) {
                    console.log('11111111');
                    console.log(response);
                    $("#student_id").val(response.data.id);
                    $("#name").val(response.data.name);
                    $("#sex").val(response.data.sex);
                    $("#email").val(response.data.email);
                    $("#date").val(response.data.date);
                    school(response.data.school);
                    subject(response.data.subject);
                    function school(value) {
                        var selectElement = document.getElementById('school');
                        for (var i = 0; i < selectElement.options.length; i++) {
                            if (selectElement.options[i].value === value) {
                                selectElement.options[i].selected = true;
                                break;
                            }
                        }
                    }
                    function subject(value) {
                        var selectElement = document.getElementById('subject');
                        for (var i = 0; i < selectElement.options.length; i++) {
                            if (selectElement.options[i].value === value) {
                                selectElement.options[i].selected = true;
                                break;
                            }
                        }
                    }
                },
            });
        });
    });
</script>
<script>