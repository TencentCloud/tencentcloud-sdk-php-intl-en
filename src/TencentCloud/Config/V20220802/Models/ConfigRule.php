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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Rule details
 *
 * @method string getIdentifier() Obtain Rule ID
 * @method void setIdentifier(string $Identifier) Set Rule ID
 * @method string getRuleName() Obtain Rule Name
 * @method void setRuleName(string $RuleName) Set Rule Name
 * @method array getInputParameter() Obtain Rule parameters
 * @method void setInputParameter(array $InputParameter) Set Rule parameters
 * @method array getSourceCondition() Obtain Rule trigger condition.
 * @method void setSourceCondition(array $SourceCondition) Set Rule trigger condition.
 * @method array getResourceType() Obtain Resource types supported by the rule. The rule applies only to resources of the specified resource types.
 * @method void setResourceType(array $ResourceType) Set Resource types supported by the rule. The rule applies only to resources of the specified resource types.
 * @method array getLabels() Obtain Rule tags.
 * @method void setLabels(array $Labels) Set Rule tags.
 * @method integer getRiskLevel() Obtain Rule risk level.
1: Low risk
2: Medium-risk
3: High-risk
 * @method void setRiskLevel(integer $RiskLevel) Set Rule risk level.
1: Low risk
2: Medium-risk
3: High-risk
 * @method string getServiceFunction() Obtain Function corresponding to the rule.
 * @method void setServiceFunction(string $ServiceFunction) Set Function corresponding to the rule.
 * @method string getCreateTime() Obtain Creation time.
Format: YYYY-MM-DD h:i:s
 * @method void setCreateTime(string $CreateTime) Set Creation time.
Format: YYYY-MM-DD h:i:s
 * @method string getDescription() Obtain Rule description
 * @method void setDescription(string $Description) Set Rule description
 * @method string getStatus() Obtain ACTIVE: enable
NO_ACTIVE: Disabled
 * @method void setStatus(string $Status) Set ACTIVE: enable
NO_ACTIVE: Disabled
 * @method string getComplianceResult() Obtain Compliant: 'COMPLIANT'
Non-compliance: 'NON_COMPLIANT'
Unable to apply rule: 'NOT_APPLICABLE'
 * @method void setComplianceResult(string $ComplianceResult) Set Compliant: 'COMPLIANT'
Non-compliance: 'NON_COMPLIANT'
Unable to apply rule: 'NOT_APPLICABLE'
 * @method Annotation getAnnotation() Obtain ["",""]
 * @method void setAnnotation(Annotation $Annotation) Set ["",""]
 * @method string getConfigRuleInvokedTime() Obtain Rule evaluation time
Format: YYYY-MM-DD h:i:s

 * @method void setConfigRuleInvokedTime(string $ConfigRuleInvokedTime) Set Rule evaluation time
Format: YYYY-MM-DD h:i:s

 * @method string getConfigRuleId() Obtain Rule ID
 * @method void setConfigRuleId(string $ConfigRuleId) Set Rule ID
 * @method string getIdentifierType() Obtain CUSTOMIZE: custom rule
SYSTEM: managed rule
 * @method void setIdentifierType(string $IdentifierType) Set CUSTOMIZE: custom rule
SYSTEM: managed rule
 * @method string getCompliancePackId() Obtain Compliance package ID.
 * @method void setCompliancePackId(string $CompliancePackId) Set Compliance package ID.
 * @method array getTriggerType() Obtain Trigger Type
ScheduledNotification: periodic trigger.
ConfigurationItemChangeNotification: Triggered by a change
 * @method void setTriggerType(array $TriggerType) Set Trigger Type
ScheduledNotification: periodic trigger.
ConfigurationItemChangeNotification: Triggered by a change
 * @method array getManageInputParameter() Obtain Parameter details
 * @method void setManageInputParameter(array $ManageInputParameter) Set Parameter details
 * @method string getCompliancePackName() Obtain Compliance package name
 * @method void setCompliancePackName(string $CompliancePackName) Set Compliance package name
 * @method array getRegionsScope() Obtain Associated regions.
 * @method void setRegionsScope(array $RegionsScope) Set Associated regions.
 * @method array getTagsScope() Obtain Associated tag
 * @method void setTagsScope(array $TagsScope) Set Associated tag
 * @method array getExcludeResourceIdsScope() Obtain  The rule is invalid for the specified resource ID, meaning that evaluation will not be performed on this resource.
 * @method void setExcludeResourceIdsScope(array $ExcludeResourceIdsScope) Set  The rule is invalid for the specified resource ID, meaning that evaluation will not be performed on this resource.
 * @method string getAccountGroupId() Obtain Account group ID.
 * @method void setAccountGroupId(string $AccountGroupId) Set Account group ID.
 * @method string getAccountGroupName() Obtain Account group name.
 * @method void setAccountGroupName(string $AccountGroupName) Set Account group name.
 * @method integer getRuleOwnerId() Obtain Rule owner user ID.
 * @method void setRuleOwnerId(integer $RuleOwnerId) Set Rule owner user ID.
 * @method array getManageTriggerType() Obtain Trigger methods supported by preset rules.
ScheduledNotification: periodic trigger
ConfigurationItemChangeNotification: Triggered by a change
 * @method void setManageTriggerType(array $ManageTriggerType) Set Trigger methods supported by preset rules.
ScheduledNotification: periodic trigger
ConfigurationItemChangeNotification: Triggered by a change
 */
class ConfigRule extends AbstractModel
{
    /**
     * @var string Rule ID
     */
    public $Identifier;

    /**
     * @var string Rule Name
     */
    public $RuleName;

    /**
     * @var array Rule parameters
     */
    public $InputParameter;

    /**
     * @var array Rule trigger condition.
     */
    public $SourceCondition;

    /**
     * @var array Resource types supported by the rule. The rule applies only to resources of the specified resource types.
     */
    public $ResourceType;

    /**
     * @var array Rule tags.
     */
    public $Labels;

    /**
     * @var integer Rule risk level.
1: Low risk
2: Medium-risk
3: High-risk
     */
    public $RiskLevel;

    /**
     * @var string Function corresponding to the rule.
     */
    public $ServiceFunction;

    /**
     * @var string Creation time.
Format: YYYY-MM-DD h:i:s
     */
    public $CreateTime;

    /**
     * @var string Rule description
     */
    public $Description;

    /**
     * @var string ACTIVE: enable
NO_ACTIVE: Disabled
     */
    public $Status;

    /**
     * @var string Compliant: 'COMPLIANT'
Non-compliance: 'NON_COMPLIANT'
Unable to apply rule: 'NOT_APPLICABLE'
     */
    public $ComplianceResult;

    /**
     * @var Annotation ["",""]
     */
    public $Annotation;

    /**
     * @var string Rule evaluation time
Format: YYYY-MM-DD h:i:s

     */
    public $ConfigRuleInvokedTime;

    /**
     * @var string Rule ID
     */
    public $ConfigRuleId;

    /**
     * @var string CUSTOMIZE: custom rule
SYSTEM: managed rule
     */
    public $IdentifierType;

    /**
     * @var string Compliance package ID.
     */
    public $CompliancePackId;

    /**
     * @var array Trigger Type
ScheduledNotification: periodic trigger.
ConfigurationItemChangeNotification: Triggered by a change
     */
    public $TriggerType;

    /**
     * @var array Parameter details
     */
    public $ManageInputParameter;

    /**
     * @var string Compliance package name
     */
    public $CompliancePackName;

    /**
     * @var array Associated regions.
     */
    public $RegionsScope;

    /**
     * @var array Associated tag
     */
    public $TagsScope;

    /**
     * @var array  The rule is invalid for the specified resource ID, meaning that evaluation will not be performed on this resource.
     */
    public $ExcludeResourceIdsScope;

    /**
     * @var string Account group ID.
     */
    public $AccountGroupId;

    /**
     * @var string Account group name.
     */
    public $AccountGroupName;

    /**
     * @var integer Rule owner user ID.
     */
    public $RuleOwnerId;

    /**
     * @var array Trigger methods supported by preset rules.
ScheduledNotification: periodic trigger
ConfigurationItemChangeNotification: Triggered by a change
     */
    public $ManageTriggerType;

    /**
     * @param string $Identifier Rule ID
     * @param string $RuleName Rule Name
     * @param array $InputParameter Rule parameters
     * @param array $SourceCondition Rule trigger condition.
     * @param array $ResourceType Resource types supported by the rule. The rule applies only to resources of the specified resource types.
     * @param array $Labels Rule tags.
     * @param integer $RiskLevel Rule risk level.
1: Low risk
2: Medium-risk
3: High-risk
     * @param string $ServiceFunction Function corresponding to the rule.
     * @param string $CreateTime Creation time.
Format: YYYY-MM-DD h:i:s
     * @param string $Description Rule description
     * @param string $Status ACTIVE: enable
NO_ACTIVE: Disabled
     * @param string $ComplianceResult Compliant: 'COMPLIANT'
Non-compliance: 'NON_COMPLIANT'
Unable to apply rule: 'NOT_APPLICABLE'
     * @param Annotation $Annotation ["",""]
     * @param string $ConfigRuleInvokedTime Rule evaluation time
Format: YYYY-MM-DD h:i:s

     * @param string $ConfigRuleId Rule ID
     * @param string $IdentifierType CUSTOMIZE: custom rule
SYSTEM: managed rule
     * @param string $CompliancePackId Compliance package ID.
     * @param array $TriggerType Trigger Type
ScheduledNotification: periodic trigger.
ConfigurationItemChangeNotification: Triggered by a change
     * @param array $ManageInputParameter Parameter details
     * @param string $CompliancePackName Compliance package name
     * @param array $RegionsScope Associated regions.
     * @param array $TagsScope Associated tag
     * @param array $ExcludeResourceIdsScope  The rule is invalid for the specified resource ID, meaning that evaluation will not be performed on this resource.
     * @param string $AccountGroupId Account group ID.
     * @param string $AccountGroupName Account group name.
     * @param integer $RuleOwnerId Rule owner user ID.
     * @param array $ManageTriggerType Trigger methods supported by preset rules.
ScheduledNotification: periodic trigger
ConfigurationItemChangeNotification: Triggered by a change
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
        if (array_key_exists("Identifier",$param) and $param["Identifier"] !== null) {
            $this->Identifier = $param["Identifier"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("InputParameter",$param) and $param["InputParameter"] !== null) {
            $this->InputParameter = [];
            foreach ($param["InputParameter"] as $key => $value){
                $obj = new InputParameter();
                $obj->deserialize($value);
                array_push($this->InputParameter, $obj);
            }
        }

        if (array_key_exists("SourceCondition",$param) and $param["SourceCondition"] !== null) {
            $this->SourceCondition = [];
            foreach ($param["SourceCondition"] as $key => $value){
                $obj = new SourceConditionForManage();
                $obj->deserialize($value);
                array_push($this->SourceCondition, $obj);
            }
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = $param["Labels"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("ServiceFunction",$param) and $param["ServiceFunction"] !== null) {
            $this->ServiceFunction = $param["ServiceFunction"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ComplianceResult",$param) and $param["ComplianceResult"] !== null) {
            $this->ComplianceResult = $param["ComplianceResult"];
        }

        if (array_key_exists("Annotation",$param) and $param["Annotation"] !== null) {
            $this->Annotation = new Annotation();
            $this->Annotation->deserialize($param["Annotation"]);
        }

        if (array_key_exists("ConfigRuleInvokedTime",$param) and $param["ConfigRuleInvokedTime"] !== null) {
            $this->ConfigRuleInvokedTime = $param["ConfigRuleInvokedTime"];
        }

        if (array_key_exists("ConfigRuleId",$param) and $param["ConfigRuleId"] !== null) {
            $this->ConfigRuleId = $param["ConfigRuleId"];
        }

        if (array_key_exists("IdentifierType",$param) and $param["IdentifierType"] !== null) {
            $this->IdentifierType = $param["IdentifierType"];
        }

        if (array_key_exists("CompliancePackId",$param) and $param["CompliancePackId"] !== null) {
            $this->CompliancePackId = $param["CompliancePackId"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = [];
            foreach ($param["TriggerType"] as $key => $value){
                $obj = new TriggerType();
                $obj->deserialize($value);
                array_push($this->TriggerType, $obj);
            }
        }

        if (array_key_exists("ManageInputParameter",$param) and $param["ManageInputParameter"] !== null) {
            $this->ManageInputParameter = [];
            foreach ($param["ManageInputParameter"] as $key => $value){
                $obj = new InputParameterForManage();
                $obj->deserialize($value);
                array_push($this->ManageInputParameter, $obj);
            }
        }

        if (array_key_exists("CompliancePackName",$param) and $param["CompliancePackName"] !== null) {
            $this->CompliancePackName = $param["CompliancePackName"];
        }

        if (array_key_exists("RegionsScope",$param) and $param["RegionsScope"] !== null) {
            $this->RegionsScope = $param["RegionsScope"];
        }

        if (array_key_exists("TagsScope",$param) and $param["TagsScope"] !== null) {
            $this->TagsScope = [];
            foreach ($param["TagsScope"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagsScope, $obj);
            }
        }

        if (array_key_exists("ExcludeResourceIdsScope",$param) and $param["ExcludeResourceIdsScope"] !== null) {
            $this->ExcludeResourceIdsScope = $param["ExcludeResourceIdsScope"];
        }

        if (array_key_exists("AccountGroupId",$param) and $param["AccountGroupId"] !== null) {
            $this->AccountGroupId = $param["AccountGroupId"];
        }

        if (array_key_exists("AccountGroupName",$param) and $param["AccountGroupName"] !== null) {
            $this->AccountGroupName = $param["AccountGroupName"];
        }

        if (array_key_exists("RuleOwnerId",$param) and $param["RuleOwnerId"] !== null) {
            $this->RuleOwnerId = $param["RuleOwnerId"];
        }

        if (array_key_exists("ManageTriggerType",$param) and $param["ManageTriggerType"] !== null) {
            $this->ManageTriggerType = $param["ManageTriggerType"];
        }
    }
}
