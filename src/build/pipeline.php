<?php
return static function (\Kiboko\Component\Runtime\Pipeline\PipelineRuntimeInterface $runtime) {
    $runtime->extract(new class((new \Akeneo\Pim\ApiClient\AkeneoPimClientBuilder(getenv("AKENEO_URL")))->buildAuthenticatedByPassword(getenv("AKENEO_CLIENT_ID"), getenv("AKENEO_CLIENT_SECRET"), getenv("AKENEO_USERNAME"), getenv("AKENEO_PASSWORD")), new \Psr\Log\NullLogger()) implements \Kiboko\Contract\Pipeline\ExtractorInterface
    {
        public function __construct(public \Akeneo\Pim\ApiClient\AkeneoPimClientInterface $client, public \Psr\Log\LoggerInterface $logger)
        {
        }
        public function extract() : iterable
        {
            try {
                foreach ($this->client->getAttributeGroupApi()->all(queryParameters: ['search' => (new \Akeneo\Pim\ApiClient\Search\SearchBuilder())->getFilters()]) as $item) {
                    (yield new \Kiboko\Component\Bucket\AcceptanceResultBucket($item));
                }
            } catch (\Throwable $exception) {
                $this->logger->critical($exception->getMessage(), ['exception' => $exception]);
            }
        }
    }, new \Kiboko\Contract\Pipeline\NullRejection(), new \Kiboko\Contract\Pipeline\NullState())->transform(new class(new class implements \Kiboko\Contract\Mapping\CompiledMapperInterface
    {
        public function __invoke($input, $output = null)
        {
            $output = (function ($input) {
                $output = [];
                if (!isset($input['code'])) {
                    throw new \RuntimeException('Could not evaluate path [code]');
                }
                $output['code'] = $input['code'];
                if (!isset($input['labels'])) {
                    throw new \RuntimeException('Could not evaluate path [labels]');
                }
                $output['label'] = $input['labels'];
                if (!isset($input['sort_order'])) {
                    throw new \RuntimeException('Could not evaluate path [sort_order]');
                }
                $output['sort_order'] = $input['sort_order'];
                return $output;
            })($input);
            return $output;
        }
    }) implements \Kiboko\Contract\Pipeline\TransformerInterface
    {
        public function __construct(private \Kiboko\Contract\Mapping\CompiledMapperInterface $mapper)
        {
        }
        public function transform() : \Generator
        {
            $line = yield;
            do {
                $line = ($this->mapper)($line, $line);
            } while ($line = (yield new \Kiboko\Component\Bucket\AcceptanceResultBucket($line)));
            (yield new \Kiboko\Component\Bucket\AcceptanceResultBucket($line));
        }
    }, new \Kiboko\Contract\Pipeline\NullRejection(), new \Kiboko\Contract\Pipeline\NullState())->load(new \Kiboko\Component\Flow\JSON\Loader(file: new \SplFileObject('output_attributeGroups.json', 'w')), new \Kiboko\Contract\Pipeline\NullRejection(), new \Kiboko\Contract\Pipeline\NullState());
};