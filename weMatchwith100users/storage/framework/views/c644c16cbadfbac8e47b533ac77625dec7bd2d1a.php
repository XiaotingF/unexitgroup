<?php echo $__env->make('layouts.rnav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('content'); ?>

<div id= "one">
	
    <div class="row">
        <div class="col-lg-7">
    <div class="landing-text">
    
        <h1>WeMatch</h1>
        <h3>Melbourne's no.24 matchmaking site</h3>
        
    </div>
    </div>
    
    
<?php $__env->startSection('footer'); ?>


<script src="/js/file.js"></script>


<?php $__env->stopSection(); ?>
 
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>