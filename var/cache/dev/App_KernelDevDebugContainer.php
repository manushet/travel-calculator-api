<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVMLpFLw\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVMLpFLw/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVMLpFLw.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVMLpFLw\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerVMLpFLw\App_KernelDevDebugContainer([
    'container.build_hash' => 'VMLpFLw',
    'container.build_id' => '9b8eb7c2',
    'container.build_time' => 1713962944,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVMLpFLw');
