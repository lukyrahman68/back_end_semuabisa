

<?php $__env->startSection('content'); ?>

    
    <div class="box box-info">
                <div class="box-header">
                  <i class="fa fa-envelope"></i>
    
                  <h3 class="box-title">Detail testimoni</h3>
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
                    <strong>Judul:</strong>
                        <?php echo e($testimoni->nama); ?>

                    </div>
                    <div class="form-group">
                    <strong>Kategori:</strong>
                        <?php echo e($testimoni->testimoni); ?>

                    </div>
                    <div class="box-footer clearfix">
              </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app_backend', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>