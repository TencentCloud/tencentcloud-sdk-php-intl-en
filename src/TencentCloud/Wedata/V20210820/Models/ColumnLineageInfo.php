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
 * Lineage Field Information
 *
 * @method string getId() Obtain Lineage ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setId(string $Id) Set Lineage ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDatasourceId() Obtain Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatasourceId(string $DatasourceId) Set Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getColumnName() Obtain Field NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setColumnName(string $ColumnName) Set Field NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getColumnNameCn() Obtain Field Chinese Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setColumnNameCn(string $ColumnNameCn) Set Field Chinese Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getColumnType() Obtain Field TypeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setColumnType(string $ColumnType) Set Field TypeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getRelationParams() Obtain Relationship Parameters
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRelationParams(string $RelationParams) Set Relationship Parameters
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getParams() Obtain ParameterNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setParams(string $Params) Set ParameterNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getParentId() Obtain Parent ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setParentId(string $ParentId) Set Parent ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getMetastoreType() Obtain Metadata Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMetastoreType(string $MetastoreType) Set Metadata Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getMetastoreTypeName() Obtain Metadata Type Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMetastoreTypeName(string $MetastoreTypeName) Set Metadata Type Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTableName() Obtain Table Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableName(string $TableName) Set Table Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getQualifiedName() Obtain Full Field Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setQualifiedName(string $QualifiedName) Set Full Field Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getDownStreamCount() Obtain Number of Downstream Nodes
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDownStreamCount(integer $DownStreamCount) Set Number of Downstream Nodes
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getUpStreamCount() Obtain Number of Upstream Nodes
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUpStreamCount(integer $UpStreamCount) Set Number of Upstream Nodes
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDescription() Obtain DescriptionNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setDescription(string $Description) Set DescriptionNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getPrefixPath() Obtain Path Information Starting from the Central Node
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setPrefixPath(string $PrefixPath) Set Path Information Starting from the Central Node
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCreateTime() Obtain Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getModifyTime() Obtain Update timeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setModifyTime(string $ModifyTime) Set Update timeNote: This field may return null, indicating that no valid value can be obtained.
 * @method array getTasks() Obtain Task ID list
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTasks(array $Tasks) Set Task ID list
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getParentSet() Obtain Parent Node List String
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setParentSet(string $ParentSet) Set Parent Node List String
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getChildSet() Obtain Child Node List String
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setChildSet(string $ChildSet) Set Child Node List String
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getExtParams() Obtain Additional parameters
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setExtParams(array $ExtParams) Set Additional parameters
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTableId() Obtain Table IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableId(string $TableId) Set Table IDNote: This field may return null, indicating that no valid value can be obtained.
 */
class ColumnLineageInfo extends AbstractModel
{
    /**
     * @var string Lineage ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Id;

    /**
     * @var string Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatasourceId;

    /**
     * @var string Field NameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ColumnName;

    /**
     * @var string Field Chinese Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ColumnNameCn;

    /**
     * @var string Field TypeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ColumnType;

    /**
     * @var string Relationship Parameters
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RelationParams;

    /**
     * @var string ParameterNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Params;

    /**
     * @var string Parent ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ParentId;

    /**
     * @var string Metadata Type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $MetastoreType;

    /**
     * @var string Metadata Type Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $MetastoreTypeName;

    /**
     * @var string Table Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableName;

    /**
     * @var string Full Field Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $QualifiedName;

    /**
     * @var integer Number of Downstream Nodes
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DownStreamCount;

    /**
     * @var integer Number of Upstream Nodes
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $UpStreamCount;

    /**
     * @var string DescriptionNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Description;

    /**
     * @var string Path Information Starting from the Central Node
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $PrefixPath;

    /**
     * @var string Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Update timeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ModifyTime;

    /**
     * @var array Task ID list
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Tasks;

    /**
     * @var string Parent Node List String
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ParentSet;

    /**
     * @var string Child Node List String
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ChildSet;

    /**
     * @var array Additional parameters
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExtParams;

    /**
     * @var string Table IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableId;

    /**
     * @param string $Id Lineage ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DatasourceId Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ColumnName Field NameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ColumnNameCn Field Chinese Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ColumnType Field TypeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $RelationParams Relationship Parameters
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Params ParameterNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ParentId Parent ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $MetastoreType Metadata Type
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $MetastoreTypeName Metadata Type Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TableName Table Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $QualifiedName Full Field Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $DownStreamCount Number of Downstream Nodes
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $UpStreamCount Number of Upstream Nodes
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Description DescriptionNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $PrefixPath Path Information Starting from the Central Node
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CreateTime Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ModifyTime Update timeNote: This field may return null, indicating that no valid value can be obtained.
     * @param array $Tasks Task ID list
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ParentSet Parent Node List String
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ChildSet Child Node List String
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $ExtParams Additional parameters
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TableId Table IDNote: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("ColumnName",$param) and $param["ColumnName"] !== null) {
            $this->ColumnName = $param["ColumnName"];
        }

        if (array_key_exists("ColumnNameCn",$param) and $param["ColumnNameCn"] !== null) {
            $this->ColumnNameCn = $param["ColumnNameCn"];
        }

        if (array_key_exists("ColumnType",$param) and $param["ColumnType"] !== null) {
            $this->ColumnType = $param["ColumnType"];
        }

        if (array_key_exists("RelationParams",$param) and $param["RelationParams"] !== null) {
            $this->RelationParams = $param["RelationParams"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = $param["Params"];
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }

        if (array_key_exists("MetastoreType",$param) and $param["MetastoreType"] !== null) {
            $this->MetastoreType = $param["MetastoreType"];
        }

        if (array_key_exists("MetastoreTypeName",$param) and $param["MetastoreTypeName"] !== null) {
            $this->MetastoreTypeName = $param["MetastoreTypeName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("QualifiedName",$param) and $param["QualifiedName"] !== null) {
            $this->QualifiedName = $param["QualifiedName"];
        }

        if (array_key_exists("DownStreamCount",$param) and $param["DownStreamCount"] !== null) {
            $this->DownStreamCount = $param["DownStreamCount"];
        }

        if (array_key_exists("UpStreamCount",$param) and $param["UpStreamCount"] !== null) {
            $this->UpStreamCount = $param["UpStreamCount"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("PrefixPath",$param) and $param["PrefixPath"] !== null) {
            $this->PrefixPath = $param["PrefixPath"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = $param["Tasks"];
        }

        if (array_key_exists("ParentSet",$param) and $param["ParentSet"] !== null) {
            $this->ParentSet = $param["ParentSet"];
        }

        if (array_key_exists("ChildSet",$param) and $param["ChildSet"] !== null) {
            $this->ChildSet = $param["ChildSet"];
        }

        if (array_key_exists("ExtParams",$param) and $param["ExtParams"] !== null) {
            $this->ExtParams = [];
            foreach ($param["ExtParams"] as $key => $value){
                $obj = new LineageParamRecord();
                $obj->deserialize($value);
                array_push($this->ExtParams, $obj);
            }
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }
    }
}
