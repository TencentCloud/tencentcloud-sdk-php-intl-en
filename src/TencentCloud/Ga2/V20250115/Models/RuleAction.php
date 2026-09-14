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
namespace TencentCloud\Ga2\V20250115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Behavior information of Layer 7 forwarding rules
 *
 * @method string getRuleActionType() Obtain <p>Behavior type of the Layer 7 forwarding rule</p><p>Enumeration values:</p><ul><li>ForwardGroup: The forwarding policy forwards to a terminal node group.</li><li>Drop: The forwarding policy drops the request.</li></ul>
 * @method void setRuleActionType(string $RuleActionType) Set <p>Behavior type of the Layer 7 forwarding rule</p><p>Enumeration values:</p><ul><li>ForwardGroup: The forwarding policy forwards to a terminal node group.</li><li>Drop: The forwarding policy drops the request.</li></ul>
 * @method string getRuleActionValue() Obtain <p>Layer 7 forwarding rule action value</p><p>This field is not required to input when RuleActionType is Drop. This field is required when RuleActionType is ForwardGroup, which requires filling in the custom terminal node group ID. The default terminal node group cannot be configured.</p>
 * @method void setRuleActionValue(string $RuleActionValue) Set <p>Layer 7 forwarding rule action value</p><p>This field is not required to input when RuleActionType is Drop. This field is required when RuleActionType is ForwardGroup, which requires filling in the custom terminal node group ID. The default terminal node group cannot be configured.</p>
 */
class RuleAction extends AbstractModel
{
    /**
     * @var string <p>Behavior type of the Layer 7 forwarding rule</p><p>Enumeration values:</p><ul><li>ForwardGroup: The forwarding policy forwards to a terminal node group.</li><li>Drop: The forwarding policy drops the request.</li></ul>
     */
    public $RuleActionType;

    /**
     * @var string <p>Layer 7 forwarding rule action value</p><p>This field is not required to input when RuleActionType is Drop. This field is required when RuleActionType is ForwardGroup, which requires filling in the custom terminal node group ID. The default terminal node group cannot be configured.</p>
     */
    public $RuleActionValue;

    /**
     * @param string $RuleActionType <p>Behavior type of the Layer 7 forwarding rule</p><p>Enumeration values:</p><ul><li>ForwardGroup: The forwarding policy forwards to a terminal node group.</li><li>Drop: The forwarding policy drops the request.</li></ul>
     * @param string $RuleActionValue <p>Layer 7 forwarding rule action value</p><p>This field is not required to input when RuleActionType is Drop. This field is required when RuleActionType is ForwardGroup, which requires filling in the custom terminal node group ID. The default terminal node group cannot be configured.</p>
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
        if (array_key_exists("RuleActionType",$param) and $param["RuleActionType"] !== null) {
            $this->RuleActionType = $param["RuleActionType"];
        }

        if (array_key_exists("RuleActionValue",$param) and $param["RuleActionValue"] !== null) {
            $this->RuleActionValue = $param["RuleActionValue"];
        }
    }
}
