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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Effective period
 *
 * @method string getBeginTime() Obtain <p>Start time</p><p>Parameter format: hh:mm:ss</p>
 * @method void setBeginTime(string $BeginTime) Set <p>Start time</p><p>Parameter format: hh:mm:ss</p>
 * @method string getEndTime() Obtain <p>End time</p><p>Parameter format: hh:mm:ss</p>
 * @method void setEndTime(string $EndTime) Set <p>End time</p><p>Parameter format: hh:mm:ss</p>
 * @method integer getWeekDay() Obtain <p>Repetition cycle: 1-Monday 2-Tuesday 3-Wednesday 4-Thursday 5-Friday 6-Saturday 7-Sunday</p><p>Value range: [1, 7]</p>
 * @method void setWeekDay(integer $WeekDay) Set <p>Repetition cycle: 1-Monday 2-Tuesday 3-Wednesday 4-Thursday 5-Friday 6-Saturday 7-Sunday</p><p>Value range: [1, 7]</p>
 */
class EffectiveTime extends AbstractModel
{
    /**
     * @var string <p>Start time</p><p>Parameter format: hh:mm:ss</p>
     */
    public $BeginTime;

    /**
     * @var string <p>End time</p><p>Parameter format: hh:mm:ss</p>
     */
    public $EndTime;

    /**
     * @var integer <p>Repetition cycle: 1-Monday 2-Tuesday 3-Wednesday 4-Thursday 5-Friday 6-Saturday 7-Sunday</p><p>Value range: [1, 7]</p>
     */
    public $WeekDay;

    /**
     * @param string $BeginTime <p>Start time</p><p>Parameter format: hh:mm:ss</p>
     * @param string $EndTime <p>End time</p><p>Parameter format: hh:mm:ss</p>
     * @param integer $WeekDay <p>Repetition cycle: 1-Monday 2-Tuesday 3-Wednesday 4-Thursday 5-Friday 6-Saturday 7-Sunday</p><p>Value range: [1, 7]</p>
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
        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("WeekDay",$param) and $param["WeekDay"] !== null) {
            $this->WeekDay = $param["WeekDay"];
        }
    }
}
