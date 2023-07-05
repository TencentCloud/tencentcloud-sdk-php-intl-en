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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAutoSnapshotPolicy request structure.
 *
 * @method string getHour() Obtain The time point when to repeat the snapshot operation
 * @method void setHour(string $Hour) Set The time point when to repeat the snapshot operation
 * @method string getPolicyName() Obtain Policy name
 * @method void setPolicyName(string $PolicyName) Set Policy name
 * @method string getDayOfWeek() Obtain The day of the week on which to repeat the snapshot operation
 * @method void setDayOfWeek(string $DayOfWeek) Set The day of the week on which to repeat the snapshot operation
 * @method integer getAliveDays() Obtain Snapshot retention period
 * @method void setAliveDays(integer $AliveDays) Set Snapshot retention period
 * @method string getDayOfMonth() Obtain The specific day (day 1 to day 31) of the month on which to automatically create a snapshot.
 * @method void setDayOfMonth(string $DayOfMonth) Set The specific day (day 1 to day 31) of the month on which to automatically create a snapshot.
 * @method integer getIntervalDays() Obtain The snapshot interval, in days.
 * @method void setIntervalDays(integer $IntervalDays) Set The snapshot interval, in days.
 */
class CreateAutoSnapshotPolicyRequest extends AbstractModel
{
    /**
     * @var string The time point when to repeat the snapshot operation
     */
    public $Hour;

    /**
     * @var string Policy name
     */
    public $PolicyName;

    /**
     * @var string The day of the week on which to repeat the snapshot operation
     */
    public $DayOfWeek;

    /**
     * @var integer Snapshot retention period
     */
    public $AliveDays;

    /**
     * @var string The specific day (day 1 to day 31) of the month on which to automatically create a snapshot.
     */
    public $DayOfMonth;

    /**
     * @var integer The snapshot interval, in days.
     */
    public $IntervalDays;

    /**
     * @param string $Hour The time point when to repeat the snapshot operation
     * @param string $PolicyName Policy name
     * @param string $DayOfWeek The day of the week on which to repeat the snapshot operation
     * @param integer $AliveDays Snapshot retention period
     * @param string $DayOfMonth The specific day (day 1 to day 31) of the month on which to automatically create a snapshot.
     * @param integer $IntervalDays The snapshot interval, in days.
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
        if (array_key_exists("Hour",$param) and $param["Hour"] !== null) {
            $this->Hour = $param["Hour"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("DayOfWeek",$param) and $param["DayOfWeek"] !== null) {
            $this->DayOfWeek = $param["DayOfWeek"];
        }

        if (array_key_exists("AliveDays",$param) and $param["AliveDays"] !== null) {
            $this->AliveDays = $param["AliveDays"];
        }

        if (array_key_exists("DayOfMonth",$param) and $param["DayOfMonth"] !== null) {
            $this->DayOfMonth = $param["DayOfMonth"];
        }

        if (array_key_exists("IntervalDays",$param) and $param["IntervalDays"] !== null) {
            $this->IntervalDays = $param["IntervalDays"];
        }
    }
}
