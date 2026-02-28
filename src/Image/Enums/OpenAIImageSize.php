<?php

declare(strict_types=1);

namespace LLPhant\Image\Enums;

enum OpenAIImageSize: string
{
    case size_1024x1024 = '1024x1024';
    case size_1792x1024 = '1792x1024';
    case size_1024x1792 = '1024x1792';
}
