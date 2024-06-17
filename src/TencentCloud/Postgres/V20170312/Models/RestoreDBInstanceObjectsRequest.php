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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RestoreDBInstanceObjects request structure.
 *
 * @method string getDBInstanceId() Obtain Instance ID.
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID.
 * @method array getRestoreObjects() Obtain List of objects to be restored. If the object to be restored is named test, the restored name will be `test_bak_${LinuxTime}`. `${LinuxTime}` cannot be specified and is set by the system based on the Linux time at task initiation.
 * @method void setRestoreObjects(array $RestoreObjects) Set List of objects to be restored. If the object to be restored is named test, the restored name will be `test_bak_${LinuxTime}`. `${LinuxTime}` cannot be specified and is set by the system based on the Linux time at task initiation.
 * @method string getBackupSetId() Obtain Backup set used for recovery. Either `BackupSetId` or `RestoreTargetTime` must be provided, and only one can be passed.
 * @method void setBackupSetId(string $BackupSetId) Set Backup set used for recovery. Either `BackupSetId` or `RestoreTargetTime` must be provided, and only one can be passed.
 * @method string getRestoreTargetTime() Obtain Recovery target time, Beijing Time (UTC+8). Either `BackupSetId` or `RestoreTargetTime` must be provided, and only one can be passed.
 * @method void setRestoreTargetTime(string $RestoreTargetTime) Set Recovery target time, Beijing Time (UTC+8). Either `BackupSetId` or `RestoreTargetTime` must be provided, and only one can be passed.
 */
class RestoreDBInstanceObjectsRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $DBInstanceId;

    /**
     * @var array List of objects to be restored. If the object to be restored is named test, the restored name will be `test_bak_${LinuxTime}`. `${LinuxTime}` cannot be specified and is set by the system based on the Linux time at task initiation.
     */
    public $RestoreObjects;

    /**
     * @var string Backup set used for recovery. Either `BackupSetId` or `RestoreTargetTime` must be provided, and only one can be passed.
     */
    public $BackupSetId;

    /**
     * @var string Recovery target time, Beijing Time (UTC+8). Either `BackupSetId` or `RestoreTargetTime` must be provided, and only one can be passed.
     */
    public $RestoreTargetTime;

    /**
     * @param string $DBInstanceId Instance ID.
     * @param array $RestoreObjects List of objects to be restored. If the object to be restored is named test, the restored name will be `test_bak_${LinuxTime}`. `${LinuxTime}` cannot be specified and is set by the system based on the Linux time at task initiation.
     * @param string $BackupSetId Backup set used for recovery. Either `BackupSetId` or `RestoreTargetTime` must be provided, and only one can be passed.
     * @param string $RestoreTargetTime Recovery target time, Beijing Time (UTC+8). Either `BackupSetId` or `RestoreTargetTime` must be provided, and only one can be passed.
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("RestoreObjects",$param) and $param["RestoreObjects"] !== null) {
            $this->RestoreObjects = $param["RestoreObjects"];
        }

        if (array_key_exists("BackupSetId",$param) and $param["BackupSetId"] !== null) {
            $this->BackupSetId = $param["BackupSetId"];
        }

        if (array_key_exists("RestoreTargetTime",$param) and $param["RestoreTargetTime"] !== null) {
            $this->RestoreTargetTime = $param["RestoreTargetTime"];
        }
    }
}
