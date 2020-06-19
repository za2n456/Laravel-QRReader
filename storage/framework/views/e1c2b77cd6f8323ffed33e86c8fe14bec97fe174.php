<nav class="navbar navbar-expand-md navbar-dark bg-secondary">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
            <?php echo config('app.name', trans('titles.app')); ?>

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span class="sr-only"><?php echo trans('titles.toggleNav'); ?></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <ul class="navbar-nav mr-auto">
                <?php if (Auth::check() && Auth::user()->hasRole('admin')): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo trans('titles.adminDropdownNav'); ?>

                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item <?php echo e((Request::is('roles') || Request::is('permissions')) ? 'active' : null); ?>" href="<?php echo e(route('laravelroles::roles.index')); ?>">
                                <?php echo trans('titles.laravelroles'); ?>

                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item <?php echo e(Request::is('manage/users', 'manage/users/' . Auth::user()->id, 'users/' . Auth::user()->id . '/edit') ? 'active' : null); ?>" href="<?php echo e(route('users')); ?>">
                                <?php echo trans('titles.adminUserList'); ?>

                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item <?php echo e(Request::is('manage/users/create') ? 'active' : null); ?>" href="<?php echo e(route('users.create')); ?>">
                                <?php echo trans('titles.adminNewUser'); ?>

                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item <?php echo e(Request::is('manage/themes','themes/create') ? 'active' : null); ?>" href="<?php echo e(route('themes')); ?>">
                                <?php echo trans('titles.adminThemesList'); ?>

                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item <?php echo e(Request::is('manage/activity') ? 'active' : null); ?>" href="<?php echo e(route('activity')); ?>">
                                <?php echo trans('titles.adminActivity'); ?>

                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item <?php echo e(Request::is('phpinfo') ? 'active' : null); ?>" href="<?php echo e(url('/phpinfo')); ?>">
                                <?php echo trans('titles.adminPHP'); ?>

                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item <?php echo e(Request::is('manage/routes') ? 'active' : null); ?>" href="<?php echo e(route('routes')); ?>">
                                <?php echo trans('titles.adminRoutes'); ?>

                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item <?php echo e(Request::is('manage/active-users') ? 'active' : null); ?>" href="<?php echo e(route('active-users')); ?>">
                                <?php echo trans('titles.activeUsers'); ?>

                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item <?php echo e(Request::is('manage/blocker') ? 'active' : null); ?>" href="<?php echo e(route('laravelblocker::blocker.index')); ?>">
                                <?php echo trans('titles.laravelBlocker'); ?>

                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo trans('Packages'); ?>

                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item <?php echo e(Request::is('manage/plans') ? 'active' : null); ?>" href="<?php echo e(route('plans')); ?>">
                                <?php echo trans('All Packages'); ?>

                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item <?php echo e(Request::is('manage/plans/create') ? 'active' : null); ?>" href="<?php echo e(route('plans.create')); ?>">
                                <?php echo trans('Create New Package'); ?>

                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo trans('Memberships'); ?>

                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item <?php echo e(Request::is('manage/memberships') ? 'active' : null); ?>" href="<?php echo e(route('memberships')); ?>">
                                <?php echo trans('All Memberships'); ?>

                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item <?php echo e(Request::is('manage/memberships/create') ? 'active' : null); ?>" href="<?php echo e(route('memberships.create')); ?>">
                                <?php echo trans('Create New Membership'); ?>

                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo trans('Invoices'); ?>

                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item <?php echo e(Request::is('manage/invoices') ? 'active' : null); ?>" href="<?php echo e(route('invoices')); ?>">
                                <?php echo trans('All Invoices'); ?>

                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item <?php echo e(Request::is('manage/invoices/create') ? 'active' : null); ?>" href="<?php echo e(route('invoices.create')); ?>">
                                <?php echo trans('Create New Invoice'); ?>

                            </a>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if (Auth::check() && Auth::user()->hasRole('manager')): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo trans('Pasien'); ?>

                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item <?php echo e(Request::is('manage/pasien') ? 'active' : null); ?>" href="<?php echo e(route('pasien')); ?>">
                                <?php echo trans('Semua Pasien'); ?>

                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item <?php echo e(Request::is('manage/pasien/create') ? 'active' : null); ?>" href="<?php echo e(route('pasien.create')); ?>">
                                <?php echo trans('Input Pasien'); ?>

                            </a>
                        </div>
                    </li>
                <?php endif; ?>
            </ul>
            
            <ul class="navbar-nav ml-auto">
                
                <?php if(auth()->guard()->guest()): ?>
                    <li><a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(trans('titles.login')); ?></a></li>
                    <li><a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(trans('titles.register')); ?></a></li>
                <?php else: ?>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <?php if((Auth::User()->profile) && Auth::user()->profile->avatar_status == 1): ?>
                                <img src="<?php echo e(Auth::user()->profile->avatar); ?>" alt="<?php echo e(Auth::user()->name); ?>" class="user-avatar-nav">
                            <?php else: ?>
                                <div class="user-avatar-nav"></div>
                            <?php endif; ?>
                            <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item <?php echo e(Request::is('profile/'.Auth::user()->name, 'profile/'.Auth::user()->name . '/edit') ? 'active' : null); ?>" href="<?php echo e(route('profile', ['profile' => Auth::user()->name])); ?>">
                                <?php echo trans('titles.profile'); ?>

                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <?php echo e(__('Logout')); ?>

                            </a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
                            </form>
                        </div>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH /home/zazan/Public/laravel/resources/views/partials/nav.blade.php ENDPATH**/ ?>