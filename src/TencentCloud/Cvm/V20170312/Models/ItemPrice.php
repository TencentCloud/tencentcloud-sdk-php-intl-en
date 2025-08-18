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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Describes pricing information.
 *
 * @method float getUnitPrice() Obtain Original price of subsequent total costs, postpaid billing mode usage, unit: usd. <li>if other time interval items are returned, such as UnitPriceSecondStep, this item represents the time interval (0, 96) hr. if no other time interval items are returned, this item represents the full period (0, ∞) hr.
 * @method void setUnitPrice(float $UnitPrice) Set Original price of subsequent total costs, postpaid billing mode usage, unit: usd. <li>if other time interval items are returned, such as UnitPriceSecondStep, this item represents the time interval (0, 96) hr. if no other time interval items are returned, this item represents the full period (0, ∞) hr.
 * @method string getChargeUnit() Obtain Billing unit for pay-as-you-go mode. valid values: <br><li>HOUR: billed on an hourly basis. it's used for hourly POSTPAID instances (`POSTPAID_BY_HOUR`). <br><li>GB: bill BY TRAFFIC in GB. it's used for POSTPAID products that are billed BY the hourly TRAFFIC (`TRAFFIC_POSTPAID_BY_HOUR`).
 * @method void setChargeUnit(string $ChargeUnit) Set Billing unit for pay-as-you-go mode. valid values: <br><li>HOUR: billed on an hourly basis. it's used for hourly POSTPAID instances (`POSTPAID_BY_HOUR`). <br><li>GB: bill BY TRAFFIC in GB. it's used for POSTPAID products that are billed BY the hourly TRAFFIC (`TRAFFIC_POSTPAID_BY_HOUR`).
 * @method float getOriginalPrice() Obtain Original price of total prepaid costs. measurement unit: usd.
 * @method void setOriginalPrice(float $OriginalPrice) Set Original price of total prepaid costs. measurement unit: usd.
 * @method float getDiscountPrice() Obtain Discount price of total prepaid costs. unit: usd.
 * @method void setDiscountPrice(float $DiscountPrice) Set Discount price of total prepaid costs. unit: usd.
 * @method float getDiscount() Obtain Discount, such as 20.0 representing 80% off.
 * @method void setDiscount(float $Discount) Set Discount, such as 20.0 representing 80% off.
 * @method float getUnitPriceDiscount() Obtain Discounted price of subsequent total cost, postpaid billing mode usage, unit: usd <li>if other time interval items are returned, such as UnitPriceDiscountSecondStep, this item represents the time interval (0, 96) hr; if no other time interval items are returned, this item represents the full period (0, ∞) hr.
 * @method void setUnitPriceDiscount(float $UnitPriceDiscount) Set Discounted price of subsequent total cost, postpaid billing mode usage, unit: usd <li>if other time interval items are returned, such as UnitPriceDiscountSecondStep, this item represents the time interval (0, 96) hr; if no other time interval items are returned, this item represents the full period (0, ∞) hr.
 * @method float getUnitPriceSecondStep() Obtain Original price of subsequent total costs for usage time range (96, 360) hr in postpaid billing mode. unit: usd.
 * @method void setUnitPriceSecondStep(float $UnitPriceSecondStep) Set Original price of subsequent total costs for usage time range (96, 360) hr in postpaid billing mode. unit: usd.
 * @method float getUnitPriceDiscountSecondStep() Obtain Discounted price of subsequent total cost for usage time interval (96, 360) hr in postpaid billing mode. unit: usd.
 * @method void setUnitPriceDiscountSecondStep(float $UnitPriceDiscountSecondStep) Set Discounted price of subsequent total cost for usage time interval (96, 360) hr in postpaid billing mode. unit: usd.
 * @method float getUnitPriceThirdStep() Obtain Specifies the original price of subsequent total costs with a usage time interval exceeding 360 hr in postpaid billing mode. measurement unit: usd.
 * @method void setUnitPriceThirdStep(float $UnitPriceThirdStep) Set Specifies the original price of subsequent total costs with a usage time interval exceeding 360 hr in postpaid billing mode. measurement unit: usd.
 * @method float getUnitPriceDiscountThirdStep() Obtain Discounted price of subsequent total cost for usage time interval exceeding 360 hr in postpaid billing mode. measurement unit: usd.
 * @method void setUnitPriceDiscountThirdStep(float $UnitPriceDiscountThirdStep) Set Discounted price of subsequent total cost for usage time interval exceeding 360 hr in postpaid billing mode. measurement unit: usd.
 * @method float getOriginalPriceThreeYear() Obtain Specifies the original price of total 3-year prepaid costs in prepaid billing mode. measurement unit: usd.
Note: This field may return null, indicating that no valid value is found.
 * @method void setOriginalPriceThreeYear(float $OriginalPriceThreeYear) Set Specifies the original price of total 3-year prepaid costs in prepaid billing mode. measurement unit: usd.
Note: This field may return null, indicating that no valid value is found.
 * @method float getDiscountPriceThreeYear() Obtain Specifies the discount price for an advance payment of the total fee for three years, prepaid mode usage, measurement unit: usd.
Note: This field may return null, indicating that no valid value is found.
 * @method void setDiscountPriceThreeYear(float $DiscountPriceThreeYear) Set Specifies the discount price for an advance payment of the total fee for three years, prepaid mode usage, measurement unit: usd.
Note: This field may return null, indicating that no valid value is found.
 * @method float getDiscountThreeYear() Obtain Specifies the discount for a 3-year advance payment, for example 20.0 represents 80% off.
Note: This field may return null, indicating that no valid value is found.
 * @method void setDiscountThreeYear(float $DiscountThreeYear) Set Specifies the discount for a 3-year advance payment, for example 20.0 represents 80% off.
Note: This field may return null, indicating that no valid value is found.
 * @method float getOriginalPriceFiveYear() Obtain Specifies the original price of the 5-year total cost with advance payment, using prepaid billing mode. measurement unit: usd.
Note: This field may return null, indicating that no valid value is found.
 * @method void setOriginalPriceFiveYear(float $OriginalPriceFiveYear) Set Specifies the original price of the 5-year total cost with advance payment, using prepaid billing mode. measurement unit: usd.
Note: This field may return null, indicating that no valid value is found.
 * @method float getDiscountPriceFiveYear() Obtain Prepaid 5-year total cost discount price, prepaid billing mode usage. unit: usd.
Note: This field may return null, indicating that no valid value is found.
 * @method void setDiscountPriceFiveYear(float $DiscountPriceFiveYear) Set Prepaid 5-year total cost discount price, prepaid billing mode usage. unit: usd.
Note: This field may return null, indicating that no valid value is found.
 * @method float getDiscountFiveYear() Obtain Specifies the discount for 5-year advance payment, such as 20.0 for 80% off.
Note: This field may return null, indicating that no valid value is found.
 * @method void setDiscountFiveYear(float $DiscountFiveYear) Set Specifies the discount for 5-year advance payment, such as 20.0 for 80% off.
Note: This field may return null, indicating that no valid value is found.
 * @method float getOriginalPriceOneYear() Obtain Original price of one-year advance payment total cost. prepaid mode usage. unit: usd.
Note: This field may return null, indicating that no valid value is found.
 * @method void setOriginalPriceOneYear(float $OriginalPriceOneYear) Set Original price of one-year advance payment total cost. prepaid mode usage. unit: usd.
Note: This field may return null, indicating that no valid value is found.
 * @method float getDiscountPriceOneYear() Obtain Discount price for total advance payment for one year. specifies prepaid mode usage. measurement unit: usd.
Note: This field may return null, indicating that no valid value is found.
 * @method void setDiscountPriceOneYear(float $DiscountPriceOneYear) Set Discount price for total advance payment for one year. specifies prepaid mode usage. measurement unit: usd.
Note: This field may return null, indicating that no valid value is found.
 * @method float getDiscountOneYear() Obtain Specifies the discount for a one-year advance payment, such as 20.0 for 80% off.
Note: This field may return null, indicating that no valid value is found.
 * @method void setDiscountOneYear(float $DiscountOneYear) Set Specifies the discount for a one-year advance payment, such as 20.0 for 80% off.
Note: This field may return null, indicating that no valid value is found.
 */
class ItemPrice extends AbstractModel
{
    /**
     * @var float Original price of subsequent total costs, postpaid billing mode usage, unit: usd. <li>if other time interval items are returned, such as UnitPriceSecondStep, this item represents the time interval (0, 96) hr. if no other time interval items are returned, this item represents the full period (0, ∞) hr.
     */
    public $UnitPrice;

    /**
     * @var string Billing unit for pay-as-you-go mode. valid values: <br><li>HOUR: billed on an hourly basis. it's used for hourly POSTPAID instances (`POSTPAID_BY_HOUR`). <br><li>GB: bill BY TRAFFIC in GB. it's used for POSTPAID products that are billed BY the hourly TRAFFIC (`TRAFFIC_POSTPAID_BY_HOUR`).
     */
    public $ChargeUnit;

    /**
     * @var float Original price of total prepaid costs. measurement unit: usd.
     */
    public $OriginalPrice;

    /**
     * @var float Discount price of total prepaid costs. unit: usd.
     */
    public $DiscountPrice;

    /**
     * @var float Discount, such as 20.0 representing 80% off.
     */
    public $Discount;

    /**
     * @var float Discounted price of subsequent total cost, postpaid billing mode usage, unit: usd <li>if other time interval items are returned, such as UnitPriceDiscountSecondStep, this item represents the time interval (0, 96) hr; if no other time interval items are returned, this item represents the full period (0, ∞) hr.
     */
    public $UnitPriceDiscount;

    /**
     * @var float Original price of subsequent total costs for usage time range (96, 360) hr in postpaid billing mode. unit: usd.
     */
    public $UnitPriceSecondStep;

    /**
     * @var float Discounted price of subsequent total cost for usage time interval (96, 360) hr in postpaid billing mode. unit: usd.
     */
    public $UnitPriceDiscountSecondStep;

    /**
     * @var float Specifies the original price of subsequent total costs with a usage time interval exceeding 360 hr in postpaid billing mode. measurement unit: usd.
     */
    public $UnitPriceThirdStep;

    /**
     * @var float Discounted price of subsequent total cost for usage time interval exceeding 360 hr in postpaid billing mode. measurement unit: usd.
     */
    public $UnitPriceDiscountThirdStep;

    /**
     * @var float Specifies the original price of total 3-year prepaid costs in prepaid billing mode. measurement unit: usd.
Note: This field may return null, indicating that no valid value is found.
     */
    public $OriginalPriceThreeYear;

    /**
     * @var float Specifies the discount price for an advance payment of the total fee for three years, prepaid mode usage, measurement unit: usd.
Note: This field may return null, indicating that no valid value is found.
     */
    public $DiscountPriceThreeYear;

    /**
     * @var float Specifies the discount for a 3-year advance payment, for example 20.0 represents 80% off.
Note: This field may return null, indicating that no valid value is found.
     */
    public $DiscountThreeYear;

    /**
     * @var float Specifies the original price of the 5-year total cost with advance payment, using prepaid billing mode. measurement unit: usd.
Note: This field may return null, indicating that no valid value is found.
     */
    public $OriginalPriceFiveYear;

    /**
     * @var float Prepaid 5-year total cost discount price, prepaid billing mode usage. unit: usd.
Note: This field may return null, indicating that no valid value is found.
     */
    public $DiscountPriceFiveYear;

    /**
     * @var float Specifies the discount for 5-year advance payment, such as 20.0 for 80% off.
Note: This field may return null, indicating that no valid value is found.
     */
    public $DiscountFiveYear;

    /**
     * @var float Original price of one-year advance payment total cost. prepaid mode usage. unit: usd.
Note: This field may return null, indicating that no valid value is found.
     */
    public $OriginalPriceOneYear;

    /**
     * @var float Discount price for total advance payment for one year. specifies prepaid mode usage. measurement unit: usd.
Note: This field may return null, indicating that no valid value is found.
     */
    public $DiscountPriceOneYear;

    /**
     * @var float Specifies the discount for a one-year advance payment, such as 20.0 for 80% off.
Note: This field may return null, indicating that no valid value is found.
     */
    public $DiscountOneYear;

    /**
     * @param float $UnitPrice Original price of subsequent total costs, postpaid billing mode usage, unit: usd. <li>if other time interval items are returned, such as UnitPriceSecondStep, this item represents the time interval (0, 96) hr. if no other time interval items are returned, this item represents the full period (0, ∞) hr.
     * @param string $ChargeUnit Billing unit for pay-as-you-go mode. valid values: <br><li>HOUR: billed on an hourly basis. it's used for hourly POSTPAID instances (`POSTPAID_BY_HOUR`). <br><li>GB: bill BY TRAFFIC in GB. it's used for POSTPAID products that are billed BY the hourly TRAFFIC (`TRAFFIC_POSTPAID_BY_HOUR`).
     * @param float $OriginalPrice Original price of total prepaid costs. measurement unit: usd.
     * @param float $DiscountPrice Discount price of total prepaid costs. unit: usd.
     * @param float $Discount Discount, such as 20.0 representing 80% off.
     * @param float $UnitPriceDiscount Discounted price of subsequent total cost, postpaid billing mode usage, unit: usd <li>if other time interval items are returned, such as UnitPriceDiscountSecondStep, this item represents the time interval (0, 96) hr; if no other time interval items are returned, this item represents the full period (0, ∞) hr.
     * @param float $UnitPriceSecondStep Original price of subsequent total costs for usage time range (96, 360) hr in postpaid billing mode. unit: usd.
     * @param float $UnitPriceDiscountSecondStep Discounted price of subsequent total cost for usage time interval (96, 360) hr in postpaid billing mode. unit: usd.
     * @param float $UnitPriceThirdStep Specifies the original price of subsequent total costs with a usage time interval exceeding 360 hr in postpaid billing mode. measurement unit: usd.
     * @param float $UnitPriceDiscountThirdStep Discounted price of subsequent total cost for usage time interval exceeding 360 hr in postpaid billing mode. measurement unit: usd.
     * @param float $OriginalPriceThreeYear Specifies the original price of total 3-year prepaid costs in prepaid billing mode. measurement unit: usd.
Note: This field may return null, indicating that no valid value is found.
     * @param float $DiscountPriceThreeYear Specifies the discount price for an advance payment of the total fee for three years, prepaid mode usage, measurement unit: usd.
Note: This field may return null, indicating that no valid value is found.
     * @param float $DiscountThreeYear Specifies the discount for a 3-year advance payment, for example 20.0 represents 80% off.
Note: This field may return null, indicating that no valid value is found.
     * @param float $OriginalPriceFiveYear Specifies the original price of the 5-year total cost with advance payment, using prepaid billing mode. measurement unit: usd.
Note: This field may return null, indicating that no valid value is found.
     * @param float $DiscountPriceFiveYear Prepaid 5-year total cost discount price, prepaid billing mode usage. unit: usd.
Note: This field may return null, indicating that no valid value is found.
     * @param float $DiscountFiveYear Specifies the discount for 5-year advance payment, such as 20.0 for 80% off.
Note: This field may return null, indicating that no valid value is found.
     * @param float $OriginalPriceOneYear Original price of one-year advance payment total cost. prepaid mode usage. unit: usd.
Note: This field may return null, indicating that no valid value is found.
     * @param float $DiscountPriceOneYear Discount price for total advance payment for one year. specifies prepaid mode usage. measurement unit: usd.
Note: This field may return null, indicating that no valid value is found.
     * @param float $DiscountOneYear Specifies the discount for a one-year advance payment, such as 20.0 for 80% off.
Note: This field may return null, indicating that no valid value is found.
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

        if (array_key_exists("Discount",$param) and $param["Discount"] !== null) {
            $this->Discount = $param["Discount"];
        }

        if (array_key_exists("UnitPriceDiscount",$param) and $param["UnitPriceDiscount"] !== null) {
            $this->UnitPriceDiscount = $param["UnitPriceDiscount"];
        }

        if (array_key_exists("UnitPriceSecondStep",$param) and $param["UnitPriceSecondStep"] !== null) {
            $this->UnitPriceSecondStep = $param["UnitPriceSecondStep"];
        }

        if (array_key_exists("UnitPriceDiscountSecondStep",$param) and $param["UnitPriceDiscountSecondStep"] !== null) {
            $this->UnitPriceDiscountSecondStep = $param["UnitPriceDiscountSecondStep"];
        }

        if (array_key_exists("UnitPriceThirdStep",$param) and $param["UnitPriceThirdStep"] !== null) {
            $this->UnitPriceThirdStep = $param["UnitPriceThirdStep"];
        }

        if (array_key_exists("UnitPriceDiscountThirdStep",$param) and $param["UnitPriceDiscountThirdStep"] !== null) {
            $this->UnitPriceDiscountThirdStep = $param["UnitPriceDiscountThirdStep"];
        }

        if (array_key_exists("OriginalPriceThreeYear",$param) and $param["OriginalPriceThreeYear"] !== null) {
            $this->OriginalPriceThreeYear = $param["OriginalPriceThreeYear"];
        }

        if (array_key_exists("DiscountPriceThreeYear",$param) and $param["DiscountPriceThreeYear"] !== null) {
            $this->DiscountPriceThreeYear = $param["DiscountPriceThreeYear"];
        }

        if (array_key_exists("DiscountThreeYear",$param) and $param["DiscountThreeYear"] !== null) {
            $this->DiscountThreeYear = $param["DiscountThreeYear"];
        }

        if (array_key_exists("OriginalPriceFiveYear",$param) and $param["OriginalPriceFiveYear"] !== null) {
            $this->OriginalPriceFiveYear = $param["OriginalPriceFiveYear"];
        }

        if (array_key_exists("DiscountPriceFiveYear",$param) and $param["DiscountPriceFiveYear"] !== null) {
            $this->DiscountPriceFiveYear = $param["DiscountPriceFiveYear"];
        }

        if (array_key_exists("DiscountFiveYear",$param) and $param["DiscountFiveYear"] !== null) {
            $this->DiscountFiveYear = $param["DiscountFiveYear"];
        }

        if (array_key_exists("OriginalPriceOneYear",$param) and $param["OriginalPriceOneYear"] !== null) {
            $this->OriginalPriceOneYear = $param["OriginalPriceOneYear"];
        }

        if (array_key_exists("DiscountPriceOneYear",$param) and $param["DiscountPriceOneYear"] !== null) {
            $this->DiscountPriceOneYear = $param["DiscountPriceOneYear"];
        }

        if (array_key_exists("DiscountOneYear",$param) and $param["DiscountOneYear"] !== null) {
            $this->DiscountOneYear = $param["DiscountOneYear"];
        }
    }
}
