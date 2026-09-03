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
 * CreateAIWorkbenchAgent request structure.
 *
 * @method string getName() Obtain <p>Agent Name</p>
 * @method void setName(string $Name) Set <p>Agent Name</p>
 * @method string getDescription() Obtain <p>Agent description</p>
 * @method void setDescription(string $Description) Set <p>Agent description</p>
 * @method string getCategory() Obtain <p>Agent Category</p>
 * @method void setCategory(string $Category) Set <p>Agent Category</p>
 * @method array getTags() Obtain <p>Agent tag</p>
 * @method void setTags(array $Tags) Set <p>Agent tag</p>
 * @method InstructionConfig getInstruction() Obtain <p>Agent prompt content</p>
 * @method void setInstruction(InstructionConfig $Instruction) Set <p>Agent prompt content</p>
 * @method array getSkillIds() Obtain <p>List of associated skill IDs.</p>
 * @method void setSkillIds(array $SkillIds) Set <p>List of associated skill IDs.</p>
 * @method string getSource() Obtain <p>Source: builtin / custom</p>
 * @method void setSource(string $Source) Set <p>Source: builtin / custom</p>
 * @method string getResourceMapId() Obtain <p>Map ID of the associated resource</p>
 * @method void setResourceMapId(string $ResourceMapId) Set <p>Map ID of the associated resource</p>
 * @method array getMCPIds() Obtain <p>Associated mcp tool</p>
 * @method void setMCPIds(array $MCPIds) Set <p>Associated mcp tool</p>
 * @method array getCamTags() Obtain <p>Resource tag</p>
 * @method void setCamTags(array $CamTags) Set <p>Resource tag</p>
 * @method array getEnvVars() Obtain <p>agent runtime environment variable</p>
 * @method void setEnvVars(array $EnvVars) Set <p>agent runtime environment variable</p>
 */
class CreateAIWorkbenchAgentRequest extends AbstractModel
{
    /**
     * @var string <p>Agent Name</p>
     */
    public $Name;

    /**
     * @var string <p>Agent description</p>
     */
    public $Description;

    /**
     * @var string <p>Agent Category</p>
     */
    public $Category;

    /**
     * @var array <p>Agent tag</p>
     */
    public $Tags;

    /**
     * @var InstructionConfig <p>Agent prompt content</p>
     */
    public $Instruction;

    /**
     * @var array <p>List of associated skill IDs.</p>
     */
    public $SkillIds;

    /**
     * @var string <p>Source: builtin / custom</p>
     */
    public $Source;

    /**
     * @var string <p>Map ID of the associated resource</p>
     */
    public $ResourceMapId;

    /**
     * @var array <p>Associated mcp tool</p>
     */
    public $MCPIds;

    /**
     * @var array <p>Resource tag</p>
     */
    public $CamTags;

    /**
     * @var array <p>agent runtime environment variable</p>
     */
    public $EnvVars;

    /**
     * @param string $Name <p>Agent Name</p>
     * @param string $Description <p>Agent description</p>
     * @param string $Category <p>Agent Category</p>
     * @param array $Tags <p>Agent tag</p>
     * @param InstructionConfig $Instruction <p>Agent prompt content</p>
     * @param array $SkillIds <p>List of associated skill IDs.</p>
     * @param string $Source <p>Source: builtin / custom</p>
     * @param string $ResourceMapId <p>Map ID of the associated resource</p>
     * @param array $MCPIds <p>Associated mcp tool</p>
     * @param array $CamTags <p>Resource tag</p>
     * @param array $EnvVars <p>agent runtime environment variable</p>
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

        if (array_key_exists("ResourceMapId",$param) and $param["ResourceMapId"] !== null) {
            $this->ResourceMapId = $param["ResourceMapId"];
        }

        if (array_key_exists("MCPIds",$param) and $param["MCPIds"] !== null) {
            $this->MCPIds = $param["MCPIds"];
        }

        if (array_key_exists("CamTags",$param) and $param["CamTags"] !== null) {
            $this->CamTags = [];
            foreach ($param["CamTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->CamTags, $obj);
            }
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
