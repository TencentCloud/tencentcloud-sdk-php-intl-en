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
 * CreateBackupDBInstance request structure.
 *
 * @method string getInstanceId() Obtain Instance ID. For example, cmgo-p8vn****. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/MongoDB) and copy the instance ID from the instance list.
 * @method void setInstanceId(string $InstanceId) Set Instance ID. For example, cmgo-p8vn****. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/MongoDB) and copy the instance ID from the instance list.
 * @method integer getBackupMethod() Obtain Sets the backup method.
 - 0: logical backup.
 - 1: physical backup.
 * @method void setBackupMethod(integer $BackupMethod) Set Sets the backup method.
 - 0: logical backup.
 - 1: physical backup.
 * @method string getBackupRemark() Obtain Backup remarks information.
 * @method void setBackupRemark(string $BackupRemark) Set Backup remarks information.
 */
class CreateBackupDBInstanceRequest extends AbstractModel
{
    /**
     * @var string Instance ID. For example, cmgo-p8vn****. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/MongoDB) and copy the instance ID from the instance list.
     */
    public $InstanceId;

    /**
     * @var integer Sets the backup method.
 - 0: logical backup.
 - 1: physical backup.
     */
    public $BackupMethod;

    /**
     * @var string Backup remarks information.
     */
    public $BackupRemark;

    /**
     * @param string $InstanceId Instance ID. For example, cmgo-p8vn****. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/MongoDB) and copy the instance ID from the instance list.
     * @param integer $BackupMethod Sets the backup method.
 - 0: logical backup.
 - 1: physical backup.
     * @param string $BackupRemark Backup remarks information.
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

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }

        if (array_key_exists("BackupRemark",$param) and $param["BackupRemark"] !== null) {
            $this->BackupRemark = $param["BackupRemark"];
        }
    }
}
