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
 * Tool
 *
 * @method ToolBilling getBilling() Obtain <p>Tool billing information</p>
 * @method void setBilling(ToolBilling $Billing) Set <p>Tool billing information</p>
 * @method integer getCallCount() Obtain <p>Tool call count</p><p>Unit: count</p>
 * @method void setCallCount(integer $CallCount) Set <p>Tool call count</p><p>Unit: count</p>
 * @method string getDescription() Obtain <p>Tool description</p>
 * @method void setDescription(string $Description) Set <p>Tool description</p>
 * @method string getName() Obtain <p>Tool name</p>
 * @method void setName(string $Name) Set <p>Tool name</p>
 * @method string getPluginId() Obtain <p>Plug-in ID</p>
 * @method void setPluginId(string $PluginId) Set <p>Plug-in ID</p>
 * @method integer getToolAccessMode() Obtain <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>TOOL_ACCESS_MODE_UNKNOWN</td><td>0</td><td>Not specified</td></tr><tr><td>TOOL_ACCESS_MODE_READ_ONLY</td><td>1</td><td>Read-only</td></tr><tr><td>TOOL_ACCESS_MODE_WRITE_DELETE</td><td>2</td><td>Write/Delete</td></tr></tbody></table>
 * @method void setToolAccessMode(integer $ToolAccessMode) Set <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>TOOL_ACCESS_MODE_UNKNOWN</td><td>0</td><td>Not specified</td></tr><tr><td>TOOL_ACCESS_MODE_READ_ONLY</td><td>1</td><td>Read-only</td></tr><tr><td>TOOL_ACCESS_MODE_WRITE_DELETE</td><td>2</td><td>Write/Delete</td></tr></tbody></table>
 * @method ToolConfig getToolConfig() Obtain <p>Tool configuration info</p>
 * @method void setToolConfig(ToolConfig $ToolConfig) Set <p>Tool configuration info</p>
 * @method string getToolId() Obtain <p>Tool ID</p>
 * @method void setToolId(string $ToolId) Set <p>Tool ID</p>
 */
class Tool extends AbstractModel
{
    /**
     * @var ToolBilling <p>Tool billing information</p>
     */
    public $Billing;

    /**
     * @var integer <p>Tool call count</p><p>Unit: count</p>
     */
    public $CallCount;

    /**
     * @var string <p>Tool description</p>
     */
    public $Description;

    /**
     * @var string <p>Tool name</p>
     */
    public $Name;

    /**
     * @var string <p>Plug-in ID</p>
     */
    public $PluginId;

    /**
     * @var integer <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>TOOL_ACCESS_MODE_UNKNOWN</td><td>0</td><td>Not specified</td></tr><tr><td>TOOL_ACCESS_MODE_READ_ONLY</td><td>1</td><td>Read-only</td></tr><tr><td>TOOL_ACCESS_MODE_WRITE_DELETE</td><td>2</td><td>Write/Delete</td></tr></tbody></table>
     */
    public $ToolAccessMode;

    /**
     * @var ToolConfig <p>Tool configuration info</p>
     */
    public $ToolConfig;

    /**
     * @var string <p>Tool ID</p>
     */
    public $ToolId;

    /**
     * @param ToolBilling $Billing <p>Tool billing information</p>
     * @param integer $CallCount <p>Tool call count</p><p>Unit: count</p>
     * @param string $Description <p>Tool description</p>
     * @param string $Name <p>Tool name</p>
     * @param string $PluginId <p>Plug-in ID</p>
     * @param integer $ToolAccessMode <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>TOOL_ACCESS_MODE_UNKNOWN</td><td>0</td><td>Not specified</td></tr><tr><td>TOOL_ACCESS_MODE_READ_ONLY</td><td>1</td><td>Read-only</td></tr><tr><td>TOOL_ACCESS_MODE_WRITE_DELETE</td><td>2</td><td>Write/Delete</td></tr></tbody></table>
     * @param ToolConfig $ToolConfig <p>Tool configuration info</p>
     * @param string $ToolId <p>Tool ID</p>
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
        if (array_key_exists("Billing",$param) and $param["Billing"] !== null) {
            $this->Billing = new ToolBilling();
            $this->Billing->deserialize($param["Billing"]);
        }

        if (array_key_exists("CallCount",$param) and $param["CallCount"] !== null) {
            $this->CallCount = $param["CallCount"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PluginId",$param) and $param["PluginId"] !== null) {
            $this->PluginId = $param["PluginId"];
        }

        if (array_key_exists("ToolAccessMode",$param) and $param["ToolAccessMode"] !== null) {
            $this->ToolAccessMode = $param["ToolAccessMode"];
        }

        if (array_key_exists("ToolConfig",$param) and $param["ToolConfig"] !== null) {
            $this->ToolConfig = new ToolConfig();
            $this->ToolConfig->deserialize($param["ToolConfig"]);
        }

        if (array_key_exists("ToolId",$param) and $param["ToolId"] !== null) {
            $this->ToolId = $param["ToolId"];
        }
    }
}
