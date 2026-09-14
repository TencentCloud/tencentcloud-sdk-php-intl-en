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
namespace TencentCloud\Ga2\V20250115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Terminal node configuration
 *
 * @method string getEndpointType() Obtain <p>Domain type. Available values: 'Domain', 'PublicIp'.</p>
 * @method void setEndpointType(string $EndpointType) Set <p>Domain type. Available values: 'Domain', 'PublicIp'.</p>
 * @method string getEndpointService() Obtain <p>Domain name.</p>
 * @method void setEndpointService(string $EndpointService) Set <p>Domain name.</p>
 * @method integer getWeight() Obtain <p>Weight.</p>
 * @method void setWeight(integer $Weight) Set <p>Weight.</p>
 * @method string getHealthCheckStatus() Obtain <p>Health check status; HEALTH: healthy; UNHEALTH: unhealthy.</p>
 * @method void setHealthCheckStatus(string $HealthCheckStatus) Set <p>Health check status; HEALTH: healthy; UNHEALTH: unhealthy.</p>
 */
class EndpointConfigurations extends AbstractModel
{
    /**
     * @var string <p>Domain type. Available values: 'Domain', 'PublicIp'.</p>
     */
    public $EndpointType;

    /**
     * @var string <p>Domain name.</p>
     */
    public $EndpointService;

    /**
     * @var integer <p>Weight.</p>
     */
    public $Weight;

    /**
     * @var string <p>Health check status; HEALTH: healthy; UNHEALTH: unhealthy.</p>
     */
    public $HealthCheckStatus;

    /**
     * @param string $EndpointType <p>Domain type. Available values: 'Domain', 'PublicIp'.</p>
     * @param string $EndpointService <p>Domain name.</p>
     * @param integer $Weight <p>Weight.</p>
     * @param string $HealthCheckStatus <p>Health check status; HEALTH: healthy; UNHEALTH: unhealthy.</p>
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
        if (array_key_exists("EndpointType",$param) and $param["EndpointType"] !== null) {
            $this->EndpointType = $param["EndpointType"];
        }

        if (array_key_exists("EndpointService",$param) and $param["EndpointService"] !== null) {
            $this->EndpointService = $param["EndpointService"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("HealthCheckStatus",$param) and $param["HealthCheckStatus"] !== null) {
            $this->HealthCheckStatus = $param["HealthCheckStatus"];
        }
    }
}
