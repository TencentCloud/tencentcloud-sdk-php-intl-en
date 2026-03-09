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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Database information
 *
 * @method string getGuid() Obtain Database GUID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGuid(string $Guid) Set Database GUID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain Database name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Database name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCatalogName() Obtain Database catalog.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCatalogName(string $CatalogName) Set Database catalog.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Repository description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Repository description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLocation() Obtain Database location.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLocation(string $Location) Set Database location.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStorageSize() Obtain Database storage size.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStorageSize(integer $StorageSize) Set Database storage size.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDatasourceId() Obtain Data source ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDatasourceId(integer $DatasourceId) Set Data source ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDatasourceType() Obtain Data source type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDatasourceType(string $DatasourceType) Set Data source type.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DatabaseInfo extends AbstractModel
{
    /**
     * @var string Database GUID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Guid;

    /**
     * @var string Database name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Database catalog.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CatalogName;

    /**
     * @var string Repository description.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string Database location.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Location;

    /**
     * @var integer Database storage size.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StorageSize;

    /**
     * @var integer Data source ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DatasourceId;

    /**
     * @var string Data source type.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DatasourceType;

    /**
     * @param string $Guid Database GUID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name Database name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CatalogName Database catalog.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Description Repository description.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Location Database location.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StorageSize Database storage size.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DatasourceId Data source ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DatasourceType Data source type.
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
        if (array_key_exists("Guid",$param) and $param["Guid"] !== null) {
            $this->Guid = $param["Guid"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CatalogName",$param) and $param["CatalogName"] !== null) {
            $this->CatalogName = $param["CatalogName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("StorageSize",$param) and $param["StorageSize"] !== null) {
            $this->StorageSize = $param["StorageSize"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("DatasourceType",$param) and $param["DatasourceType"] !== null) {
            $this->DatasourceType = $param["DatasourceType"];
        }
    }
}
