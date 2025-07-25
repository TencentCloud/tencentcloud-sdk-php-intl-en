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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Bidding-related options
 *
 * @method string getMaxPrice() Obtain Bidding price such as "1.05"
 * @method void setMaxPrice(string $MaxPrice) Set Bidding price such as "1.05"
 * @method string getSpotInstanceType() Obtain Spot instance type. The value can only be one-time currently. Default value: one-time.
 * @method void setSpotInstanceType(string $SpotInstanceType) Set Spot instance type. The value can only be one-time currently. Default value: one-time.
 */
class SpotMarketOptions extends AbstractModel
{
    /**
     * @var string Bidding price such as "1.05"
     */
    public $MaxPrice;

    /**
     * @var string Spot instance type. The value can only be one-time currently. Default value: one-time.
     */
    public $SpotInstanceType;

    /**
     * @param string $MaxPrice Bidding price such as "1.05"
     * @param string $SpotInstanceType Spot instance type. The value can only be one-time currently. Default value: one-time.
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
        if (array_key_exists("MaxPrice",$param) and $param["MaxPrice"] !== null) {
            $this->MaxPrice = $param["MaxPrice"];
        }

        if (array_key_exists("SpotInstanceType",$param) and $param["SpotInstanceType"] !== null) {
            $this->SpotInstanceType = $param["SpotInstanceType"];
        }
    }
}
