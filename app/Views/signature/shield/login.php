<?php $this->extend('signature/master'); ?>

<?php $this->section('content') ?>

    <div class="flex justify-center items-center h-full sm:h-[75vh]">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">

            <div class="card-body">
                <h5 class="card-title mb-5"><?php echo lang('Auth.login') ?></h5>

                <?php if (session('error') !== null) : ?>
                    <div class="alert alert-danger" role="alert"><?php echo  session('error') ?></div>
                <?php elseif (session('errors') !== null) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?php if (is_array(session('errors'))) : ?>
                            <?php foreach (session('errors') as $error) : ?>
                                <?php echo  $error ?>
                                <br>
                            <?php endforeach ?>
                        <?php else : ?>
                            <?php echo  session('errors') ?>
                        <?php endif ?>
                    </div>
                <?php endif ?>

                <?php if (session('message') !== null) : ?>
                <div class="alert alert-success" role="alert"><?php echo  session('message') ?></div>
                <?php endif ?>

                <form action="<?php echo url_to('login') ?>" method="post">
                    <?php echo csrf_field() ?>

                    <!-- Email -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="username">
                            <?php echo lang('Auth.email');?>
                        </label>
                        <input type="email" class="shadow border-blue-600 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" inputmode="email" autocomplete="email" placeholder="<?php echo lang('Auth.email');?>" value="<?php echo old('email') ?>" required />
                    </div>

                    <!-- Password -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="password">
                            <?php echo lang('Auth.password');?>
                        </label>
                        <input type="password" class="shadow border-blue-600 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="password" inputmode="text" autocomplete="current-password" placeholder="<?php echo lang('Auth.password');?>" required />
                    </div>

                    <!-- Remember me -->
                    <?php if (setting('Auth.sessionConfig')['allowRemembering']): ?>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')): ?> checked<?php endif ?>>
                                <?php echo  lang('Auth.rememberMe') ?>
                            </label>
                        </div>
                    <?php endif; ?>

                    <div class="d-grid col-12 col-md-8 mx-auto m-3">
                        <button type="submit" class="group inline-flex items-center justify-center rounded-full py-2 px-4 text-base font-semibold focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 bg-blue-600 text-white hover:text-slate-100 hover:bg-blue-500 active:bg-blue-800 active:text-blue-100 focus-visible:outline-blue-600"><?php echo lang('Auth.login') ?></button>
                    </div>

                    <?php if (setting('Auth.allowMagicLinkLogins')) : ?>
                        <p class="text-center"><?php echo lang('Auth.forgotPassword') ?> <a class="text-blue-600 text-base font-semibold" href="<?php echo  url_to('magic-link') ?>"><?php echo  lang('Auth.useMagicLink') ?></a></p>
                    <?php endif ?>

                    <?php if (setting('Auth.allowRegistration')) : ?>
                        <p class="text-center"><?php echo lang('Auth.needAccount') ?> <a class="text-blue-600 text-base font-semibold" href="<?php echo  url_to('register') ?>"><?php echo  lang('Auth.register') ?></a></p>
                    <?php endif ?>

                </form>
            </div>


        </div>
    </div>

<?php $this->endSection() ?>