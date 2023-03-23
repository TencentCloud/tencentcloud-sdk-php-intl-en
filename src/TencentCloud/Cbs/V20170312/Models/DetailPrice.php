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
 * Pricing details for the cloud disk.
 *
 * @method string getPriceTitle() Obtain Name of the billable item.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPriceTitle(string $PriceTitle) Set Name of the billable item.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPriceName() Obtain Name of the billable item displayed in the console.
 * @method void setPriceName(string $PriceName) Set Name of the billable item displayed in the console.
 * @method float getOriginalPrice() Obtain Original price of a monthly subscribed cloud disk, in USD.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOriginalPrice(float $OriginalPrice) Set Original price of a monthly subscribed cloud disk, in USD.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getDiscountPrice() Obtain Discounted price of a monthly subscribed cloud disk, in USD.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDiscountPrice(float $DiscountPrice) Set Discounted price of a monthly subscribed cloud disk, in USD.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getUnitPrice() Obtain Original unit price of a pay-as-you-go cloud disk, in USD.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUnitPrice(float $UnitPrice) Set Original unit price of a pay-as-you-go cloud disk, in USD.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getUnitPriceDiscount() Obtain Discount unit price of a pay-as-you-go cloud disk, in USD.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUnitPriceDiscount(float $UnitPriceDiscount) Set Discount unit price of a pay-as-you-go cloud disk, in USD.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getChargeUnit() Obtain Billing unit for pay-as-you-go cloud disks. Valid value: `HOUR` (billed hourly).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setChargeUnit(string $ChargeUnit) Set Billing unit for pay-as-you-go cloud disks. Valid value: `HOUR` (billed hourly).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOriginalPriceHigh() Obtain Original highly-precise price of a monthly subscribed cloud disk, in USD.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOriginalPriceHigh(string $OriginalPriceHigh) Set Original highly-precise price of a monthly subscribed cloud disk, in USD.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDiscountPriceHigh() Obtain Discounted highly-precise price of a monthly subscribed cloud disk, in USD.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDiscountPriceHigh(string $DiscountPriceHigh) Set Discounted highly-precise price of a monthly subscribed cloud disk, in USD.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUnitPriceHigh() Obtain Original highly-precise unit price of a pay-as-you-go cloud disk, in USD.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUnitPriceHigh(string $UnitPriceHigh) Set Original highly-precise unit price of a pay-as-you-go cloud disk, in USD.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUnitPriceDiscountHigh() Obtain Discounted highly-precise unit price of a pay-as-you-go cloud disk, in USD.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUnitPriceDiscountHigh(string $UnitPriceDiscountHigh) Set Discounted highly-precise unit price of a pay-as-you-go cloud disk, in USD.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DetailPrice extends AbstractModel
{
    /**
     * @var string Name of the billable item.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PriceTitle;

    /**
     * @var string Name of the billable item displayed in the console.
     */
    public $PriceName;

    /**
     * @var float Original price of a monthly subscribed cloud disk, in USD.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OriginalPrice;

    /**
     * @var float Discounted price of a monthly subscribed cloud disk, in USD.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DiscountPrice;

    /**
     * @var float Original unit price of a pay-as-you-go cloud disk, in USD.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UnitPrice;

    /**
     * @var float Discount unit price of a pay-as-you-go cloud disk, in USD.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UnitPriceDiscount;

    /**
     * @var string Billing unit for pay-as-you-go cloud disks. Valid value: `HOUR` (billed hourly).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ChargeUnit;

    /**
     * @var string Original highly-precise price of a monthly subscribed cloud disk, in USD.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OriginalPriceHigh;

    /**
     * @var string Discounted highly-precise price of a monthly subscribed cloud disk, in USD.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DiscountPriceHigh;

    /**
     * @var string Original highly-precise unit price of a pay-as-you-go cloud disk, in USD.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UnitPriceHigh;

    /**
     * @var string Discounted highly-precise unit price of a pay-as-you-go cloud disk, in USD.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UnitPriceDiscountHigh;

    /**
     * @param string $PriceTitle Name of the billable item.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PriceName Name of the billable item displayed in the console.
     * @param float $OriginalPrice Original price of a monthly subscribed cloud disk, in USD.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $DiscountPrice Discounted price of a monthly subscribed cloud disk, in USD.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $UnitPrice Original unit price of a pay-as-you-go cloud disk, in USD.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $UnitPriceDiscount Discount unit price of a pay-as-you-go cloud disk, in USD.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ChargeUnit Billing unit for pay-as-you-go cloud disks. Valid value: `HOUR` (billed hourly).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OriginalPriceHigh Original highly-precise price of a monthly subscribed cloud disk, in USD.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DiscountPriceHigh Discounted highly-precise price of a monthly subscribed cloud disk, in USD.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UnitPriceHigh Original highly-precise unit price of a pay-as-you-go cloud disk, in USD.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UnitPriceDiscountHigh Discounted highly-precise unit price of a pay-as-you-go cloud disk, in USD.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("PriceTitle",$param) and $param["PriceTitle"] !== null) {
            $this->PriceTitle = $param["PriceTitle"];
        }

        if (array_key_exists("PriceName",$param) and $param["PriceName"] !== null) {
            $this->PriceName = $param["PriceName"];
        }

        if (array_key_exists("OriginalPrice",$param) and $param["OriginalPrice"] !== null) {
            $this->OriginalPrice = $param["OriginalPrice"];
        }

        if (array_key_exists("DiscountPrice",$param) and $param["DiscountPrice"] !== null) {
            $this->DiscountPrice = $param["DiscountPrice"];
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

        if (array_key_exists("OriginalPriceHigh",$param) and $param["OriginalPriceHigh"] !== null) {
            $this->OriginalPriceHigh = $param["OriginalPriceHigh"];
        }

        if (array_key_exists("DiscountPriceHigh",$param) and $param["DiscountPriceHigh"] !== null) {
            $this->DiscountPriceHigh = $param["DiscountPriceHigh"];
        }

        if (array_key_exists("UnitPriceHigh",$param) and $param["UnitPriceHigh"] !== null) {
            $this->UnitPriceHigh = $param["UnitPriceHigh"];
        }

        if (array_key_exists("UnitPriceDiscountHigh",$param) and $param["UnitPriceDiscountHigh"] !== null) {
            $this->UnitPriceDiscountHigh = $param["UnitPriceDiscountHigh"];
        }
    }
}
