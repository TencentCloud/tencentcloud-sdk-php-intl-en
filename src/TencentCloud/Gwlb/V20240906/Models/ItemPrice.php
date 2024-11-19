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
namespace TencentCloud\Gwlb\V20240906\Models;
use TencentCloud\Common\AbstractModel;

/**
 * It describes the price information of a single item.
 *
 * @method float getUnitPrice() Obtain Postpaid unit price. Unit: CNY.

Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUnitPrice(float $UnitPrice) Set Postpaid unit price. Unit: CNY.

Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getChargeUnit() Obtain Pay-as-you-go billing unit. Valid values: HOUR: indicates that the billing unit is calculated by hour. Current scenarios involving this billing unit include: postpaid by hour for instances (POSTPAID_BY_HOUR).Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setChargeUnit(string $ChargeUnit) Set Pay-as-you-go billing unit. Valid values: HOUR: indicates that the billing unit is calculated by hour. Current scenarios involving this billing unit include: postpaid by hour for instances (POSTPAID_BY_HOUR).Note: This field may return null, indicating that no valid value can be obtained.
 * @method float getOriginalPrice() Obtain Original price of pre-payment (in CNY).

Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOriginalPrice(float $OriginalPrice) Set Original price of pre-payment (in CNY).

Note: This field may return null, indicating that no valid value can be obtained.
 * @method float getDiscountPrice() Obtain Discount price of prepaid costs, unit: CNY.

Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDiscountPrice(float $DiscountPrice) Set Discount price of prepaid costs, unit: CNY.

Note: This field may return null, indicating that no valid value can be obtained.
 * @method float getUnitPriceDiscount() Obtain Discounted unit price for pay-as-you-go. Unit: CNY.Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUnitPriceDiscount(float $UnitPriceDiscount) Set Discounted unit price for pay-as-you-go. Unit: CNY.Note: This field may return null, indicating that no valid value can be obtained.
 * @method float getDiscount() Obtain Discount, such as 20.0 representing 80% off.

Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDiscount(float $Discount) Set Discount, such as 20.0 representing 80% off.

Note: This field may return null, indicating that no valid value can be obtained.
 */
class ItemPrice extends AbstractModel
{
    /**
     * @var float Postpaid unit price. Unit: CNY.

Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $UnitPrice;

    /**
     * @var string Pay-as-you-go billing unit. Valid values: HOUR: indicates that the billing unit is calculated by hour. Current scenarios involving this billing unit include: postpaid by hour for instances (POSTPAID_BY_HOUR).Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ChargeUnit;

    /**
     * @var float Original price of pre-payment (in CNY).

Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $OriginalPrice;

    /**
     * @var float Discount price of prepaid costs, unit: CNY.

Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DiscountPrice;

    /**
     * @var float Discounted unit price for pay-as-you-go. Unit: CNY.Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $UnitPriceDiscount;

    /**
     * @var float Discount, such as 20.0 representing 80% off.

Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Discount;

    /**
     * @param float $UnitPrice Postpaid unit price. Unit: CNY.

Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ChargeUnit Pay-as-you-go billing unit. Valid values: HOUR: indicates that the billing unit is calculated by hour. Current scenarios involving this billing unit include: postpaid by hour for instances (POSTPAID_BY_HOUR).Note: This field may return null, indicating that no valid value can be obtained.
     * @param float $OriginalPrice Original price of pre-payment (in CNY).

Note: This field may return null, indicating that no valid value can be obtained.
     * @param float $DiscountPrice Discount price of prepaid costs, unit: CNY.

Note: This field may return null, indicating that no valid value can be obtained.
     * @param float $UnitPriceDiscount Discounted unit price for pay-as-you-go. Unit: CNY.Note: This field may return null, indicating that no valid value can be obtained.
     * @param float $Discount Discount, such as 20.0 representing 80% off.

Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("UnitPrice",$param) and $param["UnitPrice"] !== null) {
            $this->UnitPrice = $param["UnitPrice"];
        }

        if (array_key_exists("ChargeUnit",$param) and $param["ChargeUnit"] !== null) {
            $this->ChargeUnit = $param["ChargeUnit"];
        }

        if (array_key_exists("OriginalPrice",$param) and $param["OriginalPrice"] !== null) {
            $this->OriginalPrice = $param["OriginalPrice"];
        }

        if (array_key_exists("DiscountPrice",$param) and $param["DiscountPrice"] !== null) {
            $this->DiscountPrice = $param["DiscountPrice"];
        }

        if (array_key_exists("UnitPriceDiscount",$param) and $param["UnitPriceDiscount"] !== null) {
            $this->UnitPriceDiscount = $param["UnitPriceDiscount"];
        }

        if (array_key_exists("Discount",$param) and $param["Discount"] !== null) {
            $this->Discount = $param["Discount"];
        }
    }
}
