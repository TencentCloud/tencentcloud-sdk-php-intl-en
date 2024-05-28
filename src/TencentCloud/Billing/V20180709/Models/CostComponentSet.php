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
 * Consumption component details
 *
 * @method string getComponentCodeName() Obtain Component type name
 * @method void setComponentCodeName(string $ComponentCodeName) Set Component type name
 * @method string getItemCodeName() Obtain Component name
 * @method void setItemCodeName(string $ItemCodeName) Set Component name
 * @method string getSinglePrice() Obtain List price
 * @method void setSinglePrice(string $SinglePrice) Set List price
 * @method string getPriceUnit() Obtain List price unit
 * @method void setPriceUnit(string $PriceUnit) Set List price unit
 * @method string getUsedAmount() Obtain Usage
 * @method void setUsedAmount(string $UsedAmount) Set Usage
 * @method string getUsedAmountUnit() Obtain Usage unit
 * @method void setUsedAmountUnit(string $UsedAmountUnit) Set Usage unit
 * @method string getCost() Obtain Original price
 * @method void setCost(string $Cost) Set Original price
 * @method string getDiscount() Obtain Discount
 * @method void setDiscount(string $Discount) Set Discount
 * @method string getRealCost() Obtain Discounted price
 * @method void setRealCost(string $RealCost) Set Discounted price
 * @method string getVoucherPayAmount() Obtain Voucher payment amount
 * @method void setVoucherPayAmount(string $VoucherPayAmount) Set Voucher payment amount
 * @method string getCashPayAmount() Obtain Cash payment amount
 * @method void setCashPayAmount(string $CashPayAmount) Set Cash payment amount
 * @method string getIncentivePayAmount() Obtain Bonus payment amount
 * @method void setIncentivePayAmount(string $IncentivePayAmount) Set Bonus payment amount
 */
class CostComponentSet extends AbstractModel
{
    /**
     * @var string Component type name
     */
    public $ComponentCodeName;

    /**
     * @var string Component name
     */
    public $ItemCodeName;

    /**
     * @var string List price
     */
    public $SinglePrice;

    /**
     * @var string List price unit
     */
    public $PriceUnit;

    /**
     * @var string Usage
     */
    public $UsedAmount;

    /**
     * @var string Usage unit
     */
    public $UsedAmountUnit;

    /**
     * @var string Original price
     */
    public $Cost;

    /**
     * @var string Discount
     */
    public $Discount;

    /**
     * @var string Discounted price
     */
    public $RealCost;

    /**
     * @var string Voucher payment amount
     */
    public $VoucherPayAmount;

    /**
     * @var string Cash payment amount
     */
    public $CashPayAmount;

    /**
     * @var string Bonus payment amount
     */
    public $IncentivePayAmount;

    /**
     * @param string $ComponentCodeName Component type name
     * @param string $ItemCodeName Component name
     * @param string $SinglePrice List price
     * @param string $PriceUnit List price unit
     * @param string $UsedAmount Usage
     * @param string $UsedAmountUnit Usage unit
     * @param string $Cost Original price
     * @param string $Discount Discount
     * @param string $RealCost Discounted price
     * @param string $VoucherPayAmount Voucher payment amount
     * @param string $CashPayAmount Cash payment amount
     * @param string $IncentivePayAmount Bonus payment amount
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
        if (array_key_exists("ComponentCodeName",$param) and $param["ComponentCodeName"] !== null) {
            $this->ComponentCodeName = $param["ComponentCodeName"];
        }

        if (array_key_exists("ItemCodeName",$param) and $param["ItemCodeName"] !== null) {
            $this->ItemCodeName = $param["ItemCodeName"];
        }

        if (array_key_exists("SinglePrice",$param) and $param["SinglePrice"] !== null) {
            $this->SinglePrice = $param["SinglePrice"];
        }

        if (array_key_exists("PriceUnit",$param) and $param["PriceUnit"] !== null) {
            $this->PriceUnit = $param["PriceUnit"];
        }

        if (array_key_exists("UsedAmount",$param) and $param["UsedAmount"] !== null) {
            $this->UsedAmount = $param["UsedAmount"];
        }

        if (array_key_exists("UsedAmountUnit",$param) and $param["UsedAmountUnit"] !== null) {
            $this->UsedAmountUnit = $param["UsedAmountUnit"];
        }

        if (array_key_exists("Cost",$param) and $param["Cost"] !== null) {
            $this->Cost = $param["Cost"];
        }

        if (array_key_exists("Discount",$param) and $param["Discount"] !== null) {
            $this->Discount = $param["Discount"];
        }

        if (array_key_exists("RealCost",$param) and $param["RealCost"] !== null) {
            $this->RealCost = $param["RealCost"];
        }

        if (array_key_exists("VoucherPayAmount",$param) and $param["VoucherPayAmount"] !== null) {
            $this->VoucherPayAmount = $param["VoucherPayAmount"];
        }

        if (array_key_exists("CashPayAmount",$param) and $param["CashPayAmount"] !== null) {
            $this->CashPayAmount = $param["CashPayAmount"];
        }

        if (array_key_exists("IncentivePayAmount",$param) and $param["IncentivePayAmount"] !== null) {
            $this->IncentivePayAmount = $param["IncentivePayAmount"];
        }
    }
}
