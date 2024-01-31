<?php

namespace gm\humhub\modules\trending;

use Yii;
use yii\base\BaseObject;

/**
 * Class Events
 *
 * This class handles events related to trending topics in HumHub.
 */
class Events extends BaseObject
{
    /**
     * Handles the initialization of the dashboard sidebar.
     *
     * This method adds the trending widget to the dashboard sidebar.
     *
     * @param \yii\base\Event $event The event parameter.
     * @return void
     */
    public static function onDashboardSidebarInit($event): void
    {
        if (Yii::$app->user->isGuest) {
            return;
        }

        $event->sender->addWidget(widgets\Trending::class, [], []);
    }
}
