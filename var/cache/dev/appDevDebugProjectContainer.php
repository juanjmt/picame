<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNt7ogu1\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNt7ogu1/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerNt7ogu1.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerNt7ogu1\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerNt7ogu1\appDevDebugProjectContainer([
    'container.build_hash' => 'Nt7ogu1',
    'container.build_id' => '265a5ab7',
    'container.build_time' => 1555526032,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNt7ogu1');
