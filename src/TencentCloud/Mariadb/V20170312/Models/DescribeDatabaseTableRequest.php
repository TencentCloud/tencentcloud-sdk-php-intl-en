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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDatabaseTable request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of `dcdbt-ow7t8lmc`.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of `dcdbt-ow7t8lmc`.
 * @method string getDbName() Obtain Database name, which can be obtained through the `DescribeDatabases` API.
 * @method void setDbName(string $DbName) Set Database name, which can be obtained through the `DescribeDatabases` API.
 * @method string getTable() Obtain Table name, which can be obtained through the `DescribeDatabaseObjects` API.
 * @method void setTable(string $Table) Set Table name, which can be obtained through the `DescribeDatabaseObjects` API.
 */
class DescribeDatabaseTableRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of `dcdbt-ow7t8lmc`.
     */
    public $InstanceId;

    /**
     * @var string Database name, which can be obtained through the `DescribeDatabases` API.
     */
    public $DbName;

    /**
     * @var string Table name, which can be obtained through the `DescribeDatabaseObjects` API.
     */
    public $Table;

    /**
     * @param string $InstanceId Instance ID in the format of `dcdbt-ow7t8lmc`.
     * @param string $DbName Database name, which can be obtained through the `DescribeDatabases` API.
     * @param string $Table Table name, which can be obtained through the `DescribeDatabaseObjects` API.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }
    }
}
