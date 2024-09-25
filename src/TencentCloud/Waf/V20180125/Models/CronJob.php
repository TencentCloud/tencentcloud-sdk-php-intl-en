<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Data structure of periodic rule execution
 *
 * @method array getDays() Obtain Days in each month for execution
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDays(array $Days) Set Days in each month for execution
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getWDays() Obtain Days of each week for execution
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWDays(array $WDays) Set Days of each week for execution
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStartTime() Obtain Start time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartTime(string $StartTime) Set Start time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEndTime() Obtain End time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(string $EndTime) Set End time

Note: This field may return null, indicating that no valid values can be obtained.
 */
class CronJob extends AbstractModel
{
    /**
     * @var array Days in each month for execution
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Days;

    /**
     * @var array Days of each week for execution
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WDays;

    /**
     * @var string Start time

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @var string End time

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @param array $Days Days in each month for execution
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $WDays Days of each week for execution
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StartTime Start time

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EndTime End time

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
        if (array_key_exists("Days",$param) and $param["Days"] !== null) {
            $this->Days = $param["Days"];
        }

        if (array_key_exists("WDays",$param) and $param["WDays"] !== null) {
            $this->WDays = $param["WDays"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
