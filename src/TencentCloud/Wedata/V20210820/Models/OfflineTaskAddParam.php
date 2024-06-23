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
 * New Parameter for Offline Task
 *
 * @method string getWorkflowName() Obtain Name
 * @method void setWorkflowName(string $WorkflowName) Set Name
 * @method string getDependencyWorkflow() Obtain Dependencies: yes, no
 * @method void setDependencyWorkflow(string $DependencyWorkflow) Set Dependencies: yes, no
 * @method string getStartTime() Obtain Task Start Data Time. Not Empty. Default to Current Time
 * @method void setStartTime(string $StartTime) Set Task Start Data Time. Not Empty. Default to Current Time
 * @method string getEndTime() Obtain Task End Data Time. Not Empty. Default to Current Time
 * @method void setEndTime(string $EndTime) Set Task End Data Time. Not Empty. Default to Current Time
 * @method integer getCycleType() Obtain Cycle Type. One-time task: 6, Minute Task: 1, Hourly task: 2, Daily Task: 3, Weekly Task: 4, Monthly Task: 5, Cron task: 0
 * @method void setCycleType(integer $CycleType) Set Cycle Type. One-time task: 6, Minute Task: 1, Hourly task: 2, Daily Task: 3, Weekly Task: 4, Monthly Task: 5, Cron task: 0
 * @method integer getCycleStep() Obtain Interval, optional, default is 1. Not null. Default is 1
 * @method void setCycleStep(integer $CycleStep) Set Interval, optional, default is 1. Not null. Default is 1
 * @method integer getDelayTime() Obtain Delayed Execution Time, in minutes
 * @method void setDelayTime(integer $DelayTime) Set Delayed Execution Time, in minutes
 * @method string getCrontabExpression() Obtain Task cron expression, used only for cron tasks, else defaults to empty
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCrontabExpression(string $CrontabExpression) Set Task cron expression, used only for cron tasks, else defaults to empty
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getRetryWait() Obtain Retry Wait
 * @method void setRetryWait(integer $RetryWait) Set Retry Wait
 * @method integer getRetriable() Obtain Is Retry Allowed
 * @method void setRetriable(integer $Retriable) Set Is Retry Allowed
 * @method integer getTryLimit() Obtain Retry Limit
 * @method void setTryLimit(integer $TryLimit) Set Retry Limit
 * @method integer getRunPriority() Obtain Priority
 * @method void setRunPriority(integer $RunPriority) Set Priority
 * @method string getProductName() Obtain Product
 * @method void setProductName(string $ProductName) Set Product
 * @method integer getSelfDepend() Obtain 1 Ordered Serialization, one at a time, queued orderly
2 Unordered Serial, one at a time, not queued serial
3 Parallel, multiple at a time parallel
 * @method void setSelfDepend(integer $SelfDepend) Set 1 Ordered Serialization, one at a time, queued orderly
2 Unordered Serial, one at a time, not queued serial
3 Parallel, multiple at a time parallel
 * @method string getTaskAction() Obtain Time Specification, such as 1,3 for monthly tasks, enter 1,3. Not empty. Default ""
Monthly Task: for specific days like "1,3", specifying end of month as "L" alone, cannot be mixed with specific dates
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskAction(string $TaskAction) Set Time Specification, such as 1,3 for monthly tasks, enter 1,3. Not empty. Default ""
Monthly Task: for specific days like "1,3", specifying end of month as "L" alone, cannot be mixed with specific dates
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getExecutionEndTime() Obtain Scheduled Execution End Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setExecutionEndTime(string $ExecutionEndTime) Set Scheduled Execution End Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getExecutionStartTime() Obtain Scheduled Execution Start Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setExecutionStartTime(string $ExecutionStartTime) Set Scheduled Execution Start Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method boolean getTaskAutoSubmit() Obtain Is Auto-submit
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskAutoSubmit(boolean $TaskAutoSubmit) Set Is Auto-submit
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getInstanceInitStrategy() Obtain Instance Generation Method, T_PLUS_0 schedule task on the same day / T_PLUS_1 schedule task the next day
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInstanceInitStrategy(string $InstanceInitStrategy) Set Instance Generation Method, T_PLUS_0 schedule task on the same day / T_PLUS_1 schedule task the next day
Note: This field may return null, indicating that no valid value can be obtained.
 */
class OfflineTaskAddParam extends AbstractModel
{
    /**
     * @var string Name
     */
    public $WorkflowName;

    /**
     * @var string Dependencies: yes, no
     */
    public $DependencyWorkflow;

    /**
     * @var string Task Start Data Time. Not Empty. Default to Current Time
     */
    public $StartTime;

    /**
     * @var string Task End Data Time. Not Empty. Default to Current Time
     */
    public $EndTime;

    /**
     * @var integer Cycle Type. One-time task: 6, Minute Task: 1, Hourly task: 2, Daily Task: 3, Weekly Task: 4, Monthly Task: 5, Cron task: 0
     */
    public $CycleType;

    /**
     * @var integer Interval, optional, default is 1. Not null. Default is 1
     */
    public $CycleStep;

    /**
     * @var integer Delayed Execution Time, in minutes
     */
    public $DelayTime;

    /**
     * @var string Task cron expression, used only for cron tasks, else defaults to empty
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CrontabExpression;

    /**
     * @var integer Retry Wait
     */
    public $RetryWait;

    /**
     * @var integer Is Retry Allowed
     */
    public $Retriable;

    /**
     * @var integer Retry Limit
     */
    public $TryLimit;

    /**
     * @var integer Priority
     */
    public $RunPriority;

    /**
     * @var string Product
     */
    public $ProductName;

    /**
     * @var integer 1 Ordered Serialization, one at a time, queued orderly
2 Unordered Serial, one at a time, not queued serial
3 Parallel, multiple at a time parallel
     */
    public $SelfDepend;

    /**
     * @var string Time Specification, such as 1,3 for monthly tasks, enter 1,3. Not empty. Default ""
Monthly Task: for specific days like "1,3", specifying end of month as "L" alone, cannot be mixed with specific dates
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskAction;

    /**
     * @var string Scheduled Execution End Time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExecutionEndTime;

    /**
     * @var string Scheduled Execution Start Time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExecutionStartTime;

    /**
     * @var boolean Is Auto-submit
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskAutoSubmit;

    /**
     * @var string Instance Generation Method, T_PLUS_0 schedule task on the same day / T_PLUS_1 schedule task the next day
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InstanceInitStrategy;

    /**
     * @param string $WorkflowName Name
     * @param string $DependencyWorkflow Dependencies: yes, no
     * @param string $StartTime Task Start Data Time. Not Empty. Default to Current Time
     * @param string $EndTime Task End Data Time. Not Empty. Default to Current Time
     * @param integer $CycleType Cycle Type. One-time task: 6, Minute Task: 1, Hourly task: 2, Daily Task: 3, Weekly Task: 4, Monthly Task: 5, Cron task: 0
     * @param integer $CycleStep Interval, optional, default is 1. Not null. Default is 1
     * @param integer $DelayTime Delayed Execution Time, in minutes
     * @param string $CrontabExpression Task cron expression, used only for cron tasks, else defaults to empty
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $RetryWait Retry Wait
     * @param integer $Retriable Is Retry Allowed
     * @param integer $TryLimit Retry Limit
     * @param integer $RunPriority Priority
     * @param string $ProductName Product
     * @param integer $SelfDepend 1 Ordered Serialization, one at a time, queued orderly
2 Unordered Serial, one at a time, not queued serial
3 Parallel, multiple at a time parallel
     * @param string $TaskAction Time Specification, such as 1,3 for monthly tasks, enter 1,3. Not empty. Default ""
Monthly Task: for specific days like "1,3", specifying end of month as "L" alone, cannot be mixed with specific dates
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ExecutionEndTime Scheduled Execution End Time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ExecutionStartTime Scheduled Execution Start Time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param boolean $TaskAutoSubmit Is Auto-submit
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $InstanceInitStrategy Instance Generation Method, T_PLUS_0 schedule task on the same day / T_PLUS_1 schedule task the next day
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
        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("DependencyWorkflow",$param) and $param["DependencyWorkflow"] !== null) {
            $this->DependencyWorkflow = $param["DependencyWorkflow"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("CycleStep",$param) and $param["CycleStep"] !== null) {
            $this->CycleStep = $param["CycleStep"];
        }

        if (array_key_exists("DelayTime",$param) and $param["DelayTime"] !== null) {
            $this->DelayTime = $param["DelayTime"];
        }

        if (array_key_exists("CrontabExpression",$param) and $param["CrontabExpression"] !== null) {
            $this->CrontabExpression = $param["CrontabExpression"];
        }

        if (array_key_exists("RetryWait",$param) and $param["RetryWait"] !== null) {
            $this->RetryWait = $param["RetryWait"];
        }

        if (array_key_exists("Retriable",$param) and $param["Retriable"] !== null) {
            $this->Retriable = $param["Retriable"];
        }

        if (array_key_exists("TryLimit",$param) and $param["TryLimit"] !== null) {
            $this->TryLimit = $param["TryLimit"];
        }

        if (array_key_exists("RunPriority",$param) and $param["RunPriority"] !== null) {
            $this->RunPriority = $param["RunPriority"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("SelfDepend",$param) and $param["SelfDepend"] !== null) {
            $this->SelfDepend = $param["SelfDepend"];
        }

        if (array_key_exists("TaskAction",$param) and $param["TaskAction"] !== null) {
            $this->TaskAction = $param["TaskAction"];
        }

        if (array_key_exists("ExecutionEndTime",$param) and $param["ExecutionEndTime"] !== null) {
            $this->ExecutionEndTime = $param["ExecutionEndTime"];
        }

        if (array_key_exists("ExecutionStartTime",$param) and $param["ExecutionStartTime"] !== null) {
            $this->ExecutionStartTime = $param["ExecutionStartTime"];
        }

        if (array_key_exists("TaskAutoSubmit",$param) and $param["TaskAutoSubmit"] !== null) {
            $this->TaskAutoSubmit = $param["TaskAutoSubmit"];
        }

        if (array_key_exists("InstanceInitStrategy",$param) and $param["InstanceInitStrategy"] !== null) {
            $this->InstanceInitStrategy = $param["InstanceInitStrategy"];
        }
    }
}
