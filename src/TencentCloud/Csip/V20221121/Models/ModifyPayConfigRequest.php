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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyPayConfig request structure.
 *
 * @method HostAutoScaleConfig getHostConfig() Obtain Auto-scaling configuration for the CWP module
Supplemental description: if not passed, host configuration will not be modified. At least this module is required for the current period. Named module fields like ContainerConfig / AIAgentConfig can be added for subsequent scalability.
 * @method void setHostConfig(HostAutoScaleConfig $HostConfig) Set Auto-scaling configuration for the CWP module
Supplemental description: if not passed, host configuration will not be modified. At least this module is required for the current period. Named module fields like ContainerConfig / AIAgentConfig can be added for subsequent scalability.
 */
class ModifyPayConfigRequest extends AbstractModel
{
    /**
     * @var HostAutoScaleConfig Auto-scaling configuration for the CWP module
Supplemental description: if not passed, host configuration will not be modified. At least this module is required for the current period. Named module fields like ContainerConfig / AIAgentConfig can be added for subsequent scalability.
     */
    public $HostConfig;

    /**
     * @param HostAutoScaleConfig $HostConfig Auto-scaling configuration for the CWP module
Supplemental description: if not passed, host configuration will not be modified. At least this module is required for the current period. Named module fields like ContainerConfig / AIAgentConfig can be added for subsequent scalability.
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
        if (array_key_exists("HostConfig",$param) and $param["HostConfig"] !== null) {
            $this->HostConfig = new HostAutoScaleConfig();
            $this->HostConfig->deserialize($param["HostConfig"]);
        }
    }
}
