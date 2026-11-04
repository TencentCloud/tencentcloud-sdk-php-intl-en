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
 * App configuration - All user-modifiable configurations
 *
 * @method AppExperienceConfig getExperience() Obtain Trial configuration
 * @method void setExperience(AppExperienceConfig $Experience) Set Trial configuration
 * @method AppGreetingConfig getGreeting() Obtain Welcome message configuration
 * @method void setGreeting(AppGreetingConfig $Greeting) Set Welcome message configuration
 * @method AppMemoryConfig getMemory() Obtain Memory configuration
 * @method void setMemory(AppMemoryConfig $Memory) Set Memory configuration
 * @method AppModeConfig getMode() Obtain Mode-related configuration
 * @method void setMode(AppModeConfig $Mode) Set Mode-related configuration
 * @method AppModelConfig getModel() Obtain Model configuration
 * @method void setModel(AppModelConfig $Model) Set Model configuration
 * @method AppWebSearchConfig getWebSearch() Obtain Online search configuration
 * @method void setWebSearch(AppWebSearchConfig $WebSearch) Set Online search configuration
 * @method AppWorkflowConfig getWorkflow() Obtain Workflow configuration
 * @method void setWorkflow(AppWorkflowConfig $Workflow) Set Workflow configuration
 */
class AppConfig extends AbstractModel
{
    /**
     * @var AppExperienceConfig Trial configuration
     */
    public $Experience;

    /**
     * @var AppGreetingConfig Welcome message configuration
     */
    public $Greeting;

    /**
     * @var AppMemoryConfig Memory configuration
     */
    public $Memory;

    /**
     * @var AppModeConfig Mode-related configuration
     */
    public $Mode;

    /**
     * @var AppModelConfig Model configuration
     */
    public $Model;

    /**
     * @var AppWebSearchConfig Online search configuration
     */
    public $WebSearch;

    /**
     * @var AppWorkflowConfig Workflow configuration
     */
    public $Workflow;

    /**
     * @param AppExperienceConfig $Experience Trial configuration
     * @param AppGreetingConfig $Greeting Welcome message configuration
     * @param AppMemoryConfig $Memory Memory configuration
     * @param AppModeConfig $Mode Mode-related configuration
     * @param AppModelConfig $Model Model configuration
     * @param AppWebSearchConfig $WebSearch Online search configuration
     * @param AppWorkflowConfig $Workflow Workflow configuration
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
        if (array_key_exists("Experience",$param) and $param["Experience"] !== null) {
            $this->Experience = new AppExperienceConfig();
            $this->Experience->deserialize($param["Experience"]);
        }

        if (array_key_exists("Greeting",$param) and $param["Greeting"] !== null) {
            $this->Greeting = new AppGreetingConfig();
            $this->Greeting->deserialize($param["Greeting"]);
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = new AppMemoryConfig();
            $this->Memory->deserialize($param["Memory"]);
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = new AppModeConfig();
            $this->Mode->deserialize($param["Mode"]);
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = new AppModelConfig();
            $this->Model->deserialize($param["Model"]);
        }

        if (array_key_exists("WebSearch",$param) and $param["WebSearch"] !== null) {
            $this->WebSearch = new AppWebSearchConfig();
            $this->WebSearch->deserialize($param["WebSearch"]);
        }

        if (array_key_exists("Workflow",$param) and $param["Workflow"] !== null) {
            $this->Workflow = new AppWorkflowConfig();
            $this->Workflow->deserialize($param["Workflow"]);
        }
    }
}
