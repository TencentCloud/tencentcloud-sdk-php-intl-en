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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Pricing information of an item
 *
 * @method float getUnitPrice() Obtain PAYG unit price, in USD.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setUnitPrice(float $UnitPrice) Set PAYG unit price, in USD.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getChargeUnit() Obtain Subsequent billing unit. Value Range: 
`HOUR`: Calculate the cost by hour. It's available when "InternetChargeType=POSTPAID_BY_HOUR".
`GB`: Calculate the cost by traffic in GB. It's available when "InternetChargeType=TRAFFIC_POSTPAID_BY_HOUR".
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setChargeUnit(string $ChargeUnit) Set Subsequent billing unit. Value Range: 
`HOUR`: Calculate the cost by hour. It's available when "InternetChargeType=POSTPAID_BY_HOUR".
`GB`: Calculate the cost by traffic in GB. It's available when "InternetChargeType=TRAFFIC_POSTPAID_BY_HOUR".
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method float getOriginalPrice() Obtain Reserved field
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setOriginalPrice(float $OriginalPrice) Set Reserved field
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method float getDiscountPrice() Obtain Reserved field
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setDiscountPrice(float $DiscountPrice) Set Reserved field
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method float getUnitPriceDiscount() Obtain Discount unit price of a pay-as-you-go instance, in USD.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setUnitPriceDiscount(float $UnitPriceDiscount) Set Discount unit price of a pay-as-you-go instance, in USD.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method float getDiscount() Obtain Discount. For example, 20.0 indicates 80% off.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setDiscount(float $Discount) Set Discount. For example, 20.0 indicates 80% off.
Note: This field may return·null, indicating that no valid values can be obtained.
 */
class ItemPrice extends AbstractModel
{
    /**
     * @var float PAYG unit price, in USD.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $UnitPrice;

    /**
     * @var string Subsequent billing unit. Value Range: 
`HOUR`: Calculate the cost by hour. It's available when "InternetChargeType=POSTPAID_BY_HOUR".
`GB`: Calculate the cost by traffic in GB. It's available when "InternetChargeType=TRAFFIC_POSTPAID_BY_HOUR".
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $ChargeUnit;

    /**
     * @var float Reserved field
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $OriginalPrice;

    /**
     * @var float Reserved field
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $DiscountPrice;

    /**
     * @var float Discount unit price of a pay-as-you-go instance, in USD.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $UnitPriceDiscount;

    /**
     * @var float Discount. For example, 20.0 indicates 80% off.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Discount;

    /**
     * @param float $UnitPrice PAYG unit price, in USD.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $ChargeUnit Subsequent billing unit. Value Range: 
`HOUR`: Calculate the cost by hour. It's available when "InternetChargeType=POSTPAID_BY_HOUR".
`GB`: Calculate the cost by traffic in GB. It's available when "InternetChargeType=TRAFFIC_POSTPAID_BY_HOUR".
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param float $OriginalPrice Reserved field
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param float $DiscountPrice Reserved field
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param float $UnitPriceDiscount Discount unit price of a pay-as-you-go instance, in USD.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param float $Discount Discount. For example, 20.0 indicates 80% off.
Note: This field may return·null, indicating that no valid values can be obtained.
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
