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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Compute environment
 *
 * @method string getEnvType() Obtain Compute environment management type
 * @method void setEnvType(string $EnvType) Set Compute environment management type
 * @method EnvData getEnvData() Obtain Compute environment's parameters
 * @method void setEnvData(EnvData $EnvData) Set Compute environment's parameters
 * @method array getMountDataDisks() Obtain Data disk mounting option
 * @method void setMountDataDisks(array $MountDataDisks) Set Data disk mounting option
 * @method AgentRunningMode getAgentRunningMode() Obtain Agent running mode; applicable for Windows
 * @method void setAgentRunningMode(AgentRunningMode $AgentRunningMode) Set Agent running mode; applicable for Windows
 */
class AnonymousComputeEnv extends AbstractModel
{
    /**
     * @var string Compute environment management type
     */
    public $EnvType;

    /**
     * @var EnvData Compute environment's parameters
     */
    public $EnvData;

    /**
     * @var array Data disk mounting option
     */
    public $MountDataDisks;

    /**
     * @var AgentRunningMode Agent running mode; applicable for Windows
     */
    public $AgentRunningMode;

    /**
     * @param string $EnvType Compute environment management type
     * @param EnvData $EnvData Compute environment's parameters
     * @param array $MountDataDisks Data disk mounting option
     * @param AgentRunningMode $AgentRunningMode Agent running mode; applicable for Windows
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
        if (array_key_exists("EnvType",$param) and $param["EnvType"] !== null) {
            $this->EnvType = $param["EnvType"];
        }

        if (array_key_exists("EnvData",$param) and $param["EnvData"] !== null) {
            $this->EnvData = new EnvData();
            $this->EnvData->deserialize($param["EnvData"]);
        }

        if (array_key_exists("MountDataDisks",$param) and $param["MountDataDisks"] !== null) {
            $this->MountDataDisks = [];
            foreach ($param["MountDataDisks"] as $key => $value){
                $obj = new MountDataDisk();
                $obj->deserialize($value);
                array_push($this->MountDataDisks, $obj);
            }
        }

        if (array_key_exists("AgentRunningMode",$param) and $param["AgentRunningMode"] !== null) {
            $this->AgentRunningMode = new AgentRunningMode();
            $this->AgentRunningMode->deserialize($param["AgentRunningMode"]);
        }
    }
}
