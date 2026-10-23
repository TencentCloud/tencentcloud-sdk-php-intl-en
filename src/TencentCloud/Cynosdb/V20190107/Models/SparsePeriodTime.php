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
 * Sparse backup cycle information
 *
 * @method array getWeekDays() Obtain By week: list of days of the week, 1-7, 1=Monday, 7=Sunday (only for weekly period, up to 7)
 * @method void setWeekDays(array $WeekDays) Set By week: list of days of the week, 1-7, 1=Monday, 7=Sunday (only for weekly period, up to 7)
 * @method array getDays() Obtain Monthly: date list, 1-31 (only for monthly cycle, up to 7)
 * @method void setDays(array $Days) Set Monthly: date list, 1-31 (only for monthly cycle, up to 7)
 * @method array getMonthDays() Obtain Yearly: list of month-day combinations (only for yearly cycle, up to 7)
 * @method void setMonthDays(array $MonthDays) Set Yearly: list of month-day combinations (only for yearly cycle, up to 7)
 */
class SparsePeriodTime extends AbstractModel
{
    /**
     * @var array By week: list of days of the week, 1-7, 1=Monday, 7=Sunday (only for weekly period, up to 7)
     */
    public $WeekDays;

    /**
     * @var array Monthly: date list, 1-31 (only for monthly cycle, up to 7)
     */
    public $Days;

    /**
     * @var array Yearly: list of month-day combinations (only for yearly cycle, up to 7)
     */
    public $MonthDays;

    /**
     * @param array $WeekDays By week: list of days of the week, 1-7, 1=Monday, 7=Sunday (only for weekly period, up to 7)
     * @param array $Days Monthly: date list, 1-31 (only for monthly cycle, up to 7)
     * @param array $MonthDays Yearly: list of month-day combinations (only for yearly cycle, up to 7)
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
