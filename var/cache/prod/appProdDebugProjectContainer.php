<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container6d3prrb\appProdDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container6d3prrb/appProdDebugProjectContainer.php') {
    touch(__DIR__.'/Container6d3prrb.legacy');

    return;
}

if (!\class_exists(appProdDebugProjectContainer::class, false)) {
    \class_alias(\Container6d3prrb\appProdDebugProjectContainer::class, appProdDebugProjectContainer::class, false);
}

return new \Container6d3prrb\appProdDebugProjectContainer([
    'container.build_hash' => '6d3prrb',
    'container.build_id' => '65f5b7ec',
    'container.build_time' => 1635681907,
], __DIR__.\DIRECTORY_SEPARATOR.'Container6d3prrb');
