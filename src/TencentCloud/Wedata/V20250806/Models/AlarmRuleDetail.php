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
 * Detailed configuration of the Alarm rule.
 *
 * @method integer getTrigger() Obtain Failure Trigger Condition

1: Trigger on the first failure

2: Trigger after all retries are completed (default)
 * @method void setTrigger(integer $Trigger) Set Failure Trigger Condition

1: Trigger on the first failure

2: Trigger after all retries are completed (default)
 * @method integer getDataBackfillOrRerunTrigger() Obtain Backfill/Rerun Trigger Condition

1: Trigger on the first failure

2: Trigger after all retries are completed
 * @method void setDataBackfillOrRerunTrigger(integer $DataBackfillOrRerunTrigger) Set Backfill/Rerun Trigger Condition

1: Trigger on the first failure

2: Trigger after all retries are completed
 * @method array getTimeOutExtInfo() Obtain Timeout configuration of the periodic instance.

 * @method void setTimeOutExtInfo(array $TimeOutExtInfo) Set Timeout configuration of the periodic instance.

 * @method array getDataBackfillOrRerunTimeOutExtInfo() Obtain Specifies the timeout configuration details for rerunning a backfill instance.

 * @method void setDataBackfillOrRerunTimeOutExtInfo(array $DataBackfillOrRerunTimeOutExtInfo) Set Specifies the timeout configuration details for rerunning a backfill instance.

 * @method array getProjectInstanceStatisticsAlarmInfoList() Obtain Specifies the detail of Alarm configuration for project fluctuation.
 * @method void setProjectInstanceStatisticsAlarmInfoList(array $ProjectInstanceStatisticsAlarmInfoList) Set Specifies the detail of Alarm configuration for project fluctuation.
 * @method array getReconciliationExtInfo() Obtain Describes the Alarm configuration information for offline integration reconciliation.
 * @method void setReconciliationExtInfo(array $ReconciliationExtInfo) Set Describes the Alarm configuration information for offline integration reconciliation.
 * @method array getMonitorWhiteTasks() Obtain Configure allowlist for monitored object.
 * @method void setMonitorWhiteTasks(array $MonitorWhiteTasks) Set Configure allowlist for monitored object.
 * @method array getWorkflowCompletionTimeCycleExtInfo() Obtain 3.0 Workflow completion time (period) Alarm policy.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkflowCompletionTimeCycleExtInfo(array $WorkflowCompletionTimeCycleExtInfo) Set 3.0 Workflow completion time (period) Alarm policy.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getWorkflowExecutionTrigger() Obtain Workflow execution triggers the Alarm condition.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkflowExecutionTrigger(integer $WorkflowExecutionTrigger) Set Workflow execution triggers the Alarm condition.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getWorkflowExecutionFailureTrigger() Obtain Workflow execution failure Alarm condition.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkflowExecutionFailureTrigger(integer $WorkflowExecutionFailureTrigger) Set Workflow execution failure Alarm condition.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getWorkflowExecutionSuccessTrigger() Obtain Workflow execution successful Alarm condition.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkflowExecutionSuccessTrigger(integer $WorkflowExecutionSuccessTrigger) Set Workflow execution successful Alarm condition.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AlarmRuleDetail extends AbstractModel
{
    /**
     * @var integer Failure Trigger Condition

1: Trigger on the first failure

2: Trigger after all retries are completed (default)
     */
    public $Trigger;

    /**
     * @var integer Backfill/Rerun Trigger Condition

1: Trigger on the first failure

2: Trigger after all retries are completed
     */
    public $DataBackfillOrRerunTrigger;

    /**
     * @var array Timeout configuration of the periodic instance.

     */
    public $TimeOutExtInfo;

    /**
     * @var array Specifies the timeout configuration details for rerunning a backfill instance.

     */
    public $DataBackfillOrRerunTimeOutExtInfo;

    /**
     * @var array Specifies the detail of Alarm configuration for project fluctuation.
     */
    public $ProjectInstanceStatisticsAlarmInfoList;

    /**
     * @var array Describes the Alarm configuration information for offline integration reconciliation.
     */
    public $ReconciliationExtInfo;

    /**
     * @var array Configure allowlist for monitored object.
     */
    public $MonitorWhiteTasks;

    /**
     * @var array 3.0 Workflow completion time (period) Alarm policy.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkflowCompletionTimeCycleExtInfo;

    /**
     * @var integer Workflow execution triggers the Alarm condition.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkflowExecutionTrigger;

    /**
     * @var integer Workflow execution failure Alarm condition.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkflowExecutionFailureTrigger;

    /**
     * @var integer Workflow execution successful Alarm condition.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkflowExecutionSuccessTrigger;

    /**
     * @param integer $Trigger Failure Trigger Condition

1: Trigger on the first failure

2: Trigger after all retries are completed (default)
     * @param integer $DataBackfillOrRerunTrigger Backfill/Rerun Trigger Condition

1: Trigger on the first failure

2: Trigger after all retries are completed
     * @param array $TimeOutExtInfo Timeout configuration of the periodic instance.

     * @param array $DataBackfillOrRerunTimeOutExtInfo Specifies the timeout configuration details for rerunning a backfill instance.

     * @param array $ProjectInstanceStatisticsAlarmInfoList Specifies the detail of Alarm configuration for project fluctuation.
     * @param array $ReconciliationExtInfo Describes the Alarm configuration information for offline integration reconciliation.
     * @param array $MonitorWhiteTasks Configure allowlist for monitored object.
     * @param array $WorkflowCompletionTimeCycleExtInfo 3.0 Workflow completion time (period) Alarm policy.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $WorkflowExecutionTrigger Workflow execution triggers the Alarm condition.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $WorkflowExecutionFailureTrigger Workflow execution failure Alarm condition.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $WorkflowExecutionSuccessTrigger Workflow execution successful Alarm condition.
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
        if (array_key_exists("Trigger",$param) and $param["Trigger"] !== null) {
            $this->Trigger = $param["Trigger"];
        }

        if (array_key_exists("DataBackfillOrRerunTrigger",$param) and $param["DataBackfillOrRerunTrigger"] !== null) {
            $this->DataBackfillOrRerunTrigger = $param["DataBackfillOrRerunTrigger"];
        }

        if (array_key_exists("TimeOutExtInfo",$param) and $param["TimeOutExtInfo"] !== null) {
            $this->TimeOutExtInfo = [];
            foreach ($param["TimeOutExtInfo"] as $key => $value){
                $obj = new TimeOutStrategyInfo();
                $obj->deserialize($value);
                array_push($this->TimeOutExtInfo, $obj);
            }
        }

        if (array_key_exists("DataBackfillOrRerunTimeOutExtInfo",$param) and $param["DataBackfillOrRerunTimeOutExtInfo"] !== null) {
            $this->DataBackfillOrRerunTimeOutExtInfo = [];
            foreach ($param["DataBackfillOrRerunTimeOutExtInfo"] as $key => $value){
                $obj = new TimeOutStrategyInfo();
                $obj->deserialize($value);
                array_push($this->DataBackfillOrRerunTimeOutExtInfo, $obj);
            }
        }

        if (array_key_exists("ProjectInstanceStatisticsAlarmInfoList",$param) and $param["ProjectInstanceStatisticsAlarmInfoList"] !== null) {
            $this->ProjectInstanceStatisticsAlarmInfoList = [];
            foreach ($param["ProjectInstanceStatisticsAlarmInfoList"] as $key => $value){
                $obj = new ProjectInstanceStatisticsAlarmInfo();
                $obj->deserialize($value);
                array_push($this->ProjectInstanceStatisticsAlarmInfoList, $obj);
            }
        }

        if (array_key_exists("ReconciliationExtInfo",$param) and $param["ReconciliationExtInfo"] !== null) {
            $this->ReconciliationExtInfo = [];
            foreach ($param["ReconciliationExtInfo"] as $key => $value){
                $obj = new ReconciliationStrategyInfo();
                $obj->deserialize($value);
                array_push($this->ReconciliationExtInfo, $obj);
            }
        }

        if (array_key_exists("MonitorWhiteTasks",$param) and $param["MonitorWhiteTasks"] !== null) {
            $this->MonitorWhiteTasks = [];
            foreach ($param["MonitorWhiteTasks"] as $key => $value){
                $obj = new MonitorWhiteTask();
                $obj->deserialize($value);
                array_push($this->MonitorWhiteTasks, $obj);
            }
        }

        if (array_key_exists("WorkflowCompletionTimeCycleExtInfo",$param) and $param["WorkflowCompletionTimeCycleExtInfo"] !== null) {
            $this->WorkflowCompletionTimeCycleExtInfo = [];
            foreach ($param["WorkflowCompletionTimeCycleExtInfo"] as $key => $value){
                $obj = new TimeOutStrategyInfo();
                $obj->deserialize($value);
                array_push($this->WorkflowCompletionTimeCycleExtInfo, $obj);
            }
        }

        if (array_key_exists("WorkflowExecutionTrigger",$param) and $param["WorkflowExecutionTrigger"] !== null) {
            $this->WorkflowExecutionTrigger = $param["WorkflowExecutionTrigger"];
        }

        if (array_key_exists("WorkflowExecutionFailureTrigger",$param) and $param["WorkflowExecutionFailureTrigger"] !== null) {
            $this->WorkflowExecutionFailureTrigger = $param["WorkflowExecutionFailureTrigger"];
        }

        if (array_key_exists("WorkflowExecutionSuccessTrigger",$param) and $param["WorkflowExecutionSuccessTrigger"] !== null) {
            $this->WorkflowExecutionSuccessTrigger = $param["WorkflowExecutionSuccessTrigger"];
        }
    }
}
