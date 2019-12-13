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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method float getUnitPrice() 获取Subsequent unit price (in RMB).
Note: This field may return null, indicating that no valid value is found.
 * @method void setUnitPrice(float $UnitPrice) 设置Subsequent unit price (in RMB).
Note: This field may return null, indicating that no valid value is found.
 * @method string getChargeUnit() 获取Subsequent billing unit. Valid values: <br><li>HOUR: bill by hour. Scenarios using this billing unit include: pay as you go for instances on an hourly basis (`POSTPAID_BY_HOUR`), and pay as you go for bandwidth on an hourly basis (`BANDWIDTH_POSTPAID_BY_HOUR`). <br><li>GB: bill by traffic in GB. Scenarios using this billing unit include: pay as you go for traffic on an hourly basis (`TRAFFIC_POSTPAID_BY_HOUR`).
Note: This field may return null, indicating that no valid value is found.
 * @method void setChargeUnit(string $ChargeUnit) 设置Subsequent billing unit. Valid values: <br><li>HOUR: bill by hour. Scenarios using this billing unit include: pay as you go for instances on an hourly basis (`POSTPAID_BY_HOUR`), and pay as you go for bandwidth on an hourly basis (`BANDWIDTH_POSTPAID_BY_HOUR`). <br><li>GB: bill by traffic in GB. Scenarios using this billing unit include: pay as you go for traffic on an hourly basis (`TRAFFIC_POSTPAID_BY_HOUR`).
Note: This field may return null, indicating that no valid value is found.
 * @method float getOriginalPrice() 获取Original price of a prepaid instance (in RMB).
Note: This field may return null, indicating that no valid value is found.
 * @method void setOriginalPrice(float $OriginalPrice) 设置Original price of a prepaid instance (in RMB).
Note: This field may return null, indicating that no valid value is found.
 * @method float getDiscountPrice() 获取Discount price of a prepaid instance (in RMB).
Note: This field may return null, indicating that no valid value is found.
 * @method void setDiscountPrice(float $DiscountPrice) 设置Discount price of a prepaid instance (in RMB).
Note: This field may return null, indicating that no valid value is found.
 */

/**
 *Describes pricing information.
 */
class ItemPrice extends AbstractModel
{
    /**
     * @var float Subsequent unit price (in RMB).
Note: This field may return null, indicating that no valid value is found.
     */
    public $UnitPrice;

    /**
     * @var string Subsequent billing unit. Valid values: <br><li>HOUR: bill by hour. Scenarios using this billing unit include: pay as you go for instances on an hourly basis (`POSTPAID_BY_HOUR`), and pay as you go for bandwidth on an hourly basis (`BANDWIDTH_POSTPAID_BY_HOUR`). <br><li>GB: bill by traffic in GB. Scenarios using this billing unit include: pay as you go for traffic on an hourly basis (`TRAFFIC_POSTPAID_BY_HOUR`).
Note: This field may return null, indicating that no valid value is found.
     */
    public $ChargeUnit;

    /**
     * @var float Original price of a prepaid instance (in RMB).
Note: This field may return null, indicating that no valid value is found.
     */
    public $OriginalPrice;

    /**
     * @var float Discount price of a prepaid instance (in RMB).
Note: This field may return null, indicating that no valid value is found.
     */
    public $DiscountPrice;
    /**
     * @param float $UnitPrice Subsequent unit price (in RMB).
Note: This field may return null, indicating that no valid value is found.
     * @param string $ChargeUnit Subsequent billing unit. Valid values: <br><li>HOUR: bill by hour. Scenarios using this billing unit include: pay as you go for instances on an hourly basis (`POSTPAID_BY_HOUR`), and pay as you go for bandwidth on an hourly basis (`BANDWIDTH_POSTPAID_BY_HOUR`). <br><li>GB: bill by traffic in GB. Scenarios using this billing unit include: pay as you go for traffic on an hourly basis (`TRAFFIC_POSTPAID_BY_HOUR`).
Note: This field may return null, indicating that no valid value is found.
     * @param float $OriginalPrice Original price of a prepaid instance (in RMB).
Note: This field may return null, indicating that no valid value is found.
     * @param float $DiscountPrice Discount price of a prepaid instance (in RMB).
Note: This field may return null, indicating that no valid value is found.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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
