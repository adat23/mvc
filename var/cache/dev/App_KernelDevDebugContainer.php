<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMxmuyx4\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMxmuyx4/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMxmuyx4.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMxmuyx4\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMxmuyx4\App_KernelDevDebugContainer([
    'container.build_hash' => 'Mxmuyx4',
    'container.build_id' => '0fbd61af',
    'container.build_time' => 1713197969,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMxmuyx4');
