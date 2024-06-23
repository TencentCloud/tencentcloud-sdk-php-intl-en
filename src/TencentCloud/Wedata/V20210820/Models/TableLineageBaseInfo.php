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
 * Table Lineage Details
 *
 * @method string getMetastoreType() Obtain Metadata Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMetastoreType(string $MetastoreType) Set Metadata Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getPrefixPath() Obtain Path from Central Node to this Node
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setPrefixPath(string $PrefixPath) Set Path from Central Node to this Node
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getProjectId() Obtain Space ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setProjectId(string $ProjectId) Set Space ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDatasourceId() Obtain Data source IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatasourceId(string $DatasourceId) Set Data source IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getTableId() Obtain Table ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableId(string $TableId) Set Table ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getParams() Obtain Table Lineage Parameters
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setParams(array $Params) Set Table Lineage Parameters
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getParentSet() Obtain Parent Node List
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setParentSet(string $ParentSet) Set Parent Node List
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getChildSet() Obtain Child Node List
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setChildSet(string $ChildSet) Set Child Node List
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getExtParams() Obtain Additional parameters
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setExtParams(array $ExtParams) Set Additional parameters
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getId() Obtain Lineage ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setId(string $Id) Set Lineage ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getMetastoreTypeName() Obtain Metadata Type Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMetastoreTypeName(string $MetastoreTypeName) Set Metadata Type Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTableName() Obtain Table Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableName(string $TableName) Set Table Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getQualifiedName() Obtain Full Table Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setQualifiedName(string $QualifiedName) Set Full Table Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getDownStreamCount() Obtain Number of Downstream Nodes in Lineage
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDownStreamCount(integer $DownStreamCount) Set Number of Downstream Nodes in Lineage
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getUpStreamCount() Obtain Number of Upstream Nodes in Lineage
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUpStreamCount(integer $UpStreamCount) Set Number of Upstream Nodes in Lineage
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDescription() Obtain Bloodline Description
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDescription(string $Description) Set Bloodline Description
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCreateTime() Obtain Bloodline Creation Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Bloodline Creation Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getModifyTime() Obtain Bloodline Update Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setModifyTime(string $ModifyTime) Set Bloodline Update Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getTasks() Obtain Modify the task ID list of lineage
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTasks(array $Tasks) Set Modify the task ID list of lineage
Note: This field may return null, indicating that no valid value can be obtained.
 */
class TableLineageBaseInfo extends AbstractModel
{
    /**
     * @var string Metadata Type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $MetastoreType;

    /**
     * @var string Path from Central Node to this Node
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $PrefixPath;

    /**
     * @var string Space ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProjectId;

    /**
     * @var string Data source IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatasourceId;

    /**
     * @var string Table ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableId;

    /**
     * @var array Table Lineage Parameters
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Params;

    /**
     * @var string Parent Node List
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ParentSet;

    /**
     * @var string Child Node List
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ChildSet;

    /**
     * @var array Additional parameters
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExtParams;

    /**
     * @var string Lineage ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Id;

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
     * @var string Full Table Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $QualifiedName;

    /**
     * @var integer Number of Downstream Nodes in Lineage
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DownStreamCount;

    /**
     * @var integer Number of Upstream Nodes in Lineage
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $UpStreamCount;

    /**
     * @var string Bloodline Description
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Description;

    /**
     * @var string Bloodline Creation Time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Bloodline Update Time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ModifyTime;

    /**
     * @var array Modify the task ID list of lineage
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Tasks;

    /**
     * @param string $MetastoreType Metadata Type
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $PrefixPath Path from Central Node to this Node
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProjectId Space ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DatasourceId Data source IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $TableId Table ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $Params Table Lineage Parameters
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ParentSet Parent Node List
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ChildSet Child Node List
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $ExtParams Additional parameters
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Id Lineage ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $MetastoreTypeName Metadata Type Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TableName Table Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $QualifiedName Full Table Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $DownStreamCount Number of Downstream Nodes in Lineage
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $UpStreamCount Number of Upstream Nodes in Lineage
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Description Bloodline Description
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CreateTime Bloodline Creation Time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ModifyTime Bloodline Update Time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $Tasks Modify the task ID list of lineage
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
        if (array_key_exists("MetastoreType",$param) and $param["MetastoreType"] !== null) {
            $this->MetastoreType = $param["MetastoreType"];
        }

        if (array_key_exists("PrefixPath",$param) and $param["PrefixPath"] !== null) {
            $this->PrefixPath = $param["PrefixPath"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = [];
            foreach ($param["Params"] as $key => $value){
                $obj = new LineageParamRecord();
                $obj->deserialize($value);
                array_push($this->Params, $obj);
            }
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
                $obj = new RecordField();
                $obj->deserialize($value);
                array_push($this->ExtParams, $obj);
            }
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = $param["Tasks"];
        }
    }
}
