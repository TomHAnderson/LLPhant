<?php

declare(strict_types=1);

namespace Tests\Unit\Chat;

use LLPhant\Image\OpenAIImage;
use LLPhant\OpenAIConfig;

it('no error when construct with no model', function () {
    $config = new OpenAIConfig();
    $config->apiKey = 'fakeapikey';
    $imageService = new OpenAIImage($config);
    expect(isset($imageService))->toBeTrue();
});
