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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateProfileTask request structure.
 *
 * @method string getServiceName() Obtain Application name
 * @method void setServiceName(string $ServiceName) Set Application name
 * @method string getInstanceId() Obtain APM business system ID.
 * @method void setInstanceId(string $InstanceId) Set APM business system ID.
 * @method string getServiceInstance() Obtain Application instance (online).
 * @method void setServiceInstance(string $ServiceInstance) Set Application instance (online).
 * @method string getEvent() Obtain Event type (cpu, alloc).
 * @method void setEvent(string $Event) Set Event type (cpu, alloc).
 * @method integer getDuration() Obtain Specifies the task duration in milliseconds (ms). value range: 5 to 180 seconds.
 * @method void setDuration(integer $Duration) Set Specifies the task duration in milliseconds (ms). value range: 5 to 180 seconds.
 * @method integer getAllTimes() Obtain Number of execution. value range: 1-100.
 * @method void setAllTimes(integer $AllTimes) Set Number of execution. value range: 1-100.
 * @method integer getStartTime() Obtain Start timestamp. 0 indicates start from the current time (unit: seconds).
 * @method void setStartTime(integer $StartTime) Set Start timestamp. 0 indicates start from the current time (unit: seconds).
 * @method integer getTaskInterval() Obtain Specifies the task execution interval in milliseconds (ms). value range: 10 to 600 seconds. cannot be less than 1.5 times the Duration.
 * @method void setTaskInterval(integer $TaskInterval) Set Specifies the task execution interval in milliseconds (ms). value range: 10 to 600 seconds. cannot be less than 1.5 times the Duration.
 */
class CreateProfileTaskRequest extends AbstractModel
{
    /**
     * @var string Application name
     */
    public $ServiceName;

    /**
     * @var string APM business system ID.
     */
    public $InstanceId;

    /**
     * @var string Application instance (online).
     */
    public $ServiceInstance;

    /**
     * @var string Event type (cpu, alloc).
     */
    public $Event;

    /**
     * @var integer Specifies the task duration in milliseconds (ms). value range: 5 to 180 seconds.
     */
    public $Duration;

    /**
     * @var integer Number of execution. value range: 1-100.
     */
    public $AllTimes;

    /**
     * @var integer Start timestamp. 0 indicates start from the current time (unit: seconds).
     */
    public $StartTime;

    /**
     * @var integer Specifies the task execution interval in milliseconds (ms). value range: 10 to 600 seconds. cannot be less than 1.5 times the Duration.
     */
    public $TaskInterval;

    /**
     * @param string $ServiceName Application name
     * @param string $InstanceId APM business system ID.
     * @param string $ServiceInstance Application instance (online).
     * @param string $Event Event type (cpu, alloc).
     * @param integer $Duration Specifies the task duration in milliseconds (ms). value range: 5 to 180 seconds.
     * @param integer $AllTimes Number of execution. value range: 1-100.
     * @param integer $StartTime Start timestamp. 0 indicates start from the current time (unit: seconds).
     * @param integer $TaskInterval Specifies the task execution interval in milliseconds (ms). value range: 10 to 600 seconds. cannot be less than 1.5 times the Duration.
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
        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ServiceInstance",$param) and $param["ServiceInstance"] !== null) {
            $this->ServiceInstance = $param["ServiceInstance"];
        }

        if (array_key_exists("Event",$param) and $param["Event"] !== null) {
            $this->Event = $param["Event"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("AllTimes",$param) and $param["AllTimes"] !== null) {
            $this->AllTimes = $param["AllTimes"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("TaskInterval",$param) and $param["TaskInterval"] !== null) {
            $this->TaskInterval = $param["TaskInterval"];
        }
    }
}
