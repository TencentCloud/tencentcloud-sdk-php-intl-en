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
 * @method integer getMaintainStartTime() Obtain Execution start time (seconds from 00:00:00)
 * @method void setMaintainStartTime(integer $MaintainStartTime) Set Execution start time (seconds from 00:00:00)
 * @method integer getMaintainDuration() Obtain Continuous time (unit: second)
 * @method void setMaintainDuration(integer $MaintainDuration) Set Continuous time (unit: second)
 * @method array getMaintainWeekDays() Obtain The time when it can be executed. Enumeration values: ["Mon","Tue","Wed","Thu","Fri", "Sat", "Sun"]
 * @method void setMaintainWeekDays(array $MaintainWeekDays) Set The time when it can be executed. Enumeration values: ["Mon","Tue","Wed","Thu","Fri", "Sat", "Sun"]
 */
class TaskMaintainInfo extends AbstractModel
{
    /**
     * @var integer Execution start time (seconds from 00:00:00)
     */
    public $MaintainStartTime;

    /**
     * @var integer Continuous time (unit: second)
     */
    public $MaintainDuration;

    /**
     * @var array The time when it can be executed. Enumeration values: ["Mon","Tue","Wed","Thu","Fri", "Sat", "Sun"]
     */
    public $MaintainWeekDays;

    /**
     * @param integer $MaintainStartTime Execution start time (seconds from 00:00:00)
     * @param integer $MaintainDuration Continuous time (unit: second)
     * @param array $MaintainWeekDays The time when it can be executed. Enumeration values: ["Mon","Tue","Wed","Thu","Fri", "Sat", "Sun"]
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
