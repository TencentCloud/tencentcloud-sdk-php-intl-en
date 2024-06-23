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
 * ModifyExecStrategy request structure.
 *
 * @method integer getRuleGroupId() Obtain Rule Group ID
 * @method void setRuleGroupId(integer $RuleGroupId) Set Rule Group ID
 * @method integer getMonitorType() Obtain Monitoring Type 1. Not Configured, 2. Associated Production Scheduling, 3. Offline Cycle Detection
 * @method void setMonitorType(integer $MonitorType) Set Monitoring Type 1. Not Configured, 2. Associated Production Scheduling, 3. Offline Cycle Detection
 * @method string getExecQueue() Obtain Compute Queue
 * @method void setExecQueue(string $ExecQueue) Set Compute Queue
 * @method string getExecutorGroupId() Obtain Execution Resource Group ID
 * @method void setExecutorGroupId(string $ExecutorGroupId) Set Execution Resource Group ID
 * @method string getExecutorGroupName() Obtain Execution Resource Group Name
 * @method void setExecutorGroupName(string $ExecutorGroupName) Set Execution Resource Group Name
 * @method array getTasks() Obtain Associated Production Scheduling Task List
 * @method void setTasks(array $Tasks) Set Associated Production Scheduling Task List
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getStartTime() Obtain Offline Cycle Mode, Effective Date - Start Time
 * @method void setStartTime(string $StartTime) Set Offline Cycle Mode, Effective Date - Start Time
 * @method string getEndTime() Obtain Offline Cycle Mode, Effective Date - End Time
 * @method void setEndTime(string $EndTime) Set Offline Cycle Mode, Effective Date - End Time
 * @method string getCycleType() Obtain Offline Cycle Mode, Scheduling Period 
MINUTE_CYCLE:I,
HOUR_CYCLE:H,
DAY_CYCLE:D,
WEEK_CYCLE:W,
MONTH_CYCLE:M
 * @method void setCycleType(string $CycleType) Set Offline Cycle Mode, Scheduling Period 
MINUTE_CYCLE:I,
HOUR_CYCLE:H,
DAY_CYCLE:D,
WEEK_CYCLE:W,
MONTH_CYCLE:M
 * @method integer getCycleStep() Obtain Offline Cycle Mode, Scheduling Step
 * @method void setCycleStep(integer $CycleStep) Set Offline Cycle Mode, Scheduling Step
 * @method string getTaskAction() Obtain Offline Cycle Mode, Specified Time
 * @method void setTaskAction(string $TaskAction) Set Offline Cycle Mode, Specified Time
 * @method integer getDelayTime() Obtain Delayed Execution Time, Unit: Minute, Optional: <0-1439
 * @method void setDelayTime(integer $DelayTime) Set Delayed Execution Time, Unit: Minute, Optional: <0-1439
 * @method string getDatabaseId() Obtain Database ID
 * @method void setDatabaseId(string $DatabaseId) Set Database ID
 * @method string getDatasourceId() Obtain Data Source ID
 * @method void setDatasourceId(string $DatasourceId) Set Data Source ID
 * @method string getTableId() Obtain Data Table ID
 * @method void setTableId(string $TableId) Set Data Table ID
 * @method string getExecEngineType() Obtain Running Execution Engine, Requests Default Execution Engine of the Data Source if Not Specified
 * @method void setExecEngineType(string $ExecEngineType) Set Running Execution Engine, Requests Default Execution Engine of the Data Source if Not Specified
 * @method array getTriggerTypes() Obtain Trigger scenario
 * @method void setTriggerTypes(array $TriggerTypes) Set Trigger scenario
 */
class ModifyExecStrategyRequest extends AbstractModel
{
    /**
     * @var integer Rule Group ID
     */
    public $RuleGroupId;

    /**
     * @var integer Monitoring Type 1. Not Configured, 2. Associated Production Scheduling, 3. Offline Cycle Detection
     */
    public $MonitorType;

    /**
     * @var string Compute Queue
     */
    public $ExecQueue;

    /**
     * @var string Execution Resource Group ID
     */
    public $ExecutorGroupId;

    /**
     * @var string Execution Resource Group Name
     */
    public $ExecutorGroupName;

    /**
     * @var array Associated Production Scheduling Task List
     */
    public $Tasks;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Offline Cycle Mode, Effective Date - Start Time
     */
    public $StartTime;

    /**
     * @var string Offline Cycle Mode, Effective Date - End Time
     */
    public $EndTime;

    /**
     * @var string Offline Cycle Mode, Scheduling Period 
MINUTE_CYCLE:I,
HOUR_CYCLE:H,
DAY_CYCLE:D,
WEEK_CYCLE:W,
MONTH_CYCLE:M
     */
    public $CycleType;

    /**
     * @var integer Offline Cycle Mode, Scheduling Step
     */
    public $CycleStep;

    /**
     * @var string Offline Cycle Mode, Specified Time
     */
    public $TaskAction;

    /**
     * @var integer Delayed Execution Time, Unit: Minute, Optional: <0-1439
     */
    public $DelayTime;

    /**
     * @var string Database ID
     */
    public $DatabaseId;

    /**
     * @var string Data Source ID
     */
    public $DatasourceId;

    /**
     * @var string Data Table ID
     */
    public $TableId;

    /**
     * @var string Running Execution Engine, Requests Default Execution Engine of the Data Source if Not Specified
     */
    public $ExecEngineType;

    /**
     * @var array Trigger scenario
     */
    public $TriggerTypes;

    /**
     * @param integer $RuleGroupId Rule Group ID
     * @param integer $MonitorType Monitoring Type 1. Not Configured, 2. Associated Production Scheduling, 3. Offline Cycle Detection
     * @param string $ExecQueue Compute Queue
     * @param string $ExecutorGroupId Execution Resource Group ID
     * @param string $ExecutorGroupName Execution Resource Group Name
     * @param array $Tasks Associated Production Scheduling Task List
     * @param string $ProjectId Project ID
     * @param string $StartTime Offline Cycle Mode, Effective Date - Start Time
     * @param string $EndTime Offline Cycle Mode, Effective Date - End Time
     * @param string $CycleType Offline Cycle Mode, Scheduling Period 
MINUTE_CYCLE:I,
HOUR_CYCLE:H,
DAY_CYCLE:D,
WEEK_CYCLE:W,
MONTH_CYCLE:M
     * @param integer $CycleStep Offline Cycle Mode, Scheduling Step
     * @param string $TaskAction Offline Cycle Mode, Specified Time
     * @param integer $DelayTime Delayed Execution Time, Unit: Minute, Optional: <0-1439
     * @param string $DatabaseId Database ID
     * @param string $DatasourceId Data Source ID
     * @param string $TableId Data Table ID
     * @param string $ExecEngineType Running Execution Engine, Requests Default Execution Engine of the Data Source if Not Specified
     * @param array $TriggerTypes Trigger scenario
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
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

        if (array_key_exists("TaskAction",$param) and $param["TaskAction"] !== null) {
            $this->TaskAction = $param["TaskAction"];
        }

        if (array_key_exists("DelayTime",$param) and $param["DelayTime"] !== null) {
            $this->DelayTime = $param["DelayTime"];
        }

        if (array_key_exists("DatabaseId",$param) and $param["DatabaseId"] !== null) {
            $this->DatabaseId = $param["DatabaseId"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("ExecEngineType",$param) and $param["ExecEngineType"] !== null) {
            $this->ExecEngineType = $param["ExecEngineType"];
        }

        if (array_key_exists("TriggerTypes",$param) and $param["TriggerTypes"] !== null) {
            $this->TriggerTypes = $param["TriggerTypes"];
        }
    }
}
