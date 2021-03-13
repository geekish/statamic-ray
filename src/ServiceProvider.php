<?php

namespace Geekish\StatamicRay;

use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $modifiers = [
        Modifiers\RayModifier::class,
    ];

    protected $tags = [
        Tags\RayTag::class,
    ];
}
