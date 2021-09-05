<div class="modal fade" id="new-file-modal" tabindex="-1" role="dialog" aria-labelledby="new-file-modalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New file</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="fileForm" enctype="multipart/form-data">
                    <div id="result"></div>
                    <input type="hidden" name="folder_id" id="nf-folder-id" placeholder="This has been handled">
                    <div class="form-group">
                        <label for="">File Title</label>
                        <input type="text" name="title" class="form-control" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="">File</label>
                        <input type="file" name="file" class="form-control" required="required" />
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>