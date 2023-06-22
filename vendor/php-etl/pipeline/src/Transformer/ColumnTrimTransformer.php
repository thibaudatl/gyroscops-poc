<?php

declare(strict_types=1);

namespace Kiboko\Component\Pipeline\Transformer;

use Kiboko\Component\Bucket\AcceptanceResultBucket;
use Kiboko\Component\Bucket\EmptyResultBucket;
use Kiboko\Contract\Pipeline\TransformerInterface;

/**
 * @template Type
 *
 * @template-implements TransformerInterface<array>
 */
class ColumnTrimTransformer implements TransformerInterface
{
    /** @param list<string> $columnsToTrim */
    public function __construct(
        private readonly array $columnsToTrim
    ) {
    }

    /** @return \Generator<mixed, AcceptanceResultBucket<Type>|EmptyResultBucket, Type|null, void> */
    public function transform(): \Generator
    {
        $line = yield new EmptyResultBucket();
        while (true) {
            if (null === $line) {
                $line = yield new EmptyResultBucket();
                continue;
            }
            foreach ($this->columnsToTrim as $column) {
                if (!isset($line[$column])) {
                    continue;
                }

                $line[$column] = trim((string) $line[$column]);
            }
            $line = yield new AcceptanceResultBucket($line);
        }
    }
}
