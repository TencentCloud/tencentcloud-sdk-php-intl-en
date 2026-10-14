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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getPluginId() Obtain 
 * @method void setPluginId(string $PluginId) Set 
 * @method string getResourceUri() Obtain 
 * @method void setResourceUri(string $ResourceUri) Set 
 * @method string getThreadId() Obtain 
 * @method void setThreadId(string $ThreadId) Set 
 * @method string getToolResult() Obtain 
 * @method void setToolResult(string $ToolResult) Set 
 */
class ConversationMcpApp extends AbstractModel
{
    /**
     * @var string 
     */
    public $PluginId;

    /**
     * @var string 
     */
    public $ResourceUri;

    /**
     * @var string 
     */
    public $ThreadId;

    /**
     * @var string 
     */
    public $ToolResult;

    /**
     * @param string $PluginId 
     * @param string $ResourceUri 
     * @param string $ThreadId 
     * @param string $ToolResult 
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
