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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance event information.
 *
 * @method integer getID() Obtain Event ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setID(integer $ID) Set Event ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceId() Obtain Instance ID.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceName() Obtain Instance name.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceName(string $InstanceName) Set Instance name.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain Event type. Currently, the type can only be related to instance migration, resource movement, and IDC deletion. This parameter can be only set to **InstanceMigration**.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Event type. Currently, the type can only be related to instance migration, resource movement, and IDC deletion. This parameter can be only set to **InstanceMigration**.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getGrade() Obtain Event levels are divided into Critical, High, Medium, and Low events according to the severity and urgency.- Critical
- High
- Middle
- Low
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGrade(string $Grade) Set Event levels are divided into Critical, High, Medium, and Low events according to the severity and urgency.- Critical
- High
- Middle
- Low
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExecutionDate() Obtain Scheduled event execution date.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExecutionDate(string $ExecutionDate) Set Scheduled event execution date.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStartTime() Obtain Scheduled start time of event execution.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartTime(string $StartTime) Set Scheduled start time of event execution.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEndTime() Obtain Scheduled end time of event execution.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(string $EndTime) Set Scheduled end time of event execution.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLatestExecutionDate() Obtain The latest execution date of the operations event. Event execution must be completed before this date. Otherwise, the business may be affected.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLatestExecutionDate(string $LatestExecutionDate) Set The latest execution date of the operations event. Event execution must be completed before this date. Otherwise, the business may be affected.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Current event status.- Waiting: The event is waiting for execution on the execution date or during the operations period.- Running: The event is being executed during the operations period.- Finished: Execution of the event operations is completed.- Canceled: Execution of the event is canceled.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Current event status.- Waiting: The event is waiting for execution on the execution date or during the operations period.- Running: The event is being executed during the operations period.- Finished: Execution of the event operations is completed.- Canceled: Execution of the event is canceled.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskEndTime() Obtain Completion time of the event execution task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskEndTime(string $TaskEndTime) Set Completion time of the event execution task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEffectInfo() Obtain Impact of the event.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEffectInfo(string $EffectInfo) Set Impact of the event.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInitialExecutionDate() Obtain Initial scheduled execution date of the event.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInitialExecutionDate(string $InitialExecutionDate) Set Initial scheduled execution date of the event.Note: This field may return null, indicating that no valid values can be obtained.
 */
class RedisInstanceEvent extends AbstractModel
{
    /**
     * @var integer Event ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ID;

    /**
     * @var string Instance ID.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var string Instance name.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceName;

    /**
     * @var string Event type. Currently, the type can only be related to instance migration, resource movement, and IDC deletion. This parameter can be only set to **InstanceMigration**.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string Event levels are divided into Critical, High, Medium, and Low events according to the severity and urgency.- Critical
- High
- Middle
- Low
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Grade;

    /**
     * @var string Scheduled event execution date.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExecutionDate;

    /**
     * @var string Scheduled start time of event execution.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @var string Scheduled end time of event execution.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var string The latest execution date of the operations event. Event execution must be completed before this date. Otherwise, the business may be affected.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LatestExecutionDate;

    /**
     * @var string Current event status.- Waiting: The event is waiting for execution on the execution date or during the operations period.- Running: The event is being executed during the operations period.- Finished: Execution of the event operations is completed.- Canceled: Execution of the event is canceled.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Completion time of the event execution task.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskEndTime;

    /**
     * @var string Impact of the event.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EffectInfo;

    /**
     * @var string Initial scheduled execution date of the event.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InitialExecutionDate;

    /**
     * @param integer $ID Event ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceId Instance ID.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceName Instance name.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Type Event type. Currently, the type can only be related to instance migration, resource movement, and IDC deletion. This parameter can be only set to **InstanceMigration**.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Grade Event levels are divided into Critical, High, Medium, and Low events according to the severity and urgency.- Critical
- High
- Middle
- Low
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExecutionDate Scheduled event execution date.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StartTime Scheduled start time of event execution.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EndTime Scheduled end time of event execution.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LatestExecutionDate The latest execution date of the operations event. Event execution must be completed before this date. Otherwise, the business may be affected.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status Current event status.- Waiting: The event is waiting for execution on the execution date or during the operations period.- Running: The event is being executed during the operations period.- Finished: Execution of the event operations is completed.- Canceled: Execution of the event is canceled.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskEndTime Completion time of the event execution task.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EffectInfo Impact of the event.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InitialExecutionDate Initial scheduled execution date of the event.Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Grade",$param) and $param["Grade"] !== null) {
            $this->Grade = $param["Grade"];
        }

        if (array_key_exists("ExecutionDate",$param) and $param["ExecutionDate"] !== null) {
            $this->ExecutionDate = $param["ExecutionDate"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("LatestExecutionDate",$param) and $param["LatestExecutionDate"] !== null) {
            $this->LatestExecutionDate = $param["LatestExecutionDate"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TaskEndTime",$param) and $param["TaskEndTime"] !== null) {
            $this->TaskEndTime = $param["TaskEndTime"];
        }

        if (array_key_exists("EffectInfo",$param) and $param["EffectInfo"] !== null) {
            $this->EffectInfo = $param["EffectInfo"];
        }

        if (array_key_exists("InitialExecutionDate",$param) and $param["InitialExecutionDate"] !== null) {
            $this->InitialExecutionDate = $param["InitialExecutionDate"];
        }
    }
}
