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
 * MCP App content for reconstructing an interactive app from a historical session
 *
 * @method string getPluginId() Obtain <p>Capacity boundary: A single request is read-only for resources belonging to this plugin</p>
 * @method void setPluginId(string $PluginId) Set <p>Capacity boundary: A single request is read-only for resources belonging to this plugin</p>
 * @method string getResourceUri() Obtain <p>ui:// resource, based on which the frontend calls ReadMCPResource to pull HTML</p>
 * @method void setResourceUri(string $ResourceUri) Set <p>ui:// resource, based on which the frontend calls ReadMCPResource to pull HTML</p>
 * @method string getThreadId() Obtain <p>thread on the agent-exec side</p>
 * @method void setThreadId(string $ThreadId) Set <p>thread on the agent-exec side</p>
 * @method string getToolResult() Obtain <p>JSON: The complete original CallToolResult for replay when rebuilding historical sessions</p>
 * @method void setToolResult(string $ToolResult) Set <p>JSON: The complete original CallToolResult for replay when rebuilding historical sessions</p>
 */
class ConversationMcpApp extends AbstractModel
{
    /**
     * @var string <p>Capacity boundary: A single request is read-only for resources belonging to this plugin</p>
     */
    public $PluginId;

    /**
     * @var string <p>ui:// resource, based on which the frontend calls ReadMCPResource to pull HTML</p>
     */
    public $ResourceUri;

    /**
     * @var string <p>thread on the agent-exec side</p>
     */
    public $ThreadId;

    /**
     * @var string <p>JSON: The complete original CallToolResult for replay when rebuilding historical sessions</p>
     */
    public $ToolResult;

    /**
     * @param string $PluginId <p>Capacity boundary: A single request is read-only for resources belonging to this plugin</p>
     * @param string $ResourceUri <p>ui:// resource, based on which the frontend calls ReadMCPResource to pull HTML</p>
     * @param string $ThreadId <p>thread on the agent-exec side</p>
     * @param string $ToolResult <p>JSON: The complete original CallToolResult for replay when rebuilding historical sessions</p>
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

        if (array_key_exists("ResourceUri",$param) and $param["ResourceUri"] !== null) {
            $this->ResourceUri = $param["ResourceUri"];
        }

        if (array_key_exists("ThreadId",$param) and $param["ThreadId"] !== null) {
            $this->ThreadId = $param["ThreadId"];
        }

        if (array_key_exists("ToolResult",$param) and $param["ToolResult"] !== null) {
            $this->ToolResult = $param["ToolResult"];
        }
    }
}
