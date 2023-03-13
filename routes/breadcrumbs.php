<?php

use App\Models\User;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Dashboard
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('dashboard'));
});

// Dashboard > Account
Breadcrumbs::for('profile.edit', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Profile', route('profile.edit'));
});
