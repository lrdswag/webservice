<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container5ATxelD\App_KernelTestDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container5ATxelD/App_KernelTestDebugContainer.php') {
    touch(__DIR__.'/Container5ATxelD.legacy');

    return;
}

if (!\class_exists(App_KernelTestDebugContainer::class, false)) {
    \class_alias(\Container5ATxelD\App_KernelTestDebugContainer::class, App_KernelTestDebugContainer::class, false);
}

return new \Container5ATxelD\App_KernelTestDebugContainer([
    'container.build_hash' => '5ATxelD',
    'container.build_id' => '9eb719be',
    'container.build_time' => 1603437434,
], __DIR__.\DIRECTORY_SEPARATOR.'Container5ATxelD');
