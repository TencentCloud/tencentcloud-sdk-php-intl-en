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
 * Data Quality Data Source Database
 *
 * @method string getDatasourceName() Obtain Data source name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatasourceName(string $DatasourceName) Set Data source name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDatasourceId() Obtain Data Source IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatasourceId(string $DatasourceId) Set Data Source IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getDatabaseName() Obtain Database nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatabaseName(string $DatabaseName) Set Database nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getDatabaseId() Obtain Database id
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatabaseId(string $DatabaseId) Set Database id
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getInstanceId() Obtain Instance Id
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Instance Id
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getDatasourceType() Obtain Data source typeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatasourceType(integer $DatasourceType) Set Data source typeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getOriginDatabaseName() Obtain Database Original Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOriginDatabaseName(string $OriginDatabaseName) Set Database Original Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getOriginSchemaName() Obtain Schema NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setOriginSchemaName(string $OriginSchemaName) Set Schema NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getDsEnvType() Obtain 0 or Not Returned. Undefined, 1. generation 2. development
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDsEnvType(integer $DsEnvType) Set 0 or Not Returned. Undefined, 1. generation 2. development
Note: This field may return null, indicating that no valid value can be obtained.
 */
class DatabaseInfo extends AbstractModel
{
    /**
     * @var string Data source name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatasourceName;

    /**
     * @var string Data Source IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatasourceId;

    /**
     * @var string Database nameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatabaseName;

    /**
     * @var string Database id
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatabaseId;

    /**
     * @var string Instance Id
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InstanceId;

    /**
     * @var integer Data source typeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatasourceType;

    /**
     * @var string Database Original Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $OriginDatabaseName;

    /**
     * @var string Schema NameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $OriginSchemaName;

    /**
     * @var integer 0 or Not Returned. Undefined, 1. generation 2. development
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DsEnvType;

    /**
     * @param string $DatasourceName Data source name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DatasourceId Data Source IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $DatabaseName Database nameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $DatabaseId Database id
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $InstanceId Instance Id
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $DatasourceType Data source typeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $OriginDatabaseName Database Original Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $OriginSchemaName Schema NameNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $DsEnvType 0 or Not Returned. Undefined, 1. generation 2. development
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
        if (array_key_exists("DatasourceName",$param) and $param["DatasourceName"] !== null) {
            $this->DatasourceName = $param["DatasourceName"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("DatabaseId",$param) and $param["DatabaseId"] !== null) {
            $this->DatabaseId = $param["DatabaseId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DatasourceType",$param) and $param["DatasourceType"] !== null) {
            $this->DatasourceType = $param["DatasourceType"];
        }

        if (array_key_exists("OriginDatabaseName",$param) and $param["OriginDatabaseName"] !== null) {
            $this->OriginDatabaseName = $param["OriginDatabaseName"];
        }

        if (array_key_exists("OriginSchemaName",$param) and $param["OriginSchemaName"] !== null) {
            $this->OriginSchemaName = $param["OriginSchemaName"];
        }

        if (array_key_exists("DsEnvType",$param) and $param["DsEnvType"] !== null) {
            $this->DsEnvType = $param["DsEnvType"];
        }
    }
}
