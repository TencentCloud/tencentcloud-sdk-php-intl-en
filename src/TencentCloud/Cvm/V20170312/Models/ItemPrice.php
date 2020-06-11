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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Describes pricing information.
 *
 * @method float getUnitPrice() Obtain The original unit price for pay-as-you-go mode in USD. <br><li>When a billing tier is returned, it indicates the price fo the returned billing tier. For example, if `UnitPriceSecondStep` is returned, it refers to the unit price for the usage between 0 to 96 hours. Otherwise, it refers to the unit price for the usage between 0 and ∞ hours.
Note: this field may return null, indicating that no valid value is obtained.
 * @method void setUnitPrice(float $UnitPrice) Set The original unit price for pay-as-you-go mode in USD. <br><li>When a billing tier is returned, it indicates the price fo the returned billing tier. For example, if `UnitPriceSecondStep` is returned, it refers to the unit price for the usage between 0 to 96 hours. Otherwise, it refers to the unit price for the usage between 0 and ∞ hours.
Note: this field may return null, indicating that no valid value is obtained.
 * @method string getChargeUnit() Obtain Billing unit for pay-as-you-go mode. Valid values: <br><li>HOUR: billed on an hourly basis. It's used for hourly postpaid instances (`POSTPAID_BY_HOUR`). <br><li>GB: bill by traffic in GB. It's used for postpaid products that are billed by the hourly traffic (`TRAFFIC_POSTPAID_BY_HOUR`).
Note: this field may return null, indicating that no valid value is obtained.
 * @method void setChargeUnit(string $ChargeUnit) Set Billing unit for pay-as-you-go mode. Valid values: <br><li>HOUR: billed on an hourly basis. It's used for hourly postpaid instances (`POSTPAID_BY_HOUR`). <br><li>GB: bill by traffic in GB. It's used for postpaid products that are billed by the hourly traffic (`TRAFFIC_POSTPAID_BY_HOUR`).
Note: this field may return null, indicating that no valid value is obtained.
 * @method float getOriginalPrice() Obtain The original price of a pay-in-advance instance, in USD.
Note: this field may return null, indicating that no valid value is obtained.
 * @method void setOriginalPrice(float $OriginalPrice) Set The original price of a pay-in-advance instance, in USD.
Note: this field may return null, indicating that no valid value is obtained.
 * @method float getDiscountPrice() Obtain Discount price of a prepaid instance, in USD.
Note: this field may return null, indicating that no valid value is obtained.
 * @method void setDiscountPrice(float $DiscountPrice) Set Discount price of a prepaid instance, in USD.
Note: this field may return null, indicating that no valid value is obtained.
 * @method float getDiscount() Obtain Percentage of the original price. For example, if you enter "20.0", the discounted price will be 20% of the original price.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDiscount(float $Discount) Set Percentage of the original price. For example, if you enter "20.0", the discounted price will be 20% of the original price.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method float getUnitPriceDiscount() Obtain The discounted unit price for pay-as-you-go mode in USD. <br><li>When a billing tier is returned, it indicates the price fo the returned billing tier. For example, if `UnitPriceSecondStep` is returned, it refers to the unit price for the usage between 0 to 96 hours. Otherwise, it refers to the unit price for the usage between 0 and ∞ hours.
Note: this field may return null, indicating that no valid value is obtained.
 * @method void setUnitPriceDiscount(float $UnitPriceDiscount) Set The discounted unit price for pay-as-you-go mode in USD. <br><li>When a billing tier is returned, it indicates the price fo the returned billing tier. For example, if `UnitPriceSecondStep` is returned, it refers to the unit price for the usage between 0 to 96 hours. Otherwise, it refers to the unit price for the usage between 0 and ∞ hours.
Note: this field may return null, indicating that no valid value is obtained.
 * @method float getUnitPriceSecondStep() Obtain Original unit price for the usage between 96 to 360 hours in USD. It's applicable to pay-as-you-go mode.
Note: this field may return null, indicating that no valid value is obtained.
 * @method void setUnitPriceSecondStep(float $UnitPriceSecondStep) Set Original unit price for the usage between 96 to 360 hours in USD. It's applicable to pay-as-you-go mode.
Note: this field may return null, indicating that no valid value is obtained.
 * @method float getUnitPriceDiscountSecondStep() Obtain Discounted unit price for the usage between 96 to 360 hours in USD. It's applicable to pay-as-you-go mode.
Note: this field may return null, indicating that no valid value is obtained.
 * @method void setUnitPriceDiscountSecondStep(float $UnitPriceDiscountSecondStep) Set Discounted unit price for the usage between 96 to 360 hours in USD. It's applicable to pay-as-you-go mode.
Note: this field may return null, indicating that no valid value is obtained.
 * @method float getUnitPriceThirdStep() Obtain Original unit price for the usage after 360 hours in USD. It's applicable to pay-as-you-go mode.
Note: this field may return null, indicating that no valid value is obtained.
 * @method void setUnitPriceThirdStep(float $UnitPriceThirdStep) Set Original unit price for the usage after 360 hours in USD. It's applicable to pay-as-you-go mode.
Note: this field may return null, indicating that no valid value is obtained.
 * @method float getUnitPriceDiscountThirdStep() Obtain Discounted unit price for the usage after 360 hours in USD. It's applicable to pay-as-you-go mode.
Note: this field may return null, indicating that no valid value is obtained.
 * @method void setUnitPriceDiscountThirdStep(float $UnitPriceDiscountThirdStep) Set Discounted unit price for the usage after 360 hours in USD. It's applicable to pay-as-you-go mode.
Note: this field may return null, indicating that no valid value is obtained.
 */
class ItemPrice extends AbstractModel
{
    /**
     * @var float The original unit price for pay-as-you-go mode in USD. <br><li>When a billing tier is returned, it indicates the price fo the returned billing tier. For example, if `UnitPriceSecondStep` is returned, it refers to the unit price for the usage between 0 to 96 hours. Otherwise, it refers to the unit price for the usage between 0 and ∞ hours.
Note: this field may return null, indicating that no valid value is obtained.
     */
    public $UnitPrice;

    /**
     * @var string Billing unit for pay-as-you-go mode. Valid values: <br><li>HOUR: billed on an hourly basis. It's used for hourly postpaid instances (`POSTPAID_BY_HOUR`). <br><li>GB: bill by traffic in GB. It's used for postpaid products that are billed by the hourly traffic (`TRAFFIC_POSTPAID_BY_HOUR`).
Note: this field may return null, indicating that no valid value is obtained.
     */
    public $ChargeUnit;

    /**
     * @var float The original price of a pay-in-advance instance, in USD.
Note: this field may return null, indicating that no valid value is obtained.
     */
    public $OriginalPrice;

    /**
     * @var float Discount price of a prepaid instance, in USD.
Note: this field may return null, indicating that no valid value is obtained.
     */
    public $DiscountPrice;

    /**
     * @var float Percentage of the original price. For example, if you enter "20.0", the discounted price will be 20% of the original price.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Discount;

    /**
     * @var float The discounted unit price for pay-as-you-go mode in USD. <br><li>When a billing tier is returned, it indicates the price fo the returned billing tier. For example, if `UnitPriceSecondStep` is returned, it refers to the unit price for the usage between 0 to 96 hours. Otherwise, it refers to the unit price for the usage between 0 and ∞ hours.
Note: this field may return null, indicating that no valid value is obtained.
     */
    public $UnitPriceDiscount;

    /**
     * @var float Original unit price for the usage between 96 to 360 hours in USD. It's applicable to pay-as-you-go mode.
Note: this field may return null, indicating that no valid value is obtained.
     */
    public $UnitPriceSecondStep;

    /**
     * @var float Discounted unit price for the usage between 96 to 360 hours in USD. It's applicable to pay-as-you-go mode.
Note: this field may return null, indicating that no valid value is obtained.
     */
    public $UnitPriceDiscountSecondStep;

    /**
     * @var float Original unit price for the usage after 360 hours in USD. It's applicable to pay-as-you-go mode.
Note: this field may return null, indicating that no valid value is obtained.
     */
    public $UnitPriceThirdStep;

    /**
     * @var float Discounted unit price for the usage after 360 hours in USD. It's applicable to pay-as-you-go mode.
Note: this field may return null, indicating that no valid value is obtained.
     */
    public $UnitPriceDiscountThirdStep;

    /**
     * @param float $UnitPrice The original unit price for pay-as-you-go mode in USD. <br><li>When a billing tier is returned, it indicates the price fo the returned billing tier. For example, if `UnitPriceSecondStep` is returned, it refers to the unit price for the usage between 0 to 96 hours. Otherwise, it refers to the unit price for the usage between 0 and ∞ hours.
Note: this field may return null, indicating that no valid value is obtained.
     * @param string $ChargeUnit Billing unit for pay-as-you-go mode. Valid values: <br><li>HOUR: billed on an hourly basis. It's used for hourly postpaid instances (`POSTPAID_BY_HOUR`). <br><li>GB: bill by traffic in GB. It's used for postpaid products that are billed by the hourly traffic (`TRAFFIC_POSTPAID_BY_HOUR`).
Note: this field may return null, indicating that no valid value is obtained.
     * @param float $OriginalPrice The original price of a pay-in-advance instance, in USD.
Note: this field may return null, indicating that no valid value is obtained.
     * @param float $DiscountPrice Discount price of a prepaid instance, in USD.
Note: this field may return null, indicating that no valid value is obtained.
     * @param float $Discount Percentage of the original price. For example, if you enter "20.0", the discounted price will be 20% of the original price.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param float $UnitPriceDiscount The discounted unit price for pay-as-you-go mode in USD. <br><li>When a billing tier is returned, it indicates the price fo the returned billing tier. For example, if `UnitPriceSecondStep` is returned, it refers to the unit price for the usage between 0 to 96 hours. Otherwise, it refers to the unit price for the usage between 0 and ∞ hours.
Note: this field may return null, indicating that no valid value is obtained.
     * @param float $UnitPriceSecondStep Original unit price for the usage between 96 to 360 hours in USD. It's applicable to pay-as-you-go mode.
Note: this field may return null, indicating that no valid value is obtained.
     * @param float $UnitPriceDiscountSecondStep Discounted unit price for the usage between 96 to 360 hours in USD. It's applicable to pay-as-you-go mode.
Note: this field may return null, indicating that no valid value is obtained.
     * @param float $UnitPriceThirdStep Original unit price for the usage after 360 hours in USD. It's applicable to pay-as-you-go mode.
Note: this field may return null, indicating that no valid value is obtained.
     * @param float $UnitPriceDiscountThirdStep Discounted unit price for the usage after 360 hours in USD. It's applicable to pay-as-you-go mode.
Note: this field may return null, indicating that no valid value is obtained.
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
    }
}
