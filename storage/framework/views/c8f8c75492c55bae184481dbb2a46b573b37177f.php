<h1><?php echo e($user->channel); ?></h1>
<h1 class="text-right"><?php echo e($user->name); ?></h1>

<?php echo $__env->make('follow.follow_button', ['user' => $user], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<ul class="nav nav-tabs nav-justified mt-5 mb-2">
        <li class="nav-item nav-link <?php echo e(Request::is('users/' . $user->id) ? 'active' : ''); ?>"><a href="<?php echo e(route('users.show',['id'=>$user->id])); ?>" class="">動 画<br><div class="badge badge-secondary"><?php echo e($count_movies); ?></div></a></li>
        <li class="nav-item nav-link <?php echo e(Request::is('users/*/followers') ? 'active' : ''); ?>"><a href="<?php echo e(route('followers',['id'=>$user->id])); ?>" class="">フォロワー<br><div class="badge badge-secondary"><?php echo e($count_followers); ?></div></a></li>
        <li class="nav-item nav-link <?php echo e(Request::is('users/*/followings') ? 'active' : ''); ?>"><a href="<?php echo e(route('followings',['id'=>$user->id])); ?>" class="">フォロー中<br><div class="badge badge-secondary"><?php echo e($count_followings); ?></div></a></li>
</ul>