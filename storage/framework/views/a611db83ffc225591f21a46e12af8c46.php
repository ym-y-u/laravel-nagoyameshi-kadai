

<?php $__env->startSection('content'); ?>
    <div class="col container">
        <div class="row justify-content-center">
            <div class="col-xxl-9 col-xl-10 col-lg-11">
                <h1 class="mb-4 text-center">会員一覧</h1>

                <div class="d-flex justify-content-between align-items-end">
                    <form method="GET" action="<?php echo e(route('admin.users.index')); ?>" class="nagoyameshi-admin-search-box mb-3">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="氏名・フリガナで検索" name="keyword" value="<?php echo e($keyword); ?>">
                            <button type="submit" class="btn text-white shadow-sm nagoyameshi-btn">検索</button>
                        </div>
                    </form>
                </div>

                <div>
                    <p class="mb-0">計<?php echo e(number_format($total)); ?>件</p>
                </div>


                <table class="table table-hover nagoyameshi-users-table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">氏名</th>
                            <th scope="col">フリガナ</th>
                            <th scope="col">メールアドレス</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($user->id); ?></td>
                                <td><?php echo e($user->name); ?></td>
                                <td><?php echo e($user->kana); ?></td>
                                <td><?php echo e($user->email); ?></td>
                                <td><a href="<?php echo e(route('admin.users.show', $user)); ?>">詳細</a></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>

                <div class="d-flex justify-content-center">
                    <?php echo e($users->appends(request()->query())->links()); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-nagoyameshi\resources\views/admin/users/index.blade.php ENDPATH**/ ?>