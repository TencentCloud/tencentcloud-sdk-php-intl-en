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
 * Agent details
 *
 * @method string getAgentId() Obtain <p>Agent ID</p>
 * @method void setAgentId(string $AgentId) Set <p>Agent ID</p>
 * @method AgentProfile getProfile() Obtain <p>Agent Basic Configuration</p>
 * @method void setProfile(AgentProfile $Profile) Set <p>Agent Basic Configuration</p>
 * @method string getInstructions() Obtain <p>System prompt</p>
 * @method void setInstructions(string $Instructions) Set <p>System prompt</p>
 * @method AgentModelConfig getModel() Obtain <p>Model information</p>
 * @method void setModel(AgentModelConfig $Model) Set <p>Model information</p>
 * @method array getToolList() Obtain <p>Tool details</p>
 * @method void setToolList(array $ToolList) Set <p>Tool details</p>
 * @method array getPluginList() Obtain <p>Plug-in configuration</p>
 * @method void setPluginList(array $PluginList) Set <p>Plug-in configuration</p>
 * @method array getSkillList() Obtain <p>Skill details.</p>
 * @method void setSkillList(array $SkillList) Set <p>Skill details.</p>
 * @method AgentAdvancedConfig getAdvancedConfig() Obtain <p>Advanced configurations.</p>
 * @method void setAdvancedConfig(AgentAdvancedConfig $AdvancedConfig) Set <p>Advanced configurations.</p>
 * @method array getExternalToolList() Obtain <p>List of Function Tools executed by the caller</p><p>Input parameter limit: only available in client user state Agent scenario. This field is ignored in business configuration state Agent</p>
 * @method void setExternalToolList(array $ExternalToolList) Set <p>List of Function Tools executed by the caller</p><p>Input parameter limit: only available in client user state Agent scenario. This field is ignored in business configuration state Agent</p>
 */
class AgentDetail extends AbstractModel
{
    /**
     * @var string <p>Agent ID</p>
     */
    public $AgentId;

    /**
     * @var AgentProfile <p>Agent Basic Configuration</p>
     */
    public $Profile;

    /**
     * @var string <p>System prompt</p>
     */
    public $Instructions;

    /**
     * @var AgentModelConfig <p>Model information</p>
     */
    public $Model;

    /**
     * @var array <p>Tool details</p>
     */
    public $ToolList;

    /**
     * @var array <p>Plug-in configuration</p>
     */
    public $PluginList;

    /**
     * @var array <p>Skill details.</p>
     */
    public $SkillList;

    /**
     * @var AgentAdvancedConfig <p>Advanced configurations.</p>
     */
    public $AdvancedConfig;

    /**
     * @var array <p>List of Function Tools executed by the caller</p><p>Input parameter limit: only available in client user state Agent scenario. This field is ignored in business configuration state Agent</p>
     */
    public $ExternalToolList;

    /**
     * @param string $AgentId <p>Agent ID</p>
     * @param AgentProfile $Profile <p>Agent Basic Configuration</p>
     * @param string $Instructions <p>System prompt</p>
     * @param AgentModelConfig $Model <p>Model information</p>
     * @param array $ToolList <p>Tool details</p>
     * @param array $PluginList <p>Plug-in configuration</p>
     * @param array $SkillList <p>Skill details.</p>
     * @param AgentAdvancedConfig $AdvancedConfig <p>Advanced configurations.</p>
     * @param array $ExternalToolList <p>List of Function Tools executed by the caller</p><p>Input parameter limit: only available in client user state Agent scenario. This field is ignored in business configuration state Agent</p>
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
        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = new AgentProfile();
            $this->Profile->deserialize($param["Profile"]);
        }

        if (array_key_exists("Instructions",$param) and $param["Instructions"] !== null) {
            $this->Instructions = $param["Instructions"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = new AgentModelConfig();
            $this->Model->deserialize($param["Model"]);
        }

        if (array_key_exists("ToolList",$param) and $param["ToolList"] !== null) {
            $this->ToolList = [];
            foreach ($param["ToolList"] as $key => $value){
                $obj = new AgentTool();
                $obj->deserialize($value);
                array_push($this->ToolList, $obj);
            }
        }

        if (array_key_exists("PluginList",$param) and $param["PluginList"] !== null) {
            $this->PluginList = [];
            foreach ($param["PluginList"] as $key => $value){
                $obj = new AgentPlugin();
                $obj->deserialize($value);
                array_push($this->PluginList, $obj);
            }
        }

        if (array_key_exists("SkillList",$param) and $param["SkillList"] !== null) {
            $this->SkillList = [];
            foreach ($param["SkillList"] as $key => $value){
                $obj = new AgentSkill();
                $obj->deserialize($value);
                array_push($this->SkillList, $obj);
            }
        }

        if (array_key_exists("AdvancedConfig",$param) and $param["AdvancedConfig"] !== null) {
            $this->AdvancedConfig = new AgentAdvancedConfig();
            $this->AdvancedConfig->deserialize($param["AdvancedConfig"]);
        }

        if (array_key_exists("ExternalToolList",$param) and $param["ExternalToolList"] !== null) {
            $this->ExternalToolList = [];
            foreach ($param["ExternalToolList"] as $key => $value){
                $obj = new AgentExternalToolConfig();
                $obj->deserialize($value);
                array_push($this->ExternalToolList, $obj);
            }
        }
    }
}
