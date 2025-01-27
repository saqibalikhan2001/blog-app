<?php $__env->startSection('content'); ?>
    <h1 class="text-center">Posts</h1>
    <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-success mb-3">Create New Post</a>
    <ul class="list-group">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="list-group-item">
                <h5><?php echo e($post->title); ?></h5>
                <p><?php echo e($post->content); ?></p>
                <a href="<?php echo e(route('posts.edit', $post->id)); ?>" class="btn btn-warning">Edit</a>
                <form action="<?php echo e(route('posts.destroy', $post->id)); ?>" method="POST" style="display:inline-block;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button class="btn btn-danger">Delete</button>
                </form>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saqib/sites/blog-app/resources/views/posts/index.blade.php ENDPATH**/ ?>