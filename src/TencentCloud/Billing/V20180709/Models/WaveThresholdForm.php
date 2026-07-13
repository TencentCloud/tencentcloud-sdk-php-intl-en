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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Threshold fluctuation warning information
 *
 * @method string getWarnType() Obtain ACTUAL actual amount, FORECAST forecast amount
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWarnType(string $WarnType) Set ACTUAL actual amount, FORECAST forecast amount
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getThreshold() Obtain Fluctuation threshold (equal to or greater than 0)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setThreshold(string $Threshold) Set Fluctuation threshold (equal to or greater than 0)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMetaType() Obtain Alarm type: chain period-over-period, yoy year-over-year, fix fixed value
Supported types: day-on-day comparison chain day, day-on-day comparison chain weekday, year-on-year comparison by month yoy day, daily fixed value fix day, month-on-month comparison chain month, fixed monthly value fix month
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMetaType(string $MetaType) Set Alarm type: chain period-over-period, yoy year-over-year, fix fixed value
Supported types: day-on-day comparison chain day, day-on-day comparison chain weekday, year-on-year comparison by month yoy day, daily fixed value fix day, month-on-month comparison chain month, fixed monthly value fix month
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPeriodType() Obtain Alarm dimension: day, month, weekday
Supported types: day-on-day comparison chain day, day-on-day comparison chain weekday, year-on-year comparison by month yoy day, daily fixed value fix day, month-on-month comparison chain month, fixed monthly value fix month
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPeriodType(string $PeriodType) Set Alarm dimension: day, month, weekday
Supported types: day-on-day comparison chain day, day-on-day comparison chain weekday, year-on-year comparison by month yoy day, daily fixed value fix day, month-on-month comparison chain month, fixed monthly value fix month
Note: This field may return null, indicating that no valid values can be obtained.
 */
class WaveThresholdForm extends AbstractModel
{
    /**
     * @var string ACTUAL actual amount, FORECAST forecast amount
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WarnType;

    /**
     * @var string Fluctuation threshold (equal to or greater than 0)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Threshold;

    /**
     * @var string Alarm type: chain period-over-period, yoy year-over-year, fix fixed value
Supported types: day-on-day comparison chain day, day-on-day comparison chain weekday, year-on-year comparison by month yoy day, daily fixed value fix day, month-on-month comparison chain month, fixed monthly value fix month
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MetaType;

    /**
     * @var string Alarm dimension: day, month, weekday
Supported types: day-on-day comparison chain day, day-on-day comparison chain weekday, year-on-year comparison by month yoy day, daily fixed value fix day, month-on-month comparison chain month, fixed monthly value fix month
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PeriodType;

    /**
     * @param string $WarnType ACTUAL actual amount, FORECAST forecast amount
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Threshold Fluctuation threshold (equal to or greater than 0)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MetaType Alarm type: chain period-over-period, yoy year-over-year, fix fixed value
Supported types: day-on-day comparison chain day, day-on-day comparison chain weekday, year-on-year comparison by month yoy day, daily fixed value fix day, month-on-month comparison chain month, fixed monthly value fix month
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PeriodType Alarm dimension: day, month, weekday
Supported types: day-on-day comparison chain day, day-on-day comparison chain weekday, year-on-year comparison by month yoy day, daily fixed value fix day, month-on-month comparison chain month, fixed monthly value fix month
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
        if (array_key_exists("WarnType",$param) and $param["WarnType"] !== null) {
            $this->WarnType = $param["WarnType"];
        }

        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }

        if (array_key_exists("MetaType",$param) and $param["MetaType"] !== null) {
            $this->MetaType = $param["MetaType"];
        }

        if (array_key_exists("PeriodType",$param) and $param["PeriodType"] !== null) {
            $this->PeriodType = $param["PeriodType"];
        }
    }
}
