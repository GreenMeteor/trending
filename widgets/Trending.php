<?php

namespace humhub\modules\trending\widgets;

use humhub\modules\topic\models\Topic;
use humhub\components\Widget;
use yii\db\ActiveRecord;
use yii\db\Query;

/**
 * Widget for displaying trending topics.
 *
 * This widget retrieves the most used topics and renders them.
 *
 * @property Topic[] $topics The trending topics.
 */
class Trending extends Widget
{
    /**
     * Runs the widget.
     *
     * @return string The rendered result of the widget.
     */
    public function run(): string
    {
        // Query most used topics
        $trending = Topic::find()
            ->leftJoin('content_tag_relation', 'content_tag_relation.tag_id = content_tag.id')
            ->leftJoin('content', 'content.id = content_tag_relation.content_id')
            ->select(['content_tag.*', 'COUNT(content_tag_relation.tag_id) as tag_count'])
            ->groupBy('content_tag.id')
            ->orderBy(['tag_count' => SORT_DESC])
            ->limit(100)
            ->all();

        if (!$trendingTopics) {
            return '';

        }

        return $this->render('trending', ['topics' => $trending]);
    }

    /**
     * Define topics property with type hinting.
     *
     * @var Topic[]
     */
    protected ?array $topics = null;
}
