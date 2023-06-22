<?php

declare(strict_types=1);

namespace Akeneo\PimEnterprise\ApiClient\tests\Api\Asset;

use Akeneo\PimEnterprise\ApiClient\Api\AssetManager\AssetApi;
use Akeneo\PimEnterprise\ApiClient\tests\Api\ApiTestCaseEnterprise;
use donatj\MockWebServer\RequestInfo;
use donatj\MockWebServer\Response;
use donatj\MockWebServer\ResponseStack;
use PHPUnit\Framework\Assert;

class UpsertAssetIntegration extends ApiTestCaseEnterprise
{
    public function test_upsert_asset()
    {
        $this->server->setResponseOfPath(
            '/'. sprintf(AssetApi::ASSET_URI, 'packshot', 'sku_54628_telescope'),
            new ResponseStack(
                new Response('', [], 204)
            )
        );

        $asset = [
            "code" => "sku_54628_telescope",
            "values" => [
                "media_preview" => [
                    [
                        "locale" => null,
                        "channel" => null,
                        "data" => "sku_54628_picture1.jpg"
                    ]
                ],
                "photographer" => [
                    [
                        "locale" => null,
                        "channel" => null,
                        "data" => "ben_levy"
                    ]
                ]
            ]
        ];

        $api = $this->createClient()->getAssetManagerApi();
        $response = $api->upsert('packshot', 'sku_54628_telescope', $asset);

        Assert::assertSame($this->server->getLastRequest()->jsonSerialize()[RequestInfo::JSON_KEY_INPUT], json_encode($asset));
        Assert::assertSame(204, $response);
    }
}
