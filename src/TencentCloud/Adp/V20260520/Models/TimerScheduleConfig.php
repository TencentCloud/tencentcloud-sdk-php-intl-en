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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TimerScheduleConfig
 *
 * @method CronSchedule getCron() Obtain Cron configuration.
 * @method void setCron(CronSchedule $Cron) Set Cron configuration.
 * @method DailySchedule getDaily() Obtain Daily trigger
 * @method void setDaily(DailySchedule $Daily) Set Daily trigger
 * @method IntervalSchedule getInterval() Obtain Fixed interval
 * @method void setInterval(IntervalSchedule $Interval) Set Fixed interval
 * @method ManualOnlySchedule getManualOnly() Obtain Manual only
 * @method void setManualOnly(ManualOnlySchedule $ManualOnly) Set Manual only
 * @method OnceSchedule getOnce() Obtain Single time
 * @method void setOnce(OnceSchedule $Once) Set Single time
 * @method integer getScheduleType() Obtain Enumeration values:
| uint | Description |
| --- | --- |
| 0 |  |
Manual only
| 2 | Daily |
| 3 | Weekly |
| 4 | By interval |
| 5 | One-time |
| 6 | Cron |
 * @method void setScheduleType(integer $ScheduleType) Set Enumeration values:
| uint | Description |
| --- | --- |
| 0 |  |
Manual only
| 2 | Daily |
| 3 | Weekly |
| 4 | By interval |
| 5 | One-time |
| 6 | Cron |
 * @method string getTimezone() Obtain Time zone
 * @method void setTimezone(string $Timezone) Set Time zone
 * @method WeeklySchedule getWeekly() Obtain Triggers at a fixed time weekly.
 * @method void setWeekly(WeeklySchedule $Weekly) Set Triggers at a fixed time weekly.
 */
class TimerScheduleConfig extends AbstractModel
{
    /**
     * @var CronSchedule Cron configuration.
     */
    public $Cron;

    /**
     * @var DailySchedule Daily trigger
     */
    public $Daily;

    /**
     * @var IntervalSchedule Fixed interval
     */
    public $Interval;

    /**
     * @var ManualOnlySchedule Manual only
     */
    public $ManualOnly;

    /**
     * @var OnceSchedule Single time
     */
    public $Once;

    /**
     * @var integer Enumeration values:
| uint | Description |
| --- | --- |
| 0 |  |
Manual only
| 2 | Daily |
| 3 | Weekly |
| 4 | By interval |
| 5 | One-time |
| 6 | Cron |
     */
    public $ScheduleType;

    /**
     * @var string Time zone
     */
    public $Timezone;

    /**
     * @var WeeklySchedule Triggers at a fixed time weekly.
     */
    public $Weekly;

    /**
     * @param CronSchedule $Cron Cron configuration.
     * @param DailySchedule $Daily Daily trigger
     * @param IntervalSchedule $Interval Fixed interval
     * @param ManualOnlySchedule $ManualOnly Manual only
     * @param OnceSchedule $Once Single time
     * @param integer $ScheduleType Enumeration values:
| uint | Description |
| --- | --- |
| 0 |  |
Manual only
| 2 | Daily |
| 3 | Weekly |
| 4 | By interval |
| 5 | One-time |
| 6 | Cron |
     * @param string $Timezone Time zone
     * @param WeeklySchedule $Weekly Triggers at a fixed time weekly.
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
        if (array_key_exists("Cron",$param) and $param["Cron"] !== null) {
            $this->Cron = new CronSchedule();
            $this->Cron->deserialize($param["Cron"]);
        }

        if (array_key_exists("Daily",$param) and $param["Daily"] !== null) {
            $this->Daily = new DailySchedule();
            $this->Daily->deserialize($param["Daily"]);
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = new IntervalSchedule();
            $this->Interval->deserialize($param["Interval"]);
        }

        if (array_key_exists("ManualOnly",$param) and $param["ManualOnly"] !== null) {
            $this->ManualOnly = new ManualOnlySchedule();
            $this->ManualOnly->deserialize($param["ManualOnly"]);
        }

        if (array_key_exists("Once",$param) and $param["Once"] !== null) {
            $this->Once = new OnceSchedule();
            $this->Once->deserialize($param["Once"]);
        }

        if (array_key_exists("ScheduleType",$param) and $param["ScheduleType"] !== null) {
            $this->ScheduleType = $param["ScheduleType"];
        }

        if (array_key_exists("Timezone",$param) and $param["Timezone"] !== null) {
            $this->Timezone = $param["Timezone"];
        }

        if (array_key_exists("Weekly",$param) and $param["Weekly"] !== null) {
            $this->Weekly = new WeeklySchedule();
            $this->Weekly->deserialize($param["Weekly"]);
        }
    }
}
