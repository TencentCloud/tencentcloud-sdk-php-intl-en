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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Operations and Maintenance Dashboard Task Display
 *
 * @method integer getCountTag() Obtain Statistical Indicator 0: All Instances, 1: Current Day, 2: Yesterday
 * @method void setCountTag(integer $CountTag) Set Statistical Indicator 0: All Instances, 1: Current Day, 2: Yesterday
 * @method integer getTotalNum() Obtain Total numberNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTotalNum(integer $TotalNum) Set Total numberNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getRunningNum() Obtain RunningNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setRunningNum(integer $RunningNum) Set RunningNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getStoppingNum() Obtain StoppingNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setStoppingNum(integer $StoppingNum) Set StoppingNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getStoppedNum() Obtain StoppedNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setStoppedNum(integer $StoppedNum) Set StoppedNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getFrozenNum() Obtain Pause
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFrozenNum(integer $FrozenNum) Set Pause
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getYearNum() Obtain Annual task
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setYearNum(integer $YearNum) Set Annual task
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getMonthNum() Obtain Monthly task
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMonthNum(integer $MonthNum) Set Monthly task
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getWeekNum() Obtain Weekly task
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setWeekNum(integer $WeekNum) Set Weekly task
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getDayNum() Obtain Daily task
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDayNum(integer $DayNum) Set Daily task
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getHourNum() Obtain Hourly task
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setHourNum(integer $HourNum) Set Hourly task
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getMinuteNum() Obtain Minute Task
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMinuteNum(integer $MinuteNum) Set Minute Task
Note: This field may return null, indicating that no valid value can be obtained.
 */
class ScreenTaskInfo extends AbstractModel
{
    /**
     * @var integer Statistical Indicator 0: All Instances, 1: Current Day, 2: Yesterday
     */
    public $CountTag;

    /**
     * @var integer Total numberNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TotalNum;

    /**
     * @var integer RunningNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $RunningNum;

    /**
     * @var integer StoppingNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $StoppingNum;

    /**
     * @var integer StoppedNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $StoppedNum;

    /**
     * @var integer Pause
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $FrozenNum;

    /**
     * @var integer Annual task
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $YearNum;

    /**
     * @var integer Monthly task
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $MonthNum;

    /**
     * @var integer Weekly task
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $WeekNum;

    /**
     * @var integer Daily task
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DayNum;

    /**
     * @var integer Hourly task
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $HourNum;

    /**
     * @var integer Minute Task
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $MinuteNum;

    /**
     * @param integer $CountTag Statistical Indicator 0: All Instances, 1: Current Day, 2: Yesterday
     * @param integer $TotalNum Total numberNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $RunningNum RunningNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $StoppingNum StoppingNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $StoppedNum StoppedNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $FrozenNum Pause
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $YearNum Annual task
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $MonthNum Monthly task
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $WeekNum Weekly task
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $DayNum Daily task
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $HourNum Hourly task
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $MinuteNum Minute Task
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("CountTag",$param) and $param["CountTag"] !== null) {
            $this->CountTag = $param["CountTag"];
        }

        if (array_key_exists("TotalNum",$param) and $param["TotalNum"] !== null) {
            $this->TotalNum = $param["TotalNum"];
        }

        if (array_key_exists("RunningNum",$param) and $param["RunningNum"] !== null) {
            $this->RunningNum = $param["RunningNum"];
        }

        if (array_key_exists("StoppingNum",$param) and $param["StoppingNum"] !== null) {
            $this->StoppingNum = $param["StoppingNum"];
        }

        if (array_key_exists("StoppedNum",$param) and $param["StoppedNum"] !== null) {
            $this->StoppedNum = $param["StoppedNum"];
        }

        if (array_key_exists("FrozenNum",$param) and $param["FrozenNum"] !== null) {
            $this->FrozenNum = $param["FrozenNum"];
        }

        if (array_key_exists("YearNum",$param) and $param["YearNum"] !== null) {
            $this->YearNum = $param["YearNum"];
        }

        if (array_key_exists("MonthNum",$param) and $param["MonthNum"] !== null) {
            $this->MonthNum = $param["MonthNum"];
        }

        if (array_key_exists("WeekNum",$param) and $param["WeekNum"] !== null) {
            $this->WeekNum = $param["WeekNum"];
        }

        if (array_key_exists("DayNum",$param) and $param["DayNum"] !== null) {
            $this->DayNum = $param["DayNum"];
        }

        if (array_key_exists("HourNum",$param) and $param["HourNum"] !== null) {
            $this->HourNum = $param["HourNum"];
        }

        if (array_key_exists("MinuteNum",$param) and $param["MinuteNum"] !== null) {
            $this->MinuteNum = $param["MinuteNum"];
        }
    }
}
