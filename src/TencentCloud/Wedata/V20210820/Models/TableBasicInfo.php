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
 * @method string getTableId() Obtain Global Unique ID of the Table
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableId(string $TableId) Set Global Unique ID of the Table
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDatasourceId() Obtain Data Source Global Unique ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatasourceId(string $DatasourceId) Set Data Source Global Unique ID
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
 * @method string getTableName() Obtain Table NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableName(string $TableName) Set Table NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getEngineType() Obtain Engine/Storage Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setEngineType(string $EngineType) Set Engine/Storage Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTableType() Obtain Table Types, such as View, External Table, etc.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableType(string $TableType) Set Table Types, such as View, External Table, etc.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getProjectId() Obtain Project IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setProjectId(string $ProjectId) Set Project IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getProjectName() Obtain Project Name in English
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setProjectName(string $ProjectName) Set Project Name in English
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getProjectDisplayName() Obtain Project English and Chinese Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setProjectDisplayName(string $ProjectDisplayName) Set Project English and Chinese Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTableOwnerId() Obtain Responsible Person ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableOwnerId(string $TableOwnerId) Set Responsible Person ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTableOwnerName() Obtain Person in Charge
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableOwnerName(string $TableOwnerName) Set Person in Charge
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getStorageLocation() Obtain Storage locationNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setStorageLocation(integer $StorageLocation) Set Storage locationNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getDescription() Obtain Table Description
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDescription(string $Description) Set Table Description
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getIsPartitionTable() Obtain Whether it is a partitioned table, 0-Full Table 1-Partition Table
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setIsPartitionTable(integer $IsPartitionTable) Set Whether it is a partitioned table, 0-Full Table 1-Partition Table
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getPartitionColumns() Obtain Partition field list
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setPartitionColumns(array $PartitionColumns) Set Partition field list
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getStorageFormat() Obtain Storage Format
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStorageFormat(string $StorageFormat) Set Storage Format
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getStorageSize() Obtain Storage Volume, Byte Count
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStorageSize(integer $StorageSize) Set Storage Volume, Byte Count
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getStorageSizeWithUnit() Obtain Storage Volume, Unit
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStorageSizeWithUnit(string $StorageSizeWithUnit) Set Storage Volume, Unit
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getTotalSizeMb() Obtain Cumulative storage [MB]
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTotalSizeMb(integer $TotalSizeMb) Set Cumulative storage [MB]
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getReplicaCount() Obtain Replica quantityNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setReplicaCount(integer $ReplicaCount) Set Replica quantityNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getFileCount() Obtain Number of Files
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFileCount(integer $FileCount) Set Number of Files
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getPartitionCount() Obtain Total Partitions (including hive, iceberg)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setPartitionCount(integer $PartitionCount) Set Total Partitions (including hive, iceberg)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getPartitionFieldCount() Obtain Number of partition fields (including hive, iceberg)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setPartitionFieldCount(integer $PartitionFieldCount) Set Number of partition fields (including hive, iceberg)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getPartitionExpireDays() Obtain Lifecycle - Partition Retention Days [Effective during Partition Retention Policy]
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setPartitionExpireDays(integer $PartitionExpireDays) Set Lifecycle - Partition Retention Days [Effective during Partition Retention Policy]
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCreateTime() Obtain Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getUpdateTime() Obtain Update timeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Update timeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getLocation() Obtain Storage locationNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setLocation(string $Location) Set Storage locationNote: This field may return null, indicating that no valid value can be obtained.
 */
class TableBasicInfo extends AbstractModel
{
    /**
     * @var string Global Unique ID of the Table
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableId;

    /**
     * @var string Data Source Global Unique ID
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
     * @var string Table NameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableName;

    /**
     * @var string Engine/Storage Type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $EngineType;

    /**
     * @var string Table Types, such as View, External Table, etc.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableType;

    /**
     * @var string Project IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProjectId;

    /**
     * @var string Project Name in English
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProjectName;

    /**
     * @var string Project English and Chinese Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProjectDisplayName;

    /**
     * @var string Responsible Person ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableOwnerId;

    /**
     * @var string Person in Charge
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableOwnerName;

    /**
     * @var integer Storage locationNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $StorageLocation;

    /**
     * @var string Table Description
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Description;

    /**
     * @var integer Whether it is a partitioned table, 0-Full Table 1-Partition Table
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $IsPartitionTable;

    /**
     * @var array Partition field list
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $PartitionColumns;

    /**
     * @var string Storage Format
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $StorageFormat;

    /**
     * @var integer Storage Volume, Byte Count
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $StorageSize;

    /**
     * @var string Storage Volume, Unit
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $StorageSizeWithUnit;

    /**
     * @var integer Cumulative storage [MB]
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TotalSizeMb;

    /**
     * @var integer Replica quantityNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ReplicaCount;

    /**
     * @var integer Number of Files
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $FileCount;

    /**
     * @var integer Total Partitions (including hive, iceberg)
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $PartitionCount;

    /**
     * @var integer Number of partition fields (including hive, iceberg)
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $PartitionFieldCount;

    /**
     * @var integer Lifecycle - Partition Retention Days [Effective during Partition Retention Policy]
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $PartitionExpireDays;

    /**
     * @var string Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Update timeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $UpdateTime;

    /**
     * @var string Storage locationNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Location;

    /**
     * @param string $TableId Global Unique ID of the Table
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DatasourceId Data Source Global Unique ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DatasourceName Data Source Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DatabaseId Database ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DatabaseName Database nameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $TableName Table NameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $EngineType Engine/Storage Type
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TableType Table Types, such as View, External Table, etc.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProjectId Project IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProjectName Project Name in English
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProjectDisplayName Project English and Chinese Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TableOwnerId Responsible Person ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TableOwnerName Person in Charge
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $StorageLocation Storage locationNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $Description Table Description
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $IsPartitionTable Whether it is a partitioned table, 0-Full Table 1-Partition Table
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $PartitionColumns Partition field list
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $StorageFormat Storage Format
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $StorageSize Storage Volume, Byte Count
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $StorageSizeWithUnit Storage Volume, Unit
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $TotalSizeMb Cumulative storage [MB]
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $ReplicaCount Replica quantityNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $FileCount Number of Files
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $PartitionCount Total Partitions (including hive, iceberg)
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $PartitionFieldCount Number of partition fields (including hive, iceberg)
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $PartitionExpireDays Lifecycle - Partition Retention Days [Effective during Partition Retention Policy]
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CreateTime Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $UpdateTime Update timeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $Location Storage locationNote: This field may return null, indicating that no valid value can be obtained.
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

        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }

        if (array_key_exists("TableType",$param) and $param["TableType"] !== null) {
            $this->TableType = $param["TableType"];
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

        if (array_key_exists("TableOwnerId",$param) and $param["TableOwnerId"] !== null) {
            $this->TableOwnerId = $param["TableOwnerId"];
        }

        if (array_key_exists("TableOwnerName",$param) and $param["TableOwnerName"] !== null) {
            $this->TableOwnerName = $param["TableOwnerName"];
        }

        if (array_key_exists("StorageLocation",$param) and $param["StorageLocation"] !== null) {
            $this->StorageLocation = $param["StorageLocation"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("IsPartitionTable",$param) and $param["IsPartitionTable"] !== null) {
            $this->IsPartitionTable = $param["IsPartitionTable"];
        }

        if (array_key_exists("PartitionColumns",$param) and $param["PartitionColumns"] !== null) {
            $this->PartitionColumns = $param["PartitionColumns"];
        }

        if (array_key_exists("StorageFormat",$param) and $param["StorageFormat"] !== null) {
            $this->StorageFormat = $param["StorageFormat"];
        }

        if (array_key_exists("StorageSize",$param) and $param["StorageSize"] !== null) {
            $this->StorageSize = $param["StorageSize"];
        }

        if (array_key_exists("StorageSizeWithUnit",$param) and $param["StorageSizeWithUnit"] !== null) {
            $this->StorageSizeWithUnit = $param["StorageSizeWithUnit"];
        }

        if (array_key_exists("TotalSizeMb",$param) and $param["TotalSizeMb"] !== null) {
            $this->TotalSizeMb = $param["TotalSizeMb"];
        }

        if (array_key_exists("ReplicaCount",$param) and $param["ReplicaCount"] !== null) {
            $this->ReplicaCount = $param["ReplicaCount"];
        }

        if (array_key_exists("FileCount",$param) and $param["FileCount"] !== null) {
            $this->FileCount = $param["FileCount"];
        }

        if (array_key_exists("PartitionCount",$param) and $param["PartitionCount"] !== null) {
            $this->PartitionCount = $param["PartitionCount"];
        }

        if (array_key_exists("PartitionFieldCount",$param) and $param["PartitionFieldCount"] !== null) {
            $this->PartitionFieldCount = $param["PartitionFieldCount"];
        }

        if (array_key_exists("PartitionExpireDays",$param) and $param["PartitionExpireDays"] !== null) {
            $this->PartitionExpireDays = $param["PartitionExpireDays"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }
    }
}
