<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTfuoba1\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTfuoba1/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerTfuoba1.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerTfuoba1\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerTfuoba1\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Tfuoba1',
    'container.build_id' => '0fe67d4d',
    'container.build_time' => 1531142386,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerTfuoba1');
