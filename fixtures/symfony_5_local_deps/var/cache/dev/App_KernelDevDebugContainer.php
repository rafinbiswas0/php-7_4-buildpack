<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container1Tovr2o\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container1Tovr2o/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container1Tovr2o.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container1Tovr2o\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container1Tovr2o\App_KernelDevDebugContainer([
    'container.build_hash' => '1Tovr2o',
    'container.build_id' => '37b629bf',
    'container.build_time' => 1649369016,
], __DIR__.\DIRECTORY_SEPARATOR.'Container1Tovr2o');
