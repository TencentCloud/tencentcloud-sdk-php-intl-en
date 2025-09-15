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
 * Scheduled scaling-out of weekly recurring tasks policy
 *
 * @method string getExecuteAtTimeOfDay() Obtain Specific time for repetition task execution, such as 01:02:00.
 * @method void setExecuteAtTimeOfDay(string $ExecuteAtTimeOfDay) Set Specific time for repetition task execution, such as 01:02:00.
 * @method array getDaysOfWeek() Obtain Ordinal number description of the day of a week, for example, [1,3,4] indicates Monday, Wednesday, and Thursday.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDaysOfWeek(array $DaysOfWeek) Set Ordinal number description of the day of a week, for example, [1,3,4] indicates Monday, Wednesday, and Thursday.

Note: This field may return null, indicating that no valid values can be obtained.
 */
class WeekRepeatStrategy extends AbstractModel
{
    /**
     * @var string Specific time for repetition task execution, such as 01:02:00.
     */
    public $ExecuteAtTimeOfDay;

    /**
     * @var array Ordinal number description of the day of a week, for example, [1,3,4] indicates Monday, Wednesday, and Thursday.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DaysOfWeek;

    /**
     * @param string $ExecuteAtTimeOfDay Specific time for repetition task execution, such as 01:02:00.
     * @param array $DaysOfWeek Ordinal number description of the day of a week, for example, [1,3,4] indicates Monday, Wednesday, and Thursday.

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

        if (array_key_exists("DaysOfWeek",$param) and $param["DaysOfWeek"] !== null) {
            $this->DaysOfWeek = $param["DaysOfWeek"];
        }
    }
}
