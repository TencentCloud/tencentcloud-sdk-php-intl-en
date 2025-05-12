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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Backup file information
 *
 * @method integer getSnapshotId() Obtain Snapshot file ID, which is deprecated. You need to use `BackupId`.
 * @method void setSnapshotId(integer $SnapshotId) Set Snapshot file ID, which is deprecated. You need to use `BackupId`.
 * @method string getFileName() Obtain Backup file name
 * @method void setFileName(string $FileName) Set Backup file name
 * @method integer getFileSize() Obtain Backup file size
 * @method void setFileSize(integer $FileSize) Set Backup file size
 * @method string getStartTime() Obtain Backup start time
 * @method void setStartTime(string $StartTime) Set Backup start time
 * @method string getFinishTime() Obtain Backup end time
 * @method void setFinishTime(string $FinishTime) Set Backup end time
 * @method string getBackupType() Obtain Backup type. Valid values: `snapshot` (snapshot backup), `logic` (logic backup).
 * @method void setBackupType(string $BackupType) Set Backup type. Valid values: `snapshot` (snapshot backup), `logic` (logic backup).
 * @method string getBackupMethod() Obtain Back mode. auto: auto backup; manual: manual backup
 * @method void setBackupMethod(string $BackupMethod) Set Back mode. auto: auto backup; manual: manual backup
 * @method string getBackupStatus() Obtain Backup file status. success: backup succeeded; fail: backup failed; creating: creating backup file; deleting: deleting backup file
 * @method void setBackupStatus(string $BackupStatus) Set Backup file status. success: backup succeeded; fail: backup failed; creating: creating backup file; deleting: deleting backup file
 * @method string getSnapshotTime() Obtain Backup file time
 * @method void setSnapshotTime(string $SnapshotTime) Set Backup file time
 * @method integer getBackupId() Obtain Backup ID.
 * @method void setBackupId(integer $BackupId) Set Backup ID.
 * @method string getSnapShotType() Obtain Specifies the snapshot type. valid values: full (full snapshot); increment (incremental snapshot).
 * @method void setSnapShotType(string $SnapShotType) Set Specifies the snapshot type. valid values: full (full snapshot); increment (incremental snapshot).
 * @method string getBackupName() Obtain Specifies the remark of the backup file.
 * @method void setBackupName(string $BackupName) Set Specifies the remark of the backup file.
 */
class BackupFileInfo extends AbstractModel
{
    /**
     * @var integer Snapshot file ID, which is deprecated. You need to use `BackupId`.
     */
    public $SnapshotId;

    /**
     * @var string Backup file name
     */
    public $FileName;

    /**
     * @var integer Backup file size
     */
    public $FileSize;

    /**
     * @var string Backup start time
     */
    public $StartTime;

    /**
     * @var string Backup end time
     */
    public $FinishTime;

    /**
     * @var string Backup type. Valid values: `snapshot` (snapshot backup), `logic` (logic backup).
     */
    public $BackupType;

    /**
     * @var string Back mode. auto: auto backup; manual: manual backup
     */
    public $BackupMethod;

    /**
     * @var string Backup file status. success: backup succeeded; fail: backup failed; creating: creating backup file; deleting: deleting backup file
     */
    public $BackupStatus;

    /**
     * @var string Backup file time
     */
    public $SnapshotTime;

    /**
     * @var integer Backup ID.
     */
    public $BackupId;

    /**
     * @var string Specifies the snapshot type. valid values: full (full snapshot); increment (incremental snapshot).
     */
    public $SnapShotType;

    /**
     * @var string Specifies the remark of the backup file.
     */
    public $BackupName;

    /**
     * @param integer $SnapshotId Snapshot file ID, which is deprecated. You need to use `BackupId`.
     * @param string $FileName Backup file name
     * @param integer $FileSize Backup file size
     * @param string $StartTime Backup start time
     * @param string $FinishTime Backup end time
     * @param string $BackupType Backup type. Valid values: `snapshot` (snapshot backup), `logic` (logic backup).
     * @param string $BackupMethod Back mode. auto: auto backup; manual: manual backup
     * @param string $BackupStatus Backup file status. success: backup succeeded; fail: backup failed; creating: creating backup file; deleting: deleting backup file
     * @param string $SnapshotTime Backup file time
     * @param integer $BackupId Backup ID.
     * @param string $SnapShotType Specifies the snapshot type. valid values: full (full snapshot); increment (incremental snapshot).
     * @param string $BackupName Specifies the remark of the backup file.
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
        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }

        if (array_key_exists("BackupStatus",$param) and $param["BackupStatus"] !== null) {
            $this->BackupStatus = $param["BackupStatus"];
        }

        if (array_key_exists("SnapshotTime",$param) and $param["SnapshotTime"] !== null) {
            $this->SnapshotTime = $param["SnapshotTime"];
        }

        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }

        if (array_key_exists("SnapShotType",$param) and $param["SnapShotType"] !== null) {
            $this->SnapShotType = $param["SnapShotType"];
        }

        if (array_key_exists("BackupName",$param) and $param["BackupName"] !== null) {
            $this->BackupName = $param["BackupName"];
        }
    }
}
