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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Table field description
 *
 * @method string getDbName() Obtain Field name in the db
 * @method void setDbName(string $DbName) Set Field name in the db
 * @method string getAliasName() Obtain bi display name
 * @method void setAliasName(string $AliasName) Set bi display name
 * @method string getDbType() Obtain Field type in the db
 * @method void setDbType(string $DbType) Set Field type in the db
 * @method string getFieldType() Obtain Abstract field types after BI categorization, such as string, number, time
 * @method void setFieldType(string $FieldType) Set Abstract field types after BI categorization, such as string, number, time
 * @method string getFieldComplexType() Obtain Complex detail type generated after calculation formula of combination of fields
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFieldComplexType(string $FieldComplexType) Set Complex detail type generated after calculation formula of combination of fields
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMark() Obtain Field description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMark(string $Mark) Set Field description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFormatRule() Obtain Field calculation formula
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFormatRule(string $FormatRule) Set Field calculation formula
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsFilter() Obtain Whether to filter empty data fields
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsFilter(boolean $IsFilter) Set Whether to filter empty data fields
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCalcType() Obtain Compute field type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCalcType(string $CalcType) Set Compute field type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCalcFormula() Obtain Formula content of the calculated field
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCalcFormula(string $CalcFormula) Set Formula content of the calculated field
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCalcDesc() Obtain Chinese formula content of the calculated field, displayed on the front-end
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCalcDesc(string $CalcDesc) Set Chinese formula content of the calculated field, displayed on the front-end
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDictId() Obtain Associate dictionary table id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDictId(integer $DictId) Set Associate dictionary table id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDictName() Obtain Associate dictionary table name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDictName(string $DictName) Set Associate dictionary table name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTableNodeId() Obtain Optional, join tables to add field
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTableNodeId(string $TableNodeId) Set Optional, join tables to add field
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExcelName() Obtain excel
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExcelName(string $ExcelName) Set excel
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTableName() Obtain Optional, join tables to add field, name of the table the field belongs to
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTableName(string $TableName) Set Optional, join tables to add field, name of the table the field belongs to
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getJsonPathName() Obtain api data source path name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setJsonPathName(string $JsonPathName) Set api data source path name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getGranularity() Obtain Geographic field identifier
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGranularity(string $Granularity) Set Geographic field identifier
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getGeoJsonId() Obtain Map id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGeoJsonId(integer $GeoJsonId) Set Map id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method EmptyValueConfig getEmptyValueConfig() Obtain Style configuration for null value display
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEmptyValueConfig(EmptyValueConfig $EmptyValueConfig) Set Style configuration for null value display
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDbFieldName() Obtain Original column name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDbFieldName(string $DbFieldName) Set Original column name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsCopyOperation() Obtain Whether to copy field operation
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsCopyOperation(boolean $IsCopyOperation) Set Whether to copy field operation
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsCopyFromNormal() Obtain Whether to copy from common fields
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsCopyFromNormal(boolean $IsCopyFromNormal) Set Whether to copy from common fields
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TableField extends AbstractModel
{
    /**
     * @var string Field name in the db
     */
    public $DbName;

    /**
     * @var string bi display name
     */
    public $AliasName;

    /**
     * @var string Field type in the db
     */
    public $DbType;

    /**
     * @var string Abstract field types after BI categorization, such as string, number, time
     */
    public $FieldType;

    /**
     * @var string Complex detail type generated after calculation formula of combination of fields
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FieldComplexType;

    /**
     * @var string Field description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Mark;

    /**
     * @var string Field calculation formula
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FormatRule;

    /**
     * @var boolean Whether to filter empty data fields
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsFilter;

    /**
     * @var string Compute field type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CalcType;

    /**
     * @var string Formula content of the calculated field
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CalcFormula;

    /**
     * @var string Chinese formula content of the calculated field, displayed on the front-end
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CalcDesc;

    /**
     * @var integer Associate dictionary table id
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DictId;

    /**
     * @var string Associate dictionary table name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DictName;

    /**
     * @var string Optional, join tables to add field
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TableNodeId;

    /**
     * @var string excel
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExcelName;

    /**
     * @var string Optional, join tables to add field, name of the table the field belongs to
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TableName;

    /**
     * @var string api data source path name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $JsonPathName;

    /**
     * @var string Geographic field identifier
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Granularity;

    /**
     * @var integer Map id
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GeoJsonId;

    /**
     * @var EmptyValueConfig Style configuration for null value display
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EmptyValueConfig;

    /**
     * @var string Original column name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DbFieldName;

    /**
     * @var boolean Whether to copy field operation
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsCopyOperation;

    /**
     * @var boolean Whether to copy from common fields
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsCopyFromNormal;

    /**
     * @param string $DbName Field name in the db
     * @param string $AliasName bi display name
     * @param string $DbType Field type in the db
     * @param string $FieldType Abstract field types after BI categorization, such as string, number, time
     * @param string $FieldComplexType Complex detail type generated after calculation formula of combination of fields
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Mark Field description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FormatRule Field calculation formula
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsFilter Whether to filter empty data fields
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CalcType Compute field type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CalcFormula Formula content of the calculated field
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CalcDesc Chinese formula content of the calculated field, displayed on the front-end
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DictId Associate dictionary table id
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DictName Associate dictionary table name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TableNodeId Optional, join tables to add field
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExcelName excel
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TableName Optional, join tables to add field, name of the table the field belongs to
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $JsonPathName api data source path name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Granularity Geographic field identifier
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $GeoJsonId Map id
Note: This field may return null, indicating that no valid values can be obtained.
     * @param EmptyValueConfig $EmptyValueConfig Style configuration for null value display
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DbFieldName Original column name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsCopyOperation Whether to copy field operation
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsCopyFromNormal Whether to copy from common fields
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
        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("AliasName",$param) and $param["AliasName"] !== null) {
            $this->AliasName = $param["AliasName"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("FieldType",$param) and $param["FieldType"] !== null) {
            $this->FieldType = $param["FieldType"];
        }

        if (array_key_exists("FieldComplexType",$param) and $param["FieldComplexType"] !== null) {
            $this->FieldComplexType = $param["FieldComplexType"];
        }

        if (array_key_exists("Mark",$param) and $param["Mark"] !== null) {
            $this->Mark = $param["Mark"];
        }

        if (array_key_exists("FormatRule",$param) and $param["FormatRule"] !== null) {
            $this->FormatRule = $param["FormatRule"];
        }

        if (array_key_exists("IsFilter",$param) and $param["IsFilter"] !== null) {
            $this->IsFilter = $param["IsFilter"];
        }

        if (array_key_exists("CalcType",$param) and $param["CalcType"] !== null) {
            $this->CalcType = $param["CalcType"];
        }

        if (array_key_exists("CalcFormula",$param) and $param["CalcFormula"] !== null) {
            $this->CalcFormula = $param["CalcFormula"];
        }

        if (array_key_exists("CalcDesc",$param) and $param["CalcDesc"] !== null) {
            $this->CalcDesc = $param["CalcDesc"];
        }

        if (array_key_exists("DictId",$param) and $param["DictId"] !== null) {
            $this->DictId = $param["DictId"];
        }

        if (array_key_exists("DictName",$param) and $param["DictName"] !== null) {
            $this->DictName = $param["DictName"];
        }

        if (array_key_exists("TableNodeId",$param) and $param["TableNodeId"] !== null) {
            $this->TableNodeId = $param["TableNodeId"];
        }

        if (array_key_exists("ExcelName",$param) and $param["ExcelName"] !== null) {
            $this->ExcelName = $param["ExcelName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("JsonPathName",$param) and $param["JsonPathName"] !== null) {
            $this->JsonPathName = $param["JsonPathName"];
        }

        if (array_key_exists("Granularity",$param) and $param["Granularity"] !== null) {
            $this->Granularity = $param["Granularity"];
        }

        if (array_key_exists("GeoJsonId",$param) and $param["GeoJsonId"] !== null) {
            $this->GeoJsonId = $param["GeoJsonId"];
        }

        if (array_key_exists("EmptyValueConfig",$param) and $param["EmptyValueConfig"] !== null) {
            $this->EmptyValueConfig = new EmptyValueConfig();
            $this->EmptyValueConfig->deserialize($param["EmptyValueConfig"]);
        }

        if (array_key_exists("DbFieldName",$param) and $param["DbFieldName"] !== null) {
            $this->DbFieldName = $param["DbFieldName"];
        }

        if (array_key_exists("IsCopyOperation",$param) and $param["IsCopyOperation"] !== null) {
            $this->IsCopyOperation = $param["IsCopyOperation"];
        }

        if (array_key_exists("IsCopyFromNormal",$param) and $param["IsCopyFromNormal"] !== null) {
            $this->IsCopyFromNormal = $param["IsCopyFromNormal"];
        }
    }
}
