<?php

namespace App\Services\CommonMark;

use League\CommonMark\Block\Element\AbstractBlock;
use League\CommonMark\Block\Renderer\HeadingRenderer as BaseHeadingRenderer;
use League\CommonMark\ElementRendererInterface;
use League\CommonMark\HtmlElement;

class HeadingRenderer extends BaseHeadingRenderer
{
    public function render(AbstractBlock $block, ElementRendererInterface $htmlRenderer, $inTightList = false)
    {
        $element = parent::render($block, $htmlRenderer, $inTightList);

        $id = str_slug($element->getContents());

        $element->setAttribute('id', $id);
        $element->setAttribute('class', 'text-2xl pt-4 mb-3 font-normal leading-none');
        $element->setContents(
            $element->getContents() .
            new HtmlElement('a', ['href' => "#{$id}", 'class' => $this->getFragmentLinkClass($element->getTagName())], ' #')
        );

        return $element;
    }

    protected function getFragmentLinkClass($elementName)
    {
        if ($elementName === 'h1') {
            return 'text-2xl mb-3 font-normal leading-none text-grey-darkest hover:text-blue no-underline';
        }

        if ($elementName === 'h2') {
            return 'text-xl mb-3 font-normal leading-none text-grey-darkest hover:text-blue no-underline';
        }

        return 'text-lg mb-3 font-normal leading-none text-grey-darkest hover:text-blue no-underline';
    }
}