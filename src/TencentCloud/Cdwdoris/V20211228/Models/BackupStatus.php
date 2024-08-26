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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Progress details of the backup task
 *
 * @method integer getJobId() Obtain Backup task ID
 * @method void setJobId(integer $JobId) Set Backup task ID
 * @method string getSnapshotName() Obtain Snapshot name
 * @method void setSnapshotName(string $SnapshotName) Set Snapshot name
 * @method string getDbName() Obtain Database name
 * @method void setDbName(string $DbName) Set Database name
 * @method string getState() Obtain Status
 * @method void setState(string $State) Set Status
 * @method string getBackupObjects() Obtain Backup object
 * @method void setBackupObjects(string $BackupObjects) Set Backup object
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getSnapshotFinishedTime() Obtain Snapshot end time
 * @method void setSnapshotFinishedTime(string $SnapshotFinishedTime) Set Snapshot end time
 * @method string getUploadFinishedTime() Obtain Upload end time
 * @method void setUploadFinishedTime(string $UploadFinishedTime) Set Upload end time
 * @method string getFinishedTime() Obtain End time
 * @method void setFinishedTime(string $FinishedTime) Set End time
 * @method string getUnfinishedTasks() Obtain Unfinished tasks
 * @method void setUnfinishedTasks(string $UnfinishedTasks) Set Unfinished tasks
 * @method string getProgress() Obtain Progress
 * @method void setProgress(string $Progress) Set Progress
 * @method string getTaskErrMsg() Obtain Error message
 * @method void setTaskErrMsg(string $TaskErrMsg) Set Error message
 * @method string getStatus() Obtain Status
 * @method void setStatus(string $Status) Set Status
 * @method integer getTimeout() Obtain Timeout information
 * @method void setTimeout(integer $Timeout) Set Timeout information
 * @method integer getBackupJobId() Obtain Backup instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBackupJobId(integer $BackupJobId) Set Backup instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTaskId() Obtain The ID of the snapshoit corresponding to the instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskId(integer $TaskId) Set The ID of the snapshoit corresponding to the instance
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BackupStatus extends AbstractModel
{
    /**
     * @var integer Backup task ID
     */
    public $JobId;

    /**
     * @var string Snapshot name
     */
    public $SnapshotName;

    /**
     * @var string Database name
     */
    public $DbName;

    /**
     * @var string Status
     */
    public $State;

    /**
     * @var string Backup object
     */
    public $BackupObjects;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Snapshot end time
     */
    public $SnapshotFinishedTime;

    /**
     * @var string Upload end time
     */
    public $UploadFinishedTime;

    /**
     * @var string End time
     */
    public $FinishedTime;

    /**
     * @var string Unfinished tasks
     */
    public $UnfinishedTasks;

    /**
     * @var string Progress
     */
    public $Progress;

    /**
     * @var string Error message
     */
    public $TaskErrMsg;

    /**
     * @var string Status
     */
    public $Status;

    /**
     * @var integer Timeout information
     */
    public $Timeout;

    /**
     * @var integer Backup instance ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BackupJobId;

    /**
     * @var integer The ID of the snapshoit corresponding to the instance
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskId;

    /**
     * @param integer $JobId Backup task ID
     * @param string $SnapshotName Snapshot name
     * @param string $DbName Database name
     * @param string $State Status
     * @param string $BackupObjects Backup object
     * @param string $CreateTime Creation time
     * @param string $SnapshotFinishedTime Snapshot end time
     * @param string $UploadFinishedTime Upload end time
     * @param string $FinishedTime End time
     * @param string $UnfinishedTasks Unfinished tasks
     * @param string $Progress Progress
     * @param string $TaskErrMsg Error message
     * @param string $Status Status
     * @param integer $Timeout Timeout information
     * @param integer $BackupJobId Backup instance ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TaskId The ID of the snapshoit corresponding to the instance
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("BackupObjects",$param) and $param["BackupObjects"] !== null) {
            $this->BackupObjects = $param["BackupObjects"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("SnapshotFinishedTime",$param) and $param["SnapshotFinishedTime"] !== null) {
            $this->SnapshotFinishedTime = $param["SnapshotFinishedTime"];
        }

        if (array_key_exists("UploadFinishedTime",$param) and $param["UploadFinishedTime"] !== null) {
            $this->UploadFinishedTime = $param["UploadFinishedTime"];
        }

        if (array_key_exists("FinishedTime",$param) and $param["FinishedTime"] !== null) {
            $this->FinishedTime = $param["FinishedTime"];
        }

        if (array_key_exists("UnfinishedTasks",$param) and $param["UnfinishedTasks"] !== null) {
            $this->UnfinishedTasks = $param["UnfinishedTasks"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("TaskErrMsg",$param) and $param["TaskErrMsg"] !== null) {
            $this->TaskErrMsg = $param["TaskErrMsg"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("BackupJobId",$param) and $param["BackupJobId"] !== null) {
            $this->BackupJobId = $param["BackupJobId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }
    }
}
