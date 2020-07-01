
<div class="modal fade" id="modalUserForm">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">User</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form class="" action="" id="userForm" method="post">
                    <input type="hidden" name="edit_mode" id="edit_mode" value="0" readonly>
                    <input type="hidden" name="id" id="id" value="" readonly>
                    <div class="container">
                        <label for="first_name" class="">First Name (*)</label>
                        <input type="text" class="form-control" name="first_name" id="first_name" required>
                    </div>
                    <div class="container">
                        <label for="last_name" class="">Last Name (*)</label>
                        <input type="text" class="form-control" name="last_name" id="last_name" required>
                    </div>
                    <div class="container">
                        <label for="email" class="">Email (*)</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                </form>
                <div class="alert alert-danger alert-dismissible fade show" role="alert" style="display:none;">
                    <p>Error</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="User.save(this);">Save</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
