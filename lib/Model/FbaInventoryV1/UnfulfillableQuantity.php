<?php
/**
 * UnfulfillableQuantity
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for FBA Inventory
 *
 * The Selling Partner API for FBA Inventory lets you programmatically retrieve information about inventory in Amazon's fulfillment network.
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\FbaInventoryV1;

use \ArrayAccess;
use \SellingPartnerApi\Model\ModelInterface;
use \SellingPartnerApi\ObjectSerializer;

/**
 * UnfulfillableQuantity Class Doc Comment
 *
 * @category Class
 * @description The quantity of unfulfillable inventory.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class UnfulfillableQuantity implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UnfulfillableQuantity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'total_unfulfillable_quantity' => 'int',
        'customer_damaged_quantity' => 'int',
        'warehouse_damaged_quantity' => 'int',
        'distributor_damaged_quantity' => 'int',
        'carrier_damaged_quantity' => 'int',
        'defective_quantity' => 'int',
        'expired_quantity' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'total_unfulfillable_quantity' => null,
        'customer_damaged_quantity' => null,
        'warehouse_damaged_quantity' => null,
        'distributor_damaged_quantity' => null,
        'carrier_damaged_quantity' => null,
        'defective_quantity' => null,
        'expired_quantity' => null
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
        'total_unfulfillable_quantity' => 'totalUnfulfillableQuantity',
        'customer_damaged_quantity' => 'customerDamagedQuantity',
        'warehouse_damaged_quantity' => 'warehouseDamagedQuantity',
        'distributor_damaged_quantity' => 'distributorDamagedQuantity',
        'carrier_damaged_quantity' => 'carrierDamagedQuantity',
        'defective_quantity' => 'defectiveQuantity',
        'expired_quantity' => 'expiredQuantity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'total_unfulfillable_quantity' => 'setTotalUnfulfillableQuantity',
        'customer_damaged_quantity' => 'setCustomerDamagedQuantity',
        'warehouse_damaged_quantity' => 'setWarehouseDamagedQuantity',
        'distributor_damaged_quantity' => 'setDistributorDamagedQuantity',
        'carrier_damaged_quantity' => 'setCarrierDamagedQuantity',
        'defective_quantity' => 'setDefectiveQuantity',
        'expired_quantity' => 'setExpiredQuantity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total_unfulfillable_quantity' => 'getTotalUnfulfillableQuantity',
        'customer_damaged_quantity' => 'getCustomerDamagedQuantity',
        'warehouse_damaged_quantity' => 'getWarehouseDamagedQuantity',
        'distributor_damaged_quantity' => 'getDistributorDamagedQuantity',
        'carrier_damaged_quantity' => 'getCarrierDamagedQuantity',
        'defective_quantity' => 'getDefectiveQuantity',
        'expired_quantity' => 'getExpiredQuantity'
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
        $this->container['total_unfulfillable_quantity'] = $data['total_unfulfillable_quantity'] ?? null;
        $this->container['customer_damaged_quantity'] = $data['customer_damaged_quantity'] ?? null;
        $this->container['warehouse_damaged_quantity'] = $data['warehouse_damaged_quantity'] ?? null;
        $this->container['distributor_damaged_quantity'] = $data['distributor_damaged_quantity'] ?? null;
        $this->container['carrier_damaged_quantity'] = $data['carrier_damaged_quantity'] ?? null;
        $this->container['defective_quantity'] = $data['defective_quantity'] ?? null;
        $this->container['expired_quantity'] = $data['expired_quantity'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
     * Gets total_unfulfillable_quantity
     *
     * @return int|null
     */
    public function getTotalUnfulfillableQuantity()
    {
        return $this->container['total_unfulfillable_quantity'];
    }

    /**
     * Sets total_unfulfillable_quantity
     *
     * @param int|null $total_unfulfillable_quantity The total number of units in Amazon's fulfillment network in unsellable condition.
     *
     * @return self
     */
    public function setTotalUnfulfillableQuantity($total_unfulfillable_quantity)
    {
        $this->container['total_unfulfillable_quantity'] = $total_unfulfillable_quantity;

        return $this;
    }
    /**
     * Gets customer_damaged_quantity
     *
     * @return int|null
     */
    public function getCustomerDamagedQuantity()
    {
        return $this->container['customer_damaged_quantity'];
    }

    /**
     * Sets customer_damaged_quantity
     *
     * @param int|null $customer_damaged_quantity The number of units in customer damaged disposition.
     *
     * @return self
     */
    public function setCustomerDamagedQuantity($customer_damaged_quantity)
    {
        $this->container['customer_damaged_quantity'] = $customer_damaged_quantity;

        return $this;
    }
    /**
     * Gets warehouse_damaged_quantity
     *
     * @return int|null
     */
    public function getWarehouseDamagedQuantity()
    {
        return $this->container['warehouse_damaged_quantity'];
    }

    /**
     * Sets warehouse_damaged_quantity
     *
     * @param int|null $warehouse_damaged_quantity The number of units in warehouse damaged disposition.
     *
     * @return self
     */
    public function setWarehouseDamagedQuantity($warehouse_damaged_quantity)
    {
        $this->container['warehouse_damaged_quantity'] = $warehouse_damaged_quantity;

        return $this;
    }
    /**
     * Gets distributor_damaged_quantity
     *
     * @return int|null
     */
    public function getDistributorDamagedQuantity()
    {
        return $this->container['distributor_damaged_quantity'];
    }

    /**
     * Sets distributor_damaged_quantity
     *
     * @param int|null $distributor_damaged_quantity The number of units in distributor damaged disposition.
     *
     * @return self
     */
    public function setDistributorDamagedQuantity($distributor_damaged_quantity)
    {
        $this->container['distributor_damaged_quantity'] = $distributor_damaged_quantity;

        return $this;
    }
    /**
     * Gets carrier_damaged_quantity
     *
     * @return int|null
     */
    public function getCarrierDamagedQuantity()
    {
        return $this->container['carrier_damaged_quantity'];
    }

    /**
     * Sets carrier_damaged_quantity
     *
     * @param int|null $carrier_damaged_quantity The number of units in carrier damaged disposition.
     *
     * @return self
     */
    public function setCarrierDamagedQuantity($carrier_damaged_quantity)
    {
        $this->container['carrier_damaged_quantity'] = $carrier_damaged_quantity;

        return $this;
    }
    /**
     * Gets defective_quantity
     *
     * @return int|null
     */
    public function getDefectiveQuantity()
    {
        return $this->container['defective_quantity'];
    }

    /**
     * Sets defective_quantity
     *
     * @param int|null $defective_quantity The number of units in defective disposition.
     *
     * @return self
     */
    public function setDefectiveQuantity($defective_quantity)
    {
        $this->container['defective_quantity'] = $defective_quantity;

        return $this;
    }
    /**
     * Gets expired_quantity
     *
     * @return int|null
     */
    public function getExpiredQuantity()
    {
        return $this->container['expired_quantity'];
    }

    /**
     * Sets expired_quantity
     *
     * @param int|null $expired_quantity The number of units in expired disposition.
     *
     * @return self
     */
    public function setExpiredQuantity($expired_quantity)
    {
        $this->container['expired_quantity'] = $expired_quantity;

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

    /**
     * Enable iterating over all of the model's attributes in $key => $value format
     *
     * @return \Traversable
     */
    public function getIterator(): \Traversable
    {
        return (function () {
            foreach ($this->container as $key => $value) {
                yield $key => $value;
            }
        })();
    }

    /**
     * Retrieves the property with the given name by converting the property accession
     * to a getter call.
     *
     * @param string $propertyName
     * @return mixed
     */
    public function __get($propertyName)
    {
        // This doesn't make a syntactical difference since PHP is case-insensitive, but
        // makes error messages clearer (e.g. "Call to undefined method getFoo()" rather
        // than "Call to undefined method getfoo()").
        $ucProp = ucfirst($propertyName);
        $getter = "get$ucProp";
        return $this->$getter();
    }

    /**
     * Sets the property with the given name by converting the property accession
     * to a setter call.
     *
     * @param string $propertyName
     * @param mixed $propertyValue
     * @return SellingPartnerApi\Model\FbaInventoryV1\UnfulfillableQuantity
     */
    public function __set($propertyName, $propertyValue)
    {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}


