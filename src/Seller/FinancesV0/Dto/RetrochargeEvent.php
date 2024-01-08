<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class RetrochargeEvent extends BaseDto
{
    protected static array $complexArrayTypes = ['retrochargeTaxWithheldList' => [TaxWithheldComponent::class]];

    /**
     * @param  ?string  $retrochargeEventType The type of event.
     *
     * Possible values:
     *
     * * Retrocharge
     *
     * * RetrochargeReversal
     * @param  ?string  $amazonOrderId An Amazon-defined identifier for an order.
     * @param  ?string  $postedDate
     * @param  ?Currency  $baseTax A currency type and amount.
     * @param  ?Currency  $shippingTax A currency type and amount.
     * @param  ?string  $marketplaceName The name of the marketplace where the retrocharge event occurred.
     * @param  TaxWithheldComponent[]  $retrochargeTaxWithheldList A list of information about taxes withheld.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?string $retrochargeEventType = null,
        public readonly ?string $amazonOrderId = null,
        public readonly ?string $postedDate = null,
        public readonly ?Currency $baseTax = null,
        public readonly ?Currency $shippingTax = null,
        public readonly ?string $marketplaceName = null,
        public readonly ?array $retrochargeTaxWithheldList = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
