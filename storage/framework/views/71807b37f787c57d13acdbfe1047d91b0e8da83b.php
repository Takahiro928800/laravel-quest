<?php $__env->startSection('content'); ?>


    <div class="text-right">

        <?php echo e(Auth::user()->name); ?>


    </div>

        <h2 class="mt-5">動画を登録する</h2>

        <?php echo Form::open(['route'=>'movies.store']); ?>

            <div class="form-group mt-5">

                <?php echo Form::label('url','新規登録YouTube動画 "ID" を入力する',['class'=>'text-success']); ?>

                    <br>例）登録したいYouTube動画のURLが&thinsp;<span>https://www.youtube.com/watch?v=-bNMq1Nxn5o&thinsp;なら</span>
                    <div>&emsp;&emsp;"v="の直後にある&thinsp;"<span class="text-success">-bNMq1Nxn5o</span>"&thinsp;を入力</div>
                <?php echo Form::text('url',null,['class'=>'form-control']); ?>

                
                <?php echo Form::label('comment','登録動画へのコメント',['class'=> 'mt-3']); ?>

                <?php echo Form::text('comment',null,['class'=>'form-control']); ?>

                

                <?php echo Form::submit('新規登録する？',['class'=> 'button btn btn-primary mt-5 mb-5']); ?>


            </div>
        <?php echo Form::close(); ?>



        <h2 class="mt-5">あなたの登録済み動画</h2>

        <?php echo $__env->make('movies.movies', ['movies' => $movies], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>