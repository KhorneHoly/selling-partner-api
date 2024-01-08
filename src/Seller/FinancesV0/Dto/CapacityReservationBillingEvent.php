<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CapacityReservationBillingEvent extends BaseDto
{
    /**
     * @param  ?string  $transactionType Indicates the type of transaction. For example, FBA Inventory Fee
     * @param  ?string  $postedDate
     * @param  ?string  $description A short description of the capacity reservation billing event.
     * @param  ?Currency  $transactionAmount A currency type and amount.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?string $transactionType = null,
        public readonly ?string $postedDate = null,
        public readonly ?string $description = null,
        public readonly ?Currency $transactionAmount = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
