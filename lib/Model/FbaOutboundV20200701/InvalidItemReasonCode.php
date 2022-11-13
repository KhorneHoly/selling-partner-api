<?php
/**
 * InvalidItemReasonCode
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner APIs for Fulfillment Outbound
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * The version of the OpenAPI document: 2020-07-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\FbaOutboundV20200701;
use \SellingPartnerApi\Model\ModelInterface;
use \SellingPartnerApi\ObjectSerializer;

/**
 * InvalidItemReasonCode Class Doc Comment
 *
 * @category Class
 * @description A code for why the item is invalid for return.
 * @package  SellingPartnerApi
 * @group 
 */
class InvalidItemReasonCode
{
    public $value;

    /**
     * Possible values of this enum
     */
    const INVALID_VALUES = 'InvalidValues';
    const DUPLICATE_REQUEST = 'DuplicateRequest';
    const NO_COMPLETED_SHIP_ITEMS = 'NoCompletedShipItems';
    const NO_RETURNABLE_QUANTITY = 'NoReturnableQuantity';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        $baseVals = [
            self::INVALID_VALUES,
            self::DUPLICATE_REQUEST,
            self::NO_COMPLETED_SHIP_ITEMS,
            self::NO_RETURNABLE_QUANTITY,
        ];
        // This is necessary because Amazon does not consistently capitalize their
        // enum values, so we do case-insensitive enum value validation in ObjectSerializer
        $ucVals = array_map(function ($val) { return strtoupper($val); }, $baseVals);
        return array_merge($baseVals, $ucVals);
    }

    public function __construct($value)
    {
        if (is_null($value) || !in_array($value, self::getAllowableEnumValues(), true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value for enum 'InvalidItemReasonCode', must be one of '%s'", implode("', '", self::getAllowableEnumValues())));
        }

        $this->value = $value;
    }

    /**
     * Convert the enum value to a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->value;
    }
}


