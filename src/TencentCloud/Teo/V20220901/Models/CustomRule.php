<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Custom rule configuration.
 *
 * @method string getName() Obtain The custom rule name.
 * @method void setName(string $Name) Set The custom rule name.
 * @method string getCondition() Obtain The specifics of the custom rule, must comply with the expression grammar, please refer to product documentation for details.
 * @method void setCondition(string $Condition) Set The specifics of the custom rule, must comply with the expression grammar, please refer to product documentation for details.
 * @method SecurityAction getAction() Obtain Action for custom rules. The Name parameter of SecurityAction supports: <li>`Deny`: block;</li> <li>`Monitor`: observe;</li> <li>`ReturnCustomPage`: block with customized page;</li> <li>`Redirect`: Redirect to URL;</li> <li>`BlockIP`: IP blocking;</li> <li>`JSChallenge`: JavaScript challenge;</li> <li>`ManagedChallenge`: managed challenge;</li> <li>`Allow`: Allow.</li>.
 * @method void setAction(SecurityAction $Action) Set Action for custom rules. The Name parameter of SecurityAction supports: <li>`Deny`: block;</li> <li>`Monitor`: observe;</li> <li>`ReturnCustomPage`: block with customized page;</li> <li>`Redirect`: Redirect to URL;</li> <li>`BlockIP`: IP blocking;</li> <li>`JSChallenge`: JavaScript challenge;</li> <li>`ManagedChallenge`: managed challenge;</li> <li>`Allow`: Allow.</li>.
 * @method string getEnabled() Obtain The custom rule status. Values: <li>`on`: enabled</li> <li>`off`: disabled</li>.
 * @method void setEnabled(string $Enabled) Set The custom rule status. Values: <li>`on`: enabled</li> <li>`off`: disabled</li>.
 * @method string getId() Obtain Custom rule ID. <br>Different rule configuration operations are supported by rule ID : <br> - Add a new rule: ID is empty or the ID parameter is not specified; <br> - Modify an existing rule: specify the rule ID that needs to be updated/modified; <br> - Delete an existing rule: existing rules not included in the Rules parameter will be deleted.
 * @method void setId(string $Id) Set Custom rule ID. <br>Different rule configuration operations are supported by rule ID : <br> - Add a new rule: ID is empty or the ID parameter is not specified; <br> - Modify an existing rule: specify the rule ID that needs to be updated/modified; <br> - Delete an existing rule: existing rules not included in the Rules parameter will be deleted.
 * @method string getRuleType() Obtain Type of custom rule. Values: <li>`BasicAccessRule`: basic access control;</li> <li>`PreciseMatchRule`: exact custom rule, default;</li> <li>`ManagedAccessRule`: expert customized rule, output parameter only.</li>The default value is PreciseMatchRule.
 * @method void setRuleType(string $RuleType) Set Type of custom rule. Values: <li>`BasicAccessRule`: basic access control;</li> <li>`PreciseMatchRule`: exact custom rule, default;</li> <li>`ManagedAccessRule`: expert customized rule, output parameter only.</li>The default value is PreciseMatchRule.
 * @method integer getPriority() Obtain Customize the priority of custom rule. Range: 0-100, the default value is 0, this parameter only supports PreciseMatchRule.
 * @method void setPriority(integer $Priority) Set Customize the priority of custom rule. Range: 0-100, the default value is 0, this parameter only supports PreciseMatchRule.
 */
class CustomRule extends AbstractModel
{
    /**
     * @var string The custom rule name.
     */
    public $Name;

    /**
     * @var string The specifics of the custom rule, must comply with the expression grammar, please refer to product documentation for details.
     */
    public $Condition;

    /**
     * @var SecurityAction Action for custom rules. The Name parameter of SecurityAction supports: <li>`Deny`: block;</li> <li>`Monitor`: observe;</li> <li>`ReturnCustomPage`: block with customized page;</li> <li>`Redirect`: Redirect to URL;</li> <li>`BlockIP`: IP blocking;</li> <li>`JSChallenge`: JavaScript challenge;</li> <li>`ManagedChallenge`: managed challenge;</li> <li>`Allow`: Allow.</li>.
     */
    public $Action;

    /**
     * @var string The custom rule status. Values: <li>`on`: enabled</li> <li>`off`: disabled</li>.
     */
    public $Enabled;

    /**
     * @var string Custom rule ID. <br>Different rule configuration operations are supported by rule ID : <br> - Add a new rule: ID is empty or the ID parameter is not specified; <br> - Modify an existing rule: specify the rule ID that needs to be updated/modified; <br> - Delete an existing rule: existing rules not included in the Rules parameter will be deleted.
     */
    public $Id;

    /**
     * @var string Type of custom rule. Values: <li>`BasicAccessRule`: basic access control;</li> <li>`PreciseMatchRule`: exact custom rule, default;</li> <li>`ManagedAccessRule`: expert customized rule, output parameter only.</li>The default value is PreciseMatchRule.
     */
    public $RuleType;

    /**
     * @var integer Customize the priority of custom rule. Range: 0-100, the default value is 0, this parameter only supports PreciseMatchRule.
     */
    public $Priority;

    /**
     * @param string $Name The custom rule name.
     * @param string $Condition The specifics of the custom rule, must comply with the expression grammar, please refer to product documentation for details.
     * @param SecurityAction $Action Action for custom rules. The Name parameter of SecurityAction supports: <li>`Deny`: block;</li> <li>`Monitor`: observe;</li> <li>`ReturnCustomPage`: block with customized page;</li> <li>`Redirect`: Redirect to URL;</li> <li>`BlockIP`: IP blocking;</li> <li>`JSChallenge`: JavaScript challenge;</li> <li>`ManagedChallenge`: managed challenge;</li> <li>`Allow`: Allow.</li>.
     * @param string $Enabled The custom rule status. Values: <li>`on`: enabled</li> <li>`off`: disabled</li>.
     * @param string $Id Custom rule ID. <br>Different rule configuration operations are supported by rule ID : <br> - Add a new rule: ID is empty or the ID parameter is not specified; <br> - Modify an existing rule: specify the rule ID that needs to be updated/modified; <br> - Delete an existing rule: existing rules not included in the Rules parameter will be deleted.
     * @param string $RuleType Type of custom rule. Values: <li>`BasicAccessRule`: basic access control;</li> <li>`PreciseMatchRule`: exact custom rule, default;</li> <li>`ManagedAccessRule`: expert customized rule, output parameter only.</li>The default value is PreciseMatchRule.
     * @param integer $Priority Customize the priority of custom rule. Range: 0-100, the default value is 0, this parameter only supports PreciseMatchRule.
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

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = new SecurityAction();
            $this->Action->deserialize($param["Action"]);
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }
    }
}
