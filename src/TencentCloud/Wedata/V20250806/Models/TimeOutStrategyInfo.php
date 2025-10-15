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
 * Alarm timeout configuration rule information.
 *
 * @method integer getRuleType() Obtain Timeout Alarm Configuration

Expected Execution Duration Timeout - The actual runtime exceeds the estimated execution duration.

Expected Completion Time Timeout - The task has not completed by the estimated completion time.

Expected Scheduling Wait Timeout - The waiting time in the scheduling queue exceeds the estimated wait time.

Cycle-Incomplete Timeout - The task was expected to complete within its scheduled cycle but did not.
 * @method void setRuleType(integer $RuleType) Set Timeout Alarm Configuration

Expected Execution Duration Timeout - The actual runtime exceeds the estimated execution duration.

Expected Completion Time Timeout - The task has not completed by the estimated completion time.

Expected Scheduling Wait Timeout - The waiting time in the scheduling queue exceeds the estimated wait time.

Cycle-Incomplete Timeout - The task was expected to complete within its scheduled cycle but did not.
 * @method integer getType() Obtain Timeout Value Configuration Type

1: Fixed value (specified manually)

2: Average value (calculated automatically)
 * @method void setType(integer $Type) Set Timeout Value Configuration Type

1: Fixed value (specified manually)

2: Average value (calculated automatically)
 * @method integer getHour() Obtain Timeout Specified Value (hours) - The timeout threshold in hours. Default is 1.
 * @method void setHour(integer $Hour) Set Timeout Specified Value (hours) - The timeout threshold in hours. Default is 1.
 * @method integer getMin() Obtain Timeout Specified Value (minutes) - The timeout threshold in minutes. Default is 1.
 * @method void setMin(integer $Min) Set Timeout Specified Value (minutes) - The timeout threshold in minutes. Default is 1.
 * @method string getScheduleTimeZone() Obtain The time zone configuration corresponding to the timeout, such as UTC+7, defaults to UTC+8.

 * @method void setScheduleTimeZone(string $ScheduleTimeZone) Set The time zone configuration corresponding to the timeout, such as UTC+7, defaults to UTC+8.
 */
class TimeOutStrategyInfo extends AbstractModel
{
    /**
     * @var integer Timeout Alarm Configuration

Expected Execution Duration Timeout - The actual runtime exceeds the estimated execution duration.

Expected Completion Time Timeout - The task has not completed by the estimated completion time.

Expected Scheduling Wait Timeout - The waiting time in the scheduling queue exceeds the estimated wait time.

Cycle-Incomplete Timeout - The task was expected to complete within its scheduled cycle but did not.
     */
    public $RuleType;

    /**
     * @var integer Timeout Value Configuration Type

1: Fixed value (specified manually)

2: Average value (calculated automatically)
     */
    public $Type;

    /**
     * @var integer Timeout Specified Value (hours) - The timeout threshold in hours. Default is 1.
     */
    public $Hour;

    /**
     * @var integer Timeout Specified Value (minutes) - The timeout threshold in minutes. Default is 1.
     */
    public $Min;

    /**
     * @var string The time zone configuration corresponding to the timeout, such as UTC+7, defaults to UTC+8.

     */
    public $ScheduleTimeZone;

    /**
     * @param integer $RuleType Timeout Alarm Configuration

Expected Execution Duration Timeout - The actual runtime exceeds the estimated execution duration.

Expected Completion Time Timeout - The task has not completed by the estimated completion time.

Expected Scheduling Wait Timeout - The waiting time in the scheduling queue exceeds the estimated wait time.

Cycle-Incomplete Timeout - The task was expected to complete within its scheduled cycle but did not.
     * @param integer $Type Timeout Value Configuration Type

1: Fixed value (specified manually)

2: Average value (calculated automatically)
     * @param integer $Hour Timeout Specified Value (hours) - The timeout threshold in hours. Default is 1.
     * @param integer $Min Timeout Specified Value (minutes) - The timeout threshold in minutes. Default is 1.
     * @param string $ScheduleTimeZone The time zone configuration corresponding to the timeout, such as UTC+7, defaults to UTC+8.
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
        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Hour",$param) and $param["Hour"] !== null) {
            $this->Hour = $param["Hour"];
        }

        if (array_key_exists("Min",$param) and $param["Min"] !== null) {
            $this->Min = $param["Min"];
        }

        if (array_key_exists("ScheduleTimeZone",$param) and $param["ScheduleTimeZone"] !== null) {
            $this->ScheduleTimeZone = $param["ScheduleTimeZone"];
        }
    }
}
