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
 * Quality Rule Execution Strategy
 *
 * @method integer getRuleGroupId() Obtain Rule Group ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRuleGroupId(integer $RuleGroupId) Set Rule Group ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getMonitorType() Obtain Monitoring Type 1. Not configured, 2. Associated with production scheduling, 3. Offline cycle detection
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMonitorType(integer $MonitorType) Set Monitoring Type 1. Not configured, 2. Associated with production scheduling, 3. Offline cycle detection
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getExecQueue() Obtain Calculation Queue
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setExecQueue(string $ExecQueue) Set Calculation Queue
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getExecutorGroupId() Obtain Execution Resource Group ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setExecutorGroupId(string $ExecutorGroupId) Set Execution Resource Group ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getExecutorGroupName() Obtain Execution Resource Group Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setExecutorGroupName(string $ExecutorGroupName) Set Execution Resource Group Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getTasks() Obtain Associated Production Scheduling Task List
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTasks(array $Tasks) Set Associated Production Scheduling Task List
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getStartTime() Obtain Cycle Start Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStartTime(string $StartTime) Set Cycle Start Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getEndTime() Obtain Cycle End Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setEndTime(string $EndTime) Set Cycle End Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCycleType() Obtain Scheduling Cycle Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCycleType(string $CycleType) Set Scheduling Cycle Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getDelayTime() Obtain Delayed Scheduling Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDelayTime(integer $DelayTime) Set Delayed Scheduling Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getCycleStep() Obtain Interval
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCycleStep(integer $CycleStep) Set Interval
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTaskAction() Obtain Time Specification
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskAction(string $TaskAction) Set Time Specification
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getExecEngineType() Obtain Execution engine to run, if not provided, the default execution engine for this data source will be requested
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setExecEngineType(string $ExecEngineType) Set Execution engine to run, if not provided, the default execution engine for this data source will be requested
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getExecPlan() Obtain Execution planNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setExecPlan(string $ExecPlan) Set Execution planNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getRuleId() Obtain Rule ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRuleId(integer $RuleId) Set Rule ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getRuleName() Obtain Rule nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setRuleName(string $RuleName) Set Rule nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method array getTriggerTypes() Obtain Trigger Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTriggerTypes(array $TriggerTypes) Set Trigger Type
Note: This field may return null, indicating that no valid value can be obtained.
 */
class RuleGroupExecStrategy extends AbstractModel
{
    /**
     * @var integer Rule Group ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RuleGroupId;

    /**
     * @var integer Monitoring Type 1. Not configured, 2. Associated with production scheduling, 3. Offline cycle detection
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $MonitorType;

    /**
     * @var string Calculation Queue
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExecQueue;

    /**
     * @var string Execution Resource Group ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExecutorGroupId;

    /**
     * @var string Execution Resource Group Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExecutorGroupName;

    /**
     * @var array Associated Production Scheduling Task List
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Tasks;

    /**
     * @var string Cycle Start Time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $StartTime;

    /**
     * @var string Cycle End Time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $EndTime;

    /**
     * @var string Scheduling Cycle Type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CycleType;

    /**
     * @var integer Delayed Scheduling Time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DelayTime;

    /**
     * @var integer Interval
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CycleStep;

    /**
     * @var string Time Specification
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskAction;

    /**
     * @var string Execution engine to run, if not provided, the default execution engine for this data source will be requested
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExecEngineType;

    /**
     * @var string Execution planNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExecPlan;

    /**
     * @var integer Rule ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RuleId;

    /**
     * @var string Rule nameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $RuleName;

    /**
     * @var array Trigger Type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TriggerTypes;

    /**
     * @param integer $RuleGroupId Rule Group ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $MonitorType Monitoring Type 1. Not configured, 2. Associated with production scheduling, 3. Offline cycle detection
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ExecQueue Calculation Queue
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ExecutorGroupId Execution Resource Group ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ExecutorGroupName Execution Resource Group Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $Tasks Associated Production Scheduling Task List
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $StartTime Cycle Start Time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $EndTime Cycle End Time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CycleType Scheduling Cycle Type
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $DelayTime Delayed Scheduling Time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $CycleStep Interval
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TaskAction Time Specification
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ExecEngineType Execution engine to run, if not provided, the default execution engine for this data source will be requested
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ExecPlan Execution planNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $RuleId Rule ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $RuleName Rule nameNote: This field may return null, indicating that no valid value can be obtained.
     * @param array $TriggerTypes Trigger Type
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
        if (array_key_exists("RuleGroupId",$param) and $param["RuleGroupId"] !== null) {
            $this->RuleGroupId = $param["RuleGroupId"];
        }

        if (array_key_exists("MonitorType",$param) and $param["MonitorType"] !== null) {
            $this->MonitorType = $param["MonitorType"];
        }

        if (array_key_exists("ExecQueue",$param) and $param["ExecQueue"] !== null) {
            $this->ExecQueue = $param["ExecQueue"];
        }

        if (array_key_exists("ExecutorGroupId",$param) and $param["ExecutorGroupId"] !== null) {
            $this->ExecutorGroupId = $param["ExecutorGroupId"];
        }

        if (array_key_exists("ExecutorGroupName",$param) and $param["ExecutorGroupName"] !== null) {
            $this->ExecutorGroupName = $param["ExecutorGroupName"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new ProdSchedulerTask();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
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

        if (array_key_exists("DelayTime",$param) and $param["DelayTime"] !== null) {
            $this->DelayTime = $param["DelayTime"];
        }

        if (array_key_exists("CycleStep",$param) and $param["CycleStep"] !== null) {
            $this->CycleStep = $param["CycleStep"];
        }

        if (array_key_exists("TaskAction",$param) and $param["TaskAction"] !== null) {
            $this->TaskAction = $param["TaskAction"];
        }

        if (array_key_exists("ExecEngineType",$param) and $param["ExecEngineType"] !== null) {
            $this->ExecEngineType = $param["ExecEngineType"];
        }

        if (array_key_exists("ExecPlan",$param) and $param["ExecPlan"] !== null) {
            $this->ExecPlan = $param["ExecPlan"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("TriggerTypes",$param) and $param["TriggerTypes"] !== null) {
            $this->TriggerTypes = $param["TriggerTypes"];
        }
    }
}
