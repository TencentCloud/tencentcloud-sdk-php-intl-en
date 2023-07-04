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
 * Summarize product details by product
 *
 * @method string getBusinessCode() Obtain Product code. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBusinessCode(string $BusinessCode) Set Product code. Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBusinessCodeName() Obtain Product name: The name of a Tencent Cloud product purchased by the user, such as CVM.
 * @method void setBusinessCodeName(string $BusinessCodeName) Set Product name: The name of a Tencent Cloud product purchased by the user, such as CVM.
 * @method string getRealTotalCostRatio() Obtain Cost ratio, to two decimal points
 * @method void setRealTotalCostRatio(string $RealTotalCostRatio) Set Cost ratio, to two decimal points
 * @method string getRealTotalCost() Obtain Total amount after discount
 * @method void setRealTotalCost(string $RealTotalCost) Set Total amount after discount
 * @method string getCashPayAmount() Obtain Cash credit: The amount paid from the user’s cash account
 * @method void setCashPayAmount(string $CashPayAmount) Set Cash credit: The amount paid from the user’s cash account
 * @method string getIncentivePayAmount() Obtain Free credit: The amount paid with the user’s free credit
 * @method void setIncentivePayAmount(string $IncentivePayAmount) Set Free credit: The amount paid with the user’s free credit
 * @method string getVoucherPayAmount() Obtain Voucher payment: The voucher deduction amount
 * @method void setVoucherPayAmount(string $VoucherPayAmount) Set Voucher payment: The voucher deduction amount
 * @method string getTransferPayAmount() Obtain Commission credit: The amount paid with the user’s commission credit.
 * @method void setTransferPayAmount(string $TransferPayAmount) Set Commission credit: The amount paid with the user’s commission credit.
 * @method string getBillMonth() Obtain Billing month, e.g. `2019-08`
 * @method void setBillMonth(string $BillMonth) Set Billing month, e.g. `2019-08`
 * @method string getTotalCost() Obtain The original cost in USD. This parameter has become valid since v3.0 bills took effect in May 2021, and before that `-` was returned for this parameter. If a customer uses a contract price different from the published price, `-` will also be returned for this parameter.
 * @method void setTotalCost(string $TotalCost) Set The original cost in USD. This parameter has become valid since v3.0 bills took effect in May 2021, and before that `-` was returned for this parameter. If a customer uses a contract price different from the published price, `-` will also be returned for this parameter.
 */
class BusinessSummaryOverviewItem extends AbstractModel
{
    /**
     * @var string Product code. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BusinessCode;

    /**
     * @var string Product name: The name of a Tencent Cloud product purchased by the user, such as CVM.
     */
    public $BusinessCodeName;

    /**
     * @var string Cost ratio, to two decimal points
     */
    public $RealTotalCostRatio;

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
     * @var string Commission credit: The amount paid with the user’s commission credit.
     */
    public $TransferPayAmount;

    /**
     * @var string Billing month, e.g. `2019-08`
     */
    public $BillMonth;

    /**
     * @var string The original cost in USD. This parameter has become valid since v3.0 bills took effect in May 2021, and before that `-` was returned for this parameter. If a customer uses a contract price different from the published price, `-` will also be returned for this parameter.
     */
    public $TotalCost;

    /**
     * @param string $BusinessCode Product code. Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BusinessCodeName Product name: The name of a Tencent Cloud product purchased by the user, such as CVM.
     * @param string $RealTotalCostRatio Cost ratio, to two decimal points
     * @param string $RealTotalCost Total amount after discount
     * @param string $CashPayAmount Cash credit: The amount paid from the user’s cash account
     * @param string $IncentivePayAmount Free credit: The amount paid with the user’s free credit
     * @param string $VoucherPayAmount Voucher payment: The voucher deduction amount
     * @param string $TransferPayAmount Commission credit: The amount paid with the user’s commission credit.
     * @param string $BillMonth Billing month, e.g. `2019-08`
     * @param string $TotalCost The original cost in USD. This parameter has become valid since v3.0 bills took effect in May 2021, and before that `-` was returned for this parameter. If a customer uses a contract price different from the published price, `-` will also be returned for this parameter.
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
        if (array_key_exists("BusinessCode",$param) and $param["BusinessCode"] !== null) {
            $this->BusinessCode = $param["BusinessCode"];
        }

        if (array_key_exists("BusinessCodeName",$param) and $param["BusinessCodeName"] !== null) {
            $this->BusinessCodeName = $param["BusinessCodeName"];
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

        if (array_key_exists("BillMonth",$param) and $param["BillMonth"] !== null) {
            $this->BillMonth = $param["BillMonth"];
        }

        if (array_key_exists("TotalCost",$param) and $param["TotalCost"] !== null) {
            $this->TotalCost = $param["TotalCost"];
        }
    }
}
