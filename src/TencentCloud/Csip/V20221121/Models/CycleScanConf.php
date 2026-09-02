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
 * Period scanning configuration of the policy (interval type + interval value + scanning time window).
 *
 * @method integer getEnable() Obtain <p>Period scanning switch. 0: off, 1: on.</p>
 * @method void setEnable(integer $Enable) Set <p>Period scanning switch. 0: off, 1: on.</p>
 * @method string getIntervalType() Obtain <p>Interval type for period scanning. Values:</p><ul><li>DAY: Every several days. For IntervalValueList, take the number of interval days (for example, ["1"] means every day)</li><li>WEEK: Specified weekdays. For IntervalValueList, take 1–7 (Monday–Sunday)</li><li>MONTH: Specified date per month. For IntervalValueList, take 1–31</li></ul>
 * @method void setIntervalType(string $IntervalType) Set <p>Interval type for period scanning. Values:</p><ul><li>DAY: Every several days. For IntervalValueList, take the number of interval days (for example, ["1"] means every day)</li><li>WEEK: Specified weekdays. For IntervalValueList, take 1–7 (Monday–Sunday)</li><li>MONTH: Specified date per month. For IntervalValueList, take 1–31</li></ul>
 * @method array getIntervalValueList() Obtain <p>Period value list. The meaning varies with IntervalType:</p><ul><li>IntervalType=DAY: every how many days. For example, ["1"] means every day</li><li>IntervalType=WEEK: day of the week, with values from 1 to 7 (Monday to Sunday)</li><li>IntervalType=MONTH: day of the month, with values from 1 to 31</li></ul>
 * @method void setIntervalValueList(array $IntervalValueList) Set <p>Period value list. The meaning varies with IntervalType:</p><ul><li>IntervalType=DAY: every how many days. For example, ["1"] means every day</li><li>IntervalType=WEEK: day of the week, with values from 1 to 7 (Monday to Sunday)</li><li>IntervalType=MONTH: day of the month, with values from 1 to 31</li></ul>
 * @method string getScanStart() Obtain <p>Scan period start time. Format: HH:mm. Example: 02:00.</p>
 * @method void setScanStart(string $ScanStart) Set <p>Scan period start time. Format: HH:mm. Example: 02:00.</p>
 * @method string getScanEnd() Obtain <p>Scan period end time. Format: HH:mm. For example, 06:00.</p>
 * @method void setScanEnd(string $ScanEnd) Set <p>Scan period end time. Format: HH:mm. For example, 06:00.</p>
 */
class CycleScanConf extends AbstractModel
{
    /**
     * @var integer <p>Period scanning switch. 0: off, 1: on.</p>
     */
    public $Enable;

    /**
     * @var string <p>Interval type for period scanning. Values:</p><ul><li>DAY: Every several days. For IntervalValueList, take the number of interval days (for example, ["1"] means every day)</li><li>WEEK: Specified weekdays. For IntervalValueList, take 1–7 (Monday–Sunday)</li><li>MONTH: Specified date per month. For IntervalValueList, take 1–31</li></ul>
     */
    public $IntervalType;

    /**
     * @var array <p>Period value list. The meaning varies with IntervalType:</p><ul><li>IntervalType=DAY: every how many days. For example, ["1"] means every day</li><li>IntervalType=WEEK: day of the week, with values from 1 to 7 (Monday to Sunday)</li><li>IntervalType=MONTH: day of the month, with values from 1 to 31</li></ul>
     */
    public $IntervalValueList;

    /**
     * @var string <p>Scan period start time. Format: HH:mm. Example: 02:00.</p>
     */
    public $ScanStart;

    /**
     * @var string <p>Scan period end time. Format: HH:mm. For example, 06:00.</p>
     */
    public $ScanEnd;

    /**
     * @param integer $Enable <p>Period scanning switch. 0: off, 1: on.</p>
     * @param string $IntervalType <p>Interval type for period scanning. Values:</p><ul><li>DAY: Every several days. For IntervalValueList, take the number of interval days (for example, ["1"] means every day)</li><li>WEEK: Specified weekdays. For IntervalValueList, take 1–7 (Monday–Sunday)</li><li>MONTH: Specified date per month. For IntervalValueList, take 1–31</li></ul>
     * @param array $IntervalValueList <p>Period value list. The meaning varies with IntervalType:</p><ul><li>IntervalType=DAY: every how many days. For example, ["1"] means every day</li><li>IntervalType=WEEK: day of the week, with values from 1 to 7 (Monday to Sunday)</li><li>IntervalType=MONTH: day of the month, with values from 1 to 31</li></ul>
     * @param string $ScanStart <p>Scan period start time. Format: HH:mm. Example: 02:00.</p>
     * @param string $ScanEnd <p>Scan period end time. Format: HH:mm. For example, 06:00.</p>
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("IntervalType",$param) and $param["IntervalType"] !== null) {
            $this->IntervalType = $param["IntervalType"];
        }

        if (array_key_exists("IntervalValueList",$param) and $param["IntervalValueList"] !== null) {
            $this->IntervalValueList = $param["IntervalValueList"];
        }

        if (array_key_exists("ScanStart",$param) and $param["ScanStart"] !== null) {
            $this->ScanStart = $param["ScanStart"];
        }

        if (array_key_exists("ScanEnd",$param) and $param["ScanEnd"] !== null) {
            $this->ScanEnd = $param["ScanEnd"];
        }
    }
}
