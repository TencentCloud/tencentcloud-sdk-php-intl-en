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
 * @method string getCycleType() Obtain <p>Period type: Defaults to DAY_CYCLE</p><p>Supported types are </p><ul><li>ONEOFF_CYCLE: One-time</li><li>YEAR_CYCLE: Year</li><li>MONTH_CYCLE: Month</li><li>WEEK_CYCLE: Week</li><li>DAY_CYCLE: Day</li><li>HOUR_CYCLE: Hour</li><li>MINUTE_CYCLE: Minute</li><li>CRONTAB_CYCLE: crontab expression</li></ul>
 * @method void setCycleType(string $CycleType) Set <p>Period type: Defaults to DAY_CYCLE</p><p>Supported types are </p><ul><li>ONEOFF_CYCLE: One-time</li><li>YEAR_CYCLE: Year</li><li>MONTH_CYCLE: Month</li><li>WEEK_CYCLE: Week</li><li>DAY_CYCLE: Day</li><li>HOUR_CYCLE: Hour</li><li>MINUTE_CYCLE: Minute</li><li>CRONTAB_CYCLE: crontab expression</li></ul>
 * @method string getScheduleTimeZone() Obtain <p>Time zone, defaults to UTC+8</p>
 * @method void setScheduleTimeZone(string $ScheduleTimeZone) Set <p>Time zone, defaults to UTC+8</p>
 * @method string getCrontabExpression() Obtain <p>Cron expression, defaults to 0 0 0 * * ? *</p>
 * @method void setCrontabExpression(string $CrontabExpression) Set <p>Cron expression, defaults to 0 0 0 * * ? *</p>
 * @method string getStartTime() Obtain <p>Effective date, defaults to 00:00:00 of the current date</p>
 * @method void setStartTime(string $StartTime) Set <p>Effective date, defaults to 00:00:00 of the current date</p>
 * @method string getEndTime() Obtain <p>End date, defaults to 2099-12-31 23:59:59</p>
 * @method void setEndTime(string $EndTime) Set <p>End date, defaults to 2099-12-31 23:59:59</p>
 * @method string getExecutionStartTime() Obtain <p>Execution time left-closed interval, default 00:00</p>
 * @method void setExecutionStartTime(string $ExecutionStartTime) Set <p>Execution time left-closed interval, default 00:00</p>
 * @method string getExecutionEndTime() Obtain <p>Execution time right closed interval, default 23:59</p>
 * @method void setExecutionEndTime(string $ExecutionEndTime) Set <p>Execution time right closed interval, default 23:59</p>
 * @method string getCalendarOpen() Obtain <p>Calendar scheduling value is 0 and 1, where 1 is on and 0 is shutdown, with a default value of 0.</p>
 * @method void setCalendarOpen(string $CalendarOpen) Set <p>Calendar scheduling value is 0 and 1, where 1 is on and 0 is shutdown, with a default value of 0.</p>
 * @method string getCalendarId() Obtain <p>Calendar scheduling Calendar ID</p>
 * @method void setCalendarId(string $CalendarId) Set <p>Calendar scheduling Calendar ID</p>
 * @method string getSelfDepend() Obtain <p>Self-dependent, default value serial, value: parallel, serial, orderly</p>
 * @method void setSelfDepend(string $SelfDepend) Set <p>Self-dependent, default value serial, value: parallel, serial, orderly</p>
 * @method array getUpstreamDependencyConfigList() Obtain <p>Upstream dependency array</p>
 * @method void setUpstreamDependencyConfigList(array $UpstreamDependencyConfigList) Set <p>Upstream dependency array</p>
 * @method array getEventListenerList() Obtain <p>Event array</p>
 * @method void setEventListenerList(array $EventListenerList) Set <p>Event array</p>
 * @method string getAllowRedoType() Obtain <p>Rerun & replenishment configuration, defaults to ALL; , ALL allows rerun or replenishment after successful or failed running, FAILURE cannot rerun or replenish after successful running but allows rerun or replenishment after running FAILURE, NONE does not allow rerun or replenishment after either successful or failed running;</p>
 * @method void setAllowRedoType(string $AllowRedoType) Set <p>Rerun & replenishment configuration, defaults to ALL; , ALL allows rerun or replenishment after successful or failed running, FAILURE cannot rerun or replenish after successful running but allows rerun or replenishment after running FAILURE, NONE does not allow rerun or replenishment after either successful or failed running;</p>
 * @method array getParamTaskOutList() Obtain <p>Output parameter array</p>
 * @method void setParamTaskOutList(array $ParamTaskOutList) Set <p>Output parameter array</p>
 * @method array getParamTaskInList() Obtain <p>Input parameter array</p>
 * @method void setParamTaskInList(array $ParamTaskInList) Set <p>Input parameter array</p>
 * @method array getTaskOutputRegistryList() Obtain <p>Output registration</p>
 * @method void setTaskOutputRegistryList(array $TaskOutputRegistryList) Set <p>Output registration</p>
 * @method string getInitStrategy() Obtain <p><strong>Instance Generation Policy</strong></p><ul><li>T_PLUS_0: T+0 generation, default policy</li><li>T_PLUS_1: T+1 generation</li></ul>
 * @method void setInitStrategy(string $InitStrategy) Set <p><strong>Instance Generation Policy</strong></p><ul><li>T_PLUS_0: T+0 generation, default policy</li><li>T_PLUS_1: T+1 generation</li></ul>
 * @method string getScheduleRunType() Obtain <p>Scheduling type: 0 normal scheduling 1 dry-run scheduling, default is 0</p>
 * @method void setScheduleRunType(string $ScheduleRunType) Set <p>Scheduling type: 0 normal scheduling 1 dry-run scheduling, default is 0</p>
 * @method string getRunPriority() Obtain <p>Task scheduling priority Execution priority 4 High 5 Medium 6 Low, Default:6</p>
 * @method void setRunPriority(string $RunPriority) Set <p>Task scheduling priority Execution priority 4 High 5 Medium 6 Low, Default:6</p>
 * @method string getRetryWait() Obtain <p>Retry policy Retry wait time, in minutes: Default: 5</p>
 * @method void setRetryWait(string $RetryWait) Set <p>Retry policy Retry wait time, in minutes: Default: 5</p>
 * @method string getMaxRetryAttempts() Obtain <p>Retry policy Maximum attempts, Default: 4</p>
 * @method void setMaxRetryAttempts(string $MaxRetryAttempts) Set <p>Retry policy Maximum attempts, Default: 4</p>
 * @method string getExecutionTTL() Obtain <p>Timeout handling strategy Runtime timeout (unit: minutes) Default is -1</p>
 * @method void setExecutionTTL(string $ExecutionTTL) Set <p>Timeout handling strategy Runtime timeout (unit: minutes) Default is -1</p>
 * @method string getWaitExecutionTotalTTL() Obtain <p>Timeout handling strategy Wait duration timeout (unit: minutes) Default value is -1</p>
 * @method void setWaitExecutionTotalTTL(string $WaitExecutionTotalTTL) Set <p>Timeout handling strategy Wait duration timeout (unit: minutes) Default value is -1</p>
 * @method integer getScheduleType() Obtain <p>Scheduling type: 0 normal scheduling 1 dry-run scheduling, default is 0</p>
 * @method void setScheduleType(integer $ScheduleType) Set <p>Scheduling type: 0 normal scheduling 1 dry-run scheduling, default is 0</p>
 * @method integer getRunPriorityType() Obtain <p>Task scheduling priority Execution priority 4 High 5 Medium 6 Low, Default:6</p>
 * @method void setRunPriorityType(integer $RunPriorityType) Set <p>Task scheduling priority Execution priority 4 High 5 Medium 6 Low, Default:6</p>
 * @method integer getRetryWaitMinute() Obtain <p>Retry policy Retry wait time, in minutes: Default: 5</p>
 * @method void setRetryWaitMinute(integer $RetryWaitMinute) Set <p>Retry policy Retry wait time, in minutes: Default: 5</p>
 * @method integer getMaxRetryNumber() Obtain <p>Retry policy Maximum attempts, Default: 4</p>
 * @method void setMaxRetryNumber(integer $MaxRetryNumber) Set <p>Retry policy Maximum attempts, Default: 4</p>
 * @method integer getExecutionTTLMinute() Obtain <p>Timeout handling strategy Runtime timeout (unit: minutes) Default is -1</p>
 * @method void setExecutionTTLMinute(integer $ExecutionTTLMinute) Set <p>Timeout handling strategy Runtime timeout (unit: minutes) Default is -1</p>
 * @method integer getWaitExecutionTotalTTLMinute() Obtain <p>Timeout handling strategy Wait duration timeout (unit: minutes) Default value is -1</p>
 * @method void setWaitExecutionTotalTTLMinute(integer $WaitExecutionTotalTTLMinute) Set <p>Timeout handling strategy Wait duration timeout (unit: minutes) Default value is -1</p>
 * @method string getDependencyTriggerPolicy() Obtain <ul><li>The task dependency run condition defaults to ALL_SUCCESS. Currently, only workflow scheduling under the project supports configuration.</li><li>ALL_SUCCESS: All successful: When all upstream dependency tasks reach the final state, perform a dependency check. If all upstream tasks are successful, the dependency check passes. Otherwise, if one upstream task skips running, it is marked as skipped. In other cases, it is marked as upstream failure.</li><li>ALL_FAILED: All failed: When all upstream dependency tasks reach the final state, perform a dependency check. If all upstream tasks are in a failed state or marked as upstream failure, the dependency check passes. Otherwise, it is marked as skipped.</li><li>ALL_DONE: All completed: When all upstream dependency tasks reach the final state, perform a dependency check, and the dependency check passes directly.</li><li>ALL_DONE_AT_LEAST_ONE_SUCCESS: All upstream tasks completed with at least one success: When all upstream dependency tasks reach the final state, perform a dependency check. If at least one is successful, the dependency check passes. Otherwise, it skips running.</li><li>ALL_SKIPPED: All upstream tasks skipped: When all upstream dependency tasks reach the final state, perform a dependency check. Only if all upstream tasks are in a skipped state does the dependency check pass. Otherwise, the current node skips running.</li><li>ONE_FAILED: At least one failed: If at least one upstream task fails, perform a dependency check, and the check passes. If all upstream tasks complete but none fail, it skips running.</li><li>ONE_SUCCESS: At least one success: If at least one upstream task succeeds, perform a dependency check, and the check passes. If all upstream tasks complete but none succeed, it skips running.</li><li>ONE_DONE: At least one completed: If at least one upstream task completes, perform a dependency check, and the check passes. Otherwise, it continues waiting for upstream.</li><li>NONE_FAILED: All upstream tasks completed with no failure: When all upstream dependency tasks reach the final state, perform a dependency check. If all upstream tasks are successful or skipped, the check passes. Otherwise, it is marked as upstream failure.</li><li>ALL_DONE_NONE_FAILED_AT_LEAST_ONE_SUCCESS: All upstream tasks completed with no failure and at least one success: When all upstream dependency tasks reach the final state, perform a dependency check. If no upstream task fails and at least one succeeds, the check passes. Otherwise, it skips running.</li><li>NONE_SKIPPED: All upstream tasks completed with no skipped runs: When all upstream dependency tasks reach the final state, perform a dependency check. If all upstream tasks are in a successful, failed, or upstream failure state, the check passes. Otherwise, it skips running.</li><li>ALL_DONE_AT_LEAST_ONE_FAILED: All upstream tasks completed with at least one failure: When all upstream dependency tasks reach the final state, perform a dependency check. If at least one fails, the check passes. Otherwise, it skips running.</li></ul>
 * @method void setDependencyTriggerPolicy(string $DependencyTriggerPolicy) Set <ul><li>The task dependency run condition defaults to ALL_SUCCESS. Currently, only workflow scheduling under the project supports configuration.</li><li>ALL_SUCCESS: All successful: When all upstream dependency tasks reach the final state, perform a dependency check. If all upstream tasks are successful, the dependency check passes. Otherwise, if one upstream task skips running, it is marked as skipped. In other cases, it is marked as upstream failure.</li><li>ALL_FAILED: All failed: When all upstream dependency tasks reach the final state, perform a dependency check. If all upstream tasks are in a failed state or marked as upstream failure, the dependency check passes. Otherwise, it is marked as skipped.</li><li>ALL_DONE: All completed: When all upstream dependency tasks reach the final state, perform a dependency check, and the dependency check passes directly.</li><li>ALL_DONE_AT_LEAST_ONE_SUCCESS: All upstream tasks completed with at least one success: When all upstream dependency tasks reach the final state, perform a dependency check. If at least one is successful, the dependency check passes. Otherwise, it skips running.</li><li>ALL_SKIPPED: All upstream tasks skipped: When all upstream dependency tasks reach the final state, perform a dependency check. Only if all upstream tasks are in a skipped state does the dependency check pass. Otherwise, the current node skips running.</li><li>ONE_FAILED: At least one failed: If at least one upstream task fails, perform a dependency check, and the check passes. If all upstream tasks complete but none fail, it skips running.</li><li>ONE_SUCCESS: At least one success: If at least one upstream task succeeds, perform a dependency check, and the check passes. If all upstream tasks complete but none succeed, it skips running.</li><li>ONE_DONE: At least one completed: If at least one upstream task completes, perform a dependency check, and the check passes. Otherwise, it continues waiting for upstream.</li><li>NONE_FAILED: All upstream tasks completed with no failure: When all upstream dependency tasks reach the final state, perform a dependency check. If all upstream tasks are successful or skipped, the check passes. Otherwise, it is marked as upstream failure.</li><li>ALL_DONE_NONE_FAILED_AT_LEAST_ONE_SUCCESS: All upstream tasks completed with no failure and at least one success: When all upstream dependency tasks reach the final state, perform a dependency check. If no upstream task fails and at least one succeeds, the check passes. Otherwise, it skips running.</li><li>NONE_SKIPPED: All upstream tasks completed with no skipped runs: When all upstream dependency tasks reach the final state, perform a dependency check. If all upstream tasks are in a successful, failed, or upstream failure state, the check passes. Otherwise, it skips running.</li><li>ALL_DONE_AT_LEAST_ONE_FAILED: All upstream tasks completed with at least one failure: When all upstream dependency tasks reach the final state, perform a dependency check. If at least one fails, the check passes. Otherwise, it skips running.</li></ul>
 * @method integer getAllowDownstreamDependency() Obtain <p>Whether to allow downstream dependency 1 Allow 0 Do not allow</p><p>Value ranges from 0 to 1</p><p>Default value: 1</p>
 * @method void setAllowDownstreamDependency(integer $AllowDownstreamDependency) Set <p>Whether to allow downstream dependency 1 Allow 0 Do not allow</p><p>Value ranges from 0 to 1</p><p>Default value: 1</p>
 */
class CreateTaskSchedulerConfiguration extends AbstractModel
{
    /**
     * @var string <p>Period type: Defaults to DAY_CYCLE</p><p>Supported types are </p><ul><li>ONEOFF_CYCLE: One-time</li><li>YEAR_CYCLE: Year</li><li>MONTH_CYCLE: Month</li><li>WEEK_CYCLE: Week</li><li>DAY_CYCLE: Day</li><li>HOUR_CYCLE: Hour</li><li>MINUTE_CYCLE: Minute</li><li>CRONTAB_CYCLE: crontab expression</li></ul>
     */
    public $CycleType;

    /**
     * @var string <p>Time zone, defaults to UTC+8</p>
     */
    public $ScheduleTimeZone;

    /**
     * @var string <p>Cron expression, defaults to 0 0 0 * * ? *</p>
     */
    public $CrontabExpression;

    /**
     * @var string <p>Effective date, defaults to 00:00:00 of the current date</p>
     */
    public $StartTime;

    /**
     * @var string <p>End date, defaults to 2099-12-31 23:59:59</p>
     */
    public $EndTime;

    /**
     * @var string <p>Execution time left-closed interval, default 00:00</p>
     */
    public $ExecutionStartTime;

    /**
     * @var string <p>Execution time right closed interval, default 23:59</p>
     */
    public $ExecutionEndTime;

    /**
     * @var string <p>Calendar scheduling value is 0 and 1, where 1 is on and 0 is shutdown, with a default value of 0.</p>
     */
    public $CalendarOpen;

    /**
     * @var string <p>Calendar scheduling Calendar ID</p>
     */
    public $CalendarId;

    /**
     * @var string <p>Self-dependent, default value serial, value: parallel, serial, orderly</p>
     */
    public $SelfDepend;

    /**
     * @var array <p>Upstream dependency array</p>
     */
    public $UpstreamDependencyConfigList;

    /**
     * @var array <p>Event array</p>
     */
    public $EventListenerList;

    /**
     * @var string <p>Rerun & replenishment configuration, defaults to ALL; , ALL allows rerun or replenishment after successful or failed running, FAILURE cannot rerun or replenish after successful running but allows rerun or replenishment after running FAILURE, NONE does not allow rerun or replenishment after either successful or failed running;</p>
     */
    public $AllowRedoType;

    /**
     * @var array <p>Output parameter array</p>
     */
    public $ParamTaskOutList;

    /**
     * @var array <p>Input parameter array</p>
     */
    public $ParamTaskInList;

    /**
     * @var array <p>Output registration</p>
     */
    public $TaskOutputRegistryList;

    /**
     * @var string <p><strong>Instance Generation Policy</strong></p><ul><li>T_PLUS_0: T+0 generation, default policy</li><li>T_PLUS_1: T+1 generation</li></ul>
     */
    public $InitStrategy;

    /**
     * @var string <p>Scheduling type: 0 normal scheduling 1 dry-run scheduling, default is 0</p>
     * @deprecated
     */
    public $ScheduleRunType;

    /**
     * @var string <p>Task scheduling priority Execution priority 4 High 5 Medium 6 Low, Default:6</p>
     * @deprecated
     */
    public $RunPriority;

    /**
     * @var string <p>Retry policy Retry wait time, in minutes: Default: 5</p>
     * @deprecated
     */
    public $RetryWait;

    /**
     * @var string <p>Retry policy Maximum attempts, Default: 4</p>
     * @deprecated
     */
    public $MaxRetryAttempts;

    /**
     * @var string <p>Timeout handling strategy Runtime timeout (unit: minutes) Default is -1</p>
     * @deprecated
     */
    public $ExecutionTTL;

    /**
     * @var string <p>Timeout handling strategy Wait duration timeout (unit: minutes) Default value is -1</p>
     * @deprecated
     */
    public $WaitExecutionTotalTTL;

    /**
     * @var integer <p>Scheduling type: 0 normal scheduling 1 dry-run scheduling, default is 0</p>
     */
    public $ScheduleType;

    /**
     * @var integer <p>Task scheduling priority Execution priority 4 High 5 Medium 6 Low, Default:6</p>
     */
    public $RunPriorityType;

    /**
     * @var integer <p>Retry policy Retry wait time, in minutes: Default: 5</p>
     */
    public $RetryWaitMinute;

    /**
     * @var integer <p>Retry policy Maximum attempts, Default: 4</p>
     */
    public $MaxRetryNumber;

    /**
     * @var integer <p>Timeout handling strategy Runtime timeout (unit: minutes) Default is -1</p>
     */
    public $ExecutionTTLMinute;

    /**
     * @var integer <p>Timeout handling strategy Wait duration timeout (unit: minutes) Default value is -1</p>
     */
    public $WaitExecutionTotalTTLMinute;

    /**
     * @var string <ul><li>The task dependency run condition defaults to ALL_SUCCESS. Currently, only workflow scheduling under the project supports configuration.</li><li>ALL_SUCCESS: All successful: When all upstream dependency tasks reach the final state, perform a dependency check. If all upstream tasks are successful, the dependency check passes. Otherwise, if one upstream task skips running, it is marked as skipped. In other cases, it is marked as upstream failure.</li><li>ALL_FAILED: All failed: When all upstream dependency tasks reach the final state, perform a dependency check. If all upstream tasks are in a failed state or marked as upstream failure, the dependency check passes. Otherwise, it is marked as skipped.</li><li>ALL_DONE: All completed: When all upstream dependency tasks reach the final state, perform a dependency check, and the dependency check passes directly.</li><li>ALL_DONE_AT_LEAST_ONE_SUCCESS: All upstream tasks completed with at least one success: When all upstream dependency tasks reach the final state, perform a dependency check. If at least one is successful, the dependency check passes. Otherwise, it skips running.</li><li>ALL_SKIPPED: All upstream tasks skipped: When all upstream dependency tasks reach the final state, perform a dependency check. Only if all upstream tasks are in a skipped state does the dependency check pass. Otherwise, the current node skips running.</li><li>ONE_FAILED: At least one failed: If at least one upstream task fails, perform a dependency check, and the check passes. If all upstream tasks complete but none fail, it skips running.</li><li>ONE_SUCCESS: At least one success: If at least one upstream task succeeds, perform a dependency check, and the check passes. If all upstream tasks complete but none succeed, it skips running.</li><li>ONE_DONE: At least one completed: If at least one upstream task completes, perform a dependency check, and the check passes. Otherwise, it continues waiting for upstream.</li><li>NONE_FAILED: All upstream tasks completed with no failure: When all upstream dependency tasks reach the final state, perform a dependency check. If all upstream tasks are successful or skipped, the check passes. Otherwise, it is marked as upstream failure.</li><li>ALL_DONE_NONE_FAILED_AT_LEAST_ONE_SUCCESS: All upstream tasks completed with no failure and at least one success: When all upstream dependency tasks reach the final state, perform a dependency check. If no upstream task fails and at least one succeeds, the check passes. Otherwise, it skips running.</li><li>NONE_SKIPPED: All upstream tasks completed with no skipped runs: When all upstream dependency tasks reach the final state, perform a dependency check. If all upstream tasks are in a successful, failed, or upstream failure state, the check passes. Otherwise, it skips running.</li><li>ALL_DONE_AT_LEAST_ONE_FAILED: All upstream tasks completed with at least one failure: When all upstream dependency tasks reach the final state, perform a dependency check. If at least one fails, the check passes. Otherwise, it skips running.</li></ul>
     */
    public $DependencyTriggerPolicy;

    /**
     * @var integer <p>Whether to allow downstream dependency 1 Allow 0 Do not allow</p><p>Value ranges from 0 to 1</p><p>Default value: 1</p>
     * @deprecated
     */
    public $AllowDownstreamDependency;

    /**
     * @param string $CycleType <p>Period type: Defaults to DAY_CYCLE</p><p>Supported types are </p><ul><li>ONEOFF_CYCLE: One-time</li><li>YEAR_CYCLE: Year</li><li>MONTH_CYCLE: Month</li><li>WEEK_CYCLE: Week</li><li>DAY_CYCLE: Day</li><li>HOUR_CYCLE: Hour</li><li>MINUTE_CYCLE: Minute</li><li>CRONTAB_CYCLE: crontab expression</li></ul>
     * @param string $ScheduleTimeZone <p>Time zone, defaults to UTC+8</p>
     * @param string $CrontabExpression <p>Cron expression, defaults to 0 0 0 * * ? *</p>
     * @param string $StartTime <p>Effective date, defaults to 00:00:00 of the current date</p>
     * @param string $EndTime <p>End date, defaults to 2099-12-31 23:59:59</p>
     * @param string $ExecutionStartTime <p>Execution time left-closed interval, default 00:00</p>
     * @param string $ExecutionEndTime <p>Execution time right closed interval, default 23:59</p>
     * @param string $CalendarOpen <p>Calendar scheduling value is 0 and 1, where 1 is on and 0 is shutdown, with a default value of 0.</p>
     * @param string $CalendarId <p>Calendar scheduling Calendar ID</p>
     * @param string $SelfDepend <p>Self-dependent, default value serial, value: parallel, serial, orderly</p>
     * @param array $UpstreamDependencyConfigList <p>Upstream dependency array</p>
     * @param array $EventListenerList <p>Event array</p>
     * @param string $AllowRedoType <p>Rerun & replenishment configuration, defaults to ALL; , ALL allows rerun or replenishment after successful or failed running, FAILURE cannot rerun or replenish after successful running but allows rerun or replenishment after running FAILURE, NONE does not allow rerun or replenishment after either successful or failed running;</p>
     * @param array $ParamTaskOutList <p>Output parameter array</p>
     * @param array $ParamTaskInList <p>Input parameter array</p>
     * @param array $TaskOutputRegistryList <p>Output registration</p>
     * @param string $InitStrategy <p><strong>Instance Generation Policy</strong></p><ul><li>T_PLUS_0: T+0 generation, default policy</li><li>T_PLUS_1: T+1 generation</li></ul>
     * @param string $ScheduleRunType <p>Scheduling type: 0 normal scheduling 1 dry-run scheduling, default is 0</p>
     * @param string $RunPriority <p>Task scheduling priority Execution priority 4 High 5 Medium 6 Low, Default:6</p>
     * @param string $RetryWait <p>Retry policy Retry wait time, in minutes: Default: 5</p>
     * @param string $MaxRetryAttempts <p>Retry policy Maximum attempts, Default: 4</p>
     * @param string $ExecutionTTL <p>Timeout handling strategy Runtime timeout (unit: minutes) Default is -1</p>
     * @param string $WaitExecutionTotalTTL <p>Timeout handling strategy Wait duration timeout (unit: minutes) Default value is -1</p>
     * @param integer $ScheduleType <p>Scheduling type: 0 normal scheduling 1 dry-run scheduling, default is 0</p>
     * @param integer $RunPriorityType <p>Task scheduling priority Execution priority 4 High 5 Medium 6 Low, Default:6</p>
     * @param integer $RetryWaitMinute <p>Retry policy Retry wait time, in minutes: Default: 5</p>
     * @param integer $MaxRetryNumber <p>Retry policy Maximum attempts, Default: 4</p>
     * @param integer $ExecutionTTLMinute <p>Timeout handling strategy Runtime timeout (unit: minutes) Default is -1</p>
     * @param integer $WaitExecutionTotalTTLMinute <p>Timeout handling strategy Wait duration timeout (unit: minutes) Default value is -1</p>
     * @param string $DependencyTriggerPolicy <ul><li>The task dependency run condition defaults to ALL_SUCCESS. Currently, only workflow scheduling under the project supports configuration.</li><li>ALL_SUCCESS: All successful: When all upstream dependency tasks reach the final state, perform a dependency check. If all upstream tasks are successful, the dependency check passes. Otherwise, if one upstream task skips running, it is marked as skipped. In other cases, it is marked as upstream failure.</li><li>ALL_FAILED: All failed: When all upstream dependency tasks reach the final state, perform a dependency check. If all upstream tasks are in a failed state or marked as upstream failure, the dependency check passes. Otherwise, it is marked as skipped.</li><li>ALL_DONE: All completed: When all upstream dependency tasks reach the final state, perform a dependency check, and the dependency check passes directly.</li><li>ALL_DONE_AT_LEAST_ONE_SUCCESS: All upstream tasks completed with at least one success: When all upstream dependency tasks reach the final state, perform a dependency check. If at least one is successful, the dependency check passes. Otherwise, it skips running.</li><li>ALL_SKIPPED: All upstream tasks skipped: When all upstream dependency tasks reach the final state, perform a dependency check. Only if all upstream tasks are in a skipped state does the dependency check pass. Otherwise, the current node skips running.</li><li>ONE_FAILED: At least one failed: If at least one upstream task fails, perform a dependency check, and the check passes. If all upstream tasks complete but none fail, it skips running.</li><li>ONE_SUCCESS: At least one success: If at least one upstream task succeeds, perform a dependency check, and the check passes. If all upstream tasks complete but none succeed, it skips running.</li><li>ONE_DONE: At least one completed: If at least one upstream task completes, perform a dependency check, and the check passes. Otherwise, it continues waiting for upstream.</li><li>NONE_FAILED: All upstream tasks completed with no failure: When all upstream dependency tasks reach the final state, perform a dependency check. If all upstream tasks are successful or skipped, the check passes. Otherwise, it is marked as upstream failure.</li><li>ALL_DONE_NONE_FAILED_AT_LEAST_ONE_SUCCESS: All upstream tasks completed with no failure and at least one success: When all upstream dependency tasks reach the final state, perform a dependency check. If no upstream task fails and at least one succeeds, the check passes. Otherwise, it skips running.</li><li>NONE_SKIPPED: All upstream tasks completed with no skipped runs: When all upstream dependency tasks reach the final state, perform a dependency check. If all upstream tasks are in a successful, failed, or upstream failure state, the check passes. Otherwise, it skips running.</li><li>ALL_DONE_AT_LEAST_ONE_FAILED: All upstream tasks completed with at least one failure: When all upstream dependency tasks reach the final state, perform a dependency check. If at least one fails, the check passes. Otherwise, it skips running.</li></ul>
     * @param integer $AllowDownstreamDependency <p>Whether to allow downstream dependency 1 Allow 0 Do not allow</p><p>Value ranges from 0 to 1</p><p>Default value: 1</p>
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

        if (array_key_exists("ScheduleRunType",$param) and $param["ScheduleRunType"] !== null) {
            $this->ScheduleRunType = $param["ScheduleRunType"];
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

        if (array_key_exists("ScheduleType",$param) and $param["ScheduleType"] !== null) {
            $this->ScheduleType = $param["ScheduleType"];
        }

        if (array_key_exists("RunPriorityType",$param) and $param["RunPriorityType"] !== null) {
            $this->RunPriorityType = $param["RunPriorityType"];
        }

        if (array_key_exists("RetryWaitMinute",$param) and $param["RetryWaitMinute"] !== null) {
            $this->RetryWaitMinute = $param["RetryWaitMinute"];
        }

        if (array_key_exists("MaxRetryNumber",$param) and $param["MaxRetryNumber"] !== null) {
            $this->MaxRetryNumber = $param["MaxRetryNumber"];
        }

        if (array_key_exists("ExecutionTTLMinute",$param) and $param["ExecutionTTLMinute"] !== null) {
            $this->ExecutionTTLMinute = $param["ExecutionTTLMinute"];
        }

        if (array_key_exists("WaitExecutionTotalTTLMinute",$param) and $param["WaitExecutionTotalTTLMinute"] !== null) {
            $this->WaitExecutionTotalTTLMinute = $param["WaitExecutionTotalTTLMinute"];
        }

        if (array_key_exists("DependencyTriggerPolicy",$param) and $param["DependencyTriggerPolicy"] !== null) {
            $this->DependencyTriggerPolicy = $param["DependencyTriggerPolicy"];
        }

        if (array_key_exists("AllowDownstreamDependency",$param) and $param["AllowDownstreamDependency"] !== null) {
            $this->AllowDownstreamDependency = $param["AllowDownstreamDependency"];
        }
    }
}
