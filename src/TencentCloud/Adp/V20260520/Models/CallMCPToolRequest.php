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
 * CallMCPTool request structure.
 *
 * @method string getPluginId() Obtain <p>Capacity boundary: one request can only call the tool on this plugin</p>
 * @method void setPluginId(string $PluginId) Set <p>Capacity boundary: one request can only call the tool on this plugin</p>
 * @method string getThreadId() Obtain <p>thread on the agent-exec side</p>
 * @method void setThreadId(string $ThreadId) Set <p>thread on the agent-exec side</p>
 * @method string getToolName() Obtain <p>Tool Name, used for locating the tool_id in the configured tool_list of the plugin</p>
 * @method void setToolName(string $ToolName) Set <p>Tool Name, used for locating the tool_id in the configured tool_list of the plugin</p>
 * @method string getArguments() Obtain <p>JSON: Original tool input parameters, passed through to the MCP Server as-is</p>
 * @method void setArguments(string $Arguments) Set <p>JSON: Original tool input parameters, passed through to the MCP Server as-is</p>
 */
class CallMCPToolRequest extends AbstractModel
{
    /**
     * @var string <p>Capacity boundary: one request can only call the tool on this plugin</p>
     */
    public $PluginId;

    /**
     * @var string <p>thread on the agent-exec side</p>
     */
    public $ThreadId;

    /**
     * @var string <p>Tool Name, used for locating the tool_id in the configured tool_list of the plugin</p>
     */
    public $ToolName;

    /**
     * @var string <p>JSON: Original tool input parameters, passed through to the MCP Server as-is</p>
     */
    public $Arguments;

    /**
     * @param string $PluginId <p>Capacity boundary: one request can only call the tool on this plugin</p>
     * @param string $ThreadId <p>thread on the agent-exec side</p>
     * @param string $ToolName <p>Tool Name, used for locating the tool_id in the configured tool_list of the plugin</p>
     * @param string $Arguments <p>JSON: Original tool input parameters, passed through to the MCP Server as-is</p>
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
        if (array_key_exists("PluginId",$param) and $param["PluginId"] !== null) {
            $this->PluginId = $param["PluginId"];
        }

        if (array_key_exists("ThreadId",$param) and $param["ThreadId"] !== null) {
            $this->ThreadId = $param["ThreadId"];
        }

        if (array_key_exists("ToolName",$param) and $param["ToolName"] !== null) {
            $this->ToolName = $param["ToolName"];
        }

        if (array_key_exists("Arguments",$param) and $param["Arguments"] !== null) {
            $this->Arguments = $param["Arguments"];
        }
    }
}
