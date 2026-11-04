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
 * ExecuteConfig
 *
 * @method AppTriggerPromptExecuteConfig getPromptConfig() Obtain <p>Prompt configuration</p>
 * @method void setPromptConfig(AppTriggerPromptExecuteConfig $PromptConfig) Set <p>Prompt configuration</p>
 * @method AppTriggerWorkflowExecuteConfig getWorkflowConfig() Obtain <p>Workflow configuration.</p>
 * @method void setWorkflowConfig(AppTriggerWorkflowExecuteConfig $WorkflowConfig) Set <p>Workflow configuration.</p>
 */
class ExecuteConfig extends AbstractModel
{
    /**
     * @var AppTriggerPromptExecuteConfig <p>Prompt configuration</p>
     */
    public $PromptConfig;

    /**
     * @var AppTriggerWorkflowExecuteConfig <p>Workflow configuration.</p>
     */
    public $WorkflowConfig;

    /**
     * @param AppTriggerPromptExecuteConfig $PromptConfig <p>Prompt configuration</p>
     * @param AppTriggerWorkflowExecuteConfig $WorkflowConfig <p>Workflow configuration.</p>
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
        if (array_key_exists("PromptConfig",$param) and $param["PromptConfig"] !== null) {
            $this->PromptConfig = new AppTriggerPromptExecuteConfig();
            $this->PromptConfig->deserialize($param["PromptConfig"]);
        }

        if (array_key_exists("WorkflowConfig",$param) and $param["WorkflowConfig"] !== null) {
            $this->WorkflowConfig = new AppTriggerWorkflowExecuteConfig();
            $this->WorkflowConfig->deserialize($param["WorkflowConfig"]);
        }
    }
}
