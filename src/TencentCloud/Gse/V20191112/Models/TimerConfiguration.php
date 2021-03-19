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
 * The recurrence pattern of auto-scaling
 *
 * @method integer getTimerType() Obtain The recurrence pattern of auto-scaling. `0`: undefined, `1`: once, `2`: daily, `3`: monthly, `4`: weekly
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTimerType(integer $TimerType) Set The recurrence pattern of auto-scaling. `0`: undefined, `1`: once, `2`: daily, `3`: monthly, `4`: weekly
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method TimerValue getTimerValue() Obtain Details of the recurrence pattern of auto-scaling
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTimerValue(TimerValue $TimerValue) Set Details of the recurrence pattern of auto-scaling
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getBeginTime() Obtain Start time of the scheduled scaling policy
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setBeginTime(string $BeginTime) Set Start time of the scheduled scaling policy
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getEndTime() Obtain End time of the scheduled scaling policy
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setEndTime(string $EndTime) Set End time of the scheduled scaling policy
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class TimerConfiguration extends AbstractModel
{
    /**
     * @var integer The recurrence pattern of auto-scaling. `0`: undefined, `1`: once, `2`: daily, `3`: monthly, `4`: weekly
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $TimerType;

    /**
     * @var TimerValue Details of the recurrence pattern of auto-scaling
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $TimerValue;

    /**
     * @var string Start time of the scheduled scaling policy
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $BeginTime;

    /**
     * @var string End time of the scheduled scaling policy
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @param integer $TimerType The recurrence pattern of auto-scaling. `0`: undefined, `1`: once, `2`: daily, `3`: monthly, `4`: weekly
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param TimerValue $TimerValue Details of the recurrence pattern of auto-scaling
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $BeginTime Start time of the scheduled scaling policy
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $EndTime End time of the scheduled scaling policy
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
        if (array_key_exists("TimerType",$param) and $param["TimerType"] !== null) {
            $this->TimerType = $param["TimerType"];
        }

        if (array_key_exists("TimerValue",$param) and $param["TimerValue"] !== null) {
            $this->TimerValue = new TimerValue();
            $this->TimerValue->deserialize($param["TimerValue"]);
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
