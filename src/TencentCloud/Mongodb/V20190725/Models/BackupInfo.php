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
 * Backup information.
 *
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method integer getBackupType() Obtain <p>Backup method.</p><ul><li>0: Automatic backup.</li><li>1: Manual backup.</li></ul>
 * @method void setBackupType(integer $BackupType) Set <p>Backup method.</p><ul><li>0: Automatic backup.</li><li>1: Manual backup.</li></ul>
 * @method string getBackupName() Obtain <p>Backup file name.</p>
 * @method void setBackupName(string $BackupName) Set <p>Backup file name.</p>
 * @method string getBackupDesc() Obtain <p>Backup task notes.</p>
 * @method void setBackupDesc(string $BackupDesc) Set <p>Backup task notes.</p>
 * @method integer getBackupSize() Obtain <p>Backup file size, in KB.</p>
 * @method void setBackupSize(integer $BackupSize) Set <p>Backup file size, in KB.</p>
 * @method string getStartTime() Obtain <p>Backup start time.</p>
 * @method void setStartTime(string $StartTime) Set <p>Backup start time.</p>
 * @method string getEndTime() Obtain <p>Backup end time.</p>
 * @method void setEndTime(string $EndTime) Set <p>Backup end time.</p>
 * @method integer getStatus() Obtain <p>Backup status.</p><ul><li>1: Backup in progress.</li><li>2: Backup successful.</li></ul>
 * @method void setStatus(integer $Status) Set <p>Backup status.</p><ul><li>1: Backup in progress.</li><li>2: Backup successful.</li></ul>
 * @method integer getBackupMethod() Obtain <p>Backup method.</p><ul><li>0: Logical backup.</li><li>1: Physical backup.</li><li>3: Snapshot backup.<br><strong>Description:</strong></li><li>The General Edition instance supports logical and physical backup. The Cloud Disk Edition instance supports physical and snapshot backup, but does not support logical backup currently.</li><li>If storage encryption is activated for the instance, physical backup is not supported.</li></ul>
 * @method void setBackupMethod(integer $BackupMethod) Set <p>Backup method.</p><ul><li>0: Logical backup.</li><li>1: Physical backup.</li><li>3: Snapshot backup.<br><strong>Description:</strong></li><li>The General Edition instance supports logical and physical backup. The Cloud Disk Edition instance supports physical and snapshot backup, but does not support logical backup currently.</li><li>If storage encryption is activated for the instance, physical backup is not supported.</li></ul>
 * @method integer getBackId() Obtain <p>Backup record ID.</p>
 * @method void setBackId(integer $BackId) Set <p>Backup record ID.</p>
 * @method string getDeleteTime() Obtain <p>Backup deletion time.</p>
 * @method void setDeleteTime(string $DeleteTime) Set <p>Backup deletion time.</p>
 * @method string getBackupRegion() Obtain <p>Backup region in a different location.</p>
 * @method void setBackupRegion(string $BackupRegion) Set <p>Backup region in a different location.</p>
 * @method string getRestoreTime() Obtain <p>Rollback time supported by the backup.</p>
 * @method void setRestoreTime(string $RestoreTime) Set <p>Rollback time supported by the backup.</p>
 */
class BackupInfo extends AbstractModel
{
    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>Backup method.</p><ul><li>0: Automatic backup.</li><li>1: Manual backup.</li></ul>
     */
    public $BackupType;

    /**
     * @var string <p>Backup file name.</p>
     */
    public $BackupName;

    /**
     * @var string <p>Backup task notes.</p>
     */
    public $BackupDesc;

    /**
     * @var integer <p>Backup file size, in KB.</p>
     */
    public $BackupSize;

    /**
     * @var string <p>Backup start time.</p>
     */
    public $StartTime;

    /**
     * @var string <p>Backup end time.</p>
     */
    public $EndTime;

    /**
     * @var integer <p>Backup status.</p><ul><li>1: Backup in progress.</li><li>2: Backup successful.</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>Backup method.</p><ul><li>0: Logical backup.</li><li>1: Physical backup.</li><li>3: Snapshot backup.<br><strong>Description:</strong></li><li>The General Edition instance supports logical and physical backup. The Cloud Disk Edition instance supports physical and snapshot backup, but does not support logical backup currently.</li><li>If storage encryption is activated for the instance, physical backup is not supported.</li></ul>
     */
    public $BackupMethod;

    /**
     * @var integer <p>Backup record ID.</p>
     */
    public $BackId;

    /**
     * @var string <p>Backup deletion time.</p>
     */
    public $DeleteTime;

    /**
     * @var string <p>Backup region in a different location.</p>
     */
    public $BackupRegion;

    /**
     * @var string <p>Rollback time supported by the backup.</p>
     */
    public $RestoreTime;

    /**
     * @param string $InstanceId <p>Instance ID.</p>
     * @param integer $BackupType <p>Backup method.</p><ul><li>0: Automatic backup.</li><li>1: Manual backup.</li></ul>
     * @param string $BackupName <p>Backup file name.</p>
     * @param string $BackupDesc <p>Backup task notes.</p>
     * @param integer $BackupSize <p>Backup file size, in KB.</p>
     * @param string $StartTime <p>Backup start time.</p>
     * @param string $EndTime <p>Backup end time.</p>
     * @param integer $Status <p>Backup status.</p><ul><li>1: Backup in progress.</li><li>2: Backup successful.</li></ul>
     * @param integer $BackupMethod <p>Backup method.</p><ul><li>0: Logical backup.</li><li>1: Physical backup.</li><li>3: Snapshot backup.<br><strong>Description:</strong></li><li>The General Edition instance supports logical and physical backup. The Cloud Disk Edition instance supports physical and snapshot backup, but does not support logical backup currently.</li><li>If storage encryption is activated for the instance, physical backup is not supported.</li></ul>
     * @param integer $BackId <p>Backup record ID.</p>
     * @param string $DeleteTime <p>Backup deletion time.</p>
     * @param string $BackupRegion <p>Backup region in a different location.</p>
     * @param string $RestoreTime <p>Rollback time supported by the backup.</p>
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

        if (array_key_exists("BackId",$param) and $param["BackId"] !== null) {
            $this->BackId = $param["BackId"];
        }

        if (array_key_exists("DeleteTime",$param) and $param["DeleteTime"] !== null) {
            $this->DeleteTime = $param["DeleteTime"];
        }

        if (array_key_exists("BackupRegion",$param) and $param["BackupRegion"] !== null) {
            $this->BackupRegion = $param["BackupRegion"];
        }

        if (array_key_exists("RestoreTime",$param) and $param["RestoreTime"] !== null) {
            $this->RestoreTime = $param["RestoreTime"];
        }
    }
}
