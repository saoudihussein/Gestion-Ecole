<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPe4gdat\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPe4gdat/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerPe4gdat.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerPe4gdat\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerPe4gdat\appProdProjectContainer([
    'container.build_hash' => 'Pe4gdat',
    'container.build_id' => '01283f81',
    'container.build_time' => 1608917277,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPe4gdat');
