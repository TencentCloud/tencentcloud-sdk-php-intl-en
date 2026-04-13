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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task list information
 *
 * @method integer getTaskId() Obtain Task ID.
 * @method void setTaskId(integer $TaskId) Set Task ID.
 * @method string getTaskType() Obtain Specifies the task type.
 * @method void setTaskType(string $TaskType) Set Specifies the task type.
 * @method string getDBInstanceId() Obtain Specifies the instance ID of the task instance.
 * @method void setDBInstanceId(string $DBInstanceId) Set Specifies the instance ID of the task instance.
 * @method string getStartTime() Obtain Start time of the task.
 * @method void setStartTime(string $StartTime) Set Start time of the task.
 * @method string getEndTime() Obtain Task end time.
 * @method void setEndTime(string $EndTime) Set Task end time.
 * @method string getStatus() Obtain Specifies the task Running status, including Running, Success, WaitSwitch, Fail, Pause.
 * @method void setStatus(string $Status) Set Specifies the task Running status, including Running, Success, WaitSwitch, Fail, Pause.
 * @method integer getProgress() Obtain Indicates the progress of task execution, with a value range of 0-100.
 * @method void setProgress(integer $Progress) Set Indicates the progress of task execution, with a value range of 0-100.
 * @method TaskDetail getTaskDetail() Obtain Specifies the task details.
 * @method void setTaskDetail(TaskDetail $TaskDetail) Set Specifies the task details.
 */
class TaskSet extends AbstractModel
{
    /**
     * @var integer Task ID.
     */
    public $TaskId;

    /**
     * @var string Specifies the task type.
     */
    public $TaskType;

    /**
     * @var string Specifies the instance ID of the task instance.
     */
    public $DBInstanceId;

    /**
     * @var string Start time of the task.
     */
    public $StartTime;

    /**
     * @var string Task end time.
     */
    public $EndTime;

    /**
     * @var string Specifies the task Running status, including Running, Success, WaitSwitch, Fail, Pause.
     */
    public $Status;

    /**
     * @var integer Indicates the progress of task execution, with a value range of 0-100.
     */
    public $Progress;

    /**
     * @var TaskDetail Specifies the task details.
     */
    public $TaskDetail;

    /**
     * @param integer $TaskId Task ID.
     * @param string $TaskType Specifies the task type.
     * @param string $DBInstanceId Specifies the instance ID of the task instance.
     * @param string $StartTime Start time of the task.
     * @param string $EndTime Task end time.
     * @param string $Status Specifies the task Running status, including Running, Success, WaitSwitch, Fail, Pause.
     * @param integer $Progress Indicates the progress of task execution, with a value range of 0-100.
     * @param TaskDetail $TaskDetail Specifies the task details.
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
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

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("TaskDetail",$param) and $param["TaskDetail"] !== null) {
            $this->TaskDetail = new TaskDetail();
            $this->TaskDetail->deserialize($param["TaskDetail"]);
        }
    }
}
