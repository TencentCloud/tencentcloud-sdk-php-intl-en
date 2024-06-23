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
 * GenHiveTableDDLSql request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getSinkDatabase() Obtain Target Database
 * @method void setSinkDatabase(string $SinkDatabase) Set Target Database
 * @method string getId() Obtain Node ID
 * @method void setId(string $Id) Set Node ID
 * @method string getMsType() Obtain Metadata Type (MYSQL,ORACLE)
 * @method void setMsType(string $MsType) Set Metadata Type (MYSQL,ORACLE)
 * @method string getDatasourceId() Obtain Data source ID
 * @method void setDatasourceId(string $DatasourceId) Set Data source ID
 * @method string getSourceDatabase() Obtain Source Library Name
 * @method void setSourceDatabase(string $SourceDatabase) Set Source Library Name
 * @method string getTableName() Obtain Source Table Name
 * @method void setTableName(string $TableName) Set Source Table Name
 * @method string getSinkType() Obtain Target Table Metadata Type (HIVE,GBASE)
 * @method void setSinkType(string $SinkType) Set Target Table Metadata Type (HIVE,GBASE)
 * @method string getSchemaName() Obtain Source Schema Name
 * @method void setSchemaName(string $SchemaName) Set Source Schema Name
 * @method array getSourceFieldInfoList() Obtain Field Information of Upstream Node
 * @method void setSourceFieldInfoList(array $SourceFieldInfoList) Set Field Information of Upstream Node
 * @method array getPartitions() Obtain Partition Field
 * @method void setPartitions(array $Partitions) Set Partition Field
 * @method array getProperties() Obtain Table Creation Attributes
 * @method void setProperties(array $Properties) Set Table Creation Attributes
 * @method integer getTableMode() Obtain Table Creation Mode,0: Wizard Mode,1: ddl
 * @method void setTableMode(integer $TableMode) Set Table Creation Mode,0: Wizard Mode,1: ddl
 * @method string getTableVersion() Obtain DLC Table Version, v1/v2
 * @method void setTableVersion(string $TableVersion) Set DLC Table Version, v1/v2
 * @method boolean getUpsertFlag() Obtain Whether to Upsert Writes
 * @method void setUpsertFlag(boolean $UpsertFlag) Set Whether to Upsert Writes
 * @method string getTableComment() Obtain Table Description Information
 * @method void setTableComment(string $TableComment) Set Table Description Information
 * @method integer getAddDataFiles() Obtain Threshold for Increased Number of Files, Exceeding Value Will Trigger Small File Merge
 * @method void setAddDataFiles(integer $AddDataFiles) Set Threshold for Increased Number of Files, Exceeding Value Will Trigger Small File Merge
 * @method integer getAddEqualityDeletes() Obtain Threshold for Increased Number of Equality Deletes, Exceeding Value Will Trigger Small File Merge
 * @method void setAddEqualityDeletes(integer $AddEqualityDeletes) Set Threshold for Increased Number of Equality Deletes, Exceeding Value Will Trigger Small File Merge
 * @method integer getAddPositionDeletes() Obtain Threshold for Increased Number of Position Deletes, Exceeding Value Will Trigger Small File Merge
 * @method void setAddPositionDeletes(integer $AddPositionDeletes) Set Threshold for Increased Number of Position Deletes, Exceeding Value Will Trigger Small File Merge
 * @method integer getAddDeleteFiles() Obtain Threshold for Increased Number of Delete Files
 * @method void setAddDeleteFiles(integer $AddDeleteFiles) Set Threshold for Increased Number of Delete Files
 * @method string getTargetDatasourceId() Obtain Downstream Node Data Source ID
 * @method void setTargetDatasourceId(string $TargetDatasourceId) Set Downstream Node Data Source ID
 * @method array getUpsertKeys() Obtain DLC Upsert Primary Key
 * @method void setUpsertKeys(array $UpsertKeys) Set DLC Upsert Primary Key
 * @method TableBaseInfo getTableBaseInfo() Obtain DLC Table Governance Information
 * @method void setTableBaseInfo(TableBaseInfo $TableBaseInfo) Set DLC Table Governance Information
 * @method string getSinkSchemaName() Obtain Target Schema Name
 * @method void setSinkSchemaName(string $SinkSchemaName) Set Target Schema Name
 */
class GenHiveTableDDLSqlRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Target Database
     */
    public $SinkDatabase;

    /**
     * @var string Node ID
     */
    public $Id;

    /**
     * @var string Metadata Type (MYSQL,ORACLE)
     */
    public $MsType;

    /**
     * @var string Data source ID
     */
    public $DatasourceId;

    /**
     * @var string Source Library Name
     */
    public $SourceDatabase;

    /**
     * @var string Source Table Name
     */
    public $TableName;

    /**
     * @var string Target Table Metadata Type (HIVE,GBASE)
     */
    public $SinkType;

    /**
     * @var string Source Schema Name
     */
    public $SchemaName;

    /**
     * @var array Field Information of Upstream Node
     */
    public $SourceFieldInfoList;

    /**
     * @var array Partition Field
     */
    public $Partitions;

    /**
     * @var array Table Creation Attributes
     */
    public $Properties;

    /**
     * @var integer Table Creation Mode,0: Wizard Mode,1: ddl
     */
    public $TableMode;

    /**
     * @var string DLC Table Version, v1/v2
     */
    public $TableVersion;

    /**
     * @var boolean Whether to Upsert Writes
     */
    public $UpsertFlag;

    /**
     * @var string Table Description Information
     */
    public $TableComment;

    /**
     * @var integer Threshold for Increased Number of Files, Exceeding Value Will Trigger Small File Merge
     */
    public $AddDataFiles;

    /**
     * @var integer Threshold for Increased Number of Equality Deletes, Exceeding Value Will Trigger Small File Merge
     */
    public $AddEqualityDeletes;

    /**
     * @var integer Threshold for Increased Number of Position Deletes, Exceeding Value Will Trigger Small File Merge
     */
    public $AddPositionDeletes;

    /**
     * @var integer Threshold for Increased Number of Delete Files
     */
    public $AddDeleteFiles;

    /**
     * @var string Downstream Node Data Source ID
     */
    public $TargetDatasourceId;

    /**
     * @var array DLC Upsert Primary Key
     */
    public $UpsertKeys;

    /**
     * @var TableBaseInfo DLC Table Governance Information
     */
    public $TableBaseInfo;

    /**
     * @var string Target Schema Name
     */
    public $SinkSchemaName;

    /**
     * @param string $ProjectId Project ID
     * @param string $SinkDatabase Target Database
     * @param string $Id Node ID
     * @param string $MsType Metadata Type (MYSQL,ORACLE)
     * @param string $DatasourceId Data source ID
     * @param string $SourceDatabase Source Library Name
     * @param string $TableName Source Table Name
     * @param string $SinkType Target Table Metadata Type (HIVE,GBASE)
     * @param string $SchemaName Source Schema Name
     * @param array $SourceFieldInfoList Field Information of Upstream Node
     * @param array $Partitions Partition Field
     * @param array $Properties Table Creation Attributes
     * @param integer $TableMode Table Creation Mode,0: Wizard Mode,1: ddl
     * @param string $TableVersion DLC Table Version, v1/v2
     * @param boolean $UpsertFlag Whether to Upsert Writes
     * @param string $TableComment Table Description Information
     * @param integer $AddDataFiles Threshold for Increased Number of Files, Exceeding Value Will Trigger Small File Merge
     * @param integer $AddEqualityDeletes Threshold for Increased Number of Equality Deletes, Exceeding Value Will Trigger Small File Merge
     * @param integer $AddPositionDeletes Threshold for Increased Number of Position Deletes, Exceeding Value Will Trigger Small File Merge
     * @param integer $AddDeleteFiles Threshold for Increased Number of Delete Files
     * @param string $TargetDatasourceId Downstream Node Data Source ID
     * @param array $UpsertKeys DLC Upsert Primary Key
     * @param TableBaseInfo $TableBaseInfo DLC Table Governance Information
     * @param string $SinkSchemaName Target Schema Name
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("SinkDatabase",$param) and $param["SinkDatabase"] !== null) {
            $this->SinkDatabase = $param["SinkDatabase"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("MsType",$param) and $param["MsType"] !== null) {
            $this->MsType = $param["MsType"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("SourceDatabase",$param) and $param["SourceDatabase"] !== null) {
            $this->SourceDatabase = $param["SourceDatabase"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("SinkType",$param) and $param["SinkType"] !== null) {
            $this->SinkType = $param["SinkType"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("SourceFieldInfoList",$param) and $param["SourceFieldInfoList"] !== null) {
            $this->SourceFieldInfoList = [];
            foreach ($param["SourceFieldInfoList"] as $key => $value){
                $obj = new SourceFieldInfo();
                $obj->deserialize($value);
                array_push($this->SourceFieldInfoList, $obj);
            }
        }

        if (array_key_exists("Partitions",$param) and $param["Partitions"] !== null) {
            $this->Partitions = [];
            foreach ($param["Partitions"] as $key => $value){
                $obj = new Partition();
                $obj->deserialize($value);
                array_push($this->Partitions, $obj);
            }
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = [];
            foreach ($param["Properties"] as $key => $value){
                $obj = new Property();
                $obj->deserialize($value);
                array_push($this->Properties, $obj);
            }
        }

        if (array_key_exists("TableMode",$param) and $param["TableMode"] !== null) {
            $this->TableMode = $param["TableMode"];
        }

        if (array_key_exists("TableVersion",$param) and $param["TableVersion"] !== null) {
            $this->TableVersion = $param["TableVersion"];
        }

        if (array_key_exists("UpsertFlag",$param) and $param["UpsertFlag"] !== null) {
            $this->UpsertFlag = $param["UpsertFlag"];
        }

        if (array_key_exists("TableComment",$param) and $param["TableComment"] !== null) {
            $this->TableComment = $param["TableComment"];
        }

        if (array_key_exists("AddDataFiles",$param) and $param["AddDataFiles"] !== null) {
            $this->AddDataFiles = $param["AddDataFiles"];
        }

        if (array_key_exists("AddEqualityDeletes",$param) and $param["AddEqualityDeletes"] !== null) {
            $this->AddEqualityDeletes = $param["AddEqualityDeletes"];
        }

        if (array_key_exists("AddPositionDeletes",$param) and $param["AddPositionDeletes"] !== null) {
            $this->AddPositionDeletes = $param["AddPositionDeletes"];
        }

        if (array_key_exists("AddDeleteFiles",$param) and $param["AddDeleteFiles"] !== null) {
            $this->AddDeleteFiles = $param["AddDeleteFiles"];
        }

        if (array_key_exists("TargetDatasourceId",$param) and $param["TargetDatasourceId"] !== null) {
            $this->TargetDatasourceId = $param["TargetDatasourceId"];
        }

        if (array_key_exists("UpsertKeys",$param) and $param["UpsertKeys"] !== null) {
            $this->UpsertKeys = $param["UpsertKeys"];
        }

        if (array_key_exists("TableBaseInfo",$param) and $param["TableBaseInfo"] !== null) {
            $this->TableBaseInfo = new TableBaseInfo();
            $this->TableBaseInfo->deserialize($param["TableBaseInfo"]);
        }

        if (array_key_exists("SinkSchemaName",$param) and $param["SinkSchemaName"] !== null) {
            $this->SinkSchemaName = $param["SinkSchemaName"];
        }
    }
}
