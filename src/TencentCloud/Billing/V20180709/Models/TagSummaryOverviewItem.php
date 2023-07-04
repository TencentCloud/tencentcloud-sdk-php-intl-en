<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTagValue(string $TagValue) Set Tag value
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRealTotalCostRatio() Obtain Cost percentage rounded to two decimal places
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRealTotalCostRatio(string $RealTotalCostRatio) Set Cost percentage rounded to two decimal places
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRealTotalCost() Obtain Total amount after discount. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRealTotalCost(string $RealTotalCost) Set Total amount after discount. Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCashPayAmount() Obtain Cash credit: The amount paid from the user’s cash account. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCashPayAmount(string $CashPayAmount) Set Cash credit: The amount paid from the user’s cash account. Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIncentivePayAmount() Obtain Free credit: The amount paid with the user’s free credit. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIncentivePayAmount(string $IncentivePayAmount) Set Free credit: The amount paid with the user’s free credit. Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVoucherPayAmount() Obtain Voucher payment: The amount deducted by using vouchers. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVoucherPayAmount(string $VoucherPayAmount) Set Voucher payment: The amount deducted by using vouchers. Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTransferPayAmount() Obtain Commission credit: The amount paid with the user’s commission credit. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTransferPayAmount(string $TransferPayAmount) Set Commission credit: The amount paid with the user’s commission credit. Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTotalCost() Obtain The original cost in USD. This parameter has become valid since v3.0 bills took effect in May 2021, and before that `-` was returned for this parameter. If a customer uses a contract price different from the published price, `-` will also be returned for this parameter.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTotalCost(string $TotalCost) Set The original cost in USD. This parameter has become valid since v3.0 bills took effect in May 2021, and before that `-` was returned for this parameter. If a customer uses a contract price different from the published price, `-` will also be returned for this parameter.
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class TagSummaryOverviewItem extends AbstractModel
{
    /**
     * @var string Tag value
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TagValue;

    /**
     * @var string Cost percentage rounded to two decimal places
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RealTotalCostRatio;

    /**
     * @var string Total amount after discount. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RealTotalCost;

    /**
     * @var string Cash credit: The amount paid from the user’s cash account. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CashPayAmount;

    /**
     * @var string Free credit: The amount paid with the user’s free credit. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IncentivePayAmount;

    /**
     * @var string Voucher payment: The amount deducted by using vouchers. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VoucherPayAmount;

    /**
     * @var string Commission credit: The amount paid with the user’s commission credit. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TransferPayAmount;

    /**
     * @var string The original cost in USD. This parameter has become valid since v3.0 bills took effect in May 2021, and before that `-` was returned for this parameter. If a customer uses a contract price different from the published price, `-` will also be returned for this parameter.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $TotalCost;

    /**
     * @param string $TagValue Tag value
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RealTotalCostRatio Cost percentage rounded to two decimal places
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RealTotalCost Total amount after discount. Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CashPayAmount Cash credit: The amount paid from the user’s cash account. Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IncentivePayAmount Free credit: The amount paid with the user’s free credit. Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VoucherPayAmount Voucher payment: The amount deducted by using vouchers. Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TransferPayAmount Commission credit: The amount paid with the user’s commission credit. Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TotalCost The original cost in USD. This parameter has become valid since v3.0 bills took effect in May 2021, and before that `-` was returned for this parameter. If a customer uses a contract price different from the published price, `-` will also be returned for this parameter.
Note: this field may return `null`, indicating that no valid values can be obtained.
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
