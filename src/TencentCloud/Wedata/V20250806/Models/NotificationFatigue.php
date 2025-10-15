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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Alarm fatigue Alarm configuration.
 *
 * @method integer getNotifyCount() Obtain Number of alarms.
 * @method void setNotifyCount(integer $NotifyCount) Set Number of alarms.
 * @method integer getNotifyInterval() Obtain Alarm interval, in minutes.
 * @method void setNotifyInterval(integer $NotifyInterval) Set Alarm interval, in minutes.
 * @method array getQuietIntervals() Obtain Do not disturb period, such as example value.
[{DaysOfWeek: [1, 2], StartTime: "00:00:00", EndTime: "09:00:00"}]	
Specifies notification muting from 00:00 to 09:00 every monday and tuesday.
 * @method void setQuietIntervals(array $QuietIntervals) Set Do not disturb period, such as example value.
[{DaysOfWeek: [1, 2], StartTime: "00:00:00", EndTime: "09:00:00"}]	
Specifies notification muting from 00:00 to 09:00 every monday and tuesday.
 */
class NotificationFatigue extends AbstractModel
{
    /**
     * @var integer Number of alarms.
     */
    public $NotifyCount;

    /**
     * @var integer Alarm interval, in minutes.
     */
    public $NotifyInterval;

    /**
     * @var array Do not disturb period, such as example value.
[{DaysOfWeek: [1, 2], StartTime: "00:00:00", EndTime: "09:00:00"}]	
Specifies notification muting from 00:00 to 09:00 every monday and tuesday.
     */
    public $QuietIntervals;

    /**
     * @param integer $NotifyCount Number of alarms.
     * @param integer $NotifyInterval Alarm interval, in minutes.
     * @param array $QuietIntervals Do not disturb period, such as example value.
[{DaysOfWeek: [1, 2], StartTime: "00:00:00", EndTime: "09:00:00"}]	
Specifies notification muting from 00:00 to 09:00 every monday and tuesday.
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
        if (array_key_exists("NotifyCount",$param) and $param["NotifyCount"] !== null) {
            $this->NotifyCount = $param["NotifyCount"];
        }

        if (array_key_exists("NotifyInterval",$param) and $param["NotifyInterval"] !== null) {
            $this->NotifyInterval = $param["NotifyInterval"];
        }

        if (array_key_exists("QuietIntervals",$param) and $param["QuietIntervals"] !== null) {
            $this->QuietIntervals = [];
            foreach ($param["QuietIntervals"] as $key => $value){
                $obj = new AlarmQuietInterval();
                $obj->deserialize($value);
                array_push($this->QuietIntervals, $obj);
            }
        }
    }
}
