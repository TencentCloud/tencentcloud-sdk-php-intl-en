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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Ops window settings of managed node pools
 *
 * @method string getAutoUpgradeStartTime() Obtain Automatic upgrade start time
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setAutoUpgradeStartTime(string $AutoUpgradeStartTime) Set Automatic upgrade start time
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getDuration() Obtain Automatic upgrade duration
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setDuration(string $Duration) Set Automatic upgrade duration
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method array getWeeklyPeriod() Obtain Ops date
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setWeeklyPeriod(array $WeeklyPeriod) Set Ops date
Note: This field may return "null", indicating that no valid value can be obtained.
 */
class AutoUpgradeOptions extends AbstractModel
{
    /**
     * @var string Automatic upgrade start time
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $AutoUpgradeStartTime;

    /**
     * @var string Automatic upgrade duration
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Duration;

    /**
     * @var array Ops date
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $WeeklyPeriod;

    /**
     * @param string $AutoUpgradeStartTime Automatic upgrade start time
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $Duration Automatic upgrade duration
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param array $WeeklyPeriod Ops date
Note: This field may return "null", indicating that no valid value can be obtained.
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
        if (array_key_exists("AutoUpgradeStartTime",$param) and $param["AutoUpgradeStartTime"] !== null) {
            $this->AutoUpgradeStartTime = $param["AutoUpgradeStartTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("WeeklyPeriod",$param) and $param["WeeklyPeriod"] !== null) {
            $this->WeeklyPeriod = $param["WeeklyPeriod"];
        }
    }
}
