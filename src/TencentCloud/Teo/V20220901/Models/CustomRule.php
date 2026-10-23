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
 * Custom rule under Web protection feature.
 *
 * @method string getName() Obtain <p>Custom rule name.</p>
 * @method void setName(string $Name) Set <p>Custom rule name.</p>
 * @method string getCondition() Obtain <p>The specific content of a custom rule must comply with the expression syntax. For detailed specifications, refer to the <a href="https://www.tencentcloud.com/document/product/1552/125343?from_cn_redirect=1">product document</a>.</p>
 * @method void setCondition(string $Condition) Set <p>The specific content of a custom rule must comply with the expression syntax. For detailed specifications, refer to the <a href="https://www.tencentcloud.com/document/product/1552/125343?from_cn_redirect=1">product document</a>.</p>
 * @method SecurityAction getAction() Obtain <p>Handling action of the custom rule. SecurityAction.Name value range is as follows:</p><ul><li>Allow: allow, where AllowActionParameters supports MinDelayTime and MaxDelayTime configuration;</li><li>Deny: block, where DenyActionParameters supports BlockIp, ReturnCustomPage, and Stall configuration;</li><li>Monitor: observe;</li><li>Challenge: challenge, where ChallengeActionParameters.ChallengeOption supports JSChallenge and ManagedChallenge;</li><li>Redirect: redirect to a URL.</li></ul>
 * @method void setAction(SecurityAction $Action) Set <p>Handling action of the custom rule. SecurityAction.Name value range is as follows:</p><ul><li>Allow: allow, where AllowActionParameters supports MinDelayTime and MaxDelayTime configuration;</li><li>Deny: block, where DenyActionParameters supports BlockIp, ReturnCustomPage, and Stall configuration;</li><li>Monitor: observe;</li><li>Challenge: challenge, where ChallengeActionParameters.ChallengeOption supports JSChallenge and ManagedChallenge;</li><li>Redirect: redirect to a URL.</li></ul>
 * @method string getEnabled() Obtain <p>Whether the custom rule is enabled. Valid values: <ul><li>on: enabled;</li><li>off: disabled.</li></ul></p>
 * @method void setEnabled(string $Enabled) Set <p>Whether the custom rule is enabled. Valid values: <ul><li>on: enabled;</li><li>off: disabled.</li></ul></p>
 * @method string getId() Obtain <p>ID of the custom rule. The rule ID supports different rule configuration operations: <ul><li>Add a new rule: leave the ID empty or do not specify the ID parameter;</li><li>Modify an existing rule: specify the rule ID that needs to be updated/modified;</li><li>Delete an existing rule: existing rules not included in the Rules list in the CustomRules parameter will be deleted.</li></ul></p>
 * @method void setId(string $Id) Set <p>ID of the custom rule. The rule ID supports different rule configuration operations: <ul><li>Add a new rule: leave the ID empty or do not specify the ID parameter;</li><li>Modify an existing rule: specify the rule ID that needs to be updated/modified;</li><li>Delete an existing rule: existing rules not included in the Rules list in the CustomRules parameter will be deleted.</li></ul></p>
 * @method string getRuleType() Obtain <p>Type of the custom rule. Valid values: <ul><li>BasicAccessRule: basic access control;</li><li>PreciseMatchRule: exact matching rule;</li><li>ManagedAccessRule: expert customized rule, supported only for output parameters.</li></ul>Note: If RuleType is not specified, it defaults to <code>PreciseMatchRule</code>.</p>
 * @method void setRuleType(string $RuleType) Set <p>Type of the custom rule. Valid values: <ul><li>BasicAccessRule: basic access control;</li><li>PreciseMatchRule: exact matching rule;</li><li>ManagedAccessRule: expert customized rule, supported only for output parameters.</li></ul>Note: If RuleType is not specified, it defaults to <code>PreciseMatchRule</code>.</p>
 * @method integer getPriority() Obtain <p>Priority of custom rules. Value range: 0-100. Default value: 0. Only exact matching rules (<code>PreciseMatchRule</code>) are supported.</p>
 * @method void setPriority(integer $Priority) Set <p>Priority of custom rules. Value range: 0-100. Default value: 0. Only exact matching rules (<code>PreciseMatchRule</code>) are supported.</p>
 */
class CustomRule extends AbstractModel
{
    /**
     * @var string <p>Custom rule name.</p>
     */
    public $Name;

    /**
     * @var string <p>The specific content of a custom rule must comply with the expression syntax. For detailed specifications, refer to the <a href="https://www.tencentcloud.com/document/product/1552/125343?from_cn_redirect=1">product document</a>.</p>
     */
    public $Condition;

    /**
     * @var SecurityAction <p>Handling action of the custom rule. SecurityAction.Name value range is as follows:</p><ul><li>Allow: allow, where AllowActionParameters supports MinDelayTime and MaxDelayTime configuration;</li><li>Deny: block, where DenyActionParameters supports BlockIp, ReturnCustomPage, and Stall configuration;</li><li>Monitor: observe;</li><li>Challenge: challenge, where ChallengeActionParameters.ChallengeOption supports JSChallenge and ManagedChallenge;</li><li>Redirect: redirect to a URL.</li></ul>
     */
    public $Action;

    /**
     * @var string <p>Whether the custom rule is enabled. Valid values: <ul><li>on: enabled;</li><li>off: disabled.</li></ul></p>
     */
    public $Enabled;

    /**
     * @var string <p>ID of the custom rule. The rule ID supports different rule configuration operations: <ul><li>Add a new rule: leave the ID empty or do not specify the ID parameter;</li><li>Modify an existing rule: specify the rule ID that needs to be updated/modified;</li><li>Delete an existing rule: existing rules not included in the Rules list in the CustomRules parameter will be deleted.</li></ul></p>
     */
    public $Id;

    /**
     * @var string <p>Type of the custom rule. Valid values: <ul><li>BasicAccessRule: basic access control;</li><li>PreciseMatchRule: exact matching rule;</li><li>ManagedAccessRule: expert customized rule, supported only for output parameters.</li></ul>Note: If RuleType is not specified, it defaults to <code>PreciseMatchRule</code>.</p>
     */
    public $RuleType;

    /**
     * @var integer <p>Priority of custom rules. Value range: 0-100. Default value: 0. Only exact matching rules (<code>PreciseMatchRule</code>) are supported.</p>
     */
    public $Priority;

    /**
     * @param string $Name <p>Custom rule name.</p>
     * @param string $Condition <p>The specific content of a custom rule must comply with the expression syntax. For detailed specifications, refer to the <a href="https://www.tencentcloud.com/document/product/1552/125343?from_cn_redirect=1">product document</a>.</p>
     * @param SecurityAction $Action <p>Handling action of the custom rule. SecurityAction.Name value range is as follows:</p><ul><li>Allow: allow, where AllowActionParameters supports MinDelayTime and MaxDelayTime configuration;</li><li>Deny: block, where DenyActionParameters supports BlockIp, ReturnCustomPage, and Stall configuration;</li><li>Monitor: observe;</li><li>Challenge: challenge, where ChallengeActionParameters.ChallengeOption supports JSChallenge and ManagedChallenge;</li><li>Redirect: redirect to a URL.</li></ul>
     * @param string $Enabled <p>Whether the custom rule is enabled. Valid values: <ul><li>on: enabled;</li><li>off: disabled.</li></ul></p>
     * @param string $Id <p>ID of the custom rule. The rule ID supports different rule configuration operations: <ul><li>Add a new rule: leave the ID empty or do not specify the ID parameter;</li><li>Modify an existing rule: specify the rule ID that needs to be updated/modified;</li><li>Delete an existing rule: existing rules not included in the Rules list in the CustomRules parameter will be deleted.</li></ul></p>
     * @param string $RuleType <p>Type of the custom rule. Valid values: <ul><li>BasicAccessRule: basic access control;</li><li>PreciseMatchRule: exact matching rule;</li><li>ManagedAccessRule: expert customized rule, supported only for output parameters.</li></ul>Note: If RuleType is not specified, it defaults to <code>PreciseMatchRule</code>.</p>
     * @param integer $Priority <p>Priority of custom rules. Value range: 0-100. Default value: 0. Only exact matching rules (<code>PreciseMatchRule</code>) are supported.</p>
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
