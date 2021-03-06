<?php

namespace carlosjfernandes\Container;

abstract class Provider
{
    protected $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    abstract public function register();
}