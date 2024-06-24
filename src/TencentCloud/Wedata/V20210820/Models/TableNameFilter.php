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
 * Query conditions by Table Name
 *
 * @method string getMsType() Obtain Data source type
 * @method void setMsType(string $MsType) Set Data source type
 * @method integer getDatasourceId() Obtain Data source ID
 * @method void setDatasourceId(integer $DatasourceId) Set Data source ID
 * @method string getDatabaseName() Obtain Database name
 * @method void setDatabaseName(string $DatabaseName) Set Database name
 * @method string getSchemaName() Obtain schema
 * @method void setSchemaName(string $SchemaName) Set schema
 * @method string getName() Obtain Table name
 * @method void setName(string $Name) Set Table name
 */
class TableNameFilter extends AbstractModel
{
    /**
     * @var string Data source type
     */
    public $MsType;

    /**
     * @var integer Data source ID
     */
    public $DatasourceId;

    /**
     * @var string Database name
     */
    public $DatabaseName;

    /**
     * @var string schema
     */
    public $SchemaName;

    /**
     * @var string Table name
     */
    public $Name;

    /**
     * @param string $MsType Data source type
     * @param integer $DatasourceId Data source ID
     * @param string $DatabaseName Database name
     * @param string $SchemaName schema
     * @param string $Name Table name
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
        if (array_key_exists("MsType",$param) and $param["MsType"] !== null) {
            $this->MsType = $param["MsType"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
