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
 * ModifyWorkflowSchedule request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getWorkflowId() Obtain Workflow ID
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID
 * @method integer getDelayTime() Obtain Delay time, in minutes
 * @method void setDelayTime(integer $DelayTime) Set Delay time, in minutes
 * @method integer getStartupTime() Obtain Start Time
 * @method void setStartupTime(integer $StartupTime) Set Start Time
 * @method integer getSelfDepend() Obtain Self-Dependency Type  1: Sequential serial, one at a time, queued, 2: Unordered serial, one at a time, not queued, 3: Parallel, multiple at once
 * @method void setSelfDepend(integer $SelfDepend) Set Self-Dependency Type  1: Sequential serial, one at a time, queued, 2: Unordered serial, one at a time, not queued, 3: Parallel, multiple at once
 * @method integer getCycleType() Obtain "Cycle Type  0:crontab, 1:Minute,2:Hour,3:Day,4:Week,5:Month,6:One-time,7:User driven,10:Flexible cycle Week,11:Flexible cycle Month,12:Year,13:Immediate Trigger Instant type, isolated from normal cycle scheduling task logic
 * @method void setCycleType(integer $CycleType) Set "Cycle Type  0:crontab, 1:Minute,2:Hour,3:Day,4:Week,5:Month,6:One-time,7:User driven,10:Flexible cycle Week,11:Flexible cycle Month,12:Year,13:Immediate Trigger Instant type, isolated from normal cycle scheduling task logic
 * @method integer getCycleStep() Obtain Step Length, Interval Time, minimum of 1
 * @method void setCycleStep(integer $CycleStep) Set Step Length, Interval Time, minimum of 1
 * @method string getStartTime() Obtain Effective Start Time, format yyyy-MM-dd HH:mm:ss
 * @method void setStartTime(string $StartTime) Set Effective Start Time, format yyyy-MM-dd HH:mm:ss
 * @method string getEndTime() Obtain Effective End Time, format yyyy-MM-dd HH:mm:ss
 * @method void setEndTime(string $EndTime) Set Effective End Time, format yyyy-MM-dd HH:mm:ss
 * @method string getTaskAction() Obtain Scheduling Configuration - Elastic Cycle Configuration, applicable to Hourly/Weekly/Monthly/Yearly schedules. For hourly tasks scheduled at 0, 3, 4 o'clock, it would be '0,3,4'.
 * @method void setTaskAction(string $TaskAction) Set Scheduling Configuration - Elastic Cycle Configuration, applicable to Hourly/Weekly/Monthly/Yearly schedules. For hourly tasks scheduled at 0, 3, 4 o'clock, it would be '0,3,4'.
 * @method string getCrontabExpression() Obtain Cron Expression is required only for Cron Tab Scheduling
 * @method void setCrontabExpression(string $CrontabExpression) Set Cron Expression is required only for Cron Tab Scheduling
 * @method string getExecutionStartTime() Obtain Execution Time Left Closed Interval, format: HH:mm. Applicable only to hourly scheduling. For example, for hourly tasks, it specifies the effective interval every day
 * @method void setExecutionStartTime(string $ExecutionStartTime) Set Execution Time Left Closed Interval, format: HH:mm. Applicable only to hourly scheduling. For example, for hourly tasks, it specifies the effective interval every day
 * @method string getExecutionEndTime() Obtain Execution Time Right Closed Interval, format: HH:mm. Applicable only to hourly scheduling. For example, for hourly tasks, it specifies the effective interval every day
 * @method void setExecutionEndTime(string $ExecutionEndTime) Set Execution Time Right Closed Interval, format: HH:mm. Applicable only to hourly scheduling. For example, for hourly tasks, it specifies the effective interval every day
 * @method string getDependencyWorkflow() Obtain Workflow Dependency, yes or no
 * @method void setDependencyWorkflow(string $DependencyWorkflow) Set Workflow Dependency, yes or no
 */
class ModifyWorkflowScheduleRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Workflow ID
     */
    public $WorkflowId;

    /**
     * @var integer Delay time, in minutes
     */
    public $DelayTime;

    /**
     * @var integer Start Time
     */
    public $StartupTime;

    /**
     * @var integer Self-Dependency Type  1: Sequential serial, one at a time, queued, 2: Unordered serial, one at a time, not queued, 3: Parallel, multiple at once
     */
    public $SelfDepend;

    /**
     * @var integer "Cycle Type  0:crontab, 1:Minute,2:Hour,3:Day,4:Week,5:Month,6:One-time,7:User driven,10:Flexible cycle Week,11:Flexible cycle Month,12:Year,13:Immediate Trigger Instant type, isolated from normal cycle scheduling task logic
     */
    public $CycleType;

    /**
     * @var integer Step Length, Interval Time, minimum of 1
     */
    public $CycleStep;

    /**
     * @var string Effective Start Time, format yyyy-MM-dd HH:mm:ss
     */
    public $StartTime;

    /**
     * @var string Effective End Time, format yyyy-MM-dd HH:mm:ss
     */
    public $EndTime;

    /**
     * @var string Scheduling Configuration - Elastic Cycle Configuration, applicable to Hourly/Weekly/Monthly/Yearly schedules. For hourly tasks scheduled at 0, 3, 4 o'clock, it would be '0,3,4'.
     */
    public $TaskAction;

    /**
     * @var string Cron Expression is required only for Cron Tab Scheduling
     */
    public $CrontabExpression;

    /**
     * @var string Execution Time Left Closed Interval, format: HH:mm. Applicable only to hourly scheduling. For example, for hourly tasks, it specifies the effective interval every day
     */
    public $ExecutionStartTime;

    /**
     * @var string Execution Time Right Closed Interval, format: HH:mm. Applicable only to hourly scheduling. For example, for hourly tasks, it specifies the effective interval every day
     */
    public $ExecutionEndTime;

    /**
     * @var string Workflow Dependency, yes or no
     */
    public $DependencyWorkflow;

    /**
     * @param string $ProjectId Project ID
     * @param string $WorkflowId Workflow ID
     * @param integer $DelayTime Delay time, in minutes
     * @param integer $StartupTime Start Time
     * @param integer $SelfDepend Self-Dependency Type  1: Sequential serial, one at a time, queued, 2: Unordered serial, one at a time, not queued, 3: Parallel, multiple at once
     * @param integer $CycleType "Cycle Type  0:crontab, 1:Minute,2:Hour,3:Day,4:Week,5:Month,6:One-time,7:User driven,10:Flexible cycle Week,11:Flexible cycle Month,12:Year,13:Immediate Trigger Instant type, isolated from normal cycle scheduling task logic
     * @param integer $CycleStep Step Length, Interval Time, minimum of 1
     * @param string $StartTime Effective Start Time, format yyyy-MM-dd HH:mm:ss
     * @param string $EndTime Effective End Time, format yyyy-MM-dd HH:mm:ss
     * @param string $TaskAction Scheduling Configuration - Elastic Cycle Configuration, applicable to Hourly/Weekly/Monthly/Yearly schedules. For hourly tasks scheduled at 0, 3, 4 o'clock, it would be '0,3,4'.
     * @param string $CrontabExpression Cron Expression is required only for Cron Tab Scheduling
     * @param string $ExecutionStartTime Execution Time Left Closed Interval, format: HH:mm. Applicable only to hourly scheduling. For example, for hourly tasks, it specifies the effective interval every day
     * @param string $ExecutionEndTime Execution Time Right Closed Interval, format: HH:mm. Applicable only to hourly scheduling. For example, for hourly tasks, it specifies the effective interval every day
     * @param string $DependencyWorkflow Workflow Dependency, yes or no
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("DelayTime",$param) and $param["DelayTime"] !== null) {
            $this->DelayTime = $param["DelayTime"];
        }

        if (array_key_exists("StartupTime",$param) and $param["StartupTime"] !== null) {
            $this->StartupTime = $param["StartupTime"];
        }

        if (array_key_exists("SelfDepend",$param) and $param["SelfDepend"] !== null) {
            $this->SelfDepend = $param["SelfDepend"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("CycleStep",$param) and $param["CycleStep"] !== null) {
            $this->CycleStep = $param["CycleStep"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TaskAction",$param) and $param["TaskAction"] !== null) {
            $this->TaskAction = $param["TaskAction"];
        }

        if (array_key_exists("CrontabExpression",$param) and $param["CrontabExpression"] !== null) {
            $this->CrontabExpression = $param["CrontabExpression"];
        }

        if (array_key_exists("ExecutionStartTime",$param) and $param["ExecutionStartTime"] !== null) {
            $this->ExecutionStartTime = $param["ExecutionStartTime"];
        }

        if (array_key_exists("ExecutionEndTime",$param) and $param["ExecutionEndTime"] !== null) {
            $this->ExecutionEndTime = $param["ExecutionEndTime"];
        }

        if (array_key_exists("DependencyWorkflow",$param) and $param["DependencyWorkflow"] !== null) {
            $this->DependencyWorkflow = $param["DependencyWorkflow"];
        }
    }
}
