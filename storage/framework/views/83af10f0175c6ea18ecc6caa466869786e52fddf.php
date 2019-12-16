<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
    <div class="col-3 p-5">
        <img src="https://scontent-vie1-1.cdninstagram.com/vp/0a001998c570783064d8bf203c6fd686/5E52A538/t51.2885-19/s150x150/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=scontent-vie1-1.cdninstagram.com" class="rounded-circle">
    </div>
    <div class="col-9 pt-5">
        <div class="d-flex justify-content-between align-items-baseline">
        <h1><?php echo e($user->username); ?></h1>
        <a href="#">Add a new post</a>
        </div>
        <div class="d-flex">
            <div class="pr-5"><strong>232</strong> posts</div>
            <div class="pr-5"><strong>32.5k</strong> followers</div>
            <div class="pr-5"><strong>233</strong> following</div>
        </div>
    <div class="pt-4 font-weight-bold"><?php echo e($user->profile->title); ?></div>
    <div><?php echo e($user->profile->description); ?></div>
    <div><a href="#"><?php echo e($user->profile->url); ?></a></div>
    </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img class="w-100" src="https://scontent-vie1-1.cdninstagram.com/vp/affe000d2bf29cff5fbf2d7772b2fa0b/5E612340/t51.2885-15/e35/c1.0.748.748a/s320x320/75379747_1984863518283661_4296065131383461825_n.jpg?_nc_ht=scontent-vie1-1.cdninstagram.com&_nc_cat=101" />
        </div>
        <div class="col-4">
            <img class="w-100" src="https://scontent-vie1-1.cdninstagram.com/vp/eaa050e6b5299831cfe8e6260587c62d/5E4DDB5A/t51.2885-15/e35/c95.0.559.559a/s480x480/75388569_559359151480556_2784072752921865307_n.jpg?_nc_ht=scontent-vie1-1.cdninstagram.com&_nc_cat=108" />
        </div>
        <div class="col-4">
            <img class="w-100" src="https://scontent-vie1-1.cdninstagram.com/vp/9ef850c0e71b39d9cd9e893c6aca0fa7/5E4E3346/t51.2885-15/e35/c2.0.745.745a/s480x480/73174649_2404377109881299_3305170173981020096_n.jpg?_nc_ht=scontent-vie1-1.cdninstagram.com&_nc_cat=111" />
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/igor/Desktop/freeCodeGram/resources/views/home.blade.php ENDPATH**/ ?>