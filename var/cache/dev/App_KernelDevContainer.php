<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container0LmovZS\App_KernelDevContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container0LmovZS/App_KernelDevContainer.php') {
    touch(__DIR__.'/Container0LmovZS.legacy');

    return;
}

if (!\class_exists(App_KernelDevContainer::class, false)) {
    \class_alias(\Container0LmovZS\App_KernelDevContainer::class, App_KernelDevContainer::class, false);
}

return new \Container0LmovZS\App_KernelDevContainer([
    'container.build_hash' => '0LmovZS',
    'container.build_id' => 'f226a8e7',
    'container.build_time' => 1650187598,
], __DIR__.\DIRECTORY_SEPARATOR.'Container0LmovZS');
