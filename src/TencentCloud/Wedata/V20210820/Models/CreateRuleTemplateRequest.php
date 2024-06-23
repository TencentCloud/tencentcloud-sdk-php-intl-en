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
 * CreateRuleTemplate request structure.
 *
 * @method integer getType() Obtain Template Type 1. System Template 2. Custom Definition Template
 * @method void setType(integer $Type) Set Template Type 1. System Template 2. Custom Definition Template
 * @method string getName() Obtain Template Name
 * @method void setName(string $Name) Set Template Name
 * @method integer getQualityDim() Obtain Quality Inspection Dimension 1. Accuracy 2. Uniqueness 3. Integrity 4. Consistency 5. Timeliness 6. Validity
 * @method void setQualityDim(integer $QualityDim) Set Quality Inspection Dimension 1. Accuracy 2. Uniqueness 3. Integrity 4. Consistency 5. Timeliness 6. Validity
 * @method integer getSourceObjectType() Obtain Source Data Object Type 1. Constant 2. Offline Table Level 2. Offline Field Level
 * @method void setSourceObjectType(integer $SourceObjectType) Set Source Data Object Type 1. Constant 2. Offline Table Level 2. Offline Field Level
 * @method string getDescription() Obtain Template Description
 * @method void setDescription(string $Description) Set Template Description
 * @method array getSourceEngineTypes() Obtain Corresponding Engine Type of the Source
 * @method void setSourceEngineTypes(array $SourceEngineTypes) Set Corresponding Engine Type of the Source
 * @method boolean getMultiSourceFlag() Obtain Whether to Associate with Other Databases and Tables
 * @method void setMultiSourceFlag(boolean $MultiSourceFlag) Set Whether to Associate with Other Databases and Tables
 * @method string getSqlExpression() Obtain SQL Expression
 * @method void setSqlExpression(string $SqlExpression) Set SQL Expression
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method boolean getWhereFlag() Obtain Whether to add where parameter
 * @method void setWhereFlag(boolean $WhereFlag) Set Whether to add where parameter
 */
class CreateRuleTemplateRequest extends AbstractModel
{
    /**
     * @var integer Template Type 1. System Template 2. Custom Definition Template
     */
    public $Type;

    /**
     * @var string Template Name
     */
    public $Name;

    /**
     * @var integer Quality Inspection Dimension 1. Accuracy 2. Uniqueness 3. Integrity 4. Consistency 5. Timeliness 6. Validity
     */
    public $QualityDim;

    /**
     * @var integer Source Data Object Type 1. Constant 2. Offline Table Level 2. Offline Field Level
     */
    public $SourceObjectType;

    /**
     * @var string Template Description
     */
    public $Description;

    /**
     * @var array Corresponding Engine Type of the Source
     */
    public $SourceEngineTypes;

    /**
     * @var boolean Whether to Associate with Other Databases and Tables
     */
    public $MultiSourceFlag;

    /**
     * @var string SQL Expression
     */
    public $SqlExpression;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var boolean Whether to add where parameter
     */
    public $WhereFlag;

    /**
     * @param integer $Type Template Type 1. System Template 2. Custom Definition Template
     * @param string $Name Template Name
     * @param integer $QualityDim Quality Inspection Dimension 1. Accuracy 2. Uniqueness 3. Integrity 4. Consistency 5. Timeliness 6. Validity
     * @param integer $SourceObjectType Source Data Object Type 1. Constant 2. Offline Table Level 2. Offline Field Level
     * @param string $Description Template Description
     * @param array $SourceEngineTypes Corresponding Engine Type of the Source
     * @param boolean $MultiSourceFlag Whether to Associate with Other Databases and Tables
     * @param string $SqlExpression SQL Expression
     * @param string $ProjectId Project ID
     * @param boolean $WhereFlag Whether to add where parameter
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("QualityDim",$param) and $param["QualityDim"] !== null) {
            $this->QualityDim = $param["QualityDim"];
        }

        if (array_key_exists("SourceObjectType",$param) and $param["SourceObjectType"] !== null) {
            $this->SourceObjectType = $param["SourceObjectType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("SourceEngineTypes",$param) and $param["SourceEngineTypes"] !== null) {
            $this->SourceEngineTypes = $param["SourceEngineTypes"];
        }

        if (array_key_exists("MultiSourceFlag",$param) and $param["MultiSourceFlag"] !== null) {
            $this->MultiSourceFlag = $param["MultiSourceFlag"];
        }

        if (array_key_exists("SqlExpression",$param) and $param["SqlExpression"] !== null) {
            $this->SqlExpression = $param["SqlExpression"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("WhereFlag",$param) and $param["WhereFlag"] !== null) {
            $this->WhereFlag = $param["WhereFlag"];
        }
    }
}
