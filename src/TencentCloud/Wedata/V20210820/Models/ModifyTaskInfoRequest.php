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
 * ModifyTaskInfo request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getTaskId() Obtain Task ID
 * @method void setTaskId(string $TaskId) Set Task ID
 * @method integer getDelayTime() Obtain Execution time, in minutes, applicable to daily/weekly/monthly/yearly scheduling. For example, with daily scheduling, executing once at 02:00 AM every day, delayTime is 120 minutes
 * @method void setDelayTime(integer $DelayTime) Set Execution time, in minutes, applicable to daily/weekly/monthly/yearly scheduling. For example, with daily scheduling, executing once at 02:00 AM every day, delayTime is 120 minutes
 * @method integer getStartupTime() Obtain Start Time
 * @method void setStartupTime(integer $StartupTime) Set Start Time
 * @method integer getSelfDepend() Obtain Self-Dependency Type  1: Sequential serial, one at a time, queued, 2: Unordered serial, one at a time, not queued, 3: Parallel, multiple at once
 * @method void setSelfDepend(integer $SelfDepend) Set Self-Dependency Type  1: Sequential serial, one at a time, queued, 2: Unordered serial, one at a time, not queued, 3: Parallel, multiple at once
 * @method string getStartTime() Obtain Effective Start Time, format yyyy-MM-dd HH:mm:ss
 * @method void setStartTime(string $StartTime) Set Effective Start Time, format yyyy-MM-dd HH:mm:ss
 * @method string getEndTime() Obtain Effective End Time, format yyyy-MM-dd HH:mm:ss
 * @method void setEndTime(string $EndTime) Set Effective End Time, format yyyy-MM-dd HH:mm:ss
 * @method string getTaskAction() Obtain Scheduling Configuration - Elastic Cycle Configuration, applicable to Hourly/Weekly/Monthly/Yearly schedules. For hourly tasks scheduled at 0, 3, 4 o'clock, it would be '0,3,4'.
 * @method void setTaskAction(string $TaskAction) Set Scheduling Configuration - Elastic Cycle Configuration, applicable to Hourly/Weekly/Monthly/Yearly schedules. For hourly tasks scheduled at 0, 3, 4 o'clock, it would be '0,3,4'.
 * @method integer getCycleType() Obtain "Cycle Type  0:crontab, 1:Minute,2:Hour,3:Day,4:Week,5:Month,6:One-time,7:User driven,10:Flexible cycle Week,11:Flexible cycle Month,12:Year,13:Immediate Trigger Instant type, isolated from normal cycle scheduling task logic
 * @method void setCycleType(integer $CycleType) Set "Cycle Type  0:crontab, 1:Minute,2:Hour,3:Day,4:Week,5:Month,6:One-time,7:User driven,10:Flexible cycle Week,11:Flexible cycle Month,12:Year,13:Immediate Trigger Instant type, isolated from normal cycle scheduling task logic
 * @method integer getCycleStep() Obtain Step Length, Interval Time, minimum of 1
 * @method void setCycleStep(integer $CycleStep) Set Step Length, Interval Time, minimum of 1
 * @method string getCrontabExpression() Obtain Cron Expression is required only for Cron Tab Scheduling
 * @method void setCrontabExpression(string $CrontabExpression) Set Cron Expression is required only for Cron Tab Scheduling
 * @method string getExecutionStartTime() Obtain Execution Time Left Closed Interval, format: HH:mm. Applicable only to hourly scheduling. For example, for hourly tasks, it specifies the effective interval every day
 * @method void setExecutionStartTime(string $ExecutionStartTime) Set Execution Time Left Closed Interval, format: HH:mm. Applicable only to hourly scheduling. For example, for hourly tasks, it specifies the effective interval every day
 * @method string getExecutionEndTime() Obtain Execution Time Right Closed Interval, format: HH:mm. Applicable only to hourly scheduling. For example, for hourly tasks, it specifies the effective interval every day
 * @method void setExecutionEndTime(string $ExecutionEndTime) Set Execution Time Right Closed Interval, format: HH:mm. Applicable only to hourly scheduling. For example, for hourly tasks, it specifies the effective interval every day
 * @method string getTaskName() Obtain New Task Name
 * @method void setTaskName(string $TaskName) Set New Task Name
 * @method integer getRetryWait() Obtain Failure Retry Interval, in minutes, a default value has already been provided during task creation
 * @method void setRetryWait(integer $RetryWait) Set Failure Retry Interval, in minutes, a default value has already been provided during task creation
 * @method integer getTryLimit() Obtain Number of Retry Attempts on Failure, a default value has already been provided during task creation
 * @method void setTryLimit(integer $TryLimit) Set Number of Retry Attempts on Failure, a default value has already been provided during task creation
 * @method integer getRetriable() Obtain Whether to Retry, 1 for yes
 * @method void setRetriable(integer $Retriable) Set Whether to Retry, 1 for yes
 * @method integer getRunPriority() Obtain Running Priority, 4 for High, 5 for Medium, 6 for Low
 * @method void setRunPriority(integer $RunPriority) Set Running Priority, 4 for High, 5 for Medium, 6 for Low
 * @method array getTaskExt() Obtain Extended Task Configuration
 * @method void setTaskExt(array $TaskExt) Set Extended Task Configuration
 * @method string getResourceGroup() Obtain Execution Resource Group ID, needs to be created on the Resource Management Service and bind to a CVM machine
 * @method void setResourceGroup(string $ResourceGroup) Set Execution Resource Group ID, needs to be created on the Resource Management Service and bind to a CVM machine
 * @method string getYarnQueue() Obtain Resource Pool Queue Name
 * @method void setYarnQueue(string $YarnQueue) Set Resource Pool Queue Name
 * @method string getBrokerIp() Obtain Specific Execution Machine under Resource Group, 'any' means it can run on any machine.
 * @method void setBrokerIp(string $BrokerIp) Set Specific Execution Machine under Resource Group, 'any' means it can run on any machine.
 * @method string getInCharge() Obtain Person in Charge
 * @method void setInCharge(string $InCharge) Set Person in Charge
 * @method string getNotes() Obtain Task notes
 * @method void setNotes(string $Notes) Set Task notes
 * @method array getTaskParamInfos() Obtain Task Parameters
 * @method void setTaskParamInfos(array $TaskParamInfos) Set Task Parameters
 * @method string getSourceServer() Obtain Source Data Source
 * @method void setSourceServer(string $SourceServer) Set Source Data Source
 * @method string getTargetServer() Obtain Target Data Source
 * @method void setTargetServer(string $TargetServer) Set Target Data Source
 * @method string getDependencyWorkflow() Obtain Supports Workflow Dependencies yes/no, default no
 * @method void setDependencyWorkflow(string $DependencyWorkflow) Set Supports Workflow Dependencies yes/no, default no
 * @method array getDependencyConfigDTOs() Obtain Dependency Configuration
 * @method void setDependencyConfigDTOs(array $DependencyConfigDTOs) Set Dependency Configuration
 * @method integer getExecutionTTL() Obtain Execution Duration
 * @method void setExecutionTTL(integer $ExecutionTTL) Set Execution Duration
 * @method boolean getScriptChange() Obtain Whether the Script has Changed
 * @method void setScriptChange(boolean $ScriptChange) Set Whether the Script has Changed
 * @method array getInChargeIds() Obtain Responsible Person ID
 * @method void setInChargeIds(array $InChargeIds) Set Responsible Person ID
 */
class ModifyTaskInfoRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Task ID
     */
    public $TaskId;

    /**
     * @var integer Execution time, in minutes, applicable to daily/weekly/monthly/yearly scheduling. For example, with daily scheduling, executing once at 02:00 AM every day, delayTime is 120 minutes
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
     * @var integer "Cycle Type  0:crontab, 1:Minute,2:Hour,3:Day,4:Week,5:Month,6:One-time,7:User driven,10:Flexible cycle Week,11:Flexible cycle Month,12:Year,13:Immediate Trigger Instant type, isolated from normal cycle scheduling task logic
     */
    public $CycleType;

    /**
     * @var integer Step Length, Interval Time, minimum of 1
     */
    public $CycleStep;

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
     * @var string New Task Name
     */
    public $TaskName;

    /**
     * @var integer Failure Retry Interval, in minutes, a default value has already been provided during task creation
     */
    public $RetryWait;

    /**
     * @var integer Number of Retry Attempts on Failure, a default value has already been provided during task creation
     */
    public $TryLimit;

    /**
     * @var integer Whether to Retry, 1 for yes
     */
    public $Retriable;

    /**
     * @var integer Running Priority, 4 for High, 5 for Medium, 6 for Low
     */
    public $RunPriority;

    /**
     * @var array Extended Task Configuration
     */
    public $TaskExt;

    /**
     * @var string Execution Resource Group ID, needs to be created on the Resource Management Service and bind to a CVM machine
     */
    public $ResourceGroup;

    /**
     * @var string Resource Pool Queue Name
     */
    public $YarnQueue;

    /**
     * @var string Specific Execution Machine under Resource Group, 'any' means it can run on any machine.
     */
    public $BrokerIp;

    /**
     * @var string Person in Charge
     * @deprecated
     */
    public $InCharge;

    /**
     * @var string Task notes
     */
    public $Notes;

    /**
     * @var array Task Parameters
     */
    public $TaskParamInfos;

    /**
     * @var string Source Data Source
     */
    public $SourceServer;

    /**
     * @var string Target Data Source
     */
    public $TargetServer;

    /**
     * @var string Supports Workflow Dependencies yes/no, default no
     */
    public $DependencyWorkflow;

    /**
     * @var array Dependency Configuration
     */
    public $DependencyConfigDTOs;

    /**
     * @var integer Execution Duration
     */
    public $ExecutionTTL;

    /**
     * @var boolean Whether the Script has Changed
     */
    public $ScriptChange;

    /**
     * @var array Responsible Person ID
     */
    public $InChargeIds;

    /**
     * @param string $ProjectId Project ID
     * @param string $TaskId Task ID
     * @param integer $DelayTime Execution time, in minutes, applicable to daily/weekly/monthly/yearly scheduling. For example, with daily scheduling, executing once at 02:00 AM every day, delayTime is 120 minutes
     * @param integer $StartupTime Start Time
     * @param integer $SelfDepend Self-Dependency Type  1: Sequential serial, one at a time, queued, 2: Unordered serial, one at a time, not queued, 3: Parallel, multiple at once
     * @param string $StartTime Effective Start Time, format yyyy-MM-dd HH:mm:ss
     * @param string $EndTime Effective End Time, format yyyy-MM-dd HH:mm:ss
     * @param string $TaskAction Scheduling Configuration - Elastic Cycle Configuration, applicable to Hourly/Weekly/Monthly/Yearly schedules. For hourly tasks scheduled at 0, 3, 4 o'clock, it would be '0,3,4'.
     * @param integer $CycleType "Cycle Type  0:crontab, 1:Minute,2:Hour,3:Day,4:Week,5:Month,6:One-time,7:User driven,10:Flexible cycle Week,11:Flexible cycle Month,12:Year,13:Immediate Trigger Instant type, isolated from normal cycle scheduling task logic
     * @param integer $CycleStep Step Length, Interval Time, minimum of 1
     * @param string $CrontabExpression Cron Expression is required only for Cron Tab Scheduling
     * @param string $ExecutionStartTime Execution Time Left Closed Interval, format: HH:mm. Applicable only to hourly scheduling. For example, for hourly tasks, it specifies the effective interval every day
     * @param string $ExecutionEndTime Execution Time Right Closed Interval, format: HH:mm. Applicable only to hourly scheduling. For example, for hourly tasks, it specifies the effective interval every day
     * @param string $TaskName New Task Name
     * @param integer $RetryWait Failure Retry Interval, in minutes, a default value has already been provided during task creation
     * @param integer $TryLimit Number of Retry Attempts on Failure, a default value has already been provided during task creation
     * @param integer $Retriable Whether to Retry, 1 for yes
     * @param integer $RunPriority Running Priority, 4 for High, 5 for Medium, 6 for Low
     * @param array $TaskExt Extended Task Configuration
     * @param string $ResourceGroup Execution Resource Group ID, needs to be created on the Resource Management Service and bind to a CVM machine
     * @param string $YarnQueue Resource Pool Queue Name
     * @param string $BrokerIp Specific Execution Machine under Resource Group, 'any' means it can run on any machine.
     * @param string $InCharge Person in Charge
     * @param string $Notes Task notes
     * @param array $TaskParamInfos Task Parameters
     * @param string $SourceServer Source Data Source
     * @param string $TargetServer Target Data Source
     * @param string $DependencyWorkflow Supports Workflow Dependencies yes/no, default no
     * @param array $DependencyConfigDTOs Dependency Configuration
     * @param integer $ExecutionTTL Execution Duration
     * @param boolean $ScriptChange Whether the Script has Changed
     * @param array $InChargeIds Responsible Person ID
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

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
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

        if (array_key_exists("CrontabExpression",$param) and $param["CrontabExpression"] !== null) {
            $this->CrontabExpression = $param["CrontabExpression"];
        }

        if (array_key_exists("ExecutionStartTime",$param) and $param["ExecutionStartTime"] !== null) {
            $this->ExecutionStartTime = $param["ExecutionStartTime"];
        }

        if (array_key_exists("ExecutionEndTime",$param) and $param["ExecutionEndTime"] !== null) {
            $this->ExecutionEndTime = $param["ExecutionEndTime"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("RetryWait",$param) and $param["RetryWait"] !== null) {
            $this->RetryWait = $param["RetryWait"];
        }

        if (array_key_exists("TryLimit",$param) and $param["TryLimit"] !== null) {
            $this->TryLimit = $param["TryLimit"];
        }

        if (array_key_exists("Retriable",$param) and $param["Retriable"] !== null) {
            $this->Retriable = $param["Retriable"];
        }

        if (array_key_exists("RunPriority",$param) and $param["RunPriority"] !== null) {
            $this->RunPriority = $param["RunPriority"];
        }

        if (array_key_exists("TaskExt",$param) and $param["TaskExt"] !== null) {
            $this->TaskExt = [];
            foreach ($param["TaskExt"] as $key => $value){
                $obj = new TaskExtInfo();
                $obj->deserialize($value);
                array_push($this->TaskExt, $obj);
            }
        }

        if (array_key_exists("ResourceGroup",$param) and $param["ResourceGroup"] !== null) {
            $this->ResourceGroup = $param["ResourceGroup"];
        }

        if (array_key_exists("YarnQueue",$param) and $param["YarnQueue"] !== null) {
            $this->YarnQueue = $param["YarnQueue"];
        }

        if (array_key_exists("BrokerIp",$param) and $param["BrokerIp"] !== null) {
            $this->BrokerIp = $param["BrokerIp"];
        }

        if (array_key_exists("InCharge",$param) and $param["InCharge"] !== null) {
            $this->InCharge = $param["InCharge"];
        }

        if (array_key_exists("Notes",$param) and $param["Notes"] !== null) {
            $this->Notes = $param["Notes"];
        }

        if (array_key_exists("TaskParamInfos",$param) and $param["TaskParamInfos"] !== null) {
            $this->TaskParamInfos = [];
            foreach ($param["TaskParamInfos"] as $key => $value){
                $obj = new ParamInfo();
                $obj->deserialize($value);
                array_push($this->TaskParamInfos, $obj);
            }
        }

        if (array_key_exists("SourceServer",$param) and $param["SourceServer"] !== null) {
            $this->SourceServer = $param["SourceServer"];
        }

        if (array_key_exists("TargetServer",$param) and $param["TargetServer"] !== null) {
            $this->TargetServer = $param["TargetServer"];
        }

        if (array_key_exists("DependencyWorkflow",$param) and $param["DependencyWorkflow"] !== null) {
            $this->DependencyWorkflow = $param["DependencyWorkflow"];
        }

        if (array_key_exists("DependencyConfigDTOs",$param) and $param["DependencyConfigDTOs"] !== null) {
            $this->DependencyConfigDTOs = [];
            foreach ($param["DependencyConfigDTOs"] as $key => $value){
                $obj = new DependencyConfig();
                $obj->deserialize($value);
                array_push($this->DependencyConfigDTOs, $obj);
            }
        }

        if (array_key_exists("ExecutionTTL",$param) and $param["ExecutionTTL"] !== null) {
            $this->ExecutionTTL = $param["ExecutionTTL"];
        }

        if (array_key_exists("ScriptChange",$param) and $param["ScriptChange"] !== null) {
            $this->ScriptChange = $param["ScriptChange"];
        }

        if (array_key_exists("InChargeIds",$param) and $param["InChargeIds"] !== null) {
            $this->InChargeIds = $param["InChargeIds"];
        }
    }
}
