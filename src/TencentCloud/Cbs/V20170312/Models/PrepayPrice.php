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
 * @method float getDiscountPrice() Obtain Discounted price of a monthly-subscribed cloud disk or a snapshot, in USD.
 * @method void setDiscountPrice(float $DiscountPrice) Set Discounted price of a monthly-subscribed cloud disk or a snapshot, in USD.
 * @method string getChargeUnit() Obtain Billing unit for pay-as-you-go cloud disks. Valid value: <br><li>HOUR: billed hourly.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setChargeUnit(string $ChargeUnit) Set Billing unit for pay-as-you-go cloud disks. Valid value: <br><li>HOUR: billed hourly.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getUnitPriceHigh() Obtain Original unit price of a pay-as-you-go cloud disk, in USD, with six decimal places.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setUnitPriceHigh(string $UnitPriceHigh) Set Original unit price of a pay-as-you-go cloud disk, in USD, with six decimal places.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getOriginalPriceHigh() Obtain Original payment of a monthly-subscribed cloud disk or a snapshot, in USD, with six decimal places.
 * @method void setOriginalPriceHigh(string $OriginalPriceHigh) Set Original payment of a monthly-subscribed cloud disk or a snapshot, in USD, with six decimal places.
 * @method float getOriginalPrice() Obtain Original payment of a monthly-subscribed cloud disk or a snapshot, in USD.
 * @method void setOriginalPrice(float $OriginalPrice) Set Original payment of a monthly-subscribed cloud disk or a snapshot, in USD.
 * @method float getUnitPriceDiscount() Obtain Discount unit price of a pay-as-you-go cloud disk, in USD.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setUnitPriceDiscount(float $UnitPriceDiscount) Set Discount unit price of a pay-as-you-go cloud disk, in USD.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getUnitPriceDiscountHigh() Obtain Discounted unit price of a pay-as-you-go cloud disk, in USD, with six decimal places.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setUnitPriceDiscountHigh(string $UnitPriceDiscountHigh) Set Discounted unit price of a pay-as-you-go cloud disk, in USD, with six decimal places.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getDiscountPriceHigh() Obtain Discounted price of a monthly-subscribed cloud disk or a snapshot, in USD, with six decimal places.
 * @method void setDiscountPriceHigh(string $DiscountPriceHigh) Set Discounted price of a monthly-subscribed cloud disk or a snapshot, in USD, with six decimal places.
 * @method float getUnitPrice() Obtain Original unit price of a pay-as-you-go cloud disk, in USD.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setUnitPrice(float $UnitPrice) Set Original unit price of a pay-as-you-go cloud disk, in USD.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getDetailPrices() Obtain Detailed billing items
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDetailPrices(array $DetailPrices) Set Detailed billing items
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PrepayPrice extends AbstractModel
{
    /**
     * @var float Discounted price of a monthly-subscribed cloud disk or a snapshot, in USD.
     */
    public $DiscountPrice;

    /**
     * @var string Billing unit for pay-as-you-go cloud disks. Valid value: <br><li>HOUR: billed hourly.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ChargeUnit;

    /**
     * @var string Original unit price of a pay-as-you-go cloud disk, in USD, with six decimal places.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $UnitPriceHigh;

    /**
     * @var string Original payment of a monthly-subscribed cloud disk or a snapshot, in USD, with six decimal places.
     */
    public $OriginalPriceHigh;

    /**
     * @var float Original payment of a monthly-subscribed cloud disk or a snapshot, in USD.
     */
    public $OriginalPrice;

    /**
     * @var float Discount unit price of a pay-as-you-go cloud disk, in USD.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $UnitPriceDiscount;

    /**
     * @var string Discounted unit price of a pay-as-you-go cloud disk, in USD, with six decimal places.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $UnitPriceDiscountHigh;

    /**
     * @var string Discounted price of a monthly-subscribed cloud disk or a snapshot, in USD, with six decimal places.
     */
    public $DiscountPriceHigh;

    /**
     * @var float Original unit price of a pay-as-you-go cloud disk, in USD.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $UnitPrice;

    /**
     * @var array Detailed billing items
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DetailPrices;

    /**
     * @param float $DiscountPrice Discounted price of a monthly-subscribed cloud disk or a snapshot, in USD.
     * @param string $ChargeUnit Billing unit for pay-as-you-go cloud disks. Valid value: <br><li>HOUR: billed hourly.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $UnitPriceHigh Original unit price of a pay-as-you-go cloud disk, in USD, with six decimal places.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $OriginalPriceHigh Original payment of a monthly-subscribed cloud disk or a snapshot, in USD, with six decimal places.
     * @param float $OriginalPrice Original payment of a monthly-subscribed cloud disk or a snapshot, in USD.
     * @param float $UnitPriceDiscount Discount unit price of a pay-as-you-go cloud disk, in USD.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $UnitPriceDiscountHigh Discounted unit price of a pay-as-you-go cloud disk, in USD, with six decimal places.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $DiscountPriceHigh Discounted price of a monthly-subscribed cloud disk or a snapshot, in USD, with six decimal places.
     * @param float $UnitPrice Original unit price of a pay-as-you-go cloud disk, in USD.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $DetailPrices Detailed billing items
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
        if (array_key_exists("DiscountPrice",$param) and $param["DiscountPrice"] !== null) {
            $this->DiscountPrice = $param["DiscountPrice"];
        }

        if (array_key_exists("ChargeUnit",$param) and $param["ChargeUnit"] !== null) {
            $this->ChargeUnit = $param["ChargeUnit"];
        }

        if (array_key_exists("UnitPriceHigh",$param) and $param["UnitPriceHigh"] !== null) {
            $this->UnitPriceHigh = $param["UnitPriceHigh"];
        }

        if (array_key_exists("OriginalPriceHigh",$param) and $param["OriginalPriceHigh"] !== null) {
            $this->OriginalPriceHigh = $param["OriginalPriceHigh"];
        }

        if (array_key_exists("OriginalPrice",$param) and $param["OriginalPrice"] !== null) {
            $this->OriginalPrice = $param["OriginalPrice"];
        }

        if (array_key_exists("UnitPriceDiscount",$param) and $param["UnitPriceDiscount"] !== null) {
            $this->UnitPriceDiscount = $param["UnitPriceDiscount"];
        }

        if (array_key_exists("UnitPriceDiscountHigh",$param) and $param["UnitPriceDiscountHigh"] !== null) {
            $this->UnitPriceDiscountHigh = $param["UnitPriceDiscountHigh"];
        }

        if (array_key_exists("DiscountPriceHigh",$param) and $param["DiscountPriceHigh"] !== null) {
            $this->DiscountPriceHigh = $param["DiscountPriceHigh"];
        }

        if (array_key_exists("UnitPrice",$param) and $param["UnitPrice"] !== null) {
            $this->UnitPrice = $param["UnitPrice"];
        }

        if (array_key_exists("DetailPrices",$param) and $param["DetailPrices"] !== null) {
            $this->DetailPrices = [];
            foreach ($param["DetailPrices"] as $key => $value){
                $obj = new DetailPrice();
                $obj->deserialize($value);
                array_push($this->DetailPrices, $obj);
            }
        }
    }
}
