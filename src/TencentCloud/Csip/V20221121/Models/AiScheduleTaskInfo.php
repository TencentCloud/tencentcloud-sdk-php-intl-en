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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task execution log
 *
 * @method string getTaskId() Obtain <p>Task ID.</p>
 * @method void setTaskId(string $TaskId) Set <p>Task ID.</p>
 * @method string getScheduleId() Obtain <p>ID of the AI scheduled task it belongs to.</p>
 * @method void setScheduleId(string $ScheduleId) Set <p>ID of the AI scheduled task it belongs to.</p>
 * @method string getTriggerId() Obtain <p>ID of the trigger that triggers the task.</p>
 * @method void setTriggerId(string $TriggerId) Set <p>ID of the trigger that triggers the task.</p>
 * @method string getSessionId() Obtain <p>Unique conversation ID of the Agent call.</p>
 * @method void setSessionId(string $SessionId) Set <p>Unique conversation ID of the Agent call.</p>
 * @method integer getStatus() Obtain <p>Execution status.</p>
 * @method void setStatus(integer $Status) Set <p>Execution status.</p>
 * @method string getResult() Obtain <p>Agent output result or error detail.</p>
 * @method void setResult(string $Result) Set <p>Agent output result or error detail.</p>
 * @method integer getScheduledTime() Obtain <p>Planned trigger time, Unix millisecond timestamp.</p>
 * @method void setScheduledTime(integer $ScheduledTime) Set <p>Planned trigger time, Unix millisecond timestamp.</p>
 * @method integer getStartTime() Obtain <p>Actual start execution time, Unix millisecond timestamp.</p>
 * @method void setStartTime(integer $StartTime) Set <p>Actual start execution time, Unix millisecond timestamp.</p>
 * @method integer getEndTime() Obtain <p>Execution completion time, Unix millisecond timestamp.</p>
 * @method void setEndTime(integer $EndTime) Set <p>Execution completion time, Unix millisecond timestamp.</p>
 * @method integer getCreateTime() Obtain <p>Creation time, Unix millisecond timestamp.</p>
 * @method void setCreateTime(integer $CreateTime) Set <p>Creation time, Unix millisecond timestamp.</p>
 * @method integer getUpdateTime() Obtain <p>Update time, Unix millisecond timestamp.</p>
 * @method void setUpdateTime(integer $UpdateTime) Set <p>Update time, Unix millisecond timestamp.</p>
 * @method string getTaskName() Obtain <p>Scheduled task name</p>
 * @method void setTaskName(string $TaskName) Set <p>Scheduled task name</p>
 * @method string getPrompts() Obtain <p>Scheduled task prompt</p>
 * @method void setPrompts(string $Prompts) Set <p>Scheduled task prompt</p>
 */
class AiScheduleTaskInfo extends AbstractModel
{
    /**
     * @var string <p>Task ID.</p>
     */
    public $TaskId;

    /**
     * @var string <p>ID of the AI scheduled task it belongs to.</p>
     */
    public $ScheduleId;

    /**
     * @var string <p>ID of the trigger that triggers the task.</p>
     */
    public $TriggerId;

    /**
     * @var string <p>Unique conversation ID of the Agent call.</p>
     */
    public $SessionId;

    /**
     * @var integer <p>Execution status.</p>
     */
    public $Status;

    /**
     * @var string <p>Agent output result or error detail.</p>
     */
    public $Result;

    /**
     * @var integer <p>Planned trigger time, Unix millisecond timestamp.</p>
     */
    public $ScheduledTime;

    /**
     * @var integer <p>Actual start execution time, Unix millisecond timestamp.</p>
     */
    public $StartTime;

    /**
     * @var integer <p>Execution completion time, Unix millisecond timestamp.</p>
     */
    public $EndTime;

    /**
     * @var integer <p>Creation time, Unix millisecond timestamp.</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>Update time, Unix millisecond timestamp.</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>Scheduled task name</p>
     */
    public $TaskName;

    /**
     * @var string <p>Scheduled task prompt</p>
     */
    public $Prompts;

    /**
     * @param string $TaskId <p>Task ID.</p>
     * @param string $ScheduleId <p>ID of the AI scheduled task it belongs to.</p>
     * @param string $TriggerId <p>ID of the trigger that triggers the task.</p>
     * @param string $SessionId <p>Unique conversation ID of the Agent call.</p>
     * @param integer $Status <p>Execution status.</p>
     * @param string $Result <p>Agent output result or error detail.</p>
     * @param integer $ScheduledTime <p>Planned trigger time, Unix millisecond timestamp.</p>
     * @param integer $StartTime <p>Actual start execution time, Unix millisecond timestamp.</p>
     * @param integer $EndTime <p>Execution completion time, Unix millisecond timestamp.</p>
     * @param integer $CreateTime <p>Creation time, Unix millisecond timestamp.</p>
     * @param integer $UpdateTime <p>Update time, Unix millisecond timestamp.</p>
     * @param string $TaskName <p>Scheduled task name</p>
     * @param string $Prompts <p>Scheduled task prompt</p>
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

        if (array_key_exists("ScheduleId",$param) and $param["ScheduleId"] !== null) {
            $this->ScheduleId = $param["ScheduleId"];
        }

        if (array_key_exists("TriggerId",$param) and $param["TriggerId"] !== null) {
            $this->TriggerId = $param["TriggerId"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("ScheduledTime",$param) and $param["ScheduledTime"] !== null) {
            $this->ScheduledTime = $param["ScheduledTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("Prompts",$param) and $param["Prompts"] !== null) {
            $this->Prompts = $param["Prompts"];
        }
    }
}
