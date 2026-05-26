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
 * Task data registration item.
 *
 * @method string getDatasourceId() Obtain Data source ID.
 * @method void setDatasourceId(string $DatasourceId) Set Data source ID.
 * @method string getDatabaseName() Obtain Database name.

 * @method void setDatabaseName(string $DatabaseName) Set Database name.

 * @method string getTableName() Obtain Table name

 * @method void setTableName(string $TableName) Set Table name

 * @method string getPartitionName() Obtain Partition name

 * @method void setPartitionName(string $PartitionName) Set Partition name

 * @method string getDataFlowType() Obtain Input output table data type.
Input stream:
 UPSTREAM,
Output stream:
  DOWNSTREAM;.
 * @method void setDataFlowType(string $DataFlowType) Set Input output table data type.
Input stream:
 UPSTREAM,
Output stream:
  DOWNSTREAM;.
 * @method string getTablePhysicalId() Obtain Physical unique ID..
 * @method void setTablePhysicalId(string $TablePhysicalId) Set Physical unique ID..
 * @method string getDbGuid() Obtain Database unique id..
 * @method void setDbGuid(string $DbGuid) Set Database unique id..
 * @method string getTableGuid() Obtain Unique id of the table.
 * @method void setTableGuid(string $TableGuid) Set Unique id of the table.
 * @method string getCatalogName() Obtain Catalog name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCatalogName(string $CatalogName) Set Catalog name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDatasourceName() Obtain Data source name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDatasourceName(string $DatasourceName) Set Data source name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getQualifiedName() Obtain Catalog (if any).Database (if any).Table name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQualifiedName(string $QualifiedName) Set Catalog (if any).Database (if any).Table name
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TaskDataRegistry extends AbstractModel
{
    /**
     * @var string Data source ID.
     */
    public $DatasourceId;

    /**
     * @var string Database name.

     */
    public $DatabaseName;

    /**
     * @var string Table name

     */
    public $TableName;

    /**
     * @var string Partition name

     */
    public $PartitionName;

    /**
     * @var string Input output table data type.
Input stream:
 UPSTREAM,
Output stream:
  DOWNSTREAM;.
     */
    public $DataFlowType;

    /**
     * @var string Physical unique ID..
     */
    public $TablePhysicalId;

    /**
     * @var string Database unique id..
     */
    public $DbGuid;

    /**
     * @var string Unique id of the table.
     */
    public $TableGuid;

    /**
     * @var string Catalog name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CatalogName;

    /**
     * @var string Data source name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DatasourceName;

    /**
     * @var string Catalog (if any).Database (if any).Table name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $QualifiedName;

    /**
     * @param string $DatasourceId Data source ID.
     * @param string $DatabaseName Database name.

     * @param string $TableName Table name

     * @param string $PartitionName Partition name

     * @param string $DataFlowType Input output table data type.
Input stream:
 UPSTREAM,
Output stream:
  DOWNSTREAM;.
     * @param string $TablePhysicalId Physical unique ID..
     * @param string $DbGuid Database unique id..
     * @param string $TableGuid Unique id of the table.
     * @param string $CatalogName Catalog name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DatasourceName Data source name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $QualifiedName Catalog (if any).Database (if any).Table name
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
        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("PartitionName",$param) and $param["PartitionName"] !== null) {
            $this->PartitionName = $param["PartitionName"];
        }

        if (array_key_exists("DataFlowType",$param) and $param["DataFlowType"] !== null) {
            $this->DataFlowType = $param["DataFlowType"];
        }

        if (array_key_exists("TablePhysicalId",$param) and $param["TablePhysicalId"] !== null) {
            $this->TablePhysicalId = $param["TablePhysicalId"];
        }

        if (array_key_exists("DbGuid",$param) and $param["DbGuid"] !== null) {
            $this->DbGuid = $param["DbGuid"];
        }

        if (array_key_exists("TableGuid",$param) and $param["TableGuid"] !== null) {
            $this->TableGuid = $param["TableGuid"];
        }

        if (array_key_exists("CatalogName",$param) and $param["CatalogName"] !== null) {
            $this->CatalogName = $param["CatalogName"];
        }

        if (array_key_exists("DatasourceName",$param) and $param["DatasourceName"] !== null) {
            $this->DatasourceName = $param["DatasourceName"];
        }

        if (array_key_exists("QualifiedName",$param) and $param["QualifiedName"] !== null) {
            $this->QualifiedName = $param["QualifiedName"];
        }
    }
}
