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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Bandwidth price gradient
 *
 * @method array getBandwidthRange() Obtain Bandwidth range.
 * @method void setBandwidthRange(array $BandwidthRange) Set Bandwidth range.
 * @method float getBandwidthUnitPrice() Obtain Bandwidth unit price within the bandwidth range. Unit: CNY/Mbps/day.
 * @method void setBandwidthUnitPrice(float $BandwidthUnitPrice) Set Bandwidth unit price within the bandwidth range. Unit: CNY/Mbps/day.
 * @method float getDiscountBandwidthUnitPrice() Obtain Discounted bandwidth price in CNY/Mbps/day.
 * @method void setDiscountBandwidthUnitPrice(float $DiscountBandwidthUnitPrice) Set Discounted bandwidth price in CNY/Mbps/day.
 */
class BandwidthPriceGradient extends AbstractModel
{
    /**
     * @var array Bandwidth range.
     */
    public $BandwidthRange;

    /**
     * @var float Bandwidth unit price within the bandwidth range. Unit: CNY/Mbps/day.
     */
    public $BandwidthUnitPrice;

    /**
     * @var float Discounted bandwidth price in CNY/Mbps/day.
     */
    public $DiscountBandwidthUnitPrice;

    /**
     * @param array $BandwidthRange Bandwidth range.
     * @param float $BandwidthUnitPrice Bandwidth unit price within the bandwidth range. Unit: CNY/Mbps/day.
     * @param float $DiscountBandwidthUnitPrice Discounted bandwidth price in CNY/Mbps/day.
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
        if (array_key_exists("BandwidthRange",$param) and $param["BandwidthRange"] !== null) {
            $this->BandwidthRange = $param["BandwidthRange"];
        }

        if (array_key_exists("BandwidthUnitPrice",$param) and $param["BandwidthUnitPrice"] !== null) {
            $this->BandwidthUnitPrice = $param["BandwidthUnitPrice"];
        }

        if (array_key_exists("DiscountBandwidthUnitPrice",$param) and $param["DiscountBandwidthUnitPrice"] !== null) {
            $this->DiscountBandwidthUnitPrice = $param["DiscountBandwidthUnitPrice"];
        }
    }
}
