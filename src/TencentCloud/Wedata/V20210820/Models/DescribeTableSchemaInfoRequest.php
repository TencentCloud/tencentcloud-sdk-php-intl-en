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
 * DescribeTableSchemaInfo request structure.
 *
 * @method string getName() Obtain Table Name
 * @method void setName(string $Name) Set Table Name
 * @method string getDatabaseName() Obtain Database name
 * @method void setDatabaseName(string $DatabaseName) Set Database name
 * @method string getMsType() Obtain Data Source Types (e.g., MYSQL, HIVE, KAFKA, etc.)
 * @method void setMsType(string $MsType) Set Data Source Types (e.g., MYSQL, HIVE, KAFKA, etc.)
 * @method string getDatasourceId() Obtain Data source ID
 * @method void setDatasourceId(string $DatasourceId) Set Data source ID
 * @method string getConnectionType() Obtain Connection Type (example value: rpc)
 * @method void setConnectionType(string $ConnectionType) Set Connection Type (example value: rpc)
 * @method string getSchemaName() Obtain Schema Name under Metadata Database
 * @method void setSchemaName(string $SchemaName) Set Schema Name under Metadata Database
 */
class DescribeTableSchemaInfoRequest extends AbstractModel
{
    /**
     * @var string Table Name
     */
    public $Name;

    /**
     * @var string Database name
     */
    public $DatabaseName;

    /**
     * @var string Data Source Types (e.g., MYSQL, HIVE, KAFKA, etc.)
     */
    public $MsType;

    /**
     * @var string Data source ID
     */
    public $DatasourceId;

    /**
     * @var string Connection Type (example value: rpc)
     */
    public $ConnectionType;

    /**
     * @var string Schema Name under Metadata Database
     */
    public $SchemaName;

    /**
     * @param string $Name Table Name
     * @param string $DatabaseName Database name
     * @param string $MsType Data Source Types (e.g., MYSQL, HIVE, KAFKA, etc.)
     * @param string $DatasourceId Data source ID
     * @param string $ConnectionType Connection Type (example value: rpc)
     * @param string $SchemaName Schema Name under Metadata Database
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("MsType",$param) and $param["MsType"] !== null) {
            $this->MsType = $param["MsType"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("ConnectionType",$param) and $param["ConnectionType"] !== null) {
            $this->ConnectionType = $param["ConnectionType"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }
    }
}
