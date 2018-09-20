<?php $__env->startSection('content'); ?>



    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2><?php echo e(Auth::user()->name); ?>'s Profile      </h2><h3>Gender:<?php echo e($user->gender); ?><h3>  
</div>

                <div class="card-body">

                <div class="row">

  

                    <img src="/uploads/avatars/<?php echo e($user->avatar); ?>" style="width:100px; height:100px; float:left; border-radius:50%; margin-right:25px;"></br>
<form enctype="multipart/form-data" action="/profile/<?php echo e($user->id); ?>" method="POST"><br>
    <input type="file" name="avatar"></br>
    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"></br>
    <input type="submit" class="pull-right btn btn-sm btn-primary"></br>
</form>    
<!--<div class="caption">-->
     
         
      </div>
    </div>
  </div>
</div>
              
</div>
</div>
</div>

</example-component>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('profile.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>