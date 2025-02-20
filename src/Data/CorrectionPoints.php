<?php

namespace Edutiek\LongEssayAssessmentService\Data;

class CorrectionPoints
{
    private string $key;
    private string $item_key;
    private string $corrector_key;
    private string $comment_key;
    private string $criterion_key;
    private float $points;

    public function __construct(
        string $key,
        string $item_key,
        string $corrector_key,
        string $comment_key,
        string $criterion_key,
        float $points
    ) {
        $this->key = $key;
        $this->item_key = $item_key;
        $this->corrector_key = $corrector_key;
        $this->comment_key = $comment_key;
        $this->criterion_key = $criterion_key;
        $this->points = $points;
    }

    /**
     * Get the unique key of the points
     * Starts with 'temp' for not yet saved points
     */
    public function getKey(): string
    {
        return $this->key;
    }
    
    /**
     *  Get the key of the correction item to which the points belong
     */
    public function getItemKey(): string
    {
        return $this->item_key;
    }


    /**
     * Get the key of the corrector to which the points belong
     */
    public function getCorrectorKey(): string
    {
        return $this->corrector_key;
    }

    /**
     * Get the key of the comment to which the points belong
     */
    public function getCommentKey(): string
    {
        return $this->comment_key;
    }

    /**
     * Get the key of the criterion for which the points are given
     */
    public function getCriterionKey(): string
    {
        return $this->criterion_key;
    }

    /**
     * Get the given points
     */
    public function getPoints(): float
    {
        return $this->points;
    }
}
