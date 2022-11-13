<?php
/**
 * TransportStatus
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Fulfillment Inbound
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\FbaInboundV0;
use \SellingPartnerApi\Model\ModelInterface;
use \SellingPartnerApi\ObjectSerializer;

/**
 * TransportStatus Class Doc Comment
 *
 * @category Class
 * @description Indicates the status of the Amazon-partnered carrier shipment.
 * @package  SellingPartnerApi
 * @group 
 */
class TransportStatus
{
    public $value;

    /**
     * Possible values of this enum
     */
    const WORKING = 'WORKING';
    const ESTIMATING = 'ESTIMATING';
    const ESTIMATED = 'ESTIMATED';
    const ERROR_ON_ESTIMATING = 'ERROR_ON_ESTIMATING';
    const CONFIRMING = 'CONFIRMING';
    const CONFIRMED = 'CONFIRMED';
    const ERROR_ON_CONFIRMING = 'ERROR_ON_CONFIRMING';
    const VOIDING = 'VOIDING';
    const VOIDED = 'VOIDED';
    const ERROR_IN_VOIDING = 'ERROR_IN_VOIDING';
    const ERROR = 'ERROR';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        $baseVals = [
            self::WORKING,
            self::ESTIMATING,
            self::ESTIMATED,
            self::ERROR_ON_ESTIMATING,
            self::CONFIRMING,
            self::CONFIRMED,
            self::ERROR_ON_CONFIRMING,
            self::VOIDING,
            self::VOIDED,
            self::ERROR_IN_VOIDING,
            self::ERROR,
        ];
        // This is necessary because Amazon does not consistently capitalize their
        // enum values, so we do case-insensitive enum value validation in ObjectSerializer
        $ucVals = array_map(function ($val) { return strtoupper($val); }, $baseVals);
        return array_merge($baseVals, $ucVals);
    }

    public function __construct($value)
    {
        if (is_null($value) || !in_array($value, self::getAllowableEnumValues(), true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value for enum 'TransportStatus', must be one of '%s'", implode("', '", self::getAllowableEnumValues())));
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


