<div class="container">
    <div class="row mt-4">
        <div class="col-md-6">
    
            <?= form_open('login') ?>
            <div class="form-group">
                <label for="">Email</label>
                <?= form_error('email'); ?>
                <input type="email" name="email" class="form-control" value="<?= set_value('email'); ?>" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <?= form_error('password'); ?>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <input type="submit" value="login" name="submit" class="btn btn-primary">
            <?= form_close(); ?>

        </div>
    </div>
</div>