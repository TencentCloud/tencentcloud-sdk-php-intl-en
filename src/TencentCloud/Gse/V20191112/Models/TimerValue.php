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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of the recurrence pattern of the scheduled scaling policy
 *
 * @method integer getDay() Obtain Execute once every X day(s)
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setDay(integer $Day) Set Execute once every X day(s)
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getFromDay() Obtain Specify the first day to execute the scaling action in a month (execute once per day)
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setFromDay(integer $FromDay) Set Specify the first day to execute the scaling action in a month (execute once per day)
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getToDay() Obtain Specify the last day to execute the scaling action in a month
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setToDay(integer $ToDay) Set Specify the last day to execute the scaling action in a month
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getWeekDays() Obtain Specify the week days to repeat the scaling action. Multiple values are supported. Valid values: `1` (Monday), `2` (Tuesday), `3` (Wednesday), `4` (Thursday), `5` (Friday), `6` (Saturday), `7` (Sunday). 
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setWeekDays(array $WeekDays) Set Specify the week days to repeat the scaling action. Multiple values are supported. Valid values: `1` (Monday), `2` (Tuesday), `3` (Wednesday), `4` (Thursday), `5` (Friday), `6` (Saturday), `7` (Sunday). 
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class TimerValue extends AbstractModel
{
    /**
     * @var integer Execute once every X day(s)
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Day;

    /**
     * @var integer Specify the first day to execute the scaling action in a month (execute once per day)
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $FromDay;

    /**
     * @var integer Specify the last day to execute the scaling action in a month
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ToDay;

    /**
     * @var array Specify the week days to repeat the scaling action. Multiple values are supported. Valid values: `1` (Monday), `2` (Tuesday), `3` (Wednesday), `4` (Thursday), `5` (Friday), `6` (Saturday), `7` (Sunday). 
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $WeekDays;

    /**
     * @param integer $Day Execute once every X day(s)
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $FromDay Specify the first day to execute the scaling action in a month (execute once per day)
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $ToDay Specify the last day to execute the scaling action in a month
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $WeekDays Specify the week days to repeat the scaling action. Multiple values are supported. Valid values: `1` (Monday), `2` (Tuesday), `3` (Wednesday), `4` (Thursday), `5` (Friday), `6` (Saturday), `7` (Sunday). 
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("Day",$param) and $param["Day"] !== null) {
            $this->Day = $param["Day"];
        }

        if (array_key_exists("FromDay",$param) and $param["FromDay"] !== null) {
            $this->FromDay = $param["FromDay"];
        }

        if (array_key_exists("ToDay",$param) and $param["ToDay"] !== null) {
            $this->ToDay = $param["ToDay"];
        }

        if (array_key_exists("WeekDays",$param) and $param["WeekDays"] !== null) {
            $this->WeekDays = $param["WeekDays"];
        }
    }
}
