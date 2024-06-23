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
 * DescribeSchedulerInstanceStatus request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getTaskTypeId() Obtain Task Type ID
 * @method void setTaskTypeId(string $TaskTypeId) Set Task Type ID
 * @method string getExecutionGroupId() Obtain Execution Resource Group ID
 * @method void setExecutionGroupId(string $ExecutionGroupId) Set Execution Resource Group ID
 * @method string getExecutionGroupName() Obtain Execution Resource Group Name
 * @method void setExecutionGroupName(string $ExecutionGroupName) Set Execution Resource Group Name
 * @method string getStartTime() Obtain Start Time
 * @method void setStartTime(string $StartTime) Set Start Time
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 * @method string getInCharge() Obtain Person in Charge
 * @method void setInCharge(string $InCharge) Set Person in Charge
 * @method string getWorkflowId() Obtain Workflow ID
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID
 */
class DescribeSchedulerInstanceStatusRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Task Type ID
     */
    public $TaskTypeId;

    /**
     * @var string Execution Resource Group ID
     */
    public $ExecutionGroupId;

    /**
     * @var string Execution Resource Group Name
     */
    public $ExecutionGroupName;

    /**
     * @var string Start Time
     */
    public $StartTime;

    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @var string Person in Charge
     */
    public $InCharge;

    /**
     * @var string Workflow ID
     */
    public $WorkflowId;

    /**
     * @param string $ProjectId Project ID
     * @param string $TaskTypeId Task Type ID
     * @param string $ExecutionGroupId Execution Resource Group ID
     * @param string $ExecutionGroupName Execution Resource Group Name
     * @param string $StartTime Start Time
     * @param string $EndTime End time
     * @param string $InCharge Person in Charge
     * @param string $WorkflowId Workflow ID
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

        if (array_key_exists("TaskTypeId",$param) and $param["TaskTypeId"] !== null) {
            $this->TaskTypeId = $param["TaskTypeId"];
        }

        if (array_key_exists("ExecutionGroupId",$param) and $param["ExecutionGroupId"] !== null) {
            $this->ExecutionGroupId = $param["ExecutionGroupId"];
        }

        if (array_key_exists("ExecutionGroupName",$param) and $param["ExecutionGroupName"] !== null) {
            $this->ExecutionGroupName = $param["ExecutionGroupName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("InCharge",$param) and $param["InCharge"] !== null) {
            $this->InCharge = $param["InCharge"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }
    }
}
