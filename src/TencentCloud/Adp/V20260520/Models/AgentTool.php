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
 * Agent tool details
 *
 * @method AgentToolBasicConfig getConfig() Obtain <p>Tool configuration field</p>
 * @method void setConfig(AgentToolBasicConfig $Config) Set <p>Tool configuration field</p>
 * @method string getName() Obtain <p>Tool name</p>
 * @method void setName(string $Name) Set <p>Tool name</p>
 * @method integer getStatus() Obtain <p>Tool status</p><p>Enumeration values:</p><ul><li>1: available</li><li>2: unavailable</li><li>3: invalid</li></ul>
 * @method void setStatus(integer $Status) Set <p>Tool status</p><p>Enumeration values:</p><ul><li>1: available</li><li>2: unavailable</li><li>3: invalid</li></ul>
 * @method integer getStreamMode() Obtain <p>Calling method</p><p>Enumeration values:</p><ul><li>0: Non-streaming</li><li>1: Streaming</li></ul>
 * @method void setStreamMode(integer $StreamMode) Set <p>Calling method</p><p>Enumeration values:</p><ul><li>0: Non-streaming</li><li>1: Streaming</li></ul>
 * @method integer getToolAccessMode() Obtain <p>Tool access mode</p><p>Enumeration values:</p><ul><li>0: Not specified</li><li>1: Read-only</li><li>2: Write/Delete</li></ul>
 * @method void setToolAccessMode(integer $ToolAccessMode) Set <p>Tool access mode</p><p>Enumeration values:</p><ul><li>0: Not specified</li><li>1: Read-only</li><li>2: Write/Delete</li></ul>
 */
class AgentTool extends AbstractModel
{
    /**
     * @var AgentToolBasicConfig <p>Tool configuration field</p>
     */
    public $Config;

    /**
     * @var string <p>Tool name</p>
     */
    public $Name;

    /**
     * @var integer <p>Tool status</p><p>Enumeration values:</p><ul><li>1: available</li><li>2: unavailable</li><li>3: invalid</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>Calling method</p><p>Enumeration values:</p><ul><li>0: Non-streaming</li><li>1: Streaming</li></ul>
     */
    public $StreamMode;

    /**
     * @var integer <p>Tool access mode</p><p>Enumeration values:</p><ul><li>0: Not specified</li><li>1: Read-only</li><li>2: Write/Delete</li></ul>
     */
    public $ToolAccessMode;

    /**
     * @param AgentToolBasicConfig $Config <p>Tool configuration field</p>
     * @param string $Name <p>Tool name</p>
     * @param integer $Status <p>Tool status</p><p>Enumeration values:</p><ul><li>1: available</li><li>2: unavailable</li><li>3: invalid</li></ul>
     * @param integer $StreamMode <p>Calling method</p><p>Enumeration values:</p><ul><li>0: Non-streaming</li><li>1: Streaming</li></ul>
     * @param integer $ToolAccessMode <p>Tool access mode</p><p>Enumeration values:</p><ul><li>0: Not specified</li><li>1: Read-only</li><li>2: Write/Delete</li></ul>
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
        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new AgentToolBasicConfig();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StreamMode",$param) and $param["StreamMode"] !== null) {
            $this->StreamMode = $param["StreamMode"];
        }

        if (array_key_exists("ToolAccessMode",$param) and $param["ToolAccessMode"] !== null) {
            $this->ToolAccessMode = $param["ToolAccessMode"];
        }
    }
}
