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
 * DescribeDatabaseObjects request structure.
 *
 * @method string getInstanceId() Obtain Instance ID, for example: tdsql3-42f40429.
 * @method void setInstanceId(string $InstanceId) Set Instance ID, for example: tdsql3-42f40429.
 * @method string getDbName() Obtain Database name, obtained via the DescribeDatabases api.
 * @method void setDbName(string $DbName) Set Database name, obtained via the DescribeDatabases api.
 */
class DescribeDatabaseObjectsRequest extends AbstractModel
{
    /**
     * @var string Instance ID, for example: tdsql3-42f40429.
     */
    public $InstanceId;

    /**
     * @var string Database name, obtained via the DescribeDatabases api.
     */
    public $DbName;

    /**
     * @param string $InstanceId Instance ID, for example: tdsql3-42f40429.
     * @param string $DbName Database name, obtained via the DescribeDatabases api.
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
    }
}
