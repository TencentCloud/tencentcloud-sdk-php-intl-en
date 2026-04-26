<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details about cost distribution over different tags.
 *
 * @method string getTagValue() Obtain Tag value
 * @method void setTagValue(string $TagValue) Set Tag value
 * @method string getRealTotalCostRatio() Obtain Percentage of the fee, with 2 decimal places.
 * @method void setRealTotalCostRatio(string $RealTotalCostRatio) Set Percentage of the fee, with 2 decimal places.
 * @method string getRealTotalCost() Obtain discounted total price
 * @method void setRealTotalCost(string $RealTotalCost) Set discounted total price
 * @method string getCashPayAmount() Obtain Cash account expenditure: The amount paid through the cash account
 * @method void setCashPayAmount(string $CashPayAmount) Set Cash account expenditure: The amount paid through the cash account
 * @method string getIncentivePayAmount() Obtain Gift account expenditure: The amount paid using free credits
 * @method void setIncentivePayAmount(string $IncentivePayAmount) Set Gift account expenditure: The amount paid using free credits
 * @method string getVoucherPayAmount() Obtain Coupon expenditure: The amount paid using various vouchers (such as vouchers and cash vouchers)
 * @method void setVoucherPayAmount(string $VoucherPayAmount) Set Coupon expenditure: The amount paid using various vouchers (such as vouchers and cash vouchers)
 * @method string getTransferPayAmount() Obtain Royalty account expenditure: The amount paid through the royalty account
 * @method void setTransferPayAmount(string $TransferPayAmount) Set Royalty account expenditure: The amount paid through the royalty account
 * @method string getTotalCost() Obtain Original price in CNY. The TotalCost field comes into effect after bill 3.0 (May 2021) and returns "-" before bill 3.0. In the current situation of contract price, the TotalCost field returns "-" if a price difference exists with the official website price.
 * @method void setTotalCost(string $TotalCost) Set Original price in CNY. The TotalCost field comes into effect after bill 3.0 (May 2021) and returns "-" before bill 3.0. In the current situation of contract price, the TotalCost field returns "-" if a price difference exists with the official website price.
 */
class TagSummaryOverviewItem extends AbstractModel
{
    /**
     * @var string Tag value
     */
    public $TagValue;

    /**
     * @var string Percentage of the fee, with 2 decimal places.
     */
    public $RealTotalCostRatio;

    /**
     * @var string discounted total price
     */
    public $RealTotalCost;

    /**
     * @var string Cash account expenditure: The amount paid through the cash account
     */
    public $CashPayAmount;

    /**
     * @var string Gift account expenditure: The amount paid using free credits
     */
    public $IncentivePayAmount;

    /**
     * @var string Coupon expenditure: The amount paid using various vouchers (such as vouchers and cash vouchers)
     */
    public $VoucherPayAmount;

    /**
     * @var string Royalty account expenditure: The amount paid through the royalty account
     */
    public $TransferPayAmount;

    /**
     * @var string Original price in CNY. The TotalCost field comes into effect after bill 3.0 (May 2021) and returns "-" before bill 3.0. In the current situation of contract price, the TotalCost field returns "-" if a price difference exists with the official website price.
     */
    public $TotalCost;

    /**
     * @param string $TagValue Tag value
     * @param string $RealTotalCostRatio Percentage of the fee, with 2 decimal places.
     * @param string $RealTotalCost discounted total price
     * @param string $CashPayAmount Cash account expenditure: The amount paid through the cash account
     * @param string $IncentivePayAmount Gift account expenditure: The amount paid using free credits
     * @param string $VoucherPayAmount Coupon expenditure: The amount paid using various vouchers (such as vouchers and cash vouchers)
     * @param string $TransferPayAmount Royalty account expenditure: The amount paid through the royalty account
     * @param string $TotalCost Original price in CNY. The TotalCost field comes into effect after bill 3.0 (May 2021) and returns "-" before bill 3.0. In the current situation of contract price, the TotalCost field returns "-" if a price difference exists with the official website price.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TagValue",$param) and $param["TagValue"] !== null) {
            $this->TagValue = $param["TagValue"];
        }

        if (array_key_exists("RealTotalCostRatio",$param) and $param["RealTotalCostRatio"] !== null) {
            $this->RealTotalCostRatio = $param["RealTotalCostRatio"];
        }

        if (array_key_exists("RealTotalCost",$param) and $param["RealTotalCost"] !== null) {
            $this->RealTotalCost = $param["RealTotalCost"];
        }

        if (array_key_exists("CashPayAmount",$param) and $param["CashPayAmount"] !== null) {
            $this->CashPayAmount = $param["CashPayAmount"];
        }

        if (array_key_exists("IncentivePayAmount",$param) and $param["IncentivePayAmount"] !== null) {
            $this->IncentivePayAmount = $param["IncentivePayAmount"];
        }

        if (array_key_exists("VoucherPayAmount",$param) and $param["VoucherPayAmount"] !== null) {
            $this->VoucherPayAmount = $param["VoucherPayAmount"];
        }

        if (array_key_exists("TransferPayAmount",$param) and $param["TransferPayAmount"] !== null) {
            $this->TransferPayAmount = $param["TransferPayAmount"];
        }

        if (array_key_exists("TotalCost",$param) and $param["TotalCost"] !== null) {
            $this->TotalCost = $param["TotalCost"];
        }
    }
}
