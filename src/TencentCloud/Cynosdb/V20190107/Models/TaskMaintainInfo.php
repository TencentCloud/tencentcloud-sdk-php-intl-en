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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TaskMaintainInfo
 *
 * @method integer getMaintainStartTime() Obtain Execution start time (seconds from 0 o'clock).
 * @method void setMaintainStartTime(integer $MaintainStartTime) Set Execution start time (seconds from 0 o'clock).
 * @method integer getMaintainDuration() Obtain Specifies the continuous time. the unit is second.
 * @method void setMaintainDuration(integer $MaintainDuration) Set Specifies the continuous time. the unit is second.
 * @method array getMaintainWeekDays() Obtain Specifies the time when it can be executed. valid values: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"].
 * @method void setMaintainWeekDays(array $MaintainWeekDays) Set Specifies the time when it can be executed. valid values: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"].
 */
class TaskMaintainInfo extends AbstractModel
{
    /**
     * @var integer Execution start time (seconds from 0 o'clock).
     */
    public $MaintainStartTime;

    /**
     * @var integer Specifies the continuous time. the unit is second.
     */
    public $MaintainDuration;

    /**
     * @var array Specifies the time when it can be executed. valid values: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"].
     */
    public $MaintainWeekDays;

    /**
     * @param integer $MaintainStartTime Execution start time (seconds from 0 o'clock).
     * @param integer $MaintainDuration Specifies the continuous time. the unit is second.
     * @param array $MaintainWeekDays Specifies the time when it can be executed. valid values: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"].
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
        if (array_key_exists("MaintainStartTime",$param) and $param["MaintainStartTime"] !== null) {
            $this->MaintainStartTime = $param["MaintainStartTime"];
        }

        if (array_key_exists("MaintainDuration",$param) and $param["MaintainDuration"] !== null) {
            $this->MaintainDuration = $param["MaintainDuration"];
        }

        if (array_key_exists("MaintainWeekDays",$param) and $param["MaintainWeekDays"] !== null) {
            $this->MaintainWeekDays = $param["MaintainWeekDays"];
        }
    }
}
