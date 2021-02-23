<?php $__env->startSection('content'); ?>

    <div class="center jumbotron bg-warning">
        <div class="text-center text-white">
            <h1>YouTubeまとめ × SNS</h1>
        </div>
    </div>

    <div class="text-center">
        <h3 class="login_title text-left d-inline-block mt-5">ログイン</h3>
    </div>

    <div class="row mt-5 mb-5">
        <div class="col-sm-6 offset-sm-3">

            <?php echo Form::open(['route' => 'login.post']); ?>

                <div class="form-group">
                    <?php echo Form::label('email', 'メールアドレス'); ?>

                    <?php echo Form::email('email', old('email'), ['class' => 'form-control']); ?>

                </div>

                <div class="form-group">
                    <?php echo Form::label('password', 'パスワード'); ?>

                    <?php echo Form::password('password', ['class' => 'form-control']); ?>

                </div>

                <?php echo Form::submit('ログイン', ['class' => 'btn btn btn-primary mt-2']); ?>

            <?php echo Form::close(); ?>


            <p class="mt-3"><?php echo link_to_route('signup', '新規ユーザ登録する？'); ?></p>
            
        </div>
    </div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>