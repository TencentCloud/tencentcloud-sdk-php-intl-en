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
 * Rule Execution Result
 *
 * @method integer getRuleExecId() Obtain Rule Execution ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRuleExecId(integer $RuleExecId) Set Rule Execution ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getRuleGroupExecId() Obtain Rule Group Execution ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRuleGroupExecId(integer $RuleGroupExecId) Set Rule Group Execution ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getRuleGroupId() Obtain Rule Group IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setRuleGroupId(integer $RuleGroupId) Set Rule Group IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getRuleId() Obtain Rule IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setRuleId(integer $RuleId) Set Rule IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getRuleName() Obtain Rule nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setRuleName(string $RuleName) Set Rule nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getRuleType() Obtain Rule type 1.System Template, 2.Custom Definition Template, 3.Custom Definition SQLNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setRuleType(integer $RuleType) Set Rule type 1.System Template, 2.Custom Definition Template, 3.Custom Definition SQLNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getSourceObjectDataTypeName() Obtain Source Field Detailed Type, int string
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSourceObjectDataTypeName(string $SourceObjectDataTypeName) Set Source Field Detailed Type, int string
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getSourceObjectValue() Obtain Source Field NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setSourceObjectValue(string $SourceObjectValue) Set Source Field NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getConditionExpression() Obtain Conditional Scan WHERE Condition ExpressionNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setConditionExpression(string $ConditionExpression) Set Conditional Scan WHERE Condition ExpressionNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getExecResultStatus() Obtain Test Results (1: Detection passed, 2: Trigger Rules, 3: Detection failed)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setExecResultStatus(integer $ExecResultStatus) Set Test Results (1: Detection passed, 2: Trigger Rules, 3: Detection failed)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTriggerResult() Obtain Trigger Result, Alert Sent Successfully, Block Task Successful
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTriggerResult(string $TriggerResult) Set Trigger Result, Alert Sent Successfully, Block Task Successful
Note: This field may return null, indicating that no valid value can be obtained.
 * @method CompareResult getCompareResult() Obtain Comparison Result
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCompareResult(CompareResult $CompareResult) Set Comparison Result
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTemplateName() Obtain Template name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTemplateName(string $TemplateName) Set Template name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getQualityDim() Obtain Quality Dimension
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setQualityDim(integer $QualityDim) Set Quality Dimension
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTargetDBTableName() Obtain Target Table - Database Table Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTargetDBTableName(string $TargetDBTableName) Set Target Table - Database Table Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTargetObjectValue() Obtain Target Table - Field Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTargetObjectValue(string $TargetObjectValue) Set Target Table - Field Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTargetObjectDataType() Obtain Target Table - Field Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTargetObjectDataType(string $TargetObjectDataType) Set Target Table - Field Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method RuleFieldConfig getFieldConfig() Obtain Custom Definition Template SQL Expression Parameters
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFieldConfig(RuleFieldConfig $FieldConfig) Set Custom Definition Template SQL Expression Parameters
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getRelConditionExpr() Obtain Source Field and Target Field Association Condition ON ExpressionNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setRelConditionExpr(string $RelConditionExpr) Set Source Field and Target Field Association Condition ON ExpressionNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getStartTime() Obtain Execution timeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setStartTime(string $StartTime) Set Execution timeNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getAlarmLevel() Obtain 1/2/3: Low/Medium/High
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setAlarmLevel(integer $AlarmLevel) Set 1/2/3: Low/Medium/High
Note: This field may return null, indicating that no valid value can be obtained.
 */
class RuleExecResult extends AbstractModel
{
    /**
     * @var integer Rule Execution ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RuleExecId;

    /**
     * @var integer Rule Group Execution ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RuleGroupExecId;

    /**
     * @var integer Rule Group IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $RuleGroupId;

    /**
     * @var integer Rule IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $RuleId;

    /**
     * @var string Rule nameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $RuleName;

    /**
     * @var integer Rule type 1.System Template, 2.Custom Definition Template, 3.Custom Definition SQLNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $RuleType;

    /**
     * @var string Source Field Detailed Type, int string
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SourceObjectDataTypeName;

    /**
     * @var string Source Field NameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $SourceObjectValue;

    /**
     * @var string Conditional Scan WHERE Condition ExpressionNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ConditionExpression;

    /**
     * @var integer Test Results (1: Detection passed, 2: Trigger Rules, 3: Detection failed)
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExecResultStatus;

    /**
     * @var string Trigger Result, Alert Sent Successfully, Block Task Successful
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TriggerResult;

    /**
     * @var CompareResult Comparison Result
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CompareResult;

    /**
     * @var string Template name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TemplateName;

    /**
     * @var integer Quality Dimension
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $QualityDim;

    /**
     * @var string Target Table - Database Table Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TargetDBTableName;

    /**
     * @var string Target Table - Field Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TargetObjectValue;

    /**
     * @var string Target Table - Field Type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TargetObjectDataType;

    /**
     * @var RuleFieldConfig Custom Definition Template SQL Expression Parameters
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $FieldConfig;

    /**
     * @var string Source Field and Target Field Association Condition ON ExpressionNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $RelConditionExpr;

    /**
     * @var string Execution timeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $StartTime;

    /**
     * @var integer 1/2/3: Low/Medium/High
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $AlarmLevel;

    /**
     * @param integer $RuleExecId Rule Execution ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $RuleGroupExecId Rule Group Execution ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $RuleGroupId Rule Group IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $RuleId Rule IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $RuleName Rule nameNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $RuleType Rule type 1.System Template, 2.Custom Definition Template, 3.Custom Definition SQLNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $SourceObjectDataTypeName Source Field Detailed Type, int string
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $SourceObjectValue Source Field NameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ConditionExpression Conditional Scan WHERE Condition ExpressionNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $ExecResultStatus Test Results (1: Detection passed, 2: Trigger Rules, 3: Detection failed)
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TriggerResult Trigger Result, Alert Sent Successfully, Block Task Successful
Note: This field may return null, indicating that no valid value can be obtained.
     * @param CompareResult $CompareResult Comparison Result
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TemplateName Template name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $QualityDim Quality Dimension
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TargetDBTableName Target Table - Database Table Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TargetObjectValue Target Table - Field Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TargetObjectDataType Target Table - Field Type
Note: This field may return null, indicating that no valid value can be obtained.
     * @param RuleFieldConfig $FieldConfig Custom Definition Template SQL Expression Parameters
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $RelConditionExpr Source Field and Target Field Association Condition ON ExpressionNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $StartTime Execution timeNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $AlarmLevel 1/2/3: Low/Medium/High
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("RuleExecId",$param) and $param["RuleExecId"] !== null) {
            $this->RuleExecId = $param["RuleExecId"];
        }

        if (array_key_exists("RuleGroupExecId",$param) and $param["RuleGroupExecId"] !== null) {
            $this->RuleGroupExecId = $param["RuleGroupExecId"];
        }

        if (array_key_exists("RuleGroupId",$param) and $param["RuleGroupId"] !== null) {
            $this->RuleGroupId = $param["RuleGroupId"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("SourceObjectDataTypeName",$param) and $param["SourceObjectDataTypeName"] !== null) {
            $this->SourceObjectDataTypeName = $param["SourceObjectDataTypeName"];
        }

        if (array_key_exists("SourceObjectValue",$param) and $param["SourceObjectValue"] !== null) {
            $this->SourceObjectValue = $param["SourceObjectValue"];
        }

        if (array_key_exists("ConditionExpression",$param) and $param["ConditionExpression"] !== null) {
            $this->ConditionExpression = $param["ConditionExpression"];
        }

        if (array_key_exists("ExecResultStatus",$param) and $param["ExecResultStatus"] !== null) {
            $this->ExecResultStatus = $param["ExecResultStatus"];
        }

        if (array_key_exists("TriggerResult",$param) and $param["TriggerResult"] !== null) {
            $this->TriggerResult = $param["TriggerResult"];
        }

        if (array_key_exists("CompareResult",$param) and $param["CompareResult"] !== null) {
            $this->CompareResult = new CompareResult();
            $this->CompareResult->deserialize($param["CompareResult"]);
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("QualityDim",$param) and $param["QualityDim"] !== null) {
            $this->QualityDim = $param["QualityDim"];
        }

        if (array_key_exists("TargetDBTableName",$param) and $param["TargetDBTableName"] !== null) {
            $this->TargetDBTableName = $param["TargetDBTableName"];
        }

        if (array_key_exists("TargetObjectValue",$param) and $param["TargetObjectValue"] !== null) {
            $this->TargetObjectValue = $param["TargetObjectValue"];
        }

        if (array_key_exists("TargetObjectDataType",$param) and $param["TargetObjectDataType"] !== null) {
            $this->TargetObjectDataType = $param["TargetObjectDataType"];
        }

        if (array_key_exists("FieldConfig",$param) and $param["FieldConfig"] !== null) {
            $this->FieldConfig = new RuleFieldConfig();
            $this->FieldConfig->deserialize($param["FieldConfig"]);
        }

        if (array_key_exists("RelConditionExpr",$param) and $param["RelConditionExpr"] !== null) {
            $this->RelConditionExpr = $param["RelConditionExpr"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("AlarmLevel",$param) and $param["AlarmLevel"] !== null) {
            $this->AlarmLevel = $param["AlarmLevel"];
        }
    }
}
