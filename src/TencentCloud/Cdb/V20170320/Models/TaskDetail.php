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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of an instance task
 *
 * @method integer getCode() Obtain Error code.
 * @method void setCode(integer $Code) Set Error code.
 * @method string getMessage() Obtain Error message.
 * @method void setMessage(string $Message) Set Error message.
 * @method integer getJobId() Obtain ID of an instance task.
 * @method void setJobId(integer $JobId) Set ID of an instance task.
 * @method integer getProgress() Obtain Instance task progress.
 * @method void setProgress(integer $Progress) Set Instance task progress.
 * @method string getTaskStatus() Obtain Instance task status. Valid values:
"UNDEFINED" - undefined;
"INITIAL" - initializing;
"RUNNING" - running;
"SUCCEED" - succeeded;
"FAILED" - failed;
"KILLED" - terminated;
"REMOVED" - deleted;
"PAUSED" - paused.
"WAITING" - waiting (which can be canceled)
 * @method void setTaskStatus(string $TaskStatus) Set Instance task status. Valid values:
"UNDEFINED" - undefined;
"INITIAL" - initializing;
"RUNNING" - running;
"SUCCEED" - succeeded;
"FAILED" - failed;
"KILLED" - terminated;
"REMOVED" - deleted;
"PAUSED" - paused.
"WAITING" - waiting (which can be canceled)
 * @method string getTaskType() Obtain Instance task type. Valid values:
"ROLLBACK" - rolling back a database;
"SQL OPERATION" - performing an SQL operation;
"IMPORT DATA" - importing data;
"MODIFY PARAM" - setting a parameter;
"INITIAL" - initializing a TencentDB instance;
"REBOOT" - restarting a TencentDB instance;
"OPEN GTID" - enabling GTID of a TencentDB instance;
"UPGRADE RO" - upgrading a read-only instance;
"BATCH ROLLBACK" - rolling back databases in batches;
"UPGRADE MASTER" - upgrading a primary instance;
"DROP TABLES" - dropping a TencentDB table;
"SWITCH DR TO MASTER" - promoting a disaster recovery instance.
 * @method void setTaskType(string $TaskType) Set Instance task type. Valid values:
"ROLLBACK" - rolling back a database;
"SQL OPERATION" - performing an SQL operation;
"IMPORT DATA" - importing data;
"MODIFY PARAM" - setting a parameter;
"INITIAL" - initializing a TencentDB instance;
"REBOOT" - restarting a TencentDB instance;
"OPEN GTID" - enabling GTID of a TencentDB instance;
"UPGRADE RO" - upgrading a read-only instance;
"BATCH ROLLBACK" - rolling back databases in batches;
"UPGRADE MASTER" - upgrading a primary instance;
"DROP TABLES" - dropping a TencentDB table;
"SWITCH DR TO MASTER" - promoting a disaster recovery instance.
 * @method string getStartTime() Obtain Instance task start time.
 * @method void setStartTime(string $StartTime) Set Instance task start time.
 * @method string getEndTime() Obtain Instance task end time.
 * @method void setEndTime(string $EndTime) Set Instance task end time.
 * @method array getInstanceIds() Obtain ID of an instance associated with a task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceIds(array $InstanceIds) Set ID of an instance associated with a task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAsyncRequestId() Obtain Async task request ID.
 * @method void setAsyncRequestId(string $AsyncRequestId) Set Async task request ID.
 */
class TaskDetail extends AbstractModel
{
    /**
     * @var integer Error code.
     */
    public $Code;

    /**
     * @var string Error message.
     */
    public $Message;

    /**
     * @var integer ID of an instance task.
     */
    public $JobId;

    /**
     * @var integer Instance task progress.
     */
    public $Progress;

    /**
     * @var string Instance task status. Valid values:
"UNDEFINED" - undefined;
"INITIAL" - initializing;
"RUNNING" - running;
"SUCCEED" - succeeded;
"FAILED" - failed;
"KILLED" - terminated;
"REMOVED" - deleted;
"PAUSED" - paused.
"WAITING" - waiting (which can be canceled)
     */
    public $TaskStatus;

    /**
     * @var string Instance task type. Valid values:
"ROLLBACK" - rolling back a database;
"SQL OPERATION" - performing an SQL operation;
"IMPORT DATA" - importing data;
"MODIFY PARAM" - setting a parameter;
"INITIAL" - initializing a TencentDB instance;
"REBOOT" - restarting a TencentDB instance;
"OPEN GTID" - enabling GTID of a TencentDB instance;
"UPGRADE RO" - upgrading a read-only instance;
"BATCH ROLLBACK" - rolling back databases in batches;
"UPGRADE MASTER" - upgrading a primary instance;
"DROP TABLES" - dropping a TencentDB table;
"SWITCH DR TO MASTER" - promoting a disaster recovery instance.
     */
    public $TaskType;

    /**
     * @var string Instance task start time.
     */
    public $StartTime;

    /**
     * @var string Instance task end time.
     */
    public $EndTime;

    /**
     * @var array ID of an instance associated with a task.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceIds;

    /**
     * @var string Async task request ID.
     */
    public $AsyncRequestId;

    /**
     * @param integer $Code Error code.
     * @param string $Message Error message.
     * @param integer $JobId ID of an instance task.
     * @param integer $Progress Instance task progress.
     * @param string $TaskStatus Instance task status. Valid values:
"UNDEFINED" - undefined;
"INITIAL" - initializing;
"RUNNING" - running;
"SUCCEED" - succeeded;
"FAILED" - failed;
"KILLED" - terminated;
"REMOVED" - deleted;
"PAUSED" - paused.
"WAITING" - waiting (which can be canceled)
     * @param string $TaskType Instance task type. Valid values:
"ROLLBACK" - rolling back a database;
"SQL OPERATION" - performing an SQL operation;
"IMPORT DATA" - importing data;
"MODIFY PARAM" - setting a parameter;
"INITIAL" - initializing a TencentDB instance;
"REBOOT" - restarting a TencentDB instance;
"OPEN GTID" - enabling GTID of a TencentDB instance;
"UPGRADE RO" - upgrading a read-only instance;
"BATCH ROLLBACK" - rolling back databases in batches;
"UPGRADE MASTER" - upgrading a primary instance;
"DROP TABLES" - dropping a TencentDB table;
"SWITCH DR TO MASTER" - promoting a disaster recovery instance.
     * @param string $StartTime Instance task start time.
     * @param string $EndTime Instance task end time.
     * @param array $InstanceIds ID of an instance associated with a task.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AsyncRequestId Async task request ID.
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("AsyncRequestId",$param) and $param["AsyncRequestId"] !== null) {
            $this->AsyncRequestId = $param["AsyncRequestId"];
        }
    }
}
