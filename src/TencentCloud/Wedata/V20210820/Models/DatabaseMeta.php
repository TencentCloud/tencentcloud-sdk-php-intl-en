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
 * Data Source Metadata
 *
 * @method string getProjectId() Obtain Project IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setProjectId(string $ProjectId) Set Project IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getMetastoreType() Obtain Technology Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMetastoreType(string $MetastoreType) Set Technology Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDatasourceName() Obtain Data Source Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatasourceName(string $DatasourceName) Set Data Source Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getDatasourceId() Obtain Data Source IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatasourceId(integer $DatasourceId) Set Data Source IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getProjectName() Obtain Project English Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setProjectName(string $ProjectName) Set Project English Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCategory() Obtain Data Source Category: Binding Engine, Binding Database, Available Values: DB, ENGINE
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCategory(string $Category) Set Data Source Category: Binding Engine, Binding Database, Available Values: DB, ENGINE
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDescription() Obtain Data source description informationNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setDescription(string $Description) Set Data source description informationNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getInstance() Obtain Instance ID of the data source engine, e.g., CDB Instance IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setInstance(string $Instance) Set Instance ID of the data source engine, e.g., CDB Instance IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getRegion() Obtain Data Source Engine Region
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRegion(string $Region) Set Data Source Engine Region
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getStatus() Obtain Visibility of the data source, where 1 is visible and 0 is not visible. Default is 1Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStatus(integer $Status) Set Visibility of the data source, where 1 is visible and 0 is not visible. Default is 1Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDatabaseName() Obtain Database Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatabaseName(string $DatabaseName) Set Database Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getProjectDisplayName() Obtain Project Chinese Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setProjectDisplayName(string $ProjectDisplayName) Set Project Chinese Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getOwnerAccountName() Obtain Person in Charge Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOwnerAccountName(string $OwnerAccountName) Set Person in Charge Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDisplayName() Obtain Data Source Display Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDisplayName(string $DisplayName) Set Data Source Display Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDatabaseId() Obtain Database ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatabaseId(string $DatabaseId) Set Database ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCatalog() Obtain Data Source Type: hive/mysql/hbase, etc.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCatalog(string $Catalog) Set Data Source Type: hive/mysql/hbase, etc.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getStorageSize() Obtain Storage Size in bytes
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStorageSize(integer $StorageSize) Set Storage Size in bytes
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getStorageSizeWithUnit() Obtain Formatted Storage Size, with unit, e.g., 12B
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStorageSizeWithUnit(string $StorageSizeWithUnit) Set Formatted Storage Size, with unit, e.g., 12B
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCreateTime() Obtain Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 */
class DatabaseMeta extends AbstractModel
{
    /**
     * @var string Project IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProjectId;

    /**
     * @var string Technology Type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $MetastoreType;

    /**
     * @var string Data Source Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatasourceName;

    /**
     * @var integer Data Source IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatasourceId;

    /**
     * @var string Project English Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProjectName;

    /**
     * @var string Data Source Category: Binding Engine, Binding Database, Available Values: DB, ENGINE
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Category;

    /**
     * @var string Data source description informationNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Description;

    /**
     * @var string Instance ID of the data source engine, e.g., CDB Instance IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Instance;

    /**
     * @var string Data Source Engine Region
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Region;

    /**
     * @var integer Visibility of the data source, where 1 is visible and 0 is not visible. Default is 1Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Status;

    /**
     * @var string Database Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatabaseName;

    /**
     * @var string Project Chinese Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProjectDisplayName;

    /**
     * @var string Person in Charge Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $OwnerAccountName;

    /**
     * @var string Data Source Display Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DisplayName;

    /**
     * @var string Database ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatabaseId;

    /**
     * @var string Data Source Type: hive/mysql/hbase, etc.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Catalog;

    /**
     * @var integer Storage Size in bytes
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $StorageSize;

    /**
     * @var string Formatted Storage Size, with unit, e.g., 12B
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $StorageSizeWithUnit;

    /**
     * @var string Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $CreateTime;

    /**
     * @param string $ProjectId Project IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $MetastoreType Technology Type
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DatasourceName Data Source Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $DatasourceId Data Source IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProjectName Project English Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Category Data Source Category: Binding Engine, Binding Database, Available Values: DB, ENGINE
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Description Data source description informationNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $Instance Instance ID of the data source engine, e.g., CDB Instance IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $Region Data Source Engine Region
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Status Visibility of the data source, where 1 is visible and 0 is not visible. Default is 1Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DatabaseName Database Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProjectDisplayName Project Chinese Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $OwnerAccountName Person in Charge Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DisplayName Data Source Display Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DatabaseId Database ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Catalog Data Source Type: hive/mysql/hbase, etc.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $StorageSize Storage Size in bytes
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $StorageSizeWithUnit Formatted Storage Size, with unit, e.g., 12B
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CreateTime Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
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

        if (array_key_exists("MetastoreType",$param) and $param["MetastoreType"] !== null) {
            $this->MetastoreType = $param["MetastoreType"];
        }

        if (array_key_exists("DatasourceName",$param) and $param["DatasourceName"] !== null) {
            $this->DatasourceName = $param["DatasourceName"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Instance",$param) and $param["Instance"] !== null) {
            $this->Instance = $param["Instance"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("ProjectDisplayName",$param) and $param["ProjectDisplayName"] !== null) {
            $this->ProjectDisplayName = $param["ProjectDisplayName"];
        }

        if (array_key_exists("OwnerAccountName",$param) and $param["OwnerAccountName"] !== null) {
            $this->OwnerAccountName = $param["OwnerAccountName"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("DatabaseId",$param) and $param["DatabaseId"] !== null) {
            $this->DatabaseId = $param["DatabaseId"];
        }

        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
        }

        if (array_key_exists("StorageSize",$param) and $param["StorageSize"] !== null) {
            $this->StorageSize = $param["StorageSize"];
        }

        if (array_key_exists("StorageSizeWithUnit",$param) and $param["StorageSizeWithUnit"] !== null) {
            $this->StorageSizeWithUnit = $param["StorageSizeWithUnit"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
