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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Scheduling time configuration
 *
 * @method string getScheduledTimeZone() Obtain <p>Scheduling time zone, IANA time zone ID</p>
 * @method void setScheduledTimeZone(string $ScheduledTimeZone) Set <p>Scheduling time zone, IANA time zone ID</p>
 * @method string getStartTime() Obtain <p>Start of effective scheduling time</p><p>Parameter format: timestamp in milliseconds (UTC)</p>
 * @method void setStartTime(string $StartTime) Set <p>Start of effective scheduling time</p><p>Parameter format: timestamp in milliseconds (UTC)</p>
 * @method string getEndTime() Obtain <p>Scheduling expiration time</p><p>Parameter format: millisecond timestamp (UTC)</p>
 * @method void setEndTime(string $EndTime) Set <p>Scheduling expiration time</p><p>Parameter format: millisecond timestamp (UTC)</p>
 * @method string getCycleType() Obtain <p>Cycle type</p><p>Enumeration values:</p><ul><li>DAY_CYCLE: Day</li><li>HOUR_CYCLE: Hour</li><li>MINUTE_CYCLE: Minute</li><li>WEEK_CYCLE: Week</li></ul>
 * @method void setCycleType(string $CycleType) Set <p>Cycle type</p><p>Enumeration values:</p><ul><li>DAY_CYCLE: Day</li><li>HOUR_CYCLE: Hour</li><li>MINUTE_CYCLE: Minute</li><li>WEEK_CYCLE: Week</li></ul>
 * @method integer getCycleNum() Obtain <p>Period step</p>
 * @method void setCycleNum(integer $CycleNum) Set <p>Period step</p>
 */
class ScheduledTimeConfig extends AbstractModel
{
    /**
     * @var string <p>Scheduling time zone, IANA time zone ID</p>
     */
    public $ScheduledTimeZone;

    /**
     * @var string <p>Start of effective scheduling time</p><p>Parameter format: timestamp in milliseconds (UTC)</p>
     */
    public $StartTime;

    /**
     * @var string <p>Scheduling expiration time</p><p>Parameter format: millisecond timestamp (UTC)</p>
     */
    public $EndTime;

    /**
     * @var string <p>Cycle type</p><p>Enumeration values:</p><ul><li>DAY_CYCLE: Day</li><li>HOUR_CYCLE: Hour</li><li>MINUTE_CYCLE: Minute</li><li>WEEK_CYCLE: Week</li></ul>
     */
    public $CycleType;

    /**
     * @var integer <p>Period step</p>
     */
    public $CycleNum;

    /**
     * @param string $ScheduledTimeZone <p>Scheduling time zone, IANA time zone ID</p>
     * @param string $StartTime <p>Start of effective scheduling time</p><p>Parameter format: timestamp in milliseconds (UTC)</p>
     * @param string $EndTime <p>Scheduling expiration time</p><p>Parameter format: millisecond timestamp (UTC)</p>
     * @param string $CycleType <p>Cycle type</p><p>Enumeration values:</p><ul><li>DAY_CYCLE: Day</li><li>HOUR_CYCLE: Hour</li><li>MINUTE_CYCLE: Minute</li><li>WEEK_CYCLE: Week</li></ul>
     * @param integer $CycleNum <p>Period step</p>
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
        if (array_key_exists("ScheduledTimeZone",$param) and $param["ScheduledTimeZone"] !== null) {
            $this->ScheduledTimeZone = $param["ScheduledTimeZone"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("CycleNum",$param) and $param["CycleNum"] !== null) {
            $this->CycleNum = $param["CycleNum"];
        }
    }
}
