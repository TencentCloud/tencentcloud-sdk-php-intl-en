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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLLMContentRule request structure.
 *
 * @method string getName() Obtain <p>Name.</p>
 * @method void setName(string $Name) Set <p>Name.</p>
 * @method integer getPriority() Obtain <p>Priority.</p>
 * @method void setPriority(integer $Priority) Set <p>Priority.</p>
 * @method integer getStatus() Obtain <p>Rule switch.</p>
 * @method void setStatus(integer $Status) Set <p>Rule switch.</p>
 * @method integer getCheckType() Obtain <p>Detection scope. 1: Inbound. 2: Outbound. 3: Inbound and outbound.</p>
 * @method void setCheckType(integer $CheckType) Set <p>Detection scope. 1: Inbound. 2: Outbound. 3: Inbound and outbound.</p>
 * @method array getRuleItem() Obtain <p>Detection content matching.</p>
 * @method void setRuleItem(array $RuleItem) Set <p>Detection content matching.</p>
 * @method array getOptions() Obtain <p>Matching condition.</p>
 * @method void setOptions(array $Options) Set <p>Matching condition.</p>
 * @method string getDomain() Obtain <p>Domain name.</p>
 * @method void setDomain(string $Domain) Set <p>Domain name.</p>
 * @method string getActionType() Obtain <p>Action. monitor: Observe. Intercept: Intercept.</p>
 * @method void setActionType(string $ActionType) Set <p>Action. monitor: Observe. Intercept: Intercept.</p>
 * @method string getResponseText() Obtain <p>Response prompt content.</p>
 * @method void setResponseText(string $ResponseText) Set <p>Response prompt content.</p>
 * @method array getSessionApplied() Obtain <p>Session ID for which the rule is to be enabled.</p>
 * @method void setSessionApplied(array $SessionApplied) Set <p>Session ID for which the rule is to be enabled.</p>
 * @method string getRuleId() Obtain <p>Rule ID. Enter 0 when adding a rule.</p>
 * @method void setRuleId(string $RuleId) Set <p>Rule ID. Enter 0 when adding a rule.</p>
 * @method integer getPageId() Obtain <p>Interception page id.</p>
 * @method void setPageId(integer $PageId) Set <p>Interception page id.</p>
 * @method string getContentLogicalOp() Obtain <p>Detection content and/or expression. Defaults to and.</p>
 * @method void setContentLogicalOp(string $ContentLogicalOp) Set <p>Detection content and/or expression. Defaults to and.</p>
 * @method string getInstanceId() Obtain <p>Instance id. Required.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance id. Required.</p>
 * @method integer getReplyType() Obtain <p>Response type. 1: Built-in trusted model security response. 2: Custom response, which takes effect when ActionType=reply.</p><p>Valid values:</p><ul><li>1: Built-in trusted model security response</li><li>2: Custom response, which takes effect when ActionType=reply</li></ul>
 * @method void setReplyType(integer $ReplyType) Set <p>Response type. 1: Built-in trusted model security response. 2: Custom response, which takes effect when ActionType=reply.</p><p>Valid values:</p><ul><li>1: Built-in trusted model security response</li><li>2: Custom response, which takes effect when ActionType=reply</li></ul>
 * @method string getCustomReplyRuleId() Obtain <p>Custom response template.</p>
 * @method void setCustomReplyRuleId(string $CustomReplyRuleId) Set <p>Custom response template.</p>
 * @method integer getModalType() Obtain <p>Modality type. 0: Text (default). 1: Image.</p><p>Valid values:</p><ul><li>0: Text</li><li>1: Image</li></ul>
 * @method void setModalType(integer $ModalType) Set <p>Modality type. 0: Text (default). 1: Image.</p><p>Valid values:</p><ul><li>0: Text</li><li>1: Image</li></ul>
 * @method string getCategory() Obtain <p>Rule category. black: Regular rule (default). white: Allowlist rule. If this parameter is left empty, the black category is used. When this parameter is set to white, ActionType can only be set to pass, and RuleItem supports allowlist matching fields (Key: ip/geo/type/content/chat_id/user_id/tool_name/tool_args/keyword_whitelist; Op: belong/not_belong/equal/not_equal/contain/not_contain/prefix/suffix/wildcard).</p>
 * @method void setCategory(string $Category) Set <p>Rule category. black: Regular rule (default). white: Allowlist rule. If this parameter is left empty, the black category is used. When this parameter is set to white, ActionType can only be set to pass, and RuleItem supports allowlist matching fields (Key: ip/geo/type/content/chat_id/user_id/tool_name/tool_args/keyword_whitelist; Op: belong/not_belong/equal/not_equal/contain/not_contain/prefix/suffix/wildcard).</p>
 * @method array getDomains() Obtain <p>Effective scope of the allowlist rule: a list of multiple serviceId/domain values (used when Category=white), indicating the domains/serviceIds to which the allowlist rule applies. This field is not used for blocklist rules.</p>
 * @method void setDomains(array $Domains) Set <p>Effective scope of the allowlist rule: a list of multiple serviceId/domain values (used when Category=white), indicating the domains/serviceIds to which the allowlist rule applies. This field is not used for blocklist rules.</p>
 * @method array getAppliedModules() Obtain <p>List of module types for which the allowlist takes effect (used when Category=white), indicating the protection modules to which the allowlist rule applies (pass) after a match. Valid values: 2: Compute resource consumption rule; 3: Custom protection rule; 4: ToolCall protection; 5: Prompt attack protection; 6: Content compliance detection; 7: Sensitive data detection.</p>
 * @method void setAppliedModules(array $AppliedModules) Set <p>List of module types for which the allowlist takes effect (used when Category=white), indicating the protection modules to which the allowlist rule applies (pass) after a match. Valid values: 2: Compute resource consumption rule; 3: Custom protection rule; 4: ToolCall protection; 5: Prompt attack protection; 6: Content compliance detection; 7: Sensitive data detection.</p>
 * @method string getRiskLevel() Obtain <p>Severity. critical: Critical. high: High. medium: Medium (default). low: Low. When this rule is matched, the risk level is displayed in attack logs based on this parameter. If this parameter is not passed or is left empty, the medium severity is used.</p><p>Valid values:</p><ul><li>critical: Critical</li><li>high: High</li><li>medium: Medium (default)</li><li>low: Low</li></ul>
 * @method void setRiskLevel(string $RiskLevel) Set <p>Severity. critical: Critical. high: High. medium: Medium (default). low: Low. When this rule is matched, the risk level is displayed in attack logs based on this parameter. If this parameter is not passed or is left empty, the medium severity is used.</p><p>Valid values:</p><ul><li>critical: Critical</li><li>high: High</li><li>medium: Medium (default)</li><li>low: Low</li></ul>
 */
class ModifyLLMContentRuleRequest extends AbstractModel
{
    /**
     * @var string <p>Name.</p>
     */
    public $Name;

    /**
     * @var integer <p>Priority.</p>
     */
    public $Priority;

    /**
     * @var integer <p>Rule switch.</p>
     */
    public $Status;

    /**
     * @var integer <p>Detection scope. 1: Inbound. 2: Outbound. 3: Inbound and outbound.</p>
     */
    public $CheckType;

    /**
     * @var array <p>Detection content matching.</p>
     */
    public $RuleItem;

    /**
     * @var array <p>Matching condition.</p>
     */
    public $Options;

    /**
     * @var string <p>Domain name.</p>
     */
    public $Domain;

    /**
     * @var string <p>Action. monitor: Observe. Intercept: Intercept.</p>
     */
    public $ActionType;

    /**
     * @var string <p>Response prompt content.</p>
     */
    public $ResponseText;

    /**
     * @var array <p>Session ID for which the rule is to be enabled.</p>
     */
    public $SessionApplied;

    /**
     * @var string <p>Rule ID. Enter 0 when adding a rule.</p>
     */
    public $RuleId;

    /**
     * @var integer <p>Interception page id.</p>
     */
    public $PageId;

    /**
     * @var string <p>Detection content and/or expression. Defaults to and.</p>
     */
    public $ContentLogicalOp;

    /**
     * @var string <p>Instance id. Required.</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>Response type. 1: Built-in trusted model security response. 2: Custom response, which takes effect when ActionType=reply.</p><p>Valid values:</p><ul><li>1: Built-in trusted model security response</li><li>2: Custom response, which takes effect when ActionType=reply</li></ul>
     */
    public $ReplyType;

    /**
     * @var string <p>Custom response template.</p>
     */
    public $CustomReplyRuleId;

    /**
     * @var integer <p>Modality type. 0: Text (default). 1: Image.</p><p>Valid values:</p><ul><li>0: Text</li><li>1: Image</li></ul>
     */
    public $ModalType;

    /**
     * @var string <p>Rule category. black: Regular rule (default). white: Allowlist rule. If this parameter is left empty, the black category is used. When this parameter is set to white, ActionType can only be set to pass, and RuleItem supports allowlist matching fields (Key: ip/geo/type/content/chat_id/user_id/tool_name/tool_args/keyword_whitelist; Op: belong/not_belong/equal/not_equal/contain/not_contain/prefix/suffix/wildcard).</p>
     */
    public $Category;

    /**
     * @var array <p>Effective scope of the allowlist rule: a list of multiple serviceId/domain values (used when Category=white), indicating the domains/serviceIds to which the allowlist rule applies. This field is not used for blocklist rules.</p>
     */
    public $Domains;

    /**
     * @var array <p>List of module types for which the allowlist takes effect (used when Category=white), indicating the protection modules to which the allowlist rule applies (pass) after a match. Valid values: 2: Compute resource consumption rule; 3: Custom protection rule; 4: ToolCall protection; 5: Prompt attack protection; 6: Content compliance detection; 7: Sensitive data detection.</p>
     */
    public $AppliedModules;

    /**
     * @var string <p>Severity. critical: Critical. high: High. medium: Medium (default). low: Low. When this rule is matched, the risk level is displayed in attack logs based on this parameter. If this parameter is not passed or is left empty, the medium severity is used.</p><p>Valid values:</p><ul><li>critical: Critical</li><li>high: High</li><li>medium: Medium (default)</li><li>low: Low</li></ul>
     */
    public $RiskLevel;

    /**
     * @param string $Name <p>Name.</p>
     * @param integer $Priority <p>Priority.</p>
     * @param integer $Status <p>Rule switch.</p>
     * @param integer $CheckType <p>Detection scope. 1: Inbound. 2: Outbound. 3: Inbound and outbound.</p>
     * @param array $RuleItem <p>Detection content matching.</p>
     * @param array $Options <p>Matching condition.</p>
     * @param string $Domain <p>Domain name.</p>
     * @param string $ActionType <p>Action. monitor: Observe. Intercept: Intercept.</p>
     * @param string $ResponseText <p>Response prompt content.</p>
     * @param array $SessionApplied <p>Session ID for which the rule is to be enabled.</p>
     * @param string $RuleId <p>Rule ID. Enter 0 when adding a rule.</p>
     * @param integer $PageId <p>Interception page id.</p>
     * @param string $ContentLogicalOp <p>Detection content and/or expression. Defaults to and.</p>
     * @param string $InstanceId <p>Instance id. Required.</p>
     * @param integer $ReplyType <p>Response type. 1: Built-in trusted model security response. 2: Custom response, which takes effect when ActionType=reply.</p><p>Valid values:</p><ul><li>1: Built-in trusted model security response</li><li>2: Custom response, which takes effect when ActionType=reply</li></ul>
     * @param string $CustomReplyRuleId <p>Custom response template.</p>
     * @param integer $ModalType <p>Modality type. 0: Text (default). 1: Image.</p><p>Valid values:</p><ul><li>0: Text</li><li>1: Image</li></ul>
     * @param string $Category <p>Rule category. black: Regular rule (default). white: Allowlist rule. If this parameter is left empty, the black category is used. When this parameter is set to white, ActionType can only be set to pass, and RuleItem supports allowlist matching fields (Key: ip/geo/type/content/chat_id/user_id/tool_name/tool_args/keyword_whitelist; Op: belong/not_belong/equal/not_equal/contain/not_contain/prefix/suffix/wildcard).</p>
     * @param array $Domains <p>Effective scope of the allowlist rule: a list of multiple serviceId/domain values (used when Category=white), indicating the domains/serviceIds to which the allowlist rule applies. This field is not used for blocklist rules.</p>
     * @param array $AppliedModules <p>List of module types for which the allowlist takes effect (used when Category=white), indicating the protection modules to which the allowlist rule applies (pass) after a match. Valid values: 2: Compute resource consumption rule; 3: Custom protection rule; 4: ToolCall protection; 5: Prompt attack protection; 6: Content compliance detection; 7: Sensitive data detection.</p>
     * @param string $RiskLevel <p>Severity. critical: Critical. high: High. medium: Medium (default). low: Low. When this rule is matched, the risk level is displayed in attack logs based on this parameter. If this parameter is not passed or is left empty, the medium severity is used.</p><p>Valid values:</p><ul><li>critical: Critical</li><li>high: High</li><li>medium: Medium (default)</li><li>low: Low</li></ul>
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

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CheckType",$param) and $param["CheckType"] !== null) {
            $this->CheckType = $param["CheckType"];
        }

        if (array_key_exists("RuleItem",$param) and $param["RuleItem"] !== null) {
            $this->RuleItem = [];
            foreach ($param["RuleItem"] as $key => $value){
                $obj = new RuleItem();
                $obj->deserialize($value);
                array_push($this->RuleItem, $obj);
            }
        }

        if (array_key_exists("Options",$param) and $param["Options"] !== null) {
            $this->Options = [];
            foreach ($param["Options"] as $key => $value){
                $obj = new LLMOptionsItem();
                $obj->deserialize($value);
                array_push($this->Options, $obj);
            }
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("ResponseText",$param) and $param["ResponseText"] !== null) {
            $this->ResponseText = $param["ResponseText"];
        }

        if (array_key_exists("SessionApplied",$param) and $param["SessionApplied"] !== null) {
            $this->SessionApplied = $param["SessionApplied"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("PageId",$param) and $param["PageId"] !== null) {
            $this->PageId = $param["PageId"];
        }

        if (array_key_exists("ContentLogicalOp",$param) and $param["ContentLogicalOp"] !== null) {
            $this->ContentLogicalOp = $param["ContentLogicalOp"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ReplyType",$param) and $param["ReplyType"] !== null) {
            $this->ReplyType = $param["ReplyType"];
        }

        if (array_key_exists("CustomReplyRuleId",$param) and $param["CustomReplyRuleId"] !== null) {
            $this->CustomReplyRuleId = $param["CustomReplyRuleId"];
        }

        if (array_key_exists("ModalType",$param) and $param["ModalType"] !== null) {
            $this->ModalType = $param["ModalType"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("AppliedModules",$param) and $param["AppliedModules"] !== null) {
            $this->AppliedModules = $param["AppliedModules"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }
    }
}
