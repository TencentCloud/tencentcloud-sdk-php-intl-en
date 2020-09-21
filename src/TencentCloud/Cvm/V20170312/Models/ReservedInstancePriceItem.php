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
 * Price information of the reserved instance based on the payment method. Currently, RIs are only offered to beta users.
 *
 * @method string getOfferingType() Obtain Payment method. Valid values: All Upfront, Partial Upfront, and No Upfront.
 * @method void setOfferingType(string $OfferingType) Set Payment method. Valid values: All Upfront, Partial Upfront, and No Upfront.
 * @method float getFixedPrice() Obtain Total upfront price, in USD.
 * @method void setFixedPrice(float $FixedPrice) Set Total upfront price, in USD.
 * @method float getUsagePrice() Obtain Total usage price, in USD/hr.
 * @method void setUsagePrice(float $UsagePrice) Set Total usage price, in USD/hr.
 * @method string getReservedInstancesOfferingId() Obtain The ID of the reserved instance offering.
 * @method void setReservedInstancesOfferingId(string $ReservedInstancesOfferingId) Set The ID of the reserved instance offering.
 * @method string getZone() Obtain The availability zone in which the reserved instance can be purchased.
 * @method void setZone(string $Zone) Set The availability zone in which the reserved instance can be purchased.
 * @method integer getDuration() Obtain The **validity** of the reserved instance in seconds, which is the purchased usage period. For example, `31536000`.
Unit: second
 * @method void setDuration(integer $Duration) Set The **validity** of the reserved instance in seconds, which is the purchased usage period. For example, `31536000`.
Unit: second
 * @method string getProductDescription() Obtain The operating system of the reserved instance, such as `linux`.
Valid value: linux.
 * @method void setProductDescription(string $ProductDescription) Set The operating system of the reserved instance, such as `linux`.
Valid value: linux.
 */
class ReservedInstancePriceItem extends AbstractModel
{
    /**
     * @var string Payment method. Valid values: All Upfront, Partial Upfront, and No Upfront.
     */
    public $OfferingType;

    /**
     * @var float Total upfront price, in USD.
     */
    public $FixedPrice;

    /**
     * @var float Total usage price, in USD/hr.
     */
    public $UsagePrice;

    /**
     * @var string The ID of the reserved instance offering.
     */
    public $ReservedInstancesOfferingId;

    /**
     * @var string The availability zone in which the reserved instance can be purchased.
     */
    public $Zone;

    /**
     * @var integer The **validity** of the reserved instance in seconds, which is the purchased usage period. For example, `31536000`.
Unit: second
     */
    public $Duration;

    /**
     * @var string The operating system of the reserved instance, such as `linux`.
Valid value: linux.
     */
    public $ProductDescription;

    /**
     * @param string $OfferingType Payment method. Valid values: All Upfront, Partial Upfront, and No Upfront.
     * @param float $FixedPrice Total upfront price, in USD.
     * @param float $UsagePrice Total usage price, in USD/hr.
     * @param string $ReservedInstancesOfferingId The ID of the reserved instance offering.
     * @param string $Zone The availability zone in which the reserved instance can be purchased.
     * @param integer $Duration The **validity** of the reserved instance in seconds, which is the purchased usage period. For example, `31536000`.
Unit: second
     * @param string $ProductDescription The operating system of the reserved instance, such as `linux`.
Valid value: linux.
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
        if (array_key_exists("OfferingType",$param) and $param["OfferingType"] !== null) {
            $this->OfferingType = $param["OfferingType"];
        }

        if (array_key_exists("FixedPrice",$param) and $param["FixedPrice"] !== null) {
            $this->FixedPrice = $param["FixedPrice"];
        }

        if (array_key_exists("UsagePrice",$param) and $param["UsagePrice"] !== null) {
            $this->UsagePrice = $param["UsagePrice"];
        }

        if (array_key_exists("ReservedInstancesOfferingId",$param) and $param["ReservedInstancesOfferingId"] !== null) {
            $this->ReservedInstancesOfferingId = $param["ReservedInstancesOfferingId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("ProductDescription",$param) and $param["ProductDescription"] !== null) {
            $this->ProductDescription = $param["ProductDescription"];
        }
    }
}
