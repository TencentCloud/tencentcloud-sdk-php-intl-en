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
 * Table Metadata Information
 *
 * @method string getTableId() Obtain Table's Globally Unique ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableId(string $TableId) Set Table's Globally Unique ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDatasourceId() Obtain Data Source Globally Unique ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatasourceId(string $DatasourceId) Set Data Source Globally Unique ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDatasourceName() Obtain Data Source Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatasourceName(string $DatasourceName) Set Data Source Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDatabaseId() Obtain Database ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatabaseId(string $DatabaseId) Set Database ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDatabaseName() Obtain Database nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatabaseName(string $DatabaseName) Set Database nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getTableName() Obtain Table Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableName(string $TableName) Set Table Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getColumnName() Obtain Field NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setColumnName(string $ColumnName) Set Field NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getDataType() Obtain Data Type, such as string/int etc.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDataType(string $DataType) Set Data Type, such as string/int etc.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getColumnType() Obtain Field Type, such as varchar(32)/int(10) etc.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setColumnType(string $ColumnType) Set Field Type, such as varchar(32)/int(10) etc.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getColumnDefault() Obtain Field Default Value
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setColumnDefault(string $ColumnDefault) Set Field Default Value
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getColumnKey() Obtain Index Type, such as PRI/MUL/PARTITION etc., For normal fields, this value is an empty string
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setColumnKey(string $ColumnKey) Set Index Type, such as PRI/MUL/PARTITION etc., For normal fields, this value is an empty string
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getColumnPosition() Obtain Field Order Identifier
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setColumnPosition(integer $ColumnPosition) Set Field Order Identifier
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getColumnComment() Obtain Field Comment
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setColumnComment(string $ColumnComment) Set Field Comment
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getStoreType() Obtain Data TypeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setStoreType(string $StoreType) Set Data TypeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getProjectId() Obtain Project ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setProjectId(string $ProjectId) Set Project ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getProjectName() Obtain Project Name in English
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setProjectName(string $ProjectName) Set Project Name in English
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getProjectDisplayName() Obtain Project Name in Chinese
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setProjectDisplayName(string $ProjectDisplayName) Set Project Name in Chinese
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCreateTime() Obtain Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getUpdateTime() Obtain Update timeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Update timeNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getScale() Obtain Precision
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setScale(integer $Scale) Set Precision
Note: This field may return null, indicating that no valid value can be obtained.
 */
class ColumnBasicInfo extends AbstractModel
{
    /**
     * @var string Table's Globally Unique ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableId;

    /**
     * @var string Data Source Globally Unique ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatasourceId;

    /**
     * @var string Data Source Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatasourceName;

    /**
     * @var string Database ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatabaseId;

    /**
     * @var string Database nameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatabaseName;

    /**
     * @var string Table Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableName;

    /**
     * @var string Field NameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ColumnName;

    /**
     * @var string Data Type, such as string/int etc.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DataType;

    /**
     * @var string Field Type, such as varchar(32)/int(10) etc.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ColumnType;

    /**
     * @var string Field Default Value
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ColumnDefault;

    /**
     * @var string Index Type, such as PRI/MUL/PARTITION etc., For normal fields, this value is an empty string
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ColumnKey;

    /**
     * @var integer Field Order Identifier
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ColumnPosition;

    /**
     * @var string Field Comment
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ColumnComment;

    /**
     * @var string Data TypeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $StoreType;

    /**
     * @var string Project ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProjectId;

    /**
     * @var string Project Name in English
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProjectName;

    /**
     * @var string Project Name in Chinese
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProjectDisplayName;

    /**
     * @var string Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Update timeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $UpdateTime;

    /**
     * @var integer Precision
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Scale;

    /**
     * @param string $TableId Table's Globally Unique ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DatasourceId Data Source Globally Unique ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DatasourceName Data Source Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DatabaseId Database ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DatabaseName Database nameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $TableName Table Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ColumnName Field NameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $DataType Data Type, such as string/int etc.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ColumnType Field Type, such as varchar(32)/int(10) etc.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ColumnDefault Field Default Value
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ColumnKey Index Type, such as PRI/MUL/PARTITION etc., For normal fields, this value is an empty string
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $ColumnPosition Field Order Identifier
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ColumnComment Field Comment
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $StoreType Data TypeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProjectId Project ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProjectName Project Name in English
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProjectDisplayName Project Name in Chinese
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CreateTime Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $UpdateTime Update timeNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Scale Precision
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
        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("DatasourceName",$param) and $param["DatasourceName"] !== null) {
            $this->DatasourceName = $param["DatasourceName"];
        }

        if (array_key_exists("DatabaseId",$param) and $param["DatabaseId"] !== null) {
            $this->DatabaseId = $param["DatabaseId"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("ColumnName",$param) and $param["ColumnName"] !== null) {
            $this->ColumnName = $param["ColumnName"];
        }

        if (array_key_exists("DataType",$param) and $param["DataType"] !== null) {
            $this->DataType = $param["DataType"];
        }

        if (array_key_exists("ColumnType",$param) and $param["ColumnType"] !== null) {
            $this->ColumnType = $param["ColumnType"];
        }

        if (array_key_exists("ColumnDefault",$param) and $param["ColumnDefault"] !== null) {
            $this->ColumnDefault = $param["ColumnDefault"];
        }

        if (array_key_exists("ColumnKey",$param) and $param["ColumnKey"] !== null) {
            $this->ColumnKey = $param["ColumnKey"];
        }

        if (array_key_exists("ColumnPosition",$param) and $param["ColumnPosition"] !== null) {
            $this->ColumnPosition = $param["ColumnPosition"];
        }

        if (array_key_exists("ColumnComment",$param) and $param["ColumnComment"] !== null) {
            $this->ColumnComment = $param["ColumnComment"];
        }

        if (array_key_exists("StoreType",$param) and $param["StoreType"] !== null) {
            $this->StoreType = $param["StoreType"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("ProjectDisplayName",$param) and $param["ProjectDisplayName"] !== null) {
            $this->ProjectDisplayName = $param["ProjectDisplayName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Scale",$param) and $param["Scale"] !== null) {
            $this->Scale = $param["Scale"];
        }
    }
}
