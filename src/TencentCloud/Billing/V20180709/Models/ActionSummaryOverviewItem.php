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
 * Detailed summary of costs by transaction type
 *
 * @method string getActionType() Obtain Transaction type code
 * @method void setActionType(string $ActionType) Set Transaction type code
 * @method string getActionTypeName() Obtain Transaction type, which can be monthly subscription purchase, monthly subscription renewal, or pay-as-you-go deduction.
 * @method void setActionTypeName(string $ActionTypeName) Set Transaction type, which can be monthly subscription purchase, monthly subscription renewal, or pay-as-you-go deduction.
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
 * @method string getTransferPayAmount() Obtain Commission credit: The amount paid with the user’s commission credit. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTransferPayAmount(string $TransferPayAmount) Set Commission credit: The amount paid with the user’s commission credit. Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBillMonth() Obtain Billing month, e.g. `2019-08`
 * @method void setBillMonth(string $BillMonth) Set Billing month, e.g. `2019-08`
 * @method string getTotalCost() Obtain The original cost in USD. This parameter has become valid since v3.0 bills took effect in May 2021, and before that `-` was returned for this parameter. If a customer uses a contract price different from the published price, `-` will also be returned for this parameter.
 * @method void setTotalCost(string $TotalCost) Set The original cost in USD. This parameter has become valid since v3.0 bills took effect in May 2021, and before that `-` was returned for this parameter. If a customer uses a contract price different from the published price, `-` will also be returned for this parameter.
 */
class ActionSummaryOverviewItem extends AbstractModel
{
    /**
     * @var string Transaction type code
     */
    public $ActionType;

    /**
     * @var string Transaction type, which can be monthly subscription purchase, monthly subscription renewal, or pay-as-you-go deduction.
     */
    public $ActionTypeName;

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
     * @var string Commission credit: The amount paid with the user’s commission credit. Note: This field may return null, indicating that no valid values can be obtained.
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
     * @param string $ActionType Transaction type code
     * @param string $ActionTypeName Transaction type, which can be monthly subscription purchase, monthly subscription renewal, or pay-as-you-go deduction.
     * @param string $RealTotalCostRatio Cost ratio, to two decimal points
     * @param string $RealTotalCost Total amount after discount
     * @param string $CashPayAmount Cash credit: The amount paid from the user’s cash account
     * @param string $IncentivePayAmount Free credit: The amount paid with the user’s free credit
     * @param string $VoucherPayAmount Voucher payment: The voucher deduction amount
     * @param string $TransferPayAmount Commission credit: The amount paid with the user’s commission credit. Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("ActionTypeName",$param) and $param["ActionTypeName"] !== null) {
            $this->ActionTypeName = $param["ActionTypeName"];
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
