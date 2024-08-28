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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of host snapshot backup
 *
 * @method string getBackupTime() Obtain Backup time
 * @method void setBackupTime(string $BackupTime) Set Backup time
 * @method integer getEventStatus() Obtain Ransom Status: 0 - No Alarm, 1 - Alarm Present
 * @method void setEventStatus(integer $EventStatus) Set Ransom Status: 0 - No Alarm, 1 - Alarm Present
 * @method integer getBackupStatus() Obtain Backup Status: 0 - Backing up, 1 - Normal, 2, 3 - Failed, 4 - Snapshot expired, 9 - Snapshot deleted
 * @method void setBackupStatus(integer $BackupStatus) Set Backup Status: 0 - Backing up, 1 - Normal, 2, 3 - Failed, 4 - Snapshot expired, 9 - Snapshot deleted
 * @method integer getDiskCount() Obtain Number of backup disk
 * @method void setDiskCount(integer $DiskCount) Set Number of backup disk
 * @method string getDisks() Obtain Hard Disk Information, separated by semicolons (;).
 * @method void setDisks(string $Disks) Set Hard Disk Information, separated by semicolons (;).
 * @method string getSnapshotIds() Obtain Snapshot List, separated by semicolons (;)
 * @method void setSnapshotIds(string $SnapshotIds) Set Snapshot List, separated by semicolons (;)
 * @method integer getStrategyId() Obtain Policy ID
 * @method void setStrategyId(integer $StrategyId) Set Policy ID
 * @method integer getStrategyStatus() Obtain Policy Status: 0 Disabled, 1 Enabled, 9 Deleted
 * @method void setStrategyStatus(integer $StrategyStatus) Set Policy Status: 0 Disabled, 1 Enabled, 9 Deleted
 * @method string getStrategyName() Obtain Policy name
 * @method void setStrategyName(string $StrategyName) Set Policy name
 */
class RansomDefenseBackup extends AbstractModel
{
    /**
     * @var string Backup time
     */
    public $BackupTime;

    /**
     * @var integer Ransom Status: 0 - No Alarm, 1 - Alarm Present
     */
    public $EventStatus;

    /**
     * @var integer Backup Status: 0 - Backing up, 1 - Normal, 2, 3 - Failed, 4 - Snapshot expired, 9 - Snapshot deleted
     */
    public $BackupStatus;

    /**
     * @var integer Number of backup disk
     */
    public $DiskCount;

    /**
     * @var string Hard Disk Information, separated by semicolons (;).
     */
    public $Disks;

    /**
     * @var string Snapshot List, separated by semicolons (;)
     */
    public $SnapshotIds;

    /**
     * @var integer Policy ID
     */
    public $StrategyId;

    /**
     * @var integer Policy Status: 0 Disabled, 1 Enabled, 9 Deleted
     */
    public $StrategyStatus;

    /**
     * @var string Policy name
     */
    public $StrategyName;

    /**
     * @param string $BackupTime Backup time
     * @param integer $EventStatus Ransom Status: 0 - No Alarm, 1 - Alarm Present
     * @param integer $BackupStatus Backup Status: 0 - Backing up, 1 - Normal, 2, 3 - Failed, 4 - Snapshot expired, 9 - Snapshot deleted
     * @param integer $DiskCount Number of backup disk
     * @param string $Disks Hard Disk Information, separated by semicolons (;).
     * @param string $SnapshotIds Snapshot List, separated by semicolons (;)
     * @param integer $StrategyId Policy ID
     * @param integer $StrategyStatus Policy Status: 0 Disabled, 1 Enabled, 9 Deleted
     * @param string $StrategyName Policy name
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
        if (array_key_exists("BackupTime",$param) and $param["BackupTime"] !== null) {
            $this->BackupTime = $param["BackupTime"];
        }

        if (array_key_exists("EventStatus",$param) and $param["EventStatus"] !== null) {
            $this->EventStatus = $param["EventStatus"];
        }

        if (array_key_exists("BackupStatus",$param) and $param["BackupStatus"] !== null) {
            $this->BackupStatus = $param["BackupStatus"];
        }

        if (array_key_exists("DiskCount",$param) and $param["DiskCount"] !== null) {
            $this->DiskCount = $param["DiskCount"];
        }

        if (array_key_exists("Disks",$param) and $param["Disks"] !== null) {
            $this->Disks = $param["Disks"];
        }

        if (array_key_exists("SnapshotIds",$param) and $param["SnapshotIds"] !== null) {
            $this->SnapshotIds = $param["SnapshotIds"];
        }

        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("StrategyStatus",$param) and $param["StrategyStatus"] !== null) {
            $this->StrategyStatus = $param["StrategyStatus"];
        }

        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
        }
    }
}
