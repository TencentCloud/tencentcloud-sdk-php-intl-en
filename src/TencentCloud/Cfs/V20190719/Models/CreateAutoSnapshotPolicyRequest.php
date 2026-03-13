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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAutoSnapshotPolicy request structure.
 *
 * @method string getHour() Obtain Snapshot repeat time point. value range: 0-23 hr.
 * @method void setHour(string $Hour) Set Snapshot repeat time point. value range: 0-23 hr.
 * @method string getPolicyName() Obtain Policy name, limited to 64 characters, only supports input of chinese, letters, numbers, _, or -.
 * @method void setPolicyName(string $PolicyName) Set Policy name, limited to 64 characters, only supports input of chinese, letters, numbers, _, or -.
 * @method string getDayOfWeek() Obtain Snapshot repeat date, monday to sunday. 1 represents monday, 7 represents sunday. choose one from three: DayOfMonth, IntervalDays.
 * @method void setDayOfWeek(string $DayOfWeek) Set Snapshot repeat date, monday to sunday. 1 represents monday, 7 represents sunday. choose one from three: DayOfMonth, IntervalDays.
 * @method integer getAliveDays() Obtain Specifies the snapshot retention duration in days. the default value is 0 (permanent).
 * @method void setAliveDays(integer $AliveDays) Set Specifies the snapshot retention duration in days. the default value is 0 (permanent).
 * @method string getDayOfMonth() Obtain Snapshot monthly recurrence, select a day from the 1st to the 31st of each month, and a snapshot will be automatically created on that day. for example, 1 represents the 1st. choose one of the three: DayOfWeek, IntervalDays.
 * @method void setDayOfMonth(string $DayOfMonth) Set Snapshot monthly recurrence, select a day from the 1st to the 31st of each month, and a snapshot will be automatically created on that day. for example, 1 represents the 1st. choose one of the three: DayOfWeek, IntervalDays.
 * @method integer getIntervalDays() Obtain Interval days. choose one of the three with DayOfWeek and DayOfMonth.
 * @method void setIntervalDays(integer $IntervalDays) Set Interval days. choose one of the three with DayOfWeek and DayOfMonth.
 * @method array getResourceTags() Obtain Snapshot policy tag.
 * @method void setResourceTags(array $ResourceTags) Set Snapshot policy tag.
 */
class CreateAutoSnapshotPolicyRequest extends AbstractModel
{
    /**
     * @var string Snapshot repeat time point. value range: 0-23 hr.
     */
    public $Hour;

    /**
     * @var string Policy name, limited to 64 characters, only supports input of chinese, letters, numbers, _, or -.
     */
    public $PolicyName;

    /**
     * @var string Snapshot repeat date, monday to sunday. 1 represents monday, 7 represents sunday. choose one from three: DayOfMonth, IntervalDays.
     */
    public $DayOfWeek;

    /**
     * @var integer Specifies the snapshot retention duration in days. the default value is 0 (permanent).
     */
    public $AliveDays;

    /**
     * @var string Snapshot monthly recurrence, select a day from the 1st to the 31st of each month, and a snapshot will be automatically created on that day. for example, 1 represents the 1st. choose one of the three: DayOfWeek, IntervalDays.
     */
    public $DayOfMonth;

    /**
     * @var integer Interval days. choose one of the three with DayOfWeek and DayOfMonth.
     */
    public $IntervalDays;

    /**
     * @var array Snapshot policy tag.
     */
    public $ResourceTags;

    /**
     * @param string $Hour Snapshot repeat time point. value range: 0-23 hr.
     * @param string $PolicyName Policy name, limited to 64 characters, only supports input of chinese, letters, numbers, _, or -.
     * @param string $DayOfWeek Snapshot repeat date, monday to sunday. 1 represents monday, 7 represents sunday. choose one from three: DayOfMonth, IntervalDays.
     * @param integer $AliveDays Specifies the snapshot retention duration in days. the default value is 0 (permanent).
     * @param string $DayOfMonth Snapshot monthly recurrence, select a day from the 1st to the 31st of each month, and a snapshot will be automatically created on that day. for example, 1 represents the 1st. choose one of the three: DayOfWeek, IntervalDays.
     * @param integer $IntervalDays Interval days. choose one of the three with DayOfWeek and DayOfMonth.
     * @param array $ResourceTags Snapshot policy tag.
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

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }
    }
}
