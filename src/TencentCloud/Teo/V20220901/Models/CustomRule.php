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
 * @method string getName() Obtain The custom rule name.
 * @method void setName(string $Name) Set The custom rule name.
 * @method string getCondition() Obtain The specific content of custom rules must comply with expression grammar. For detailed specifications, please refer to the product document (https://www.tencentcloud.com/document/product/1552/125343?from_cn_redirect=1).
 * @method void setCondition(string $Condition) Set The specific content of custom rules must comply with expression grammar. For detailed specifications, please refer to the product document (https://www.tencentcloud.com/document/product/1552/125343?from_cn_redirect=1).
 * @method SecurityAction getAction() Obtain The handling action of custom rules. The value range of SecurityAction.Name is as follows:<ul><li>Deny: blocking;</li><li>Monitor: observation;</li><li>ReturnCustomPage: use specified page to block;</li><li>Redirect: redirect to URL;</li><li>BlockIP: IP blocking;</li><li>JSChallenge: JavaScript challenge;</li><li>ManagedChallenge: managed challenge;</li><li>Allow: allowing.</li></ul>
 * @method void setAction(SecurityAction $Action) Set The handling action of custom rules. The value range of SecurityAction.Name is as follows:<ul><li>Deny: blocking;</li><li>Monitor: observation;</li><li>ReturnCustomPage: use specified page to block;</li><li>Redirect: redirect to URL;</li><li>BlockIP: IP blocking;</li><li>JSChallenge: JavaScript challenge;</li><li>ManagedChallenge: managed challenge;</li><li>Allow: allowing.</li></ul>
 * @method string getEnabled() Obtain Whether the custom rule is enabled. Valid values: <ul><li>on: enable</li><li>off: disable</li></ul>
 * @method void setEnabled(string $Enabled) Set Whether the custom rule is enabled. Valid values: <ul><li>on: enable</li><li>off: disable</li></ul>
 * @method string getId() Obtain ID of the custom rule. Different rule configuration operations are supported by rule ID:<ul><li>Add a new rule: The ID is empty or the ID parameter is not specified.</li><li>Modify an existing rule: Specify the rule ID that needs to be updated or modified.</li><li>Delete an existing rule: Existing rules not included in the Rules list in the CustomRules parameter will be deleted.</li></ul>
 * @method void setId(string $Id) Set ID of the custom rule. Different rule configuration operations are supported by rule ID:<ul><li>Add a new rule: The ID is empty or the ID parameter is not specified.</li><li>Modify an existing rule: Specify the rule ID that needs to be updated or modified.</li><li>Delete an existing rule: Existing rules not included in the Rules list in the CustomRules parameter will be deleted.</li></ul>
 * @method string getRuleType() Obtain Type of custom rule. Valid values: <ul><li>BasicAccessRule: basic access control;</li><li>PreciseMatchRule: exact matching rule;</li><li>ManagedAccessRule: expert customized rule, only supported in output parameters.</li></ul>Description: When RuleType is not specified, it defaults to `PreciseMatchRule`.
 * @method void setRuleType(string $RuleType) Set Type of custom rule. Valid values: <ul><li>BasicAccessRule: basic access control;</li><li>PreciseMatchRule: exact matching rule;</li><li>ManagedAccessRule: expert customized rule, only supported in output parameters.</li></ul>Description: When RuleType is not specified, it defaults to `PreciseMatchRule`.
 * @method integer getPriority() Obtain Priority of custom rules, ranging from 0 to 100, defaults to 0, and only supports exact matching rules (`PreciseMatchRule`).
 * @method void setPriority(integer $Priority) Set Priority of custom rules, ranging from 0 to 100, defaults to 0, and only supports exact matching rules (`PreciseMatchRule`).
 */
class CustomRule extends AbstractModel
{
    /**
     * @var string The custom rule name.
     */
    public $Name;

    /**
     * @var string The specific content of custom rules must comply with expression grammar. For detailed specifications, please refer to the product document (https://www.tencentcloud.com/document/product/1552/125343?from_cn_redirect=1).
     */
    public $Condition;

    /**
     * @var SecurityAction The handling action of custom rules. The value range of SecurityAction.Name is as follows:<ul><li>Deny: blocking;</li><li>Monitor: observation;</li><li>ReturnCustomPage: use specified page to block;</li><li>Redirect: redirect to URL;</li><li>BlockIP: IP blocking;</li><li>JSChallenge: JavaScript challenge;</li><li>ManagedChallenge: managed challenge;</li><li>Allow: allowing.</li></ul>
     */
    public $Action;

    /**
     * @var string Whether the custom rule is enabled. Valid values: <ul><li>on: enable</li><li>off: disable</li></ul>
     */
    public $Enabled;

    /**
     * @var string ID of the custom rule. Different rule configuration operations are supported by rule ID:<ul><li>Add a new rule: The ID is empty or the ID parameter is not specified.</li><li>Modify an existing rule: Specify the rule ID that needs to be updated or modified.</li><li>Delete an existing rule: Existing rules not included in the Rules list in the CustomRules parameter will be deleted.</li></ul>
     */
    public $Id;

    /**
     * @var string Type of custom rule. Valid values: <ul><li>BasicAccessRule: basic access control;</li><li>PreciseMatchRule: exact matching rule;</li><li>ManagedAccessRule: expert customized rule, only supported in output parameters.</li></ul>Description: When RuleType is not specified, it defaults to `PreciseMatchRule`.
     */
    public $RuleType;

    /**
     * @var integer Priority of custom rules, ranging from 0 to 100, defaults to 0, and only supports exact matching rules (`PreciseMatchRule`).
     */
    public $Priority;

    /**
     * @param string $Name The custom rule name.
     * @param string $Condition The specific content of custom rules must comply with expression grammar. For detailed specifications, please refer to the product document (https://www.tencentcloud.com/document/product/1552/125343?from_cn_redirect=1).
     * @param SecurityAction $Action The handling action of custom rules. The value range of SecurityAction.Name is as follows:<ul><li>Deny: blocking;</li><li>Monitor: observation;</li><li>ReturnCustomPage: use specified page to block;</li><li>Redirect: redirect to URL;</li><li>BlockIP: IP blocking;</li><li>JSChallenge: JavaScript challenge;</li><li>ManagedChallenge: managed challenge;</li><li>Allow: allowing.</li></ul>
     * @param string $Enabled Whether the custom rule is enabled. Valid values: <ul><li>on: enable</li><li>off: disable</li></ul>
     * @param string $Id ID of the custom rule. Different rule configuration operations are supported by rule ID:<ul><li>Add a new rule: The ID is empty or the ID parameter is not specified.</li><li>Modify an existing rule: Specify the rule ID that needs to be updated or modified.</li><li>Delete an existing rule: Existing rules not included in the Rules list in the CustomRules parameter will be deleted.</li></ul>
     * @param string $RuleType Type of custom rule. Valid values: <ul><li>BasicAccessRule: basic access control;</li><li>PreciseMatchRule: exact matching rule;</li><li>ManagedAccessRule: expert customized rule, only supported in output parameters.</li></ul>Description: When RuleType is not specified, it defaults to `PreciseMatchRule`.
     * @param integer $Priority Priority of custom rules, ranging from 0 to 100, defaults to 0, and only supports exact matching rules (`PreciseMatchRule`).
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
