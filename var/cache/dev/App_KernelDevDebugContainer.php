<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container7vOZEvP\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container7vOZEvP/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container7vOZEvP.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container7vOZEvP\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container7vOZEvP\App_KernelDevDebugContainer([
    'container.build_hash' => '7vOZEvP',
    'container.build_id' => '54b79719',
    'container.build_time' => 1684777542,
], __DIR__.\DIRECTORY_SEPARATOR.'Container7vOZEvP');
