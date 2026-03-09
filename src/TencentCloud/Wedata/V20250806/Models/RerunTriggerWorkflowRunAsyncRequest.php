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
 * RerunTriggerWorkflowRunAsync request structure.
 *
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method string getWorkflowId() Obtain Workflow ID.
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID.
 * @method string getWorkflowExecutionId() Obtain Running ID of the workflow.
 * @method void setWorkflowExecutionId(string $WorkflowExecutionId) Set Running ID of the workflow.
 * @method string getExecuteType() Obtain Running mode: ordinary running defaults to all parameters: 1, advanced execution selectable task scope and running parameters: 2.
 * @method void setExecuteType(string $ExecuteType) Set Running mode: ordinary running defaults to all parameters: 1, advanced execution selectable task scope and running parameters: 2.
 * @method array getAdvancedParams() Obtain Custom running parameters filled in when the running type is advanced execution.
 * @method void setAdvancedParams(array $AdvancedParams) Set Custom running parameters filled in when the running type is advanced execution.
 * @method array getTaskIds() Obtain Advanced execution in mode requires the specified task ID set this time.
 * @method void setTaskIds(array $TaskIds) Set Advanced execution in mode requires the specified task ID set this time.
 * @method string getSchedulingResourceGroup() Obtain Specify a scheduling resource group. uses the original scheduling resource group in the default configurations when left empty.
 * @method void setSchedulingResourceGroup(string $SchedulingResourceGroup) Set Specify a scheduling resource group. uses the original scheduling resource group in the default configurations when left empty.
 * @method string getIntegrationResourceGroup() Obtain Specify the integration resource group. uses the original integration resource group in configurations by default when empty.
 * @method void setIntegrationResourceGroup(string $IntegrationResourceGroup) Set Specify the integration resource group. uses the original integration resource group in configurations by default when empty.
 */
class RerunTriggerWorkflowRunAsyncRequest extends AbstractModel
{
    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var string Workflow ID.
     */
    public $WorkflowId;

    /**
     * @var string Running ID of the workflow.
     */
    public $WorkflowExecutionId;

    /**
     * @var string Running mode: ordinary running defaults to all parameters: 1, advanced execution selectable task scope and running parameters: 2.
     */
    public $ExecuteType;

    /**
     * @var array Custom running parameters filled in when the running type is advanced execution.
     */
    public $AdvancedParams;

    /**
     * @var array Advanced execution in mode requires the specified task ID set this time.
     */
    public $TaskIds;

    /**
     * @var string Specify a scheduling resource group. uses the original scheduling resource group in the default configurations when left empty.
     */
    public $SchedulingResourceGroup;

    /**
     * @var string Specify the integration resource group. uses the original integration resource group in configurations by default when empty.
     */
    public $IntegrationResourceGroup;

    /**
     * @param string $ProjectId Project ID.
     * @param string $WorkflowId Workflow ID.
     * @param string $WorkflowExecutionId Running ID of the workflow.
     * @param string $ExecuteType Running mode: ordinary running defaults to all parameters: 1, advanced execution selectable task scope and running parameters: 2.
     * @param array $AdvancedParams Custom running parameters filled in when the running type is advanced execution.
     * @param array $TaskIds Advanced execution in mode requires the specified task ID set this time.
     * @param string $SchedulingResourceGroup Specify a scheduling resource group. uses the original scheduling resource group in the default configurations when left empty.
     * @param string $IntegrationResourceGroup Specify the integration resource group. uses the original integration resource group in configurations by default when empty.
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

        if (array_key_exists("WorkflowExecutionId",$param) and $param["WorkflowExecutionId"] !== null) {
            $this->WorkflowExecutionId = $param["WorkflowExecutionId"];
        }

        if (array_key_exists("ExecuteType",$param) and $param["ExecuteType"] !== null) {
            $this->ExecuteType = $param["ExecuteType"];
        }

        if (array_key_exists("AdvancedParams",$param) and $param["AdvancedParams"] !== null) {
            $this->AdvancedParams = [];
            foreach ($param["AdvancedParams"] as $key => $value){
                $obj = new SchedulingParameter();
                $obj->deserialize($value);
                array_push($this->AdvancedParams, $obj);
            }
        }

        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }

        if (array_key_exists("SchedulingResourceGroup",$param) and $param["SchedulingResourceGroup"] !== null) {
            $this->SchedulingResourceGroup = $param["SchedulingResourceGroup"];
        }

        if (array_key_exists("IntegrationResourceGroup",$param) and $param["IntegrationResourceGroup"] !== null) {
            $this->IntegrationResourceGroup = $param["IntegrationResourceGroup"];
        }
    }
}
