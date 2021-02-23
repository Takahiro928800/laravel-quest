<h2 class="mt-5 mb-5">users</h2>

<div class="movies row mt-5 text-center">

    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <?php
    
            $movie=$user->movies->last();
        
        ?>
    
        <?php if($loop->iteration % 3 == 1 && $loop->iteration != 1): ?>
    
            </div>
           
            <div class="row text-center mt-3">
        
        <?php endif; ?>
    
            <div class="col-lg-4 mb-5">

                <div class="movie text-left d-inline-block">

                    ＠<?php echo link_to_route('users.show',$user->name,['id'=>$user->id]); ?>


                    <div>
                        <?php if($movie): ?>
                            <iframe width="290" height="163.125" src="<?php echo e('https://www.youtube.com/embed/'.$movie->url); ?>?controls=1&loop=1&playlist=<?php echo e($movie->url); ?>" frameborder="0"></iframe>
                        <?php else: ?>
                            <iframe width="290" height="163.125" src="https://www.youtube.com/embed/" frameborder="0"></iframe>
                        <?php endif; ?>
                    </div>
                    
                    <p>
                        <?php if(isset($movie->comment)): ?>
                               <?php echo e($movie->comment); ?>

                        <?php endif; ?>
                    </p>
                    
                        <?php echo $__env->make('follow.follow_button',['user'=>$user], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                </div>
                
            </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>

<?php echo e($users->links('pagination::bootstrap-4')); ?>