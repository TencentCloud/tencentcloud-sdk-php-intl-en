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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The cost of a prepaid order.
 *
 * @method float getOriginalPrice() Obtain Original price of the advanced payment for a prepaid cloud disk or snapshot (in CNY).
 * @method void setOriginalPrice(float $OriginalPrice) Set Original price of the advanced payment for a prepaid cloud disk or snapshot (in CNY).
 * @method float getDiscountPrice() Obtain Discount price of the advanced payment for a prepaid cloud disk or snapshot (in CNY).
 * @method void setDiscountPrice(float $DiscountPrice) Set Discount price of the advanced payment for a prepaid cloud disk or snapshot (in CNY).
 * @method string getOriginalPriceHigh() Obtain Highly-precise published unit price of a monthly-subscribed cloud disk or a snapshot, in USD.
 * @method void setOriginalPriceHigh(string $OriginalPriceHigh) Set Highly-precise published unit price of a monthly-subscribed cloud disk or a snapshot, in USD.
 * @method string getDiscountPriceHigh() Obtain Highly-precise discounted unit price of a monthly-subscribed cloud disk or a snapshot, in USD.
 * @method void setDiscountPriceHigh(string $DiscountPriceHigh) Set Highly-precise discounted unit price of a monthly-subscribed cloud disk or a snapshot, in USD.
 * @method string getUnitPrice() Obtain Published unit price of a pay-as-you-go cloud disk, in USD.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setUnitPrice(string $UnitPrice) Set Published unit price of a pay-as-you-go cloud disk, in USD.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getChargeUnit() Obtain Billing unit for pay-as-you-go cloud disks. Valid value: <br><li>HOUR: billed hourly.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setChargeUnit(string $ChargeUnit) Set Billing unit for pay-as-you-go cloud disks. Valid value: <br><li>HOUR: billed hourly.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getUnitPriceDiscount() Obtain Discount unit price of a pay-as-you-go cloud disk, in USD.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setUnitPriceDiscount(string $UnitPriceDiscount) Set Discount unit price of a pay-as-you-go cloud disk, in USD.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getUnitPriceHigh() Obtain Highly-precise published unit price of a pay-as-you-go cloud disk, in USD.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setUnitPriceHigh(string $UnitPriceHigh) Set Highly-precise published unit price of a pay-as-you-go cloud disk, in USD.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getUnitPriceDiscountHigh() Obtain Highly-precise discounted unit price of a pay-as-you-go cloud disk, in USD.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setUnitPriceDiscountHigh(string $UnitPriceDiscountHigh) Set Highly-precise discounted unit price of a pay-as-you-go cloud disk, in USD.
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class PrepayPrice extends AbstractModel
{
    /**
     * @var float Original price of the advanced payment for a prepaid cloud disk or snapshot (in CNY).
     */
    public $OriginalPrice;

    /**
     * @var float Discount price of the advanced payment for a prepaid cloud disk or snapshot (in CNY).
     */
    public $DiscountPrice;

    /**
     * @var string Highly-precise published unit price of a monthly-subscribed cloud disk or a snapshot, in USD.
     */
    public $OriginalPriceHigh;

    /**
     * @var string Highly-precise discounted unit price of a monthly-subscribed cloud disk or a snapshot, in USD.
     */
    public $DiscountPriceHigh;

    /**
     * @var string Published unit price of a pay-as-you-go cloud disk, in USD.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $UnitPrice;

    /**
     * @var string Billing unit for pay-as-you-go cloud disks. Valid value: <br><li>HOUR: billed hourly.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ChargeUnit;

    /**
     * @var string Discount unit price of a pay-as-you-go cloud disk, in USD.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $UnitPriceDiscount;

    /**
     * @var string Highly-precise published unit price of a pay-as-you-go cloud disk, in USD.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $UnitPriceHigh;

    /**
     * @var string Highly-precise discounted unit price of a pay-as-you-go cloud disk, in USD.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $UnitPriceDiscountHigh;

    /**
     * @param float $OriginalPrice Original price of the advanced payment for a prepaid cloud disk or snapshot (in CNY).
     * @param float $DiscountPrice Discount price of the advanced payment for a prepaid cloud disk or snapshot (in CNY).
     * @param string $OriginalPriceHigh Highly-precise published unit price of a monthly-subscribed cloud disk or a snapshot, in USD.
     * @param string $DiscountPriceHigh Highly-precise discounted unit price of a monthly-subscribed cloud disk or a snapshot, in USD.
     * @param string $UnitPrice Published unit price of a pay-as-you-go cloud disk, in USD.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $ChargeUnit Billing unit for pay-as-you-go cloud disks. Valid value: <br><li>HOUR: billed hourly.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $UnitPriceDiscount Discount unit price of a pay-as-you-go cloud disk, in USD.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $UnitPriceHigh Highly-precise published unit price of a pay-as-you-go cloud disk, in USD.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $UnitPriceDiscountHigh Highly-precise discounted unit price of a pay-as-you-go cloud disk, in USD.
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
        if (array_key_exists("OriginalPrice",$param) and $param["OriginalPrice"] !== null) {
            $this->OriginalPrice = $param["OriginalPrice"];
        }

        if (array_key_exists("DiscountPrice",$param) and $param["DiscountPrice"] !== null) {
            $this->DiscountPrice = $param["DiscountPrice"];
        }

        if (array_key_exists("OriginalPriceHigh",$param) and $param["OriginalPriceHigh"] !== null) {
            $this->OriginalPriceHigh = $param["OriginalPriceHigh"];
        }

        if (array_key_exists("DiscountPriceHigh",$param) and $param["DiscountPriceHigh"] !== null) {
            $this->DiscountPriceHigh = $param["DiscountPriceHigh"];
        }

        if (array_key_exists("UnitPrice",$param) and $param["UnitPrice"] !== null) {
            $this->UnitPrice = $param["UnitPrice"];
        }

        if (array_key_exists("ChargeUnit",$param) and $param["ChargeUnit"] !== null) {
            $this->ChargeUnit = $param["ChargeUnit"];
        }

        if (array_key_exists("UnitPriceDiscount",$param) and $param["UnitPriceDiscount"] !== null) {
            $this->UnitPriceDiscount = $param["UnitPriceDiscount"];
        }

        if (array_key_exists("UnitPriceHigh",$param) and $param["UnitPriceHigh"] !== null) {
            $this->UnitPriceHigh = $param["UnitPriceHigh"];
        }

        if (array_key_exists("UnitPriceDiscountHigh",$param) and $param["UnitPriceDiscountHigh"] !== null) {
            $this->UnitPriceDiscountHigh = $param["UnitPriceDiscountHigh"];
        }
    }
}
