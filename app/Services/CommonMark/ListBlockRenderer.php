<?php

namespace App\Services\CommonMark;

use League\CommonMark\Block\Element\AbstractBlock;
use League\CommonMark\Block\Renderer\ListBlockRenderer as BaseListBlockRenderer;
use League\CommonMark\ElementRendererInterface;
use League\CommonMark\HtmlElement;

class ListBlockRenderer extends BaseListBlockRenderer
{
    public function render(AbstractBlock $block, ElementRendererInterface $htmlRenderer, $inTightList = false)
    {
        $element = parent::render($block, $htmlRenderer, $inTightList);

        $element->setAttribute('class', '-mt-4 mb-4');

        return $element;
    }
}