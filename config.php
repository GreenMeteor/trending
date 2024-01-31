<?php

namespace gm\humhub\modules\trending;

use gm\humhub\modules\trending\Module;
use gm\humhub\modules\trending\Events;
use humhub\modules\dashboard\widgets\Sidebar;

return [
    'id' => 'trending',
    'class' => Module::class,
    'namespace' => 'gm\humhub\modules\trending',
    'events' => [
        ['class' => Sidebar::class, 'event' => Sidebar::EVENT_INIT, 'callback' => [Events::class, 'onDashboardSidebarInit']],
    ]
];
