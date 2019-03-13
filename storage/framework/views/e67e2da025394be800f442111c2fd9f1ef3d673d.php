<?php $__env->startSection('content'); ?>
<!-- Page Container START -->
            <div class="page-container">
                <!-- Quick View START -->
                
                <!-- Side Panel END -->

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <h2 class="header-title">Danh sách</h2>
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                                    <a class="breadcrumb-item" href="admin/news/list">Tin tức</a>
                                    <span class="breadcrumb-item active">Danh sách</span>
                                </nav>
                            </div>
                        </div>  
                        <?php if(session('notifi')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('notifi')); ?>

                        </div>

                    <?php endif; ?>
                        <div class="card">
                            <div class="card-body">
                                <div class="table-overflow">
                                    <table id="dt-opt" class="table table-hover table-xl">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>Image</th>
                                                <!-- <th>Description</th> -->
                                                <th>Author</th>
                                                <th>Category</th>
                                                <!-- <th>Content</th> -->
                                               <th class="text-center">Tác vụ</th>
                                                
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($key -> id); ?></td>
                                                <td><?php echo e($key -> tittle); ?></td>
                                                 <td><img width="100px" height="100px" src="upload/news/<?php echo e($key->image); ?>"
                                                    <?php echo e($key -> image); ?></td>
                                                <!-- <td><?php echo e($key -> description); ?></td> -->
                                                <td><?php echo e($key -> author); ?></td>
                                                <td><?php echo e($key -> categories->name); ?></td>
                                                <!-- <td><?php echo $key -> content; ?></td> -->
                                                
                                                
                                                
                                                <td class="text-center font-size-18">
                                                    <a href="admin/news/edit/<?php echo e($key->id); ?>" class="text-gray m-r-15"><i class="ti-pencil"></i></a>
                                                    <a href="admin/news/delete/<?php echo e($key->id); ?>" class="text-gray"><i class="ti-trash"></i></a>
                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
            </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>