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
 * ModifyAgent request structure.
 *
 * @method string getAppId() Obtain <p>Application ID.</p>
 * @method void setAppId(string $AppId) Set <p>Application ID.</p>
 * @method string getAgentId() Obtain <p>Agent Id</p>
 * @method void setAgentId(string $AgentId) Set <p>Agent Id</p>
 * @method AgentSpec getAgent() Obtain <p>Information of the Agent after modification</p>
 * @method void setAgent(AgentSpec $Agent) Set <p>Information of the Agent after modification</p>
 * @method FieldMask getUpdateMask() Obtain <p>Field path that needs to be updated, for example ["Profile.Name", "Profile.IconUrl", "Instructions", "Model", "ToolList", "PluginList", "SkillList", "AdvancedConfig"]</p>
 * @method void setUpdateMask(FieldMask $UpdateMask) Set <p>Field path that needs to be updated, for example ["Profile.Name", "Profile.IconUrl", "Instructions", "Model", "ToolList", "PluginList", "SkillList", "AdvancedConfig"]</p>
 */
class ModifyAgentRequest extends AbstractModel
{
    /**
     * @var string <p>Application ID.</p>
     */
    public $AppId;

    /**
     * @var string <p>Agent Id</p>
     */
    public $AgentId;

    /**
     * @var AgentSpec <p>Information of the Agent after modification</p>
     */
    public $Agent;

    /**
     * @var FieldMask <p>Field path that needs to be updated, for example ["Profile.Name", "Profile.IconUrl", "Instructions", "Model", "ToolList", "PluginList", "SkillList", "AdvancedConfig"]</p>
     */
    public $UpdateMask;

    /**
     * @param string $AppId <p>Application ID.</p>
     * @param string $AgentId <p>Agent Id</p>
     * @param AgentSpec $Agent <p>Information of the Agent after modification</p>
     * @param FieldMask $UpdateMask <p>Field path that needs to be updated, for example ["Profile.Name", "Profile.IconUrl", "Instructions", "Model", "ToolList", "PluginList", "SkillList", "AdvancedConfig"]</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new AgentSpec();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("UpdateMask",$param) and $param["UpdateMask"] !== null) {
            $this->UpdateMask = new FieldMask();
            $this->UpdateMask->deserialize($param["UpdateMask"]);
        }
    }
}
