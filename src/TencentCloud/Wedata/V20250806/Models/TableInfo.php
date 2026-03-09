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
 * @method string getGuid() Obtain Data table GUID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGuid(string $Guid) Set Data table GUID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain Data table name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Data table name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Table description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Table description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDatabaseName() Obtain Database name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDatabaseName(string $DatabaseName) Set Database name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSchemaName() Obtain Schema name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSchemaName(string $SchemaName) Set Schema name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTableType() Obtain Table type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTableType(string $TableType) Set Table type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time.


Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time.


Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method TechnicalMetadata getTechnicalMetadata() Obtain Technical metadata of the table.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTechnicalMetadata(TechnicalMetadata $TechnicalMetadata) Set Technical metadata of the table.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method BusinessMetadata getBusinessMetadata() Obtain Business metadata of the table.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBusinessMetadata(BusinessMetadata $BusinessMetadata) Set Business metadata of the table.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCatalogName() Obtain Data catalog.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCatalogName(string $CatalogName) Set Data catalog.
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
class TableInfo extends AbstractModel
{
    /**
     * @var string Data table GUID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Guid;

    /**
     * @var string Data table name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Table description.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string Database name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DatabaseName;

    /**
     * @var string Schema name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SchemaName;

    /**
     * @var string Table type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TableType;

    /**
     * @var string Creation time.


Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Update time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var TechnicalMetadata Technical metadata of the table.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TechnicalMetadata;

    /**
     * @var BusinessMetadata Business metadata of the table.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BusinessMetadata;

    /**
     * @var string Data catalog.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CatalogName;

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
     * @param string $Guid Data table GUID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name Data table name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Description Table description.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DatabaseName Database name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SchemaName Schema name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TableType Table type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time.


Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime Update time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param TechnicalMetadata $TechnicalMetadata Technical metadata of the table.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param BusinessMetadata $BusinessMetadata Business metadata of the table.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CatalogName Data catalog.
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("TableType",$param) and $param["TableType"] !== null) {
            $this->TableType = $param["TableType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("TechnicalMetadata",$param) and $param["TechnicalMetadata"] !== null) {
            $this->TechnicalMetadata = new TechnicalMetadata();
            $this->TechnicalMetadata->deserialize($param["TechnicalMetadata"]);
        }

        if (array_key_exists("BusinessMetadata",$param) and $param["BusinessMetadata"] !== null) {
            $this->BusinessMetadata = new BusinessMetadata();
            $this->BusinessMetadata->deserialize($param["BusinessMetadata"]);
        }

        if (array_key_exists("CatalogName",$param) and $param["CatalogName"] !== null) {
            $this->CatalogName = $param["CatalogName"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("DatasourceType",$param) and $param["DatasourceType"] !== null) {
            $this->DatasourceType = $param["DatasourceType"];
        }
    }
}
