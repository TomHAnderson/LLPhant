<?php

declare(strict_types=1);

namespace LLPhant\Chat\Enums;

enum ChatRole: string
{
    case System = 'system';
    case User = 'user';
    case Assistant = 'assistant';
    case Function = 'function';
    case Tool = 'tool';
}
