<div class="modal fade" id="modalDelUser">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete User</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="" id="id_del" value="" readonly>
                <span>Are you sure you want to delete this user?</span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" onclick="User.delete(this);">Delete</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
