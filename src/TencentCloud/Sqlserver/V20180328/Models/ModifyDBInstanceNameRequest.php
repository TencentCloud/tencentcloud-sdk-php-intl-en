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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceName request structure.
 *
 * @method string getInstanceId() Obtain Database instance ID in the format of mssql-njj2mtpl
 * @method void setInstanceId(string $InstanceId) Set Database instance ID in the format of mssql-njj2mtpl
 * @method string getInstanceName() Obtain New name of database instance
 * @method void setInstanceName(string $InstanceName) Set New name of database instance
 */
class ModifyDBInstanceNameRequest extends AbstractModel
{
    /**
     * @var string Database instance ID in the format of mssql-njj2mtpl
     */
    public $InstanceId;

    /**
     * @var string New name of database instance
     */
    public $InstanceName;

    /**
     * @param string $InstanceId Database instance ID in the format of mssql-njj2mtpl
     * @param string $InstanceName New name of database instance
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }
    }
}
