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
 * Options related to bidding.
 *
 * @method string getMaxPrice() Obtain Bid price.
 * @method void setMaxPrice(string $MaxPrice) Set Bid price.
 * @method string getSpotInstanceType() Obtain Bid request type. valid values: one-time. currently, only the one-time type is supported.
 * @method void setSpotInstanceType(string $SpotInstanceType) Set Bid request type. valid values: one-time. currently, only the one-time type is supported.
 */
class SpotMarketOptions extends AbstractModel
{
    /**
     * @var string Bid price.
     */
    public $MaxPrice;

    /**
     * @var string Bid request type. valid values: one-time. currently, only the one-time type is supported.
     */
    public $SpotInstanceType;

    /**
     * @param string $MaxPrice Bid price.
     * @param string $SpotInstanceType Bid request type. valid values: one-time. currently, only the one-time type is supported.
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
