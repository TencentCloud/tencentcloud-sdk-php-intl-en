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
 * @method string getActionType() Obtain Transaction type
 * @method void setActionType(string $ActionType) Set Transaction type
 * @method string getActionTypeName() Obtain Transaction type name
 * @method void setActionTypeName(string $ActionTypeName) Set Transaction type name
 * @method string getRealTotalCost() Obtain Actual cost
 * @method void setRealTotalCost(string $RealTotalCost) Set Actual cost
 * @method string getRealTotalCostRatio() Obtain Cost ratio, to two decimal points
 * @method void setRealTotalCostRatio(string $RealTotalCostRatio) Set Cost ratio, to two decimal points
 * @method string getCashPayAmount() Obtain Cash amount
 * @method void setCashPayAmount(string $CashPayAmount) Set Cash amount
 * @method string getIncentivePayAmount() Obtain Trial credit amount
 * @method void setIncentivePayAmount(string $IncentivePayAmount) Set Trial credit amount
 * @method string getVoucherPayAmount() Obtain Voucher amount
 * @method void setVoucherPayAmount(string $VoucherPayAmount) Set Voucher amount
 * @method string getBillMonth() Obtain Billing month, e.g. `2019-08`
 * @method void setBillMonth(string $BillMonth) Set Billing month, e.g. `2019-08`
 */
class ActionSummaryOverviewItem extends AbstractModel
{
    /**
     * @var string Transaction type
     */
    public $ActionType;

    /**
     * @var string Transaction type name
     */
    public $ActionTypeName;

    /**
     * @var string Actual cost
     */
    public $RealTotalCost;

    /**
     * @var string Cost ratio, to two decimal points
     */
    public $RealTotalCostRatio;

    /**
     * @var string Cash amount
     */
    public $CashPayAmount;

    /**
     * @var string Trial credit amount
     */
    public $IncentivePayAmount;

    /**
     * @var string Voucher amount
     */
    public $VoucherPayAmount;

    /**
     * @var string Billing month, e.g. `2019-08`
     */
    public $BillMonth;

    /**
     * @param string $ActionType Transaction type
     * @param string $ActionTypeName Transaction type name
     * @param string $RealTotalCost Actual cost
     * @param string $RealTotalCostRatio Cost ratio, to two decimal points
     * @param string $CashPayAmount Cash amount
     * @param string $IncentivePayAmount Trial credit amount
     * @param string $VoucherPayAmount Voucher amount
     * @param string $BillMonth Billing month, e.g. `2019-08`
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

        if (array_key_exists("RealTotalCost",$param) and $param["RealTotalCost"] !== null) {
            $this->RealTotalCost = $param["RealTotalCost"];
        }

        if (array_key_exists("RealTotalCostRatio",$param) and $param["RealTotalCostRatio"] !== null) {
            $this->RealTotalCostRatio = $param["RealTotalCostRatio"];
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

        if (array_key_exists("BillMonth",$param) and $param["BillMonth"] !== null) {
            $this->BillMonth = $param["BillMonth"];
        }
    }
}
