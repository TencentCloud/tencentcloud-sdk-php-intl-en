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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Scheduled transactions and actions.
 *
 * @method boolean getScheduleStop() Obtain Whether to stop the service on schedule. Valid values: true and false. If the value is true, ScheduleStopTime is required. If the value is false, ScheduleStopTime does not take effect.
 * @method void setScheduleStop(boolean $ScheduleStop) Set Whether to stop the service on schedule. Valid values: true and false. If the value is true, ScheduleStopTime is required. If the value is false, ScheduleStopTime does not take effect.
 * @method string getScheduleStopTime() Obtain Time to execute the scheduled stop. Format: "2022-01-26T19:46:22+08:00".
 * @method void setScheduleStopTime(string $ScheduleStopTime) Set Time to execute the scheduled stop. Format: "2022-01-26T19:46:22+08:00".
 */
class ScheduledAction extends AbstractModel
{
    /**
     * @var boolean Whether to stop the service on schedule. Valid values: true and false. If the value is true, ScheduleStopTime is required. If the value is false, ScheduleStopTime does not take effect.
     */
    public $ScheduleStop;

    /**
     * @var string Time to execute the scheduled stop. Format: "2022-01-26T19:46:22+08:00".
     */
    public $ScheduleStopTime;

    /**
     * @param boolean $ScheduleStop Whether to stop the service on schedule. Valid values: true and false. If the value is true, ScheduleStopTime is required. If the value is false, ScheduleStopTime does not take effect.
     * @param string $ScheduleStopTime Time to execute the scheduled stop. Format: "2022-01-26T19:46:22+08:00".
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
        if (array_key_exists("ScheduleStop",$param) and $param["ScheduleStop"] !== null) {
            $this->ScheduleStop = $param["ScheduleStop"];
        }

        if (array_key_exists("ScheduleStopTime",$param) and $param["ScheduleStopTime"] !== null) {
            $this->ScheduleStopTime = $param["ScheduleStopTime"];
        }
    }
}
