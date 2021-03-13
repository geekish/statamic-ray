<?php

namespace Geekish\StatamicRay\Tags;

use Statamic\Tags\Tags;

class RayTag extends Tags
{
    protected static $handle = 'ray';

    /**
     * The {{ ray }} tag.
     *
     * @return string|array
     */
    public function index()
    {
        ray($this->context->except(['__env', 'app'])->all());
    }

    /**
     * The {{ ray:* }} tag.
     *
     * @return string|array
     */
    public function wildcard($var)
    {
        ray($this->context->value($var));
    }
}
