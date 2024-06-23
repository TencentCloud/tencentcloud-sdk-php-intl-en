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
 * Workflow Scheduling Details
 *
 * @method string getCreateTime() Obtain Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getCreator() Obtain CreatorNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreator(string $Creator) Set CreatorNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getModifyTime() Obtain Modification TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setModifyTime(string $ModifyTime) Set Modification TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getDelayTime() Obtain Latency, unit=minute
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDelayTime(integer $DelayTime) Set Latency, unit=minute
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getStartupTime() Obtain Start Time, unit=minute
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStartupTime(integer $StartupTime) Set Start Time, unit=minute
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getSelfDepend() Obtain Task Dependency Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSelfDepend(string $SelfDepend) Set Task Dependency Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getStartTime() Obtain Start TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setStartTime(string $StartTime) Set Start TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getEndTime() Obtain End timeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setEndTime(string $EndTime) Set End timeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getTaskAction() Obtain Specified Running Time, Specified Time: e.g., Monday:1
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskAction(string $TaskAction) Set Specified Running Time, Specified Time: e.g., Monday:1
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCycleType() Obtain Scheduling Cycle Type, Time Unit
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCycleType(string $CycleType) Set Scheduling Cycle Type, Time Unit
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getCycleStep() Obtain Scheduling Period, Interval Step unit=minute
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCycleStep(integer $CycleStep) Set Scheduling Period, Interval Step unit=minute
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCrontabExpression() Obtain Scheduling Cron Expression
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCrontabExpression(string $CrontabExpression) Set Scheduling Cron Expression
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getExecutionStartTime() Obtain Execution Time Left Closed Interval
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setExecutionStartTime(string $ExecutionStartTime) Set Execution Time Left Closed Interval
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getExecutionEndTime() Obtain Execution Time Right Closed Interval
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setExecutionEndTime(string $ExecutionEndTime) Set Execution Time Right Closed Interval
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getInstanceInitStrategy() Obtain Task Instance Initialization Strategy
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInstanceInitStrategy(string $InstanceInitStrategy) Set Task Instance Initialization Strategy
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getWorkflowId() Obtain Workflow IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setWorkflowId(string $WorkflowId) Set Workflow IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getDependencyWorkflow() Obtain Workflow Self-Dependency
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDependencyWorkflow(string $DependencyWorkflow) Set Workflow Self-Dependency
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getSchedulerDesc() Obtain Scheduling Plan Interpretation
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSchedulerDesc(string $SchedulerDesc) Set Scheduling Plan Interpretation
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getFirstSubmitTime() Obtain First Submission Time of Workflow
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFirstSubmitTime(string $FirstSubmitTime) Set First Submission Time of Workflow
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getLatestSubmitTime() Obtain Latest Submission Time of Workflow
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLatestSubmitTime(string $LatestSubmitTime) Set Latest Submission Time of Workflow
Note: This field may return null, indicating that no valid value can be obtained.
 */
class WorkflowSchedulerOpsDto extends AbstractModel
{
    /**
     * @var string Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $CreateTime;

    /**
     * @var string CreatorNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Creator;

    /**
     * @var string Modification TimeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ModifyTime;

    /**
     * @var integer Latency, unit=minute
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DelayTime;

    /**
     * @var integer Start Time, unit=minute
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $StartupTime;

    /**
     * @var string Task Dependency Type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SelfDepend;

    /**
     * @var string Start TimeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $StartTime;

    /**
     * @var string End timeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $EndTime;

    /**
     * @var string Specified Running Time, Specified Time: e.g., Monday:1
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskAction;

    /**
     * @var string Scheduling Cycle Type, Time Unit
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CycleType;

    /**
     * @var integer Scheduling Period, Interval Step unit=minute
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CycleStep;

    /**
     * @var string Scheduling Cron Expression
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CrontabExpression;

    /**
     * @var string Execution Time Left Closed Interval
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExecutionStartTime;

    /**
     * @var string Execution Time Right Closed Interval
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExecutionEndTime;

    /**
     * @var string Task Instance Initialization Strategy
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InstanceInitStrategy;

    /**
     * @var string Workflow IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $WorkflowId;

    /**
     * @var string Workflow Self-Dependency
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DependencyWorkflow;

    /**
     * @var string Scheduling Plan Interpretation
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SchedulerDesc;

    /**
     * @var string First Submission Time of Workflow
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $FirstSubmitTime;

    /**
     * @var string Latest Submission Time of Workflow
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $LatestSubmitTime;

    /**
     * @param string $CreateTime Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $Creator CreatorNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ModifyTime Modification TimeNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $DelayTime Latency, unit=minute
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $StartupTime Start Time, unit=minute
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $SelfDepend Task Dependency Type
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $StartTime Start TimeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $EndTime End timeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $TaskAction Specified Running Time, Specified Time: e.g., Monday:1
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CycleType Scheduling Cycle Type, Time Unit
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $CycleStep Scheduling Period, Interval Step unit=minute
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CrontabExpression Scheduling Cron Expression
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ExecutionStartTime Execution Time Left Closed Interval
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ExecutionEndTime Execution Time Right Closed Interval
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $InstanceInitStrategy Task Instance Initialization Strategy
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $WorkflowId Workflow IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $DependencyWorkflow Workflow Self-Dependency
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $SchedulerDesc Scheduling Plan Interpretation
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $FirstSubmitTime First Submission Time of Workflow
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $LatestSubmitTime Latest Submission Time of Workflow
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
        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
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

        if (array_key_exists("InstanceInitStrategy",$param) and $param["InstanceInitStrategy"] !== null) {
            $this->InstanceInitStrategy = $param["InstanceInitStrategy"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("DependencyWorkflow",$param) and $param["DependencyWorkflow"] !== null) {
            $this->DependencyWorkflow = $param["DependencyWorkflow"];
        }

        if (array_key_exists("SchedulerDesc",$param) and $param["SchedulerDesc"] !== null) {
            $this->SchedulerDesc = $param["SchedulerDesc"];
        }

        if (array_key_exists("FirstSubmitTime",$param) and $param["FirstSubmitTime"] !== null) {
            $this->FirstSubmitTime = $param["FirstSubmitTime"];
        }

        if (array_key_exists("LatestSubmitTime",$param) and $param["LatestSubmitTime"] !== null) {
            $this->LatestSubmitTime = $param["LatestSubmitTime"];
        }
    }
}
