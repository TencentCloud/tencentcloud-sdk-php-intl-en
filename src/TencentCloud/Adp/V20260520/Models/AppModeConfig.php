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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Mode configuration - Contains unique configurations for different modes
 *
 * @method MultiAgentConfig getMultiAgentConfig() Obtain Multi-agent configuration (Agent mode)
 * @method void setMultiAgentConfig(MultiAgentConfig $MultiAgentConfig) Set Multi-agent configuration (Agent mode)
 * @method SingleWorkflowConfig getSingleWorkflowConfig() Obtain Single workflow configuration (single workflow mode)
 * @method void setSingleWorkflowConfig(SingleWorkflowConfig $SingleWorkflowConfig) Set Single workflow configuration (single workflow mode)
 * @method ClawAgentConfig getClawAgentConfig() Obtain ClawAgent Configuration (ClawAgent mode)
 * @method void setClawAgentConfig(ClawAgentConfig $ClawAgentConfig) Set ClawAgent Configuration (ClawAgent mode)
 */
class AppModeConfig extends AbstractModel
{
    /**
     * @var MultiAgentConfig Multi-agent configuration (Agent mode)
     */
    public $MultiAgentConfig;

    /**
     * @var SingleWorkflowConfig Single workflow configuration (single workflow mode)
     */
    public $SingleWorkflowConfig;

    /**
     * @var ClawAgentConfig ClawAgent Configuration (ClawAgent mode)
     */
    public $ClawAgentConfig;

    /**
     * @param MultiAgentConfig $MultiAgentConfig Multi-agent configuration (Agent mode)
     * @param SingleWorkflowConfig $SingleWorkflowConfig Single workflow configuration (single workflow mode)
     * @param ClawAgentConfig $ClawAgentConfig ClawAgent Configuration (ClawAgent mode)
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
        if (array_key_exists("MultiAgentConfig",$param) and $param["MultiAgentConfig"] !== null) {
            $this->MultiAgentConfig = new MultiAgentConfig();
            $this->MultiAgentConfig->deserialize($param["MultiAgentConfig"]);
        }

        if (array_key_exists("SingleWorkflowConfig",$param) and $param["SingleWorkflowConfig"] !== null) {
            $this->SingleWorkflowConfig = new SingleWorkflowConfig();
            $this->SingleWorkflowConfig->deserialize($param["SingleWorkflowConfig"]);
        }

        if (array_key_exists("ClawAgentConfig",$param) and $param["ClawAgentConfig"] !== null) {
            $this->ClawAgentConfig = new ClawAgentConfig();
            $this->ClawAgentConfig->deserialize($param["ClawAgentConfig"]);
        }
    }
}
