<?php
/**
 * ShipmentDetails
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Direct Fulfillment Orders
 *
 * The Selling Partner API for Direct Fulfillment Orders provides programmatic access to a direct fulfillment vendor's order data.
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

namespace SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1;

use \ArrayAccess;
use \SellingPartnerApi\Model\ModelInterface;
use \SellingPartnerApi\ObjectSerializer;

/**
 * ShipmentDetails Class Doc Comment
 *
 * @category Class
 * @description Shipment details required for the shipment.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ShipmentDetails implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShipmentDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'is_priority_shipment' => 'bool',
        'is_scheduled_delivery_shipment' => 'bool',
        'is_pslip_required' => 'bool',
        'is_gift' => 'bool',
        'ship_method' => 'string',
        'shipment_dates' => '\SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\ShipmentDates',
        'message_to_customer' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'is_priority_shipment' => null,
        'is_scheduled_delivery_shipment' => null,
        'is_pslip_required' => null,
        'is_gift' => null,
        'ship_method' => null,
        'shipment_dates' => null,
        'message_to_customer' => null
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
        'is_priority_shipment' => 'isPriorityShipment',
        'is_scheduled_delivery_shipment' => 'isScheduledDeliveryShipment',
        'is_pslip_required' => 'isPslipRequired',
        'is_gift' => 'isGift',
        'ship_method' => 'shipMethod',
        'shipment_dates' => 'shipmentDates',
        'message_to_customer' => 'messageToCustomer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'is_priority_shipment' => 'setIsPriorityShipment',
        'is_scheduled_delivery_shipment' => 'setIsScheduledDeliveryShipment',
        'is_pslip_required' => 'setIsPslipRequired',
        'is_gift' => 'setIsGift',
        'ship_method' => 'setShipMethod',
        'shipment_dates' => 'setShipmentDates',
        'message_to_customer' => 'setMessageToCustomer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_priority_shipment' => 'getIsPriorityShipment',
        'is_scheduled_delivery_shipment' => 'getIsScheduledDeliveryShipment',
        'is_pslip_required' => 'getIsPslipRequired',
        'is_gift' => 'getIsGift',
        'ship_method' => 'getShipMethod',
        'shipment_dates' => 'getShipmentDates',
        'message_to_customer' => 'getMessageToCustomer'
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
        $this->container['is_priority_shipment'] = $data['is_priority_shipment'] ?? null;
        $this->container['is_scheduled_delivery_shipment'] = $data['is_scheduled_delivery_shipment'] ?? null;
        $this->container['is_pslip_required'] = $data['is_pslip_required'] ?? null;
        $this->container['is_gift'] = $data['is_gift'] ?? null;
        $this->container['ship_method'] = $data['ship_method'] ?? null;
        $this->container['shipment_dates'] = $data['shipment_dates'] ?? null;
        $this->container['message_to_customer'] = $data['message_to_customer'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['is_priority_shipment'] === null) {
            $invalidProperties[] = "'is_priority_shipment' can't be null";
        }
        if ($this->container['is_pslip_required'] === null) {
            $invalidProperties[] = "'is_pslip_required' can't be null";
        }
        if ($this->container['ship_method'] === null) {
            $invalidProperties[] = "'ship_method' can't be null";
        }
        if ($this->container['shipment_dates'] === null) {
            $invalidProperties[] = "'shipment_dates' can't be null";
        }
        if ($this->container['message_to_customer'] === null) {
            $invalidProperties[] = "'message_to_customer' can't be null";
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
     * Gets is_priority_shipment
     *
     * @return bool
     */
    public function getIsPriorityShipment()
    {
        return $this->container['is_priority_shipment'];
    }

    /**
     * Sets is_priority_shipment
     *
     * @param bool $is_priority_shipment When true, this is a priority shipment.
     *
     * @return self
     */
    public function setIsPriorityShipment($is_priority_shipment)
    {
        $this->container['is_priority_shipment'] = $is_priority_shipment;

        return $this;
    }
    /**
     * Gets is_scheduled_delivery_shipment
     *
     * @return bool|null
     */
    public function getIsScheduledDeliveryShipment()
    {
        return $this->container['is_scheduled_delivery_shipment'];
    }

    /**
     * Sets is_scheduled_delivery_shipment
     *
     * @param bool|null $is_scheduled_delivery_shipment When true, this order is part of a scheduled delivery program.
     *
     * @return self
     */
    public function setIsScheduledDeliveryShipment($is_scheduled_delivery_shipment)
    {
        $this->container['is_scheduled_delivery_shipment'] = $is_scheduled_delivery_shipment;

        return $this;
    }
    /**
     * Gets is_pslip_required
     *
     * @return bool
     */
    public function getIsPslipRequired()
    {
        return $this->container['is_pslip_required'];
    }

    /**
     * Sets is_pslip_required
     *
     * @param bool $is_pslip_required When true, a packing slip is required to be sent to the customer.
     *
     * @return self
     */
    public function setIsPslipRequired($is_pslip_required)
    {
        $this->container['is_pslip_required'] = $is_pslip_required;

        return $this;
    }
    /**
     * Gets is_gift
     *
     * @return bool|null
     */
    public function getIsGift()
    {
        return $this->container['is_gift'];
    }

    /**
     * Sets is_gift
     *
     * @param bool|null $is_gift When true, the order contain a gift. Include the gift message and gift wrap information.
     *
     * @return self
     */
    public function setIsGift($is_gift)
    {
        $this->container['is_gift'] = $is_gift;

        return $this;
    }
    /**
     * Gets ship_method
     *
     * @return string
     */
    public function getShipMethod()
    {
        return $this->container['ship_method'];
    }

    /**
     * Sets ship_method
     *
     * @param string $ship_method Ship method to be used for shipping the order. Amazon defines ship method codes indicating the shipping carrier and shipment service level. To see the full list of ship methods in use, including both the code and the friendly name, search the 'Help' section on Vendor Central for 'ship methods'.
     *
     * @return self
     */
    public function setShipMethod($ship_method)
    {
        $this->container['ship_method'] = $ship_method;

        return $this;
    }
    /**
     * Gets shipment_dates
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\ShipmentDates
     */
    public function getShipmentDates()
    {
        return $this->container['shipment_dates'];
    }

    /**
     * Sets shipment_dates
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\ShipmentDates $shipment_dates shipment_dates
     *
     * @return self
     */
    public function setShipmentDates($shipment_dates)
    {
        $this->container['shipment_dates'] = $shipment_dates;

        return $this;
    }
    /**
     * Gets message_to_customer
     *
     * @return string
     */
    public function getMessageToCustomer()
    {
        return $this->container['message_to_customer'];
    }

    /**
     * Sets message_to_customer
     *
     * @param string $message_to_customer Message to customer for order status.
     *
     * @return self
     */
    public function setMessageToCustomer($message_to_customer)
    {
        $this->container['message_to_customer'] = $message_to_customer;

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
     * @return SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\ShipmentDetails
     */
    public function __set($propertyName, $propertyValue)
    {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}


