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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Unified workflow scheduling response parameters structure.
 *
 * @method string getScheduleTimeZone() Obtain Specifies the time zone.
 * @method void setScheduleTimeZone(string $ScheduleTimeZone) Set Specifies the time zone.
 * @method string getCycleType() Obtain Period type. Supported types:

ONEOFF_CYCLE: specifies a one-time cycle.
YEAR_CYCLE: specifies the year cycle.
MONTH_CYCLE: specifies the monthly cycle.
WEEK_CYCLE: specifies the week cycle.
DAY_CYCLE: specifies the day cycle.
HOUR_CYCLE: specifies the hour cycle.
MINUTE_CYCLE: specifies the minute cycle.
CRONTAB_CYCLE: specifies the crontab expression type
 * @method void setCycleType(string $CycleType) Set Period type. Supported types:

ONEOFF_CYCLE: specifies a one-time cycle.
YEAR_CYCLE: specifies the year cycle.
MONTH_CYCLE: specifies the monthly cycle.
WEEK_CYCLE: specifies the week cycle.
DAY_CYCLE: specifies the day cycle.
HOUR_CYCLE: specifies the hour cycle.
MINUTE_CYCLE: specifies the minute cycle.
CRONTAB_CYCLE: specifies the crontab expression type
 * @method string getSelfDepend() Obtain Self-Dependent. Valid values: parallel, serial, orderly. Default value: serial. 
 * @method void setSelfDepend(string $SelfDepend) Set Self-Dependent. Valid values: parallel, serial, orderly. Default value: serial. 
 * @method string getStartTime() Obtain Effective Start Time
 * @method void setStartTime(string $StartTime) Set Effective Start Time
 * @method string getEndTime() Obtain Effective End Time.
 * @method void setEndTime(string $EndTime) Set Effective End Time.
 * @method string getDependencyWorkflow() Obtain Workflow dependency. Valid values: yes or no.
 * @method void setDependencyWorkflow(string $DependencyWorkflow) Set Workflow dependency. Valid values: yes or no.
 * @method string getExecutionStartTime() Obtain Execution time. specifies the left-closed interval. example: 00:00.
 * @method void setExecutionStartTime(string $ExecutionStartTime) Set Execution time. specifies the left-closed interval. example: 00:00.
 * @method string getExecutionEndTime() Obtain Execution time right closed interval, for example: 23:59.

 * @method void setExecutionEndTime(string $ExecutionEndTime) Set Execution time right closed interval, for example: 23:59.

 * @method string getCrontabExpression() Obtain Cron expression


 * @method void setCrontabExpression(string $CrontabExpression) Set Cron expression


 * @method string getCalendarOpen() Obtain Whether calendar scheduling is enabled. Valid values: 1 (enabled), 0 (disabled).
 * @method void setCalendarOpen(string $CalendarOpen) Set Whether calendar scheduling is enabled. Valid values: 1 (enabled), 0 (disabled).
 * @method string getCalendarName() Obtain Calendar name.
 * @method void setCalendarName(string $CalendarName) Set Calendar name.
 * @method string getCalendarId() Obtain Calendar id.
 * @method void setCalendarId(string $CalendarId) Set Calendar id.
 */
class WorkflowSchedulerConfiguration extends AbstractModel
{
    /**
     * @var string Specifies the time zone.
     */
    public $ScheduleTimeZone;

    /**
     * @var string Period type. Supported types:

ONEOFF_CYCLE: specifies a one-time cycle.
YEAR_CYCLE: specifies the year cycle.
MONTH_CYCLE: specifies the monthly cycle.
WEEK_CYCLE: specifies the week cycle.
DAY_CYCLE: specifies the day cycle.
HOUR_CYCLE: specifies the hour cycle.
MINUTE_CYCLE: specifies the minute cycle.
CRONTAB_CYCLE: specifies the crontab expression type
     */
    public $CycleType;

    /**
     * @var string Self-Dependent. Valid values: parallel, serial, orderly. Default value: serial. 
     */
    public $SelfDepend;

    /**
     * @var string Effective Start Time
     */
    public $StartTime;

    /**
     * @var string Effective End Time.
     */
    public $EndTime;

    /**
     * @var string Workflow dependency. Valid values: yes or no.
     */
    public $DependencyWorkflow;

    /**
     * @var string Execution time. specifies the left-closed interval. example: 00:00.
     */
    public $ExecutionStartTime;

    /**
     * @var string Execution time right closed interval, for example: 23:59.

     */
    public $ExecutionEndTime;

    /**
     * @var string Cron expression


     */
    public $CrontabExpression;

    /**
     * @var string Whether calendar scheduling is enabled. Valid values: 1 (enabled), 0 (disabled).
     */
    public $CalendarOpen;

    /**
     * @var string Calendar name.
     */
    public $CalendarName;

    /**
     * @var string Calendar id.
     */
    public $CalendarId;

    /**
     * @param string $ScheduleTimeZone Specifies the time zone.
     * @param string $CycleType Period type. Supported types:

ONEOFF_CYCLE: specifies a one-time cycle.
YEAR_CYCLE: specifies the year cycle.
MONTH_CYCLE: specifies the monthly cycle.
WEEK_CYCLE: specifies the week cycle.
DAY_CYCLE: specifies the day cycle.
HOUR_CYCLE: specifies the hour cycle.
MINUTE_CYCLE: specifies the minute cycle.
CRONTAB_CYCLE: specifies the crontab expression type
     * @param string $SelfDepend Self-Dependent. Valid values: parallel, serial, orderly. Default value: serial. 
     * @param string $StartTime Effective Start Time
     * @param string $EndTime Effective End Time.
     * @param string $DependencyWorkflow Workflow dependency. Valid values: yes or no.
     * @param string $ExecutionStartTime Execution time. specifies the left-closed interval. example: 00:00.
     * @param string $ExecutionEndTime Execution time right closed interval, for example: 23:59.

     * @param string $CrontabExpression Cron expression


     * @param string $CalendarOpen Whether calendar scheduling is enabled. Valid values: 1 (enabled), 0 (disabled).
     * @param string $CalendarName Calendar name.
     * @param string $CalendarId Calendar id.
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
        if (array_key_exists("ScheduleTimeZone",$param) and $param["ScheduleTimeZone"] !== null) {
            $this->ScheduleTimeZone = $param["ScheduleTimeZone"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("SelfDepend",$param) and $param["SelfDepend"] !== null) {
            $this->SelfDepend = $param["SelfDepend"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("DependencyWorkflow",$param) and $param["DependencyWorkflow"] !== null) {
            $this->DependencyWorkflow = $param["DependencyWorkflow"];
        }

        if (array_key_exists("ExecutionStartTime",$param) and $param["ExecutionStartTime"] !== null) {
            $this->ExecutionStartTime = $param["ExecutionStartTime"];
        }

        if (array_key_exists("ExecutionEndTime",$param) and $param["ExecutionEndTime"] !== null) {
            $this->ExecutionEndTime = $param["ExecutionEndTime"];
        }

        if (array_key_exists("CrontabExpression",$param) and $param["CrontabExpression"] !== null) {
            $this->CrontabExpression = $param["CrontabExpression"];
        }

        if (array_key_exists("CalendarOpen",$param) and $param["CalendarOpen"] !== null) {
            $this->CalendarOpen = $param["CalendarOpen"];
        }

        if (array_key_exists("CalendarName",$param) and $param["CalendarName"] !== null) {
            $this->CalendarName = $param["CalendarName"];
        }

        if (array_key_exists("CalendarId",$param) and $param["CalendarId"] !== null) {
            $this->CalendarId = $param["CalendarId"];
        }
    }
}
