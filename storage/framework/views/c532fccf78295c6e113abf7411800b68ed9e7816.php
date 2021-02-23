<?php $__env->startSection('content'); ?>

    <div class="center jumbotron bg-warning">
        <div class="text-center text-white">
            <h1>YouTubeまとめ × SNS</h1>
        </div>
    </div>

    <div class="text-center">
        <h3 class="login_title text-left d-inline-block mt-5">新規ユーザー登録</h3>
    </div>

    <div class="row mt-5 mb-5">
        <div class="col-sm-6 offset-sm-3">

            <?php echo Form::open(['route' => 'signup.post']); ?>

                <div class="form-group">
                    <?php echo Form::label('name', '名前'); ?>

                    <?php echo Form::text('name', old('name'), ['class' => 'form-control']); ?>

                </div>

                <div class="form-group">
                    <?php echo Form::label('email', 'メールアドレス'); ?>

                    <?php echo Form::email('email', old('email'), ['class' => 'form-control']); ?>

                </div>

                <div class="form-group">
                    <?php echo Form::label('password', 'パスワード'); ?>

                    <?php echo Form::password('password', ['class' => 'form-control']); ?>

                </div>

                <div class="form-group">
                    <?php echo Form::label('password_confirmation', 'パスワード確認'); ?>

                    <?php echo Form::password('password_confirmation', ['class' => 'form-control']); ?>

                </div>

                <?php echo Form::submit('新規登録', ['class' => 'btn btn-primary mt-2']); ?>

            <?php echo Form::close(); ?>


        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>