<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFb07JoM\App_KernelProdDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFb07JoM/App_KernelProdDebugContainer.php') {
    touch(__DIR__.'/ContainerFb07JoM.legacy');

    return;
}

if (!\class_exists(App_KernelProdDebugContainer::class, false)) {
    \class_alias(\ContainerFb07JoM\App_KernelProdDebugContainer::class, App_KernelProdDebugContainer::class, false);
}

return new \ContainerFb07JoM\App_KernelProdDebugContainer([
    'container.build_hash' => 'Fb07JoM',
    'container.build_id' => 'b9a5ab2d',
    'container.build_time' => 1650189661,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFb07JoM');
