<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AffordabilityExpenseEvent extends BaseDto
{
    /**
     * @param  Currency  $taxTypeCgst A currency type and amount.
     * @param  Currency  $taxTypeSgst A currency type and amount.
     * @param  Currency  $taxTypeIgst A currency type and amount.
     * @param  ?string  $amazonOrderId An Amazon-defined identifier for an order.
     * @param  ?string  $postedDate
     * @param  ?string  $marketplaceId An encrypted, Amazon-defined marketplace identifier.
     * @param  ?string  $transactionType Indicates the type of transaction.
     *
     * Possible values:
     *
     * * Charge - For an affordability promotion expense.
     *
     * * Refund - For an affordability promotion expense reversal.
     * @param  ?Currency  $baseExpense A currency type and amount.
     * @param  ?Currency  $totalExpense A currency type and amount.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly Currency $taxTypeCgst,
        public readonly Currency $taxTypeSgst,
        public readonly Currency $taxTypeIgst,
        public readonly ?string $amazonOrderId = null,
        public readonly ?string $postedDate = null,
        public readonly ?string $marketplaceId = null,
        public readonly ?string $transactionType = null,
        public readonly ?Currency $baseExpense = null,
        public readonly ?Currency $totalExpense = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
