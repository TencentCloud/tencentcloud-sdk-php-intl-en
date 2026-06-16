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
 * Column data abstraction of a table
 *
 * @method string getDbName() Obtain Column name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDbName(string $DbName) Set Column name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAliasName() Obtain alias name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAliasName(string $AliasName) Set alias name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDbType() Obtain Column type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDbType(string $DbType) Set Column type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFieldType() Obtain Segment type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFieldType(string $FieldType) Set Segment type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMark() Obtain Remarks.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMark(string $Mark) Set Remarks.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExcelName() Obtain excel name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExcelName(string $ExcelName) Set excel name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDictId() Obtain Associated dictionary table Id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDictId(integer $DictId) Set Associated dictionary table Id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDictName() Obtain Associated dictionary table name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDictName(string $DictName) Set Associated dictionary table name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTableNodeId() Obtain Join tables and add fields
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTableNodeId(string $TableNodeId) Set Join tables and add fields
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTableName() Obtain Table name to which the field belongs
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTableName(string $TableName) Set Table name to which the field belongs
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFieldComplexType() Obtain Complex format of the target set by the user
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFieldComplexType(string $FieldComplexType) Set Complex format of the target set by the user
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFormatRule() Obtain format rule
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFormatRule(string $FormatRule) Set format rule
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
 * @method string getCalcDesc() Obtain Chinese formula content of the calculated field
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCalcDesc(string $CalcDesc) Set Chinese formula content of the calculated field
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getJsonPathName() Obtain Api data source json path name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setJsonPathName(string $JsonPathName) Set Api data source json path name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getGranularity() Obtain Geographic type identifier
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGranularity(string $Granularity) Set Geographic type identifier
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getGeoJsonId() Obtain Custom map Id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGeoJsonId(integer $GeoJsonId) Set Custom map Id
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
class TableColumn extends AbstractModel
{
    /**
     * @var string Column name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DbName;

    /**
     * @var string alias name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AliasName;

    /**
     * @var string Column type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DbType;

    /**
     * @var string Segment type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FieldType;

    /**
     * @var string Remarks.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Mark;

    /**
     * @var string excel name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExcelName;

    /**
     * @var integer Associated dictionary table Id
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DictId;

    /**
     * @var string Associated dictionary table name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DictName;

    /**
     * @var string Join tables and add fields
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TableNodeId;

    /**
     * @var string Table name to which the field belongs
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TableName;

    /**
     * @var string Complex format of the target set by the user
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FieldComplexType;

    /**
     * @var string format rule
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
     * @var string Chinese formula content of the calculated field
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CalcDesc;

    /**
     * @var string Api data source json path name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $JsonPathName;

    /**
     * @var string Geographic type identifier
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Granularity;

    /**
     * @var integer Custom map Id
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
     * @param string $DbName Column name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AliasName alias name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DbType Column type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FieldType Segment type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Mark Remarks.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExcelName excel name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DictId Associated dictionary table Id
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DictName Associated dictionary table name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TableNodeId Join tables and add fields
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TableName Table name to which the field belongs
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FieldComplexType Complex format of the target set by the user
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FormatRule format rule
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsFilter Whether to filter empty data fields
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CalcType Compute field type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CalcFormula Formula content of the calculated field
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CalcDesc Chinese formula content of the calculated field
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $JsonPathName Api data source json path name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Granularity Geographic type identifier
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $GeoJsonId Custom map Id
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

        if (array_key_exists("Mark",$param) and $param["Mark"] !== null) {
            $this->Mark = $param["Mark"];
        }

        if (array_key_exists("ExcelName",$param) and $param["ExcelName"] !== null) {
            $this->ExcelName = $param["ExcelName"];
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

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("FieldComplexType",$param) and $param["FieldComplexType"] !== null) {
            $this->FieldComplexType = $param["FieldComplexType"];
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
