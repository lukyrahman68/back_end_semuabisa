
<?php $__env->startSection('content'); ?>
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data testimoni</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                <th>Nama</th>
                  <th>Testimoni</th>
                  <th>Aksi</th>
                
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $testimoni; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimoni): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($testimoni->nama); ?></td>
                    <td><?php echo e($testimoni->testimoni); ?></td>
                    <td>
                        <form action="<?php echo e(route('testimoni.destroy',$testimoni->id)); ?>" method="POST">
        
                            <a class="btn btn-info" href="<?php echo e(route('testimoni.show',$testimoni->id)); ?>">Show</a>
            
                            <a class="btn btn-primary" href="<?php echo e(route('testimoni.edit',$testimoni->id)); ?>">Edit</a>
        
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
            
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          </div>
          </div>
          
          <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app_backend', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>