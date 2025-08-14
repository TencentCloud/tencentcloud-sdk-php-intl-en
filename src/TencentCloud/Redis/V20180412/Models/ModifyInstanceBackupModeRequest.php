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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceBackupMode request structure.
 *
 * @method string getInstanceId() Obtain Instance ID, which can contain 12 to 36 characters.
 * @method void setInstanceId(string $InstanceId) Set Instance ID, which can contain 12 to 36 characters.
 * @method string getBackupMode() Obtain Backup mode:
 - SecondLevelBackup: second-level backup.
 - NormalLevelBackup: ordinary backup.
 * @method void setBackupMode(string $BackupMode) Set Backup mode:
 - SecondLevelBackup: second-level backup.
 - NormalLevelBackup: ordinary backup.
 */
class ModifyInstanceBackupModeRequest extends AbstractModel
{
    /**
     * @var string Instance ID, which can contain 12 to 36 characters.
     */
    public $InstanceId;

    /**
     * @var string Backup mode:
 - SecondLevelBackup: second-level backup.
 - NormalLevelBackup: ordinary backup.
     */
    public $BackupMode;

    /**
     * @param string $InstanceId Instance ID, which can contain 12 to 36 characters.
     * @param string $BackupMode Backup mode:
 - SecondLevelBackup: second-level backup.
 - NormalLevelBackup: ordinary backup.
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

        if (array_key_exists("BackupMode",$param) and $param["BackupMode"] !== null) {
            $this->BackupMode = $param["BackupMode"];
        }
    }
}
