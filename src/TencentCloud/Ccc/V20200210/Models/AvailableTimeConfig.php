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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getDayType() Obtain 
 * @method void setDayType(string $DayType) Set 
 * @method array getDaysOfWeek() Obtain 
 * @method void setDaysOfWeek(array $DaysOfWeek) Set 
 * @method array getTimeRanges() Obtain 
 * @method void setTimeRanges(array $TimeRanges) Set 
 */
class AvailableTimeConfig extends AbstractModel
{
    /**
     * @var string 
     */
    public $DayType;

    /**
     * @var array 
     */
    public $DaysOfWeek;

    /**
     * @var array 
     */
    public $TimeRanges;

    /**
     * @param string $DayType 
     * @param array $DaysOfWeek 
     * @param array $TimeRanges 
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
        if (array_key_exists("DayType",$param) and $param["DayType"] !== null) {
            $this->DayType = $param["DayType"];
        }

        if (array_key_exists("DaysOfWeek",$param) and $param["DaysOfWeek"] !== null) {
            $this->DaysOfWeek = $param["DaysOfWeek"];
        }

        if (array_key_exists("TimeRanges",$param) and $param["TimeRanges"] !== null) {
            $this->TimeRanges = [];
            foreach ($param["TimeRanges"] as $key => $value){
                $obj = new TimeRange();
                $obj->deserialize($value);
                array_push($this->TimeRanges, $obj);
            }
        }
    }
}
