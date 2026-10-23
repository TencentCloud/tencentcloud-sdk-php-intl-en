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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Advanced origin optimization config.
 *
 * @method string getDirection() Obtain <p>Origin optimization direction. Valid values:</p><li>MainlandChinaAndGlobalAdaptive: Self adaptive. The domain name must enable "smart acceleration" simultaneously to take effect. EdgeOne will automatically match the optimal origin-pull optimization direction based on the actual geographic location of the client and origin server, without the need to manually specify. For example, if www.example.com enables "advanced origin optimization" but "smart acceleration" is turned off or only partial match conditions are enabled, "advanced origin optimization" will not be effective.</li>
 * @method void setDirection(string $Direction) Set <p>Origin optimization direction. Valid values:</p><li>MainlandChinaAndGlobalAdaptive: Self adaptive. The domain name must enable "smart acceleration" simultaneously to take effect. EdgeOne will automatically match the optimal origin-pull optimization direction based on the actual geographic location of the client and origin server, without the need to manually specify. For example, if www.example.com enables "advanced origin optimization" but "smart acceleration" is turned off or only partial match conditions are enabled, "advanced origin optimization" will not be effective.</li>
 */
class AdvancedOriginRoutingParameters extends AbstractModel
{
    /**
     * @var string <p>Origin optimization direction. Valid values:</p><li>MainlandChinaAndGlobalAdaptive: Self adaptive. The domain name must enable "smart acceleration" simultaneously to take effect. EdgeOne will automatically match the optimal origin-pull optimization direction based on the actual geographic location of the client and origin server, without the need to manually specify. For example, if www.example.com enables "advanced origin optimization" but "smart acceleration" is turned off or only partial match conditions are enabled, "advanced origin optimization" will not be effective.</li>
     */
    public $Direction;

    /**
     * @param string $Direction <p>Origin optimization direction. Valid values:</p><li>MainlandChinaAndGlobalAdaptive: Self adaptive. The domain name must enable "smart acceleration" simultaneously to take effect. EdgeOne will automatically match the optimal origin-pull optimization direction based on the actual geographic location of the client and origin server, without the need to manually specify. For example, if www.example.com enables "advanced origin optimization" but "smart acceleration" is turned off or only partial match conditions are enabled, "advanced origin optimization" will not be effective.</li>
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
        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }
    }
}
