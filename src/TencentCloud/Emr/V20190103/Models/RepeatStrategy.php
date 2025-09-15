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
 * Scheduled scaling task policy
 *
 * @method string getRepeatType() Obtain The valid values DAY, DOW, DOM, and NONE respectively indicate repetition by day, repetition by week, repetition by month, and one-time execution. This parameter is required.
 * @method void setRepeatType(string $RepeatType) Set The valid values DAY, DOW, DOM, and NONE respectively indicate repetition by day, repetition by week, repetition by month, and one-time execution. This parameter is required.
 * @method DayRepeatStrategy getDayRepeat() Obtain Daily repetition rule, which is effective when RepeatType is set to DAY

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDayRepeat(DayRepeatStrategy $DayRepeat) Set Daily repetition rule, which is effective when RepeatType is set to DAY

Note: This field may return null, indicating that no valid values can be obtained.
 * @method WeekRepeatStrategy getWeekRepeat() Obtain Weekly repetition rule, effective when RepeatType is DOW

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWeekRepeat(WeekRepeatStrategy $WeekRepeat) Set Weekly repetition rule, effective when RepeatType is DOW

Note: This field may return null, indicating that no valid values can be obtained.
 * @method MonthRepeatStrategy getMonthRepeat() Obtain Monthly repetition rule, valid when RepeatType is DOM

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMonthRepeat(MonthRepeatStrategy $MonthRepeat) Set Monthly repetition rule, valid when RepeatType is DOM

Note: This field may return null, indicating that no valid values can be obtained.
 * @method NotRepeatStrategy getNotRepeat() Obtain One-time execution rule, valid when RepeatType is NONE

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNotRepeat(NotRepeatStrategy $NotRepeat) Set One-time execution rule, valid when RepeatType is NONE

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExpire() Obtain Rule expiration time. After this time is due, the rule will be automatically set to the status "suspended". The format is "2020-07-23 00:00:00". It is required.
 * @method void setExpire(string $Expire) Set Rule expiration time. After this time is due, the rule will be automatically set to the status "suspended". The format is "2020-07-23 00:00:00". It is required.
 * @method string getStartTime() Obtain Periodic rule start time.
 * @method void setStartTime(string $StartTime) Set Periodic rule start time.
 */
class RepeatStrategy extends AbstractModel
{
    /**
     * @var string The valid values DAY, DOW, DOM, and NONE respectively indicate repetition by day, repetition by week, repetition by month, and one-time execution. This parameter is required.
     */
    public $RepeatType;

    /**
     * @var DayRepeatStrategy Daily repetition rule, which is effective when RepeatType is set to DAY

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DayRepeat;

    /**
     * @var WeekRepeatStrategy Weekly repetition rule, effective when RepeatType is DOW

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WeekRepeat;

    /**
     * @var MonthRepeatStrategy Monthly repetition rule, valid when RepeatType is DOM

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MonthRepeat;

    /**
     * @var NotRepeatStrategy One-time execution rule, valid when RepeatType is NONE

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NotRepeat;

    /**
     * @var string Rule expiration time. After this time is due, the rule will be automatically set to the status "suspended". The format is "2020-07-23 00:00:00". It is required.
     */
    public $Expire;

    /**
     * @var string Periodic rule start time.
     */
    public $StartTime;

    /**
     * @param string $RepeatType The valid values DAY, DOW, DOM, and NONE respectively indicate repetition by day, repetition by week, repetition by month, and one-time execution. This parameter is required.
     * @param DayRepeatStrategy $DayRepeat Daily repetition rule, which is effective when RepeatType is set to DAY

Note: This field may return null, indicating that no valid values can be obtained.
     * @param WeekRepeatStrategy $WeekRepeat Weekly repetition rule, effective when RepeatType is DOW

Note: This field may return null, indicating that no valid values can be obtained.
     * @param MonthRepeatStrategy $MonthRepeat Monthly repetition rule, valid when RepeatType is DOM

Note: This field may return null, indicating that no valid values can be obtained.
     * @param NotRepeatStrategy $NotRepeat One-time execution rule, valid when RepeatType is NONE

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Expire Rule expiration time. After this time is due, the rule will be automatically set to the status "suspended". The format is "2020-07-23 00:00:00". It is required.
     * @param string $StartTime Periodic rule start time.
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
        if (array_key_exists("RepeatType",$param) and $param["RepeatType"] !== null) {
            $this->RepeatType = $param["RepeatType"];
        }

        if (array_key_exists("DayRepeat",$param) and $param["DayRepeat"] !== null) {
            $this->DayRepeat = new DayRepeatStrategy();
            $this->DayRepeat->deserialize($param["DayRepeat"]);
        }

        if (array_key_exists("WeekRepeat",$param) and $param["WeekRepeat"] !== null) {
            $this->WeekRepeat = new WeekRepeatStrategy();
            $this->WeekRepeat->deserialize($param["WeekRepeat"]);
        }

        if (array_key_exists("MonthRepeat",$param) and $param["MonthRepeat"] !== null) {
            $this->MonthRepeat = new MonthRepeatStrategy();
            $this->MonthRepeat->deserialize($param["MonthRepeat"]);
        }

        if (array_key_exists("NotRepeat",$param) and $param["NotRepeat"] !== null) {
            $this->NotRepeat = new NotRepeatStrategy();
            $this->NotRepeat->deserialize($param["NotRepeat"]);
        }

        if (array_key_exists("Expire",$param) and $param["Expire"] !== null) {
            $this->Expire = $param["Expire"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }
    }
}
