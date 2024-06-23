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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRule request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method integer getRuleId() Obtain Rule ID
 * @method void setRuleId(integer $RuleId) Set Rule ID
 * @method integer getRuleGroupId() Obtain Rule Group ID
 * @method void setRuleGroupId(integer $RuleGroupId) Set Rule Group ID
 * @method string getName() Obtain Rule name
 * @method void setName(string $Name) Set Rule name
 * @method string getTableId() Obtain Data Table ID
 * @method void setTableId(string $TableId) Set Data Table ID
 * @method integer getRuleTemplateId() Obtain Rule Template ID
 * @method void setRuleTemplateId(integer $RuleTemplateId) Set Rule Template ID
 * @method integer getType() Obtain Rule type 1.System Template, 2.Custom Definition Template, 3.Custom Definition SQL
 * @method void setType(integer $Type) Set Rule type 1.System Template, 2.Custom Definition Template, 3.Custom Definition SQL
 * @method integer getQualityDim() Obtain Quality Dimension of Rule (1: Accuracy, 2: Uniqueness, 3: Integrity, 4: Consistency, 5: Timeliness, 6: Validity)
 * @method void setQualityDim(integer $QualityDim) Set Quality Dimension of Rule (1: Accuracy, 2: Uniqueness, 3: Integrity, 4: Consistency, 5: Timeliness, 6: Validity)
 * @method string getSourceObjectDataTypeName() Obtain Source Field Detailed Type, int, string
 * @method void setSourceObjectDataTypeName(string $SourceObjectDataTypeName) Set Source Field Detailed Type, int, string
 * @method string getSourceObjectValue() Obtain Source Field Name
 * @method void setSourceObjectValue(string $SourceObjectValue) Set Source Field Name
 * @method integer getConditionType() Obtain Detection Range 1.Whole Table 2.Conditional Scan
 * @method void setConditionType(integer $ConditionType) Set Detection Range 1.Whole Table 2.Conditional Scan
 * @method string getConditionExpression() Obtain Conditional Scan WHERE Condition Expression
 * @method void setConditionExpression(string $ConditionExpression) Set Conditional Scan WHERE Condition Expression
 * @method string getCustomSql() Obtain Custom Definition SQL
 * @method void setCustomSql(string $CustomSql) Set Custom Definition SQL
 * @method CompareRule getCompareRule() Obtain Alert Trigger Condition
 * @method void setCompareRule(CompareRule $CompareRule) Set Alert Trigger Condition
 * @method integer getAlarmLevel() Obtain Alert Trigger Level 1.Low, 2.Medium, 3.High
 * @method void setAlarmLevel(integer $AlarmLevel) Set Alert Trigger Level 1.Low, 2.Medium, 3.High
 * @method string getDescription() Obtain Rule Description
 * @method void setDescription(string $Description) Set Rule Description
 * @method string getTargetDatabaseId() Obtain Target Database Id
 * @method void setTargetDatabaseId(string $TargetDatabaseId) Set Target Database Id
 * @method string getTargetTableId() Obtain Target Table Id
 * @method void setTargetTableId(string $TargetTableId) Set Target Table Id
 * @method string getTargetConditionExpr() Obtain Target Filter Condition Expression
 * @method void setTargetConditionExpr(string $TargetConditionExpr) Set Target Filter Condition Expression
 * @method string getRelConditionExpr() Obtain Source Field and Target Field Association Condition ON Expression
 * @method void setRelConditionExpr(string $RelConditionExpr) Set Source Field and Target Field Association Condition ON Expression
 * @method RuleFieldConfig getFieldConfig() Obtain Custom Definition Template SQL Expression Field Replacement Parameter
 * @method void setFieldConfig(RuleFieldConfig $FieldConfig) Set Custom Definition Template SQL Expression Field Replacement Parameter
 * @method string getTargetObjectValue() Obtain Target Field Name CITY
 * @method void setTargetObjectValue(string $TargetObjectValue) Set Target Field Name CITY
 * @method array getSourceEngineTypes() Obtain Execution engine adapted to the rule
 * @method void setSourceEngineTypes(array $SourceEngineTypes) Set Execution engine adapted to the rule
 */
class ModifyRuleRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var integer Rule ID
     */
    public $RuleId;

    /**
     * @var integer Rule Group ID
     */
    public $RuleGroupId;

    /**
     * @var string Rule name
     */
    public $Name;

    /**
     * @var string Data Table ID
     */
    public $TableId;

    /**
     * @var integer Rule Template ID
     */
    public $RuleTemplateId;

    /**
     * @var integer Rule type 1.System Template, 2.Custom Definition Template, 3.Custom Definition SQL
     */
    public $Type;

    /**
     * @var integer Quality Dimension of Rule (1: Accuracy, 2: Uniqueness, 3: Integrity, 4: Consistency, 5: Timeliness, 6: Validity)
     */
    public $QualityDim;

    /**
     * @var string Source Field Detailed Type, int, string
     */
    public $SourceObjectDataTypeName;

    /**
     * @var string Source Field Name
     */
    public $SourceObjectValue;

    /**
     * @var integer Detection Range 1.Whole Table 2.Conditional Scan
     */
    public $ConditionType;

    /**
     * @var string Conditional Scan WHERE Condition Expression
     */
    public $ConditionExpression;

    /**
     * @var string Custom Definition SQL
     */
    public $CustomSql;

    /**
     * @var CompareRule Alert Trigger Condition
     */
    public $CompareRule;

    /**
     * @var integer Alert Trigger Level 1.Low, 2.Medium, 3.High
     */
    public $AlarmLevel;

    /**
     * @var string Rule Description
     */
    public $Description;

    /**
     * @var string Target Database Id
     */
    public $TargetDatabaseId;

    /**
     * @var string Target Table Id
     */
    public $TargetTableId;

    /**
     * @var string Target Filter Condition Expression
     */
    public $TargetConditionExpr;

    /**
     * @var string Source Field and Target Field Association Condition ON Expression
     */
    public $RelConditionExpr;

    /**
     * @var RuleFieldConfig Custom Definition Template SQL Expression Field Replacement Parameter
     */
    public $FieldConfig;

    /**
     * @var string Target Field Name CITY
     */
    public $TargetObjectValue;

    /**
     * @var array Execution engine adapted to the rule
     */
    public $SourceEngineTypes;

    /**
     * @param string $ProjectId Project ID
     * @param integer $RuleId Rule ID
     * @param integer $RuleGroupId Rule Group ID
     * @param string $Name Rule name
     * @param string $TableId Data Table ID
     * @param integer $RuleTemplateId Rule Template ID
     * @param integer $Type Rule type 1.System Template, 2.Custom Definition Template, 3.Custom Definition SQL
     * @param integer $QualityDim Quality Dimension of Rule (1: Accuracy, 2: Uniqueness, 3: Integrity, 4: Consistency, 5: Timeliness, 6: Validity)
     * @param string $SourceObjectDataTypeName Source Field Detailed Type, int, string
     * @param string $SourceObjectValue Source Field Name
     * @param integer $ConditionType Detection Range 1.Whole Table 2.Conditional Scan
     * @param string $ConditionExpression Conditional Scan WHERE Condition Expression
     * @param string $CustomSql Custom Definition SQL
     * @param CompareRule $CompareRule Alert Trigger Condition
     * @param integer $AlarmLevel Alert Trigger Level 1.Low, 2.Medium, 3.High
     * @param string $Description Rule Description
     * @param string $TargetDatabaseId Target Database Id
     * @param string $TargetTableId Target Table Id
     * @param string $TargetConditionExpr Target Filter Condition Expression
     * @param string $RelConditionExpr Source Field and Target Field Association Condition ON Expression
     * @param RuleFieldConfig $FieldConfig Custom Definition Template SQL Expression Field Replacement Parameter
     * @param string $TargetObjectValue Target Field Name CITY
     * @param array $SourceEngineTypes Execution engine adapted to the rule
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleGroupId",$param) and $param["RuleGroupId"] !== null) {
            $this->RuleGroupId = $param["RuleGroupId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("RuleTemplateId",$param) and $param["RuleTemplateId"] !== null) {
            $this->RuleTemplateId = $param["RuleTemplateId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("QualityDim",$param) and $param["QualityDim"] !== null) {
            $this->QualityDim = $param["QualityDim"];
        }

        if (array_key_exists("SourceObjectDataTypeName",$param) and $param["SourceObjectDataTypeName"] !== null) {
            $this->SourceObjectDataTypeName = $param["SourceObjectDataTypeName"];
        }

        if (array_key_exists("SourceObjectValue",$param) and $param["SourceObjectValue"] !== null) {
            $this->SourceObjectValue = $param["SourceObjectValue"];
        }

        if (array_key_exists("ConditionType",$param) and $param["ConditionType"] !== null) {
            $this->ConditionType = $param["ConditionType"];
        }

        if (array_key_exists("ConditionExpression",$param) and $param["ConditionExpression"] !== null) {
            $this->ConditionExpression = $param["ConditionExpression"];
        }

        if (array_key_exists("CustomSql",$param) and $param["CustomSql"] !== null) {
            $this->CustomSql = $param["CustomSql"];
        }

        if (array_key_exists("CompareRule",$param) and $param["CompareRule"] !== null) {
            $this->CompareRule = new CompareRule();
            $this->CompareRule->deserialize($param["CompareRule"]);
        }

        if (array_key_exists("AlarmLevel",$param) and $param["AlarmLevel"] !== null) {
            $this->AlarmLevel = $param["AlarmLevel"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("TargetDatabaseId",$param) and $param["TargetDatabaseId"] !== null) {
            $this->TargetDatabaseId = $param["TargetDatabaseId"];
        }

        if (array_key_exists("TargetTableId",$param) and $param["TargetTableId"] !== null) {
            $this->TargetTableId = $param["TargetTableId"];
        }

        if (array_key_exists("TargetConditionExpr",$param) and $param["TargetConditionExpr"] !== null) {
            $this->TargetConditionExpr = $param["TargetConditionExpr"];
        }

        if (array_key_exists("RelConditionExpr",$param) and $param["RelConditionExpr"] !== null) {
            $this->RelConditionExpr = $param["RelConditionExpr"];
        }

        if (array_key_exists("FieldConfig",$param) and $param["FieldConfig"] !== null) {
            $this->FieldConfig = new RuleFieldConfig();
            $this->FieldConfig->deserialize($param["FieldConfig"]);
        }

        if (array_key_exists("TargetObjectValue",$param) and $param["TargetObjectValue"] !== null) {
            $this->TargetObjectValue = $param["TargetObjectValue"];
        }

        if (array_key_exists("SourceEngineTypes",$param) and $param["SourceEngineTypes"] !== null) {
            $this->SourceEngineTypes = $param["SourceEngineTypes"];
        }
    }
}
