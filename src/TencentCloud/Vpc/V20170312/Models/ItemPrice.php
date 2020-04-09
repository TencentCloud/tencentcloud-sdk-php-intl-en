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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The pricing information of a single billing item
 *
 * @method float getUnitPrice() Obtain The pay-as-you-go billing method. Unit: CNY.
 * @method void setUnitPrice(float $UnitPrice) Set The pay-as-you-go billing method. Unit: CNY.
 * @method string getChargeUnit() Obtain Pay-as-you-go billing method. Value Range: HOUR: Indicates billing by the hour. Scenarios using this hourly billing unit include: Instances postpaid on an hourly basis (POSTPAID_BY_HOUR), and bandwidth postpaid on an hourly basis (BANDWIDTH_POSTPAID_BY_HOUR). GB: Indicates billing on a per-GB basis. Scenarios using this billing unit include: Traffic postpaid on an hourly basis (TRAFFIC_POSTPAID_BY_HOUR).
 * @method void setChargeUnit(string $ChargeUnit) Set Pay-as-you-go billing method. Value Range: HOUR: Indicates billing by the hour. Scenarios using this hourly billing unit include: Instances postpaid on an hourly basis (POSTPAID_BY_HOUR), and bandwidth postpaid on an hourly basis (BANDWIDTH_POSTPAID_BY_HOUR). GB: Indicates billing on a per-GB basis. Scenarios using this billing unit include: Traffic postpaid on an hourly basis (TRAFFIC_POSTPAID_BY_HOUR).
 * @method float getOriginalPrice() Obtain Original price of the prepaid product. Unit: CNY.
 * @method void setOriginalPrice(float $OriginalPrice) Set Original price of the prepaid product. Unit: CNY.
 * @method float getDiscountPrice() Obtain Discount price of the prepaid product. Unit: CNY.
 * @method void setDiscountPrice(float $DiscountPrice) Set Discount price of the prepaid product. Unit: CNY.
 */
class ItemPrice extends AbstractModel
{
    /**
     * @var float The pay-as-you-go billing method. Unit: CNY.
     */
    public $UnitPrice;

    /**
     * @var string Pay-as-you-go billing method. Value Range: HOUR: Indicates billing by the hour. Scenarios using this hourly billing unit include: Instances postpaid on an hourly basis (POSTPAID_BY_HOUR), and bandwidth postpaid on an hourly basis (BANDWIDTH_POSTPAID_BY_HOUR). GB: Indicates billing on a per-GB basis. Scenarios using this billing unit include: Traffic postpaid on an hourly basis (TRAFFIC_POSTPAID_BY_HOUR).
     */
    public $ChargeUnit;

    /**
     * @var float Original price of the prepaid product. Unit: CNY.
     */
    public $OriginalPrice;

    /**
     * @var float Discount price of the prepaid product. Unit: CNY.
     */
    public $DiscountPrice;

    /**
     * @param float $UnitPrice The pay-as-you-go billing method. Unit: CNY.
     * @param string $ChargeUnit Pay-as-you-go billing method. Value Range: HOUR: Indicates billing by the hour. Scenarios using this hourly billing unit include: Instances postpaid on an hourly basis (POSTPAID_BY_HOUR), and bandwidth postpaid on an hourly basis (BANDWIDTH_POSTPAID_BY_HOUR). GB: Indicates billing on a per-GB basis. Scenarios using this billing unit include: Traffic postpaid on an hourly basis (TRAFFIC_POSTPAID_BY_HOUR).
     * @param float $OriginalPrice Original price of the prepaid product. Unit: CNY.
     * @param float $DiscountPrice Discount price of the prepaid product. Unit: CNY.
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
    }
}
