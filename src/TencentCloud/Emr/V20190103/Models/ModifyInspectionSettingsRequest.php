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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInspectionSettings request structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getType() Obtain Inspection type, FixedTime or RealTime.
 * @method void setType(string $Type) Set Inspection type, FixedTime or RealTime.
 * @method array getSettings() Obtain Task configurations.
 * @method void setSettings(array $Settings) Set Task configurations.
 * @method integer getStartTime() Obtain Start timestamp.
 * @method void setStartTime(integer $StartTime) Set Start timestamp.
 * @method integer getEndTime() Obtain End timestamp.
 * @method void setEndTime(integer $EndTime) Set End timestamp.
 * @method string getStrategy() Obtain Inspection cycle, such as EveryDay, EveryWeek or EveryMonth.
 * @method void setStrategy(string $Strategy) Set Inspection cycle, such as EveryDay, EveryWeek or EveryMonth.
 * @method string getClock() Obtain Start time of each day.
 * @method void setClock(string $Clock) Set Start time of each day.
 * @method string getDayOfWeek() Obtain Day of the week.
 * @method void setDayOfWeek(string $DayOfWeek) Set Day of the week.
 * @method string getDayOfMonth() Obtain Number of the day in a month.
 * @method void setDayOfMonth(string $DayOfMonth) Set Number of the day in a month.
 * @method string getJobId() Obtain Inspection job ID.
 * @method void setJobId(string $JobId) Set Inspection job ID.
 */
class ModifyInspectionSettingsRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Inspection type, FixedTime or RealTime.
     */
    public $Type;

    /**
     * @var array Task configurations.
     */
    public $Settings;

    /**
     * @var integer Start timestamp.
     */
    public $StartTime;

    /**
     * @var integer End timestamp.
     */
    public $EndTime;

    /**
     * @var string Inspection cycle, such as EveryDay, EveryWeek or EveryMonth.
     */
    public $Strategy;

    /**
     * @var string Start time of each day.
     */
    public $Clock;

    /**
     * @var string Day of the week.
     */
    public $DayOfWeek;

    /**
     * @var string Number of the day in a month.
     */
    public $DayOfMonth;

    /**
     * @var string Inspection job ID.
     */
    public $JobId;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $Type Inspection type, FixedTime or RealTime.
     * @param array $Settings Task configurations.
     * @param integer $StartTime Start timestamp.
     * @param integer $EndTime End timestamp.
     * @param string $Strategy Inspection cycle, such as EveryDay, EveryWeek or EveryMonth.
     * @param string $Clock Start time of each day.
     * @param string $DayOfWeek Day of the week.
     * @param string $DayOfMonth Number of the day in a month.
     * @param string $JobId Inspection job ID.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Settings",$param) and $param["Settings"] !== null) {
            $this->Settings = [];
            foreach ($param["Settings"] as $key => $value){
                $obj = new InspectionTaskSettings();
                $obj->deserialize($value);
                array_push($this->Settings, $obj);
            }
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Strategy",$param) and $param["Strategy"] !== null) {
            $this->Strategy = $param["Strategy"];
        }

        if (array_key_exists("Clock",$param) and $param["Clock"] !== null) {
            $this->Clock = $param["Clock"];
        }

        if (array_key_exists("DayOfWeek",$param) and $param["DayOfWeek"] !== null) {
            $this->DayOfWeek = $param["DayOfWeek"];
        }

        if (array_key_exists("DayOfMonth",$param) and $param["DayOfMonth"] !== null) {
            $this->DayOfMonth = $param["DayOfMonth"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }
    }
}
