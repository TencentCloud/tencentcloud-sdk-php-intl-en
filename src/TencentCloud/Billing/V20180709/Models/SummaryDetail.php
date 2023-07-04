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
 * Detailed summary of costs by multiple dimensions
 *
 * @method string getGroupKey() Obtain Bill dimension code. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGroupKey(string $GroupKey) Set Bill dimension code. Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getGroupValue() Obtain Bill dimension value. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGroupValue(string $GroupValue) Set Bill dimension value. Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTotalCost() Obtain Original cost in USD. This parameter has become valid since Bill 3.0 took effect in May 2021, and before that `-` was returned for this parameter. If a customer has applied for a contract price different from the prices listed on the official website, `-` will also be returned for this parameter.
 * @method void setTotalCost(string $TotalCost) Set Original cost in USD. This parameter has become valid since Bill 3.0 took effect in May 2021, and before that `-` was returned for this parameter. If a customer has applied for a contract price different from the prices listed on the official website, `-` will also be returned for this parameter.
 * @method string getRealTotalCost() Obtain Total amount after discount
 * @method void setRealTotalCost(string $RealTotalCost) Set Total amount after discount
 * @method string getCashPayAmount() Obtain Cash credit: The amount paid from the user’s cash account
 * @method void setCashPayAmount(string $CashPayAmount) Set Cash credit: The amount paid from the user’s cash account
 * @method string getIncentivePayAmount() Obtain Free credit: The amount paid with the user’s free credit
 * @method void setIncentivePayAmount(string $IncentivePayAmount) Set Free credit: The amount paid with the user’s free credit
 * @method string getVoucherPayAmount() Obtain Voucher payment: The voucher deduction amount
 * @method void setVoucherPayAmount(string $VoucherPayAmount) Set Voucher payment: The voucher deduction amount
 * @method string getTransferPayAmount() Obtain Commission credit: The amount paid with the user’s commission credit. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTransferPayAmount(string $TransferPayAmount) Set Commission credit: The amount paid with the user’s commission credit. Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getBusiness() Obtain Detailed summary of products. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBusiness(array $Business) Set Detailed summary of products. Note: This field may return null, indicating that no valid values can be obtained.
 */
class SummaryDetail extends AbstractModel
{
    /**
     * @var string Bill dimension code. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GroupKey;

    /**
     * @var string Bill dimension value. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GroupValue;

    /**
     * @var string Original cost in USD. This parameter has become valid since Bill 3.0 took effect in May 2021, and before that `-` was returned for this parameter. If a customer has applied for a contract price different from the prices listed on the official website, `-` will also be returned for this parameter.
     */
    public $TotalCost;

    /**
     * @var string Total amount after discount
     */
    public $RealTotalCost;

    /**
     * @var string Cash credit: The amount paid from the user’s cash account
     */
    public $CashPayAmount;

    /**
     * @var string Free credit: The amount paid with the user’s free credit
     */
    public $IncentivePayAmount;

    /**
     * @var string Voucher payment: The voucher deduction amount
     */
    public $VoucherPayAmount;

    /**
     * @var string Commission credit: The amount paid with the user’s commission credit. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TransferPayAmount;

    /**
     * @var array Detailed summary of products. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Business;

    /**
     * @param string $GroupKey Bill dimension code. Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $GroupValue Bill dimension value. Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TotalCost Original cost in USD. This parameter has become valid since Bill 3.0 took effect in May 2021, and before that `-` was returned for this parameter. If a customer has applied for a contract price different from the prices listed on the official website, `-` will also be returned for this parameter.
     * @param string $RealTotalCost Total amount after discount
     * @param string $CashPayAmount Cash credit: The amount paid from the user’s cash account
     * @param string $IncentivePayAmount Free credit: The amount paid with the user’s free credit
     * @param string $VoucherPayAmount Voucher payment: The voucher deduction amount
     * @param string $TransferPayAmount Commission credit: The amount paid with the user’s commission credit. Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Business Detailed summary of products. Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("GroupKey",$param) and $param["GroupKey"] !== null) {
            $this->GroupKey = $param["GroupKey"];
        }

        if (array_key_exists("GroupValue",$param) and $param["GroupValue"] !== null) {
            $this->GroupValue = $param["GroupValue"];
        }

        if (array_key_exists("TotalCost",$param) and $param["TotalCost"] !== null) {
            $this->TotalCost = $param["TotalCost"];
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

        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = [];
            foreach ($param["Business"] as $key => $value){
                $obj = new BusinessSummaryInfo();
                $obj->deserialize($value);
                array_push($this->Business, $obj);
            }
        }
    }
}
