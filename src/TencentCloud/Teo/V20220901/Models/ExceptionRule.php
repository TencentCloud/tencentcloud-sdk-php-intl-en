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
 * Exception rule for Web security
 *
 * @method string getId() Obtain ID of the exception rule.<br>Different rule configuration operations can be performed by rule ID:<br> <li> <b>Add</b> a new rule: leave the ID empty or do not specify the ID parameter;</li><li> <b>Modify</b> an existing rule: specify the rule ID to be updated/modified;</li><li> <b>Delete</b> an existing rule: existing rules not included in the Rules list in the ExceptionRules parameter will be deleted.</li>
 * @method void setId(string $Id) Set ID of the exception rule.<br>Different rule configuration operations can be performed by rule ID:<br> <li> <b>Add</b> a new rule: leave the ID empty or do not specify the ID parameter;</li><li> <b>Modify</b> an existing rule: specify the rule ID to be updated/modified;</li><li> <b>Delete</b> an existing rule: existing rules not included in the Rules list in the ExceptionRules parameter will be deleted.</li>
 * @method string getName() Obtain Name of the exception rule.
 * @method void setName(string $Name) Set Name of the exception rule.
 * @method string getCondition() Obtain Specific content of the exception rule must comply with the expression grammar. For detailed specifications, please refer to the product document.
 * @method void setCondition(string $Condition) Set Specific content of the exception rule must comply with the expression grammar. For detailed specifications, please refer to the product document.
 * @method string getSkipScope() Obtain Exception rule execution options. Valid values: <li>WebSecurityModules: assigns the security protection module for the exception rule. Use in conjunction with WebSecurityModulesForException.</li><li>WebSecuritySubmodules: assigns the security protection submodule for the exception rule. Use in conjunction with WebSecuritySubmodulesForException.</li><li>ManagedRules: assigns the specific managed rule for the exception rule. Use in conjunction with ManagedRulesForException.</li><li>ManagedRuleGroups: assigns the managed rule group for the exception rule. Use in conjunction with ManagedRuleGroupsForException.</li>
 * @method void setSkipScope(string $SkipScope) Set Exception rule execution options. Valid values: <li>WebSecurityModules: assigns the security protection module for the exception rule. Use in conjunction with WebSecurityModulesForException.</li><li>WebSecuritySubmodules: assigns the security protection submodule for the exception rule. Use in conjunction with WebSecuritySubmodulesForException.</li><li>ManagedRules: assigns the specific managed rule for the exception rule. Use in conjunction with ManagedRulesForException.</li><li>ManagedRuleGroups: assigns the managed rule group for the exception rule. Use in conjunction with ManagedRuleGroupsForException.</li>
 * @method string getSkipOption() Obtain Skip the specific type of request. Valid values: <li>SkipOnAllRequestFields: skip all requests;</li><li>SkipOnSpecifiedRequestFields: skip specified request fields.</li>Valid only when SkipScope is ManagedRules or ManagedRuleGroups.
 * @method void setSkipOption(string $SkipOption) Set Skip the specific type of request. Valid values: <li>SkipOnAllRequestFields: skip all requests;</li><li>SkipOnSpecifiedRequestFields: skip specified request fields.</li>Valid only when SkipScope is ManagedRules or ManagedRuleGroups.
 * @method array getWebSecurityModulesForException() Obtain Security protection module for the exception rule. Valid only when SkipScope is WebSecurityModules. Valid values: <li>websec-mod-managed-rules: managed rule</li><li>websec-mod-rate-limiting: rate limit</li><li>websec-mod-custom-rules: custom rule</li><li>websec-mod-adaptive-control: adaptive frequency control, intelligent client filtering, slow attack protection, traffic theft protection</li><li>websec-mod-bot: bot management</li>
 * @method void setWebSecurityModulesForException(array $WebSecurityModulesForException) Set Security protection module for the exception rule. Valid only when SkipScope is WebSecurityModules. Valid values: <li>websec-mod-managed-rules: managed rule</li><li>websec-mod-rate-limiting: rate limit</li><li>websec-mod-custom-rules: custom rule</li><li>websec-mod-adaptive-control: adaptive frequency control, intelligent client filtering, slow attack protection, traffic theft protection</li><li>websec-mod-bot: bot management</li>
 * @method array getWebSecuritySubmodulesForException() Obtain Specifies the security protection submodule for the exception rule. Valid only when SkipScope is WebSecuritySubmodules. Valid values: <ul><li>ManagedRules module features: <ul><li>websec-mod-managed-rules/managed-rule-groups: rule set;</li><li>websec-mod-managed-rules/frequent-scanning-protection: high frequency scan protection;</li></ul></li><li>RateLimitingRules module features: <ul><li>websec-mod-rate-limiting-rules: rate limiting rule;</li></ul></li><li>CustomRules module features: <ul><li>websec-mod-custom-rules: custom rule;</li></ul></li><li>HttpDDoSProtection module features: <ul><li>websec-mod-HTTP-DDoS-protection/adaptive-frequency-control: adaptive frequency control;</li><li>websec-mod-HTTP-DDoS-protection/client-filtering: intelligent client filtering;</li><li>websec-mod-HTTP-DDoS-protection/bandwidth-abuse-defense: traffic fraud protection;</li></ul></li><li>BotManagement module features: <ul><li>websec-mod-Bot-management/basic-feature: basic feature management;</li><li>websec-mod-Bot-management/ip-reputation: client profile analysis;</li><li>websec-mod-Bot-management/Bot-intelligence: intelligent Bot analysis;</li><li>websec-mod-Bot-management/custom-rules: custom rule;</li><li>websec-mod-Bot-management/browser-impersonation-detection: proactive feature recognition;</li><li>websec-mod-Bot-management/client-attestation-rules: client authentication;</li></ul></li><li>BotManagementLite module features: <ul><li>websec-mod-Bot-management-lite/ai-crawler-detection: ai crawler disposal;</li><li>websec-mod-Bot-management-lite/captcha-page-challenge: captcha page challenge.</li></ul></li></ul>
 * @method void setWebSecuritySubmodulesForException(array $WebSecuritySubmodulesForException) Set Specifies the security protection submodule for the exception rule. Valid only when SkipScope is WebSecuritySubmodules. Valid values: <ul><li>ManagedRules module features: <ul><li>websec-mod-managed-rules/managed-rule-groups: rule set;</li><li>websec-mod-managed-rules/frequent-scanning-protection: high frequency scan protection;</li></ul></li><li>RateLimitingRules module features: <ul><li>websec-mod-rate-limiting-rules: rate limiting rule;</li></ul></li><li>CustomRules module features: <ul><li>websec-mod-custom-rules: custom rule;</li></ul></li><li>HttpDDoSProtection module features: <ul><li>websec-mod-HTTP-DDoS-protection/adaptive-frequency-control: adaptive frequency control;</li><li>websec-mod-HTTP-DDoS-protection/client-filtering: intelligent client filtering;</li><li>websec-mod-HTTP-DDoS-protection/bandwidth-abuse-defense: traffic fraud protection;</li></ul></li><li>BotManagement module features: <ul><li>websec-mod-Bot-management/basic-feature: basic feature management;</li><li>websec-mod-Bot-management/ip-reputation: client profile analysis;</li><li>websec-mod-Bot-management/Bot-intelligence: intelligent Bot analysis;</li><li>websec-mod-Bot-management/custom-rules: custom rule;</li><li>websec-mod-Bot-management/browser-impersonation-detection: proactive feature recognition;</li><li>websec-mod-Bot-management/client-attestation-rules: client authentication;</li></ul></li><li>BotManagementLite module features: <ul><li>websec-mod-Bot-management-lite/ai-crawler-detection: ai crawler disposal;</li><li>websec-mod-Bot-management-lite/captcha-page-challenge: captcha page challenge.</li></ul></li></ul>
 * @method array getManagedRulesForException() Obtain Specify the specific managed rule for the exception rule. This parameter is valid only when SkipScope is ManagedRules.
 * @method void setManagedRulesForException(array $ManagedRulesForException) Set Specify the specific managed rule for the exception rule. This parameter is valid only when SkipScope is ManagedRules.
 * @method array getManagedRuleGroupsForException() Obtain Managed rule group with specified exception rules. This parameter is valid only when SkipScope is ManagedRuleGroups.
 * @method void setManagedRuleGroupsForException(array $ManagedRuleGroupsForException) Set Managed rule group with specified exception rules. This parameter is valid only when SkipScope is ManagedRuleGroups.
 * @method array getRequestFieldsForException() Obtain Configuration for specifying exception rules to skip specified request fields. This is valid only when SkipScope is ManagedRules or ManagedRuleGroups and SkipOption is SkipOnSpecifiedRequestFields.
 * @method void setRequestFieldsForException(array $RequestFieldsForException) Set Configuration for specifying exception rules to skip specified request fields. This is valid only when SkipScope is ManagedRules or ManagedRuleGroups and SkipOption is SkipOnSpecifiedRequestFields.
 * @method string getEnabled() Obtain Whether the exception rule is enabled. Valid values: <li>on: enabled</li><li>off: disabled</li>
 * @method void setEnabled(string $Enabled) Set Whether the exception rule is enabled. Valid values: <li>on: enabled</li><li>off: disabled</li>
 */
class ExceptionRule extends AbstractModel
{
    /**
     * @var string ID of the exception rule.<br>Different rule configuration operations can be performed by rule ID:<br> <li> <b>Add</b> a new rule: leave the ID empty or do not specify the ID parameter;</li><li> <b>Modify</b> an existing rule: specify the rule ID to be updated/modified;</li><li> <b>Delete</b> an existing rule: existing rules not included in the Rules list in the ExceptionRules parameter will be deleted.</li>
     */
    public $Id;

    /**
     * @var string Name of the exception rule.
     */
    public $Name;

    /**
     * @var string Specific content of the exception rule must comply with the expression grammar. For detailed specifications, please refer to the product document.
     */
    public $Condition;

    /**
     * @var string Exception rule execution options. Valid values: <li>WebSecurityModules: assigns the security protection module for the exception rule. Use in conjunction with WebSecurityModulesForException.</li><li>WebSecuritySubmodules: assigns the security protection submodule for the exception rule. Use in conjunction with WebSecuritySubmodulesForException.</li><li>ManagedRules: assigns the specific managed rule for the exception rule. Use in conjunction with ManagedRulesForException.</li><li>ManagedRuleGroups: assigns the managed rule group for the exception rule. Use in conjunction with ManagedRuleGroupsForException.</li>
     */
    public $SkipScope;

    /**
     * @var string Skip the specific type of request. Valid values: <li>SkipOnAllRequestFields: skip all requests;</li><li>SkipOnSpecifiedRequestFields: skip specified request fields.</li>Valid only when SkipScope is ManagedRules or ManagedRuleGroups.
     */
    public $SkipOption;

    /**
     * @var array Security protection module for the exception rule. Valid only when SkipScope is WebSecurityModules. Valid values: <li>websec-mod-managed-rules: managed rule</li><li>websec-mod-rate-limiting: rate limit</li><li>websec-mod-custom-rules: custom rule</li><li>websec-mod-adaptive-control: adaptive frequency control, intelligent client filtering, slow attack protection, traffic theft protection</li><li>websec-mod-bot: bot management</li>
     */
    public $WebSecurityModulesForException;

    /**
     * @var array Specifies the security protection submodule for the exception rule. Valid only when SkipScope is WebSecuritySubmodules. Valid values: <ul><li>ManagedRules module features: <ul><li>websec-mod-managed-rules/managed-rule-groups: rule set;</li><li>websec-mod-managed-rules/frequent-scanning-protection: high frequency scan protection;</li></ul></li><li>RateLimitingRules module features: <ul><li>websec-mod-rate-limiting-rules: rate limiting rule;</li></ul></li><li>CustomRules module features: <ul><li>websec-mod-custom-rules: custom rule;</li></ul></li><li>HttpDDoSProtection module features: <ul><li>websec-mod-HTTP-DDoS-protection/adaptive-frequency-control: adaptive frequency control;</li><li>websec-mod-HTTP-DDoS-protection/client-filtering: intelligent client filtering;</li><li>websec-mod-HTTP-DDoS-protection/bandwidth-abuse-defense: traffic fraud protection;</li></ul></li><li>BotManagement module features: <ul><li>websec-mod-Bot-management/basic-feature: basic feature management;</li><li>websec-mod-Bot-management/ip-reputation: client profile analysis;</li><li>websec-mod-Bot-management/Bot-intelligence: intelligent Bot analysis;</li><li>websec-mod-Bot-management/custom-rules: custom rule;</li><li>websec-mod-Bot-management/browser-impersonation-detection: proactive feature recognition;</li><li>websec-mod-Bot-management/client-attestation-rules: client authentication;</li></ul></li><li>BotManagementLite module features: <ul><li>websec-mod-Bot-management-lite/ai-crawler-detection: ai crawler disposal;</li><li>websec-mod-Bot-management-lite/captcha-page-challenge: captcha page challenge.</li></ul></li></ul>
     */
    public $WebSecuritySubmodulesForException;

    /**
     * @var array Specify the specific managed rule for the exception rule. This parameter is valid only when SkipScope is ManagedRules.
     */
    public $ManagedRulesForException;

    /**
     * @var array Managed rule group with specified exception rules. This parameter is valid only when SkipScope is ManagedRuleGroups.
     */
    public $ManagedRuleGroupsForException;

    /**
     * @var array Configuration for specifying exception rules to skip specified request fields. This is valid only when SkipScope is ManagedRules or ManagedRuleGroups and SkipOption is SkipOnSpecifiedRequestFields.
     */
    public $RequestFieldsForException;

    /**
     * @var string Whether the exception rule is enabled. Valid values: <li>on: enabled</li><li>off: disabled</li>
     */
    public $Enabled;

    /**
     * @param string $Id ID of the exception rule.<br>Different rule configuration operations can be performed by rule ID:<br> <li> <b>Add</b> a new rule: leave the ID empty or do not specify the ID parameter;</li><li> <b>Modify</b> an existing rule: specify the rule ID to be updated/modified;</li><li> <b>Delete</b> an existing rule: existing rules not included in the Rules list in the ExceptionRules parameter will be deleted.</li>
     * @param string $Name Name of the exception rule.
     * @param string $Condition Specific content of the exception rule must comply with the expression grammar. For detailed specifications, please refer to the product document.
     * @param string $SkipScope Exception rule execution options. Valid values: <li>WebSecurityModules: assigns the security protection module for the exception rule. Use in conjunction with WebSecurityModulesForException.</li><li>WebSecuritySubmodules: assigns the security protection submodule for the exception rule. Use in conjunction with WebSecuritySubmodulesForException.</li><li>ManagedRules: assigns the specific managed rule for the exception rule. Use in conjunction with ManagedRulesForException.</li><li>ManagedRuleGroups: assigns the managed rule group for the exception rule. Use in conjunction with ManagedRuleGroupsForException.</li>
     * @param string $SkipOption Skip the specific type of request. Valid values: <li>SkipOnAllRequestFields: skip all requests;</li><li>SkipOnSpecifiedRequestFields: skip specified request fields.</li>Valid only when SkipScope is ManagedRules or ManagedRuleGroups.
     * @param array $WebSecurityModulesForException Security protection module for the exception rule. Valid only when SkipScope is WebSecurityModules. Valid values: <li>websec-mod-managed-rules: managed rule</li><li>websec-mod-rate-limiting: rate limit</li><li>websec-mod-custom-rules: custom rule</li><li>websec-mod-adaptive-control: adaptive frequency control, intelligent client filtering, slow attack protection, traffic theft protection</li><li>websec-mod-bot: bot management</li>
     * @param array $WebSecuritySubmodulesForException Specifies the security protection submodule for the exception rule. Valid only when SkipScope is WebSecuritySubmodules. Valid values: <ul><li>ManagedRules module features: <ul><li>websec-mod-managed-rules/managed-rule-groups: rule set;</li><li>websec-mod-managed-rules/frequent-scanning-protection: high frequency scan protection;</li></ul></li><li>RateLimitingRules module features: <ul><li>websec-mod-rate-limiting-rules: rate limiting rule;</li></ul></li><li>CustomRules module features: <ul><li>websec-mod-custom-rules: custom rule;</li></ul></li><li>HttpDDoSProtection module features: <ul><li>websec-mod-HTTP-DDoS-protection/adaptive-frequency-control: adaptive frequency control;</li><li>websec-mod-HTTP-DDoS-protection/client-filtering: intelligent client filtering;</li><li>websec-mod-HTTP-DDoS-protection/bandwidth-abuse-defense: traffic fraud protection;</li></ul></li><li>BotManagement module features: <ul><li>websec-mod-Bot-management/basic-feature: basic feature management;</li><li>websec-mod-Bot-management/ip-reputation: client profile analysis;</li><li>websec-mod-Bot-management/Bot-intelligence: intelligent Bot analysis;</li><li>websec-mod-Bot-management/custom-rules: custom rule;</li><li>websec-mod-Bot-management/browser-impersonation-detection: proactive feature recognition;</li><li>websec-mod-Bot-management/client-attestation-rules: client authentication;</li></ul></li><li>BotManagementLite module features: <ul><li>websec-mod-Bot-management-lite/ai-crawler-detection: ai crawler disposal;</li><li>websec-mod-Bot-management-lite/captcha-page-challenge: captcha page challenge.</li></ul></li></ul>
     * @param array $ManagedRulesForException Specify the specific managed rule for the exception rule. This parameter is valid only when SkipScope is ManagedRules.
     * @param array $ManagedRuleGroupsForException Managed rule group with specified exception rules. This parameter is valid only when SkipScope is ManagedRuleGroups.
     * @param array $RequestFieldsForException Configuration for specifying exception rules to skip specified request fields. This is valid only when SkipScope is ManagedRules or ManagedRuleGroups and SkipOption is SkipOnSpecifiedRequestFields.
     * @param string $Enabled Whether the exception rule is enabled. Valid values: <li>on: enabled</li><li>off: disabled</li>
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

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("SkipScope",$param) and $param["SkipScope"] !== null) {
            $this->SkipScope = $param["SkipScope"];
        }

        if (array_key_exists("SkipOption",$param) and $param["SkipOption"] !== null) {
            $this->SkipOption = $param["SkipOption"];
        }

        if (array_key_exists("WebSecurityModulesForException",$param) and $param["WebSecurityModulesForException"] !== null) {
            $this->WebSecurityModulesForException = $param["WebSecurityModulesForException"];
        }

        if (array_key_exists("WebSecuritySubmodulesForException",$param) and $param["WebSecuritySubmodulesForException"] !== null) {
            $this->WebSecuritySubmodulesForException = $param["WebSecuritySubmodulesForException"];
        }

        if (array_key_exists("ManagedRulesForException",$param) and $param["ManagedRulesForException"] !== null) {
            $this->ManagedRulesForException = $param["ManagedRulesForException"];
        }

        if (array_key_exists("ManagedRuleGroupsForException",$param) and $param["ManagedRuleGroupsForException"] !== null) {
            $this->ManagedRuleGroupsForException = $param["ManagedRuleGroupsForException"];
        }

        if (array_key_exists("RequestFieldsForException",$param) and $param["RequestFieldsForException"] !== null) {
            $this->RequestFieldsForException = [];
            foreach ($param["RequestFieldsForException"] as $key => $value){
                $obj = new RequestFieldsForException();
                $obj->deserialize($value);
                array_push($this->RequestFieldsForException, $obj);
            }
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
