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
 * @method SpotMarketOptions getSpotOptions() 获取Options related to bidding
 * @method void setSpotOptions(SpotMarketOptions $SpotOptions) 设置Options related to bidding
 * @method string getMarketType() 获取Market option type. Currently `spot` is the only supported value.
 * @method void setMarketType(string $MarketType) 设置Market option type. Currently `spot` is the only supported value.
 */

/**
 *Options related to bidding requests
 */
class InstanceMarketOptionsRequest extends AbstractModel
{
    /**
     * @var SpotMarketOptions Options related to bidding
     */
    public $SpotOptions;

    /**
     * @var string Market option type. Currently `spot` is the only supported value.
     */
    public $MarketType;
    /**
     * @param SpotMarketOptions $SpotOptions Options related to bidding
     * @param string $MarketType Market option type. Currently `spot` is the only supported value.
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
        if (array_key_exists("SpotOptions",$param) and $param["SpotOptions"] !== null) {
            $this->SpotOptions = new SpotMarketOptions();
            $this->SpotOptions->deserialize($param["SpotOptions"]);
        }

        if (array_key_exists("MarketType",$param) and $param["MarketType"] !== null) {
            $this->MarketType = $param["MarketType"];
        }
    }
}
