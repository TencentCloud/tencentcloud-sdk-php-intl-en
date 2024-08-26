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
 * Recover the task information
 *
 * @method integer getJobId() Obtain Recover the task ID
 * @method void setJobId(integer $JobId) Set Recover the task ID
 * @method string getLabel() Obtain Recover the task tag
 * @method void setLabel(string $Label) Set Recover the task tag
 * @method string getTimestamp() Obtain Recover the task timestamp
 * @method void setTimestamp(string $Timestamp) Set Recover the task timestamp
 * @method string getDbName() Obtain Recover the database where the task is located
 * @method void setDbName(string $DbName) Set Recover the database where the task is located
 * @method string getState() Obtain Recover the task status
 * @method void setState(string $State) Set Recover the task status
 * @method boolean getAllowLoad() Obtain Whether to allow import during recovery
 * @method void setAllowLoad(boolean $AllowLoad) Set Whether to allow import during recovery
 * @method string getReplicationNum() Obtain Number of replicas
 * @method void setReplicationNum(string $ReplicationNum) Set Number of replicas
 * @method string getReplicaAllocation() Obtain Number of replicas
 * @method void setReplicaAllocation(string $ReplicaAllocation) Set Number of replicas
 * @method string getRestoreObjects() Obtain Recover object
 * @method void setRestoreObjects(string $RestoreObjects) Set Recover object
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getMetaPreparedTime() Obtain Metadata preparation time
 * @method void setMetaPreparedTime(string $MetaPreparedTime) Set Metadata preparation time
 * @method string getSnapshotFinishedTime() Obtain Snapshot end time
 * @method void setSnapshotFinishedTime(string $SnapshotFinishedTime) Set Snapshot end time
 * @method string getDownloadFinishedTime() Obtain Download end time
 * @method void setDownloadFinishedTime(string $DownloadFinishedTime) Set Download end time
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
 * @method integer getTimeout() Obtain Operation timeout period
 * @method void setTimeout(integer $Timeout) Set Operation timeout period
 * @method boolean getReserveReplica() Obtain Whether to maintain the number of replicas in the source table
 * @method void setReserveReplica(boolean $ReserveReplica) Set Whether to maintain the number of replicas in the source table
 * @method boolean getReserveDynamicPartitionEnable() Obtain Whether to maintain dynamic partitions in the source table
 * @method void setReserveDynamicPartitionEnable(boolean $ReserveDynamicPartitionEnable) Set Whether to maintain dynamic partitions in the source table
 * @method integer getBackupJobId() Obtain Backup instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBackupJobId(integer $BackupJobId) Set Backup instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTaskId() Obtain ID of the snapshot corresponding to the instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskId(integer $TaskId) Set ID of the snapshot corresponding to the instance
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RestoreStatus extends AbstractModel
{
    /**
     * @var integer Recover the task ID
     */
    public $JobId;

    /**
     * @var string Recover the task tag
     */
    public $Label;

    /**
     * @var string Recover the task timestamp
     */
    public $Timestamp;

    /**
     * @var string Recover the database where the task is located
     */
    public $DbName;

    /**
     * @var string Recover the task status
     */
    public $State;

    /**
     * @var boolean Whether to allow import during recovery
     */
    public $AllowLoad;

    /**
     * @var string Number of replicas
     */
    public $ReplicationNum;

    /**
     * @var string Number of replicas
     */
    public $ReplicaAllocation;

    /**
     * @var string Recover object
     */
    public $RestoreObjects;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Metadata preparation time
     */
    public $MetaPreparedTime;

    /**
     * @var string Snapshot end time
     */
    public $SnapshotFinishedTime;

    /**
     * @var string Download end time
     */
    public $DownloadFinishedTime;

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
     * @var integer Operation timeout period
     */
    public $Timeout;

    /**
     * @var boolean Whether to maintain the number of replicas in the source table
     */
    public $ReserveReplica;

    /**
     * @var boolean Whether to maintain dynamic partitions in the source table
     */
    public $ReserveDynamicPartitionEnable;

    /**
     * @var integer Backup instance ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BackupJobId;

    /**
     * @var integer ID of the snapshot corresponding to the instance
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskId;

    /**
     * @param integer $JobId Recover the task ID
     * @param string $Label Recover the task tag
     * @param string $Timestamp Recover the task timestamp
     * @param string $DbName Recover the database where the task is located
     * @param string $State Recover the task status
     * @param boolean $AllowLoad Whether to allow import during recovery
     * @param string $ReplicationNum Number of replicas
     * @param string $ReplicaAllocation Number of replicas
     * @param string $RestoreObjects Recover object
     * @param string $CreateTime Creation time
     * @param string $MetaPreparedTime Metadata preparation time
     * @param string $SnapshotFinishedTime Snapshot end time
     * @param string $DownloadFinishedTime Download end time
     * @param string $FinishedTime End time
     * @param string $UnfinishedTasks Unfinished tasks
     * @param string $Progress Progress
     * @param string $TaskErrMsg Error message
     * @param string $Status Status
     * @param integer $Timeout Operation timeout period
     * @param boolean $ReserveReplica Whether to maintain the number of replicas in the source table
     * @param boolean $ReserveDynamicPartitionEnable Whether to maintain dynamic partitions in the source table
     * @param integer $BackupJobId Backup instance ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TaskId ID of the snapshot corresponding to the instance
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

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("AllowLoad",$param) and $param["AllowLoad"] !== null) {
            $this->AllowLoad = $param["AllowLoad"];
        }

        if (array_key_exists("ReplicationNum",$param) and $param["ReplicationNum"] !== null) {
            $this->ReplicationNum = $param["ReplicationNum"];
        }

        if (array_key_exists("ReplicaAllocation",$param) and $param["ReplicaAllocation"] !== null) {
            $this->ReplicaAllocation = $param["ReplicaAllocation"];
        }

        if (array_key_exists("RestoreObjects",$param) and $param["RestoreObjects"] !== null) {
            $this->RestoreObjects = $param["RestoreObjects"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("MetaPreparedTime",$param) and $param["MetaPreparedTime"] !== null) {
            $this->MetaPreparedTime = $param["MetaPreparedTime"];
        }

        if (array_key_exists("SnapshotFinishedTime",$param) and $param["SnapshotFinishedTime"] !== null) {
            $this->SnapshotFinishedTime = $param["SnapshotFinishedTime"];
        }

        if (array_key_exists("DownloadFinishedTime",$param) and $param["DownloadFinishedTime"] !== null) {
            $this->DownloadFinishedTime = $param["DownloadFinishedTime"];
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

        if (array_key_exists("ReserveReplica",$param) and $param["ReserveReplica"] !== null) {
            $this->ReserveReplica = $param["ReserveReplica"];
        }

        if (array_key_exists("ReserveDynamicPartitionEnable",$param) and $param["ReserveDynamicPartitionEnable"] !== null) {
            $this->ReserveDynamicPartitionEnable = $param["ReserveDynamicPartitionEnable"];
        }

        if (array_key_exists("BackupJobId",$param) and $param["BackupJobId"] !== null) {
            $this->BackupJobId = $param["BackupJobId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }
    }
}
