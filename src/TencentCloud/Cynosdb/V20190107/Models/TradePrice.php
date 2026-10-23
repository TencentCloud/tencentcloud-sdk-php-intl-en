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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Billing inquiry result
 *
 * @method integer getTotalPrice() Obtain Resource total price under prepaid mode, excluding discounts. Unit: cent.
 * @method void setTotalPrice(integer $TotalPrice) Set Resource total price under prepaid mode, excluding discounts. Unit: cent.
 * @method float getDiscount() Obtain Total discount. 100 means 100% no discount.
 * @method void setDiscount(float $Discount) Set Total discount. 100 means 100% no discount.
 * @method integer getTotalPriceDiscount() Obtain Discounted total price under prepaid mode, unit: cent. For example, if a user enjoys a discount, it is TotalPrice × Discount.
 * @method void setTotalPriceDiscount(integer $TotalPriceDiscount) Set Discounted total price under prepaid mode, unit: cent. For example, if a user enjoys a discount, it is TotalPrice × Discount.
 * @method integer getUnitPrice() Obtain Unit resource price in postpaid mode, excluding discounts. Unit: cent
 * @method void setUnitPrice(integer $UnitPrice) Set Unit resource price in postpaid mode, excluding discounts. Unit: cent
 * @method integer getUnitPriceDiscount() Obtain Unit resource price under postpaid mode after Discount, unit: cent. For example, if a user enjoys a Discount, it is UnitPrice × Discount.
 * @method void setUnitPriceDiscount(integer $UnitPriceDiscount) Set Unit resource price under postpaid mode after Discount, unit: cent. For example, if a user enjoys a Discount, it is UnitPrice × Discount.
 * @method string getChargeUnit() Obtain Billing price unit
 * @method void setChargeUnit(string $ChargeUnit) Set Billing price unit
 * @method string getUnitPriceHighPrecision() Obtain High-precision price excluding discounts
 * @method void setUnitPriceHighPrecision(string $UnitPriceHighPrecision) Set High-precision price excluding discounts
 * @method string getUnitPriceDiscountHighPrecision() Obtain Discounted price at high precision
 * @method void setUnitPriceDiscountHighPrecision(string $UnitPriceDiscountHighPrecision) Set Discounted price at high precision
 * @method string getAmountUnit() Obtain Currency unit.
 * @method void setAmountUnit(string $AmountUnit) Set Currency unit.
 */
class TradePrice extends AbstractModel
{
    /**
     * @var integer Resource total price under prepaid mode, excluding discounts. Unit: cent.
     */
    public $TotalPrice;

    /**
     * @var float Total discount. 100 means 100% no discount.
     */
    public $Discount;

    /**
     * @var integer Discounted total price under prepaid mode, unit: cent. For example, if a user enjoys a discount, it is TotalPrice × Discount.
     */
    public $TotalPriceDiscount;

    /**
     * @var integer Unit resource price in postpaid mode, excluding discounts. Unit: cent
     */
    public $UnitPrice;

    /**
     * @var integer Unit resource price under postpaid mode after Discount, unit: cent. For example, if a user enjoys a Discount, it is UnitPrice × Discount.
     */
    public $UnitPriceDiscount;

    /**
     * @var string Billing price unit
     */
    public $ChargeUnit;

    /**
     * @var string High-precision price excluding discounts
     */
    public $UnitPriceHighPrecision;

    /**
     * @var string Discounted price at high precision
     */
    public $UnitPriceDiscountHighPrecision;

    /**
     * @var string Currency unit.
     */
    public $AmountUnit;

    /**
     * @param integer $TotalPrice Resource total price under prepaid mode, excluding discounts. Unit: cent.
     * @param float $Discount Total discount. 100 means 100% no discount.
     * @param integer $TotalPriceDiscount Discounted total price under prepaid mode, unit: cent. For example, if a user enjoys a discount, it is TotalPrice × Discount.
     * @param integer $UnitPrice Unit resource price in postpaid mode, excluding discounts. Unit: cent
     * @param integer $UnitPriceDiscount Unit resource price under postpaid mode after Discount, unit: cent. For example, if a user enjoys a Discount, it is UnitPrice × Discount.
     * @param string $ChargeUnit Billing price unit
     * @param string $UnitPriceHighPrecision High-precision price excluding discounts
     * @param string $UnitPriceDiscountHighPrecision Discounted price at high precision
     * @param string $AmountUnit Currency unit.
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
        if (array_key_exists("TotalPrice",$param) and $param["TotalPrice"] !== null) {
            $this->TotalPrice = $param["TotalPrice"];
        }

        if (array_key_exists("Discount",$param) and $param["Discount"] !== null) {
            $this->Discount = $param["Discount"];
        }

        if (array_key_exists("TotalPriceDiscount",$param) and $param["TotalPriceDiscount"] !== null) {
            $this->TotalPriceDiscount = $param["TotalPriceDiscount"];
        }

        if (array_key_exists("UnitPrice",$param) and $param["UnitPrice"] !== null) {
            $this->UnitPrice = $param["UnitPrice"];
        }

        if (array_key_exists("UnitPriceDiscount",$param) and $param["UnitPriceDiscount"] !== null) {
            $this->UnitPriceDiscount = $param["UnitPriceDiscount"];
        }

        if (array_key_exists("ChargeUnit",$param) and $param["ChargeUnit"] !== null) {
            $this->ChargeUnit = $param["ChargeUnit"];
        }

        if (array_key_exists("UnitPriceHighPrecision",$param) and $param["UnitPriceHighPrecision"] !== null) {
            $this->UnitPriceHighPrecision = $param["UnitPriceHighPrecision"];
        }

        if (array_key_exists("UnitPriceDiscountHighPrecision",$param) and $param["UnitPriceDiscountHighPrecision"] !== null) {
            $this->UnitPriceDiscountHighPrecision = $param["UnitPriceDiscountHighPrecision"];
        }

        if (array_key_exists("AmountUnit",$param) and $param["AmountUnit"] !== null) {
            $this->AmountUnit = $param["AmountUnit"];
        }
    }
}
