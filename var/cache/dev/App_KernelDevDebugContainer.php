<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOoqVlZx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOoqVlZx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOoqVlZx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOoqVlZx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerOoqVlZx\App_KernelDevDebugContainer([
    'container.build_hash' => 'OoqVlZx',
    'container.build_id' => '40707fe0',
    'container.build_time' => 1659895146,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOoqVlZx');
