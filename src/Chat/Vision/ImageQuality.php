<?php

declare(strict_types=1);

namespace LLPhant\Chat\Vision;

enum ImageQuality: string
{
    case Auto = 'auto';
    case Low = 'low';
    case High = 'high';
}
