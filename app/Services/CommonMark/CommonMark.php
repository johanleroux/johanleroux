<?php

namespace App\Services\CommonMark;

use League\CommonMark\Block\Element\FencedCode;
use League\CommonMark\Block\Element\Heading;
use League\CommonMark\Block\Element\Paragraph;
use League\CommonMark\Block\Element\IndentedCode;
use League\CommonMark\CommonMarkConverter;
use League\CommonMark\Environment;
use Spatie\CommonMarkHighlighter\FencedCodeRenderer;
use Spatie\CommonMarkHighlighter\IndentedCodeRenderer;
use League\CommonMark\Block\Element\ListBlock;

class CommonMark
{
    public static function convertToHtml(string $markdown): string
    {
        $environment = Environment::createCommonMarkEnvironment()
            ->addBlockRenderer(FencedCode::class, new FencedCodeRenderer())
            ->addBlockRenderer(IndentedCode::class, new IndentedCodeRenderer())
            ->addBlockRenderer(Heading::class, new HeadingRenderer())
            ->addBlockRenderer(Paragraph::class, new ParagraphRenderer())
            ->addBlockRenderer(ListBlock::class, new ListBlockRenderer());

        $commonMarkConverter = new CommonMarkConverter([], $environment);

        return $commonMarkConverter->convertToHtml($markdown);
    }
}