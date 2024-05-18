<div class="modal fade" id="update" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="card">
                <div class="card-body">
                    <form action="edit.php" method="post">
                        <label for="">ID</label>
                        <input type="text" id="ids" name="ids">

                        <label for="">Name</label>
                        <input type="text" name="names" id="names">

                        <label for="">Sex</label>
                        <input type="text" required name="sexs" id="sexs">

                        <label for="">Email</label>
                        <input type="email" name="emails" id="emails">
                        <button type="submit"> Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $(document).on('click', '.update', function() {
            var id = $(this).val();
            console.log(id);
            $.ajax({
                url: "get_id.php",
                data: {
                    id: id
                },
                type: "get",
                dataType: 'html',
                success: function(response) {
                    console.log('1111111111111');
                    var userData = JSON.parse(response);
                    const id = document.getElementById('id').value = userData[0].id;
                    $("#ids").val(userData[0].id);
                    $("#names").val(userData[0].name);
                    $("#sexs").val(userData[0].sex);
                    $("#emails").val(userData[0].email);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
    });
</script>