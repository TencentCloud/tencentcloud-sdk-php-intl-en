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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Rule template.
 *
 * @method integer getRuleTemplateId() Obtain Rule template ID.
 * @method void setRuleTemplateId(integer $RuleTemplateId) Set Rule template ID.
 * @method string getName() Obtain Rule template name.
 * @method void setName(string $Name) Set Rule template name.
 * @method string getDescription() Obtain Rule template description.
 * @method void setDescription(string $Description) Set Rule template description.
 * @method integer getType() Obtain Template type (1: system template, 2: custom).
 * @method void setType(integer $Type) Set Template type (1: system template, 2: custom).
 * @method integer getSourceObjectType() Obtain Applicable source data object type for rule (1: constant, 2: offline table level, 3: offline field level).
 * @method void setSourceObjectType(integer $SourceObjectType) Set Applicable source data object type for rule (1: constant, 2: offline table level, 3: offline field level).
 * @method integer getSourceObjectDataType() Obtain Applicable source data object type for rule (1: numeric value, 2: string).
 * @method void setSourceObjectDataType(integer $SourceObjectDataType) Set Applicable source data object type for rule (1: numeric value, 2: string).
 * @method string getSourceContent() Obtain Rule template source side content, case-sensitive, JSON structure.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSourceContent(string $SourceContent) Set Rule template source side content, case-sensitive, JSON structure.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getSourceEngineTypes() Obtain Applicable source data type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSourceEngineTypes(array $SourceEngineTypes) Set Applicable source data type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getQualityDim() Obtain Quality dimension of rule (1: accuracy, 2: uniqueness, 3: integrity, 4: consistency, 5: timeliness, 6: validity).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQualityDim(integer $QualityDim) Set Quality dimension of rule (1: accuracy, 2: uniqueness, 3: integrity, 4: consistency, 5: timeliness, 6: validity).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCompareType() Obtain Supported comparison types for rule (1: fixed value comparison, more than, less than, equal to or greater than; 2: fluctuation value comparison, absolute value, rise, drop).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCompareType(integer $CompareType) Set Supported comparison types for rule (1: fixed value comparison, more than, less than, equal to or greater than; 2: fluctuation value comparison, absolute value, rise, drop).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCitationCount() Obtain Referenced times.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCitationCount(integer $CitationCount) Set Referenced times.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getUserId() Obtain Creator ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserId(integer $UserId) Set Creator ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserName() Obtain Creator nickname.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserName(string $UserName) Set Creator nickname.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Last update time yyyy-MM-dd HH:MM:ss.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Last update time yyyy-MM-dd HH:MM:ss.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getWhereFlag() Obtain Whether to add where parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWhereFlag(boolean $WhereFlag) Set Whether to add where parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getMultiSourceFlag() Obtain Whether multiple database tables are associated.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMultiSourceFlag(boolean $MultiSourceFlag) Set Whether multiple database tables are associated.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSqlExpression() Obtain Custom template SQL expression.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSqlExpression(string $SqlExpression) Set Custom template SQL expression.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSubQualityDim() Obtain Template sub-dimension, 0. parent dimension type, 1. consistency: enumeration range consistency, 2. consistency: numeric range consistency, 3. consistency: field data correlation.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubQualityDim(integer $SubQualityDim) Set Template sub-dimension, 0. parent dimension type, 1. consistency: enumeration range consistency, 2. consistency: numeric range consistency, 3. consistency: field data correlation.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method QualitySqlExpression getResolvedSqlExpression() Obtain sql expression parsing object.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResolvedSqlExpression(QualitySqlExpression $ResolvedSqlExpression) Set sql expression parsing object.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getDatasourceTypes() Obtain Supported data source types.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDatasourceTypes(array $DatasourceTypes) Set Supported data source types.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserIdStr() Obtain Created by user id str.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserIdStr(string $UserIdStr) Set Created by user id str.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class QualityRuleTemplate extends AbstractModel
{
    /**
     * @var integer Rule template ID.
     */
    public $RuleTemplateId;

    /**
     * @var string Rule template name.
     */
    public $Name;

    /**
     * @var string Rule template description.
     */
    public $Description;

    /**
     * @var integer Template type (1: system template, 2: custom).
     */
    public $Type;

    /**
     * @var integer Applicable source data object type for rule (1: constant, 2: offline table level, 3: offline field level).
     */
    public $SourceObjectType;

    /**
     * @var integer Applicable source data object type for rule (1: numeric value, 2: string).
     */
    public $SourceObjectDataType;

    /**
     * @var string Rule template source side content, case-sensitive, JSON structure.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SourceContent;

    /**
     * @var array Applicable source data type.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SourceEngineTypes;

    /**
     * @var integer Quality dimension of rule (1: accuracy, 2: uniqueness, 3: integrity, 4: consistency, 5: timeliness, 6: validity).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $QualityDim;

    /**
     * @var integer Supported comparison types for rule (1: fixed value comparison, more than, less than, equal to or greater than; 2: fluctuation value comparison, absolute value, rise, drop).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CompareType;

    /**
     * @var integer Referenced times.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CitationCount;

    /**
     * @var integer Creator ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserId;

    /**
     * @var string Creator nickname.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserName;

    /**
     * @var string Last update time yyyy-MM-dd HH:MM:ss.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var boolean Whether to add where parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WhereFlag;

    /**
     * @var boolean Whether multiple database tables are associated.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MultiSourceFlag;

    /**
     * @var string Custom template SQL expression.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SqlExpression;

    /**
     * @var integer Template sub-dimension, 0. parent dimension type, 1. consistency: enumeration range consistency, 2. consistency: numeric range consistency, 3. consistency: field data correlation.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubQualityDim;

    /**
     * @var QualitySqlExpression sql expression parsing object.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResolvedSqlExpression;

    /**
     * @var array Supported data source types.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DatasourceTypes;

    /**
     * @var string Created by user id str.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserIdStr;

    /**
     * @param integer $RuleTemplateId Rule template ID.
     * @param string $Name Rule template name.
     * @param string $Description Rule template description.
     * @param integer $Type Template type (1: system template, 2: custom).
     * @param integer $SourceObjectType Applicable source data object type for rule (1: constant, 2: offline table level, 3: offline field level).
     * @param integer $SourceObjectDataType Applicable source data object type for rule (1: numeric value, 2: string).
     * @param string $SourceContent Rule template source side content, case-sensitive, JSON structure.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $SourceEngineTypes Applicable source data type.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $QualityDim Quality dimension of rule (1: accuracy, 2: uniqueness, 3: integrity, 4: consistency, 5: timeliness, 6: validity).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CompareType Supported comparison types for rule (1: fixed value comparison, more than, less than, equal to or greater than; 2: fluctuation value comparison, absolute value, rise, drop).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CitationCount Referenced times.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $UserId Creator ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserName Creator nickname.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime Last update time yyyy-MM-dd HH:MM:ss.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $WhereFlag Whether to add where parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $MultiSourceFlag Whether multiple database tables are associated.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SqlExpression Custom template SQL expression.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SubQualityDim Template sub-dimension, 0. parent dimension type, 1. consistency: enumeration range consistency, 2. consistency: numeric range consistency, 3. consistency: field data correlation.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param QualitySqlExpression $ResolvedSqlExpression sql expression parsing object.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $DatasourceTypes Supported data source types.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserIdStr Created by user id str.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("RuleTemplateId",$param) and $param["RuleTemplateId"] !== null) {
            $this->RuleTemplateId = $param["RuleTemplateId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SourceObjectType",$param) and $param["SourceObjectType"] !== null) {
            $this->SourceObjectType = $param["SourceObjectType"];
        }

        if (array_key_exists("SourceObjectDataType",$param) and $param["SourceObjectDataType"] !== null) {
            $this->SourceObjectDataType = $param["SourceObjectDataType"];
        }

        if (array_key_exists("SourceContent",$param) and $param["SourceContent"] !== null) {
            $this->SourceContent = $param["SourceContent"];
        }

        if (array_key_exists("SourceEngineTypes",$param) and $param["SourceEngineTypes"] !== null) {
            $this->SourceEngineTypes = $param["SourceEngineTypes"];
        }

        if (array_key_exists("QualityDim",$param) and $param["QualityDim"] !== null) {
            $this->QualityDim = $param["QualityDim"];
        }

        if (array_key_exists("CompareType",$param) and $param["CompareType"] !== null) {
            $this->CompareType = $param["CompareType"];
        }

        if (array_key_exists("CitationCount",$param) and $param["CitationCount"] !== null) {
            $this->CitationCount = $param["CitationCount"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("WhereFlag",$param) and $param["WhereFlag"] !== null) {
            $this->WhereFlag = $param["WhereFlag"];
        }

        if (array_key_exists("MultiSourceFlag",$param) and $param["MultiSourceFlag"] !== null) {
            $this->MultiSourceFlag = $param["MultiSourceFlag"];
        }

        if (array_key_exists("SqlExpression",$param) and $param["SqlExpression"] !== null) {
            $this->SqlExpression = $param["SqlExpression"];
        }

        if (array_key_exists("SubQualityDim",$param) and $param["SubQualityDim"] !== null) {
            $this->SubQualityDim = $param["SubQualityDim"];
        }

        if (array_key_exists("ResolvedSqlExpression",$param) and $param["ResolvedSqlExpression"] !== null) {
            $this->ResolvedSqlExpression = new QualitySqlExpression();
            $this->ResolvedSqlExpression->deserialize($param["ResolvedSqlExpression"]);
        }

        if (array_key_exists("DatasourceTypes",$param) and $param["DatasourceTypes"] !== null) {
            $this->DatasourceTypes = $param["DatasourceTypes"];
        }

        if (array_key_exists("UserIdStr",$param) and $param["UserIdStr"] !== null) {
            $this->UserIdStr = $param["UserIdStr"];
        }
    }
}
