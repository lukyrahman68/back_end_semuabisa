

<?php $__env->startSection('content'); ?>

    
    <div class="box box-info">
                <div class="box-header">
                  <i class="fa fa-envelope"></i>
    
                  <h3 class="box-title">Detail project</h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    
                  </div>
                  <!-- /. tools -->
                </div>
                <div class="box-body">
                <?php if(session('sukses')): ?>
                  <div class="alert alert-success">
                      <?php echo e(session('sukses')); ?>

                  </div>
              <?php endif; ?>

              <?php if(session('gagal')): ?>
                  <div class="alert alert-danger">
                      <?php echo e(session('gagal')); ?>

                  </div>
              <?php endif; ?>
                  
                    <div class="form-group">
                    Gambar<br>
                    <?php $__currentLoopData = $media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <img src="<?php echo e(asset('project')); ?>/<?php echo e($media->idkonten); ?>-<?php echo e($media->idmedia); ?>.<?php echo e($media->format); ?>" height="400" weight="400">
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <br>Link : <br>
                    <?php $__currentLoopData = $link; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($link->isi); ?><br>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <br>
                    <strong>Judul:</strong>
                        <?php echo e($projek->nama); ?>

                    </div>
                    <div class="form-group">
                    <strong>Kategori:</strong>
                        <?php echo e($projek->kategori); ?>

                    </div>
                    <div>
                    <strong>Deskripsi:</strong>
                        <?php echo e($projek->deskripsi); ?>   
                    </div>
                    <div class="box-footer clearfix">
              </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app_backend', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>