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
 * ModifyInstanceEvent request structure.
 *
 * @method string getInstanceId() Obtain Specifies the instance ID. Example: crs-xjhsdj****. Log in to the [TencentDB for Redis console](https://console.cloud.tencent.com/redis#/) and copy the instance ID in the instance list.
 * @method void setInstanceId(string $InstanceId) Set Specifies the instance ID. Example: crs-xjhsdj****. Log in to the [TencentDB for Redis console](https://console.cloud.tencent.com/redis#/) and copy the instance ID in the instance list.
 * @method integer getEventId() Obtain Event ID. Obtain the ID of the event to be modified using DescribeInstanceEvents.
 * @method void setEventId(integer $EventId) Set Event ID. Obtain the ID of the event to be modified using DescribeInstanceEvents.
 * @method string getStartTime() Obtain Modifies the scheduled start time of event execution.
 * @method void setStartTime(string $StartTime) Set Modifies the scheduled start time of event execution.
 * @method string getEndTime() Obtain Modifies the scheduled end time of event execution. After the start time is configured, the end time can only be 30 minutes, 1 hour, 1.5 hours, 2 hours, or 3 hours later than the start time.
 * @method void setEndTime(string $EndTime) Set Modifies the scheduled end time of event execution. After the start time is configured, the end time can only be 30 minutes, 1 hour, 1.5 hours, 2 hours, or 3 hours later than the start time.
 * @method string getExecutionDate() Obtain Modifies the start date of the event execution schedule.
 * @method void setExecutionDate(string $ExecutionDate) Set Modifies the start date of the event execution schedule.
 * @method string getStatus() Obtain Modifies the running status of the event. Currently, this parameter can be set only to **Canceled**, indicating that the execution of the current event is canceled. You can query the running status and level of the current event using DescribeInstanceEvents.- Critical or High events cannot be canceled, which means that they must be executed.- Only events in the Waiting state (to be executed) can be canceled.
 * @method void setStatus(string $Status) Set Modifies the running status of the event. Currently, this parameter can be set only to **Canceled**, indicating that the execution of the current event is canceled. You can query the running status and level of the current event using DescribeInstanceEvents.- Critical or High events cannot be canceled, which means that they must be executed.- Only events in the Waiting state (to be executed) can be canceled.
 */
class ModifyInstanceEventRequest extends AbstractModel
{
    /**
     * @var string Specifies the instance ID. Example: crs-xjhsdj****. Log in to the [TencentDB for Redis console](https://console.cloud.tencent.com/redis#/) and copy the instance ID in the instance list.
     */
    public $InstanceId;

    /**
     * @var integer Event ID. Obtain the ID of the event to be modified using DescribeInstanceEvents.
     */
    public $EventId;

    /**
     * @var string Modifies the scheduled start time of event execution.
     */
    public $StartTime;

    /**
     * @var string Modifies the scheduled end time of event execution. After the start time is configured, the end time can only be 30 minutes, 1 hour, 1.5 hours, 2 hours, or 3 hours later than the start time.
     */
    public $EndTime;

    /**
     * @var string Modifies the start date of the event execution schedule.
     */
    public $ExecutionDate;

    /**
     * @var string Modifies the running status of the event. Currently, this parameter can be set only to **Canceled**, indicating that the execution of the current event is canceled. You can query the running status and level of the current event using DescribeInstanceEvents.- Critical or High events cannot be canceled, which means that they must be executed.- Only events in the Waiting state (to be executed) can be canceled.
     */
    public $Status;

    /**
     * @param string $InstanceId Specifies the instance ID. Example: crs-xjhsdj****. Log in to the [TencentDB for Redis console](https://console.cloud.tencent.com/redis#/) and copy the instance ID in the instance list.
     * @param integer $EventId Event ID. Obtain the ID of the event to be modified using DescribeInstanceEvents.
     * @param string $StartTime Modifies the scheduled start time of event execution.
     * @param string $EndTime Modifies the scheduled end time of event execution. After the start time is configured, the end time can only be 30 minutes, 1 hour, 1.5 hours, 2 hours, or 3 hours later than the start time.
     * @param string $ExecutionDate Modifies the start date of the event execution schedule.
     * @param string $Status Modifies the running status of the event. Currently, this parameter can be set only to **Canceled**, indicating that the execution of the current event is canceled. You can query the running status and level of the current event using DescribeInstanceEvents.- Critical or High events cannot be canceled, which means that they must be executed.- Only events in the Waiting state (to be executed) can be canceled.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ExecutionDate",$param) and $param["ExecutionDate"] !== null) {
            $this->ExecutionDate = $param["ExecutionDate"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
