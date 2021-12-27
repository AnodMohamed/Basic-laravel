

<?php $__env->startSection('content'); ?>

<strong> Edit the post</strong>
<form class="form"  action="<?php echo e(route('posts.update',['id'=>$posts->id])); ?>"  method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
  <label  for="title">Add title</label>
  <input type="text" class="form-control mb-2 mr-sm-2" name="title" id="title" placeholder=" title" value="<?php echo e($posts->title); ?>">
  <br></br>

  <label for="content">Add content</label>
  <textarea class="form-control" name="content" id="content" rows="3" placeholder="content"><?php echo e($posts->content); ?></textarea>
  <br></br>

  <label for="photo">Add photo </label>
  <input type="file" class="form-control-file" name="photo" id="photo">
  <br></br>

  <button type="submit" class="btn btn-primary mb-2">update</button>
</form>

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('backend.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\new_test_laravel\resources\views/backend/posts/edit.blade.php ENDPATH**/ ?>