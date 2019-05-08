
<?php $__env->startSection('content'); ?>
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data project</h3>
            </div>
            <!-- /.box-header -->
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
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Judul</th>
                  <th>Deskripsi</th>
                  <th>Aksi</th>
                
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $projek; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $projek): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($projek->id); ?></td>
                    <td><?php echo e($projek->nama); ?></td>
                    <td><?php echo e($projek->deskripsi); ?></td>
                    <td>
                        <form action="<?php echo e(route('project.destroy',$projek->id)); ?>" method="POST">
        
                            <a class="btn btn-info" href="<?php echo e(route('project.show',$projek->id)); ?>">Show</a>
            
                            <a class="btn btn-primary" href="<?php echo e(route('project.edit',$projek->id)); ?>">Edit</a>
        
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