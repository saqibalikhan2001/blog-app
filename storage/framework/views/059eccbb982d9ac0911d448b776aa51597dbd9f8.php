<?php $__env->startSection('content'); ?>
    <h1 class="text-center">Edit Article</h1>
    <form action="<?php echo e(route('article.update')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="articleId" value="<?php echo e($article->id); ?>">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" value="<?php echo e($article->title); ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Content</label>
            <textarea name="description" id="description" class="form-control"><?php echo e($article->content); ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saqib/sites/blog-app/resources/views/articles/edit.blade.php ENDPATH**/ ?>