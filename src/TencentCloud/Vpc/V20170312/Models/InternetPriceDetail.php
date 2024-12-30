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
 * Public IP Inquiry Output Parameters
 *
 * @method float getUnitPrice() Obtain Postpaid unit price. Unit: USD. Returned only for postpaid price inquiry.
 * @method void setUnitPrice(float $UnitPrice) Set Postpaid unit price. Unit: USD. Returned only for postpaid price inquiry.
 * @method float getDiscountPrice() Obtain Discounted price. Unit: USD
Note: This field may return null, indicating that no valid value was found.
 * @method void setDiscountPrice(float $DiscountPrice) Set Discounted price. Unit: USD
Note: This field may return null, indicating that no valid value was found.
 * @method string getChargeUnit() Obtain Billing unit. Valid values: <ul> <li>HOUR: Indicates that the billing unit is calculated hourly. The scenarios currently involving this billing unit include TRAFFIC_POSTPAID_BY_HOUR and BANDWIDTH_POSTPAID_BY_HOUR.</li></ul>
Note: This field may return null, indicating that no valid value was found.
 * @method void setChargeUnit(string $ChargeUnit) Set Billing unit. Valid values: <ul> <li>HOUR: Indicates that the billing unit is calculated hourly. The scenarios currently involving this billing unit include TRAFFIC_POSTPAID_BY_HOUR and BANDWIDTH_POSTPAID_BY_HOUR.</li></ul>
Note: This field may return null, indicating that no valid value was found.
 * @method float getOriginalPrice() Obtain Original price. Unit: CNY. Returned only for prepaid price inquiry.
 * @method void setOriginalPrice(float $OriginalPrice) Set Original price. Unit: CNY. Returned only for prepaid price inquiry.
 */
class InternetPriceDetail extends AbstractModel
{
    /**
     * @var float Postpaid unit price. Unit: USD. Returned only for postpaid price inquiry.
     */
    public $UnitPrice;

    /**
     * @var float Discounted price. Unit: USD
Note: This field may return null, indicating that no valid value was found.
     */
    public $DiscountPrice;

    /**
     * @var string Billing unit. Valid values: <ul> <li>HOUR: Indicates that the billing unit is calculated hourly. The scenarios currently involving this billing unit include TRAFFIC_POSTPAID_BY_HOUR and BANDWIDTH_POSTPAID_BY_HOUR.</li></ul>
Note: This field may return null, indicating that no valid value was found.
     */
    public $ChargeUnit;

    /**
     * @var float Original price. Unit: CNY. Returned only for prepaid price inquiry.
     */
    public $OriginalPrice;

    /**
     * @param float $UnitPrice Postpaid unit price. Unit: USD. Returned only for postpaid price inquiry.
     * @param float $DiscountPrice Discounted price. Unit: USD
Note: This field may return null, indicating that no valid value was found.
     * @param string $ChargeUnit Billing unit. Valid values: <ul> <li>HOUR: Indicates that the billing unit is calculated hourly. The scenarios currently involving this billing unit include TRAFFIC_POSTPAID_BY_HOUR and BANDWIDTH_POSTPAID_BY_HOUR.</li></ul>
Note: This field may return null, indicating that no valid value was found.
     * @param float $OriginalPrice Original price. Unit: CNY. Returned only for prepaid price inquiry.
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

        if (array_key_exists("DiscountPrice",$param) and $param["DiscountPrice"] !== null) {
            $this->DiscountPrice = $param["DiscountPrice"];
        }

        if (array_key_exists("ChargeUnit",$param) and $param["ChargeUnit"] !== null) {
            $this->ChargeUnit = $param["ChargeUnit"];
        }

        if (array_key_exists("OriginalPrice",$param) and $param["OriginalPrice"] !== null) {
            $this->OriginalPrice = $param["OriginalPrice"];
        }
    }
}
