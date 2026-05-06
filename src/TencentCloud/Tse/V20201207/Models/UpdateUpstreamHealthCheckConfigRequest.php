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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateUpstreamHealthCheckConfig request structure.
 *
 * @method string getGatewayId() Obtain gateway ID
 * @method void setGatewayId(string $GatewayId) Set gateway ID
 * @method string getName() Obtain Gateway service name.
 * @method void setName(string $Name) Set Gateway service name.
 * @method UpstreamHealthCheckConfig getHealthCheckConfig() Obtain Health check configuration
 * @method void setHealthCheckConfig(UpstreamHealthCheckConfig $HealthCheckConfig) Set Health check configuration
 */
class UpdateUpstreamHealthCheckConfigRequest extends AbstractModel
{
    /**
     * @var string gateway ID
     */
    public $GatewayId;

    /**
     * @var string Gateway service name.
     */
    public $Name;

    /**
     * @var UpstreamHealthCheckConfig Health check configuration
     */
    public $HealthCheckConfig;

    /**
     * @param string $GatewayId gateway ID
     * @param string $Name Gateway service name.
     * @param UpstreamHealthCheckConfig $HealthCheckConfig Health check configuration
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("HealthCheckConfig",$param) and $param["HealthCheckConfig"] !== null) {
            $this->HealthCheckConfig = new UpstreamHealthCheckConfig();
            $this->HealthCheckConfig->deserialize($param["HealthCheckConfig"]);
        }
    }
}
