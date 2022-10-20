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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The DDoS rate limits
 *
 * @method string getPackageLimit() Obtain The limit on origin packet rate. Value range: 1 pps - 1000 Gpps. If 0 is passed, the packet rate will not be restricted.
 * @method void setPackageLimit(string $PackageLimit) Set The limit on origin packet rate. Value range: 1 pps - 1000 Gpps. If 0 is passed, the packet rate will not be restricted.
 * @method string getFluxLimit() Obtain The limit on origin traffic rate. Value range: 1 bps - 10000 Gbps. If 0 is passed, the traffic rate will not be restricted.
 * @method void setFluxLimit(string $FluxLimit) Set The limit on origin traffic rate. Value range: 1 bps - 10000 Gbps. If 0 is passed, the traffic rate will not be restricted.
 */
class DDoSSpeedLimit extends AbstractModel
{
    /**
     * @var string The limit on origin packet rate. Value range: 1 pps - 1000 Gpps. If 0 is passed, the packet rate will not be restricted.
     */
    public $PackageLimit;

    /**
     * @var string The limit on origin traffic rate. Value range: 1 bps - 10000 Gbps. If 0 is passed, the traffic rate will not be restricted.
     */
    public $FluxLimit;

    /**
     * @param string $PackageLimit The limit on origin packet rate. Value range: 1 pps - 1000 Gpps. If 0 is passed, the packet rate will not be restricted.
     * @param string $FluxLimit The limit on origin traffic rate. Value range: 1 bps - 10000 Gbps. If 0 is passed, the traffic rate will not be restricted.
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
        if (array_key_exists("PackageLimit",$param) and $param["PackageLimit"] !== null) {
            $this->PackageLimit = $param["PackageLimit"];
        }

        if (array_key_exists("FluxLimit",$param) and $param["FluxLimit"] !== null) {
            $this->FluxLimit = $param["FluxLimit"];
        }
    }
}
