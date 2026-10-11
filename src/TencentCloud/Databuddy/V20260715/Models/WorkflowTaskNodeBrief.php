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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Brief information of workflow task nodes in a workflow list item
 *
 * @method string getWorkflowId() Obtain <p>Workflow ID</p>
 * @method void setWorkflowId(string $WorkflowId) Set <p>Workflow ID</p>
 * @method string getTaskId() Obtain <p>Task ID.</p>
 * @method void setTaskId(string $TaskId) Set <p>Task ID.</p>
 * @method string getTaskName() Obtain <p>Task name.</p>
 * @method void setTaskName(string $TaskName) Set <p>Task name.</p>
 * @method string getTaskTypeName() Obtain <p>Task Type Name. For details, see the TaskTypeName field description in the data structure TaskType.</p>
 * @method void setTaskTypeName(string $TaskTypeName) Set <p>Task Type Name. For details, see the TaskTypeName field description in the data structure TaskType.</p>
 * @method array getDependOnList() Obtain <p>Task dependency list.</p>
 * @method void setDependOnList(array $DependOnList) Set <p>Task dependency list.</p>
 * @method string getResourceGroupId() Obtain <p>Task resource group ID.</p>
 * @method void setResourceGroupId(string $ResourceGroupId) Set <p>Task resource group ID.</p>
 * @method string getResourceGroupName() Obtain <p>Task resource group name.</p>
 * @method void setResourceGroupName(string $ResourceGroupName) Set <p>Task resource group name.</p>
 * @method float getLeftCoordinate() Obtain <p>Task X coordinate</p>
 * @method void setLeftCoordinate(float $LeftCoordinate) Set <p>Task X coordinate</p>
 * @method float getTopCoordinate() Obtain <p>Task Y-axis coordinate</p>
 * @method void setTopCoordinate(float $TopCoordinate) Set <p>Task Y-axis coordinate</p>
 * @method TaskRetryStrategy getTaskRetryStrategy() Obtain <p>Task retry policy</p>
 * @method void setTaskRetryStrategy(TaskRetryStrategy $TaskRetryStrategy) Set <p>Task retry policy</p>
 * @method string getDependOnRunCondition() Obtain <p>Task dependency run conditions</p><p>ALL_SUCCESS: All successful: All upstream dependency tasks have been executed and succeeded<br>ONE_SUCCESS: At least one successful: At least one upstream dependency task succeeded<br>NONE_FAILED: No failure currently: No dependency task failed, and at least one dependency task is running<br>ALL_DONE: All completed: All upstream dependency tasks have been executed and completed (regardless of success or failure)<br>ONE_FAILED: At least one failed: At least one upstream dependency task failed<br>ALL_FAILED: All failed: All upstream dependency tasks failed<br>ALL_DONE_AT_LEAST_ONE_SUCCESS: All upstream completed and at least one successful: When all upstream dependency tasks reach a final state, a dependency check is performed. If at least one succeeded, the dependency check passes; otherwise, the run is skipped<br>ALL_SKIPPED: All upstream completed, no skipped run: When all upstream dependency tasks reach a final state, a dependency check is performed. If all upstream states are successful, failed, or upstream failed state, the dependency check passes; otherwise, the run is skipped<br>ONE_DONE: At least one completed: Once at least one upstream task is completed, a dependency check is performed, and the dependency check passes; otherwise, it keeps waiting for upstream<br>ALL_DONE_NONE_FAILED_AT_LEAST_ONE_SUCCESS: All upstream completed, none failed, at least one successful: When all upstream dependency tasks reach a final state, a dependency check is performed. If no upstream task failed and at least one succeeded, the dependency check passes; otherwise, the run is skipped<br>NONE_SKIPPED: All upstream completed, no skipped run: When all upstream dependency tasks reach a final state, a dependency check is performed. If all upstream states are successful, failed, or upstream failed state, the dependency check passes; otherwise, the run is skipped<br>ALL_DONE_AT_LEAST_ONE_FAILED: All upstream completed and at least one failed: When all upstream dependency tasks reach a final state, a dependency check is performed. If at least one failed, the dependency check passes; otherwise, the run is skipped<br>ADVANCED: Configured when the run condition is in advanced mode</p>
 * @method void setDependOnRunCondition(string $DependOnRunCondition) Set <p>Task dependency run conditions</p><p>ALL_SUCCESS: All successful: All upstream dependency tasks have been executed and succeeded<br>ONE_SUCCESS: At least one successful: At least one upstream dependency task succeeded<br>NONE_FAILED: No failure currently: No dependency task failed, and at least one dependency task is running<br>ALL_DONE: All completed: All upstream dependency tasks have been executed and completed (regardless of success or failure)<br>ONE_FAILED: At least one failed: At least one upstream dependency task failed<br>ALL_FAILED: All failed: All upstream dependency tasks failed<br>ALL_DONE_AT_LEAST_ONE_SUCCESS: All upstream completed and at least one successful: When all upstream dependency tasks reach a final state, a dependency check is performed. If at least one succeeded, the dependency check passes; otherwise, the run is skipped<br>ALL_SKIPPED: All upstream completed, no skipped run: When all upstream dependency tasks reach a final state, a dependency check is performed. If all upstream states are successful, failed, or upstream failed state, the dependency check passes; otherwise, the run is skipped<br>ONE_DONE: At least one completed: Once at least one upstream task is completed, a dependency check is performed, and the dependency check passes; otherwise, it keeps waiting for upstream<br>ALL_DONE_NONE_FAILED_AT_LEAST_ONE_SUCCESS: All upstream completed, none failed, at least one successful: When all upstream dependency tasks reach a final state, a dependency check is performed. If no upstream task failed and at least one succeeded, the dependency check passes; otherwise, the run is skipped<br>NONE_SKIPPED: All upstream completed, no skipped run: When all upstream dependency tasks reach a final state, a dependency check is performed. If all upstream states are successful, failed, or upstream failed state, the dependency check passes; otherwise, the run is skipped<br>ALL_DONE_AT_LEAST_ONE_FAILED: All upstream completed and at least one failed: When all upstream dependency tasks reach a final state, a dependency check is performed. If at least one failed, the dependency check passes; otherwise, the run is skipped<br>ADVANCED: Configured when the run condition is in advanced mode</p>
 * @method AdvancedDependencyConfig getAdvancedDependencyConfig() Obtain <p>Advanced dependency configuration</p>
 * @method void setAdvancedDependencyConfig(AdvancedDependencyConfig $AdvancedDependencyConfig) Set <p>Advanced dependency configuration</p>
 * @method WorkflowTaskNodeBrief getInnerTask() Obtain <p>Built-in workflow task node</p>
 * @method void setInnerTask(WorkflowTaskNodeBrief $InnerTask) Set <p>Built-in workflow task node</p>
 */
class WorkflowTaskNodeBrief extends AbstractModel
{
    /**
     * @var string <p>Workflow ID</p>
     */
    public $WorkflowId;

    /**
     * @var string <p>Task ID.</p>
     */
    public $TaskId;

    /**
     * @var string <p>Task name.</p>
     */
    public $TaskName;

    /**
     * @var string <p>Task Type Name. For details, see the TaskTypeName field description in the data structure TaskType.</p>
     */
    public $TaskTypeName;

    /**
     * @var array <p>Task dependency list.</p>
     */
    public $DependOnList;

    /**
     * @var string <p>Task resource group ID.</p>
     */
    public $ResourceGroupId;

    /**
     * @var string <p>Task resource group name.</p>
     */
    public $ResourceGroupName;

    /**
     * @var float <p>Task X coordinate</p>
     */
    public $LeftCoordinate;

    /**
     * @var float <p>Task Y-axis coordinate</p>
     */
    public $TopCoordinate;

    /**
     * @var TaskRetryStrategy <p>Task retry policy</p>
     */
    public $TaskRetryStrategy;

    /**
     * @var string <p>Task dependency run conditions</p><p>ALL_SUCCESS: All successful: All upstream dependency tasks have been executed and succeeded<br>ONE_SUCCESS: At least one successful: At least one upstream dependency task succeeded<br>NONE_FAILED: No failure currently: No dependency task failed, and at least one dependency task is running<br>ALL_DONE: All completed: All upstream dependency tasks have been executed and completed (regardless of success or failure)<br>ONE_FAILED: At least one failed: At least one upstream dependency task failed<br>ALL_FAILED: All failed: All upstream dependency tasks failed<br>ALL_DONE_AT_LEAST_ONE_SUCCESS: All upstream completed and at least one successful: When all upstream dependency tasks reach a final state, a dependency check is performed. If at least one succeeded, the dependency check passes; otherwise, the run is skipped<br>ALL_SKIPPED: All upstream completed, no skipped run: When all upstream dependency tasks reach a final state, a dependency check is performed. If all upstream states are successful, failed, or upstream failed state, the dependency check passes; otherwise, the run is skipped<br>ONE_DONE: At least one completed: Once at least one upstream task is completed, a dependency check is performed, and the dependency check passes; otherwise, it keeps waiting for upstream<br>ALL_DONE_NONE_FAILED_AT_LEAST_ONE_SUCCESS: All upstream completed, none failed, at least one successful: When all upstream dependency tasks reach a final state, a dependency check is performed. If no upstream task failed and at least one succeeded, the dependency check passes; otherwise, the run is skipped<br>NONE_SKIPPED: All upstream completed, no skipped run: When all upstream dependency tasks reach a final state, a dependency check is performed. If all upstream states are successful, failed, or upstream failed state, the dependency check passes; otherwise, the run is skipped<br>ALL_DONE_AT_LEAST_ONE_FAILED: All upstream completed and at least one failed: When all upstream dependency tasks reach a final state, a dependency check is performed. If at least one failed, the dependency check passes; otherwise, the run is skipped<br>ADVANCED: Configured when the run condition is in advanced mode</p>
     */
    public $DependOnRunCondition;

    /**
     * @var AdvancedDependencyConfig <p>Advanced dependency configuration</p>
     */
    public $AdvancedDependencyConfig;

    /**
     * @var WorkflowTaskNodeBrief <p>Built-in workflow task node</p>
     */
    public $InnerTask;

    /**
     * @param string $WorkflowId <p>Workflow ID</p>
     * @param string $TaskId <p>Task ID.</p>
     * @param string $TaskName <p>Task name.</p>
     * @param string $TaskTypeName <p>Task Type Name. For details, see the TaskTypeName field description in the data structure TaskType.</p>
     * @param array $DependOnList <p>Task dependency list.</p>
     * @param string $ResourceGroupId <p>Task resource group ID.</p>
     * @param string $ResourceGroupName <p>Task resource group name.</p>
     * @param float $LeftCoordinate <p>Task X coordinate</p>
     * @param float $TopCoordinate <p>Task Y-axis coordinate</p>
     * @param TaskRetryStrategy $TaskRetryStrategy <p>Task retry policy</p>
     * @param string $DependOnRunCondition <p>Task dependency run conditions</p><p>ALL_SUCCESS: All successful: All upstream dependency tasks have been executed and succeeded<br>ONE_SUCCESS: At least one successful: At least one upstream dependency task succeeded<br>NONE_FAILED: No failure currently: No dependency task failed, and at least one dependency task is running<br>ALL_DONE: All completed: All upstream dependency tasks have been executed and completed (regardless of success or failure)<br>ONE_FAILED: At least one failed: At least one upstream dependency task failed<br>ALL_FAILED: All failed: All upstream dependency tasks failed<br>ALL_DONE_AT_LEAST_ONE_SUCCESS: All upstream completed and at least one successful: When all upstream dependency tasks reach a final state, a dependency check is performed. If at least one succeeded, the dependency check passes; otherwise, the run is skipped<br>ALL_SKIPPED: All upstream completed, no skipped run: When all upstream dependency tasks reach a final state, a dependency check is performed. If all upstream states are successful, failed, or upstream failed state, the dependency check passes; otherwise, the run is skipped<br>ONE_DONE: At least one completed: Once at least one upstream task is completed, a dependency check is performed, and the dependency check passes; otherwise, it keeps waiting for upstream<br>ALL_DONE_NONE_FAILED_AT_LEAST_ONE_SUCCESS: All upstream completed, none failed, at least one successful: When all upstream dependency tasks reach a final state, a dependency check is performed. If no upstream task failed and at least one succeeded, the dependency check passes; otherwise, the run is skipped<br>NONE_SKIPPED: All upstream completed, no skipped run: When all upstream dependency tasks reach a final state, a dependency check is performed. If all upstream states are successful, failed, or upstream failed state, the dependency check passes; otherwise, the run is skipped<br>ALL_DONE_AT_LEAST_ONE_FAILED: All upstream completed and at least one failed: When all upstream dependency tasks reach a final state, a dependency check is performed. If at least one failed, the dependency check passes; otherwise, the run is skipped<br>ADVANCED: Configured when the run condition is in advanced mode</p>
     * @param AdvancedDependencyConfig $AdvancedDependencyConfig <p>Advanced dependency configuration</p>
     * @param WorkflowTaskNodeBrief $InnerTask <p>Built-in workflow task node</p>
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
        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskTypeName",$param) and $param["TaskTypeName"] !== null) {
            $this->TaskTypeName = $param["TaskTypeName"];
        }

        if (array_key_exists("DependOnList",$param) and $param["DependOnList"] !== null) {
            $this->DependOnList = [];
            foreach ($param["DependOnList"] as $key => $value){
                $obj = new DependOnBrief();
                $obj->deserialize($value);
                array_push($this->DependOnList, $obj);
            }
        }

        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }

        if (array_key_exists("ResourceGroupName",$param) and $param["ResourceGroupName"] !== null) {
            $this->ResourceGroupName = $param["ResourceGroupName"];
        }

        if (array_key_exists("LeftCoordinate",$param) and $param["LeftCoordinate"] !== null) {
            $this->LeftCoordinate = $param["LeftCoordinate"];
        }

        if (array_key_exists("TopCoordinate",$param) and $param["TopCoordinate"] !== null) {
            $this->TopCoordinate = $param["TopCoordinate"];
        }

        if (array_key_exists("TaskRetryStrategy",$param) and $param["TaskRetryStrategy"] !== null) {
            $this->TaskRetryStrategy = new TaskRetryStrategy();
            $this->TaskRetryStrategy->deserialize($param["TaskRetryStrategy"]);
        }

        if (array_key_exists("DependOnRunCondition",$param) and $param["DependOnRunCondition"] !== null) {
            $this->DependOnRunCondition = $param["DependOnRunCondition"];
        }

        if (array_key_exists("AdvancedDependencyConfig",$param) and $param["AdvancedDependencyConfig"] !== null) {
            $this->AdvancedDependencyConfig = new AdvancedDependencyConfig();
            $this->AdvancedDependencyConfig->deserialize($param["AdvancedDependencyConfig"]);
        }

        if (array_key_exists("InnerTask",$param) and $param["InnerTask"] !== null) {
            $this->InnerTask = new WorkflowTaskNodeBrief();
            $this->InnerTask->deserialize($param["InnerTask"]);
        }
    }
}
