<?php

namespace Akeneo\Pim\ApiClient;

use Akeneo\Pim\ApiClient\Api\AssociationTypeApiInterface;
use Akeneo\Pim\ApiClient\Api\AttributeApiInterface;
use Akeneo\Pim\ApiClient\Api\AttributeGroupApiInterface;
use Akeneo\Pim\ApiClient\Api\AttributeOptionApiInterface;
use Akeneo\Pim\ApiClient\Api\CategoryApiInterface;
use Akeneo\Pim\ApiClient\Api\ChannelApiInterface;
use Akeneo\Pim\ApiClient\Api\CurrencyApiInterface;
use Akeneo\Pim\ApiClient\Api\FamilyApiInterface;
use Akeneo\Pim\ApiClient\Api\FamilyVariantApiInterface;
use Akeneo\Pim\ApiClient\Api\LocaleApiInterface;
use Akeneo\Pim\ApiClient\Api\MeasureFamilyApiInterface;
use Akeneo\Pim\ApiClient\Api\MeasurementFamilyApiInterface;
use Akeneo\Pim\ApiClient\Api\MediaFileApiInterface;
use Akeneo\Pim\ApiClient\Api\ProductApiInterface;
use Akeneo\Pim\ApiClient\Api\ProductModelApiInterface;
use Akeneo\Pim\ApiClient\Security\Authentication;

/**
 * This class is the implementation of the client to use the Akeneo PIM API.
 *
 * @author    Alexandre Hocquard <alexandre.hocquard@akeneo.com>
 * @copyright 2017 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class AkeneoPimClient implements AkeneoPimClientInterface
{
    /** @var Authentication */
    protected $authentication;

    /** @var ProductApiInterface */
    protected $productApi;

    /** @var CategoryApiInterface */
    protected $categoryApi;

    /** @var AttributeApiInterface */
    protected $attributeApi;

    /** @var AttributeOptionApiInterface */
    protected $attributeOptionApi;

    /** @var AttributeGroupApiInterface */
    protected $attributeGroupApi;

    /** @var FamilyApiInterface */
    protected $familyApi;

    /** @var MediaFileApiInterface */
    protected $productMediaFileApi;

    /** @var LocaleApiInterface */
    protected $localeApi;

    /** @var ChannelApiInterface */
    protected $channelApi;

    /** @var CurrencyApiInterface */
    protected $currencyApi;

    /** @var MeasureFamilyApiInterface */
    protected $measureFamilyApi;

    /** @var AssociationTypeApiInterface */
    protected $associationTypeApi;

    /** @var FamilyVariantApiInterface */
    protected $familyVariantApi;

    /** @var ProductModelApiInterface */
    protected $productModelApi;

    /** @var MeasurementFamilyApiInterface */
    private $measurementFamilyApi;

    public function __construct(
        Authentication $authentication,
        ProductApiInterface $productApi,
        CategoryApiInterface $categoryApi,
        AttributeApiInterface $attributeApi,
        AttributeOptionApiInterface $attributeOptionApi,
        AttributeGroupApiInterface $attributeGroupApi,
        FamilyApiInterface $familyApi,
        MediaFileApiInterface $productMediaFileApi,
        LocaleApiInterface $localeApi,
        ChannelApiInterface $channelApi,
        CurrencyApiInterface $currencyApi,
        MeasureFamilyApiInterface $measureFamilyApi,
        MeasurementFamilyApiInterface $measurementFamilyApi,
        AssociationTypeApiInterface $associationTypeApi,
        FamilyVariantApiInterface $familyVariantApi,
        ProductModelApiInterface $productModelApi
    ) {
        $this->authentication = $authentication;
        $this->productApi = $productApi;
        $this->categoryApi = $categoryApi;
        $this->attributeApi = $attributeApi;
        $this->attributeOptionApi = $attributeOptionApi;
        $this->attributeGroupApi = $attributeGroupApi;
        $this->familyApi = $familyApi;
        $this->productMediaFileApi = $productMediaFileApi;
        $this->localeApi = $localeApi;
        $this->channelApi = $channelApi;
        $this->currencyApi = $currencyApi;
        $this->measureFamilyApi = $measureFamilyApi;
        $this->measurementFamilyApi = $measurementFamilyApi;
        $this->associationTypeApi = $associationTypeApi;
        $this->familyVariantApi = $familyVariantApi;
        $this->productModelApi = $productModelApi;
    }

    /**
     * {@inheritdoc}
     */
    public function getToken(): ?string
    {
        return $this->authentication->getAccessToken();
    }

    /**
     * {@inheritdoc}
     */
    public function getRefreshToken(): ?string
    {
        return $this->authentication->getRefreshToken();
    }

    /**
     * {@inheritdoc}
     */
    public function getProductApi(): ProductApiInterface
    {
        return $this->productApi;
    }

    /**
     * {@inheritdoc}
     */
    public function getCategoryApi(): CategoryApiInterface
    {
        return $this->categoryApi;
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeApi(): AttributeApiInterface
    {
        return $this->attributeApi;
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeOptionApi(): AttributeOptionApiInterface
    {
        return $this->attributeOptionApi;
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeGroupApi(): AttributeGroupApiInterface
    {
        return $this->attributeGroupApi;
    }

    /**
     * {@inheritdoc}
     */
    public function getFamilyApi(): FamilyApiInterface
    {
        return $this->familyApi;
    }

    /**
     * {@inheritdoc}
     */
    public function getProductMediaFileApi(): MediaFileApiInterface
    {
        return $this->productMediaFileApi;
    }

    /**
     * {@inheritdoc}
     */
    public function getLocaleApi(): LocaleApiInterface
    {
        return $this->localeApi;
    }

    /**
     * {@inheritdoc}
     */
    public function getChannelApi(): ChannelApiInterface
    {
        return $this->channelApi;
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyApi(): CurrencyApiInterface
    {
        return $this->currencyApi;
    }

    /**
     * {@inheritdoc}
     */
    public function getMeasureFamilyApi(): MeasureFamilyApiInterface
    {
        return $this->measureFamilyApi;
    }

    /**
     * {@inheritdoc}
     */
    public function getMeasurementFamilyApi(): MeasurementFamilyApiInterface
    {
        return $this->measurementFamilyApi;
    }

    /**
     * {@inheritdoc}
     */
    public function getAssociationTypeApi(): AssociationTypeApiInterface
    {
        return $this->associationTypeApi;
    }

    /**
     * {@inheritdoc}
     */
    public function getFamilyVariantApi(): FamilyVariantApiInterface
    {
        return $this->familyVariantApi;
    }

    /**
     * {@inheritdoc}
     */
    public function getProductModelApi(): ProductModelApiInterface
    {
        return $this->productModelApi;
    }
}
