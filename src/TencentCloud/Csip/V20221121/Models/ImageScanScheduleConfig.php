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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Image scanning cycle configuration
 *
 * @method string getCycleType() Obtain <p>Cycle type</p><p>Enumeration values:</p><ul><li>DAILY: Daily</li><li>WEEKLY: Weekly</li><li>MONTHLY: Monthly</li></ul>
 * @method void setCycleType(string $CycleType) Set <p>Cycle type</p><p>Enumeration values:</p><ul><li>DAILY: Daily</li><li>WEEKLY: Weekly</li><li>MONTHLY: Monthly</li></ul>
 * @method array getCycleDays() Obtain <p>Specific date. For weekly type: 1-7 (Monday to Sunday); for monthly type: 1-31; disabled for daily type.</p>
 * @method void setCycleDays(array $CycleDays) Set <p>Specific date. For weekly type: 1-7 (Monday to Sunday); for monthly type: 1-31; disabled for daily type.</p>
 * @method string getStartTime() Obtain <p>Scan start time</p><p>Parameter format: hh:mm</p>
 * @method void setStartTime(string $StartTime) Set <p>Scan start time</p><p>Parameter format: hh:mm</p>
 * @method string getTimezone() Obtain <p>Time zone</p>
 * @method void setTimezone(string $Timezone) Set <p>Time zone</p>
 */
class ImageScanScheduleConfig extends AbstractModel
{
    /**
     * @var string <p>Cycle type</p><p>Enumeration values:</p><ul><li>DAILY: Daily</li><li>WEEKLY: Weekly</li><li>MONTHLY: Monthly</li></ul>
     */
    public $CycleType;

    /**
     * @var array <p>Specific date. For weekly type: 1-7 (Monday to Sunday); for monthly type: 1-31; disabled for daily type.</p>
     */
    public $CycleDays;

    /**
     * @var string <p>Scan start time</p><p>Parameter format: hh:mm</p>
     */
    public $StartTime;

    /**
     * @var string <p>Time zone</p>
     */
    public $Timezone;

    /**
     * @param string $CycleType <p>Cycle type</p><p>Enumeration values:</p><ul><li>DAILY: Daily</li><li>WEEKLY: Weekly</li><li>MONTHLY: Monthly</li></ul>
     * @param array $CycleDays <p>Specific date. For weekly type: 1-7 (Monday to Sunday); for monthly type: 1-31; disabled for daily type.</p>
     * @param string $StartTime <p>Scan start time</p><p>Parameter format: hh:mm</p>
     * @param string $Timezone <p>Time zone</p>
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
        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("CycleDays",$param) and $param["CycleDays"] !== null) {
            $this->CycleDays = $param["CycleDays"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Timezone",$param) and $param["Timezone"] !== null) {
            $this->Timezone = $param["Timezone"];
        }
    }
}
