<?php

declare(strict_types=1);

namespace LLPhant\Embeddings\DataReader;

use LLPhant\Embeddings\Document;

interface DataReader
{
    /**
     * @return Document[]
     */
    public function getDocuments(): array;
}
