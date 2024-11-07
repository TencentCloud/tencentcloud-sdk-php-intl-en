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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Billing details
 *
 * @method integer getTotalPrice() Obtain The non-discounted total price of monthly subscribed resources (unit: 0.000001 cent)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalPrice(integer $TotalPrice) Set The non-discounted total price of monthly subscribed resources (unit: 0.000001 cent)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getDiscount() Obtain Total discount. `100` means no discount.
 * @method void setDiscount(float $Discount) Set Total discount. `100` means no discount.
 * @method integer getTotalPriceDiscount() Obtain The discounted total price of monthly subscribed resources (unit: 0.000001 cent). If a discount is applied, `TotalPriceDiscount` will be the product of `TotalPrice` and `Discount`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalPriceDiscount(integer $TotalPriceDiscount) Set The discounted total price of monthly subscribed resources (unit: 0.000001 cent). If a discount is applied, `TotalPriceDiscount` will be the product of `TotalPrice` and `Discount`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getUnitPrice() Obtain The non-discounted unit price of pay-as-you-go resources (unit: 0.000001 cent)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUnitPrice(integer $UnitPrice) Set The non-discounted unit price of pay-as-you-go resources (unit: 0.000001 cent)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getUnitPriceDiscount() Obtain The discounted unit price of pay-as-you-go resources (unit: 0.000001 cent). If a discount is applied, `UnitPriceDiscount` will be the product of `UnitPrice` and `Discount`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUnitPriceDiscount(integer $UnitPriceDiscount) Set The discounted unit price of pay-as-you-go resources (unit: 0.000001 cent). If a discount is applied, `UnitPriceDiscount` will be the product of `UnitPrice` and `Discount`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getChargeUnit() Obtain Price unit
 * @method void setChargeUnit(string $ChargeUnit) Set Price unit
 */
class TradePrice extends AbstractModel
{
    /**
     * @var integer The non-discounted total price of monthly subscribed resources (unit: 0.000001 cent)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalPrice;

    /**
     * @var float Total discount. `100` means no discount.
     */
    public $Discount;

    /**
     * @var integer The discounted total price of monthly subscribed resources (unit: 0.000001 cent). If a discount is applied, `TotalPriceDiscount` will be the product of `TotalPrice` and `Discount`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalPriceDiscount;

    /**
     * @var integer The non-discounted unit price of pay-as-you-go resources (unit: 0.000001 cent)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UnitPrice;

    /**
     * @var integer The discounted unit price of pay-as-you-go resources (unit: 0.000001 cent). If a discount is applied, `UnitPriceDiscount` will be the product of `UnitPrice` and `Discount`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UnitPriceDiscount;

    /**
     * @var string Price unit
     */
    public $ChargeUnit;

    /**
     * @param integer $TotalPrice The non-discounted total price of monthly subscribed resources (unit: 0.000001 cent)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $Discount Total discount. `100` means no discount.
     * @param integer $TotalPriceDiscount The discounted total price of monthly subscribed resources (unit: 0.000001 cent). If a discount is applied, `TotalPriceDiscount` will be the product of `TotalPrice` and `Discount`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $UnitPrice The non-discounted unit price of pay-as-you-go resources (unit: 0.000001 cent)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $UnitPriceDiscount The discounted unit price of pay-as-you-go resources (unit: 0.000001 cent). If a discount is applied, `UnitPriceDiscount` will be the product of `UnitPrice` and `Discount`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ChargeUnit Price unit
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
    }
}
