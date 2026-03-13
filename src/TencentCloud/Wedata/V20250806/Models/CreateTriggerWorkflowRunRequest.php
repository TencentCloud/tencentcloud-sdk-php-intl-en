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
 * CreateTriggerWorkflowRun request structure.
 *
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method string getWorkflowId() Obtain Workflow ID.
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID.
 * @method array getAdvancedParams() Obtain Custom running parameters. if empty or null, use the latest configuration of the workflow.
 * @method void setAdvancedParams(array $AdvancedParams) Set Custom running parameters. if empty or null, use the latest configuration of the workflow.
 * @method array getTaskIds() Obtain This time, run the specified task ID set. if it is null or empty, run all.
 * @method void setTaskIds(array $TaskIds) Set This time, run the specified task ID set. if it is null or empty, run all.
 * @method string getSchedulingResourceGroupId() Obtain Specified scheduling resource group id. uses the original resource group by default if left empty.
 * @method void setSchedulingResourceGroupId(string $SchedulingResourceGroupId) Set Specified scheduling resource group id. uses the original resource group by default if left empty.
 * @method string getIntegrationResourceGroupId() Obtain Specified integration resource group id. uses the original resource group if left empty.
 * @method void setIntegrationResourceGroupId(string $IntegrationResourceGroupId) Set Specified integration resource group id. uses the original resource group if left empty.
 */
class CreateTriggerWorkflowRunRequest extends AbstractModel
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
     * @var array Custom running parameters. if empty or null, use the latest configuration of the workflow.
     */
    public $AdvancedParams;

    /**
     * @var array This time, run the specified task ID set. if it is null or empty, run all.
     */
    public $TaskIds;

    /**
     * @var string Specified scheduling resource group id. uses the original resource group by default if left empty.
     */
    public $SchedulingResourceGroupId;

    /**
     * @var string Specified integration resource group id. uses the original resource group if left empty.
     */
    public $IntegrationResourceGroupId;

    /**
     * @param string $ProjectId Project ID.
     * @param string $WorkflowId Workflow ID.
     * @param array $AdvancedParams Custom running parameters. if empty or null, use the latest configuration of the workflow.
     * @param array $TaskIds This time, run the specified task ID set. if it is null or empty, run all.
     * @param string $SchedulingResourceGroupId Specified scheduling resource group id. uses the original resource group by default if left empty.
     * @param string $IntegrationResourceGroupId Specified integration resource group id. uses the original resource group if left empty.
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

        if (array_key_exists("SchedulingResourceGroupId",$param) and $param["SchedulingResourceGroupId"] !== null) {
            $this->SchedulingResourceGroupId = $param["SchedulingResourceGroupId"];
        }

        if (array_key_exists("IntegrationResourceGroupId",$param) and $param["IntegrationResourceGroupId"] !== null) {
            $this->IntegrationResourceGroupId = $param["IntegrationResourceGroupId"];
        }
    }
}
