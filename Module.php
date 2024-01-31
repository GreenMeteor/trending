<?php

namespace gm\humhub\modules\trending;

use humhub\components\Module as BaseModule;

/**
 * Class Module
 *
 * This class represents the trending module in HumHub.
 *
 * @package gm\humhub\modules\trending
 */
class Module extends BaseModule
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Trending';
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription(): string
    {
        return 'Provides functionality for displaying trending topics.';
    }
}
