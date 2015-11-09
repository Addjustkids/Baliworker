<!-- START MODAL -->
<div class="modal fade" id="modal_login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div id="modal_content" class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Login Disini</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="username" class="control-label">Username:</label>
                        <input type="text" class="form-control" id="username">
                    </div>
                    <div class="form-group">
                        <label for="password" class="control-label">Password:</label>
                        <input type="password" class="form-control" id="password">
                    </div>
                    <a id="lupa_password" href="#">Lupa Password?</a>
                </form>
            </div>
            <div class="modal-footer">
                <img class="loading" src="<?php echo base_url('assets/images/loading/loading.gif');?>" alt="">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button id="login_button" type="button" class="btn btn-primary">Login</button>
            </div>
        </div>
    </div>
</div>
<!-- END OF MODAL -->