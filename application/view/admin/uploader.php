<?php if ($messages) : ?>
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <?= $messages ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

<p class="lead">This page will accept any "EPICUpload.txt" or "PlayerLinkUpload.txt" generated from <a href="http://www.bradleyjx.net" target="_blank">RTools</a>.</p>
<form enctype="multipart/form-data" action="<?= URL . "admin" ?>" method="POST">

    <div class="form-group">
        <label for="uploaded_file">File Upload</label>
        <input type="file" class="form-control-file" name="uploaded_file" id="uploaded_file">
    </div>

    <button type="submit" class="btn btn-primary">Upload</button>

</form>