

<?php $__env->startSection('content'); ?>
    <div class="container my-4 nagoyameshi-container">
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-4 col-md-5 col-sm-7">
                <h1 class="mb-4 text-center">ログイン</h1>

                <hr class="mb-4">

                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <form method="POST" action="<?php echo e(route('admin.login')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="form-group mb-3">
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" placeholder="メールアドレス" autofocus>
                    </div>

                    <div class="form-group mb-3">
                        <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password" placeholder="パスワード">
                    </div>

                    <div class="form-group mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                <label class="form-check-label" for="remember">
                                    次回から自動的にログインする
                                </label>
                            </div>
                    </div>

                    <div class="form-group d-flex justify-content-center mb-4">
                        <button type="submit" class="btn text-white shadow-sm w-100 nagoyameshi-btn">ログイン</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-nagoyameshi\resources\views/admin/auth/login.blade.php ENDPATH**/ ?>