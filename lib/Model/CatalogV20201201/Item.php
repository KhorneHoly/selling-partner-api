<?php
/**
 * Item
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Catalog Items
 *
 * The Selling Partner API for Catalog Items provides programmatic access to information about items in the Amazon catalog. For more information, see the [Catalog Items API Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/catalog-items-api-v2020-12-01-use-case-guide).
 *
 * The version of the OpenAPI document: 2020-12-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\CatalogV20201201;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * Item Class Doc Comment
 *
 * @category Class
 * @description An item in the Amazon catalog.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Item implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'asin' => 'string',
        'attributes' => 'object',
        'identifiers' => '\SellingPartnerApi\Model\CatalogV20201201\ItemIdentifiersByMarketplace[]',
        'images' => '\SellingPartnerApi\Model\CatalogV20201201\ItemImagesByMarketplace[]',
        'product_types' => '\SellingPartnerApi\Model\CatalogV20201201\ItemProductTypeByMarketplace[]',
        'ranks' => '\SellingPartnerApi\Model\CatalogV20201201\ItemSalesRanksByMarketplace[]',
        'summaries' => '\SellingPartnerApi\Model\CatalogV20201201\ItemSummaryByMarketplace[]',
        'variations' => '\SellingPartnerApi\Model\CatalogV20201201\ItemVariationsByMarketplace[]',
        'vendor_details' => '\SellingPartnerApi\Model\CatalogV20201201\ItemVendorDetailsByMarketplace[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'asin' => null,
        'attributes' => null,
        'identifiers' => null,
        'images' => null,
        'product_types' => null,
        'ranks' => null,
        'summaries' => null,
        'variations' => null,
        'vendor_details' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'headers' => 'headers',
        'asin' => 'asin',
        'attributes' => 'attributes',
        'identifiers' => 'identifiers',
        'images' => 'images',
        'product_types' => 'productTypes',
        'ranks' => 'ranks',
        'summaries' => 'summaries',
        'variations' => 'variations',
        'vendor_details' => 'vendorDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'headers' => 'setHeaders',
        'asin' => 'setAsin',
        'attributes' => 'setAttributes',
        'identifiers' => 'setIdentifiers',
        'images' => 'setImages',
        'product_types' => 'setProductTypes',
        'ranks' => 'setRanks',
        'summaries' => 'setSummaries',
        'variations' => 'setVariations',
        'vendor_details' => 'setVendorDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'headers' => 'getHeaders',
        'asin' => 'getAsin',
        'attributes' => 'getAttributes',
        'identifiers' => 'getIdentifiers',
        'images' => 'getImages',
        'product_types' => 'getProductTypes',
        'ranks' => 'getRanks',
        'summaries' => 'getSummaries',
        'variations' => 'getVariations',
        'vendor_details' => 'getVendorDetails'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    
    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['asin'] = $data['asin'] ?? null;
        $this->container['attributes'] = $data['attributes'] ?? null;
        $this->container['identifiers'] = $data['identifiers'] ?? null;
        $this->container['images'] = $data['images'] ?? null;
        $this->container['product_types'] = $data['product_types'] ?? null;
        $this->container['ranks'] = $data['ranks'] ?? null;
        $this->container['summaries'] = $data['summaries'] ?? null;
        $this->container['variations'] = $data['variations'] ?? null;
        $this->container['vendor_details'] = $data['vendor_details'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['asin'] === null) {
            $invalidProperties[] = "'asin' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets API response headers
     *
     * @return array[string]
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets API response headers (only relevant to response models)
     *
     * @param array[string => string] $headers Associative array of response headers.
     *
     * @return self
     */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;
        return $this;
    }

    /**
     * Gets asin
     *
     * @return string
     */
    public function getAsin()
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin
     *
     * @param string $asin Amazon Standard Identification Number (ASIN) is the unique identifier for an item in the Amazon catalog.
     *
     * @return self
     */
    public function setAsin($asin)
    {
        $this->container['asin'] = $asin;

        return $this;
    }
    /**
     * Gets attributes
     *
     * @return object|null
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param object|null $attributes A JSON object that contains structured item attribute data keyed by attribute name. Catalog item attributes are available only to brand owners and conform to the related product type definitions available in the Selling Partner API for Product Type Definitions.
     *
     * @return self
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }
    /**
     * Gets identifiers
     *
     * @return \SellingPartnerApi\Model\CatalogV20201201\ItemIdentifiersByMarketplace[]|null
     */
    public function getIdentifiers()
    {
        return $this->container['identifiers'];
    }

    /**
     * Sets identifiers
     *
     * @param \SellingPartnerApi\Model\CatalogV20201201\ItemIdentifiersByMarketplace[]|null $identifiers Identifiers associated with the item in the Amazon catalog, such as UPC and EAN identifiers.
     *
     * @return self
     */
    public function setIdentifiers($identifiers)
    {
        $this->container['identifiers'] = $identifiers;

        return $this;
    }
    /**
     * Gets images
     *
     * @return \SellingPartnerApi\Model\CatalogV20201201\ItemImagesByMarketplace[]|null
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param \SellingPartnerApi\Model\CatalogV20201201\ItemImagesByMarketplace[]|null $images Images for an item in the Amazon catalog. All image variants are provided to brand owners. Otherwise, a thumbnail of the \"MAIN\" image variant is provided.
     *
     * @return self
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

        return $this;
    }
    /**
     * Gets product_types
     *
     * @return \SellingPartnerApi\Model\CatalogV20201201\ItemProductTypeByMarketplace[]|null
     */
    public function getProductTypes()
    {
        return $this->container['product_types'];
    }

    /**
     * Sets product_types
     *
     * @param \SellingPartnerApi\Model\CatalogV20201201\ItemProductTypeByMarketplace[]|null $product_types Product types associated with the Amazon catalog item.
     *
     * @return self
     */
    public function setProductTypes($product_types)
    {
        $this->container['product_types'] = $product_types;

        return $this;
    }
    /**
     * Gets ranks
     *
     * @return \SellingPartnerApi\Model\CatalogV20201201\ItemSalesRanksByMarketplace[]|null
     */
    public function getRanks()
    {
        return $this->container['ranks'];
    }

    /**
     * Sets ranks
     *
     * @param \SellingPartnerApi\Model\CatalogV20201201\ItemSalesRanksByMarketplace[]|null $ranks Sales ranks of an Amazon catalog item.
     *
     * @return self
     */
    public function setRanks($ranks)
    {
        $this->container['ranks'] = $ranks;

        return $this;
    }
    /**
     * Gets summaries
     *
     * @return \SellingPartnerApi\Model\CatalogV20201201\ItemSummaryByMarketplace[]|null
     */
    public function getSummaries()
    {
        return $this->container['summaries'];
    }

    /**
     * Sets summaries
     *
     * @param \SellingPartnerApi\Model\CatalogV20201201\ItemSummaryByMarketplace[]|null $summaries Summary details of an Amazon catalog item.
     *
     * @return self
     */
    public function setSummaries($summaries)
    {
        $this->container['summaries'] = $summaries;

        return $this;
    }
    /**
     * Gets variations
     *
     * @return \SellingPartnerApi\Model\CatalogV20201201\ItemVariationsByMarketplace[]|null
     */
    public function getVariations()
    {
        return $this->container['variations'];
    }

    /**
     * Sets variations
     *
     * @param \SellingPartnerApi\Model\CatalogV20201201\ItemVariationsByMarketplace[]|null $variations Variation details by marketplace for an Amazon catalog item (variation relationships).
     *
     * @return self
     */
    public function setVariations($variations)
    {
        $this->container['variations'] = $variations;

        return $this;
    }
    /**
     * Gets vendor_details
     *
     * @return \SellingPartnerApi\Model\CatalogV20201201\ItemVendorDetailsByMarketplace[]|null
     */
    public function getVendorDetails()
    {
        return $this->container['vendor_details'];
    }

    /**
     * Sets vendor_details
     *
     * @param \SellingPartnerApi\Model\CatalogV20201201\ItemVendorDetailsByMarketplace[]|null $vendor_details Vendor details associated with an Amazon catalog item. Vendor details are available to vendors only.
     *
     * @return self
     */
    public function setVendorDetails($vendor_details)
    {
        $this->container['vendor_details'] = $vendor_details;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

