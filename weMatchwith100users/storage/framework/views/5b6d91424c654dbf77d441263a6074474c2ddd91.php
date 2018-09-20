<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">WeMatch</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                  


<div class="col-lg-3">
     <div id = "mini_profile" >
<h2><?php echo e($user->name); ?>'s Profile</h2><br>
<img src="/uploads/avatars/<?php echo e($user->avatar); ?>" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">

</div>


</div>

<div class="row">
<div class="col-lg-6">
     <div class = "card" >

         <div class = "card-header" ><?php echo e($single1->name); ?></div>
         <div class = "card-text"><?php echo e('Similarity:'.$sim1.'%'); ?></div>
             <div class = "card-body" >
             <img src="/uploads/avatars/<?php echo e($single1->avatar); ?>" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                 </div>




</div>
</div>

<div class="col-lg-6">
     <div class = "card" >

         <div class = "card-header" ><?php echo e($single2->name); ?></div>
         <div class = "card-text"><?php echo e('Similarity:'.$sim2.'%'); ?></div>
             <div class = "card-body"><img src="../user3.png" width="280" height="200"> </div>



</div>
<br>


</div>
<div class="col-lg-6">
     <div class = "card" >

         <div class = "card-header" ><?php echo e($single3->name); ?></div>
         <div class = "card-text"><?php echo e('Similarity:'.$sim3.'%'); ?></div>
             <div class = "card-body"><img src="../user3.png" width="280" height="200"> </div>



</div>


</div>


<div class="col-lg-6">
     <div class = "card" >

         <div class = "card-header" ><?php echo e($single4->name); ?></div>
         <div class = "card-text"><?php echo e('Similarity:'.$sim4.'%'); ?></div>
             <div class = "card-body"><img src="../user3.png" width="280" height="200"> </div>



</div>
<br>


</div>
<div class="col-lg-6">
     <div class = "card" >

         <div class = "card-header" ><?php echo e($single5->name); ?></div>
         <div class = "card-text"><?php echo e('Similarity:'.$sim5.'%'); ?></div>
             <div class = "card-body"><img src="../user3.png" width="280" height="200"> </div>



</div>
<br>


</div>
<div class="col-lg-6">
     <div class = "card" >

         <div class = "card-header" ><?php echo e($single6->name); ?></div>
         <div class = "card-text"><?php echo e('Similarity:'.$sim6.'%'); ?></div>
             <div class = "card-body"><img src="../user3.png" width="280" height="200"> </div>



</div>
<br>


</div>
<div class="col-lg-6">
     <div class = "card" >

         <div class = "card-header" ><?php echo e($single7->name); ?></div>
         <div class = "card-text"><?php echo e('Similarity:'.$sim7.'%'); ?></div>
             <div class = "card-body"><img src="../user3.png" width="280" height="200"> </div>



</div>
<br>


</div>
<div class="col-lg-6">
     <div class = "card" >

         <div class = "card-header" ><?php echo e($single8->name); ?></div>
         <div class = "card-text"><?php echo e('Similarity:'.$sim8.'%'); ?></div>
             <div class = "card-body"><img src="../user3.png" width="280" height="200"> </div>



</div>
<br>


</div>
<div class="col-lg-6">
     <div class = "card" >

        <div class = "card-header" ><?php echo e($single9->name); ?></div>
         <div class = "card-text"><?php echo e('Similarity:'.$sim9.'%'); ?></div>
             <div class = "card-body"><img src="../user3.png" width="280" height="200"> </div>



</div>
<br>


</div>
<div class="col-lg-6">
     <div class = "card" >

         <div class = "card-header" ><?php echo e($single10->name); ?></div>
         <div class = "card-text"><?php echo e('Similarity:'.$sim10.'%'); ?></div>
             <div class = "card-body"><img src="../user3.png" width="280" height="200"> </div>



</div>
<br>


</div>






</div>





                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('profile.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>