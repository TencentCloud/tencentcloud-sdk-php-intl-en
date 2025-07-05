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
 * Options related to bidding requests
 *
 * @method SpotMarketOptions getSpotOptions() Obtain Relevant options for spot instances.
 * @method void setSpotOptions(SpotMarketOptions $SpotOptions) Set Relevant options for spot instances.
 * @method string getMarketType() Obtain Market option type. The value can only be spot currently.
 * @method void setMarketType(string $MarketType) Set Market option type. The value can only be spot currently.
 */
class InstanceMarketOptionsRequest extends AbstractModel
{
    /**
     * @var SpotMarketOptions Relevant options for spot instances.
     */
    public $SpotOptions;

    /**
     * @var string Market option type. The value can only be spot currently.
     */
    public $MarketType;

    /**
     * @param SpotMarketOptions $SpotOptions Relevant options for spot instances.
     * @param string $MarketType Market option type. The value can only be spot currently.
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
        if (array_key_exists("SpotOptions",$param) and $param["SpotOptions"] !== null) {
            $this->SpotOptions = new SpotMarketOptions();
            $this->SpotOptions->deserialize($param["SpotOptions"]);
        }

        if (array_key_exists("MarketType",$param) and $param["MarketType"] !== null) {
            $this->MarketType = $param["MarketType"];
        }
    }
}
