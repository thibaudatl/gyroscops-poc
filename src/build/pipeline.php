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
                foreach ($this->client->getProductApi()->all(queryParameters: ['search' => (new \Akeneo\Pim\ApiClient\Search\SearchBuilder())->addFilter('family', 'IN', ['camcorders'])->getFilters()]) as $item) {
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
                if (!isset($input['identifier'])) {
                    throw new \RuntimeException('Could not evaluate path [identifier]');
                }
                $output['sku'] = $input['identifier'];
                if (!isset($input['family'])) {
                    throw new \RuntimeException('Could not evaluate path [family]');
                }
                $output['family'] = $input['family'];
                $output['values'] = (function ($input) {
                    $output = [];
                    $output['description'] = array_values($input["values"]["description"] ?? []);
                    $output['ProductName'] = array_values((function ($array) {
                        return [\reset($array)];
                    })($input["values"]["ProductName"] ?? []))[0]["data"] ?? null;
                    $output['brand'] = array_values((function ($array) {
                        return [\reset($array)];
                    })($input["values"]["brand"] ?? []))[0]["data"] ?? null;
                    return $output;
                })($input);
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
    }, new \Kiboko\Contract\Pipeline\NullRejection(), new \Kiboko\Contract\Pipeline\NullState())->load(new \Kiboko\Component\Flow\JSON\Loader(file: new \SplFileObject('output.json', 'w')), new \Kiboko\Contract\Pipeline\NullRejection(), new \Kiboko\Contract\Pipeline\NullState());
};