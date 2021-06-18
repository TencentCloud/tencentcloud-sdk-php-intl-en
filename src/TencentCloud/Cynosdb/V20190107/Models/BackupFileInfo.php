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
 * @method integer getSnapshotId() Obtain Snapshot file ID used for rollback
 * @method void setSnapshotId(integer $SnapshotId) Set Snapshot file ID used for rollback
 * @method string getFileName() Obtain Snapshot file name
 * @method void setFileName(string $FileName) Set Snapshot file name
 * @method integer getFileSize() Obtain Snapshot file size
 * @method void setFileSize(integer $FileSize) Set Snapshot file size
 * @method string getStartTime() Obtain Snapshot backup start time
 * @method void setStartTime(string $StartTime) Set Snapshot backup start time
 * @method string getFinishTime() Obtain Snapshot backup end time
 * @method void setFinishTime(string $FinishTime) Set Snapshot backup end time
 * @method string getBackupType() Obtain Backup type. snapshot: snapshot backup; timepoint: time point backup
 * @method void setBackupType(string $BackupType) Set Backup type. snapshot: snapshot backup; timepoint: time point backup
 * @method string getBackupMethod() Obtain Back mode. auto: auto backup; manual: manual backup
 * @method void setBackupMethod(string $BackupMethod) Set Back mode. auto: auto backup; manual: manual backup
 * @method string getBackupStatus() Obtain Backup file status. success: backup succeeded; fail: backup failed; creating: creating backup file; deleting: deleting backup file
 * @method void setBackupStatus(string $BackupStatus) Set Backup file status. success: backup succeeded; fail: backup failed; creating: creating backup file; deleting: deleting backup file
 * @method string getSnapshotTime() Obtain Backup file time
 * @method void setSnapshotTime(string $SnapshotTime) Set Backup file time
 */
class BackupFileInfo extends AbstractModel
{
    /**
     * @var integer Snapshot file ID used for rollback
     */
    public $SnapshotId;

    /**
     * @var string Snapshot file name
     */
    public $FileName;

    /**
     * @var integer Snapshot file size
     */
    public $FileSize;

    /**
     * @var string Snapshot backup start time
     */
    public $StartTime;

    /**
     * @var string Snapshot backup end time
     */
    public $FinishTime;

    /**
     * @var string Backup type. snapshot: snapshot backup; timepoint: time point backup
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
     * @param integer $SnapshotId Snapshot file ID used for rollback
     * @param string $FileName Snapshot file name
     * @param integer $FileSize Snapshot file size
     * @param string $StartTime Snapshot backup start time
     * @param string $FinishTime Snapshot backup end time
     * @param string $BackupType Backup type. snapshot: snapshot backup; timepoint: time point backup
     * @param string $BackupMethod Back mode. auto: auto backup; manual: manual backup
     * @param string $BackupStatus Backup file status. success: backup succeeded; fail: backup failed; creating: creating backup file; deleting: deleting backup file
     * @param string $SnapshotTime Backup file time
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
    }
}
