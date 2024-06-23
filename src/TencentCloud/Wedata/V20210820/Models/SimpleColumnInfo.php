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
 * Lineage Column Description
 *
 * @method string getId() Obtain Column ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setId(string $Id) Set Column ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getQualifiedName() Obtain Qualified Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setQualifiedName(string $QualifiedName) Set Qualified Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getColumnName() Obtain Column nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setColumnName(string $ColumnName) Set Column nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getColumnNameCn() Obtain Column Chinese Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setColumnNameCn(string $ColumnNameCn) Set Column Chinese Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getColumnType() Obtain Column Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setColumnType(string $ColumnType) Set Column Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDescription() Obtain Column Description
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDescription(string $Description) Set Column Description
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getPrefixPath() Obtain Prefix Path
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setPrefixPath(string $PrefixPath) Set Prefix Path
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCreateTime() Obtain Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getModifyTime() Obtain Modification TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setModifyTime(string $ModifyTime) Set Modification TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getDatasourceId() Obtain Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatasourceId(string $DatasourceId) Set Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getDownStreamCount() Obtain Downstream Quantity
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDownStreamCount(integer $DownStreamCount) Set Downstream Quantity
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getUpStreamCount() Obtain Upstream Quantity
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUpStreamCount(integer $UpStreamCount) Set Upstream Quantity
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getRelationParams() Obtain Relationship Parameters
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRelationParams(string $RelationParams) Set Relationship Parameters
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getParams() Obtain ParameterNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setParams(string $Params) Set ParameterNote: This field may return null, indicating that no valid value can be obtained.
 * @method array getTasks() Obtain Task Collection
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTasks(array $Tasks) Set Task Collection
Note: This field may return null, indicating that no valid value can be obtained.
 */
class SimpleColumnInfo extends AbstractModel
{
    /**
     * @var string Column ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Id;

    /**
     * @var string Qualified Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $QualifiedName;

    /**
     * @var string Column nameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ColumnName;

    /**
     * @var string Column Chinese Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ColumnNameCn;

    /**
     * @var string Column Type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ColumnType;

    /**
     * @var string Column Description
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Description;

    /**
     * @var string Prefix Path
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $PrefixPath;

    /**
     * @var string Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Modification TimeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ModifyTime;

    /**
     * @var string Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatasourceId;

    /**
     * @var integer Downstream Quantity
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DownStreamCount;

    /**
     * @var integer Upstream Quantity
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $UpStreamCount;

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
     * @var array Task Collection
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Tasks;

    /**
     * @param string $Id Column ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $QualifiedName Qualified Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ColumnName Column nameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ColumnNameCn Column Chinese Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ColumnType Column Type
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Description Column Description
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $PrefixPath Prefix Path
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CreateTime Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ModifyTime Modification TimeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $DatasourceId Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $DownStreamCount Downstream Quantity
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $UpStreamCount Upstream Quantity
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $RelationParams Relationship Parameters
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Params ParameterNote: This field may return null, indicating that no valid value can be obtained.
     * @param array $Tasks Task Collection
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("QualifiedName",$param) and $param["QualifiedName"] !== null) {
            $this->QualifiedName = $param["QualifiedName"];
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

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("DownStreamCount",$param) and $param["DownStreamCount"] !== null) {
            $this->DownStreamCount = $param["DownStreamCount"];
        }

        if (array_key_exists("UpStreamCount",$param) and $param["UpStreamCount"] !== null) {
            $this->UpStreamCount = $param["UpStreamCount"];
        }

        if (array_key_exists("RelationParams",$param) and $param["RelationParams"] !== null) {
            $this->RelationParams = $param["RelationParams"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = $param["Params"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = $param["Tasks"];
        }
    }
}
