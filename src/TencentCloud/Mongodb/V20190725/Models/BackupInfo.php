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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Backup information
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method integer getBackupType() Obtain Backup mode. 0: automatic backup; 1: manual backup
 * @method void setBackupType(integer $BackupType) Set Backup mode. 0: automatic backup; 1: manual backup
 * @method string getBackupName() Obtain Backup name
 * @method void setBackupName(string $BackupName) Set Backup name
 * @method string getBackupDesc() Obtain Backup remarks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBackupDesc(string $BackupDesc) Set Backup remarks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBackupSize() Obtain Backup file size in KB
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBackupSize(integer $BackupSize) Set Backup file size in KB
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStartTime() Obtain Backup start time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartTime(string $StartTime) Set Backup start time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEndTime() Obtain Backup end time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(string $EndTime) Set Backup end time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Backup status. 1: backing up; 2: backed up successful
 * @method void setStatus(integer $Status) Set Backup status. 1: backing up; 2: backed up successful
 * @method integer getBackupMethod() Obtain Backup method. 0: logical backup; 1: physical backup
 * @method void setBackupMethod(integer $BackupMethod) Set Backup method. 0: logical backup; 1: physical backup
 */
class BackupInfo extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var integer Backup mode. 0: automatic backup; 1: manual backup
     */
    public $BackupType;

    /**
     * @var string Backup name
     */
    public $BackupName;

    /**
     * @var string Backup remarks
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BackupDesc;

    /**
     * @var integer Backup file size in KB
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BackupSize;

    /**
     * @var string Backup start time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @var string Backup end time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var integer Backup status. 1: backing up; 2: backed up successful
     */
    public $Status;

    /**
     * @var integer Backup method. 0: logical backup; 1: physical backup
     */
    public $BackupMethod;

    /**
     * @param string $InstanceId Instance ID
     * @param integer $BackupType Backup mode. 0: automatic backup; 1: manual backup
     * @param string $BackupName Backup name
     * @param string $BackupDesc Backup remarks
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $BackupSize Backup file size in KB
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StartTime Backup start time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EndTime Backup end time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Backup status. 1: backing up; 2: backed up successful
     * @param integer $BackupMethod Backup method. 0: logical backup; 1: physical backup
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

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("BackupName",$param) and $param["BackupName"] !== null) {
            $this->BackupName = $param["BackupName"];
        }

        if (array_key_exists("BackupDesc",$param) and $param["BackupDesc"] !== null) {
            $this->BackupDesc = $param["BackupDesc"];
        }

        if (array_key_exists("BackupSize",$param) and $param["BackupSize"] !== null) {
            $this->BackupSize = $param["BackupSize"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }
    }
}
