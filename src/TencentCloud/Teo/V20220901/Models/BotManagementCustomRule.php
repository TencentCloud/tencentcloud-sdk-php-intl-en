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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Web security Bot custom rule.
 *
 * @method string getId() Obtain The ID of a Bot custom rule. different rule configuration operations are supported by rule ID: <li><b>add</b> a new rule: leave the ID empty or do not specify the ID parameter.</li> <li><b>modify</b> an existing rule: specify the rule ID that needs to be updated/modified.</li> <li><b>delete</b> an existing rule: existing Rules not included in the Rules list under the BotManagementCustomRules parameter will be deleted.</li>.
 * @method void setId(string $Id) Set The ID of a Bot custom rule. different rule configuration operations are supported by rule ID: <li><b>add</b> a new rule: leave the ID empty or do not specify the ID parameter.</li> <li><b>modify</b> an existing rule: specify the rule ID that needs to be updated/modified.</li> <li><b>delete</b> an existing rule: existing Rules not included in the Rules list under the BotManagementCustomRules parameter will be deleted.</li>.
 * @method string getName() Obtain Specifies the name of the Bot custom rule.
 * @method void setName(string $Name) Set Specifies the name of the Bot custom rule.
 * @method string getEnabled() Obtain Whether the custom Bot rule is enabled. valid values: <li>on: enabled;</li><li>off: disabled.</li>.
 * @method void setEnabled(string $Enabled) Set Whether the custom Bot rule is enabled. valid values: <li>on: enabled;</li><li>off: disabled.</li>.
 * @method integer getPriority() Obtain Priority of custom Bot rules. value range: 1–100. default value is 50.
 * @method void setPriority(integer $Priority) Set Priority of custom Bot rules. value range: 1–100. default value is 50.
 * @method string getCondition() Obtain Specifies the specific content of the Bot custom rule, which must comply with expression grammar. for detailed specifications, refer to the product document.
 * @method void setCondition(string $Condition) Set Specifies the specific content of the Bot custom rule, which must comply with expression grammar. for detailed specifications, refer to the product document.
 * @method array getAction() Obtain The handling method for Bot custom rules. valid values: <li>Monitor: observation;</li><li>Deny: block, where DenyActionParameters.Name supports Deny and ReturnCustomPage;</li><li>Challenge: Challenge, where ChallengeActionParameters.Name supports JSChallenge and ManagedChallenge;</li><li>Redirect: Redirect to URL.</li>.
 * @method void setAction(array $Action) Set The handling method for Bot custom rules. valid values: <li>Monitor: observation;</li><li>Deny: block, where DenyActionParameters.Name supports Deny and ReturnCustomPage;</li><li>Challenge: Challenge, where ChallengeActionParameters.Name supports JSChallenge and ManagedChallenge;</li><li>Redirect: Redirect to URL.</li>.
 */
class BotManagementCustomRule extends AbstractModel
{
    /**
     * @var string The ID of a Bot custom rule. different rule configuration operations are supported by rule ID: <li><b>add</b> a new rule: leave the ID empty or do not specify the ID parameter.</li> <li><b>modify</b> an existing rule: specify the rule ID that needs to be updated/modified.</li> <li><b>delete</b> an existing rule: existing Rules not included in the Rules list under the BotManagementCustomRules parameter will be deleted.</li>.
     */
    public $Id;

    /**
     * @var string Specifies the name of the Bot custom rule.
     */
    public $Name;

    /**
     * @var string Whether the custom Bot rule is enabled. valid values: <li>on: enabled;</li><li>off: disabled.</li>.
     */
    public $Enabled;

    /**
     * @var integer Priority of custom Bot rules. value range: 1–100. default value is 50.
     */
    public $Priority;

    /**
     * @var string Specifies the specific content of the Bot custom rule, which must comply with expression grammar. for detailed specifications, refer to the product document.
     */
    public $Condition;

    /**
     * @var array The handling method for Bot custom rules. valid values: <li>Monitor: observation;</li><li>Deny: block, where DenyActionParameters.Name supports Deny and ReturnCustomPage;</li><li>Challenge: Challenge, where ChallengeActionParameters.Name supports JSChallenge and ManagedChallenge;</li><li>Redirect: Redirect to URL.</li>.
     */
    public $Action;

    /**
     * @param string $Id The ID of a Bot custom rule. different rule configuration operations are supported by rule ID: <li><b>add</b> a new rule: leave the ID empty or do not specify the ID parameter.</li> <li><b>modify</b> an existing rule: specify the rule ID that needs to be updated/modified.</li> <li><b>delete</b> an existing rule: existing Rules not included in the Rules list under the BotManagementCustomRules parameter will be deleted.</li>.
     * @param string $Name Specifies the name of the Bot custom rule.
     * @param string $Enabled Whether the custom Bot rule is enabled. valid values: <li>on: enabled;</li><li>off: disabled.</li>.
     * @param integer $Priority Priority of custom Bot rules. value range: 1–100. default value is 50.
     * @param string $Condition Specifies the specific content of the Bot custom rule, which must comply with expression grammar. for detailed specifications, refer to the product document.
     * @param array $Action The handling method for Bot custom rules. valid values: <li>Monitor: observation;</li><li>Deny: block, where DenyActionParameters.Name supports Deny and ReturnCustomPage;</li><li>Challenge: Challenge, where ChallengeActionParameters.Name supports JSChallenge and ManagedChallenge;</li><li>Redirect: Redirect to URL.</li>.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = [];
            foreach ($param["Action"] as $key => $value){
                $obj = new SecurityWeightedAction();
                $obj->deserialize($value);
                array_push($this->Action, $obj);
            }
        }
    }
}
