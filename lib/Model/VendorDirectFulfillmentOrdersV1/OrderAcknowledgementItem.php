<?php
/**
 * OrderAcknowledgementItem
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
 * OrderAcknowledgementItem Class Doc Comment
 *
 * @category Class
 * @description Details of an individual order being acknowledged.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class OrderAcknowledgementItem implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderAcknowledgementItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'purchase_order_number' => 'string',
        'vendor_order_number' => 'string',
        'acknowledgement_date' => 'string',
        'acknowledgement_status' => '\SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\AcknowledgementStatus',
        'selling_party' => '\SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\PartyIdentification',
        'ship_from_party' => '\SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\PartyIdentification',
        'item_acknowledgements' => '\SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\OrderItemAcknowledgement[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'purchase_order_number' => null,
        'vendor_order_number' => null,
        'acknowledgement_date' => null,
        'acknowledgement_status' => null,
        'selling_party' => null,
        'ship_from_party' => null,
        'item_acknowledgements' => null
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
        'purchase_order_number' => 'purchaseOrderNumber',
        'vendor_order_number' => 'vendorOrderNumber',
        'acknowledgement_date' => 'acknowledgementDate',
        'acknowledgement_status' => 'acknowledgementStatus',
        'selling_party' => 'sellingParty',
        'ship_from_party' => 'shipFromParty',
        'item_acknowledgements' => 'itemAcknowledgements'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'purchase_order_number' => 'setPurchaseOrderNumber',
        'vendor_order_number' => 'setVendorOrderNumber',
        'acknowledgement_date' => 'setAcknowledgementDate',
        'acknowledgement_status' => 'setAcknowledgementStatus',
        'selling_party' => 'setSellingParty',
        'ship_from_party' => 'setShipFromParty',
        'item_acknowledgements' => 'setItemAcknowledgements'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'purchase_order_number' => 'getPurchaseOrderNumber',
        'vendor_order_number' => 'getVendorOrderNumber',
        'acknowledgement_date' => 'getAcknowledgementDate',
        'acknowledgement_status' => 'getAcknowledgementStatus',
        'selling_party' => 'getSellingParty',
        'ship_from_party' => 'getShipFromParty',
        'item_acknowledgements' => 'getItemAcknowledgements'
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
        $this->container['purchase_order_number'] = $data['purchase_order_number'] ?? null;
        $this->container['vendor_order_number'] = $data['vendor_order_number'] ?? null;
        $this->container['acknowledgement_date'] = $data['acknowledgement_date'] ?? null;
        $this->container['acknowledgement_status'] = $data['acknowledgement_status'] ?? null;
        $this->container['selling_party'] = $data['selling_party'] ?? null;
        $this->container['ship_from_party'] = $data['ship_from_party'] ?? null;
        $this->container['item_acknowledgements'] = $data['item_acknowledgements'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['purchase_order_number'] === null) {
            $invalidProperties[] = "'purchase_order_number' can't be null";
        }
        if ($this->container['vendor_order_number'] === null) {
            $invalidProperties[] = "'vendor_order_number' can't be null";
        }
        if ($this->container['acknowledgement_date'] === null) {
            $invalidProperties[] = "'acknowledgement_date' can't be null";
        }
        if ($this->container['acknowledgement_status'] === null) {
            $invalidProperties[] = "'acknowledgement_status' can't be null";
        }
        if ($this->container['selling_party'] === null) {
            $invalidProperties[] = "'selling_party' can't be null";
        }
        if ($this->container['ship_from_party'] === null) {
            $invalidProperties[] = "'ship_from_party' can't be null";
        }
        if ($this->container['item_acknowledgements'] === null) {
            $invalidProperties[] = "'item_acknowledgements' can't be null";
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
     * Gets purchase_order_number
     *
     * @return string
     */
    public function getPurchaseOrderNumber()
    {
        return $this->container['purchase_order_number'];
    }

    /**
     * Sets purchase_order_number
     *
     * @param string $purchase_order_number The purchase order number for this order. Formatting Notes: alpha-numeric code.
     *
     * @return self
     */
    public function setPurchaseOrderNumber($purchase_order_number)
    {
        $this->container['purchase_order_number'] = $purchase_order_number;

        return $this;
    }
    /**
     * Gets vendor_order_number
     *
     * @return string
     */
    public function getVendorOrderNumber()
    {
        return $this->container['vendor_order_number'];
    }

    /**
     * Sets vendor_order_number
     *
     * @param string $vendor_order_number The vendor's order number for this order.
     *
     * @return self
     */
    public function setVendorOrderNumber($vendor_order_number)
    {
        $this->container['vendor_order_number'] = $vendor_order_number;

        return $this;
    }
    /**
     * Gets acknowledgement_date
     *
     * @return string
     */
    public function getAcknowledgementDate()
    {
        return $this->container['acknowledgement_date'];
    }

    /**
     * Sets acknowledgement_date
     *
     * @param string $acknowledgement_date The date and time when the order is acknowledged, in ISO-8601 date/time format. For example: 2018-07-16T23:00:00Z / 2018-07-16T23:00:00-05:00 / 2018-07-16T23:00:00-08:00.
     *
     * @return self
     */
    public function setAcknowledgementDate($acknowledgement_date)
    {
        $this->container['acknowledgement_date'] = $acknowledgement_date;

        return $this;
    }
    /**
     * Gets acknowledgement_status
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\AcknowledgementStatus
     */
    public function getAcknowledgementStatus()
    {
        return $this->container['acknowledgement_status'];
    }

    /**
     * Sets acknowledgement_status
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\AcknowledgementStatus $acknowledgement_status acknowledgement_status
     *
     * @return self
     */
    public function setAcknowledgementStatus($acknowledgement_status)
    {
        $this->container['acknowledgement_status'] = $acknowledgement_status;

        return $this;
    }
    /**
     * Gets selling_party
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\PartyIdentification
     */
    public function getSellingParty()
    {
        return $this->container['selling_party'];
    }

    /**
     * Sets selling_party
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\PartyIdentification $selling_party selling_party
     *
     * @return self
     */
    public function setSellingParty($selling_party)
    {
        $this->container['selling_party'] = $selling_party;

        return $this;
    }
    /**
     * Gets ship_from_party
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\PartyIdentification
     */
    public function getShipFromParty()
    {
        return $this->container['ship_from_party'];
    }

    /**
     * Sets ship_from_party
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\PartyIdentification $ship_from_party ship_from_party
     *
     * @return self
     */
    public function setShipFromParty($ship_from_party)
    {
        $this->container['ship_from_party'] = $ship_from_party;

        return $this;
    }
    /**
     * Gets item_acknowledgements
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\OrderItemAcknowledgement[]
     */
    public function getItemAcknowledgements()
    {
        return $this->container['item_acknowledgements'];
    }

    /**
     * Sets item_acknowledgements
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\OrderItemAcknowledgement[] $item_acknowledgements Item details including acknowledged quantity.
     *
     * @return self
     */
    public function setItemAcknowledgements($item_acknowledgements)
    {
        $this->container['item_acknowledgements'] = $item_acknowledgements;

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
     * @return SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\OrderAcknowledgementItem
     */
    public function __set($propertyName, $propertyValue)
    {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}


