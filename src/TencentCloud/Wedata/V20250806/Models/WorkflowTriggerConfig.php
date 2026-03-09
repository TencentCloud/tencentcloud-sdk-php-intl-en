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
 * Workflow scheduling configuration.
 *
 * @method string getTriggerMode() Obtain Trigger mode.
-Scheduled TRIGGER: TIME_TRIGGER.
- CONTINUE_RUN: continuously RUN.
-FILE_ARRIVAL.

Note:.
-In TIME_TRIGGER and CONTINUE_RUN mode, SchedulerStatus, SchedulerTimeZone, StartTime, EndTime, ConfigMode, CycleType, and CrontabExpression are required.
-In FILE_ARRIVAL mode, FileArrivalPath, TriggerMinimumIntervalSecond, and TriggerWaitTimeSecond are required.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTriggerMode(string $TriggerMode) Set Trigger mode.
-Scheduled TRIGGER: TIME_TRIGGER.
- CONTINUE_RUN: continuously RUN.
-FILE_ARRIVAL.

Note:.
-In TIME_TRIGGER and CONTINUE_RUN mode, SchedulerStatus, SchedulerTimeZone, StartTime, EndTime, ConfigMode, CycleType, and CrontabExpression are required.
-In FILE_ARRIVAL mode, FileArrivalPath, TriggerMinimumIntervalSecond, and TriggerWaitTimeSecond are required.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExtraInfo() Obtain Convert WorkflowTriggerConfig into Json format for reconciliation usage.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExtraInfo(string $ExtraInfo) Set Convert WorkflowTriggerConfig into Json format for reconciliation usage.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getScheduleTimeZone() Obtain Scheduling time zone.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScheduleTimeZone(string $ScheduleTimeZone) Set Scheduling time zone.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStartTime() Obtain Schedule effective time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartTime(string $StartTime) Set Schedule effective time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEndTime() Obtain Schedule end time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(string $EndTime) Set Schedule end time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getConfigMode() Obtain Setting method, general: COMMON, CRON EXPRESSION: CRON_EXPRESSION.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConfigMode(string $ConfigMode) Set Setting method, general: COMMON, CRON EXPRESSION: CRON_EXPRESSION.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCycleType() Obtain Period type: supported types are.
ONEOFF_CYCLE: one-time.
YEAR_CYCLE: year.
MONTH_CYCLE: month.
WEEK_CYCLE: week.
DAY_CYCLE: day.
HOUR_CYCLE: hr.
MINUTE_CYCLE: minute.
CRONTAB_CYCLE: crontab expression type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCycleType(string $CycleType) Set Period type: supported types are.
ONEOFF_CYCLE: one-time.
YEAR_CYCLE: year.
MONTH_CYCLE: month.
WEEK_CYCLE: week.
DAY_CYCLE: day.
HOUR_CYCLE: hr.
MINUTE_CYCLE: minute.
CRONTAB_CYCLE: crontab expression type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCrontabExpression() Obtain Cron expression
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCrontabExpression(string $CrontabExpression) Set Cron expression
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTriggerId() Obtain triggerId, uuid
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTriggerId(string $TriggerId) Set triggerId, uuid
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFileArrivalPath() Obtain Listening path in the storage system under file arrival mode.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileArrivalPath(string $FileArrivalPath) Set Listening path in the storage system under file arrival mode.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTriggerMinimumIntervalSecond() Obtain File arrival mode triggers the shortest interval (unit: s).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTriggerMinimumIntervalSecond(integer $TriggerMinimumIntervalSecond) Set File arrival mode triggers the shortest interval (unit: s).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTriggerWaitTimeSecond() Obtain File arrival in mode. trigger waiting time (unit: seconds).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTriggerWaitTimeSecond(integer $TriggerWaitTimeSecond) Set File arrival in mode. trigger waiting time (unit: seconds).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSchedulerStatus() Obtain Trigger status. valid values: ACTIVE (start), PAUSED (suspend).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSchedulerStatus(string $SchedulerStatus) Set Trigger status. valid values: ACTIVE (start), PAUSED (suspend).
Note: This field may return null, indicating that no valid values can be obtained.
 */
class WorkflowTriggerConfig extends AbstractModel
{
    /**
     * @var string Trigger mode.
-Scheduled TRIGGER: TIME_TRIGGER.
- CONTINUE_RUN: continuously RUN.
-FILE_ARRIVAL.

Note:.
-In TIME_TRIGGER and CONTINUE_RUN mode, SchedulerStatus, SchedulerTimeZone, StartTime, EndTime, ConfigMode, CycleType, and CrontabExpression are required.
-In FILE_ARRIVAL mode, FileArrivalPath, TriggerMinimumIntervalSecond, and TriggerWaitTimeSecond are required.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TriggerMode;

    /**
     * @var string Convert WorkflowTriggerConfig into Json format for reconciliation usage.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExtraInfo;

    /**
     * @var string Scheduling time zone.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScheduleTimeZone;

    /**
     * @var string Schedule effective time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @var string Schedule end time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var string Setting method, general: COMMON, CRON EXPRESSION: CRON_EXPRESSION.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConfigMode;

    /**
     * @var string Period type: supported types are.
ONEOFF_CYCLE: one-time.
YEAR_CYCLE: year.
MONTH_CYCLE: month.
WEEK_CYCLE: week.
DAY_CYCLE: day.
HOUR_CYCLE: hr.
MINUTE_CYCLE: minute.
CRONTAB_CYCLE: crontab expression type.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CycleType;

    /**
     * @var string Cron expression
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CrontabExpression;

    /**
     * @var string triggerId, uuid
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TriggerId;

    /**
     * @var string Listening path in the storage system under file arrival mode.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FileArrivalPath;

    /**
     * @var integer File arrival mode triggers the shortest interval (unit: s).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TriggerMinimumIntervalSecond;

    /**
     * @var integer File arrival in mode. trigger waiting time (unit: seconds).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TriggerWaitTimeSecond;

    /**
     * @var string Trigger status. valid values: ACTIVE (start), PAUSED (suspend).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SchedulerStatus;

    /**
     * @param string $TriggerMode Trigger mode.
-Scheduled TRIGGER: TIME_TRIGGER.
- CONTINUE_RUN: continuously RUN.
-FILE_ARRIVAL.

Note:.
-In TIME_TRIGGER and CONTINUE_RUN mode, SchedulerStatus, SchedulerTimeZone, StartTime, EndTime, ConfigMode, CycleType, and CrontabExpression are required.
-In FILE_ARRIVAL mode, FileArrivalPath, TriggerMinimumIntervalSecond, and TriggerWaitTimeSecond are required.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExtraInfo Convert WorkflowTriggerConfig into Json format for reconciliation usage.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ScheduleTimeZone Scheduling time zone.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StartTime Schedule effective time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EndTime Schedule end time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ConfigMode Setting method, general: COMMON, CRON EXPRESSION: CRON_EXPRESSION.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CycleType Period type: supported types are.
ONEOFF_CYCLE: one-time.
YEAR_CYCLE: year.
MONTH_CYCLE: month.
WEEK_CYCLE: week.
DAY_CYCLE: day.
HOUR_CYCLE: hr.
MINUTE_CYCLE: minute.
CRONTAB_CYCLE: crontab expression type.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CrontabExpression Cron expression
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TriggerId triggerId, uuid
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FileArrivalPath Listening path in the storage system under file arrival mode.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TriggerMinimumIntervalSecond File arrival mode triggers the shortest interval (unit: s).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TriggerWaitTimeSecond File arrival in mode. trigger waiting time (unit: seconds).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SchedulerStatus Trigger status. valid values: ACTIVE (start), PAUSED (suspend).
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
        if (array_key_exists("TriggerMode",$param) and $param["TriggerMode"] !== null) {
            $this->TriggerMode = $param["TriggerMode"];
        }

        if (array_key_exists("ExtraInfo",$param) and $param["ExtraInfo"] !== null) {
            $this->ExtraInfo = $param["ExtraInfo"];
        }

        if (array_key_exists("ScheduleTimeZone",$param) and $param["ScheduleTimeZone"] !== null) {
            $this->ScheduleTimeZone = $param["ScheduleTimeZone"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ConfigMode",$param) and $param["ConfigMode"] !== null) {
            $this->ConfigMode = $param["ConfigMode"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("CrontabExpression",$param) and $param["CrontabExpression"] !== null) {
            $this->CrontabExpression = $param["CrontabExpression"];
        }

        if (array_key_exists("TriggerId",$param) and $param["TriggerId"] !== null) {
            $this->TriggerId = $param["TriggerId"];
        }

        if (array_key_exists("FileArrivalPath",$param) and $param["FileArrivalPath"] !== null) {
            $this->FileArrivalPath = $param["FileArrivalPath"];
        }

        if (array_key_exists("TriggerMinimumIntervalSecond",$param) and $param["TriggerMinimumIntervalSecond"] !== null) {
            $this->TriggerMinimumIntervalSecond = $param["TriggerMinimumIntervalSecond"];
        }

        if (array_key_exists("TriggerWaitTimeSecond",$param) and $param["TriggerWaitTimeSecond"] !== null) {
            $this->TriggerWaitTimeSecond = $param["TriggerWaitTimeSecond"];
        }

        if (array_key_exists("SchedulerStatus",$param) and $param["SchedulerStatus"] !== null) {
            $this->SchedulerStatus = $param["SchedulerStatus"];
        }
    }
}
