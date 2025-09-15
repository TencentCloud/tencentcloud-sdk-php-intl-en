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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Scheduled scaling of monthly recurring task policy
 *
 * @method string getExecuteAtTimeOfDay() Obtain Specific time for repetition task execution, such as 01:02:00.
 * @method void setExecuteAtTimeOfDay(string $ExecuteAtTimeOfDay) Set Specific time for repetition task execution, such as 01:02:00.
 * @method array getDaysOfMonthRange() Obtain Description of time period in days of the month. The length must be 2. For example, [2,10] indicates from the 2nd day to the 10th day every month.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDaysOfMonthRange(array $DaysOfMonthRange) Set Description of time period in days of the month. The length must be 2. For example, [2,10] indicates from the 2nd day to the 10th day every month.

Note: This field may return null, indicating that no valid values can be obtained.
 */
class MonthRepeatStrategy extends AbstractModel
{
    /**
     * @var string Specific time for repetition task execution, such as 01:02:00.
     */
    public $ExecuteAtTimeOfDay;

    /**
     * @var array Description of time period in days of the month. The length must be 2. For example, [2,10] indicates from the 2nd day to the 10th day every month.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DaysOfMonthRange;

    /**
     * @param string $ExecuteAtTimeOfDay Specific time for repetition task execution, such as 01:02:00.
     * @param array $DaysOfMonthRange Description of time period in days of the month. The length must be 2. For example, [2,10] indicates from the 2nd day to the 10th day every month.

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
        if (array_key_exists("ExecuteAtTimeOfDay",$param) and $param["ExecuteAtTimeOfDay"] !== null) {
            $this->ExecuteAtTimeOfDay = $param["ExecuteAtTimeOfDay"];
        }

        if (array_key_exists("DaysOfMonthRange",$param) and $param["DaysOfMonthRange"] !== null) {
            $this->DaysOfMonthRange = $param["DaysOfMonthRange"];
        }
    }
}
