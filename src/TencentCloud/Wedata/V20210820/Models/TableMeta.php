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
 * @method string getTableName() Obtain Table NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableName(string $TableName) Set Table NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getTableOwnerName() Obtain Person in ChargeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableOwnerName(string $TableOwnerName) Set Person in ChargeNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getDatasourceId() Obtain Data Source Global Unique ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatasourceId(integer $DatasourceId) Set Data Source Global Unique ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getClusterName() Obtain Cluster Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setClusterName(string $ClusterName) Set Cluster Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDatasourceName() Obtain Data Source Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatasourceName(string $DatasourceName) Set Data Source Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDatabaseName() Obtain Database nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatabaseName(string $DatabaseName) Set Database nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getTablePath() Obtain Table Path
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTablePath(string $TablePath) Set Table Path
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTableNameCn() Obtain Chinese Table Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableNameCn(string $TableNameCn) Set Chinese Table Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getMetastoreId() Obtain Metadata Tenant ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMetastoreId(integer $MetastoreId) Set Metadata Tenant ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getMetastoreType() Obtain Technology Type, available values: HIVE,MYSQL,KAFKA, HBASE
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMetastoreType(string $MetastoreType) Set Technology Type, available values: HIVE,MYSQL,KAFKA, HBASE
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDescription() Obtain Table Description
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDescription(string $Description) Set Table Description
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getColumnSeparator() Obtain Column Separator
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setColumnSeparator(string $ColumnSeparator) Set Column Separator
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getStorageFormat() Obtain Storage Format
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStorageFormat(string $StorageFormat) Set Storage Format
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getStorageSize() Obtain Storage Volume, Byte Count
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStorageSize(integer $StorageSize) Set Storage Volume, Byte Count
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTableType() Obtain Table Types, such as hive MANAGED_TABLE;EXTERNAL_TABLE
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableType(string $TableType) Set Table Types, such as hive MANAGED_TABLE;EXTERNAL_TABLE
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCreateTime() Obtain Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getModifyTime() Obtain Latest Data Modification Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setModifyTime(string $ModifyTime) Set Latest Data Modification Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDdlModifyTime() Obtain Latest DDL Modification Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDdlModifyTime(string $DdlModifyTime) Set Latest DDL Modification Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getLastAccessTime() Obtain Last Access Time of Data
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLastAccessTime(string $LastAccessTime) Set Last Access Time of Data
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getProjectName() Obtain Project Name in English
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setProjectName(string $ProjectName) Set Project Name in English
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getBizCatalogIds() Obtain Data Directory ID (may be multiple)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setBizCatalogIds(array $BizCatalogIds) Set Data Directory ID (may be multiple)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getBizCatalogNames() Obtain Data Directory (may be multiple)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setBizCatalogNames(array $BizCatalogNames) Set Data Directory (may be multiple)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method boolean getHasFavorite() Obtain true for Favorited/false indicates not favorited
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setHasFavorite(boolean $HasFavorite) Set true for Favorited/false indicates not favorited
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getLifeCycleTime() Obtain LifecycleNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setLifeCycleTime(integer $LifeCycleTime) Set LifecycleNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getStorageSizeWithUnit() Obtain Storage Volume, displayed in appropriate units
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStorageSizeWithUnit(string $StorageSizeWithUnit) Set Storage Volume, displayed in appropriate units
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getInstanceId() Obtain Instance ID of the Data Source Engine: e.g., EMR Cluster Instance ID/Data Source Instance ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Instance ID of the Data Source Engine: e.g., EMR Cluster Instance ID/Data Source Instance ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTechnologyType() Obtain Data Source Technology Type: HIVE/MYSQL/HBASE/KAFKA etc.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTechnologyType(string $TechnologyType) Set Data Source Technology Type: HIVE/MYSQL/HBASE/KAFKA etc.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTableNameEn() Obtain Table English Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableNameEn(string $TableNameEn) Set Table English Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getProjectId() Obtain Project IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setProjectId(string $ProjectId) Set Project IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getPartitions() Obtain Number of partitions in Kafka Topic
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setPartitions(string $Partitions) Set Number of partitions in Kafka Topic
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getReplicationFactor() Obtain Number of replicas in Kafka Topic
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setReplicationFactor(string $ReplicationFactor) Set Number of replicas in Kafka Topic
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getProjectDisplayName() Obtain Project English and Chinese Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setProjectDisplayName(string $ProjectDisplayName) Set Project English and Chinese Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDataModifyTime() Obtain Last Modified Time of Data
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDataModifyTime(string $DataModifyTime) Set Last Modified Time of Data
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getClusterId() Obtain Cluster ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setClusterId(string $ClusterId) Set Cluster ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method boolean getHasAdminAuthority() Obtain Current user has Administrator Privileges
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setHasAdminAuthority(boolean $HasAdminAuthority) Set Current user has Administrator Privileges
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDatasourceDisplayName() Obtain Data Source Display Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatasourceDisplayName(string $DatasourceDisplayName) Set Data Source Display Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDatabaseId() Obtain Database ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatabaseId(string $DatabaseId) Set Database ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getFavoriteCount() Obtain Total favorites on the table under the tenant
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFavoriteCount(integer $FavoriteCount) Set Total favorites on the table under the tenant
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getLikeCount() Obtain Total likes on the table under the tenant
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLikeCount(integer $LikeCount) Set Total likes on the table under the tenant
Note: This field may return null, indicating that no valid value can be obtained.
 * @method boolean getHasLike() Obtain true for liked/false for not liked status
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setHasLike(boolean $HasLike) Set true for liked/false for not liked status
Note: This field may return null, indicating that no valid value can be obtained.
 * @method TablePropertyScore getTablePropertyScore() Obtain Asset score of the table
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTablePropertyScore(TablePropertyScore $TablePropertyScore) Set Asset score of the table
Note: This field may return null, indicating that no valid value can be obtained.
 * @method TableHeat getTableHeat() Obtain Heat value of the table
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableHeat(TableHeat $TableHeat) Set Heat value of the table
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getOwnerProjectId() Obtain Data source ownerProjectId
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOwnerProjectId(string $OwnerProjectId) Set Data source ownerProjectId
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTableOwnerId() Obtain Table Owner ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableOwnerId(string $TableOwnerId) Set Table Owner ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDataSourceCategory() Obtain System Source -CLUSTER, DB - Self Definition Source
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDataSourceCategory(string $DataSourceCategory) Set System Source -CLUSTER, DB - Self Definition Source
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getColumns() Obtain Table Field Information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setColumns(array $Columns) Set Table Field Information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getMetaCrawlType() Obtain Table Collection Type
TABLE, VIEW, MANAGED_TABLE (Hive managed table), EXTERNAL_TABLE (Hive external table), VIRTUAL_VIEW (virtual view), MATERIALIZED_VIEW (materialized view), LATERAL_VIEW, INDEX_TABLE (index table), END_SELECT (query structure), INSTANCE (intermediate temporary table type (data lineage)), CDW (CDW table type)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMetaCrawlType(string $MetaCrawlType) Set Table Collection Type
TABLE, VIEW, MANAGED_TABLE (Hive managed table), EXTERNAL_TABLE (Hive external table), VIRTUAL_VIEW (virtual view), MATERIALIZED_VIEW (materialized view), LATERAL_VIEW, INDEX_TABLE (index table), END_SELECT (query structure), INSTANCE (intermediate temporary table type (data lineage)), CDW (CDW table type)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method boolean getIsView() Obtain Is View
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setIsView(boolean $IsView) Set Is View
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getLocation() Obtain Storage locationNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setLocation(string $Location) Set Storage locationNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getIsPartitionTable() Obtain Determine if it is a partitioned table 1 Yes 0 No
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setIsPartitionTable(integer $IsPartitionTable) Set Determine if it is a partitioned table 1 Yes 0 No
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getPartitionColumns() Obtain Partition Field Key
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setPartitionColumns(array $PartitionColumns) Set Partition Field Key
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getPartitionExpireDays() Obtain Lifecycle - Partition Retention Days [Valid when Partition Retention Policy is applied]
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setPartitionExpireDays(integer $PartitionExpireDays) Set Lifecycle - Partition Retention Days [Valid when Partition Retention Policy is applied]
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getTableProperties() Obtain Table Ancillary Information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableProperties(array $TableProperties) Set Table Ancillary Information
Note: This field may return null, indicating that no valid value can be obtained.
 */
class TableMeta extends AbstractModel
{
    /**
     * @var string Global Unique ID of the Table
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableId;

    /**
     * @var string Table NameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableName;

    /**
     * @var string Person in ChargeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableOwnerName;

    /**
     * @var integer Data Source Global Unique ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatasourceId;

    /**
     * @var string Cluster Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ClusterName;

    /**
     * @var string Data Source Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatasourceName;

    /**
     * @var string Database nameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatabaseName;

    /**
     * @var string Table Path
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TablePath;

    /**
     * @var string Chinese Table Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableNameCn;

    /**
     * @var integer Metadata Tenant ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $MetastoreId;

    /**
     * @var string Technology Type, available values: HIVE,MYSQL,KAFKA, HBASE
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $MetastoreType;

    /**
     * @var string Table Description
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Description;

    /**
     * @var string Column Separator
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ColumnSeparator;

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
     * @var string Table Types, such as hive MANAGED_TABLE;EXTERNAL_TABLE
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableType;

    /**
     * @var string Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Latest Data Modification Time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ModifyTime;

    /**
     * @var string Latest DDL Modification Time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DdlModifyTime;

    /**
     * @var string Last Access Time of Data
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $LastAccessTime;

    /**
     * @var string Project Name in English
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProjectName;

    /**
     * @var array Data Directory ID (may be multiple)
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $BizCatalogIds;

    /**
     * @var array Data Directory (may be multiple)
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $BizCatalogNames;

    /**
     * @var boolean true for Favorited/false indicates not favorited
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $HasFavorite;

    /**
     * @var integer LifecycleNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $LifeCycleTime;

    /**
     * @var string Storage Volume, displayed in appropriate units
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $StorageSizeWithUnit;

    /**
     * @var string Instance ID of the Data Source Engine: e.g., EMR Cluster Instance ID/Data Source Instance ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InstanceId;

    /**
     * @var string Data Source Technology Type: HIVE/MYSQL/HBASE/KAFKA etc.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TechnologyType;

    /**
     * @var string Table English Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableNameEn;

    /**
     * @var string Project IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProjectId;

    /**
     * @var string Number of partitions in Kafka Topic
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Partitions;

    /**
     * @var string Number of replicas in Kafka Topic
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ReplicationFactor;

    /**
     * @var string Project English and Chinese Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProjectDisplayName;

    /**
     * @var string Last Modified Time of Data
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DataModifyTime;

    /**
     * @var string Cluster ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ClusterId;

    /**
     * @var boolean Current user has Administrator Privileges
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $HasAdminAuthority;

    /**
     * @var string Data Source Display Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatasourceDisplayName;

    /**
     * @var string Database ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatabaseId;

    /**
     * @var integer Total favorites on the table under the tenant
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $FavoriteCount;

    /**
     * @var integer Total likes on the table under the tenant
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $LikeCount;

    /**
     * @var boolean true for liked/false for not liked status
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $HasLike;

    /**
     * @var TablePropertyScore Asset score of the table
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TablePropertyScore;

    /**
     * @var TableHeat Heat value of the table
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableHeat;

    /**
     * @var string Data source ownerProjectId
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $OwnerProjectId;

    /**
     * @var string Table Owner ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableOwnerId;

    /**
     * @var string System Source -CLUSTER, DB - Self Definition Source
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DataSourceCategory;

    /**
     * @var array Table Field Information
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Columns;

    /**
     * @var string Table Collection Type
TABLE, VIEW, MANAGED_TABLE (Hive managed table), EXTERNAL_TABLE (Hive external table), VIRTUAL_VIEW (virtual view), MATERIALIZED_VIEW (materialized view), LATERAL_VIEW, INDEX_TABLE (index table), END_SELECT (query structure), INSTANCE (intermediate temporary table type (data lineage)), CDW (CDW table type)
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $MetaCrawlType;

    /**
     * @var boolean Is View
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $IsView;

    /**
     * @var string Storage locationNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Location;

    /**
     * @var integer Determine if it is a partitioned table 1 Yes 0 No
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $IsPartitionTable;

    /**
     * @var array Partition Field Key
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $PartitionColumns;

    /**
     * @var integer Lifecycle - Partition Retention Days [Valid when Partition Retention Policy is applied]
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $PartitionExpireDays;

    /**
     * @var array Table Ancillary Information
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableProperties;

    /**
     * @param string $TableId Global Unique ID of the Table
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TableName Table NameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $TableOwnerName Person in ChargeNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $DatasourceId Data Source Global Unique ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ClusterName Cluster Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DatasourceName Data Source Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DatabaseName Database nameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $TablePath Table Path
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TableNameCn Chinese Table Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $MetastoreId Metadata Tenant ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $MetastoreType Technology Type, available values: HIVE,MYSQL,KAFKA, HBASE
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Description Table Description
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ColumnSeparator Column Separator
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $StorageFormat Storage Format
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $StorageSize Storage Volume, Byte Count
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TableType Table Types, such as hive MANAGED_TABLE;EXTERNAL_TABLE
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CreateTime Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ModifyTime Latest Data Modification Time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DdlModifyTime Latest DDL Modification Time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $LastAccessTime Last Access Time of Data
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProjectName Project Name in English
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $BizCatalogIds Data Directory ID (may be multiple)
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $BizCatalogNames Data Directory (may be multiple)
Note: This field may return null, indicating that no valid value can be obtained.
     * @param boolean $HasFavorite true for Favorited/false indicates not favorited
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $LifeCycleTime LifecycleNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $StorageSizeWithUnit Storage Volume, displayed in appropriate units
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $InstanceId Instance ID of the Data Source Engine: e.g., EMR Cluster Instance ID/Data Source Instance ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TechnologyType Data Source Technology Type: HIVE/MYSQL/HBASE/KAFKA etc.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TableNameEn Table English Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProjectId Project IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $Partitions Number of partitions in Kafka Topic
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ReplicationFactor Number of replicas in Kafka Topic
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProjectDisplayName Project English and Chinese Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DataModifyTime Last Modified Time of Data
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ClusterId Cluster ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param boolean $HasAdminAuthority Current user has Administrator Privileges
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DatasourceDisplayName Data Source Display Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DatabaseId Database ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $FavoriteCount Total favorites on the table under the tenant
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $LikeCount Total likes on the table under the tenant
Note: This field may return null, indicating that no valid value can be obtained.
     * @param boolean $HasLike true for liked/false for not liked status
Note: This field may return null, indicating that no valid value can be obtained.
     * @param TablePropertyScore $TablePropertyScore Asset score of the table
Note: This field may return null, indicating that no valid value can be obtained.
     * @param TableHeat $TableHeat Heat value of the table
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $OwnerProjectId Data source ownerProjectId
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TableOwnerId Table Owner ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DataSourceCategory System Source -CLUSTER, DB - Self Definition Source
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $Columns Table Field Information
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $MetaCrawlType Table Collection Type
TABLE, VIEW, MANAGED_TABLE (Hive managed table), EXTERNAL_TABLE (Hive external table), VIRTUAL_VIEW (virtual view), MATERIALIZED_VIEW (materialized view), LATERAL_VIEW, INDEX_TABLE (index table), END_SELECT (query structure), INSTANCE (intermediate temporary table type (data lineage)), CDW (CDW table type)
Note: This field may return null, indicating that no valid value can be obtained.
     * @param boolean $IsView Is View
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Location Storage locationNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $IsPartitionTable Determine if it is a partitioned table 1 Yes 0 No
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $PartitionColumns Partition Field Key
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $PartitionExpireDays Lifecycle - Partition Retention Days [Valid when Partition Retention Policy is applied]
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $TableProperties Table Ancillary Information
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

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("TableOwnerName",$param) and $param["TableOwnerName"] !== null) {
            $this->TableOwnerName = $param["TableOwnerName"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("DatasourceName",$param) and $param["DatasourceName"] !== null) {
            $this->DatasourceName = $param["DatasourceName"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("TablePath",$param) and $param["TablePath"] !== null) {
            $this->TablePath = $param["TablePath"];
        }

        if (array_key_exists("TableNameCn",$param) and $param["TableNameCn"] !== null) {
            $this->TableNameCn = $param["TableNameCn"];
        }

        if (array_key_exists("MetastoreId",$param) and $param["MetastoreId"] !== null) {
            $this->MetastoreId = $param["MetastoreId"];
        }

        if (array_key_exists("MetastoreType",$param) and $param["MetastoreType"] !== null) {
            $this->MetastoreType = $param["MetastoreType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ColumnSeparator",$param) and $param["ColumnSeparator"] !== null) {
            $this->ColumnSeparator = $param["ColumnSeparator"];
        }

        if (array_key_exists("StorageFormat",$param) and $param["StorageFormat"] !== null) {
            $this->StorageFormat = $param["StorageFormat"];
        }

        if (array_key_exists("StorageSize",$param) and $param["StorageSize"] !== null) {
            $this->StorageSize = $param["StorageSize"];
        }

        if (array_key_exists("TableType",$param) and $param["TableType"] !== null) {
            $this->TableType = $param["TableType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("DdlModifyTime",$param) and $param["DdlModifyTime"] !== null) {
            $this->DdlModifyTime = $param["DdlModifyTime"];
        }

        if (array_key_exists("LastAccessTime",$param) and $param["LastAccessTime"] !== null) {
            $this->LastAccessTime = $param["LastAccessTime"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("BizCatalogIds",$param) and $param["BizCatalogIds"] !== null) {
            $this->BizCatalogIds = $param["BizCatalogIds"];
        }

        if (array_key_exists("BizCatalogNames",$param) and $param["BizCatalogNames"] !== null) {
            $this->BizCatalogNames = $param["BizCatalogNames"];
        }

        if (array_key_exists("HasFavorite",$param) and $param["HasFavorite"] !== null) {
            $this->HasFavorite = $param["HasFavorite"];
        }

        if (array_key_exists("LifeCycleTime",$param) and $param["LifeCycleTime"] !== null) {
            $this->LifeCycleTime = $param["LifeCycleTime"];
        }

        if (array_key_exists("StorageSizeWithUnit",$param) and $param["StorageSizeWithUnit"] !== null) {
            $this->StorageSizeWithUnit = $param["StorageSizeWithUnit"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("TechnologyType",$param) and $param["TechnologyType"] !== null) {
            $this->TechnologyType = $param["TechnologyType"];
        }

        if (array_key_exists("TableNameEn",$param) and $param["TableNameEn"] !== null) {
            $this->TableNameEn = $param["TableNameEn"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Partitions",$param) and $param["Partitions"] !== null) {
            $this->Partitions = $param["Partitions"];
        }

        if (array_key_exists("ReplicationFactor",$param) and $param["ReplicationFactor"] !== null) {
            $this->ReplicationFactor = $param["ReplicationFactor"];
        }

        if (array_key_exists("ProjectDisplayName",$param) and $param["ProjectDisplayName"] !== null) {
            $this->ProjectDisplayName = $param["ProjectDisplayName"];
        }

        if (array_key_exists("DataModifyTime",$param) and $param["DataModifyTime"] !== null) {
            $this->DataModifyTime = $param["DataModifyTime"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("HasAdminAuthority",$param) and $param["HasAdminAuthority"] !== null) {
            $this->HasAdminAuthority = $param["HasAdminAuthority"];
        }

        if (array_key_exists("DatasourceDisplayName",$param) and $param["DatasourceDisplayName"] !== null) {
            $this->DatasourceDisplayName = $param["DatasourceDisplayName"];
        }

        if (array_key_exists("DatabaseId",$param) and $param["DatabaseId"] !== null) {
            $this->DatabaseId = $param["DatabaseId"];
        }

        if (array_key_exists("FavoriteCount",$param) and $param["FavoriteCount"] !== null) {
            $this->FavoriteCount = $param["FavoriteCount"];
        }

        if (array_key_exists("LikeCount",$param) and $param["LikeCount"] !== null) {
            $this->LikeCount = $param["LikeCount"];
        }

        if (array_key_exists("HasLike",$param) and $param["HasLike"] !== null) {
            $this->HasLike = $param["HasLike"];
        }

        if (array_key_exists("TablePropertyScore",$param) and $param["TablePropertyScore"] !== null) {
            $this->TablePropertyScore = new TablePropertyScore();
            $this->TablePropertyScore->deserialize($param["TablePropertyScore"]);
        }

        if (array_key_exists("TableHeat",$param) and $param["TableHeat"] !== null) {
            $this->TableHeat = new TableHeat();
            $this->TableHeat->deserialize($param["TableHeat"]);
        }

        if (array_key_exists("OwnerProjectId",$param) and $param["OwnerProjectId"] !== null) {
            $this->OwnerProjectId = $param["OwnerProjectId"];
        }

        if (array_key_exists("TableOwnerId",$param) and $param["TableOwnerId"] !== null) {
            $this->TableOwnerId = $param["TableOwnerId"];
        }

        if (array_key_exists("DataSourceCategory",$param) and $param["DataSourceCategory"] !== null) {
            $this->DataSourceCategory = $param["DataSourceCategory"];
        }

        if (array_key_exists("Columns",$param) and $param["Columns"] !== null) {
            $this->Columns = [];
            foreach ($param["Columns"] as $key => $value){
                $obj = new SearchColumnDocVO();
                $obj->deserialize($value);
                array_push($this->Columns, $obj);
            }
        }

        if (array_key_exists("MetaCrawlType",$param) and $param["MetaCrawlType"] !== null) {
            $this->MetaCrawlType = $param["MetaCrawlType"];
        }

        if (array_key_exists("IsView",$param) and $param["IsView"] !== null) {
            $this->IsView = $param["IsView"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("IsPartitionTable",$param) and $param["IsPartitionTable"] !== null) {
            $this->IsPartitionTable = $param["IsPartitionTable"];
        }

        if (array_key_exists("PartitionColumns",$param) and $param["PartitionColumns"] !== null) {
            $this->PartitionColumns = $param["PartitionColumns"];
        }

        if (array_key_exists("PartitionExpireDays",$param) and $param["PartitionExpireDays"] !== null) {
            $this->PartitionExpireDays = $param["PartitionExpireDays"];
        }

        if (array_key_exists("TableProperties",$param) and $param["TableProperties"] !== null) {
            $this->TableProperties = [];
            foreach ($param["TableProperties"] as $key => $value){
                $obj = new TableMetaProperty();
                $obj->deserialize($value);
                array_push($this->TableProperties, $obj);
            }
        }
    }
}
