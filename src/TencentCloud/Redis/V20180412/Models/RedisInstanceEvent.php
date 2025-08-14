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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance event information.
 *
 * @method integer getID() Obtain Event ID.
 * @method void setID(integer $ID) Set Event ID.
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getInstanceName() Obtain Instance name.
 * @method void setInstanceName(string $InstanceName) Set Instance name.
 * @method string getType() Obtain Event type. Currently, the type can only be related to instance migration, resource movement, and IDC deletion. This parameter can be set only to **InstanceMigration**.
 * @method void setType(string $Type) Set Event type. Currently, the type can only be related to instance migration, resource movement, and IDC deletion. This parameter can be set only to **InstanceMigration**.
 * @method string getGrade() Obtain Event level. The levels are divided into critical, important, medium, and general based on severity and urgency.
 - Critical: critical.
 - High: important.
 - Middle: medium.
 - Low.
 * @method void setGrade(string $Grade) Set Event level. The levels are divided into critical, important, medium, and general based on severity and urgency.
 - Critical: critical.
 - High: important.
 - Middle: medium.
 - Low.
 * @method string getExecutionDate() Obtain Scheduled event execution date.
 * @method void setExecutionDate(string $ExecutionDate) Set Scheduled event execution date.
 * @method string getStartTime() Obtain Start date of scheduled event execution.
 * @method void setStartTime(string $StartTime) Set Start date of scheduled event execution.
 * @method string getEndTime() Obtain End date of scheduled event execution.
 * @method void setEndTime(string $EndTime) Set End date of scheduled event execution.
 * @method string getLatestExecutionDate() Obtain Latest execution date of the Ops event. The event should be completed before this date. Otherwise, the business may be affected.
 * @method void setLatestExecutionDate(string $LatestExecutionDate) Set Latest execution date of the Ops event. The event should be completed before this date. Otherwise, the business may be affected.
 * @method string getStatus() Obtain Current event status.
 - Waiting: event not reached the execution date or not within the maintenance window.
 - Running: event within the maintenance window and under maintenance execution.
 - Finished: event with maintenance completed.
- Canceled: Execution of the event is canceled.
 * @method void setStatus(string $Status) Set Current event status.
 - Waiting: event not reached the execution date or not within the maintenance window.
 - Running: event within the maintenance window and under maintenance execution.
 - Finished: event with maintenance completed.
- Canceled: Execution of the event is canceled.
 * @method string getTaskEndTime() Obtain Completion time of the event execution task.
 * @method void setTaskEndTime(string $TaskEndTime) Set Completion time of the event execution task.
 * @method string getEffectInfo() Obtain Event impact information.
 * @method void setEffectInfo(string $EffectInfo) Set Event impact information.
 * @method string getInitialExecutionDate() Obtain Initial scheduled event execution date.
 * @method void setInitialExecutionDate(string $InitialExecutionDate) Set Initial scheduled event execution date.
 */
class RedisInstanceEvent extends AbstractModel
{
    /**
     * @var integer Event ID.
     */
    public $ID;

    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Instance name.
     */
    public $InstanceName;

    /**
     * @var string Event type. Currently, the type can only be related to instance migration, resource movement, and IDC deletion. This parameter can be set only to **InstanceMigration**.
     */
    public $Type;

    /**
     * @var string Event level. The levels are divided into critical, important, medium, and general based on severity and urgency.
 - Critical: critical.
 - High: important.
 - Middle: medium.
 - Low.
     */
    public $Grade;

    /**
     * @var string Scheduled event execution date.
     */
    public $ExecutionDate;

    /**
     * @var string Start date of scheduled event execution.
     */
    public $StartTime;

    /**
     * @var string End date of scheduled event execution.
     */
    public $EndTime;

    /**
     * @var string Latest execution date of the Ops event. The event should be completed before this date. Otherwise, the business may be affected.
     */
    public $LatestExecutionDate;

    /**
     * @var string Current event status.
 - Waiting: event not reached the execution date or not within the maintenance window.
 - Running: event within the maintenance window and under maintenance execution.
 - Finished: event with maintenance completed.
- Canceled: Execution of the event is canceled.
     */
    public $Status;

    /**
     * @var string Completion time of the event execution task.
     */
    public $TaskEndTime;

    /**
     * @var string Event impact information.
     */
    public $EffectInfo;

    /**
     * @var string Initial scheduled event execution date.
     */
    public $InitialExecutionDate;

    /**
     * @param integer $ID Event ID.
     * @param string $InstanceId Instance ID.
     * @param string $InstanceName Instance name.
     * @param string $Type Event type. Currently, the type can only be related to instance migration, resource movement, and IDC deletion. This parameter can be set only to **InstanceMigration**.
     * @param string $Grade Event level. The levels are divided into critical, important, medium, and general based on severity and urgency.
 - Critical: critical.
 - High: important.
 - Middle: medium.
 - Low.
     * @param string $ExecutionDate Scheduled event execution date.
     * @param string $StartTime Start date of scheduled event execution.
     * @param string $EndTime End date of scheduled event execution.
     * @param string $LatestExecutionDate Latest execution date of the Ops event. The event should be completed before this date. Otherwise, the business may be affected.
     * @param string $Status Current event status.
 - Waiting: event not reached the execution date or not within the maintenance window.
 - Running: event within the maintenance window and under maintenance execution.
 - Finished: event with maintenance completed.
- Canceled: Execution of the event is canceled.
     * @param string $TaskEndTime Completion time of the event execution task.
     * @param string $EffectInfo Event impact information.
     * @param string $InitialExecutionDate Initial scheduled event execution date.
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
