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
 * Health status of origin servers in an origin server group.
 *
 * @method string getOrigin() Obtain Origin server.
 * @method void setOrigin(string $Origin) Set Origin server.
 * @method string getHealthy() Obtain Origin server health status. Valid values:
<li>Healthy: healthy.</li>
<li>Unhealthy: unhealthy.</li>
<li>Undetected: no data detected.</li>

 * @method void setHealthy(string $Healthy) Set Origin server health status. Valid values:
<li>Healthy: healthy.</li>
<li>Unhealthy: unhealthy.</li>
<li>Undetected: no data detected.</li>
 */
class OriginHealthStatus extends AbstractModel
{
    /**
     * @var string Origin server.
     */
    public $Origin;

    /**
     * @var string Origin server health status. Valid values:
<li>Healthy: healthy.</li>
<li>Unhealthy: unhealthy.</li>
<li>Undetected: no data detected.</li>

     */
    public $Healthy;

    /**
     * @param string $Origin Origin server.
     * @param string $Healthy Origin server health status. Valid values:
<li>Healthy: healthy.</li>
<li>Unhealthy: unhealthy.</li>
<li>Undetected: no data detected.</li>
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
        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = $param["Origin"];
        }

        if (array_key_exists("Healthy",$param) and $param["Healthy"] !== null) {
            $this->Healthy = $param["Healthy"];
        }
    }
}
