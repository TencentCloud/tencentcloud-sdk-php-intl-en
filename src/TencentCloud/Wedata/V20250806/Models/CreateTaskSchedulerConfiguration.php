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
 * Creates task scheduling configuration info.
 *
 * @method string getCycleType() Obtain Period type: defaults to DAY_CYCLE.

Supported types. 

ONEOFF_CYCLE: specifies a one-time cycle.
YEAR_CYCLE: specifies the year cycle.
MONTH_CYCLE: specifies the monthly cycle.
WEEK_CYCLE: specifies the week cycle.
DAY_CYCLE: specifies the day cycle.
HOUR_CYCLE: specifies the hour cycle.
MINUTE_CYCLE: specifies the minute cycle.
CRONTAB_CYCLE: specifies the crontab expression type.
 * @method void setCycleType(string $CycleType) Set Period type: defaults to DAY_CYCLE.

Supported types. 

ONEOFF_CYCLE: specifies a one-time cycle.
YEAR_CYCLE: specifies the year cycle.
MONTH_CYCLE: specifies the monthly cycle.
WEEK_CYCLE: specifies the week cycle.
DAY_CYCLE: specifies the day cycle.
HOUR_CYCLE: specifies the hour cycle.
MINUTE_CYCLE: specifies the minute cycle.
CRONTAB_CYCLE: specifies the crontab expression type.
 * @method string getScheduleTimeZone() Obtain Time zone, defaults to UTC+8.
 * @method void setScheduleTimeZone(string $ScheduleTimeZone) Set Time zone, defaults to UTC+8.
 * @method string getCrontabExpression() Obtain Cron expression, defaults to 0 0 0 * * ? *.
 * @method void setCrontabExpression(string $CrontabExpression) Set Cron expression, defaults to 0 0 0 * * ? *.
 * @method string getStartTime() Obtain Effective date, defaults to 00:00:00 of the current date.
 * @method void setStartTime(string $StartTime) Set Effective date, defaults to 00:00:00 of the current date.
 * @method string getEndTime() Obtain End date, defaults to 2099-12-31 23:59:59.
 * @method void setEndTime(string $EndTime) Set End date, defaults to 2099-12-31 23:59:59.
 * @method string getExecutionStartTime() Obtain Execution time: the left-closed interval. Default: 00:00.
 * @method void setExecutionStartTime(string $ExecutionStartTime) Set Execution time: the left-closed interval. Default: 00:00.
 * @method string getExecutionEndTime() Obtain Execution time: the right closed interval. Default: 23:59.
 * @method void setExecutionEndTime(string $ExecutionEndTime) Set Execution time: the right closed interval. Default: 23:59.
 * @method string getScheduleRunType() Obtain Scheduling type: 0 for normal scheduling, 1 for dry-run scheduling. Default is 0.
 * @method void setScheduleRunType(string $ScheduleRunType) Set Scheduling type: 0 for normal scheduling, 1 for dry-run scheduling. Default is 0.
 * @method string getCalendarOpen() Obtain Calendar scheduling value: 0 or 1, where 1 means ON and 0 means OFF. Default is 0.
 * @method void setCalendarOpen(string $CalendarOpen) Set Calendar scheduling value: 0 or 1, where 1 means ON and 0 means OFF. Default is 0.
 * @method string getCalendarId() Obtain Calendar scheduling:  the calendar ID.
 * @method void setCalendarId(string $CalendarId) Set Calendar scheduling:  the calendar ID.
 * @method string getSelfDepend() Obtain Self-Dependent. Valid values: parallel, serial, orderly. Default value: serial. 
 * @method void setSelfDepend(string $SelfDepend) Set Self-Dependent. Valid values: parallel, serial, orderly. Default value: serial. 
 * @method array getUpstreamDependencyConfigList() Obtain Specifies the upstream dependency list.
 * @method void setUpstreamDependencyConfigList(array $UpstreamDependencyConfigList) Set Specifies the upstream dependency list.
 * @method array getEventListenerList() Obtain List of Events
 * @method void setEventListenerList(array $EventListenerList) Set List of Events
 * @method string getRunPriority() Obtain Task scheduling priority. Valid values: 4 (high), 5 (medium), 6 (low). Default: 6.
 * @method void setRunPriority(string $RunPriority) Set Task scheduling priority. Valid values: 4 (high), 5 (medium), 6 (low). Default: 6.
 * @method string getRetryWait() Obtain Retry Policy: Retry Wait Time (in minutes): Default 5
 * @method void setRetryWait(string $RetryWait) Set Retry Policy: Retry Wait Time (in minutes): Default 5
 * @method string getMaxRetryAttempts() Obtain Retry Policy: maximum attempts. Default: 4.
 * @method void setMaxRetryAttempts(string $MaxRetryAttempts) Set Retry Policy: maximum attempts. Default: 4.
 * @method string getExecutionTTL() Obtain Timeout Handling Policy: Execution Timeout (in minutes), default: -1
 * @method void setExecutionTTL(string $ExecutionTTL) Set Timeout Handling Policy: Execution Timeout (in minutes), default: -1
 * @method string getWaitExecutionTotalTTL() Obtain Timeout Handling Policy: Wait Duration Timeout  (in minutes), default: -1
 * @method void setWaitExecutionTotalTTL(string $WaitExecutionTotalTTL) Set Timeout Handling Policy: Wait Duration Timeout  (in minutes), default: -1
 * @method string getAllowRedoType() Obtain Rerun & Refill Configuration: Default: ALL;

* ALL: Rerun or refill is allowed regardless of whether the task succeeds or fails.

* FAILURE: Rerun or refill is allowed only if the task fails; not allowed if the task succeeds.

* NONE: Rerun or refill is not allowed regardless of success or failure.
 * @method void setAllowRedoType(string $AllowRedoType) Set Rerun & Refill Configuration: Default: ALL;

* ALL: Rerun or refill is allowed regardless of whether the task succeeds or fails.

* FAILURE: Rerun or refill is allowed only if the task fails; not allowed if the task succeeds.

* NONE: Rerun or refill is not allowed regardless of success or failure.
 * @method array getParamTaskOutList() Obtain Output parameter list.
 * @method void setParamTaskOutList(array $ParamTaskOutList) Set Output parameter list.
 * @method array getParamTaskInList() Obtain Input parameter list.
 * @method void setParamTaskInList(array $ParamTaskInList) Set Input parameter list.
 * @method array getTaskOutputRegistryList() Obtain Output registration.
 * @method void setTaskOutputRegistryList(array $TaskOutputRegistryList) Set Output registration.
 * @method string getInitStrategy() Obtain **Instance generation policy**.
T_PLUS_0: specifies t+0 generation. default policy.
T_PLUS_1: specifies t+1 generation.
 * @method void setInitStrategy(string $InitStrategy) Set **Instance generation policy**.
T_PLUS_0: specifies t+0 generation. default policy.
T_PLUS_1: specifies t+1 generation.
 */
class CreateTaskSchedulerConfiguration extends AbstractModel
{
    /**
     * @var string Period type: defaults to DAY_CYCLE.

Supported types. 

ONEOFF_CYCLE: specifies a one-time cycle.
YEAR_CYCLE: specifies the year cycle.
MONTH_CYCLE: specifies the monthly cycle.
WEEK_CYCLE: specifies the week cycle.
DAY_CYCLE: specifies the day cycle.
HOUR_CYCLE: specifies the hour cycle.
MINUTE_CYCLE: specifies the minute cycle.
CRONTAB_CYCLE: specifies the crontab expression type.
     */
    public $CycleType;

    /**
     * @var string Time zone, defaults to UTC+8.
     */
    public $ScheduleTimeZone;

    /**
     * @var string Cron expression, defaults to 0 0 0 * * ? *.
     */
    public $CrontabExpression;

    /**
     * @var string Effective date, defaults to 00:00:00 of the current date.
     */
    public $StartTime;

    /**
     * @var string End date, defaults to 2099-12-31 23:59:59.
     */
    public $EndTime;

    /**
     * @var string Execution time: the left-closed interval. Default: 00:00.
     */
    public $ExecutionStartTime;

    /**
     * @var string Execution time: the right closed interval. Default: 23:59.
     */
    public $ExecutionEndTime;

    /**
     * @var string Scheduling type: 0 for normal scheduling, 1 for dry-run scheduling. Default is 0.
     */
    public $ScheduleRunType;

    /**
     * @var string Calendar scheduling value: 0 or 1, where 1 means ON and 0 means OFF. Default is 0.
     */
    public $CalendarOpen;

    /**
     * @var string Calendar scheduling:  the calendar ID.
     */
    public $CalendarId;

    /**
     * @var string Self-Dependent. Valid values: parallel, serial, orderly. Default value: serial. 
     */
    public $SelfDepend;

    /**
     * @var array Specifies the upstream dependency list.
     */
    public $UpstreamDependencyConfigList;

    /**
     * @var array List of Events
     */
    public $EventListenerList;

    /**
     * @var string Task scheduling priority. Valid values: 4 (high), 5 (medium), 6 (low). Default: 6.
     */
    public $RunPriority;

    /**
     * @var string Retry Policy: Retry Wait Time (in minutes): Default 5
     */
    public $RetryWait;

    /**
     * @var string Retry Policy: maximum attempts. Default: 4.
     */
    public $MaxRetryAttempts;

    /**
     * @var string Timeout Handling Policy: Execution Timeout (in minutes), default: -1
     */
    public $ExecutionTTL;

    /**
     * @var string Timeout Handling Policy: Wait Duration Timeout  (in minutes), default: -1
     */
    public $WaitExecutionTotalTTL;

    /**
     * @var string Rerun & Refill Configuration: Default: ALL;

* ALL: Rerun or refill is allowed regardless of whether the task succeeds or fails.

* FAILURE: Rerun or refill is allowed only if the task fails; not allowed if the task succeeds.

* NONE: Rerun or refill is not allowed regardless of success or failure.
     */
    public $AllowRedoType;

    /**
     * @var array Output parameter list.
     */
    public $ParamTaskOutList;

    /**
     * @var array Input parameter list.
     */
    public $ParamTaskInList;

    /**
     * @var array Output registration.
     */
    public $TaskOutputRegistryList;

    /**
     * @var string **Instance generation policy**.
T_PLUS_0: specifies t+0 generation. default policy.
T_PLUS_1: specifies t+1 generation.
     */
    public $InitStrategy;

    /**
     * @param string $CycleType Period type: defaults to DAY_CYCLE.

Supported types. 

ONEOFF_CYCLE: specifies a one-time cycle.
YEAR_CYCLE: specifies the year cycle.
MONTH_CYCLE: specifies the monthly cycle.
WEEK_CYCLE: specifies the week cycle.
DAY_CYCLE: specifies the day cycle.
HOUR_CYCLE: specifies the hour cycle.
MINUTE_CYCLE: specifies the minute cycle.
CRONTAB_CYCLE: specifies the crontab expression type.
     * @param string $ScheduleTimeZone Time zone, defaults to UTC+8.
     * @param string $CrontabExpression Cron expression, defaults to 0 0 0 * * ? *.
     * @param string $StartTime Effective date, defaults to 00:00:00 of the current date.
     * @param string $EndTime End date, defaults to 2099-12-31 23:59:59.
     * @param string $ExecutionStartTime Execution time: the left-closed interval. Default: 00:00.
     * @param string $ExecutionEndTime Execution time: the right closed interval. Default: 23:59.
     * @param string $ScheduleRunType Scheduling type: 0 for normal scheduling, 1 for dry-run scheduling. Default is 0.
     * @param string $CalendarOpen Calendar scheduling value: 0 or 1, where 1 means ON and 0 means OFF. Default is 0.
     * @param string $CalendarId Calendar scheduling:  the calendar ID.
     * @param string $SelfDepend Self-Dependent. Valid values: parallel, serial, orderly. Default value: serial. 
     * @param array $UpstreamDependencyConfigList Specifies the upstream dependency list.
     * @param array $EventListenerList List of Events
     * @param string $RunPriority Task scheduling priority. Valid values: 4 (high), 5 (medium), 6 (low). Default: 6.
     * @param string $RetryWait Retry Policy: Retry Wait Time (in minutes): Default 5
     * @param string $MaxRetryAttempts Retry Policy: maximum attempts. Default: 4.
     * @param string $ExecutionTTL Timeout Handling Policy: Execution Timeout (in minutes), default: -1
     * @param string $WaitExecutionTotalTTL Timeout Handling Policy: Wait Duration Timeout  (in minutes), default: -1
     * @param string $AllowRedoType Rerun & Refill Configuration: Default: ALL;

* ALL: Rerun or refill is allowed regardless of whether the task succeeds or fails.

* FAILURE: Rerun or refill is allowed only if the task fails; not allowed if the task succeeds.

* NONE: Rerun or refill is not allowed regardless of success or failure.
     * @param array $ParamTaskOutList Output parameter list.
     * @param array $ParamTaskInList Input parameter list.
     * @param array $TaskOutputRegistryList Output registration.
     * @param string $InitStrategy **Instance generation policy**.
T_PLUS_0: specifies t+0 generation. default policy.
T_PLUS_1: specifies t+1 generation.
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

        if (array_key_exists("ScheduleTimeZone",$param) and $param["ScheduleTimeZone"] !== null) {
            $this->ScheduleTimeZone = $param["ScheduleTimeZone"];
        }

        if (array_key_exists("CrontabExpression",$param) and $param["CrontabExpression"] !== null) {
            $this->CrontabExpression = $param["CrontabExpression"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ExecutionStartTime",$param) and $param["ExecutionStartTime"] !== null) {
            $this->ExecutionStartTime = $param["ExecutionStartTime"];
        }

        if (array_key_exists("ExecutionEndTime",$param) and $param["ExecutionEndTime"] !== null) {
            $this->ExecutionEndTime = $param["ExecutionEndTime"];
        }

        if (array_key_exists("ScheduleRunType",$param) and $param["ScheduleRunType"] !== null) {
            $this->ScheduleRunType = $param["ScheduleRunType"];
        }

        if (array_key_exists("CalendarOpen",$param) and $param["CalendarOpen"] !== null) {
            $this->CalendarOpen = $param["CalendarOpen"];
        }

        if (array_key_exists("CalendarId",$param) and $param["CalendarId"] !== null) {
            $this->CalendarId = $param["CalendarId"];
        }

        if (array_key_exists("SelfDepend",$param) and $param["SelfDepend"] !== null) {
            $this->SelfDepend = $param["SelfDepend"];
        }

        if (array_key_exists("UpstreamDependencyConfigList",$param) and $param["UpstreamDependencyConfigList"] !== null) {
            $this->UpstreamDependencyConfigList = [];
            foreach ($param["UpstreamDependencyConfigList"] as $key => $value){
                $obj = new DependencyTaskBrief();
                $obj->deserialize($value);
                array_push($this->UpstreamDependencyConfigList, $obj);
            }
        }

        if (array_key_exists("EventListenerList",$param) and $param["EventListenerList"] !== null) {
            $this->EventListenerList = [];
            foreach ($param["EventListenerList"] as $key => $value){
                $obj = new EventListener();
                $obj->deserialize($value);
                array_push($this->EventListenerList, $obj);
            }
        }

        if (array_key_exists("RunPriority",$param) and $param["RunPriority"] !== null) {
            $this->RunPriority = $param["RunPriority"];
        }

        if (array_key_exists("RetryWait",$param) and $param["RetryWait"] !== null) {
            $this->RetryWait = $param["RetryWait"];
        }

        if (array_key_exists("MaxRetryAttempts",$param) and $param["MaxRetryAttempts"] !== null) {
            $this->MaxRetryAttempts = $param["MaxRetryAttempts"];
        }

        if (array_key_exists("ExecutionTTL",$param) and $param["ExecutionTTL"] !== null) {
            $this->ExecutionTTL = $param["ExecutionTTL"];
        }

        if (array_key_exists("WaitExecutionTotalTTL",$param) and $param["WaitExecutionTotalTTL"] !== null) {
            $this->WaitExecutionTotalTTL = $param["WaitExecutionTotalTTL"];
        }

        if (array_key_exists("AllowRedoType",$param) and $param["AllowRedoType"] !== null) {
            $this->AllowRedoType = $param["AllowRedoType"];
        }

        if (array_key_exists("ParamTaskOutList",$param) and $param["ParamTaskOutList"] !== null) {
            $this->ParamTaskOutList = [];
            foreach ($param["ParamTaskOutList"] as $key => $value){
                $obj = new OutTaskParameter();
                $obj->deserialize($value);
                array_push($this->ParamTaskOutList, $obj);
            }
        }

        if (array_key_exists("ParamTaskInList",$param) and $param["ParamTaskInList"] !== null) {
            $this->ParamTaskInList = [];
            foreach ($param["ParamTaskInList"] as $key => $value){
                $obj = new InTaskParameter();
                $obj->deserialize($value);
                array_push($this->ParamTaskInList, $obj);
            }
        }

        if (array_key_exists("TaskOutputRegistryList",$param) and $param["TaskOutputRegistryList"] !== null) {
            $this->TaskOutputRegistryList = [];
            foreach ($param["TaskOutputRegistryList"] as $key => $value){
                $obj = new TaskDataRegistry();
                $obj->deserialize($value);
                array_push($this->TaskOutputRegistryList, $obj);
            }
        }

        if (array_key_exists("InitStrategy",$param) and $param["InitStrategy"] !== null) {
            $this->InitStrategy = $param["InitStrategy"];
        }
    }
}
