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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyMaintenanceWindow request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method string getStartTime() Obtain <p>Ops window start time</p><p>Parameter format: hh:mm:ss</p>
 * @method void setStartTime(string $StartTime) Set <p>Ops window start time</p><p>Parameter format: hh:mm:ss</p>
 * @method integer getDuration() Obtain <p>Ops window duration</p><p>Value ranges from 1 to 3</p><p>Unit: hour</p>
 * @method void setDuration(integer $Duration) Set <p>Ops window duration</p><p>Value ranges from 1 to 3</p><p>Unit: hour</p>
 * @method array getWeekDays() Obtain <p>Ops window date</p><p>Enumeration value:</p><ul><li>Monday: Monday</li><li>Tuesday: Tuesday</li><li>Wednesday: Wednesday</li><li>Thursday: Thursday</li><li>Friday: Friday</li><li>Saturday: Saturday</li><li>Sunday: Sunday</li></ul>
 * @method void setWeekDays(array $WeekDays) Set <p>Ops window date</p><p>Enumeration value:</p><ul><li>Monday: Monday</li><li>Tuesday: Tuesday</li><li>Wednesday: Wednesday</li><li>Thursday: Thursday</li><li>Friday: Friday</li><li>Saturday: Saturday</li><li>Sunday: Sunday</li></ul>
 */
class ModifyMaintenanceWindowRequest extends AbstractModel
{
    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Ops window start time</p><p>Parameter format: hh:mm:ss</p>
     */
    public $StartTime;

    /**
     * @var integer <p>Ops window duration</p><p>Value ranges from 1 to 3</p><p>Unit: hour</p>
     */
    public $Duration;

    /**
     * @var array <p>Ops window date</p><p>Enumeration value:</p><ul><li>Monday: Monday</li><li>Tuesday: Tuesday</li><li>Wednesday: Wednesday</li><li>Thursday: Thursday</li><li>Friday: Friday</li><li>Saturday: Saturday</li><li>Sunday: Sunday</li></ul>
     */
    public $WeekDays;

    /**
     * @param string $InstanceId <p>Instance ID.</p>
     * @param string $StartTime <p>Ops window start time</p><p>Parameter format: hh:mm:ss</p>
     * @param integer $Duration <p>Ops window duration</p><p>Value ranges from 1 to 3</p><p>Unit: hour</p>
     * @param array $WeekDays <p>Ops window date</p><p>Enumeration value:</p><ul><li>Monday: Monday</li><li>Tuesday: Tuesday</li><li>Wednesday: Wednesday</li><li>Thursday: Thursday</li><li>Friday: Friday</li><li>Saturday: Saturday</li><li>Sunday: Sunday</li></ul>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("WeekDays",$param) and $param["WeekDays"] !== null) {
            $this->WeekDays = $param["WeekDays"];
        }
    }
}
