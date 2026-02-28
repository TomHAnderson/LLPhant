<?php

declare(strict_types=1);

namespace LLPhant\Audio;

enum OpenAIAudioModel: string
{
    case Whisper1 = 'whisper-1';
    case Gpt4o = 'gpt-4o-transcribe';
}
