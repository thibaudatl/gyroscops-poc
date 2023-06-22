<?php

declare(strict_types=1);

namespace Akeneo\PimEnterprise\ApiClient\tests\Api\ReferenceEntityRecord;

use Akeneo\PimEnterprise\ApiClient\Api\ReferenceEntityRecordApi;
use Akeneo\PimEnterprise\ApiClient\tests\Api\ApiTestCaseEnterprise;
use donatj\MockWebServer\RequestInfo;
use donatj\MockWebServer\Response;
use donatj\MockWebServer\ResponseStack;
use PHPUnit\Framework\Assert;

class GetReferenceEntityRecordIntegration extends ApiTestCaseEnterprise
{
    public function test_get_reference_entity_record()
    {
        $this->server->setResponseOfPath(
            '/'. sprintf(ReferenceEntityRecordApi::REFERENCE_ENTITY_RECORD_URI, 'designer', 'starck'),
            new ResponseStack(
                new Response($this->getStarckRecord(), [], 200)
            )
        );

        $api = $this->createClient()->getReferenceEntityRecordApi();
        $product = $api->get('designer', 'starck');

        Assert::assertSame($this->server->getLastRequest()->jsonSerialize()[RequestInfo::JSON_KEY_METHOD], 'GET');
        Assert::assertEquals($product, json_decode($this->getStarckRecord(), true));
    }

    /**
     * @expectedException \Akeneo\Pim\ApiClient\Exception\NotFoundHttpException
     * @expectedExceptionMessage Record "foo" does not exist for the reference entity "designer".
     */
    public function test_get_unknow_product()
    {
        $this->server->setResponseOfPath(
            '/'. sprintf(ReferenceEntityRecordApi::REFERENCE_ENTITY_RECORD_URI, 'designer', 'foo'),
            new ResponseStack(
                new Response('{"code": 404, "message":"Record \"foo\" does not exist for the reference entity \"designer\"."}', [], 404)
            )
        );

        $api = $this->createClient()->getReferenceEntityRecordApi();
        $api->get('designer', 'foo');
    }

    private function getStarckRecord(): string
    {
        return <<<JSON
            {
              "code": "starck",
              "values": {
                "label": [
                  {
                    "locale": "en_US",
                    "channel": null,
                    "data": "Philippe Starck"
                  }
                ]
              }
            }
JSON;
    }
}
