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
 * Rule Template
 *
 * @method integer getRuleTemplateId() Obtain Rule Template ID
 * @method void setRuleTemplateId(integer $RuleTemplateId) Set Rule Template ID
 * @method string getName() Obtain Rule Template Name
 * @method void setName(string $Name) Set Rule Template Name
 * @method string getDescription() Obtain Rule Template Description
 * @method void setDescription(string $Description) Set Rule Template Description
 * @method integer getType() Obtain Template Type (1: System Template, 2: Self Definition)
 * @method void setType(integer $Type) Set Template Type (1: System Template, 2: Self Definition)
 * @method integer getSourceObjectType() Obtain Applicable Source Data Object Type (1: Constant, 2: Offline Table Level, 3: Offline Field Level)
 * @method void setSourceObjectType(integer $SourceObjectType) Set Applicable Source Data Object Type (1: Constant, 2: Offline Table Level, 3: Offline Field Level)
 * @method integer getSourceObjectDataType() Obtain Applicable Source Data Object Type (1: Numeric, 2: String)
 * @method void setSourceObjectDataType(integer $SourceObjectDataType) Set Applicable Source Data Object Type (1: Numeric, 2: String)
 * @method string getSourceContent() Obtain Rule Template Source Side Content, distinguish engine, JSON Structure
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSourceContent(string $SourceContent) Set Rule Template Source Side Content, distinguish engine, JSON Structure
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getSourceEngineTypes() Obtain Applicable Source Data Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSourceEngineTypes(array $SourceEngineTypes) Set Applicable Source Data Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getQualityDim() Obtain Quality Dimension of Rule (1: Accuracy, 2: Uniqueness, 3: Completeness, 4: Consistency, 5: Timeliness, 6: Validity)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setQualityDim(integer $QualityDim) Set Quality Dimension of Rule (1: Accuracy, 2: Uniqueness, 3: Completeness, 4: Consistency, 5: Timeliness, 6: Validity)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getCompareType() Obtain Supported Comparison Types for Rule (1: Fixed Value Comparison, greater than, less than, greater than or equal, etc. 2: Fluctuation Value Comparison, absolute value, increase, decrease)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCompareType(integer $CompareType) Set Supported Comparison Types for Rule (1: Fixed Value Comparison, greater than, less than, greater than or equal, etc. 2: Fluctuation Value Comparison, absolute value, increase, decrease)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getCitationCount() Obtain Number of References
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCitationCount(integer $CitationCount) Set Number of References
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getUserId() Obtain Creator ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUserId(integer $UserId) Set Creator ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getUserName() Obtain Creator Nickname
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUserName(string $UserName) Set Creator Nickname
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getUpdateTime() Obtain Update Time yyyy-MM-dd HH:mm:ss
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Update Time yyyy-MM-dd HH:mm:ss
Note: This field may return null, indicating that no valid value can be obtained.
 * @method boolean getWhereFlag() Obtain Whether to add where parameter
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setWhereFlag(boolean $WhereFlag) Set Whether to add where parameter
Note: This field may return null, indicating that no valid value can be obtained.
 * @method boolean getMultiSourceFlag() Obtain Whether to Associate Multiple Tables
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMultiSourceFlag(boolean $MultiSourceFlag) Set Whether to Associate Multiple Tables
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getSqlExpression() Obtain Custom Template SQL Expression from Definition
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSqlExpression(string $SqlExpression) Set Custom Template SQL Expression from Definition
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getSubQualityDim() Obtain Template Sub-dimension,0. Parent Dimension Type,1. Consistency: Enumeration Range Consistency,2. Consistency: Numeric Range Consistency,3. Consistency: Field Data Correlation
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSubQualityDim(integer $SubQualityDim) Set Template Sub-dimension,0. Parent Dimension Type,1. Consistency: Enumeration Range Consistency,2. Consistency: Numeric Range Consistency,3. Consistency: Field Data Correlation
Note: This field may return null, indicating that no valid value can be obtained.
 * @method SqlExpression getResolvedSqlExpression() Obtain SQL Expression Parsing Object
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setResolvedSqlExpression(SqlExpression $ResolvedSqlExpression) Set SQL Expression Parsing Object
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getDatasourceTypes() Obtain Supported Data Source Types
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatasourceTypes(array $DatasourceTypes) Set Supported Data Source Types
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getUserIdStr() Obtain Created by User ID Str
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUserIdStr(string $UserIdStr) Set Created by User ID Str
Note: This field may return null, indicating that no valid value can be obtained.
 */
class RuleTemplate extends AbstractModel
{
    /**
     * @var integer Rule Template ID
     */
    public $RuleTemplateId;

    /**
     * @var string Rule Template Name
     */
    public $Name;

    /**
     * @var string Rule Template Description
     */
    public $Description;

    /**
     * @var integer Template Type (1: System Template, 2: Self Definition)
     */
    public $Type;

    /**
     * @var integer Applicable Source Data Object Type (1: Constant, 2: Offline Table Level, 3: Offline Field Level)
     */
    public $SourceObjectType;

    /**
     * @var integer Applicable Source Data Object Type (1: Numeric, 2: String)
     */
    public $SourceObjectDataType;

    /**
     * @var string Rule Template Source Side Content, distinguish engine, JSON Structure
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SourceContent;

    /**
     * @var array Applicable Source Data Type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SourceEngineTypes;

    /**
     * @var integer Quality Dimension of Rule (1: Accuracy, 2: Uniqueness, 3: Completeness, 4: Consistency, 5: Timeliness, 6: Validity)
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $QualityDim;

    /**
     * @var integer Supported Comparison Types for Rule (1: Fixed Value Comparison, greater than, less than, greater than or equal, etc. 2: Fluctuation Value Comparison, absolute value, increase, decrease)
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CompareType;

    /**
     * @var integer Number of References
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CitationCount;

    /**
     * @var integer Creator ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $UserId;

    /**
     * @var string Creator Nickname
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $UserName;

    /**
     * @var string Update Time yyyy-MM-dd HH:mm:ss
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $UpdateTime;

    /**
     * @var boolean Whether to add where parameter
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $WhereFlag;

    /**
     * @var boolean Whether to Associate Multiple Tables
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $MultiSourceFlag;

    /**
     * @var string Custom Template SQL Expression from Definition
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SqlExpression;

    /**
     * @var integer Template Sub-dimension,0. Parent Dimension Type,1. Consistency: Enumeration Range Consistency,2. Consistency: Numeric Range Consistency,3. Consistency: Field Data Correlation
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SubQualityDim;

    /**
     * @var SqlExpression SQL Expression Parsing Object
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ResolvedSqlExpression;

    /**
     * @var array Supported Data Source Types
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatasourceTypes;

    /**
     * @var string Created by User ID Str
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $UserIdStr;

    /**
     * @param integer $RuleTemplateId Rule Template ID
     * @param string $Name Rule Template Name
     * @param string $Description Rule Template Description
     * @param integer $Type Template Type (1: System Template, 2: Self Definition)
     * @param integer $SourceObjectType Applicable Source Data Object Type (1: Constant, 2: Offline Table Level, 3: Offline Field Level)
     * @param integer $SourceObjectDataType Applicable Source Data Object Type (1: Numeric, 2: String)
     * @param string $SourceContent Rule Template Source Side Content, distinguish engine, JSON Structure
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $SourceEngineTypes Applicable Source Data Type
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $QualityDim Quality Dimension of Rule (1: Accuracy, 2: Uniqueness, 3: Completeness, 4: Consistency, 5: Timeliness, 6: Validity)
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $CompareType Supported Comparison Types for Rule (1: Fixed Value Comparison, greater than, less than, greater than or equal, etc. 2: Fluctuation Value Comparison, absolute value, increase, decrease)
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $CitationCount Number of References
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $UserId Creator ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $UserName Creator Nickname
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $UpdateTime Update Time yyyy-MM-dd HH:mm:ss
Note: This field may return null, indicating that no valid value can be obtained.
     * @param boolean $WhereFlag Whether to add where parameter
Note: This field may return null, indicating that no valid value can be obtained.
     * @param boolean $MultiSourceFlag Whether to Associate Multiple Tables
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $SqlExpression Custom Template SQL Expression from Definition
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $SubQualityDim Template Sub-dimension,0. Parent Dimension Type,1. Consistency: Enumeration Range Consistency,2. Consistency: Numeric Range Consistency,3. Consistency: Field Data Correlation
Note: This field may return null, indicating that no valid value can be obtained.
     * @param SqlExpression $ResolvedSqlExpression SQL Expression Parsing Object
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $DatasourceTypes Supported Data Source Types
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $UserIdStr Created by User ID Str
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
            $this->ResolvedSqlExpression = new SqlExpression();
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
