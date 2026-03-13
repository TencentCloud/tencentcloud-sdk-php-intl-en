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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDatabaseTable request structure.
 *
 * @method string getInstanceId() Obtain Instance ID, for example: tdsql3-ow7t8lmc.
 * @method void setInstanceId(string $InstanceId) Set Instance ID, for example: tdsql3-ow7t8lmc.
 * @method string getDbName() Obtain Database name, obtained via the DescribeDatabases api.
 * @method void setDbName(string $DbName) Set Database name, obtained via the DescribeDatabases api.
 * @method string getTable() Obtain Table name, obtained through the DescribeDatabaseObjects api.
 * @method void setTable(string $Table) Set Table name, obtained through the DescribeDatabaseObjects api.
 */
class DescribeDatabaseTableRequest extends AbstractModel
{
    /**
     * @var string Instance ID, for example: tdsql3-ow7t8lmc.
     */
    public $InstanceId;

    /**
     * @var string Database name, obtained via the DescribeDatabases api.
     */
    public $DbName;

    /**
     * @var string Table name, obtained through the DescribeDatabaseObjects api.
     */
    public $Table;

    /**
     * @param string $InstanceId Instance ID, for example: tdsql3-ow7t8lmc.
     * @param string $DbName Database name, obtained via the DescribeDatabases api.
     * @param string $Table Table name, obtained through the DescribeDatabaseObjects api.
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
