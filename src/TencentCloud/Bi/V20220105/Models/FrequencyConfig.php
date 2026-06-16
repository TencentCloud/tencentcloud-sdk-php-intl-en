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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Scheduled task execution frequency configuration
 *
 * @method string getFrequency() Obtain Cycle
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFrequency(string $Frequency) Set Cycle
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getDates() Obtain Date
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDates(array $Dates) Set Date
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTime() Obtain Time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTime(string $Time) Set Time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIntervalTime() Obtain Interval
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIntervalTime(integer $IntervalTime) Set Interval
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIntervalTimeUnit() Obtain 1:SECOND,2:MINUTE,3:HOUR,4:DAY
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIntervalTimeUnit(integer $IntervalTimeUnit) Set 1:SECOND,2:MINUTE,3:HOUR,4:DAY
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getHours() Obtain hourly list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHours(array $Hours) Set hourly list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getMinute() Obtain Minute list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMinute(array $Minute) Set Minute list
Note: This field may return null, indicating that no valid values can be obtained.
 */
class FrequencyConfig extends AbstractModel
{
    /**
     * @var string Cycle
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Frequency;

    /**
     * @var array Date
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Dates;

    /**
     * @var string Time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Time;

    /**
     * @var integer Interval
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IntervalTime;

    /**
     * @var integer 1:SECOND,2:MINUTE,3:HOUR,4:DAY
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IntervalTimeUnit;

    /**
     * @var array hourly list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Hours;

    /**
     * @var array Minute list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Minute;

    /**
     * @param string $Frequency Cycle
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Dates Date
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Time Time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IntervalTime Interval
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IntervalTimeUnit 1:SECOND,2:MINUTE,3:HOUR,4:DAY
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Hours hourly list
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Minute Minute list
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
        if (array_key_exists("Frequency",$param) and $param["Frequency"] !== null) {
            $this->Frequency = $param["Frequency"];
        }

        if (array_key_exists("Dates",$param) and $param["Dates"] !== null) {
            $this->Dates = $param["Dates"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("IntervalTime",$param) and $param["IntervalTime"] !== null) {
            $this->IntervalTime = $param["IntervalTime"];
        }

        if (array_key_exists("IntervalTimeUnit",$param) and $param["IntervalTimeUnit"] !== null) {
            $this->IntervalTimeUnit = $param["IntervalTimeUnit"];
        }

        if (array_key_exists("Hours",$param) and $param["Hours"] !== null) {
            $this->Hours = $param["Hours"];
        }

        if (array_key_exists("Minute",$param) and $param["Minute"] !== null) {
            $this->Minute = $param["Minute"];
        }
    }
}
