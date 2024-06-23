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
 * Data Quality Rules
 *
 * @method integer getRuleId() Obtain Rule ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRuleId(integer $RuleId) Set Rule ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getRuleGroupId() Obtain Rule Group ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRuleGroupId(integer $RuleGroupId) Set Rule Group ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTableId() Obtain Data Table ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableId(string $TableId) Set Data Table ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getName() Obtain Rule nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setName(string $Name) Set Rule nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getType() Obtain Rule Type 1. System Template, 2. Custom Definition Template, 3. Custom Definition SQL
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setType(integer $Type) Set Rule Type 1. System Template, 2. Custom Definition Template, 3. Custom Definition SQL
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getRuleTemplateId() Obtain Rule Template ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRuleTemplateId(integer $RuleTemplateId) Set Rule Template ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getRuleTemplateContent() Obtain Rule Template Overview
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRuleTemplateContent(string $RuleTemplateContent) Set Rule Template Overview
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getQualityDim() Obtain Quality Dimension of Rule 1: Accuracy, 2: Uniqueness, 3: Completeness, 4: Consistency, 5: Timeliness, 6: Validity
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setQualityDim(integer $QualityDim) Set Quality Dimension of Rule 1: Accuracy, 2: Uniqueness, 3: Completeness, 4: Consistency, 5: Timeliness, 6: Validity
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getSourceObjectType() Obtain Applicable Source Data Object Type (1: Constant, 2: Offline Table Level, 3: Offline Field Level)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSourceObjectType(integer $SourceObjectType) Set Applicable Source Data Object Type (1: Constant, 2: Offline Table Level, 3: Offline Field Level)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getSourceObjectDataType() Obtain Applicable Source Data Object Type (1: Numeric, 2: String)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSourceObjectDataType(integer $SourceObjectDataType) Set Applicable Source Data Object Type (1: Numeric, 2: String)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getSourceObjectDataTypeName() Obtain Source Field Detailed Type, INT, STRING
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSourceObjectDataTypeName(string $SourceObjectDataTypeName) Set Source Field Detailed Type, INT, STRING
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getSourceObjectValue() Obtain Source Field Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSourceObjectValue(string $SourceObjectValue) Set Source Field Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getConditionType() Obtain Detection Range 1. Whole Table, 2. Conditional Scan
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setConditionType(integer $ConditionType) Set Detection Range 1. Whole Table, 2. Conditional Scan
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getConditionExpression() Obtain Conditional Scan WHERE Condition Expression
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setConditionExpression(string $ConditionExpression) Set Conditional Scan WHERE Condition Expression
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCustomSql() Obtain Custom Template SQL Expression from Definition
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCustomSql(string $CustomSql) Set Custom Template SQL Expression from Definition
Note: This field may return null, indicating that no valid value can be obtained.
 * @method CompareRule getCompareRule() Obtain Alert Trigger Condition
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCompareRule(CompareRule $CompareRule) Set Alert Trigger Condition
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getAlarmLevel() Obtain Alert Trigger Level 1. Low, 2. Medium, 3. High
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setAlarmLevel(integer $AlarmLevel) Set Alert Trigger Level 1. Low, 2. Medium, 3. High
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDescription() Obtain Rule DescriptionNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setDescription(string $Description) Set Rule DescriptionNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getOperator() Obtain Rule Configurator
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOperator(string $Operator) Set Rule Configurator
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTargetDatabaseId() Obtain Target Database Id
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTargetDatabaseId(string $TargetDatabaseId) Set Target Database Id
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTargetDatabaseName() Obtain Target Database Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTargetDatabaseName(string $TargetDatabaseName) Set Target Database Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTargetTableId() Obtain Target Table Id
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTargetTableId(string $TargetTableId) Set Target Table Id
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTargetTableName() Obtain Target Table Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTargetTableName(string $TargetTableName) Set Target Table Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTargetConditionExpr() Obtain Target Field Filter Condition Expression
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTargetConditionExpr(string $TargetConditionExpr) Set Target Field Filter Condition Expression
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getRelConditionExpr() Obtain Source and target field association conditions in ON expression
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRelConditionExpr(string $RelConditionExpr) Set Source and target field association conditions in ON expression
Note: This field may return null, indicating that no valid value can be obtained.
 * @method RuleFieldConfig getFieldConfig() Obtain From Definition template SQL expression parameters
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFieldConfig(RuleFieldConfig $FieldConfig) Set From Definition template SQL expression parameters
Note: This field may return null, indicating that no valid value can be obtained.
 * @method boolean getMultiSourceFlag() Obtain Whether to join multiple tables
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMultiSourceFlag(boolean $MultiSourceFlag) Set Whether to join multiple tables
Note: This field may return null, indicating that no valid value can be obtained.
 * @method boolean getWhereFlag() Obtain Whether WHERE parameters exist
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setWhereFlag(boolean $WhereFlag) Set Whether WHERE parameters exist
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTemplateSql() Obtain Template original SQL
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTemplateSql(string $TemplateSql) Set Template original SQL
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getSubQualityDim() Obtain Template sub-dimensions: 0.Parent dimension type, 1.Consistency: Enum range consistency, 2.Consistency: Numeric range consistency, 3.Consistency: Field data correlation
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSubQualityDim(integer $SubQualityDim) Set Template sub-dimensions: 0.Parent dimension type, 1.Consistency: Enum range consistency, 2.Consistency: Numeric range consistency, 3.Consistency: Field data correlation
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getTargetObjectType() Obtain Rule applicable target data object types (1: Constant, 2: Offline table level, 3: Offline field level)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTargetObjectType(integer $TargetObjectType) Set Rule applicable target data object types (1: Constant, 2: Offline table level, 3: Offline field level)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getTargetObjectDataType() Obtain Rule applicable target data object types (1: Numeric, 2: String)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTargetObjectDataType(integer $TargetObjectDataType) Set Rule applicable target data object types (1: Numeric, 2: String)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTargetObjectDataTypeName() Obtain Target field detailed types, INT, STRING
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTargetObjectDataTypeName(string $TargetObjectDataTypeName) Set Target field detailed types, INT, STRING
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTargetObjectValue() Obtain Target field name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTargetObjectValue(string $TargetObjectValue) Set Target field name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getSourceEngineTypes() Obtain Source engine type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSourceEngineTypes(array $SourceEngineTypes) Set Source engine type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTableName() Obtain Table name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableName(string $TableName) Set Table name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTableOwnerName() Obtain Table manager name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableOwnerName(string $TableOwnerName) Set Table manager name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method RuleGroupExecStrategy getExecStrategy() Obtain Execution strategy information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setExecStrategy(RuleGroupExecStrategy $ExecStrategy) Set Execution strategy information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method RuleGroupSubscribe getSubscription() Obtain Subscription information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSubscription(RuleGroupSubscribe $Subscription) Set Subscription information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCreateTime() Obtain Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getDatasourceId() Obtain Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatasourceId(integer $DatasourceId) Set Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDatabaseId() Obtain Database ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatabaseId(string $DatabaseId) Set Database ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getMonitorStatus() Obtain Monitoring enabled. 0 false, 1 true
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMonitorStatus(integer $MonitorStatus) Set Monitoring enabled. 0 false, 1 true
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTriggerCondition() Obtain Trigger conditionNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTriggerCondition(string $TriggerCondition) Set Trigger conditionNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getDsEnvType() Obtain 0, or not returned, or null: Undefined, 1: Production, 2: Development
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDsEnvType(integer $DsEnvType) Set 0, or not returned, or null: Undefined, 1: Production, 2: Development
Note: This field may return null, indicating that no valid value can be obtained.
 */
class Rule extends AbstractModel
{
    /**
     * @var integer Rule ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RuleId;

    /**
     * @var integer Rule Group ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RuleGroupId;

    /**
     * @var string Data Table ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableId;

    /**
     * @var string Rule nameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Name;

    /**
     * @var integer Rule Type 1. System Template, 2. Custom Definition Template, 3. Custom Definition SQL
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Type;

    /**
     * @var integer Rule Template ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RuleTemplateId;

    /**
     * @var string Rule Template Overview
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RuleTemplateContent;

    /**
     * @var integer Quality Dimension of Rule 1: Accuracy, 2: Uniqueness, 3: Completeness, 4: Consistency, 5: Timeliness, 6: Validity
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $QualityDim;

    /**
     * @var integer Applicable Source Data Object Type (1: Constant, 2: Offline Table Level, 3: Offline Field Level)
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SourceObjectType;

    /**
     * @var integer Applicable Source Data Object Type (1: Numeric, 2: String)
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SourceObjectDataType;

    /**
     * @var string Source Field Detailed Type, INT, STRING
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SourceObjectDataTypeName;

    /**
     * @var string Source Field Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SourceObjectValue;

    /**
     * @var integer Detection Range 1. Whole Table, 2. Conditional Scan
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ConditionType;

    /**
     * @var string Conditional Scan WHERE Condition Expression
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ConditionExpression;

    /**
     * @var string Custom Template SQL Expression from Definition
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CustomSql;

    /**
     * @var CompareRule Alert Trigger Condition
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CompareRule;

    /**
     * @var integer Alert Trigger Level 1. Low, 2. Medium, 3. High
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $AlarmLevel;

    /**
     * @var string Rule DescriptionNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Description;

    /**
     * @var string Rule Configurator
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Operator;

    /**
     * @var string Target Database Id
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TargetDatabaseId;

    /**
     * @var string Target Database Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TargetDatabaseName;

    /**
     * @var string Target Table Id
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TargetTableId;

    /**
     * @var string Target Table Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TargetTableName;

    /**
     * @var string Target Field Filter Condition Expression
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TargetConditionExpr;

    /**
     * @var string Source and target field association conditions in ON expression
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RelConditionExpr;

    /**
     * @var RuleFieldConfig From Definition template SQL expression parameters
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $FieldConfig;

    /**
     * @var boolean Whether to join multiple tables
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $MultiSourceFlag;

    /**
     * @var boolean Whether WHERE parameters exist
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $WhereFlag;

    /**
     * @var string Template original SQL
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TemplateSql;

    /**
     * @var integer Template sub-dimensions: 0.Parent dimension type, 1.Consistency: Enum range consistency, 2.Consistency: Numeric range consistency, 3.Consistency: Field data correlation
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SubQualityDim;

    /**
     * @var integer Rule applicable target data object types (1: Constant, 2: Offline table level, 3: Offline field level)
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TargetObjectType;

    /**
     * @var integer Rule applicable target data object types (1: Numeric, 2: String)
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TargetObjectDataType;

    /**
     * @var string Target field detailed types, INT, STRING
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TargetObjectDataTypeName;

    /**
     * @var string Target field name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TargetObjectValue;

    /**
     * @var array Source engine type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SourceEngineTypes;

    /**
     * @var string Table name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableName;

    /**
     * @var string Table manager name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableOwnerName;

    /**
     * @var RuleGroupExecStrategy Execution strategy information
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExecStrategy;

    /**
     * @var RuleGroupSubscribe Subscription information
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Subscription;

    /**
     * @var string Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $CreateTime;

    /**
     * @var integer Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatasourceId;

    /**
     * @var string Database ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatabaseId;

    /**
     * @var integer Monitoring enabled. 0 false, 1 true
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $MonitorStatus;

    /**
     * @var string Trigger conditionNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TriggerCondition;

    /**
     * @var integer 0, or not returned, or null: Undefined, 1: Production, 2: Development
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DsEnvType;

    /**
     * @param integer $RuleId Rule ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $RuleGroupId Rule Group ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TableId Data Table ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Name Rule nameNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Type Rule Type 1. System Template, 2. Custom Definition Template, 3. Custom Definition SQL
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $RuleTemplateId Rule Template ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $RuleTemplateContent Rule Template Overview
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $QualityDim Quality Dimension of Rule 1: Accuracy, 2: Uniqueness, 3: Completeness, 4: Consistency, 5: Timeliness, 6: Validity
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $SourceObjectType Applicable Source Data Object Type (1: Constant, 2: Offline Table Level, 3: Offline Field Level)
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $SourceObjectDataType Applicable Source Data Object Type (1: Numeric, 2: String)
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $SourceObjectDataTypeName Source Field Detailed Type, INT, STRING
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $SourceObjectValue Source Field Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $ConditionType Detection Range 1. Whole Table, 2. Conditional Scan
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ConditionExpression Conditional Scan WHERE Condition Expression
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CustomSql Custom Template SQL Expression from Definition
Note: This field may return null, indicating that no valid value can be obtained.
     * @param CompareRule $CompareRule Alert Trigger Condition
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $AlarmLevel Alert Trigger Level 1. Low, 2. Medium, 3. High
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Description Rule DescriptionNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $Operator Rule Configurator
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TargetDatabaseId Target Database Id
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TargetDatabaseName Target Database Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TargetTableId Target Table Id
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TargetTableName Target Table Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TargetConditionExpr Target Field Filter Condition Expression
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $RelConditionExpr Source and target field association conditions in ON expression
Note: This field may return null, indicating that no valid value can be obtained.
     * @param RuleFieldConfig $FieldConfig From Definition template SQL expression parameters
Note: This field may return null, indicating that no valid value can be obtained.
     * @param boolean $MultiSourceFlag Whether to join multiple tables
Note: This field may return null, indicating that no valid value can be obtained.
     * @param boolean $WhereFlag Whether WHERE parameters exist
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TemplateSql Template original SQL
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $SubQualityDim Template sub-dimensions: 0.Parent dimension type, 1.Consistency: Enum range consistency, 2.Consistency: Numeric range consistency, 3.Consistency: Field data correlation
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $TargetObjectType Rule applicable target data object types (1: Constant, 2: Offline table level, 3: Offline field level)
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $TargetObjectDataType Rule applicable target data object types (1: Numeric, 2: String)
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TargetObjectDataTypeName Target field detailed types, INT, STRING
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TargetObjectValue Target field name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $SourceEngineTypes Source engine type
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TableName Table name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TableOwnerName Table manager name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param RuleGroupExecStrategy $ExecStrategy Execution strategy information
Note: This field may return null, indicating that no valid value can be obtained.
     * @param RuleGroupSubscribe $Subscription Subscription information
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CreateTime Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $DatasourceId Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DatabaseId Database ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $MonitorStatus Monitoring enabled. 0 false, 1 true
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TriggerCondition Trigger conditionNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $DsEnvType 0, or not returned, or null: Undefined, 1: Production, 2: Development
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleGroupId",$param) and $param["RuleGroupId"] !== null) {
            $this->RuleGroupId = $param["RuleGroupId"];
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("RuleTemplateId",$param) and $param["RuleTemplateId"] !== null) {
            $this->RuleTemplateId = $param["RuleTemplateId"];
        }

        if (array_key_exists("RuleTemplateContent",$param) and $param["RuleTemplateContent"] !== null) {
            $this->RuleTemplateContent = $param["RuleTemplateContent"];
        }

        if (array_key_exists("QualityDim",$param) and $param["QualityDim"] !== null) {
            $this->QualityDim = $param["QualityDim"];
        }

        if (array_key_exists("SourceObjectType",$param) and $param["SourceObjectType"] !== null) {
            $this->SourceObjectType = $param["SourceObjectType"];
        }

        if (array_key_exists("SourceObjectDataType",$param) and $param["SourceObjectDataType"] !== null) {
            $this->SourceObjectDataType = $param["SourceObjectDataType"];
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

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("TargetDatabaseId",$param) and $param["TargetDatabaseId"] !== null) {
            $this->TargetDatabaseId = $param["TargetDatabaseId"];
        }

        if (array_key_exists("TargetDatabaseName",$param) and $param["TargetDatabaseName"] !== null) {
            $this->TargetDatabaseName = $param["TargetDatabaseName"];
        }

        if (array_key_exists("TargetTableId",$param) and $param["TargetTableId"] !== null) {
            $this->TargetTableId = $param["TargetTableId"];
        }

        if (array_key_exists("TargetTableName",$param) and $param["TargetTableName"] !== null) {
            $this->TargetTableName = $param["TargetTableName"];
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

        if (array_key_exists("MultiSourceFlag",$param) and $param["MultiSourceFlag"] !== null) {
            $this->MultiSourceFlag = $param["MultiSourceFlag"];
        }

        if (array_key_exists("WhereFlag",$param) and $param["WhereFlag"] !== null) {
            $this->WhereFlag = $param["WhereFlag"];
        }

        if (array_key_exists("TemplateSql",$param) and $param["TemplateSql"] !== null) {
            $this->TemplateSql = $param["TemplateSql"];
        }

        if (array_key_exists("SubQualityDim",$param) and $param["SubQualityDim"] !== null) {
            $this->SubQualityDim = $param["SubQualityDim"];
        }

        if (array_key_exists("TargetObjectType",$param) and $param["TargetObjectType"] !== null) {
            $this->TargetObjectType = $param["TargetObjectType"];
        }

        if (array_key_exists("TargetObjectDataType",$param) and $param["TargetObjectDataType"] !== null) {
            $this->TargetObjectDataType = $param["TargetObjectDataType"];
        }

        if (array_key_exists("TargetObjectDataTypeName",$param) and $param["TargetObjectDataTypeName"] !== null) {
            $this->TargetObjectDataTypeName = $param["TargetObjectDataTypeName"];
        }

        if (array_key_exists("TargetObjectValue",$param) and $param["TargetObjectValue"] !== null) {
            $this->TargetObjectValue = $param["TargetObjectValue"];
        }

        if (array_key_exists("SourceEngineTypes",$param) and $param["SourceEngineTypes"] !== null) {
            $this->SourceEngineTypes = $param["SourceEngineTypes"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("TableOwnerName",$param) and $param["TableOwnerName"] !== null) {
            $this->TableOwnerName = $param["TableOwnerName"];
        }

        if (array_key_exists("ExecStrategy",$param) and $param["ExecStrategy"] !== null) {
            $this->ExecStrategy = new RuleGroupExecStrategy();
            $this->ExecStrategy->deserialize($param["ExecStrategy"]);
        }

        if (array_key_exists("Subscription",$param) and $param["Subscription"] !== null) {
            $this->Subscription = new RuleGroupSubscribe();
            $this->Subscription->deserialize($param["Subscription"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("DatabaseId",$param) and $param["DatabaseId"] !== null) {
            $this->DatabaseId = $param["DatabaseId"];
        }

        if (array_key_exists("MonitorStatus",$param) and $param["MonitorStatus"] !== null) {
            $this->MonitorStatus = $param["MonitorStatus"];
        }

        if (array_key_exists("TriggerCondition",$param) and $param["TriggerCondition"] !== null) {
            $this->TriggerCondition = $param["TriggerCondition"];
        }

        if (array_key_exists("DsEnvType",$param) and $param["DsEnvType"] !== null) {
            $this->DsEnvType = $param["DsEnvType"];
        }
    }
}
