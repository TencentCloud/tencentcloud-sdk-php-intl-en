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
 * CreateAgent request structure.
 *
 * @method string getAppId() Obtain <p>Application ID.</p>
 * @method void setAppId(string $AppId) Set <p>Application ID.</p>
 * @method AgentSpec getAgent() Obtain <p>Agent configuration</p>
 * @method void setAgent(AgentSpec $Agent) Set <p>Agent configuration</p>
 * @method integer getKind() Obtain <p>Agent type, case-sensitive between B-end configuration Agent and client user-mode Agent</p><p>Enumeration values:</p><ul><li>0: Configuration-end Agent</li><li>1: User-mode Agent</li></ul>
 * @method void setKind(integer $Kind) Set <p>Agent type, case-sensitive between B-end configuration Agent and client user-mode Agent</p><p>Enumeration values:</p><ul><li>0: Configuration-end Agent</li><li>1: User-mode Agent</li></ul>
 */
class CreateAgentRequest extends AbstractModel
{
    /**
     * @var string <p>Application ID.</p>
     */
    public $AppId;

    /**
     * @var AgentSpec <p>Agent configuration</p>
     */
    public $Agent;

    /**
     * @var integer <p>Agent type, case-sensitive between B-end configuration Agent and client user-mode Agent</p><p>Enumeration values:</p><ul><li>0: Configuration-end Agent</li><li>1: User-mode Agent</li></ul>
     */
    public $Kind;

    /**
     * @param string $AppId <p>Application ID.</p>
     * @param AgentSpec $Agent <p>Agent configuration</p>
     * @param integer $Kind <p>Agent type, case-sensitive between B-end configuration Agent and client user-mode Agent</p><p>Enumeration values:</p><ul><li>0: Configuration-end Agent</li><li>1: User-mode Agent</li></ul>
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

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new AgentSpec();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }
    }
}
