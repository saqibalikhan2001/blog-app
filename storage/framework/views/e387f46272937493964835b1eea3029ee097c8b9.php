<?php $__env->startSection('content'); ?>
    <h1 class="text-center">Articles</h1>
    <a href="<?php echo e(route('articles.create')); ?>" class="btn btn-success mb-3">Create New Article</a>
    <ul class="list-group">
        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="list-group-item">
                <h5><?php echo e($article->title); ?></h5>
                <p><?php echo e($article->content); ?></p>
                <?php /*<a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Delete</button>
                </form>*/?>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saqib/sites/blog-app/resources/views/articles/index.blade.php ENDPATH**/ ?>