<?php

namespace Akeneo\PimEnterprise\ApiClient\tests\Api\ReferenceEntityRecord;

use Akeneo\PimEnterprise\ApiClient\Api\ReferenceEntityRecordApi;
use Akeneo\PimEnterprise\ApiClient\tests\Api\ApiTestCaseEnterprise;
use donatj\MockWebServer\RequestInfo;
use donatj\MockWebServer\Response;
use donatj\MockWebServer\ResponseStack;
use PHPUnit\Framework\Assert;

class UpsertReferenceEntityRecordIntegration extends ApiTestCaseEnterprise
{
    public function test_upsert_reference_entity_record()
    {
        $this->server->setResponseOfPath(
            '/'. sprintf(ReferenceEntityRecordApi::REFERENCE_ENTITY_RECORD_URI, 'designer', 'starck'),
            new ResponseStack(
                new Response('', [], 204)
            )
        );

        $recordData = [
            'code' => 'starck',
            'values' => [
                'label' => [
                    [
                        'channel' => null,
                        'locale'  => 'en_US',
                        'data'    => 'Philippe Starck'
                    ],
                ]
            ]
        ];

        $api = $this->createClient()->getReferenceEntityRecordApi();
        $response = $api->upsert('designer', 'starck', $recordData);

        Assert::assertSame($this->server->getLastRequest()->jsonSerialize()[RequestInfo::JSON_KEY_INPUT], json_encode($recordData));
        Assert::assertSame(204, $response);
    }
}
