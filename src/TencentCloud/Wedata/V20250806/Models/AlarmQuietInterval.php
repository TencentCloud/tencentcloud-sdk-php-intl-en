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
 * Alarm do-not-disturb time interval.
 *
 * @method array getDaysOfWeek() Obtain ISO standard. 1 means monday, 7 means sunday.
 * @method void setDaysOfWeek(array $DaysOfWeek) Set ISO standard. 1 means monday, 7 means sunday.
 * @method string getStartTime() Obtain Start time. precision: hour/minute/second. format: HH:mm:ss.
 * @method void setStartTime(string $StartTime) Set Start time. precision: hour/minute/second. format: HH:mm:ss.
 * @method string getEndTime() Obtain End time. precision: hour/minute/second. format: HH:mm:ss.
 * @method void setEndTime(string $EndTime) Set End time. precision: hour/minute/second. format: HH:mm:ss.
 */
class AlarmQuietInterval extends AbstractModel
{
    /**
     * @var array ISO standard. 1 means monday, 7 means sunday.
     */
    public $DaysOfWeek;

    /**
     * @var string Start time. precision: hour/minute/second. format: HH:mm:ss.
     */
    public $StartTime;

    /**
     * @var string End time. precision: hour/minute/second. format: HH:mm:ss.
     */
    public $EndTime;

    /**
     * @param array $DaysOfWeek ISO standard. 1 means monday, 7 means sunday.
     * @param string $StartTime Start time. precision: hour/minute/second. format: HH:mm:ss.
     * @param string $EndTime End time. precision: hour/minute/second. format: HH:mm:ss.
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
        if (array_key_exists("DaysOfWeek",$param) and $param["DaysOfWeek"] !== null) {
            $this->DaysOfWeek = $param["DaysOfWeek"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
