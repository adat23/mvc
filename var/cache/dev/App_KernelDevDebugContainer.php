<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOmydGJx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOmydGJx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOmydGJx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOmydGJx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerOmydGJx\App_KernelDevDebugContainer([
    'container.build_hash' => 'OmydGJx',
    'container.build_id' => '820ce9f4',
    'container.build_time' => 1714663617,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOmydGJx');
