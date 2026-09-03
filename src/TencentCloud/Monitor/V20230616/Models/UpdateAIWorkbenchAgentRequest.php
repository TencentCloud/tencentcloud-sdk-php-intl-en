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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateAIWorkbenchAgent request structure.
 *
 * @method string getAgentId() Obtain <p>Agent ID</p>
 * @method void setAgentId(string $AgentId) Set <p>Agent ID</p>
 * @method string getName() Obtain <p>Agent name</p>
 * @method void setName(string $Name) Set <p>Agent name</p>
 * @method string getDescription() Obtain <p>Agent description</p>
 * @method void setDescription(string $Description) Set <p>Agent description</p>
 * @method string getCategory() Obtain <p>Agent Category.</p>
 * @method void setCategory(string $Category) Set <p>Agent Category.</p>
 * @method array getTags() Obtain <p>Agent Tag.</p>
 * @method void setTags(array $Tags) Set <p>Agent Tag.</p>
 * @method InstructionConfig getInstruction() Obtain <p>Agent prompt</p>
 * @method void setInstruction(InstructionConfig $Instruction) Set <p>Agent prompt</p>
 * @method array getSkillIds() Obtain <p>List of associated skill IDs.</p>
 * @method void setSkillIds(array $SkillIds) Set <p>List of associated skill IDs.</p>
 * @method string getSource() Obtain <p>Source</p>
 * @method void setSource(string $Source) Set <p>Source</p>
 * @method string getStatus() Obtain <p>Status.</p>
 * @method void setStatus(string $Status) Set <p>Status.</p>
 * @method string getResourceMapId() Obtain <p>ID of the associated resource map</p>
 * @method void setResourceMapId(string $ResourceMapId) Set <p>ID of the associated resource map</p>
 * @method array getMCPIds() Obtain <p>Associated mcp</p>
 * @method void setMCPIds(array $MCPIds) Set <p>Associated mcp</p>
 * @method array getEnvVars() Obtain <p>Environment variables required by the agent at runtime</p>
 * @method void setEnvVars(array $EnvVars) Set <p>Environment variables required by the agent at runtime</p>
 */
class UpdateAIWorkbenchAgentRequest extends AbstractModel
{
    /**
     * @var string <p>Agent ID</p>
     */
    public $AgentId;

    /**
     * @var string <p>Agent name</p>
     */
    public $Name;

    /**
     * @var string <p>Agent description</p>
     */
    public $Description;

    /**
     * @var string <p>Agent Category.</p>
     */
    public $Category;

    /**
     * @var array <p>Agent Tag.</p>
     */
    public $Tags;

    /**
     * @var InstructionConfig <p>Agent prompt</p>
     */
    public $Instruction;

    /**
     * @var array <p>List of associated skill IDs.</p>
     */
    public $SkillIds;

    /**
     * @var string <p>Source</p>
     */
    public $Source;

    /**
     * @var string <p>Status.</p>
     */
    public $Status;

    /**
     * @var string <p>ID of the associated resource map</p>
     */
    public $ResourceMapId;

    /**
     * @var array <p>Associated mcp</p>
     */
    public $MCPIds;

    /**
     * @var array <p>Environment variables required by the agent at runtime</p>
     */
    public $EnvVars;

    /**
     * @param string $AgentId <p>Agent ID</p>
     * @param string $Name <p>Agent name</p>
     * @param string $Description <p>Agent description</p>
     * @param string $Category <p>Agent Category.</p>
     * @param array $Tags <p>Agent Tag.</p>
     * @param InstructionConfig $Instruction <p>Agent prompt</p>
     * @param array $SkillIds <p>List of associated skill IDs.</p>
     * @param string $Source <p>Source</p>
     * @param string $Status <p>Status.</p>
     * @param string $ResourceMapId <p>ID of the associated resource map</p>
     * @param array $MCPIds <p>Associated mcp</p>
     * @param array $EnvVars <p>Environment variables required by the agent at runtime</p>
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("Instruction",$param) and $param["Instruction"] !== null) {
            $this->Instruction = new InstructionConfig();
            $this->Instruction->deserialize($param["Instruction"]);
        }

        if (array_key_exists("SkillIds",$param) and $param["SkillIds"] !== null) {
            $this->SkillIds = $param["SkillIds"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ResourceMapId",$param) and $param["ResourceMapId"] !== null) {
            $this->ResourceMapId = $param["ResourceMapId"];
        }

        if (array_key_exists("MCPIds",$param) and $param["MCPIds"] !== null) {
            $this->MCPIds = $param["MCPIds"];
        }

        if (array_key_exists("EnvVars",$param) and $param["EnvVars"] !== null) {
            $this->EnvVars = [];
            foreach ($param["EnvVars"] as $key => $value){
                $obj = new EnvVar();
                $obj->deserialize($value);
                array_push($this->EnvVars, $obj);
            }
        }
    }
}
