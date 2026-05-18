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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RestoreDBInstance request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance ID. Log in to the <a href="https://console.cloud.tencent.com/mongodb/instance">MongoDB console</a> and copy the instance ID from the instance list.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID. Log in to the <a href="https://console.cloud.tencent.com/mongodb/instance">MongoDB console</a> and copy the instance ID from the instance list.</p>
 * @method string getRestoreTime() Obtain <p>Specify the target time point to roll back. The time must be in the backup retention period of the instance.</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method void setRestoreTime(string $RestoreTime) Set <p>Specify the target time point to roll back. The time must be in the backup retention period of the instance.</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method array getDatabases() Obtain <p>Database table information to be rolled back.</p>
 * @method void setDatabases(array $Databases) Set <p>Database table information to be rolled back.</p>
 */
class RestoreDBInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>Instance ID. Log in to the <a href="https://console.cloud.tencent.com/mongodb/instance">MongoDB console</a> and copy the instance ID from the instance list.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Specify the target time point to roll back. The time must be in the backup retention period of the instance.</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     */
    public $RestoreTime;

    /**
     * @var array <p>Database table information to be rolled back.</p>
     */
    public $Databases;

    /**
     * @param string $InstanceId <p>Instance ID. Log in to the <a href="https://console.cloud.tencent.com/mongodb/instance">MongoDB console</a> and copy the instance ID from the instance list.</p>
     * @param string $RestoreTime <p>Specify the target time point to roll back. The time must be in the backup retention period of the instance.</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     * @param array $Databases <p>Database table information to be rolled back.</p>
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

        if (array_key_exists("RestoreTime",$param) and $param["RestoreTime"] !== null) {
            $this->RestoreTime = $param["RestoreTime"];
        }

        if (array_key_exists("Databases",$param) and $param["Databases"] !== null) {
            $this->Databases = [];
            foreach ($param["Databases"] as $key => $value){
                $obj = new RestoreDatabases();
                $obj->deserialize($value);
                array_push($this->Databases, $obj);
            }
        }
    }
}
