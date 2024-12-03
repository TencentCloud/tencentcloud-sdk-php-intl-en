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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Rule details
 *
 * @method string getIdentifier() Obtain Rule identifier
Note: This field may return null, indicating that no valid value is found.
 * @method void setIdentifier(string $Identifier) Set Rule identifier
Note: This field may return null, indicating that no valid value is found.
 * @method string getRuleName() Obtain Name of the rule

Note: This field may return null, indicating that no valid value is found.
 * @method void setRuleName(string $RuleName) Set Name of the rule

Note: This field may return null, indicating that no valid value is found.
 * @method array getInputParameter() Obtain Rule parameters
Note: This field may return null, indicating that no valid value is found.
 * @method void setInputParameter(array $InputParameter) Set Rule parameters
Note: This field may return null, indicating that no valid value is found.
 * @method array getSourceCondition() Obtain Rule trigger condition.

Note: This field may return null, indicating that no valid value is found.
 * @method void setSourceCondition(array $SourceCondition) Set Rule trigger condition.

Note: This field may return null, indicating that no valid value is found.
 * @method array getResourceType() Obtain Resource types supported by rule. The rule only applies to specified resource types.
Note: This field may return null, indicating that no valid value is found.
 * @method void setResourceType(array $ResourceType) Set Resource types supported by rule. The rule only applies to specified resource types.
Note: This field may return null, indicating that no valid value is found.
 * @method array getLabels() Obtain Rule ownership tag
Note: This field may return null, indicating that no valid value is found.
 * @method void setLabels(array $Labels) Set Rule ownership tag
Note: This field may return null, indicating that no valid value is found.
 * @method integer getRiskLevel() Obtain Rule risk level
1: Low risk
2: Medium risk
3: High risk
Note: This field may return null, indicating that no valid value is found.
 * @method void setRiskLevel(integer $RiskLevel) Set Rule risk level
1: Low risk
2: Medium risk
3: High risk
Note: This field may return null, indicating that no valid value is found.
 * @method string getServiceFunction() Obtain Function corresponding to rule
Note: This field may return null, indicating that no valid value is found.
 * @method void setServiceFunction(string $ServiceFunction) Set Function corresponding to rule
Note: This field may return null, indicating that no valid value is found.
 * @method string getCreateTime() Obtain Creation time

Format: YYYY-MM-DD h:i:s
Note: This field may return null, indicating that no valid value is found.
 * @method void setCreateTime(string $CreateTime) Set Creation time

Format: YYYY-MM-DD h:i:s
Note: This field may return null, indicating that no valid value is found.
 * @method string getDescription() Obtain Rule description

Note: This field may return null, indicating that no valid value is found.
 * @method void setDescription(string $Description) Set Rule description

Note: This field may return null, indicating that no valid value is found.
 * @method string getStatus() Obtain ACTIVE: Enabled
NO_ACTIVE: Disabled
Note: This field may return null, indicating that no valid value is found.
 * @method void setStatus(string $Status) Set ACTIVE: Enabled
NO_ACTIVE: Disabled
Note: This field may return null, indicating that no valid value is found.
 * @method string getComplianceResult() Obtain Compliance: 'COMPLIANT'
'NON_COMPLIANT'
'NOT_APPLICABLE'
Note: This field may return null, indicating that no valid value is found.
 * @method void setComplianceResult(string $ComplianceResult) Set Compliance: 'COMPLIANT'
'NON_COMPLIANT'
'NOT_APPLICABLE'
Note: This field may return null, indicating that no valid value is found.
 * @method Annotation getAnnotation() Obtain ["",""]
Note: This field may return null, indicating that no valid value is found.
 * @method void setAnnotation(Annotation $Annotation) Set ["",""]
Note: This field may return null, indicating that no valid value is found.
 * @method string getConfigRuleInvokedTime() Obtain Rule evaluation time
Format: YYYY-MM-DD h:i:s

Note: This field may return null, indicating that no valid value is found.
 * @method void setConfigRuleInvokedTime(string $ConfigRuleInvokedTime) Set Rule evaluation time
Format: YYYY-MM-DD h:i:s

Note: This field may return null, indicating that no valid value is found.
 * @method string getConfigRuleId() Obtain Rule ID

Note: This field may return null, indicating that no valid value is found.
 * @method void setConfigRuleId(string $ConfigRuleId) Set Rule ID

Note: This field may return null, indicating that no valid value is found.
 * @method string getIdentifierType() Obtain CUSTOMIZE
Managed rule
Note: This field may return null, indicating that no valid value is found.
 * @method void setIdentifierType(string $IdentifierType) Set CUSTOMIZE
Managed rule
Note: This field may return null, indicating that no valid value is found.
 * @method string getCompliancePackId() Obtain Compliance package ID
Note: This field may return null, indicating that no valid value is found.
 * @method void setCompliancePackId(string $CompliancePackId) Set Compliance package ID
Note: This field may return null, indicating that no valid value is found.
 * @method array getTriggerType() Obtain Trigger Type

Scheduled trigger
Triggered by configuration change
Note: This field may return null, indicating that no valid value is found.
 * @method void setTriggerType(array $TriggerType) Set Trigger Type

Scheduled trigger
Triggered by configuration change
Note: This field may return null, indicating that no valid value is found.
 * @method array getManageInputParameter() Obtain Parameter details

Note: This field may return null, indicating that no valid value is found.
 * @method void setManageInputParameter(array $ManageInputParameter) Set Parameter details

Note: This field may return null, indicating that no valid value is found.
 * @method string getCompliancePackName() Obtain Rule name

Note: This field may return null, indicating that no valid value is found.
 * @method void setCompliancePackName(string $CompliancePackName) Set Rule name

Note: This field may return null, indicating that no valid value is found.
 * @method array getRegionsScope() Obtain Associated region
Note: This field may return null, indicating that no valid value is found.
 * @method void setRegionsScope(array $RegionsScope) Set Associated region
Note: This field may return null, indicating that no valid value is found.
 * @method array getTagsScope() Obtain Associate Tag

Note: This field may return null, indicating that no valid value is found.
 * @method void setTagsScope(array $TagsScope) Set Associate Tag

Note: This field may return null, indicating that no valid value is found.
 * @method array getExcludeResourceIdsScope() Obtain  The rule is invalid for the specified resource ID, meaning it does not evaluate the resource.
Note: This field may return null, indicating that no valid value is found.
 * @method void setExcludeResourceIdsScope(array $ExcludeResourceIdsScope) Set  The rule is invalid for the specified resource ID, meaning it does not evaluate the resource.
Note: This field may return null, indicating that no valid value is found.
 * @method string getAccountGroupId() Obtain Account group ID

Note: This field may return null, indicating that no valid value is found.
 * @method void setAccountGroupId(string $AccountGroupId) Set Account group ID

Note: This field may return null, indicating that no valid value is found.
 * @method string getAccountGroupName() Obtain Account group name
Note: This field may return null, indicating that no valid value is found.
 * @method void setAccountGroupName(string $AccountGroupName) Set Account group name
Note: This field may return null, indicating that no valid value is found.
 * @method integer getRuleOwnerId() Obtain Rule owner user ID
Note: This field may return null, indicating that no valid value is found.
 * @method void setRuleOwnerId(integer $RuleOwnerId) Set Rule owner user ID
Note: This field may return null, indicating that no valid value is found.
 * @method array getManageTriggerType() Obtain Trigger methods supported by preset rules
Scheduled trigger
Triggered by configuration change
 * @method void setManageTriggerType(array $ManageTriggerType) Set Trigger methods supported by preset rules
Scheduled trigger
Triggered by configuration change
 */
class ConfigRule extends AbstractModel
{
    /**
     * @var string Rule identifier
Note: This field may return null, indicating that no valid value is found.
     */
    public $Identifier;

    /**
     * @var string Name of the rule

Note: This field may return null, indicating that no valid value is found.
     */
    public $RuleName;

    /**
     * @var array Rule parameters
Note: This field may return null, indicating that no valid value is found.
     */
    public $InputParameter;

    /**
     * @var array Rule trigger condition.

Note: This field may return null, indicating that no valid value is found.
     */
    public $SourceCondition;

    /**
     * @var array Resource types supported by rule. The rule only applies to specified resource types.
Note: This field may return null, indicating that no valid value is found.
     */
    public $ResourceType;

    /**
     * @var array Rule ownership tag
Note: This field may return null, indicating that no valid value is found.
     */
    public $Labels;

    /**
     * @var integer Rule risk level
1: Low risk
2: Medium risk
3: High risk
Note: This field may return null, indicating that no valid value is found.
     */
    public $RiskLevel;

    /**
     * @var string Function corresponding to rule
Note: This field may return null, indicating that no valid value is found.
     */
    public $ServiceFunction;

    /**
     * @var string Creation time

Format: YYYY-MM-DD h:i:s
Note: This field may return null, indicating that no valid value is found.
     */
    public $CreateTime;

    /**
     * @var string Rule description

Note: This field may return null, indicating that no valid value is found.
     */
    public $Description;

    /**
     * @var string ACTIVE: Enabled
NO_ACTIVE: Disabled
Note: This field may return null, indicating that no valid value is found.
     */
    public $Status;

    /**
     * @var string Compliance: 'COMPLIANT'
'NON_COMPLIANT'
'NOT_APPLICABLE'
Note: This field may return null, indicating that no valid value is found.
     */
    public $ComplianceResult;

    /**
     * @var Annotation ["",""]
Note: This field may return null, indicating that no valid value is found.
     */
    public $Annotation;

    /**
     * @var string Rule evaluation time
Format: YYYY-MM-DD h:i:s

Note: This field may return null, indicating that no valid value is found.
     */
    public $ConfigRuleInvokedTime;

    /**
     * @var string Rule ID

Note: This field may return null, indicating that no valid value is found.
     */
    public $ConfigRuleId;

    /**
     * @var string CUSTOMIZE
Managed rule
Note: This field may return null, indicating that no valid value is found.
     */
    public $IdentifierType;

    /**
     * @var string Compliance package ID
Note: This field may return null, indicating that no valid value is found.
     */
    public $CompliancePackId;

    /**
     * @var array Trigger Type

Scheduled trigger
Triggered by configuration change
Note: This field may return null, indicating that no valid value is found.
     */
    public $TriggerType;

    /**
     * @var array Parameter details

Note: This field may return null, indicating that no valid value is found.
     */
    public $ManageInputParameter;

    /**
     * @var string Rule name

Note: This field may return null, indicating that no valid value is found.
     */
    public $CompliancePackName;

    /**
     * @var array Associated region
Note: This field may return null, indicating that no valid value is found.
     */
    public $RegionsScope;

    /**
     * @var array Associate Tag

Note: This field may return null, indicating that no valid value is found.
     */
    public $TagsScope;

    /**
     * @var array  The rule is invalid for the specified resource ID, meaning it does not evaluate the resource.
Note: This field may return null, indicating that no valid value is found.
     */
    public $ExcludeResourceIdsScope;

    /**
     * @var string Account group ID

Note: This field may return null, indicating that no valid value is found.
     */
    public $AccountGroupId;

    /**
     * @var string Account group name
Note: This field may return null, indicating that no valid value is found.
     */
    public $AccountGroupName;

    /**
     * @var integer Rule owner user ID
Note: This field may return null, indicating that no valid value is found.
     */
    public $RuleOwnerId;

    /**
     * @var array Trigger methods supported by preset rules
Scheduled trigger
Triggered by configuration change
     */
    public $ManageTriggerType;

    /**
     * @param string $Identifier Rule identifier
Note: This field may return null, indicating that no valid value is found.
     * @param string $RuleName Name of the rule

Note: This field may return null, indicating that no valid value is found.
     * @param array $InputParameter Rule parameters
Note: This field may return null, indicating that no valid value is found.
     * @param array $SourceCondition Rule trigger condition.

Note: This field may return null, indicating that no valid value is found.
     * @param array $ResourceType Resource types supported by rule. The rule only applies to specified resource types.
Note: This field may return null, indicating that no valid value is found.
     * @param array $Labels Rule ownership tag
Note: This field may return null, indicating that no valid value is found.
     * @param integer $RiskLevel Rule risk level
1: Low risk
2: Medium risk
3: High risk
Note: This field may return null, indicating that no valid value is found.
     * @param string $ServiceFunction Function corresponding to rule
Note: This field may return null, indicating that no valid value is found.
     * @param string $CreateTime Creation time

Format: YYYY-MM-DD h:i:s
Note: This field may return null, indicating that no valid value is found.
     * @param string $Description Rule description

Note: This field may return null, indicating that no valid value is found.
     * @param string $Status ACTIVE: Enabled
NO_ACTIVE: Disabled
Note: This field may return null, indicating that no valid value is found.
     * @param string $ComplianceResult Compliance: 'COMPLIANT'
'NON_COMPLIANT'
'NOT_APPLICABLE'
Note: This field may return null, indicating that no valid value is found.
     * @param Annotation $Annotation ["",""]
Note: This field may return null, indicating that no valid value is found.
     * @param string $ConfigRuleInvokedTime Rule evaluation time
Format: YYYY-MM-DD h:i:s

Note: This field may return null, indicating that no valid value is found.
     * @param string $ConfigRuleId Rule ID

Note: This field may return null, indicating that no valid value is found.
     * @param string $IdentifierType CUSTOMIZE
Managed rule
Note: This field may return null, indicating that no valid value is found.
     * @param string $CompliancePackId Compliance package ID
Note: This field may return null, indicating that no valid value is found.
     * @param array $TriggerType Trigger Type

Scheduled trigger
Triggered by configuration change
Note: This field may return null, indicating that no valid value is found.
     * @param array $ManageInputParameter Parameter details

Note: This field may return null, indicating that no valid value is found.
     * @param string $CompliancePackName Rule name

Note: This field may return null, indicating that no valid value is found.
     * @param array $RegionsScope Associated region
Note: This field may return null, indicating that no valid value is found.
     * @param array $TagsScope Associate Tag

Note: This field may return null, indicating that no valid value is found.
     * @param array $ExcludeResourceIdsScope  The rule is invalid for the specified resource ID, meaning it does not evaluate the resource.
Note: This field may return null, indicating that no valid value is found.
     * @param string $AccountGroupId Account group ID

Note: This field may return null, indicating that no valid value is found.
     * @param string $AccountGroupName Account group name
Note: This field may return null, indicating that no valid value is found.
     * @param integer $RuleOwnerId Rule owner user ID
Note: This field may return null, indicating that no valid value is found.
     * @param array $ManageTriggerType Trigger methods supported by preset rules
Scheduled trigger
Triggered by configuration change
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
