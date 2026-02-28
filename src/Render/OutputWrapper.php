<?php

declare(strict_types=1);

namespace LLPhant\Render;

class OutputWrapper
{
    public function __construct(public mixed $content, public string $type)
    {
    }
}
