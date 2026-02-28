<?php

declare(strict_types=1);

namespace LLPhant\Query\SemanticSearch;

use LLPhant\Embeddings\Document;

interface RetrievedDocumentsTransformer
{
    /**
     * @param  string[]  $questions
     * @param  array<int, Document>  $retrievedDocs
     * @return array<int, Document>
     */
    public function transformDocuments(array $questions, array $retrievedDocs): array;
}
