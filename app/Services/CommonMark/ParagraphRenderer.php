<?php

namespace App\Services\CommonMark;

use League\CommonMark\Block\Element\AbstractBlock;
use League\CommonMark\Block\Renderer\ParagraphRenderer as BaseParagraphRenderer;
use League\CommonMark\ElementRendererInterface;
use League\CommonMark\HtmlElement;

class ParagraphRenderer extends BaseParagraphRenderer
{
    public function render(AbstractBlock $block, ElementRendererInterface $htmlRenderer, $inTightList = false)
    {
        $element = parent::render($block, $htmlRenderer, $inTightList);

        if(!is_string($element))
            $element->setAttribute('class', 'mb-4');

        return $element;
    }
}