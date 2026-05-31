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
 * Sparse backup cycle info
 *
 * @method array getWeekDays() Obtain Weekly: List of days of the week, 1-7, 1=Monday, 7=Sunday (Only used for weekly cycle, up to 7).
 * @method void setWeekDays(array $WeekDays) Set Weekly: List of days of the week, 1-7, 1=Monday, 7=Sunday (Only used for weekly cycle, up to 7).
 * @method array getDays() Obtain By month: Date list, 1-31 (for monthly cycle only, up to 7)
 * @method void setDays(array $Days) Set By month: Date list, 1-31 (for monthly cycle only, up to 7)
 * @method array getMonthDays() Obtain Yearly: Month-day composite column (Only for yearly cycle, up to 7)
 * @method void setMonthDays(array $MonthDays) Set Yearly: Month-day composite column (Only for yearly cycle, up to 7)
 */
class SparsePeriodTime extends AbstractModel
{
    /**
     * @var array Weekly: List of days of the week, 1-7, 1=Monday, 7=Sunday (Only used for weekly cycle, up to 7).
     */
    public $WeekDays;

    /**
     * @var array By month: Date list, 1-31 (for monthly cycle only, up to 7)
     */
    public $Days;

    /**
     * @var array Yearly: Month-day composite column (Only for yearly cycle, up to 7)
     */
    public $MonthDays;

    /**
     * @param array $WeekDays Weekly: List of days of the week, 1-7, 1=Monday, 7=Sunday (Only used for weekly cycle, up to 7).
     * @param array $Days By month: Date list, 1-31 (for monthly cycle only, up to 7)
     * @param array $MonthDays Yearly: Month-day composite column (Only for yearly cycle, up to 7)
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
        if (array_key_exists("WeekDays",$param) and $param["WeekDays"] !== null) {
            $this->WeekDays = $param["WeekDays"];
        }

        if (array_key_exists("Days",$param) and $param["Days"] !== null) {
            $this->Days = $param["Days"];
        }

        if (array_key_exists("MonthDays",$param) and $param["MonthDays"] !== null) {
            $this->MonthDays = [];
            foreach ($param["MonthDays"] as $key => $value){
                $obj = new MonthDay();
                $obj->deserialize($value);
                array_push($this->MonthDays, $obj);
            }
        }
    }
}
