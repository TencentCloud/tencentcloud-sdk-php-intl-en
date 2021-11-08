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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Event trigger time settings
 *
 * @method string getStartType() Obtain Event trigger type
 * @method void setStartType(string $StartType) Set Event trigger type
 * @method string getTime() Obtain Not empty if `StartType` is `FIXED_TIME`
UTC time, such as `2020-01-01T12:00:00Z`
 * @method void setTime(string $Time) Set Not empty if `StartType` is `FIXED_TIME`
UTC time, such as `2020-01-01T12:00:00Z`
 * @method string getStartTime() Obtain This parameter cannot be empty if `EventType` is `TIMED_RECORD`.
It indicates the start time for recording in UTC format (e.g., `2020-01-01T12:00:00Z`) and must be at least 1 minute later than the current time.
 * @method void setStartTime(string $StartTime) Set This parameter cannot be empty if `EventType` is `TIMED_RECORD`.
It indicates the start time for recording in UTC format (e.g., `2020-01-01T12:00:00Z`) and must be at least 1 minute later than the current time.
 * @method string getEndTime() Obtain This parameter cannot be empty if `EventType` is `TIMED_RECORD`.
It indicates the end time for recording in UTC format (e.g., `2020-01-01T12:00:00Z`) and must be at least 1 minute later than the start time for recording.
 * @method void setEndTime(string $EndTime) Set This parameter cannot be empty if `EventType` is `TIMED_RECORD`.
It indicates the end time for recording in UTC format (e.g., `2020-01-01T12:00:00Z`) and must be at least 1 minute later than the start time for recording.
 */
class TimingSettingsResp extends AbstractModel
{
    /**
     * @var string Event trigger type
     */
    public $StartType;

    /**
     * @var string Not empty if `StartType` is `FIXED_TIME`
UTC time, such as `2020-01-01T12:00:00Z`
     */
    public $Time;

    /**
     * @var string This parameter cannot be empty if `EventType` is `TIMED_RECORD`.
It indicates the start time for recording in UTC format (e.g., `2020-01-01T12:00:00Z`) and must be at least 1 minute later than the current time.
     */
    public $StartTime;

    /**
     * @var string This parameter cannot be empty if `EventType` is `TIMED_RECORD`.
It indicates the end time for recording in UTC format (e.g., `2020-01-01T12:00:00Z`) and must be at least 1 minute later than the start time for recording.
     */
    public $EndTime;

    /**
     * @param string $StartType Event trigger type
     * @param string $Time Not empty if `StartType` is `FIXED_TIME`
UTC time, such as `2020-01-01T12:00:00Z`
     * @param string $StartTime This parameter cannot be empty if `EventType` is `TIMED_RECORD`.
It indicates the start time for recording in UTC format (e.g., `2020-01-01T12:00:00Z`) and must be at least 1 minute later than the current time.
     * @param string $EndTime This parameter cannot be empty if `EventType` is `TIMED_RECORD`.
It indicates the end time for recording in UTC format (e.g., `2020-01-01T12:00:00Z`) and must be at least 1 minute later than the start time for recording.
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
        if (array_key_exists("StartType",$param) and $param["StartType"] !== null) {
            $this->StartType = $param["StartType"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
