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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Table information parsed from IDL table description file
 *
 * @method string getTableIdlType() Obtain Table description language type. Valid values: PROTO, TDR
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTableIdlType(string $TableIdlType) Set Table description language type. Valid values: PROTO, TDR
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getTableInstanceId() Obtain Table instance ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTableInstanceId(string $TableInstanceId) Set Table instance ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getTableName() Obtain Table name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTableName(string $TableName) Set Table name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getTableType() Obtain Table data structure type. Valid values: GENERIC, LIST
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTableType(string $TableType) Set Table data structure type. Valid values: GENERIC, LIST
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getKeyFields() Obtain Primary key field information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setKeyFields(string $KeyFields) Set Primary key field information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getOldKeyFields() Obtain Old primary key field information, which is valid during verification of table modification
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOldKeyFields(string $OldKeyFields) Set Old primary key field information, which is valid during verification of table modification
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getValueFields() Obtain Non-primary key field information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setValueFields(string $ValueFields) Set Non-primary key field information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getOldValueFields() Obtain Old non-primary key field information, which is valid during verification of table modification
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOldValueFields(string $OldValueFields) Set Old non-primary key field information, which is valid during verification of table modification
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getTableGroupId() Obtain Table group ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTableGroupId(string $TableGroupId) Set Table group ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getSumKeyFieldSize() Obtain Total size of primary key field
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSumKeyFieldSize(integer $SumKeyFieldSize) Set Total size of primary key field
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getSumValueFieldSize() Obtain Total size of non-primary key fields
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSumValueFieldSize(integer $SumValueFieldSize) Set Total size of non-primary key fields
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getIndexKeySet() Obtain Index key set
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIndexKeySet(string $IndexKeySet) Set Index key set
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getShardingKeySet() Obtain Shardkey set
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setShardingKeySet(string $ShardingKeySet) Set Shardkey set
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getTdrVersion() Obtain TDR version number
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTdrVersion(integer $TdrVersion) Set TDR version number
Note: this field may return null, indicating that no valid values can be obtained.
 * @method ErrorInfo getError() Obtain Error message
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setError(ErrorInfo $Error) Set Error message
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getListElementNum() Obtain Number of LIST-type table elements
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setListElementNum(integer $ListElementNum) Set Number of LIST-type table elements
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getSortFieldNum() Obtain Number of SORTLIST-type table sort fields
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSortFieldNum(integer $SortFieldNum) Set Number of SORTLIST-type table sort fields
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getSortRule() Obtain Sort order of SORTLIST-type tables
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSortRule(integer $SortRule) Set Sort order of SORTLIST-type tables
Note: this field may return null, indicating that no valid values can be obtained.
 */
class ParsedTableInfoNew extends AbstractModel
{
    /**
     * @var string Table description language type. Valid values: PROTO, TDR
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TableIdlType;

    /**
     * @var string Table instance ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TableInstanceId;

    /**
     * @var string Table name
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TableName;

    /**
     * @var string Table data structure type. Valid values: GENERIC, LIST
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TableType;

    /**
     * @var string Primary key field information
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $KeyFields;

    /**
     * @var string Old primary key field information, which is valid during verification of table modification
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OldKeyFields;

    /**
     * @var string Non-primary key field information
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ValueFields;

    /**
     * @var string Old non-primary key field information, which is valid during verification of table modification
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OldValueFields;

    /**
     * @var string Table group ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TableGroupId;

    /**
     * @var integer Total size of primary key field
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SumKeyFieldSize;

    /**
     * @var integer Total size of non-primary key fields
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SumValueFieldSize;

    /**
     * @var string Index key set
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IndexKeySet;

    /**
     * @var string Shardkey set
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ShardingKeySet;

    /**
     * @var integer TDR version number
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TdrVersion;

    /**
     * @var ErrorInfo Error message
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Error;

    /**
     * @var integer Number of LIST-type table elements
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ListElementNum;

    /**
     * @var integer Number of SORTLIST-type table sort fields
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SortFieldNum;

    /**
     * @var integer Sort order of SORTLIST-type tables
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SortRule;

    /**
     * @param string $TableIdlType Table description language type. Valid values: PROTO, TDR
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $TableInstanceId Table instance ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $TableName Table name
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $TableType Table data structure type. Valid values: GENERIC, LIST
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $KeyFields Primary key field information
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $OldKeyFields Old primary key field information, which is valid during verification of table modification
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ValueFields Non-primary key field information
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $OldValueFields Old non-primary key field information, which is valid during verification of table modification
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $TableGroupId Table group ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $SumKeyFieldSize Total size of primary key field
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $SumValueFieldSize Total size of non-primary key fields
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $IndexKeySet Index key set
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ShardingKeySet Shardkey set
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $TdrVersion TDR version number
Note: this field may return null, indicating that no valid values can be obtained.
     * @param ErrorInfo $Error Error message
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $ListElementNum Number of LIST-type table elements
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $SortFieldNum Number of SORTLIST-type table sort fields
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $SortRule Sort order of SORTLIST-type tables
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("TableIdlType",$param) and $param["TableIdlType"] !== null) {
            $this->TableIdlType = $param["TableIdlType"];
        }

        if (array_key_exists("TableInstanceId",$param) and $param["TableInstanceId"] !== null) {
            $this->TableInstanceId = $param["TableInstanceId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("TableType",$param) and $param["TableType"] !== null) {
            $this->TableType = $param["TableType"];
        }

        if (array_key_exists("KeyFields",$param) and $param["KeyFields"] !== null) {
            $this->KeyFields = $param["KeyFields"];
        }

        if (array_key_exists("OldKeyFields",$param) and $param["OldKeyFields"] !== null) {
            $this->OldKeyFields = $param["OldKeyFields"];
        }

        if (array_key_exists("ValueFields",$param) and $param["ValueFields"] !== null) {
            $this->ValueFields = $param["ValueFields"];
        }

        if (array_key_exists("OldValueFields",$param) and $param["OldValueFields"] !== null) {
            $this->OldValueFields = $param["OldValueFields"];
        }

        if (array_key_exists("TableGroupId",$param) and $param["TableGroupId"] !== null) {
            $this->TableGroupId = $param["TableGroupId"];
        }

        if (array_key_exists("SumKeyFieldSize",$param) and $param["SumKeyFieldSize"] !== null) {
            $this->SumKeyFieldSize = $param["SumKeyFieldSize"];
        }

        if (array_key_exists("SumValueFieldSize",$param) and $param["SumValueFieldSize"] !== null) {
            $this->SumValueFieldSize = $param["SumValueFieldSize"];
        }

        if (array_key_exists("IndexKeySet",$param) and $param["IndexKeySet"] !== null) {
            $this->IndexKeySet = $param["IndexKeySet"];
        }

        if (array_key_exists("ShardingKeySet",$param) and $param["ShardingKeySet"] !== null) {
            $this->ShardingKeySet = $param["ShardingKeySet"];
        }

        if (array_key_exists("TdrVersion",$param) and $param["TdrVersion"] !== null) {
            $this->TdrVersion = $param["TdrVersion"];
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = new ErrorInfo();
            $this->Error->deserialize($param["Error"]);
        }

        if (array_key_exists("ListElementNum",$param) and $param["ListElementNum"] !== null) {
            $this->ListElementNum = $param["ListElementNum"];
        }

        if (array_key_exists("SortFieldNum",$param) and $param["SortFieldNum"] !== null) {
            $this->SortFieldNum = $param["SortFieldNum"];
        }

        if (array_key_exists("SortRule",$param) and $param["SortRule"] !== null) {
            $this->SortRule = $param["SortRule"];
        }
    }
}
