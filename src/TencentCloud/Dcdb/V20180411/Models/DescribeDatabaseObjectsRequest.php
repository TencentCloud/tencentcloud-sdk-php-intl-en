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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDatabaseObjects request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of dcdbt-ow7t8lmc.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of dcdbt-ow7t8lmc.
 * @method string getDbName() Obtain Database name, which can be obtained through the `DescribeDatabases` API.
 * @method void setDbName(string $DbName) Set Database name, which can be obtained through the `DescribeDatabases` API.
 */
class DescribeDatabaseObjectsRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of dcdbt-ow7t8lmc.
     */
    public $InstanceId;

    /**
     * @var string Database name, which can be obtained through the `DescribeDatabases` API.
     */
    public $DbName;

    /**
     * @param string $InstanceId Instance ID in the format of dcdbt-ow7t8lmc.
     * @param string $DbName Database name, which can be obtained through the `DescribeDatabases` API.
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
