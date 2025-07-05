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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DataInLong - Alarm do-not-disturb time
 *
 * @method array getDaysOfWeek() Obtain Represents the days of the week, 1 for Monday, 7 for Sunday, and so on
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDaysOfWeek(array $DaysOfWeek) Set Represents the days of the week, 1 for Monday, 7 for Sunday, and so on
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getStartTime() Obtain Start TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setStartTime(string $StartTime) Set Start TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getEndTime() Obtain End timeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setEndTime(string $EndTime) Set End timeNote: This field may return null, indicating that no valid value can be obtained.
 */
class QuietPeriod extends AbstractModel
{
    /**
     * @var array Represents the days of the week, 1 for Monday, 7 for Sunday, and so on
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DaysOfWeek;

    /**
     * @var string Start TimeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $StartTime;

    /**
     * @var string End timeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $EndTime;

    /**
     * @param array $DaysOfWeek Represents the days of the week, 1 for Monday, 7 for Sunday, and so on
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $StartTime Start TimeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $EndTime End timeNote: This field may return null, indicating that no valid value can be obtained.
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
