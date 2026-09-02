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
 * Schedule task execution configuration
 *
 * @method string getScheduleType() Obtain Scheduling type: daily, weekly, monthly
 * @method void setScheduleType(string $ScheduleType) Set Scheduling type: daily, weekly, monthly
 * @method integer getDay() Obtain If not passed, the day is used for daily scheduling. For weekly scheduling configuration (day of the week (1=Monday, ..., 7=Sunday)), for monthly scheduling configuration (day of the month (1-31)).
 * @method void setDay(integer $Day) Set If not passed, the day is used for daily scheduling. For weekly scheduling configuration (day of the week (1=Monday, ..., 7=Sunday)), for monthly scheduling configuration (day of the month (1-31)).
 * @method string getTime() Obtain Scheduling time configuration
 * @method void setTime(string $Time) Set Scheduling time configuration
 * @method string getTimeZone() Obtain Time zone. Default: UTC+8 (Asia/Shanghai)
 * @method void setTimeZone(string $TimeZone) Set Time zone. Default: UTC+8 (Asia/Shanghai)
 */
class DspmScheduleConfig extends AbstractModel
{
    /**
     * @var string Scheduling type: daily, weekly, monthly
     */
    public $ScheduleType;

    /**
     * @var integer If not passed, the day is used for daily scheduling. For weekly scheduling configuration (day of the week (1=Monday, ..., 7=Sunday)), for monthly scheduling configuration (day of the month (1-31)).
     */
    public $Day;

    /**
     * @var string Scheduling time configuration
     */
    public $Time;

    /**
     * @var string Time zone. Default: UTC+8 (Asia/Shanghai)
     */
    public $TimeZone;

    /**
     * @param string $ScheduleType Scheduling type: daily, weekly, monthly
     * @param integer $Day If not passed, the day is used for daily scheduling. For weekly scheduling configuration (day of the week (1=Monday, ..., 7=Sunday)), for monthly scheduling configuration (day of the month (1-31)).
     * @param string $Time Scheduling time configuration
     * @param string $TimeZone Time zone. Default: UTC+8 (Asia/Shanghai)
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
        if (array_key_exists("ScheduleType",$param) and $param["ScheduleType"] !== null) {
            $this->ScheduleType = $param["ScheduleType"];
        }

        if (array_key_exists("Day",$param) and $param["Day"] !== null) {
            $this->Day = $param["Day"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }
    }
}
