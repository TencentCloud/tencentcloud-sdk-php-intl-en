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
 * RenewWorkflowSchedulerInfoDs request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getWorkflowId() Obtain Workflow ID
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID
 * @method integer getDelayTime() Obtain Delay Time
 * @method void setDelayTime(integer $DelayTime) Set Delay Time
 * @method integer getStartupTime() Obtain Start Time
 * @method void setStartupTime(integer $StartupTime) Set Start Time
 * @method string getSelfDepend() Obtain Task Dependency
 * @method void setSelfDepend(string $SelfDepend) Set Task Dependency
 * @method string getStartTime() Obtain Start Time
 * @method void setStartTime(string $StartTime) Set Start Time
 * @method string getEndTime() Obtain End Time
 * @method void setEndTime(string $EndTime) Set End Time
 * @method string getTaskAction() Obtain Specified Running Time
 * @method void setTaskAction(string $TaskAction) Set Specified Running Time
 * @method string getCycleType() Obtain Scheduling Cycle Time Unit
 * @method void setCycleType(string $CycleType) Set Scheduling Cycle Time Unit
 * @method integer getCycleStep() Obtain Scheduling Cycle
 * @method void setCycleStep(integer $CycleStep) Set Scheduling Cycle
 * @method string getExecutionStartTime() Obtain Execution Time Left Closed Interval
 * @method void setExecutionStartTime(string $ExecutionStartTime) Set Execution Time Left Closed Interval
 * @method string getExecutionEndTime() Obtain Execution Time Right Closed Interval
 * @method void setExecutionEndTime(string $ExecutionEndTime) Set Execution Time Right Closed Interval
 * @method string getInstanceInitStrategy() Obtain Task initialization strategy. valid values: T_PLUS_1, T_PLUS_0, T_MINUS_1
 * @method void setInstanceInitStrategy(string $InstanceInitStrategy) Set Task initialization strategy. valid values: T_PLUS_1, T_PLUS_0, T_MINUS_1
 * @method string getDependencyWorkflow() Obtain Workflow dependency. valid values: yes or no
 * @method void setDependencyWorkflow(string $DependencyWorkflow) Set Workflow dependency. valid values: yes or no
 * @method string getCrontabExpression() Obtain CrontabExpression
 * @method void setCrontabExpression(string $CrontabExpression) Set CrontabExpression
 * @method string getModifyCycleValue() Obtain 0: Do not modify 
1: Change the upstream dependency configuration of the task to the default value
 * @method void setModifyCycleValue(string $ModifyCycleValue) Set 0: Do not modify 
1: Change the upstream dependency configuration of the task to the default value
 * @method string getCalendarOpen() Obtain Whether calendar scheduling is enabled. 1 means enabled, and 0 means disabled.
 * @method void setCalendarOpen(string $CalendarOpen) Set Whether calendar scheduling is enabled. 1 means enabled, and 0 means disabled.
 * @method string getCalendarName() Obtain Calendar name.
 * @method void setCalendarName(string $CalendarName) Set Calendar name.
 * @method string getCalendarId() Obtain Calendar id.
 * @method void setCalendarId(string $CalendarId) Set Calendar id.
 * @method string getScheduleTimeZone() Obtain Specifies the time zone.
 * @method void setScheduleTimeZone(string $ScheduleTimeZone) Set Specifies the time zone.
 * @method boolean getClearLink() Obtain Whether to automatically clean up links to unsupported tasks.
 * @method void setClearLink(boolean $ClearLink) Set Whether to automatically clean up links to unsupported tasks.
 */
class RenewWorkflowSchedulerInfoDsRequest extends AbstractModel
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
     * @var integer Delay Time
     */
    public $DelayTime;

    /**
     * @var integer Start Time
     */
    public $StartupTime;

    /**
     * @var string Task Dependency
     */
    public $SelfDepend;

    /**
     * @var string Start Time
     */
    public $StartTime;

    /**
     * @var string End Time
     */
    public $EndTime;

    /**
     * @var string Specified Running Time
     */
    public $TaskAction;

    /**
     * @var string Scheduling Cycle Time Unit
     */
    public $CycleType;

    /**
     * @var integer Scheduling Cycle
     */
    public $CycleStep;

    /**
     * @var string Execution Time Left Closed Interval
     */
    public $ExecutionStartTime;

    /**
     * @var string Execution Time Right Closed Interval
     */
    public $ExecutionEndTime;

    /**
     * @var string Task initialization strategy. valid values: T_PLUS_1, T_PLUS_0, T_MINUS_1
     */
    public $InstanceInitStrategy;

    /**
     * @var string Workflow dependency. valid values: yes or no
     */
    public $DependencyWorkflow;

    /**
     * @var string CrontabExpression
     */
    public $CrontabExpression;

    /**
     * @var string 0: Do not modify 
1: Change the upstream dependency configuration of the task to the default value
     */
    public $ModifyCycleValue;

    /**
     * @var string Whether calendar scheduling is enabled. 1 means enabled, and 0 means disabled.
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
     * @var string Specifies the time zone.
     */
    public $ScheduleTimeZone;

    /**
     * @var boolean Whether to automatically clean up links to unsupported tasks.
     */
    public $ClearLink;

    /**
     * @param string $ProjectId Project ID
     * @param string $WorkflowId Workflow ID
     * @param integer $DelayTime Delay Time
     * @param integer $StartupTime Start Time
     * @param string $SelfDepend Task Dependency
     * @param string $StartTime Start Time
     * @param string $EndTime End Time
     * @param string $TaskAction Specified Running Time
     * @param string $CycleType Scheduling Cycle Time Unit
     * @param integer $CycleStep Scheduling Cycle
     * @param string $ExecutionStartTime Execution Time Left Closed Interval
     * @param string $ExecutionEndTime Execution Time Right Closed Interval
     * @param string $InstanceInitStrategy Task initialization strategy. valid values: T_PLUS_1, T_PLUS_0, T_MINUS_1
     * @param string $DependencyWorkflow Workflow dependency. valid values: yes or no
     * @param string $CrontabExpression CrontabExpression
     * @param string $ModifyCycleValue 0: Do not modify 
1: Change the upstream dependency configuration of the task to the default value
     * @param string $CalendarOpen Whether calendar scheduling is enabled. 1 means enabled, and 0 means disabled.
     * @param string $CalendarName Calendar name.
     * @param string $CalendarId Calendar id.
     * @param string $ScheduleTimeZone Specifies the time zone.
     * @param boolean $ClearLink Whether to automatically clean up links to unsupported tasks.
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TaskAction",$param) and $param["TaskAction"] !== null) {
            $this->TaskAction = $param["TaskAction"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("CycleStep",$param) and $param["CycleStep"] !== null) {
            $this->CycleStep = $param["CycleStep"];
        }

        if (array_key_exists("ExecutionStartTime",$param) and $param["ExecutionStartTime"] !== null) {
            $this->ExecutionStartTime = $param["ExecutionStartTime"];
        }

        if (array_key_exists("ExecutionEndTime",$param) and $param["ExecutionEndTime"] !== null) {
            $this->ExecutionEndTime = $param["ExecutionEndTime"];
        }

        if (array_key_exists("InstanceInitStrategy",$param) and $param["InstanceInitStrategy"] !== null) {
            $this->InstanceInitStrategy = $param["InstanceInitStrategy"];
        }

        if (array_key_exists("DependencyWorkflow",$param) and $param["DependencyWorkflow"] !== null) {
            $this->DependencyWorkflow = $param["DependencyWorkflow"];
        }

        if (array_key_exists("CrontabExpression",$param) and $param["CrontabExpression"] !== null) {
            $this->CrontabExpression = $param["CrontabExpression"];
        }

        if (array_key_exists("ModifyCycleValue",$param) and $param["ModifyCycleValue"] !== null) {
            $this->ModifyCycleValue = $param["ModifyCycleValue"];
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

        if (array_key_exists("ScheduleTimeZone",$param) and $param["ScheduleTimeZone"] !== null) {
            $this->ScheduleTimeZone = $param["ScheduleTimeZone"];
        }

        if (array_key_exists("ClearLink",$param) and $param["ClearLink"] !== null) {
            $this->ClearLink = $param["ClearLink"];
        }
    }
}
