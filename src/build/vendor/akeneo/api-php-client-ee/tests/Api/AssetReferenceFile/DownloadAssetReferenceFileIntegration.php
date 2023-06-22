<?php

namespace Akeneo\PimEnterprise\ApiClient\tests\Api\AssetReferenceFile;

use Akeneo\PimEnterprise\ApiClient\Api\AssetReferenceFileApi;
use Akeneo\PimEnterprise\ApiClient\tests\Api\ApiTestCaseEnterprise;
use donatj\MockWebServer\RequestInfo;
use donatj\MockWebServer\Response;
use donatj\MockWebServer\ResponseStack;
use PHPUnit\Framework\Assert;
use Psr\Http\Message\ResponseInterface;

class DownloadAssetReferenceFileIntegration extends ApiTestCaseEnterprise
{
    public function test_download_a_localizable_asset_reference_file()
    {
        $expectedFilePath = realpath(__DIR__ . '/../../fixtures/ziggy.png');

        $this->server->setResponseOfPath(
            '/'. sprintf(AssetReferenceFileApi::ASSET_REFERENCE_FILE_DOWNLOAD_URI, 'ziggy', 'en_US'),
            new ResponseStack(
                new Response(file_get_contents($expectedFilePath), [], 201)
            )
        );

        $api = $this->createClient()->getAssetReferenceFileApi();
        $downloadResponse = $api->downloadFromLocalizableAsset('ziggy', 'en_US');

        Assert::assertSame($this->server->getLastRequest()->jsonSerialize()[RequestInfo::JSON_KEY_METHOD], 'GET');

        Assert::assertInstanceOf(ResponseInterface::class, $downloadResponse);
        Assert::assertSame(file_get_contents($expectedFilePath), $downloadResponse->getBody()->getContents());
    }

    public function test_download_a_not_localizable_asset_reference_file()
    {
        $expectedFilePath = realpath(__DIR__ . '/../../fixtures/ziggy-certification.jpg');

        $this->server->setResponseOfPath(
            '/'. sprintf(AssetReferenceFileApi::ASSET_REFERENCE_FILE_DOWNLOAD_URI, 'ziggy_certif', AssetReferenceFileApi::NOT_LOCALIZABLE_ASSET_LOCALE_CODE),
            new ResponseStack(
                new Response(file_get_contents($expectedFilePath), [], 201)
            )
        );

        $api = $this->createClient()->getAssetReferenceFileApi();
        $downloadResponse = $api->downloadFromNotLocalizableAsset('ziggy_certif');

        Assert::assertSame($this->server->getLastRequest()->jsonSerialize()[RequestInfo::JSON_KEY_METHOD], 'GET');

        $this->assertInstanceOf(ResponseInterface::class, $downloadResponse);
        Assert::assertSame(file_get_contents($expectedFilePath), $downloadResponse->getBody()->getContents());
    }

    /**
     * @expectedException \Akeneo\Pim\ApiClient\Exception\NotFoundHttpException
     */
    public function test_download_from_localizable_asset_not_found()
    {
        $this->server->setResponseOfPath(
            '/'. sprintf(AssetReferenceFileApi::ASSET_REFERENCE_FILE_DOWNLOAD_URI, 'ziggy', 'en_US'),
            new ResponseStack(
                new Response('{"code": 404, "message":"Not found"}', [], 404)
            )
        );

        $api = $this->createClient()->getAssetReferenceFileApi();
        $api->downloadFromLocalizableAsset('ziggy', 'en_US');
    }

    /**
     * @expectedException \Akeneo\Pim\ApiClient\Exception\NotFoundHttpException
     */
    public function test_download_from_not_localizable_asset_not_found()
    {
        $this->server->setResponseOfPath(
            '/'. sprintf(AssetReferenceFileApi::ASSET_REFERENCE_FILE_DOWNLOAD_URI, 'ziggy_certif', AssetReferenceFileApi::NOT_LOCALIZABLE_ASSET_LOCALE_CODE),
            new ResponseStack(
                new Response('{"code": 404, "message":"Not found"}', [], 404)
            )
        );

        $api = $this->createClient()->getAssetReferenceFileApi();

        $api->downloadFromNotLocalizableAsset('ziggy_certif');
    }
}
