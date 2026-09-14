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
 * Conditional information of Layer 7 forwarding rules
 *
 * @method string getRuleConditionType() Obtain <p>Condition type of Layer 7 forwarding rule</p><p>Enumeration values:</p><ul><li>Path: Path</li></ul>
 * @method void setRuleConditionType(string $RuleConditionType) Set <p>Condition type of Layer 7 forwarding rule</p><p>Enumeration values:</p><ul><li>Path: Path</li></ul>
 * @method array getRuleConditionValue() Obtain <p>Layer 7 forwarding rule condition value</p><p>Parameter format: The format must match the regular expression: ^[a-zA-Z0-9_.-/]{1,80}$</p><p>The array length cannot exceed 1.</p>
 * @method void setRuleConditionValue(array $RuleConditionValue) Set <p>Layer 7 forwarding rule condition value</p><p>Parameter format: The format must match the regular expression: ^[a-zA-Z0-9_.-/]{1,80}$</p><p>The array length cannot exceed 1.</p>
 */
class RuleCondition extends AbstractModel
{
    /**
     * @var string <p>Condition type of Layer 7 forwarding rule</p><p>Enumeration values:</p><ul><li>Path: Path</li></ul>
     */
    public $RuleConditionType;

    /**
     * @var array <p>Layer 7 forwarding rule condition value</p><p>Parameter format: The format must match the regular expression: ^[a-zA-Z0-9_.-/]{1,80}$</p><p>The array length cannot exceed 1.</p>
     */
    public $RuleConditionValue;

    /**
     * @param string $RuleConditionType <p>Condition type of Layer 7 forwarding rule</p><p>Enumeration values:</p><ul><li>Path: Path</li></ul>
     * @param array $RuleConditionValue <p>Layer 7 forwarding rule condition value</p><p>Parameter format: The format must match the regular expression: ^[a-zA-Z0-9_.-/]{1,80}$</p><p>The array length cannot exceed 1.</p>
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
        if (array_key_exists("RuleConditionType",$param) and $param["RuleConditionType"] !== null) {
            $this->RuleConditionType = $param["RuleConditionType"];
        }

        if (array_key_exists("RuleConditionValue",$param) and $param["RuleConditionValue"] !== null) {
            $this->RuleConditionValue = $param["RuleConditionValue"];
        }
    }
}
